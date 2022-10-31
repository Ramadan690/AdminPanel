<!DOCTYPE html>
<html ang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HOGAR</title>
        <link rel="icon" type="{{ asset('images/logo3.png')}}" href="assets/favicon.ico" />
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
                              <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: white;">{{ __('Sign In') }}</a></li>

<script type="text/javascript">
    window.location = "http://localhost:8000/login";
</script>
                            
                           
                        @else
                         <li class="nav-item"><a class="nav-link" href="{{route('main')}}">Home</a></li>
                         <li class="nav-item"><a class="nav-link" href="{{route('events')}}" style="color: #5C96FA;font-weight: bold;"> Properties </a></li>
                         <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{route('PropertyVFavorites')}}">Favorites</a></li>
                                                                        <li class="nav-item"><a class="nav-link" href="{{route('PropertyRented')}}">Rented</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('PropertyBills')}}">Bills</a></li>


                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{route('profileMain')}}">Profile</a></li>


                               <li class="nav-item"><a class="nav-link" href="{{asset('/login')}}" style="color: red;"> 
                                  <?php 

                                 $var = preg_split('/[\s,]+/', Auth::user()->name, 3);
                                 echo $var[0]." ".$var[1];

                                 ?></a></li>
                             
                           
                        @endguest


</a> 
                        </li>

<li class="nav-item"><a class="btn btn-primary" href="{{ route('logout') }}" style="border-radius: 30px;" >

                           @guest
                                {{ __('') }}</a>
                            
                           
                        @else
                      
                                
                          <span style="font-size: 13px">  LogOut </span> 
                             
                           
                        @endguest
</a>
                        </li>




                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->

       
        <!-- About section-->
        <section id="about" style="background-color:#00b6ff">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-15">
                    <span style="font-size: 13px;color: green">Home/Property</span>
                    <div class="container" style="background-color:white;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;border-radius: 6px;">
                        <center><h5>Property</h5></center></div>
           

<br>




<ul class="cards">










@foreach ($events as $event)


<?php
if(isset($_GET["Ref"])) {
 
 if($_GET["Ref"] == $event->Reference){
 echo "<style>.card{$event->Reference}{background-color:#EEF7CE}</style>";}

}
else{

}
?>






<div class="card-group">



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <center><img src="{{asset('/storage/images/Events/'.$event->image)}}" class="img-fluid rounded" alt="Responsive image" id="pro"></center>
      </div>
    
    </div>
  </div>
</div>


<div class="card" style="border-radius: 10px;margin-right: 7px">
   <div class="card-header" style="background-color:black;color: white;">
    <Center>Image</Center>
  </div>
      <div class="card-body" style="background-color: #212529;">
       <CENTER><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><img src="{{asset('/storage/images/Events/'.$event->image)}}" class="img-fluid rounded" alt="Responsive image" id="pro"></a></CENTER>
      </div>
 <div class="card-footer text-muted" style="background-color:black;color: white;">
    <Center>{{$event->updated_at}}</Center>
  </div>
    </div>


<div class="card" style="border-radius: 10px;background-color:#212529;color: white;">
  <div class="card-header" style="border-radius: 10px;background-color:black;">
   <Center> Property details</Center>
  </div>
      <div class="card-body" >
        <h5 class="card-title"><b>{{ $event->E_title}}</b> , {{ $event->City }} 
          
         
         <a href="#" id="saved"><span style="float:right;font-size: 16px" class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
  <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
</svg> save</span></a> 



<script>
  $("#saved").click(function(e) {

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

    $.ajax({
        type: "get",
        url: "{{route('PropertySave')}}",
        data: { 
            Ref: "{{$event->Reference}}",
            UserRef: "<?php echo Auth::user()->Reference; ?>", 
        },
        success: function(result) {
            alert(result);
        },
        error: function(result) {
            alert(result);
        }
    });
});

</script>



</h5> 

        <p class="card-text text-muted">{{ $event->Street_Address }}, ( <B>{{ $event->State }} </B>) <br> 
         <H4> <?php if( $event->Type == "Sell"){echo "Sale RM".$event->price;}else{echo "Rent RM".$event->price." /mo";}?></H4></p>
<hr>
        <p class="card-text ">
          
          Bedroom : <span class="badge bg-dark" style="float: right">{{ $event->bedroom}}</span><br>
           Bathroom : <span class="badge bg-dark"style="float: right">{{ $event->bathroom}}</span><br>
           Build-Up : <span class="badge bg-dark"style="float: right">{{ $event->sqft}} Sq.ft</span><br>
           Build Year: <span class="badge bg-dark"style="float: right">{{ $event->build_year}}</span><br>
        </p>
