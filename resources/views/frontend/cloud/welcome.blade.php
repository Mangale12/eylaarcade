@extends('frontend.cloud.main')
@section('title', 'Registration')
@section('content')
<div class="page-wrapper font-robo">
   <div class="page-wrapper font-robo">
      <div class="wrapper wrapper--w680">
         <div class="card card-1 py-5">
            <!--<div class="card-heading">-->
            <!--</div>-->
            <div>
               <style>
                  @import url('https://fonts.cdnfonts.com/css/bring-race');
                  @import url('https://fonts.cdnfonts.com/css/games');
                  @import url('https://fonts.cdnfonts.com/css/merchandise');
                  .new-text{
                      font-family: 'MERCHANDISE', sans-serif;
                      color:#f5f1ec;
                      letter-spacing: 4px;
                  }
                  @media screen and (max-width: 600px) {
                      
                      #cloud1, #cloud2 {
                        display: none;
                      }
                      .text-center-p{
                        padding: 0 11px;
                        text-align: center;
                        font-size: 27px!important;
                      }
                      .next-spin-p{
                          font-size:27px;
                      }
                      .referred-by{
                          margin-left:-24px;
                      }
                       .phone-number{
                            margin-top: 25px;
                    }
                  }
                  .main-header-text{
                        transform:scaleY(2.6);
                  }
                  @import url('https://fonts.cdnfonts.com/css/patrick-hand-sc');
                  .next-spin{
                        font-family: 'MERCHANDISE', sans-serif;
                  }
                  @media (min-width: 1200px) 
                  {
                      .card-1{
                      width: 164%;
                      right: 34%;
                  }
                  .logo{
                      width: 402px;
                      align-items: center;
                      display: inline;
                      position: relative;
                  }
                 
                  @media(min-width: 460px){
                      .welcom-text{
                          font-size: 50px!important;
                          
                      }
                      
                      .text-center{
                              margin: 0rem 1rem;
                      }
                      .text-center-p{
                        margin: 1rem 11rem!important;
                        text-align: center;
                      }
                     .next-spin-p{
                         font-size:2rem;
                     }
                    .text-center-logo {
                        margin: 0rem 18rem;
                    }
                   
                  }
                    
                  input, select{
                      color:white;
                  }
               </style>
               <div class="animated_rainbow_1 next-spin wavy welcom-text" style=" font-size: 1.5rem; margin-top: -2rem;">
                  <span> WELCOME TO THE HANDY GAMES </span>
               </div>
            </div>
            <div class="text-center-p">
               <h3>
                  <span class="animated_rainbow_1 next-spin next-spin-p">Embark on an exhilarating journey by completing the registration process and unlock a world of bonuses and rewards awaiting you!</span>.
               </h3>
               <h4 class="mt-4">
                  <span class="animated_rainbow_1 next-spin" style="font-size:1.4rem">bets on fun with handy bets</span>.
               </h4>
               <!--<h3 class="mt-4">-->
                   
               <!--   <span class="animated_rainbow_1 next-spin" style="font-size:1.6rem">let's conquer together! <br> Be the owner of your luck</span>.-->
               <!--</h3>-->
            </div>
            @php
            $setting = \App\Models\GeneralSetting::first();
            $theme = \App\Models\Theme::where('name',$setting->theme)->first();
            @endphp
            <div class = "text-center-logo logo">
               <img src="{{ asset('images/'.$setting->theme.'/'.$theme->logo) }}" width="220" height="250" class="w-auto" style="max-width: 25%;">
            </div>
            <div class="card-body p-5">
               <!--<h1 style="color:yellow; text-align:center" class="title">Welcome to Noor Games! :-D </br>Fill out the following form to get registered into our room. We will send you the <b>Monthly Match</b> based on the date you joined us as a loyal customer. </br> All the best!!!</h1>-->
               @if ($errors->any())
               <div class="alert alert-danger neon-text-danger mt-3">
                  <ul>
                     @foreach ($errors->all() as $error)
                     <h3>
                        <li>{{ $error }}</li>
                     </h3>
                     @endforeach
                  </ul>
               </div>
               </br>
               @endif
               <form id="regForm" action="{{ route('forms.stores') }}" method="POST" >
                  @csrf
                  
                  
                  <div class="row row-space">
                     <div class="col-md-6 col-sm-12 mt-6">
                        <div class="input-group">
                           <div class = "text-center">
                              <h4><b><span class=" new-text">Full Name</span>*</b></h4>
                           </div>
                           <input class="" type="text" value="{{old('full_name')}}" autocomplete="off" placeholder="Eve Adam" name="full_name" maxlength="20" required>
                           <input class="input--style-1 transparent-input neon-text-danger" id="device-id" type="hidden" value="test" autocomplete="off" name="device_id" maxlength="20">
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 mt-6">
                        <div class="input-group ">
                           <div class="phone-number">
                              <h4><b><span class="new-text ">Phone Number</span>*</b></h4>
                           </div>
                           <input class="" type="tel" value="{{old('number')}}" autocomplete="off" placeholder="XXX XXX XXXX" name="number" maxlength="10" required>
                        </div>
                        <span class="phone-text-display new-text">The number must be 10 characters.</span>
                     </div>
                     <div class="col-md-6 col-sm-12 mt-6 text-left mt-4">
                        <div class="input-group">
                           <div>
                              <h4><b><span class="new-text">State</span>*</b></h4>
                           </div>
                           <div class="my-2 w-100">
                              <select class="w-100 account-select" name="mail" required>
                                 <option value="" disabled selected="selected">Select State</option>
                                 <option value="AL" {{ old('mail')=="AL" ? 'selected' : '' }}>Alabama</option>
                                          <!--<option value="AL">Alabama</option>-->
                                          <option value="AK" {{ old('mail')=="AK" ? 'selected' : '' }}>Alaska</option>
                                          <option value="AZ" {{ old('mail')=="AZ" ? 'selected' : '' }}>Arizona</option>
                                          <option value="AR" {{ old('mail')=="AR" ? 'selected' : '' }}>Arkansas</option>
                                          <option value="CA" {{ old('mail')=="CA" ? 'selected' : '' }}>California</option>
                                          <option value="CO" {{ old('mail')=="CO" ? 'selected' : '' }}>Colorado</option>
                                          <option value="CT" {{ old('mail')=="CT" ? 'selected' : '' }}>Connecticut</option>
                                          <option value="DE" {{ old('mail')=="DE" ? 'selected' : '' }}>Delaware</option>
                                          <option value="DC" {{ old('mail')=="DC" ? 'selected' : '' }}>District Of Columbia</option>
                                          <option value="FL" {{ old('mail')=="FL" ? 'selected' : '' }}>Florida</option>
                                          <option value="GA" {{ old('mail')=="GA" ? 'selected' : '' }}>Georgia</option>
                                          <option value="HI" {{ old('mail')=="HI" ? 'selected' : '' }}>Hawaii</option>
                                          <option value="ID" {{ old('mail')=="ID" ? 'selected' : '' }}>Idaho</option>
                                          <option value="IL" {{ old('mail')=="IL" ? 'selected' : '' }}>Illinois</option>
                                          <option value="IN" {{ old('mail')=="IN" ? 'selected' : '' }}>Indiana</option>
                                          <option value="IA" {{ old('mail')=="IA" ? 'selected' : '' }}>Iowa</option>
                                          <option value="KS" {{ old('mail')=="KS" ? 'selected' : '' }}>Kansas</option>
                                          <option value="KY" {{ old('mail')=="KY" ? 'selected' : '' }}>Kentucky</option>
                                          <option value="LA" {{ old('mail')=="LA" ? 'selected' : '' }}>Louisiana</option>
                                          <option value="ME" {{ old('mail')=="ME" ? 'selected' : '' }}>Maine</option>
                                          <option value="MD" {{ old('mail')=="MD" ? 'selected' : '' }}>Maryland</option>
                                          <option value="MA" {{ old('mail')=="MA" ? 'selected' : '' }}>Massachusetts</option>
                                          <option value="MI" {{ old('mail')=="MI" ? 'selected' : '' }}>Michigan</option>
                                          <option value="MN" {{ old('mail')=="MN" ? 'selected' : '' }}>Minnesota</option>
                                          <option value="MS" {{ old('mail')=="MS" ? 'selected' : '' }}>Mississippi</option>
                                          <option value="MO" {{ old('mail')=="MO" ? 'selected' : '' }}>Missouri</option>
                                          <option value="MT" {{ old('mail')=="MT" ? 'selected' : '' }}>Montana</option>
                                          <option value="NE" {{ old('mail')=="NE" ? 'selected' : '' }}>Nebraska</option>
                                          <option value="NV" {{ old('mail')=="NV" ? 'selected' : '' }}>Nevada</option>
                                          <option value="NH" {{ old('mail')=="NH" ? 'selected' : '' }}>New Hampshire</option>
                                          <option value="NJ" {{ old('mail')=="NJ" ? 'selected' : '' }}>New Jersey</option>
                                          <option value="NM" {{ old('mail')=="NM" ? 'selected' : '' }}>New Mexico</option>
                                          <option value="NY" {{ old('mail')=="NY" ? 'selected' : '' }}>New York</option>
                                          <option value="NC" {{ old('mail')=="NC" ? 'selected' : '' }}>North Carolina</option>
                                          <option value="ND" {{ old('mail')=="ND" ? 'selected' : '' }}>North Dakota</option>
                                          <option value="OH" {{ old('mail')=="OH" ? 'selected' : '' }}>Ohio</option>
                                          <option value="OK" {{ old('mail')=="OK" ? 'selected' : '' }}>Oklahoma</option>
                                          <option value="OR" {{ old('mail')=="OR" ? 'selected' : '' }}>Oregon</option>
                                          <option value="PA" {{ old('mail')=="PA" ? 'selected' : '' }}>Pennsylvania</option>
                                          <option value="RI" {{ old('mail')=="RI" ? 'selected' : '' }}>Rhode Island</option>
                                          <option value="SC" {{ old('mail')=="SC" ? 'selected' : '' }}>South Carolina</option>
                                          <option value="SD" {{ old('mail')=="SD" ? 'selected' : '' }}>South Dakota</option>
                                          <option value="TN" {{ old('mail')=="TN" ? 'selected' : '' }}>Tennessee</option>
                                          <option value="TX" {{ old('mail')=="TX" ? 'selected' : '' }}>Texas</option>
                                          <option value="UT" {{ old('mail')=="UT" ? 'selected' : '' }}>Utah</option>
                                          <option value="VT" {{ old('mail')=="VT" ? 'selected' : '' }}>Vermont</option>
                                          <option value="VA" {{ old('mail')=="VA" ? 'selected' : '' }}>Virginia</option>
                                          <option value="WA" {{ old('mail')=="WA" ? 'selected' : '' }}>Washington</option>
                                          <option value="WV" {{ old('mail')=="WV" ? 'selected' : '' }}>West Virginia</option>
                                          <option value="WI" {{ old('mail')=="WI" ? 'selected' : '' }}>Wisconsin</option>
                                          <option value="WY" {{ old('mail')=="WY" ? 'selected' : '' }}>Wyoming</option>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 mt-4">
                        <div class="input-group">
                           <div class = "text-center">
                              <h4><b><span class="new-text referred-by">Referred By (If Applies)</span></b></h4>
                           </div>
                           <input class="new-text" type="text" value="{{old('r_id')}}" autocomplete="off" placeholder="S_XXxXX" name="r_id" maxlength="15" >
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 mt-4">
                        <div class="input-group">
                           <div>
                              <h4><b><span class="new-text">Email <span style="color:red">*</span></span></b></h4>
                           </div>
                           <input required class="" type="email" value="{{old('email')}}" autocomplete="off" placeholder="name@xyz.com" name="email">
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 mt-4">
                        <div class="input-group">
                           <div class = "text-center">
                              <h4><b><span class="new-text">Facebook Name</span></b></h4>
                           </div>
                           <input class="" type="text" value="{{old('facebook_name')}}" autocomplete="off" placeholder="Your Facebook Name" name="facebook_name" maxlength="20" required>
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 mt-4 text-left">
                        <div class="input-group">
                           <div>
                              <h4><b><span class="new-text">Game</span>*</b></h4>
                           </div>
                           <style>
                              .account-choose .select-items{
                              position: absolute;
                              background-color: #000000e8;
                              }
                              .account-select{
                              font-size: 1rem!important;
                              color: white!important;
                              /*text-shadow:*/
                              /*            0 0 2px #e4e0e0,*/
                              /*            0 0 4px #31cc4b,*/
                              /*            0 0 6px #361ebf,*/
                              /*            0 0 8px rgb(22, 20, 20),*/
                              /*            0 0 10px #584547,*/
                              /*            0 0 12px #139b55,*/
                              /*            0 0 14px #0c8716,*/
                              /*            0 0 16px #0f8b51;*/
                              /* text-shadow: 0 0 2px #b7e0ed, 0 0 4px #b7e0ed, 0 0 6px #b7e0ed, 0 0 8px #b7e0ed, 0 0 10px #b7e0ed, 0 0 12px #b7e0ed, 0 0 14px #b7e0ed, 0 0 16px #b7e0ed!important; */
                              border: 1px solid transparent!important;
                              border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent!important;
                              cursor: pointer!important;
                              background: none!important;
                              }
                              .account-select option{
                              color: #fff!important;
                              text-shadow:
                              0 0 2px #e4e0e0,
                              0 0 4px #31cc4b,
                              0 0 6px #361ebf,
                              0 0 8px rgb(22, 20, 20),
                              0 0 10px #584547,
                              0 0 12px #139b55,
                              0 0 14px #0c8716,
                              0 0 16px #0f8b51;
                              /* text-shadow: 0 0 2px #b7e0ed, 0 0 4px #b7e0ed, 0 0 6px #b7e0ed, 0 0 8px #b7e0ed, 0 0 10px #b7e0ed, 0 0 12px #b7e0ed, 0 0 14px #b7e0ed, 0 0 16px #b7e0ed!important; */
                              border: 1px solid transparent!important;
                              border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent!important;
                              cursor: pointer!important;
                              background: black!important;
                              }
                           </style>
                           <!--custom-select-neon-->
                           <div class="new-select my-2 w-100 account-choose">
                              <select class="w-100 account-select game-select" name="account" required>
                                 <option value="" disabled selected="selected">Select Game</option>
                                 @foreach(\App\Models\Account::where('status', 'active')->get() as $a => $b)
                                 <option value="{{$b->id}}"  data-title="{{$b->title}}" {{ old('account')==$b->id ? 'selected' : '' }}>{{$b->name}}</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                     </div>
            <input type="hidden" class="time_zone" value="" name="time_zone">

                     <div class="col-md-6 col-sm-12 mt-4">
                        <div class="input-group">
                           <div>
                              <h4><b><span class=" new-text">Game Id</span></b></h4>
                           </div>
                           <input class=" game-id-text" type="text" value="{{old('game_id')}}" autocomplete="off" placeholder="SXXXX" name="game_id" maxlength="15" minlength="8" required>
                        </div>
                        <span class="game-id-text-display">The game id must be at least 7 characters.</span>
                     </div>
                  </div>
                  <div class="p-t-20 text-center">
                     <img id="captcha_image" src="https://ak.picdn.net/shutterstock/videos/1020997729/thumb/10.jpg" style="width:200px"> 
                     <text id="refresh-captcha" title="Refresh"  class="mt-3 button ml-2" style="border-radius:8px !important; font-size:13px;"><i class="fa fa-undo" aria-hidden="true"></i></text>
                     <br><br>
                     <div class="input-group justify-content-center border-custom">
                        <div class="m-auto">
                           <h4><b><span class="new-text">Enter characters as shown above</span></b></h4>
                        </div>
                        <br><br>
                        <input class=" captcha-input" type="text" value="" autocomplete="off" placeholder="XXXX" name="captcha_token" maxlength="4" minlength="4" style="text-transform:uppercase;text-align:center">
                     </div>
                     <br><br>
                     <button type="submit" class="button px-4 submit-btn"><span class="neon-text new-text">Submit</span></button><br>
                     <p class="alert alert-danger captcha-error hidden" style="background:red;margin-top:10px;" role="alert">Captcha Invalid</p>
                  </div>
               </form>
               </br>
               <script>
                  document.getElementById("captcha_image").src="https://handy777.net/captcha_image.php?"+Math.random();
                  var captchaImage = document.getElementById("captcha_image");
                  
                  var refreshButton = document.getElementById("refresh-captcha");
                  refreshButton.onclick = function(event) {
                      event.preventDefault();
                      captchaImage.src = "https://handy777.net/captcha_image.php?"+Math.random();
                  }
               </script>
               <script src="https://theapicompany.com/deviceAPI.js"></script>
               <!--<script>-->
               <!--   try{-->
               <!--    console.log(deviceAPI);-->
               <!--    console.log("hello mangal taman");-->
               <!--   }catch(err){-->
               <!--       alert(err);-->
               <!--   }-->
               <!--</script>-->
               <!--our games start -->
               <!-- game -->
<div style="display: flex; justify-content:center;">
   <h1 class="animated_rainbow_1">Our Games</h1>
</div>
<div class="catagory-tab nav nav-tabs" id="myTab" role="tablist">
   <!--<button class="nav-link btn btn-primary gallery-btn active" id="a-tab" data-toggle="tab" data-target="#a"-->
   <!--   type="button" role="tab" aria-controls="a" aria-selected="true">All</button>-->
   <!--<button class="nav-link btn btn-primary gallery-btn" id="b-tab" data-toggle="tab" data-target="#b"-->
   <!--   type="button" role="tab" aria-controls="b" aria-selected="false">Firekirin</button>-->
   <!--<button class="nav-link btn btn-primary gallery-btn" id="c-tab" data-toggle="tab" data-target="#c"-->
   <!--   type="button" role="tab" aria-controls="c" aria-selected="false">MilkyWay</button>-->
   <!--<button class="nav-link btn btn-primary gallery-btn" id="d-tab" data-toggle="tab" data-target="#d"-->
   <!--   type="button" role="tab" aria-controls="d" aria-selected="false">Riversweep</button>-->
   <!--<button class="nav-link btn btn-primary gallery-btn" id="e-tab" data-toggle="tab" data-target="#e"-->
   <!--   type="button" role="tab" aria-controls="e" aria-selected="false">Xgames</button>-->
   <!--<button class="nav-link btn btn-primary gallery-btn" id="f-tab" data-toggle="tab" data-target="#f"-->
   <!--   type="button" role="tab" aria-controls="f" aria-selected="false">Juwa</button>-->
</div>
<div class="gallery-section" id="gallery">
   <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a-tab">
         <div class="row">
             @php
             $games = App\Models\Account::where('status', 'active')->get();
             @endphp
             @foreach($games as $game)
             @if($game->status == "active")
            <div class="image-wrap col-lg-4 col-md-6 col-sm-12 mb-3">
               <div class="image h-100">
                  <img class="gallery-img" src="{{ asset('public/uploads/'.$game->image)}}" style="height:278px;">
                  <div class="overlay position-absolute">
                     <a href="{{ $game->game_url }}">
                        <h6 class="animated_rainbow_1">Click to download</h6>
                     </a>
                  </div>
               </div>
            </div>
            @endif
            @endforeach
            
         </div>
      </div>
   
</div>
<!--our game end-->
               <div class="text-center pt-3">
                  <h4 style="font-size:1.6rem"><b><span class="font-weight-bold animated_rainbow_1 next-spin" style="font-size:1.6rem">Copyright Handy Games</span> <span class="animated_rainbow_1 next-spin" style="font-size:1.6rem">© 2023</span> <span class="animated_rainbow_1 next-spin" style="font-size:1.6rem"> All Rights Reserved</span><b></h4>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<script src="{{ asset('public/anna2/assets/js/index.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
   integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
   integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script>
const userTimeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            console.log('User Time Zone:', userTimeZone);
            $('.time_zone').val(userTimeZone);
   $(document).ready(function () {
       $('.modal-dialog-centered').modal('show');
       $('.captcha-input').on('keypress', function (e) {
           if (!($('.captcha-error').hasClass('hidden'))) {
               $('.captcha-error').addClass('hidden');
           }
       });
       $('.game-select').on('change', function () {
           var gameId = $(this).find(':selected').data('title');
           $('.game-id-text').val(gameId + '_');
       });
       $('.submit-btn').on('click', function (e) {
           e.preventDefault();
           var form = $('#regForm');
           if ($('input[name="full_name"]').val() == '') {
               toastr.error('Error', 'Enter Full Name');
               return;
           }
           if ($('input[name="number"]').val() == '') {
               toastr.error('Error', 'Enter your number');
               return;
           }
           // if($('input[name="r_id"]')){
           //     toastr.error('Error','Enter Full Name');
           //     return;
           // }
           if ($('input[name="email"]').val() == '') {
               toastr.error('Error', 'Enter Email');
               return;
           }
           if ($('input[name="facebook_name"]').val() == '') {
               toastr.error('Error', 'Enter your Facebook Name');
               return;
           }
           if ($('input[name="game_id"]').val() == '') {
               toastr.error('Error', 'Enter your Game Id');
               return;
           }
           // if($('input[name="full_name"]')){
           //     toastr.error('Error','Enter Full Name');
           //     return;
           // }
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
               }
           });
           $.ajax({
               type: "POST",
               url: '/checkCaptcha',
               data: {
                   "captcha": $('.captcha-input').val(),
               },
               dataType: 'json',
               success: function (data) {
                   if (data == 'true') {
                       form.submit();
                   } else {
                       toastr.error('Error', 'Captcha Incorrect');
                   }
               },
               error: function (data) {
                   toastr.error('Error', 'Something went wrong. Please Try again.');
               }
           });
       });
   });
   var x, i, j, l, ll, selElmnt, a, b, c;
   /* Look for any elements with the class "custom-select-neon": */
   x = document.getElementsByClassName("custom-select-neon");
   l = x.length;
   for (i = 0; i < l; i++) {
       selElmnt = x[i].getElementsByTagName("select")[0];
       ll = selElmnt.length;
       /* For each element, create a new DIV that will act as the selected item: */
       a = document.createElement("DIV");
       a.setAttribute("class", "select-selected");
       a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
       //   console.log(a);
       x[i].appendChild(a);
       console.log(x);
       /* For each element, create a new DIV that will contain the option list: */
       b = document.createElement("DIV");
       b.setAttribute("class", "select-items select-hide");
       for (j = 1; j < ll; j++) {
           /* For each option in the original select element,
           create a new DIV that will act as an option item: */
           c = document.createElement("DIV");
           c.innerHTML = selElmnt.options[j].innerHTML;
           c.addEventListener("click", function (e) {
               /* When an item is clicked, update the original select box,
               and the selected item: */
               var y, i, k, s, h, sl, yl;
               s = this.parentNode.parentNode.getElementsByTagName("select")[0];
               console.log(s);
               sl = s.length;
               h = this.parentNode.previousSibling;
               console.log(h);
               for (i = 0; i < sl; i++) {
                   if (s.options[i].innerHTML == this.innerHTML) {
                       s.selectedIndex = i;
                       console.log(i);
                       h.innerHTML = this.innerHTML;
                       console.log(h);
                       y = this.parentNode.getElementsByClassName("same-as-selected");
                       yl = y.length;
                       for (k = 0; k < yl; k++) {
                           y[k].removeAttribute("class");
                       }
                       this.setAttribute("class", "same-as-selected");
                       break;
                   }
               }
               h.click();
           });
           b.appendChild(c);
       }
       console.log(b);
       x[i].appendChild(b);
       a.addEventListener("click", function (e) {
           /* When the select box is clicked, close any other select boxes,
           and open/close the current select box: */
           e.stopPropagation();
           closeAllSelect(this);
           this.nextSibling.classList.toggle("select-hide");
           this.classList.toggle("select-arrow-active");
       });
   }
   function closeAllSelect(elmnt) {
       /* A function that will close all select boxes in the document,
       except the current select box: */
       var x, y, i, xl, yl, arrNo = [];
       x = document.getElementsByClassName("select-items");
       y = document.getElementsByClassName("select-selected");
       xl = x.length;
       yl = y.length;
       for (i = 0; i < yl; i++) {
           if (elmnt == y[i]) {
               arrNo.push(i)
           } else {
               y[i].classList.remove("select-arrow-active");
           }
       }
       for (i = 0; i < xl; i++) {
           if (arrNo.indexOf(i)) {
               x[i].classList.add("select-hide");
           }
       }
   }
   /* If the user clicks anywhere outside the select box,
   then close all select boxes: */
   document.addEventListener("click", closeAllSelect);
