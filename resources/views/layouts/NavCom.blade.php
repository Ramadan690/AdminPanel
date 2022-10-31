<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ URL::asset('images/logo2.png')}}" rel="icon">
  <title>HOGAR</title>
  <link href="{{ URL::asset('headers_bootstrap/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ URL::asset('headers_bootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/profile_image.css') }}" rel="stylesheet" type="text/css">

  <link href="{{ URL::asset('headers_bootstrap/css/ruang-admin.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/commun.css') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">

</head>

<body id="page-top" >


<div id="loading"></div>

  <!-- Sidebar -->

  <div id="wrapper" >



    <!-- Sidebar -->





    <div id="content-wrapper" class="d-flex flex-column" style="background-color:#212529">
      <div id="content" style="background-color: white;margin-bottom: 50px">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar static-top " style="background-color: #212529;z-index: 12">
                    <img src="{{ URL::asset('images/logo3.png')}}" style="border-radius:40px" width="100px">
       
          <ul class="navbar-nav ml-auto">
          
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <?php $var = preg_split('/[\s,]+/', Auth::user()->name, 3);echo $var[0]." ".$var[1]?>
              </a>
            </li>


            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">

 <span class="ml-2 d-none d-lg-inline text-white small">
<!------------------------>
<i class="fas fa-cog" style="font-size: 15px"></i>
  <span style="font-size: 13px;margin-left: 10px"> 

              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('profile')}}">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>








<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top" style="background-color: #fafbff; opacity: 0.6;border: 1px solid #fbc5ad;border-radius: 0 0 5px 5px
">
       
     







              <a class="nav-link" href="{{route('EventsCom')}}">Manage Properties</a>  
           



              <a class="nav-link" href="{{route('main')}}">
          <span>View</span></a>   
           


           
            <a class="nav-link" href="{{route('EventsFormCom')}}">Create New Properties</a>


<a class="nav-link" href="{{route('FeedbacksCom')}}">Feedbacks </a>          


           <a class="nav-link" href="{{route('profile')}}">
          <i class="fas fa-fw fa-address-card "></i>
          <span>Profile</span></a>


<a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>LogOut</span>
        </a>

        </nav>






       
        <!-- Topbar -->

@yield('content')

</div>
  


</div>






  <!-- Modal Logout -->
       <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Confirmation</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>



<!--Notification modal-->

<!-- Modal -->
<div class="modal fade " id="notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document" >
    <div class="modal-content">
      <div class="modal-header" style="background-color: #7e81ff;color: white;">
        <h5 class="modal-title" id="exampleModalLongTitle"><i class="fas fa-bell"></i> Notification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <center><span id="data" style="font-size: 12px"></span></center>
      </div>
      <div class="modal-footer" style="background-color: #7e81ff;color: white;">
      </div>
    </div>
  </div>
</div>


</body>
</html>



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


<script type="text/javascript"> 


$(document).ready( function () {





$('#showEvents').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllEventsCOM')}}",
    "columns": [
    {"data" : "Reference"},
    {"data" : "E_title"},
    {"data" : "Type"},
    {"data" : "Categorie"},
    {"data" : "State"},
    {"data" : "City"},
    {"data" : "Street_Address"},
    {"data" : "Furnishing"},
    {"data" : "price"},

 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/Events/Update_Events/'+data['Reference']+'" target="_blank"><button type="button" name="update"  class="btn btn-light btn-sm update" style="font-size:9px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete" class="btn btn-light btn-sm Eventdelete" style="font-size:9px" onclick="deleteRow(`'+data['Reference']+'`)"><i class="fas fa-trash-alt"></i></button> <button type="button" name="show"  class="btn btn-light btn-sm check" style="font-size:9px" onclick="showEvents(`'+data['image']+'`,`'+data['Reference']+'`,`'+data['E_title']+'`,`'+data['about']+'`,`'+data['Type']+'`,`'+data['Categorie']+'`,`'+data['State']+'`,`'+data['City']+'`,`'+data['Street_Address']+'`,`'+data['Furnishing']+'`,`'+data['price']+'`,`'+data['build_year']+'`,`'+data['sqft']+'`,`'+data['postor']+'`,`'+data['updated_at']+'`,`'+data['bedroom']+'`,`'+data['bathroom']+'`)"><i class="fas fa-info-circle"></i></button>';
  }}
    ]

  })

  });



