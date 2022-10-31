<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>HOGAR</title>
        <link rel="icon" type="{{ asset('images/logo3.png')}}" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ URL::asset('css/Main.css') }}" rel="stylesheet" />
          <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>

    </head>
  



<style type="text/css">
:root {
  --surface-color: #fff;
  --curve: 20;
}

* {
  box-sizing: border-box;
}

body {
  font-family: 'Noto Sans JP', sans-serif;
  background-color: #fef8f8;
}

.cards {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 2rem;
  margin: 4rem 5vw;
  padding: 0;
  list-style-type: none;

}

.card {
  position: relative;
  display: block;
  height: 100%;  
  border-radius: calc(var(--curve) * 1px);
  overflow: hidden;
  text-decoration: none;
  
}

.card__image {      
  width: 100%;
  height: auto;
}

.card__overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;      
  border-radius: calc(var(--curve) * 1px);    
  background-color: var(--surface-color);      
  transform: translateY(100%);
  transition: .2s ease-in-out;
}

.card:hover .card__overlay {
  transform: translateY(0);
}

.card__header {
  position: relative;
  display: flex;
  align-items: center;
  gap: 0.5em;
  padding: 0.5em;
  border-radius: calc(var(--curve) * 1px) 0 0 0;    
  background-color: var(--surface-color);
  transform: translateY(-100%);
  transition: .2s ease-in-out;


}

.card__arc {
  width: 80px;
  height: 80px;
  position: absolute;
  bottom: 100%;
  right: 0;      
  z-index: 1;
}

.card__arc path {
  fill: var(--surface-color);
  d: path("M 40 80 c 22 0 40 -22 40 -40 v 40 Z");
}       

.card:hover .card__header {
  transform: translateY(0);
}

.card__thumb {
  flex-shrink: 0;
  width: 50px;
  height: 50px;      
  border-radius: 50%;      
}

.card__title {
  font-size: 0.8em;
  margin: 0 0 .3em;
  color: #6A515E;
}

.card__tagline {
  display: block;
  margin: 1em 0;
  font-family: "MockFlowFont";  
  font-size: .8em; 
  color: #D7BDCA;  
}

.card__status {
  font-size: .8em;
  color: black;
  background-color: yellow
}

.card__description {
  padding: 0 2em 2em;
  margin: 0;
  color: #D7BDCA;
  font-family: "MockFlowFont";   
  display: -webkit-box;
  -webkit-box-orient: vertical;
  -webkit-line-clamp: 3;
  overflow: hidden;
}    
hr.style-four {
     border: 0;
    height: 1px;
    background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
}
</style>


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
                    <span style="font-size: 13px;color: white;">Home/House</span>
                        <center><h3 style="color: white;">Search your <B>dream</B> House</h3></center>
             <br>
             









<div class="container" style="background-color:white;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;border-radius: 6px;">

<div class="input-group">
 <button type="button" class="btn btn-danger" onclick="window.location.href = 'http://localhost:8000/Events'" style="margin-left: 10px;border:1px solid black;border-radius: 6px;margin-right: 10px;">All Properties</button>

 <div class="input-group-prepend" style="border:1px solid #989898;">
    <span class="input-group-text" id="">State</span>
  </div>
  <select class="form-select" id="inputGroupSelect02" onchange="makeSubmenu(this.value)" style="margin-right: 12px; border:1px solid #989898;">
    <option value="">choose state...</option>
     <option value="Johor">Johor</option>
      <option value="Kedah">Kedah</option>
      <option value="Kelantan">Kelantan</option>
      <option value="Labuan">Labuan</option>
      <option value="Melaka">Melaka</option>
      <option value="Negeri_Sembilan">Negeri Sembilan</option>
      <option value="Kuala_Lumpur">Kuala Lumpur</option>
      <option value="Pahang">Pahang</option>
      <option value="Penang">Penang</option>
      <option value="Perak">Perak</option>
      <option value="Perlis">Perlis</option>
      <option value="Putrajaya">Putrajaya</option>
      <option value="Sabah">Sabah</option>
      <option value="Sarawak">Sarawak</option>
      <option value="Selangor">Selangor</option>
      <option value="Terengganu">Terengganu</option>
  </select>


 <div class="input-group-prepend" style="border:1px solid #989898;">
    <span class="input-group-text" id="">City</span>
  </div>

  <select  class="form-select" id="citySelect" style="margin-right: 12px; border:1px solid #989898;">
    <option value=""></option>

  </select>

<button type="button" class="btn btn-primary" style="border-radius:6px" onclick="changeurl()"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></button>


<!-- Button trigger modal -->





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="background-color:#00b6ff">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
  <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
</svg> Filter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        



<form>

<div class="input-group mb-3">
 <select class="form-select" id="type">
    <option value="" selected>Type...</option>
    <option value="Apartement" >Apartement</option>
    <option value="House">House</option>

  </select>
</div>

<div class="input-group mb-3">
 <select class="form-select" id="Categorie">
  <option value="" selected>Category</option>
    <option value="Residential">Residential</option>
    <option value="Commercial">Commercial</option>
  </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">RM</span><input type="Number" class="form-control" id="MIprice" placeholder="Min price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10" > <span class="input-group-text">RM</span><input type="Number" id="MAprice" class="form-control" placeholder="Max price" aria-label="Recipient's username" aria-describedby="basic-addon2" size="10">
  
</div>


<div class="input-group mb-3">
  <span class="input-group-text">Bedroom</span>
 <select class="form-select" id="Bedroom">
  <option value="" selected>...</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Bathroom</span>
 <select class="form-select" id="Bathroom">
    <option value="" selected>...</option>
    <option value="1" >1</option>
    <option value="2">2</option>
    <option value="3">3</option>

  </select>