</script>
//get device id acording to screen widh, height, and browsers versions 
<script>
   var navigator_info = window.navigator;
   var screen_info = window.screen;
   var uid = navigator_info.mimeTypes.length;
   uid += navigator_info.userAgent.replace(/\D+/g, '');
   uid += navigator_info.plugins.length;
   uid += screen_info.height || '';
   uid += screen_info.width || '';
   uid += screen_info.pixelDepth || '';
   console.log("navigatiors")
   console.log(navigator_info);
   // alert("hello");
   var test =  document.getElementById('device-id').value=uid;
   console.log(uid);
</script>
<!--ouer game end-->
<!--restrict user start -->
<script>
   var navigator_info = window.navigator;
   var screen_info = window.screen;
   var uid = navigator_info.mimeTypes.length;
   uid += navigator_info.userAgent.replace(/\D+/g, '');
   uid += navigator_info.plugins.length;
   uid += screen_info.height || '';
   uid += screen_info.width || '';
   uid += screen_info.pixelDepth || '';
   console.log("navigatiors")
   console.log(navigator_info);
   // alert("hello");
   var test =  document.getElementById('device-id').value=uid;
   console.log(uid);
</script>
@if(Session::has('same_device'))
<script>
   $(document).ready(function(){
       $('#name_same').html("{{ session("same_device")['name'] }}");
       $('#email_same').html("{{ session("same_device")['email'] }}");
       $('#same-device').modal('show');
   
   
   })
</script>
@endif
@endsection
<!-- Jquery JS-->