function deleteRow(ref){
   
   if (confirm('Are you sure you want to delete this events with the Reference : '+ref+' ?')) {

    $.ajax(
    {
        url: '{{route("DeleteEvents")}}',
        type: 'get',
        data: {
            "id": ref,
        },
        success: function (result){
            alert(result);
            $('#showEvents').DataTable().ajax.reload();
        }
    });
  }}







function showEvents(image,Reference,E_title,about,Type,Categorie,State,city,Street_Address,Furnishing,price,build_year,sqft,postor,updated_at,bedroom,bathroom){

$('#Reference').html(Reference);
$('#Type').html(Type);
$('#about').html(about);
$('#Categorie').html(Categorie);
$('#NameU').html(E_title);
$('#imgEvent').attr("src","/storage/images/Events/"+image);

$('#State').html(State);
$('#Street_Address').html(Street_Address);
$('#Furnishing').html(Furnishing);
$('#price').html(price);
$('#build_year').html(build_year);
$('#sqft').html(sqft+" sq.ft");
$('#postor').html(postor);
$('.city').html(city);
$('#bedroom').html("Bedroom : "+bedroom);
$('#bathroom').html("Bathroom : "+bathroom);

$('#updated').html(updated_at);

$('#detailModal').modal('show');

$('.btn-primary').on('click',function(){
  $('#detailModal').modal('hide');

})



}







    $('#showuser').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('Allusers')}}",
    "columns": [
    {"data" : "Reference"},
    {"data" : "name"},
    {"data" : "email"},
    {"data" : "Role"},
    {"data" : "Tel"},
    {"data" : "Address"},

 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/UserConsultation/Update/'+data['Reference']+'" target="_blank"><button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:11px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete"  class="btn btn-danger btn-sm delete" style="font-size:11px" onclick="deleteRowUser(`'+data['Reference']+'`)"><i class="fas fa-trash-alt"></i></button> <button type="button" name="delete"  class="btn btn-primary btn-sm check" style="font-size:11px" onclick="showdata(`'+data['photo']+'`,`'+data['Role']+'`,`'+data['name']+'`,`'+data['Reference']+'`,`'+data['email']+'`,`'+data['Role']+'`,`'+data['Address']+'`,`'+data['Tel']+'`)"><i class="fas fa-info-circle"></i></button>';
  }}
    ]

  })





function showdata(photo,Role,Name,Reference,Email,Role,Address,Tel){

$('#RefU').html(Reference);
$('#Address').html(Address);
$('#NameU').html(Name);
$('#TelU').html(Tel);
$('#EmailU').html(Email);
$('#Role').html(Role);

if(photo == 'null'){
   $('.imga2').attr("src",'/images/icongif.gif'); }

    else{
   $('.imga2').attr("src","/storage/images/profile_Images/"+photo);}


$('#detailModal').modal('show');

$('.btn-primary').on('click',function(){
  $('#detailModal').modal('hide');

})

}


function deleteRowUser(Matric){
   
   if (confirm('Are you sure you want to delete this user : '+Matric+' ?')) {

    $.ajax(
    {
        url: '{{route("DeleteUser")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showuser').DataTable().ajax.reload();

        }

    });
  }


}








    var now = new Date();
now.setMinutes(now.getMinutes() - now.getTimezoneOffset());

    $('#date').attr('min', now.toISOString().slice(0,16));








