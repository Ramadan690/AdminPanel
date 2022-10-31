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

            <link href="{{ URL::asset('headers_bootstrap/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('headers_bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/profile_image.css') }}" rel="stylesheet" type="text/css">

  <link href="{{ URL::asset('headers_bootstrap/css/ruang-admin.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/commun.css') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">


  <script src="{{ URL::asset('headers_bootstrap/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('headers_bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/vendor/jquery-easing/jquery.easing.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/js/ruang-admin.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/vendor/chart.js/Chart.min.js') }} "></script>
  <script src="{{ URL::asset('headers_bootstrap/js/demo/chart-area-demo.js') }} "></script>  
<!-- datatable -->
<script type="text/javascript" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="{{ URL::asset('js/AdminPanelJS/commun.js') }}"></script>

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
                         <li class="nav-item"><a class="nav-link" href="{{route('events')}}" > Properties </a></li>
                         <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                                                <li class="nav-item"><a class="nav-link" href="{{route('PropertyVFavorites')}}" >Favorites</a></li>
                                                                        <li class="nav-item"><a class="nav-link" href="{{route('PropertyRented')}}">Rented</a></li>
                       <li class="nav-item"><a class="nav-link" href="{{route('PropertyBills')}}" style="color: #5C96FA;font-weight: bold;">Bills</a></li>


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
                    <span style="font-size: 13px;color: white;">Home/Favorites</span>
                    
<div class="container" style="background-color:white;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;border-radius: 6px;">
                        <center><h3>List of my Bills</h3></center>
           </div>




<div class="container" style="background-color:white;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;border-radius: 6px;">



<table id="showFeedbacks" class="table table-sm table-light" style="width:100%">
        <thead>
            <tr>
                <th>Reference</th>
                <th class="Sender">Tenants</th>
                <th class="Email">Email</th>
                <th class="Email">House Reference</th>
                <th class="Email">status</th>
                <th class="Email">price</th>
                <th class="Email">created_at</th>
                <th class="action" ></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
     
    </table>



</div>





<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <div class="input-group mb-3">
  <div class="input-group-text">
    Name on Card
  </div>
  <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Joseph .. .. ">
</div>

<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
    Credit card number
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="1111-2222-3333-4444">
</div>
</div>

<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
Exp Month
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="september">
</div>
</div>

<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
CVV  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="352">
</div>
</div>


<div class="input-group mb-3">
<div class="input-group">
  <div class="input-group-text">
Exp Year
  </div>
  <input type="text" class="form-control" aria-label="Text input with radio button" placeholder="2018">
</div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="checkout">CheckOut</button>
      </div>
    </div>
  </div>
</div>

</div>



<div id="Agreement" class="Container" style="background-color:white;margin-bottom: 10px;padding-top: 20px;padding-bottom: 20px;box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;border-radius: 6px;">

</div>
<script type="text/javascript">
         function printDiv() {
            var divContents = document.getElementById("Agreement").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body >');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
</script>

<input type="button" value="Print" onclick="printDiv()">

















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

</script>



                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
     
        <!-- Contact section-->
       
        <!-- Footer-->
         <footer class="py-5 bg-light">
            <div class="container px-4"><p class="m-0 text-center">"HOGAR provides a comprehensive list of properties up for sale, as well as the data and resources needed to make wise choices"</p>
                <p class="m-0 text-center ">Copyright © 2022 HOGAR All rights reserved. Powered by Joseph Raj Daniel</p></div>
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


$('#showFeedbacks').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('PropertyVbills')}}",
    "columns": [
{"data" : "Reference"},
{"data" : "Tenants"},
{"data" : "Email"},
{"data" : "HouseRef"},
{"data" : "status"},
{"data" : "price"},
{"data" : "created_at"},
{"data": null,
  render: function ( data, type, row ) {


if(data['status']=='Not paid'){
 return '<button type="button" name="updateF" onclick="Agreement(`'+data['Reference']+'`,`'+data['HouseRef']+'`,`'+data['Tenants']+'`,`'+data['Email']+'`,`'+data['status']+'`,`'+data['price']+'`)" class="btn btn-primary btn-md update" style="font-size:12px">View Bill</button> <button type="button" oncl name="updateF" onclick="payment(`'+data['Reference']+'`)" class="btn btn-danger btn-md update" style="font-size:12px">Pay</button>'
}
else{
  return '<button type="button" name="updateF" onclick="Agreement(`'+data['Reference']+'`,`'+data['HouseRef']+'`,`'+data['Tenants']+'`,`'+data['Email']+'`,`'+data['status']+'`,`'+data['price']+'`)" class="btn btn-primary btn-md update" style="font-size:12px">View Bill</button> <b style="color:blue">Paid</b>';
}

  }}

    ]

  })




function Agreement(ref,HouseRef,Tenants,Email,status,price){

    $.ajax(
    {
        url: '{{route("bills")}}',
        type: 'get',
        data: {
          "id": ref,
          "HouseRef" : HouseRef,
          "Tenants" : Tenants,
          "Email" : Email,
          "status" : status,
          "price" : price,
        },
        success: function (result){

document.getElementById("Agreement").innerHTML = result;}
});
}



function payment(ref){

$('#exampleModalCenter').modal('show');



$( "#checkout" ).click(function() {
    $('#exampleModalCenter').modal('hide');

   if (confirm('Are you sure you want to Pay : '+ref+' ?')) {


    $.ajax(
    {
        url: '{{route("payment")}}',
        type: 'get',
        data: {
            "id": ref,
        },
        success: function (result){
            alert(result);
            $('#showFeedbacks').DataTable().ajax.reload();
        }
    });
}

});


  }







</script>



