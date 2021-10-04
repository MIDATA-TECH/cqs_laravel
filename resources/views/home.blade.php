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


<div class="container pt-2 bg-white">

<h2>Dashboard</h2>
<div class=" row">
        
               
        @if(Auth::user()->accountType != 'Licensee/Contractors')         
         
        <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-primary rounded">
                <div class="card-header bg-primary ">
                        <h3 class="text-white">
                        <i class="bi bi-person-fill text-white"></i>
                        
                           {{Auth::user()->accountType}} Profile 
                    </h3>
                </div>
                <div class="container p-1 mt-4">
                    <!-- <a href="https://cqs.ewura.go.tz/Forms/BusinessEntity_PreRegistration" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-pen mr-2"></i> Edit Profile </a>  -->
                            
                <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-pen mr-2"></i> Edit Profile 
                </button>    
                
                
                
                
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-success rounded">
                <div class="card-header bg-success ">
                    <h3 class="text-white">
                        <i class="bi bi-person-plus-fill text-white"></i> 
                               Registration 
                    </h3>
                </div>
                <div class="container p-1 mt-4">
                     @if(Auth::user()->accountType == 'Professional')    
                     <button type="button" data-toggle="modal" data-target="#lsspform" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-person-check mr-2"></i>  {{Auth::user()->accountType}} Registration  
                    <!-- <a href="https://cqs.ewura.go.tz/Forms/BusinessEntity_PreRegistration" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-person-check mr-2"></i>  Proffesional Registration </a>  -->
                    @else     
                    <button type="button" data-toggle="modal" data-target="#lsspform" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-person-check mr-2"></i>  {{Auth::user()->accountType}} Registration  

                    <!-- <a href="https://cqs.ewura.go.tz/Forms/BusinessEntity_PreRegistration" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-person-check mr-2"></i>  LSSP Registration </a>  -->
                    @endif
                </div>
            </div>

        </div>

        <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-warning rounded">
                <div class="card-header bg-warning ">
                        <h3 class="text-primary">
                        <i class="bi bi-check-lg"></i>
                                Approval
                    </h3>
                </div>
                <div class="container p-1 mt-4">

                    <!-- <a href="https://cqs.ewura.go.tz/Forms/BusinessEntity_PreRegistration" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-eye mr-2"></i>View Approval Status </a>  -->
                    <button type="button" data-toggle="modal" data-target="#approval" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-pen mr-2"></i> View Approval Status  
                </button>                
                </div>
            </div>

        </div>


        @else
        <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-primary rounded">
                <div class="card-header bg-primary ">
                        <h3 class="text-white">
                        <i class="bi bi-person-fill text-white"></i>
                           Your Profile <br>
                    </h3>
                </div>
                <div class="container p-1 mt-4">
                    <!-- <a href="https://cqs.ewura.go.tz/Forms/BusinessEntity_PreRegistration" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-pen mr-2"></i> Edit Profile </a>  -->
                    <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-pen mr-2"></i> Edit Profile 
                </button>  
                
                <button type="button" data-toggle="modal" data-target="#licenseeform" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-person-check mr-2"></i> Complete Registration 
                </button>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-warning rounded">
                <div class="card-header bg-warning ">
                        <h3 class="text-primary">
                            
                            <i class="bi bi-newspaper text-primary"></i>
                                Local Content Plan 
                    </h3>
                </div>
                <div class="container p-1 mt-4">
                    <!-- <a href="https://cqs.ewura.go.tz/Forms/BusinessEntity_PreRegistration" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-check mr-2"></i>  Submit Local Content Plan </a>  -->
                    <button type="button" data-toggle="modal" data-target="#localcontentplan" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-check mr-2"></i>  Submit Local Content Plan
                    </button>      
                    <button type="button" data-toggle="modal" data-target="#localcontentplan" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-eye mr-2"></i>  View Status
                    </button>     
                </div>
            </div>

        </div> 

        <div class="col-md-4">
            <div class="card shadow-sm p-3 mb-5 bg-success rounded">
                <div class="card-header bg-success ">
                        <h3 class="text-white">
                            <i class="bi bi-file-bar-graph-fill text-white"></i>
                                Local Content Report
                    </h3>
                </div>
                <div class="container p-1 mt-4">
                <button type="button" data-toggle="modal" data-target="#qreport" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-align-center mr-2"></i> Submit Report
                    </button>   

                    {{-- <button type="button" data-toggle="modal" data-target="#areport" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-arrow-clockwise mr-2"></i>  Annual
                    </button>    --}}

                    <button type="button" data-toggle="modal" data-target="#areport" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-eye mr-2"></i> View Status
                    </button>
                </div>
            </div>
            
        </div> 

        @endif
        
                </div>

                @include('inc.errors')
                @include('inc.messages')