function deleteRowStudent(Matric){
   
   if (confirm('Are you sure you want to delete this Student with the Matric : '+Matric+' ?')) {

    $.ajax(
    {
        url: '{{route("Deletestudent")}}',
        type: 'get',
        data: {
            "id": Matric,
        },
        success: function (result){
            alert(result);
            $('#showstudents').DataTable().ajax.reload();

        }

    });
  }}










    $('#showstudents').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('Allstudents')}}",
    "columns": [
    {"data" : "Name"},
    {"data" : "Matric"},
    {"data" : "Passport"},
    {"data" : "Programme"},
 {"data": null,
  render: function ( data, type, row ) {
    return '<a href="/IUKL/Student/Update/'+data['Matric']+'" target="_blank"><button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:11px"><i class="fas fa-edit"></i></button></a> <button type="button" name="delete"  class="btn btn-danger btn-sm delete" style="font-size:11px" onclick="deleteRowStudent(`'+data['Matric']+'`)"><i class="fas fa-trash-alt"></i></button>';
  }}
    ]

  })








$('#showFeedbacks').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('AllFeedbacks')}}",
    "columns": [
    {"data" : "Reference"},
    {"data" : "updated_at"},
    {"data" : "Sender"},
    {"data" : "Email"},
{"data" : "HouseRef"},
{"data" : "status"},
{"data" : "Owner"},
{"data" : "Tenants"},
 {"data": "Message"},
{"data": null,
  render: function ( data, type, row ) {
    return '<button type="button" name="updateF" onclick="Feed(`'+data['Reference']+'`)" class="btn btn-danger btn-md update" style="font-size:12px">Send Agreement</button> <button type="button" name="updateF" onclick="Agreement(`'+data['HouseRef']+'`,`'+data['Sender']+'`,`'+data['Email']+'`,`'+data['User_Ref']+'`)" class="btn btn-primary btn-md update" style="font-size:12px">View Agreement</button> <button type="button" name="updateF" onclick="Sign(`'+data['Reference']+'`)" class="btn btn-light btn-md update" style="font-size:12px">Sign Agreement</button>';
  }}

    ]

  })






function Feed(ref){

    $.ajax(
    {
        url: '{{route("Approve")}}',
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


function Agreement(HouseRef,Sender,Email,User_Ref){

    $.ajax(
    {
        url: '{{route("Agreement")}}',
        type: 'get',
        data: {
          "HouseRef" : HouseRef,
          "Sender" : Sender,
          "Email" : Email,
          "Owner_Ref" : User_Ref,

        },
        success: function (result){

document.getElementById("Agreement").innerHTML = result;



 }

    });

}


function Sign(ref){

   if (confirm('Are you sure you want to Sign this Agreement : '+ref+' ?')) {


    $.ajax(
    {
        url: '{{route("SignOwner")}}',
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

  }




</script>






<script type="text/javascript">
  $('#showbills').DataTable({
    "processing": true,
    "serverSide": true,
    "ajax": "{{ route('PropertyVbillsCom')}}",
    "columns": [
    {"data" : "Reference"},
    {"data" : "Tenants"},
    {"data" : "Email"},
    {"data" : "HouseRef"},
{"data" : "status"},
{"data" : "price"},
{"data" : "created_at"},
    ]

  })

</script>







<style type="text/css">
.time {
    opacity: 0;  
    animation: opacityOn 5s normal forwards;
    animation-delay: 1s;
}

@keyframes opacityOn {
    0% {
        opacity: 0.6;
    }
    10% {
        opacity: 0.2;
    }
    20% {
        opacity: 0.6;
    }
    30% {
        opacity: 0.2;
    }
    40% {
        opacity: 0.6;
    }
    50% {
        opacity: 0.2;
    }
    60% {
        opacity: 0.6;
    }
    70% {
        opacity: 0.2;
    }
    80% {
        opacity: 0.6;
    }
    90% {
        opacity: 0.2;
    }
    100% {
        opacity: 0.6;
    }




}
</style>