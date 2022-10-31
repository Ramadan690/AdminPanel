@extends('layouts.Nav')


@section('page')
<i class="fas fa-tasks"></i> Users Consultation
@endsection

@section('path')
Users 
@endsection




@section('content')


        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">



          <!-- Row -->
          


          <div class="row">




  <!-- Earnings (Monthly) Card Example -->
   
            <!-- Earnings (Annual) Card Example -->
     
            <!-- New User Card Example -->
       
            <!-- Pending Requests Card Example -->
        

</div>







      


          <div class="row">
            <!-- Datatables -->


            <div class="col-lg-12">

              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between text-light" style="background-color: black">
                  <h6 class="m-0 font-weight-bold "><i class="fas fa-users"></i> Users   
</h6>

<button style="font-size: 13px;" type="button" id="add_button" class="btn btn-light" onclick="$('#showuser').DataTable().ajax.reload();"><i class="fas fa-refresh" aria-hidden="true"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg></button>
<a href="{{ route('AddUser') }}" target="_blank" style="float: right;"><button style="font-size: 13px;" type="button" id="add_button" class="btn btn-light"><i class="fas fa-plus-square"></i> <b></b></button></a>
                </div>
                <div class="table-responsive p-3">
<!--------------------------------------------->
@csrf
<table id="showuser" class="table table-sm table-striped table-hover table-dark" style="width:100%">
        <thead>
            <tr>
              <th>Reference</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Tel</th>
                <th>Address</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        </tbody>
     
    </table>

<!--
<button type="button" name="update"  class="btn btn-success btn-sm update" style="font-size:11px"><i class="fas fa-edit"></i></button></button> 

<button type="button" name="delete"  class="btn btn-danger btn-sm delete" style="font-size:11px"><i class="fas fa-trash-alt"></i></button> 

<button type="button" name="delete"  class="btn btn-primary btn-sm check" style="font-size:11px"><i class="fas fa-info-circle"></i></button>
-->


                </div>


<div class="card-footer text-center" style="background-color: black">
      
    </div>  

    <div class="modal fade " id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width: 400px">
    <div class="modal-content" >
      <div class="modal-header" style="background-color: black;color: white;">
        <h5 class="modal-title" id="exampleModalLabel"><B>User Details</B></h5>
        <button type="button" class="btn-close btn-primary" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body">



     <center>  <img src="{{url('https://cdn-icons-png.flaticon.com/512/64/64572.png')}}"   width="150" height="150" class="imga imga2" style="border-radius: 100px;border: solid lightblue 5px;"><br><br>

     <b> <span id="NameU"></span></b><br><span class="badge bg-success" id="RefU" style="color: white"> </center>

<hr>
<b>Role : </b> <span id="Role" style="float: right"></span><br>
<b>Email : </b> <span id="EmailU" style="float: right"></span><br>
<b>Tel : </b><span id="TelU" style="float: right"></span><br>
<b>Address : </b><span id="Address" style="float: right"></span><br>

      </div>
      <div class="modal-footer" style="background-color: black;">
      </div>
    </div>
  </div>
</div>

              </div>

            </div>
  

          </div>




@endsection

