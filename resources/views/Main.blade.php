<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HOGAR</title>
        <link rel="icon" type="{{ asset('images/logo3.png') }}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/Main.css') }}" rel="stylesheet" />
          <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>

    </head>
  

    <body id="page-top">


                            <div id="loading"></div>

        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"><img src="{{ asset('images/logo3.png') }}" id="logo" width="120px" style="border-radius: 10px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                    


                           @guest
                        <li class="nav-item"><a class="nav-link" href="{{route('main')}}">Home</a></li>
                           <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                              <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: blue;">{{ __('Sign In') }}</a></li>
                            
                           
                        @else
                        <li class="nav-item"><a class="nav-link" href="{{route('main')}}" style="color: #5C96FA;font-weight: bold;">Home</a></li>
                         <li class="nav-item" ><a class="nav-link" href="{{route('events')}}" > Properties </a></li>
                         <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('PropertyVFavorites')}}">Favorites</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('PropertyRented')}}">Rented</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('PropertyBills')}}">Bills</a></li>

                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{route('profileMain')}}">Profile</a></li>



                               <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: Red;"> 
                                  <?php 

                                 $var = preg_split('/[\s,]+/', Auth::user()->name, 3);
                                 echo $var[0]." ".$var[1];

                                 ?></a></li>
                             
                           
                        @endguest


</a> 
                        </li>

<li class="nav-item"><a  href="{{ route('logout') }}" style="border-radius: 30px;" >

                           @guest
                                {{ __('') }}</a>
                            
                           
                        @else
                      
                                
                          <span style="font-size: 13px" class="btn btn-primary">  LogOut </span> 
                             
                           
                        @endguest
</a>
                        </li>




                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->

        <header class="text-white">

 <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="{{ asset('images/IUKL Video.mp4') }}" type="video/mp4">
  </video>



            <div class="container px-4 text-center" style="margin-top: 7%;background-color: #212529;padding-bottom: 20px;box-shadow: 5px 10px 18px red;border-radius: 20px;">


                <h1 class="fw-bolder" style="background-color:yellow;border-radius: 10px;"><span style="color: white;-webkit-text-stroke: 2px black;font-size: 70px">HOGAR HOUSE RENTAL SYSTEM</span></h1> 
                <p style="color: white;text-shadow: 0 0 10px black;font-weight: bold;"></p>


 @guest
                                
</svg> Explore properties</a>
                            
                           
                        @else
                      
                            
<a class="btn btn-lg btn-danger" style="border-radius: 100px;font-size: 15px" href="{{route('events')}}"> Properties</a>
                             
                           
                        @endguest






            </div>
        </header>
        <!-- About section-->
        <section id="about" style="background-color:#FF4343;color:white">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-10">
                        <h2>About Us</h2>
                        <p class="lead"><center> <img src="{{ asset('images/logo3.png') }}" style="width: 40%;border-radius: 8px;margin-bottom: 20px;"> <Br><B> " No matter what stage of the home journey you may be in, we’re here to empower you by making all things home simple, efficient, and enjoyable. " </B></center></p>
                        <p class="lead" style="font-size: 17px">

                            There are an abundance of hotel recommendation system available on the Internet
such as Trivago, Trip Advisor and Expedia. For rental house, it is very difficult to find
the same recommendation system and usually the owner not advertise their house on
Internet but, promote it to the resident. Problem arise when it is hard to find the nearby
house rental with the University. Usually, the student will go out and ask for the
resident. It will take so much time for student to find their shelter for the whole
semester. To solve this problem, we need a platform that will help student to find the
house. The owner also can promote their house on the platform as it can attract the
student. The system will find the nearby house rental that available and it will make
comparison with other house for the student to make their choice according to the
features requirement. </p>
                        <ul>
                            <li> <b>Our Motto : </b> For easier Find dream rental house,</li>

                            <li><b>Our Mission :</b>Develop an online rental system that serves as a centralised rental system for property owners and tenants, as well as manage rental process management.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-dark" style="color: white;" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Services we offer</h2>
                        <p class="lead">


The general objective is to develop an online rental system that can.<ul>
<li>Administrate centralized rental system for house owner and tenant.</li>
<li>Manage rental process management.</li>
<li>Generate the revenue report for the house owners based on their monthly 
profit.</li>
<li>Present a list of properties based on the end users by Searching and filtering
technique.</li> 
</ul>
 
  
   


                      

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact section-->
        <section id="contact" style="background-color: #00b6ff;color: white;">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Contact us</h2>
                        <p class="lead">


<div class="row">
  <div class="col-sm-6">
    <div class="card" style="background-color:#FFFD5B;color:black;border-radius:30px">
      <div class="card-body">
        <p class="card-text">
<b> - Address</b><br>
Hogar De Centrum City, Jalan Ikram-Uniten, 43000 Kajang, Selangor>

<p><b> - Phone</b><br>
(+60) 18-792 4845</p>

<a href="https://wa.me/0187924845" class="btn" style="background-color:#4ac559;color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> +(60) 18-792 4845 </a>


<p><B> - Email</B><br>
enquiries@hogar.com.my<Br>

        </p>
      </div>
    </div>
  </div>
  
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">"HOGAR provides a comprehensive list of properties up for sale, as well as the data and resources needed to make wise choices"</p>
                <p class="m-0 text-center text-white">Copyright © 2022 HOGAR All rights reserved. Powered by Joseph Raj Daniel</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ URL::asset('js/Main.css') }}"></script>
    </body>
</html>
<script type="text/javascript">
      $(window).on('load', function () {
    $('#loading').fadeOut();
  }) ;


function mySubmitFunction(e){
    e.preventDefault();


var name = $("#name").val();
var ref = $("#ref").val();
var Email = $("#Email").val();
var Objects = $("#Objects").val();
var Message = $("#Message").val();


$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

  $.ajax(
    {
        url: '{{route("SendFeedbacks")}}',
        type: 'get',
        data: {
            "name": name,
            "ref": ref,
            "Email": Email,
            "Objects": Objects,
            "Message": Message,
        },
        success: function (data){
            alert(data);
            $('#feedback').trigger("reset");

        },
        error: function (data) {
            },

    });

}

</script>