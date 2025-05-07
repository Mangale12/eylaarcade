<?php

namespace App\Http\Controllers;
session_start();

use App\Mail\customMail;
use App\Mail\monthlyMail;
use App\Models\Form;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Facades\Mail;
// use App\Mail\UserNoticMail;
use App\Mail\UserNoticMail as UserNoticMail;
use App\Mail\NoticeUserMail as NoticeUserMail;
use App\Mail\UnsubscribeMail;
use App\Models\FormGame;
use Illuminate\Support\Str;
use App\Models\Account;
use Illuminate\Support\Facades\DB;
use App\Models\GeneralSetting;
use App\Models\History;
use App\Models\Unsubmail;
use Exception;
use App\Models\Theme;
use Illuminate\Support\Facades\Log;
use App\Mail\MassEmailFile;
use App\Models\SameDevice;
use App\Mail\SameDeviceMail;

class FormController extends Controller
{
    public function __construct() {
        // $this->middleware('auth', ['except' => [
        //     'store','checkCaptcha','go','unsubStore',
        //     'unsubscribe'
        // ]]);
    }
    public function create()
    {
        $games = Account::where('status',1)->get();
        return view('frontend.lucky-fish.welcome', compact('games'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|min:3|max:100',
            'facebook_name' => 'required|min:7',
            'game_id' => 'required|min:7|unique:forms,game_id',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:forms,number',
            'state' => 'required',
            'email' => 'required|regex:/(.+)@(.+)\.(.+)/i|min:6|unique:forms,email',
            'referred_by'=>'nullable|exists:forms,game_id',
            
        ]);
        try{
            DB::beginTransaction();
            $form = new Form();
            $form->full_name = $request->full_name;
            $form->email = $request->email;
            $form->number = $request->phone;
            $form->game_id = $request->game_id;
            $form->facebook_name = $request->facebook_name;
            $form->mail = $request->state;
            $form->r_id = $request->referred_by;
            $form->intervals = Carbon::today()->addMonths(1);
            $form->count = 0;
            $form->save();
            FormGame::create([
                'form_id' => $form->id,
                'account_id' => $request->account_id,
                'game_id' => $request->game_id,
    
            ]);
            DB::commit();
            return redirect()->route('forms.success');
            // Mail::to("redninoteat@gmail.com")->send(new SameDeviceMail(json_encode($sameDataEmail)));
                 
        }catch(\Exception $e){
            DB::rollBack();
            dd($e);
            return back()->with("error","sorry something wrong happned !!");
        }
    }
    public function success(){
        return view('frontend.lucky-fish.success');
    }
    public function finalunsub($token){
        $form = Form::where('unsub_token',$token);
        if($form->count() > 0){
            $form2 = $form->first();
        // dd($form->get());
            $form->update([
                'unsub_token' => null
            ]);
            Form::where('id',$form2->id)->delete();
            return redirect()->route('homePage');
        }else{
            Log::channel('spinnerBulk')->info("Someone tried to unscubscribe with the token ".$token);
            return redirect()->route('homePage');
        }
    }
    public function unsubSuccess(){
        return view('frontend.unsubSuccess');
    }
    public function unsubStore(Request $request){
        $id = $request->id;
        Unsubmail::where('form_id',$id)->update([
            'status' => 0
        ]);
        Form::where('id',$id)->delete();
        return redirect(route('unsubSuccess'));
    }
    public function unsubStore1(Request $request){
        $full_name = $request->full_name;
        $number = $request->number;
        $email = $request->email;
        if(Form::where(['full_name' => $full_name,'number' => $number,'email' => $email])->count() > 0){
            $token_id = Str::random(32);
            $form = Form::where(['full_name' => $full_name,'number' => $number,'email' => $email])->update([
                'unsub_token' => $token_id
            ]);
            $form = Form::where(['full_name' => $full_name,'number' => $number,'email' => $email])->first()->toArray();
            // $message = "<h2>It's not the same without you !</h2><br><p>You've been successfully unsubscribed.</p>";
            $settings = GeneralSetting::where('id',1)->first();
            $message = "<h2>It's not the same without you !</h2>";
            $data = [
                'message' => $message,
                'subject' => 'Unsubscribe Email',
                'theme' => ($settings->theme),
                'unsub_token' => $token_id
            ];
            try
            {
                Mail::to($form['email'])->send(new UnsubscribeMail(json_encode($data)));
                Log::channel('spinnerBulk')->info("Unscubscribe mail sent successfully to ".$form['email']);
                // return redirect()->route('forms.unsubscribe')->withSuccess(['success' => 'Please check your email for further process.']);   
                return redirect()->back()->withInput()->with('success', 'Please check your email for further process.');
            }
            catch(\Exception $e)
            {
                $bug = $e->getMessage();
                Log::channel('spinnerBulk')->info($bug);
                return redirect()->back()->withInput()->with('error', $bug);
            }
        }else{
            return redirect()->route('forms.unsubscribe')->withErrors(['error' => 'Sorry We could not identify you.']);      
        }
    }
    public function unsubscribe()
    {
        return view('frontend.unsub');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function checkCaptcha(Request $request){
         $entered_captcha=strtoupper($request->captcha);
        $generated_captcha=strtoupper($_SESSION['captcha_token']);
        if($entered_captcha!=$generated_captcha) {
            return Response::json('false');
        }
        return Response::json('true');
     }
   
    
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    // public function edit(Form $form)
    // {

    //     return view('forms.edit', compact('form'));
    // }
      public function edit($id)
    {
        $form = Form::where('id',$id)->first();

        return view('forms.edit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $form = Form::find($id);
        $this->validate($request, [
            'full_name' => 'required',
           
            'number' => 'required',
            
        ]);
        $form->full_name = $request->full_name;
        $form->email = $request->email;
        $form->intervals = $request->intervals;
        
        $form->number = $request->number;
          $form->count = $request->count;
        $form->note = $request->note;
        $form->facebook_name = $request->facebook_name;
        $form->game_id = $request->game_id;
        $form->save();
        return redirect(route('home'))->with('message', " Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $form = Form::where('id',$id)->delete();
    //   Form::find($id)->delete($id);
  
   return redirect(route('home'))->with('message', " Deleted Successfully");
    }
    
      public function saveNote(Request $request)
    {
        $formdata = array(
            'note'       =>   isset($request->note)?($request->note):null,
        );
        $sql = Form::find($request->cid);  
        $sql->note = isset($request->note)?($request->note):null;
        if(!$sql->save()){
            return Response::json(['error' => $sql],404);
        }
            return Response::json('Note Saved');
    }
    
    public function restorePlayers($id)
    {
        $form = Form::withTrashed()->find($id);
        if(!is_null($form))
        {
            $form->restore();
        }
          return redirect(route('home'))->with('message', " Player restored Successfully");
    }
    
     public function forceDeletePlayers($id)
    {
        $form = Form::withTrashed()->find($id);
        if(!is_null($form))
        {
            $form->forceDelete();
        }
          return redirect(route('home'))->with('message', " Player deleted Successfully");
    }
 
}
