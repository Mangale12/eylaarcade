<!DOCTYPE html>

<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
      <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="description" content="Woods-games">
      <meta name="author" content="Woods-games">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="keywords" content="Woods-games">
      <meta content="" name="Woods-games">
      <meta content="" name="Woods-games">
        <link rel="icon" href="public/anna2/assets/fav.jpeg">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
         integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- css -->
      <link rel="stylesheet" href="{{ asset('public/anna2/assets/css/style.css')}}" type="text/css" media="all" />
      <!--// css -->
      <link rel="stylesheet" href="https://unpkg.com/papercss@1.8.3/dist/paper.min.css">
      <title>HAndy-Games</title>
       <style>
        .gallery-btn{
            padding: 5px!important;
        }
        @media only screen and (max-width: 425px) {
          .catagory-tab{
              display:block!important;
          }
          .gallery-section .gallery-img{
              display:none !important;
          }
        }
      </style>
   </head>
   <body>          


      <div>
         <video id="background-video" autoplay loop muted>
            <source src="{{ URL::to('public/anna2/assets/back.mp4') }}" type="video/mp4">
         </video>
         <!-- baner -->
         <div id="main-container">
            <div class="text-area">
               <div>
                  <h1 class="animated_rainbow_1">WELCOME TO Handy Games</h1>
                  <h1 class="animated_rainbow_1">  <span>Download our games </span></h1>
               </div>
               <!--<div style="margin-top: 5rem;">-->
               <!--     <img src="assets/animation.gif.mp4" alt="" style="width: 100%;"> -->
               <!--    <video id="logo" autoplay loop muted poster="">-->
               <!--        <source src="public/anna2/assets/animation.gif.mp4" type="video/mp4">-->
               <!--    </video>-->
               <!--</div>-->
            </div>
         </div>
         <!-- banner -->
         <!-- formstr -->
         <!-- form end -->
         <!-- game -->
        <div style="display: flex; justify-content:center;">
            <h1 class="animated_rainbow_1">Our Games</h1>
        </div>
        <div class="catagory-tab nav nav-tabs" id="myTab" role="tablist">
            <button class="nav-link btn btn-primary gallery-btn active" id="a-tab" data-toggle="tab" data-target="#a"
                type="button" role="tab" aria-controls="a" aria-selected="true">All</button>
             <button class="nav-link btn btn-primary gallery-btn" id="b-tab" data-toggle="tab" data-target="#b"
                type="button" role="tab" aria-controls="b" aria-selected="false">Our Policies</button>
            <!--<button class="nav-link btn btn-primary gallery-btn" id="c-tab" data-toggle="tab" data-target="#c"-->
            <!--    type="button" role="tab" aria-controls="c" aria-selected="false">MilkyWay</button>-->
            <!--<button class="nav-link btn btn-primary gallery-btn" id="d-tab" data-toggle="tab" data-target="#d"-->
            <!--    type="button" role="tab" aria-controls="d" aria-selected="false">Riversweep</button>-->
            <!--<button class="nav-link btn btn-primary gallery-btn" id="e-tab" data-toggle="tab" data-target="#e"-->
            <!--    type="button" role="tab" aria-controls="e" aria-selected="false">Xgames</button>-->
            <!--<button class="nav-link btn btn-primary gallery-btn" id="f-tab" data-toggle="tab" data-target="#f"-->
            <!--    type="button" role="tab" aria-controls="f" aria-selected="false">Juwa</button>-->
        </div>

<script>
document.getElementById('b-tab').onclick = function() {
  document.getElementById("myModaltest").style.display = "block";
  modal.classList.add('show');
}
</script>
        <div class="gallery-section">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a-tab">
                    <div class="row">
                        @foreach($games as $game)
                        <div class="image-wrap col-lg-4 col-md-6 col-sm-12 mb-3">
                            <div class="image h-100">
                                <img class="game-img" src="{{ asset('public/uploads/'.$game->image)}}">
                                <div class="overlay position-absolute">
                                    <a href="{{ $game->game_url }}">
                                        <h6 class="animated_rainbow_1">Click to download</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>
                </div>
                

            </div>
        </div>
        <!-- endgames -->
         <!-- footer -->
         <!--<div class="footer-container">-->
         <!--   <span id="footer-text"></span>-->
         <!--</div>-->
         <!-- endfootr -->
      </div>
      </div>
      
      <!-- The Modal -->