<hr>
<p class="card-text " style="color:white;">
  Reference ID : {{$event->Reference}}<br>
  Type : {{$event->Categorie}}<br>
  Furnishing : {{$event->Furnishing}}<br>
  Tenure : Freehold
  <hr>
<center>Owned by <B>{{$event->postor}}</B></center>
</p>

      </div>
      <div class="card-footer" style="background-color:black;">
      <Center><small class="text-muted">Updated on : {{$event->updated_at}}</small></Center>
    </div>
    </div>
</div>







<div class="card-group">

<div class="card text-center" style="margin-top: 20px;border-radius: 10px;margin-right: 7px;background-color: #212529;">
  <div class="card-header">
    Map
  </div>
  <div class="card-body" style="background-color: #4b4f4e">
    
    <p class="card-text">

<Center><iframe width="550" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" alt="Responsive image" src="https://maps.google.it/maps?q=<?php echo $event->Street_Address; ?>&output=embed" class="rounded"></iframe></Center>

    </p>
  </div>
  <div class="card-footer text-muted">
    {{$event->updated_at}}
  </div>
</div>



<div class="card" style="margin-top: 20px;border-radius: 10px;background-color: #212529;color: white;">
  <div class="card-header text-center">
    Other details
  </div>
  <div class="card-body">
    <p class="card-text">

<B>Details :</B><br><br>
-{{$event->about}}



    </p>

  </div>
  <div class="card-footer text-muted">
    <Center>{{$event->updated_at}}</Center>
  </div>
</div>



</div>


    




<div class="card-group">


<div class="card" style="margin-top: 20px;border-radius: 10px;background-color: #212529;">
  <div class="card-header text-center">
    Ask fo Enquires
  </div>
  <div class="card-body">
    <p class="card-text">

Agent ID : <span style="float: right"> {{$event->postor}}</span><br>
Pro : <span style="float: right"> Private advisor</span>
    </p>
   <center> <a href="https://wa.me/0187924845" class="btn" style="background-color:#4ac559;color:white"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg> +(60) 18-792 4845 </a>


</center>

<hr>




<Center><div class="card" style="max-width: 23rem;background-color: #F8F8F8;background-color: white;">
  <div class="card-body">
    <h5 class="card-title">Contact the Owner</h5>
<hr>

 <form method="POST" id="feedback" onsubmit="return mySubmitFunction(event)">
{{csrf_field()}}

<div class="mb-3">
<label for="name" class="form-label"> To Owner: </label><br>
  <input type="text" class="form-control" name="ref" id="ref" placeholder="" value="{{$event->postor}}" readonly></div>

  <div class="mb-3">
<label for="name" class="form-label"> About : </label><br>
  <input type="text" class="form-control" name="Href" id="Href" placeholder="" value="{{$event->Reference}}" readonly></div>

<div class="mb-3">
<label for="name" class="form-label">From : Full Name </label><br>
  <input type="text" class="form-control" name="name" id="name" placeholder=""></div>

<div class="mb-3">
  <label for="Email" class="form-label"> Email </label>
  <input type="email" class="form-control" id="Email" name="Email" placeholder="name@example.com">
</div>

<div class="mb-3">
<label for="Objects" class="form-label"> Object </label>
  <input type="text" class="form-control" id="Objects" name="Objects" placeholder="">
</div>

<div class="mb-3">
  <label for="Message" class="form-label">Message</label>
  <textarea class="form-control" id="Message" name="Message" rows="3"></textarea>
</div>

<div class="mb-3">
<button type="submit" class="btn btn-primary" >Submit</button>
</div>

</form>


  </div>
</div>

</Center>



  </div>
  <div class="card-footer text-muted">
    <Center>{{$event->updated_at}}</Center>
  </div>
</div>
</div>



@endforeach
























    <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}





function mySubmitFunction(e){
    e.preventDefault();


var name = $("#name").val();
var ref = $("#ref").val();
var Email = $("#Email").val();
var Objects = $("#Objects").val();
var Message = $("#Message").val();
var Href = $("#Href").val();

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
            "Href": Href,
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

</ul>


                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
     
        <!-- Contact section-->
       
        <!-- Footer-->
         <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">"HOGAR provides a comprehensive list of properties up for sale, as well as the data and resources needed to make wise choices℠"</p>
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
</script>