<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link text-primary active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="bi bi-bell m-1"></i>Notifications</button>
    <button class="nav-link text-primary" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="bi bi-person-square m-1"></i>User Profile</button>
    <button class="nav-link text-primary" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="bi bi-bell m-1"></i>Saved Drafts</button>
    
  </div>
</nav>


<div class="tab-content mt-3 pt-3" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        
                <div class="row ml-2">
                    
                <div class="list-group col-md-8">
                <h4>
                <i class="bi bi-bell m-1"></i>  Notifications
                </h4>
                
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                   
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                   
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                   
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </div>


                <div class="list-group col-md-4 container">
                <h4>
                <i class="bi bi-clock-history"></i> Activities Summary
                </h4>
                    
                <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Activity</th>
                    </tr>
                    
                </thead>
                <tbody>
                    <tr>
                   
                    <td>12/03</td>
                    <td>Created Account</td>
                    
                    </tr>
                    <tr>
                   
                   <td>12/03</td>
                   <td>Created Account</td>
                   
                   </tr>
                   <tr>
                   
                   <td>12/03</td>
                   <td>Created Account</td>
                   
                   </tr>
                   <tr>
                   
                   <td>12/03</td>
                   <td>Created Account</td>
                   
                   </tr>
                   
                </tbody>
                </table>
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

    <div class="row">
    


        <div class="col-md-8 container table-responsive">
       
            @if ( Auth::user()->accountType == "Professional")
                
            <h3>{{Auth::user()->accountType}} User Details</h3>
            @isset($profile['status'])
            
            <button type="button" data-toggle="modal" data-target="#lsspform" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-person-check mr-2"></i>Complete  {{Auth::user()->accountType}} Registration  </button>

                @else 
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>SN</th>
                        <td>
                            @isset($profile['_proMDSID'])
                            {{$profile['_proMDSID']}}
                                @endisset
            
                                @isset($profile['_proUPSID'])
                            {{$profile['_proUPSID']}}
                                @endisset
                        </td>
                        </tr>
                        <th>Registration ID</th>
                        <td>{{$profile["_proRegID"]}}</td>
                        </tr>
                        <tr>
                        <th>Firstname:</th>
                        <td>{{$profile["_firstName"]}}</td>
                        </tr>
                        <tr>
                        <th>Middlename:</th>
                        <td>{{$profile["_middleName"]}}</td>
                        </tr>
                        <tr>
                        <th>Firstname:</th>
                        <td>{{$profile["_surname"]}}</td>
                        </tr>
                        <tr>
                         <th>Fullname:</th>
                         <td>{{$profile["_fullName"]}}</td>
                         </tr>
                         <tr>
                         <th>Sex:</th>
                          <td>{{$profile["_sex"]}}</td>
                         </tr>
                         <tr>
                         <th>Birthday:</th>
                          <td>{{$profile["_birthDate"]}}</td>
                         </tr>
                         <tr>
                          <th>Address:</th>
                         <td>{{$profile["_address"]}}</td>
                        </tr>
                        <tr>
                            <th>Nationality:</th>
                           <td>{{$profile["_nationality"]}}</td>
                          </tr>
        
                          <tr>
                            <th>NationalID:</th>
                           <td>{{$profile["_nationalID"]}}</td>
                          </tr>
                          <tr>
                            <th>Voter Registration ID:</th>
                           <td>{{$profile["_voterRegistrationID"]}}</td>
                          </tr>
        
                          <tr>
                            <th>Passport ID:</th>
                           <td>{{$profile["_passportID"]}}</td>
                          </tr>
                          <tr>
                            <th>Email:</th>
                           <td>{{$profile["_email"]}}</td>
                          </tr>
                          <tr>
                            <th>Attend Training:</th>
                           <td>{{$profile["_attendTraining"]}}</td>
                          </tr>
                          <tr>
                            <th>Professional Bio:</th>
                           <td>{{$profile["_professionalBio"]}}</td>
                          </tr>
                          <tr>
                            <th>Employee Status:</th>
                           <td>{{$profile["_employmentStatus"]}}</td>
                          </tr>
                          <tr>
                            <th>Employee Sector:</th>
                           <td>{{$profile["_employedSector"]}}</td>
                          </tr>
                          <tr>
                            <th>Working Experience:</th>
                           <td>{{$profile["_workingExperience"]}}</td>
                          </tr>
                          <tr>
                            <th>High Education Level:</th>
                           <td>{{$profile["_highestEduLevel"]}}</td>
                          </tr>
                          <tr>
                            <th>Cadre Category:</th>
                           <td>{{$profile["_cadreCategory"]}}</td>
                          </tr>
                          <tr>
                            <th>CQS Registration Number:</th>
                           <td>{{$profile["_cqsRegNum"]}}</td>
                          </tr>
                          <tr>
                            <th>Registration File Number:</th>
                           <td>{{$profile["_regFileNo"]}}</td>
                          </tr>
                          <tr>
                            <th>Registration Validation Code:</th>
                           <td>{{$profile["_regValidationCode"]}}</td>
                          </tr>
                          <tr>
                            <th>Registration Stage:</th>
                           <td>{{$profile["_regStage"]}}</td>
                          </tr>
                          <tr>
                            <th>Registration Status:</th>
                           <td>{{$profile["_regStatus"]}}</td>
                          </tr>
                          <tr>
                            <th>Entry Date:</th>
                           <td>{{$profile["_entryDate"]}}</td>
                          </tr>
                          <tr>
                            <th>Deactivate:</th>
                           <td>{{$profile["_deactivate"]}}</td>
                          </tr>

                    </tbody>
                    </table>



                    
            @endisset
            
            @elseif (Auth::user()->accountType == "LSSP")


            <h3>{{Auth::user()->accountType}} User Details</h3>

            @isset($profile['status'])
            
            <button type="button" data-toggle="modal" data-target="#lsspform" class="btn shadow-lg btn-default bg-white text-primary btn-sm"><i class="bi bi-person-check mr-2"></i> Complete  {{Auth::user()->accountType}} Registration  </button>
            @else 
            <table class="table table-bordered">
            <thead>
            <tr>
                <th>SN</th>
                <td>
                    @isset($up['_spMDSID'])
                    {{$up['_spMDSID']}}
                        @endisset
    
                        @isset($up['_spUPSID'])
                    {{$up['_spUPSID']}}
                        @endisset
                </td>
                </tr>
                <th>Registration ID</th>
                <td>
                    {{$profile["_cqsRegNum"]}}</td>
                </tr>
                <tr>
                <th>Legal Name:</th>
                <td>{{$profile["_spLegalName"]}}</td>
                </tr>
                <tr>
                <th>Service Provider Category:</th>
                <td>{{$profile["_serviceProvideCategory"]}}</td>
                </tr>
                <tr>
                <th>Major Business:</th>
                <td>{{$profile["_majorBusiness"]}}</td>
                </tr>
                <tr>
                 <th>Major Business Description:</th>
                 <td>{{$profile["_majorBusinessDesc"]}}</td>
                 </tr>
                 <tr>
                 <th>Business Period:</th>
                  <td>{{$profile["_businessPeriod"]}}</td>
                 </tr>
                 <tr>
                 <th>Busiiness Start Date:</th>
                  <td>{{$profile["_businessStartDate"]}}</td>
                 </tr>
                 <tr>
                  <th>Engaged Projects:</th>
                 <td>{{$profile["_engagedProjects"]}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                   <td>{{$profile["_email"]}}</td>
                  </tr>

                  <tr>
                    <th>Phone Code:</th>
                   <td>{{$profile["_phone1"]}}</td>
                  </tr>
                  <tr>
                    <th>Phone Number:</th>
                   <td>{{$profile["_phone1"]}}{{$profile["_phone2"]}}</td>
                  </tr>

                  <tr>
                    <th>Region:</th>
                   <td>{{$profile["_region"]}}</td>
                  </tr>
                  <tr>
                    <th>District:</th>
                   <td>{{$profile["_district"]}}</td>
                  </tr>


                
            </tbody>
            </table>

            @endisset

             @else

             @isset($profile['status'])
             
             <p>No data found</p>
             @else 
            <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <td>
                              
                                {{$profile['_clID']}}
                        
                            </td>
                            </tr>
                            <th>Registration ID</th>
                            <td>{{$profile["_clRegID"]}}</td>
                            </tr>
                            <tr>
                            <th>Category:</th>
                            <td>{{$profile["_clCategory"]}}</td>
                            </tr>
                            <tr>
                            <th>Company Name:</th>
                            <td>{{$profile["_companyName"]}}</td>
                            </tr>
                            <tr>
                            <th>Region:</th>
                            <td>{{$profile["_locatedRegion"]}}</td>
                            </tr>
                            <tr>
                             <th>District:</th>
                             <td>{{$profile["_locatedDistrict"]}}</td>
                             </tr>
                             <tr>
                             <th>_locatedStreet:</th>
                              <td>{{$profile["_locatedStreet"]}}</td>
                             </tr>
                             <tr>
                             <th>Phone Number:</th>
                              <td>{{$profile["_phoneNo"]}}</td>
                             </tr>
                             <tr>
                              <th>Email Address:</th>
                             <td>{{$profile["_emailAddress"]}}</td>
                            </tr>
                            <tr>
                                <th>Postal Address:</th>
                               <td>{{$profile["_postalAddress"]}}</td>
                              </tr>
            
                              <tr>
                                <th>Tax Identification No:</th>
                               <td>{{$profile["_taxIdentificationNo"]}}</td>
                              </tr>
                              <tr>
                                <th>Tax Clearance No:</th>
                               <td>{{$profile["_taxClearanceNo"]}}</td>
                              </tr>
            
                              <tr>
                                <th>Operational Industry:</th>
                               <td>{{$profile["_operationalIndustry"]}}</td>
                              </tr>
                              <tr>
                                <th>Permanet File No:</th>
                               <td>{{$profile["_permanetFileNo"]}}</td>
                              </tr>
                              <tr>
                                <th>File No:</th>
                               <td>{{$profile["_regFileNo"]}}</td>
                              </tr>
                              <tr>
                                <th>Local Content File No:</th>
                               <td>{{$profile["_localContentFileNo"]}}</td>
                              </tr>
                              <tr>
                                <th>Registered Date:</th>
                               <td>{{$profile["_registeredDate"]}}</td>
                              </tr>
                             
                              <tr>
                                <th>Registration Status:</th>
                               <td>{{$profile["_regStatus"]}}</td>
                              </tr>
                              
                        </tbody>
                        </table>
                @endisset

                
            @endif

           
        </div>
        

        <div class="col-md-4 container">
        
        <div class="col-md-12 container">
        <h3> Profile Summary</h3>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Name:</th>
                <td>{{Auth::user()->name}}</td>
                </tr>
               
                <tr>
                    <th>Email:</th>
                    <td>{{Auth::user()->email}}</td>
                </tr>
               
                <tr>
                    <th>Account Type</th>
                    <td>{{Auth::user()->accountType}}</td>
                </tr>
            </tbody>
            </table>
       
        <!-- <button class="btn-block shadow-lg btn-primary p-2 rounded">Edit Profile</button> -->
        <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn shadow-md btn-sm btn-primary m-1"><i class="bi bi-pen mr-2"></i> Edit Profile
         </button> 

        <button type="button" data-toggle="modal" data-target="#changepassword" class="btn shadow-md btn-sm btn-primary m-1"><i class="bi bi-pen mr-2"></i> Change Password
         </button>  
         
         <button type="button" data-toggle="modal" data-target="#changepassword" class="btn shadow-lg btn-sm btn-danger m-1"><i class="bi bi-pen mr-2"></i> Disable account
         </button> 
        <!-- <button class="btn-block btn-danger p-2 rounded">Disable account</button> -->
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
@include('inc.modals.editprofile') 
@include('inc.modals.changepassword') 
@include('inc.modals.approvalstatus') 
@include('inc.modals.lsspform')
@include('inc.modals.licenseeform')
@include('inc.modals.proffesionalform')
@include('inc.modals.localcontentplan') 
@include('inc.modals.areport') 
@include('inc.modals.qreport')


@endsection