<div id="myModaltest" class="modaltest">

    <!-- Modal content -->
    <div class="modal-contenttest">
      <span class="closetest">&times;</span>
      <div id="modal_main_contenttest">
            <img src="{{ asset('public/anna2/assets/pupupanna.png')}}" style="width:100%">
      </div>
    </div>

</div>


<script>
    // Get the modal
    var modal = document.getElementById("myModaltest");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closetest")[0];
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
       modal.classList.remove('show');

       setTimeout(function(){
          modal.style.display = "none";
        }, 500);
    }
    
 document.getElementById("myModaltest").style.display = "none";
    
    //close the modal window when the user clicks outside of it
    window.onclick = function(event) {
      if (event.target == modal) {
         modal.classList.remove('show');

       setTimeout(function(){
          modal.style.display = "none";
        }, 500);
      }
    }
    
    </script>
    
    <style>
        
    
  /* The Modal (background) */
.modaltest {
    display: none; /* Hidden by default */ 
    position: fixed; /* Stay in place */
    z-index: 10; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgb(0 0 0 / 30%); /* Black w/ opacity */
 transition: top 0.5s, opacity 0.4s;
    top: -100%;
    opacity: 0;
  }

  .show {
    display: block;
    top: 0;
    opacity: 1;
}


/* Modal Content */
.modal-contenttest {
    position:relative;
    background-color:none;
    margin: auto;
    padding: 20px;
    border: none;
    max-width: 500px;
    font-size:14px;
    color:black;
    margin-bottom: 100px;
      padding-bottom: 30px;
      border-radius: 0px;
        -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s 
  }
  
   @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0} 
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }     
  
  /* The Close Button */
  .closetest {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    margin-top:-10px;
  }
  
  .closetest:hover,
  .closetest:focus {
    color:#2a2a2a;
    text-decoration: none;
    cursor: pointer;
  }
  
  .modal-content {
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0} 
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }     

    /* animate from current to top */
    @-webkit-keyframes animateremove {
        from {top:0px; opacity:1} 
        to {top:-300px; opacity:0}
    }

    @keyframes animateremove {
        from {top:0px; opacity:1}
        to {top:-300px; opacity:0}
    }
  
    </style>
   </body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="{{ asset('public/anna2/assets/js/index.js')}}"></script>
      <script>
         $(document).ready( function () {
               $('.captcha-input').on('keypress',function(e) {
                  if(!($('.captcha-error').hasClass('hidden'))){
                      $('.captcha-error').addClass('hidden');
                  }
                });
                $('.account-select').on('change',function(){
                    var gameId = $(this).find(':selected').data('title');
                    $('.game-id-text').val(gameId+'_');
                    console.log(gameId);
                });
             
         
              $('.submit-btn').on('click',function(e) {
                    e.preventDefault();
                    var form = $('#regForm');
                    
                    if($('input[name="full_name"]').val() == ''){
                        toastr.error('Error','Enter Full Name');
                        return;
                    }
                    if($('input[name="number"]').val() == ''){
                        toastr.error('Error','Enter your number');
                        return;
                    }
                    // if($('input[name="r_id"]')){
                    //     toastr.error('Error','Enter Full Name');
                    //     return;
                    // }
                    if($('input[name="email"]').val() == ''){
                        toastr.error('Error','Enter Email');
                        return;
                    }
                    if($('input[name="facebook_name"]').val() == ''){
                        toastr.error('Error','Enter your Facebook Name');
                        return;
                    }
                    if($('input[name="game_id"]').val() == ''){
                        toastr.error('Error','Enter your Game Id');
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
                                if(data == 'true'){
                                    form.submit();
                                }else{
                                    toastr.error('Error','Captcha Incorrect');
                                }
                                
                            },
                            error: function (data) {
                                toastr.error('Error','Something went wrong. Please Try again.');
                            }
                        });
                });
            } );
         
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
            c.addEventListener("click", function(e) {
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
          a.addEventListener("click", function(e) {
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
   <!--<script src="assets/js/index.js"></script>-->
</html>