@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container pt-2">

<h2>Dashboard</h2>

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-menu-button-wide m-1"></i>Menu</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="bi bi-person-square m-1"></i>User</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-bell m-1"></i>Notifications</button>
    
  </div>
</nav>


<div class="tab-content mt-3" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

  <div class="containe">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h1><i class="bi bi-person-circle"></i> </h1>Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    To update your profile details like change the password click change password button
                </div>
                <div class="container p-1">
                <!-- <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="bi bi-person-square m-1"></i>Profile</button> -->
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">View Profile</button>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Edit Profile</button>
                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target=".bd-example-modal-lg">Change Password</button>


                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                
                <div class="modal-dialog modal-lg bg-light">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                    <div class="modal-content">
                    <div class="embed-responsive embed-responsive-21by9">
                    <iframe class="embed-responsive-item" src="https://erick/Forms/form/approval/12f2f547-a516-4fbb-8d23-aa0fff2726de?hideHeader=true" height="400"></iframe>
                    </div>
                    </div>
                </div>
                </div>

                </div>
               
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h1><i class="bi bi-person-plus-fill"></i></h1>Registration</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    To update your profile details like change the password click change password button
                </div>
                <div class="container p-1">
                <a href="https://cqs.ewura.go.tz/Forms/BusinessEntity_PreRegistration" class="btn btn-primary btn-sm"> LSSP </a> 
                <a href="https://cqs.ewura.go.tz/Forms/Professional_PreRegistration" class="btn btn-warning btn-sm"> Proffessional </a>
                <a href="https://cqs.ewura.go.tz/Forms/cqsContractor_Licensee_Reg" class="btn btn-success btn-sm"> Licenses/Contractors </a>
                </div>
               
            </div>
        </div>


        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h1><i class="bi bi-file-earmark-post"></i></h1>Local Content Plan</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Thank you for joining CQS, to proceed clink complete registration button
                </div>
                <div class="container p-1">
                <a href="https://cqs.ewura.go.tz/Forms/localcontent" class="btn btn-primary btn-sm"> Open Form</a>
                </div>
               
            </div>
        </div>
    </div>
</div>


<div class="containe mt-2">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h1><i class="bi bi-file-earmark-post-fill"></i></h1>Local Content Plan Ammendment</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    To update your profile details like change the password click change password button
                </div>
                <div class="container p-1">
                <a href="https://cqs.ewura.go.tz/Forms/amendment" class="btn btn-primary btn-sm"> Open Form</a>
                </div>
               
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h1><i class="bi bi-hexagon-half"></i></h1>Semi Annual Procurement Forecast</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Thank you for joining CQS, to proceed clink complete registration button
                </div>
                <div class="container p-1">
                <a href="https://cqs.ewura.go.tz/Forms/semi-annualprocurement" class="btn btn-primary btn-sm"> Open Form</a>
                </div>
               
            </div>
        </div>


        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><h1><i class="bi bi-file-earmark-bar-graph"></i></h1>Local Content Performance Report</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Thank you for joining CQS, to proceed clink complete registration button
                </div>
                <div class="container p-1">
                <a href="https://cqs.ewura.go.tz/Forms/PerformanceReport" class="btn btn-primary btn-sm"> Quartery Report</a>
                <a href="https://cqs.ewura.go.tz/Forms/PerformanceReport" class="btn btn-primary btn-sm"> Annual Report</a>
                </div>
               
            </div>
        </div>
    </div>
</div>


  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="alert alert-primary" role="alert">
        Local content plan draft <a href="#" class="alert-link">click here</a> , proceed where you left
    </div>
    <div class="alert alert-primary" role="alert">
        Local content plan amendment draft <a href="#" class="alert-link">click here</a> , proceed where you left
    </div>
    <div class="alert alert-primary" role="alert">
        Semi annual procurement forecast <a href="#" class="alert-link">click here</a> , proceed where you left
    </div>

    <div class="alert alert-primary" role="alert">
        Quartery Local content performance report draft <a href="#" class="alert-link">here</a> , proceed where you left
    </div>
    <div class="alert alert-primary" role="alert">
        Annual Local content performance report draft <a href="#" class="alert-link">here</a> , proceed where you left
    </div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

    <div class="container row">
        
        <div class="col-8 container">
       

            <h3> User Details</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>First Name:</th>
                <td>Erick</td>
                </tr>
                <th>Last Name:</th>
                <td>Mgongo</td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td>+255 754 385 888</td>
                </tr>
                <tr>
                    <th>Account Type:</th>
                    <td>Proffessional</td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="col-4 container">
        
        <div class=" col-md-12 container">
        <h3> User Profile</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name:</th>
                <td>Erick Mgongo</td>
                </tr>
               
                <tr>
                    <th>Email:</th>
                    <td>erick@midata-tech.com</td>
                </tr>
               
                <tr>
                    <th>Password</th>
                    <td>*********</td>
                </tr>
            </tbody>
            </table>
       
        <button class="btn-block btn-primary m-1 rounded">Edit Profile</button>
        <button class="btn-block btn-primary m-1 rounded">Change Password</button>
        <button class="btn-block btn-danger m-1 rounded">Disable account</button>
        </div>
        
        </div>

    </div>
  </div>
</div>


</div>



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="embed-responsive embed-responsive-21by9">
            <iframe class="embed-responsive-item" src="https://erick/Forms/form/approval/12f2f547-a516-4fbb-8d23-aa0fff2726de?hideHeader=true" height="400"></iframe>
        </div>
      </div>
      
    </div>
  </div>
</div>


@endsection