</div>

<div class="input-group mb-3">
  <span class="input-group-text">Furnishing</span>
 <select class="form-select" id="Furnishing">
    <option value="" selected>...</option>
    <option value="Not Furnished" >Not Furnished</option>
    <option value="Fully Furnished">Fully Furnished</option>
    <option value="Partially Furnished">Partially Furnished</option>

  </select>
</div>


</form>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="changeurl()">Apply</button>
      </div>
    </div>
  </div>
</div>



</div>






</div>









<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: white;border:1px solid #989898;border-radius: 3px;float: right;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
  <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
</svg>
</button>


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

<li style="width: 360px">
      <a href="{{route('PropertyV',['id'=>$event->Reference])}}" class="card card{{$event->Reference}}">

  <div class="card" style="width: 23rem;">
     <img class="card-img-top imga" src="{{asset('/storage/images/Events/'.$event->image)}}" alt="Card image cap" id="output" width="50" >
  <div class="card-body">
    <span class="card-title"><b>{{ $event->E_title}}</b> ( {{ $event->City }},{{ $event->State }} ) <?php
date_default_timezone_set("Asia/Kuala_Lumpur");
$scall = strtotime(date('Y-m-d H:i:s')) - strtotime($event->updated_at);
if($scall < 30000){echo " <img src='https://static.wixstatic.com/media/ab448a_db8fad17f50f4329887ead34d58752d2~mv2.gif' width='28px' style='float:right'>";}else{};?></span><br>
    

RM 
<?php
 
 if( $event->Type == "Sell"){
 echo $event->price;}

else{
 echo $event->price." /mo";}

?>


<span style="font-size: 12px;color: red"> on the <B>{{ $event->Type }} ({{$event->Verified}})</b></span>

<p class="card__description" style="color: black"><b>Build-up :</b> {{ $event->sqft}} Sq.ft; <br>
<b>Bedroom :</b> {{ $event->bedroom}} ;<br>
<b>Bathroom :</b> {{ $event->bathroom}}
<CENTER><span class="badge rounded-pill bg-primary">{{ $event->Categorie }}</span>
<span class="badge rounded-pill bg-primary">{{ $event->Furnishing }}</span>
<span class="badge rounded-pill bg-primary"> +60235464</Span></CENTER>
        </p>


  </div>
</div>
</a>
</li>

  

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


var citiesByState = {
Johor: ["Ayer Baloi","Ayer Hitam","Ayer Tawar 2","Bandar Penawar","Bukit Gambir","Gelang Patah","Gerisek","Jementah","Johor Bahru","Kahang","Kluang","Kota Tinggi","Kukup","Kulai",],
Kuala_Lumpur: ["Ampang","Cheras","Kuala Lumpur","Sentul"],
Selangor: ["Balakong","Bangi","Banting","Klang","Cyberjaya","Dengkil","Kajang","Pelabuhan Klang","Serdang","Shah Alam","Seri Kembangan","Sungai Buloh","KLIA","Batu Caves","Puchong","Semenyih",],
Melaka:["Alor Gajah","Asahan","Ayer Keroh","Bemban","Durian Tunggal","Jasin","Kem Trendak","Melaka","Merlimau","Selandar","Sungai Rambai","Sungai Udang","Tanjong Kling"],

}

function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = '<option value="">Choose a City</option>'+citiesOptions;
}
}



function changeurl(){

var count = "";
var state = document.getElementById("inputGroupSelect02");
var Svalue = state.value;

var city = document.getElementById("citySelect");
var Cvalue = city.value;

var type = document.getElementById("type");
var Tvalue = type.value;

var categorie = document.getElementById("Categorie");
var Gvalue = categorie.value;

var ma = document.getElementById("MAprice");
var MAvalue = ma.value;

var mi = document.getElementById("MIprice");
var MIvalue = mi.value;

var bedroom = document.getElementById("Bedroom");
var Bvalue = bedroom.value;

var bathroom = document.getElementById("Bathroom");
var Bavalue = bathroom.value;

var furnishing = document.getElementById("Furnishing");
var Fvalue = furnishing.value;


if(Svalue != ""){
count += "&State="+Svalue;
}

if(Cvalue != ""){
count += "&City="+Cvalue;
}

if(Tvalue != ""){
count += "&Type="+Tvalue;
}


if(Gvalue != ""){
count += "&Categorie="+Gvalue;
}

if(MAvalue != ""){
  if(MIvalue > MAvalue){
    count += "&MAprice="+MAvalue;
  }
  else{
count += "&MAprice="+MAvalue;}
}



if(MIvalue != ""){

  if(MAvalue != ""){
  if(MIvalue > MAvalue){
    count += "&MIprice="+MAvalue;
  }
  else{
count += "&MIprice="+MIvalue;}}
else{
count += "&MIprice="+MIvalue;
}}

if(Bvalue != ""){
count += "&Bedroom="+Bvalue;
}

if(Bavalue != ""){
count += "&Bathroom="+Bavalue;
}

if(Fvalue != ""){
count += "&Furnishing="+Fvalue;
}

 window.location.href = 'http://localhost:8000/Events?'+count;

}

</script>



</ul>
     <center><span style="color: white;"> No more data found</span></center>


                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->

        <!-- Contact section-->
       
        <!-- Footer-->
         <footer class="py-5 bg-light">
            <div class="container px-4"><p class="m-0 text-center">"HOGAR provides a comprehensive list of properties up for sale, as well as the data and resources needed to make wise choices"</p>
                <p class="m-0 text-center">Copyright © 2022 HOGAR All rights reserved. Powered by Joseph Raj Daniel</p></div>
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