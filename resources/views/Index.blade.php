
@extends('layouts.Nav')

@section('page')
<i class="fas fa-tachometer-alt"></i> Home
@endsection

@section('path')
Dashboard
@endsection


@section('content')
<div class="container-fluid" id="container-wrapper">




          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
  

            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">About</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                
                  </div>
                </div>
                <div class="card-body">
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
features requirement.                 
                </div>
              </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Services we offer</h6>
            
                <div class="card-body">
                  
                  
The general objective is to develop an online rental system that can.<ul>
<li>Administrate centralized rental system for house owner and tenant.</li>
<li>Manage rental process management.</li>
<li>Generate the revenue report for the house owners based on their monthly 
profit.</li>
<li>Present a list of properties based on the end users by Searching and filtering
technique.</li> 
</ul>
                </div>
                <div class="card-footer text-center">
                  <a class="m-0 small text-primary card-link" href="#"> <i
                      class="fas fa-chevron-right"></i></a>
                </div>
              </div>
            </div>
            <!-- Invoice Example -->
           
            <!-- Message From Customer-->
    
</div>
@endsection
