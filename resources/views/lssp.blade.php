<!DOCTYPE html>
<html lang="en">

        <head>
        <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
            
            <title>Common Qualification System</title>

            <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
            <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->
            

            <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

            <!-- Favicons -->
        <link rel="apple-touch-icon" href="images/CQS2.png" sizes="180x180">

        <link rel="icon" href="images/CQS2.png" sizes="16x16" type="image/png">
        <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
        <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
        <link rel="icon" href="images/CQS2.png">

        <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

        <meta name="theme-color" content="#7952b3">


            <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=b4d_hdAAK5I45BOPiDUfs8x2gaSYZB8SelZpeNEdWg5Hcwabpc3LnFLCPTDqPdNUdjI5uMx5oXyvpuie6G-JAgYc5zJhPeYdFnFaX9fB-6s" charset="UTF-8"></script><style>
            
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            .form-group{
                margin: 10px;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
            </style>

            
            <!-- Custom styles for this template -->
            <link href="https://getbootstrap.com/docs/5.1/examples/carousel/carousel.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
            
            <!-- JQ -->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.jss"></script>
        <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>


            <style>
                body{
                    height: 100%;
                    width: 100%;
                    padding-bottom: 0px;
                    margin-bottom: 0px;
                }
                .carousel-item{
                    height: 310px;
                } 
                .carousel-item img{
                    height: 310px;
                }
            </style>
        </head>
<body>


        <header class="fixed-top">
        <nav class="navbar navbar-expand-md navbar-light bg-primary py-0" style="">
            <div class="container-fluid">
            
            <div class="collapse navbar-collapse container" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
        
                </ul>


                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                
                    <li class="nav-item">
                                            <a class="nav-link text-light" >info@cqs.go.tz</a>
                                        </li>
                            </ul>
            
            </div>
            </div>
        </nav>
        <nav class="navbar navbar-expand-md navbar-primary bg-light sticky-top shadow-sm bg-white">
            <div class="container-fluid">
            <a class="navbar-brand" href="/#">C Q S</a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dark-blue-text text-primary"><i class="bi bi-list text-bold" style="font-weight: 100px"></i></span>
            </button>
            <div class="collapse navbar-collapse container" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/#about-section">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#help-center">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                

                
                
                </ul>

                <!-- <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                @if (Route::has('login'))
                    
                            @auth
                            <li class="nav-item">
                            <a href="{{ url('/home') }}" class="nav-link">Dashboard</a>
                                </li>
                                
                            @else
                            
                                <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                                @endif
                            @endauth
                        
                    @endif
                </ul> -->

                


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        
                                        <a class="dropdown-item" href="{{ route('home') }}">
                                                {{ __('Dashboard') }}
                                            </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>


                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>


                                        </div>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" ></a>
                                        </li>
                                @endguest
                            </ul>
            
            </div>
            </div>
        </nav>
        </header>



        <main class="mt-4 pt-4">

        <div class="container">
        <div class="row justify-content-center p-2">
            <h2>TANZANIA LOCAL SUPPLIERS AND SERVICE PROVIDERS DATABASE</h2>
        </div>
        </div>

        

        <div class="pt-2">

                 <!-- tabs -->

            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Mid-Down Stream Operations</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Upstream Operations</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Both Operations</button>
            </li>
            </ul>
            <div class="tab-content p-2 pt-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                <!-- TABLE -->
                <div class="table-responsive">
            <table id="example" class="display" style="width:100%">
                <thead>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                <tr>
                    <td style="width: 1%;">REF. NO</td>
                    <td>Company Name</td>
                    <td>Service Provider Category</td> 
                    <td>Major Business Category</td>
                    <td>Details of Business Category</td>
                    <td>Projects Implemented</td>
                    <td>Years in the Business</td>
                    <td>Physical Address</td>
                    <td>Email</td>
                    <td>Phone Number</td>
                    <td>Region</td>
                    <td>District</td>
                  </tr>
                </thead>
              <tbody>
                
                        
        </tr>
            <tr> 
          <td style="width: 10%;">LSSP-2021-7-3</td>          
          <td style="width: 10%;">Igwachanya</td>
          <td style="width: 10%;">Limited Liability Company</td> 
          <td style="width: 10%;">Manufacturing</td>
          <td style="width: 10%;">Manufacturing</td>
          <td style="width: 10%;">Above 20</td>
          <td style="width: 10%;"></td>
          <td style="width: 10%;">Dodoma</td>
          <td style="width: 10%;">kaganga@ewura.go.tz</td>
          <td style="width: 10%;"></td>
          <td style="width: 10%;">Dodoma</td>
          <td style="width: 10%;">Dodoma Mjini</td>
        </tr>

        @foreach($db['downstream'] as $up)
        <tr> 
          <td style="width: 10%;">{{$up['_spMDSID']}}</td>          
          <td style="width: 10%;">{{$up['_spLegalName']}}</td>
          <td style="width: 10%;">{{$up['_serviceProvideCategory']}}</td> 
          <td style="width: 10%;">{{$up['_majorBusiness']}}</td>
          <td style="width: 10%;">{{$up['_majorBusinessDesc']}}</td>
          <td style="width: 10%;">{{$up['_engagedProjects']}}</td>
          <td style="width: 10%;">{{$up['_businessPeriod']}}</td>
          <td style="width: 10%;">{{$up['_address']}}</td>
          <td style="width: 10%;">{{$up['_email']}}</td>
          <td style="width: 10%;">{{$up['_phone1']}}{{$up['_phone2']}}</td>
          <td style="width: 10%;">{{$up['_region']}}</td>
          <td style="width: 10%;">{{$up['_district']}}</td>
        </tr>
        @endforeach

                                                            
              </tbody>
              <tfoot>
                <tr>
                  <th style="width: 100px;">By Ref No</th>
                  <th>By Company Name</th>
                  <th>By Service Provider Category</th> 
                  <th>By Major Business Category</th>
                  <th>By Details of Business Category</th>
                  <th>By Projects Implemented</th>
                  <th>By Years in the Business</th>
                  <th>By Address</th>
                  <th>By Email</th>
                  <th>By Phone Number</th>
                  <th>By Region</th>
                  <th>By District</th>
                </tr>
              </tfoot>
          </table>

              
        </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              
                <!-- TABLE -->
                <div class="table-responsive">
            <table id="downstream" class="display" style="width:100%">
                <thead>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                <tr>
                    <td style="width: 1%;">REF. NO</td>
                    <td>Company Name</td>
                    <td>Service Provider Category</td> 
                    <td>Major Business Category</td>
                    <td>Details of Business Category</td>
                    <td>Projects Implemented</td>
                    <td>Years in the Business</td>
                    <td>Physical Address</td>
                    <td>Email</td>
                    <td>Phone Number</td>
                    <td>Region</td>
                    <td>District</td>
                  </tr>
                </thead>
              <tbody>
                
                        
        </tr>
            <tr> 
          <td style="width: 10%;">LSSP-2021-7-3</td>          
          <td style="width: 10%;">Igwachanya</td>
          <td style="width: 10%;">Limited Liability Company</td> 
          <td style="width: 10%;">Manufacturing</td>
          <td style="width: 10%;">Manufacturing</td>
          <td style="width: 10%;">Above 20</td>
          <td style="width: 10%;"></td>
          <td style="width: 10%;">Dodoma</td>
          <td style="width: 10%;">kaganga@ewura.go.tz</td>
          <td style="width: 10%;"></td>
          <td style="width: 10%;">Dodoma</td>
          <td style="width: 10%;">Dodoma Mjini</td>
        </tr>

        @foreach($db['upstream'] as $up)
        <tr> 
          <td style="width: 10%;"> 
         
          {{$up['_spUPSID']}}
          


        </td>          
          <td style="width: 10%;">{{$up['_spLegalName']}}</td>
          <td style="width: 10%;">{{$up['_serviceProvideCategory']}}</td> 
          <td style="width: 10%;">{{$up['_majorBusiness']}}</td>
          <td style="width: 10%;">{{$up['_majorBusinessDesc']}}</td>
          <td style="width: 10%;">{{$up['_engagedProjects']}}</td>
          <td style="width: 10%;">{{$up['_businessPeriod']}}</td>
          <td style="width: 10%;">{{$up['_address']}}</td>
          <td style="width: 10%;">{{$up['_email']}}</td>
          <td style="width: 10%;">{{$up['_phone1']}}{{$up['_phone2']}}</td>
          <td style="width: 10%;">{{$up['_region']}}</td>
          <td style="width: 10%;">{{$up['_district']}}</td>
        </tr>
        @endforeach

                                                            
              </tbody>
              <tfoot>
                <tr>
                  <th style="width: 100px;">By Ref No</th>
                  <th>By Company Name</th>
                  <th>By Service Provider Category</th> 
                  <th>By Major Business Category</th>
                  <th>By Details of Business Category</th>
                  <th>By Projects Implemented</th>
                  <th>By Years in the Business</th>
                  <th>By Address</th>
                  <th>By Email</th>
                  <th>By Phone Number</th>
                  <th>By Region</th>
                  <th>By District</th>
                </tr>
              </tfoot>
          </table>

              
        </div>

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

               <!-- TABLE -->
               <div class="table-responsive">
            <table id="downstream" class="display" style="width:100%">
                <thead>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                <tr>
                    <td style="width: 1%;">REF. NO</td>
                    <td>Company Name</td>
                    <td>Service Provider Category</td> 
                    <td>Major Business Category</td>
                    <td>Details of Business Category</td>
                    <td>Projects Implemented</td>
                    <td>Years in the Business</td>
                    <td>Physical Address</td>
                    <td>Email</td>
                    <td>Phone Number</td>
                    <td>Region</td>
                    <td>District</td>
                  </tr>
                </thead>
              <tbody>
                
                        
        </tr>
            <tr> 
          <td style="width: 10%;">LSSP-2021-7-3</td>          
          <td style="width: 10%;">Igwachanya</td>
          <td style="width: 10%;">Limited Liability Company</td> 
          <td style="width: 10%;">Manufacturing</td>
          <td style="width: 10%;">Manufacturing</td>
          <td style="width: 10%;">Above 20</td>
          <td style="width: 10%;"></td>
          <td style="width: 10%;">Dodoma</td>
          <td style="width: 10%;">kaganga@ewura.go.tz</td>
          <td style="width: 10%;"></td>
          <td style="width: 10%;">Dodoma</td>
          <td style="width: 10%;">Dodoma Mjini</td>
        </tr>

        @foreach($db['both'] as $up)
        <tr> 
          <td style="width: 10%;">
                @isset($up['_spMDSID'])
                {{$up['_spMDSID']}}
                    @endisset

                    @isset($up['_spUPSID'])
                {{$up['_spUPSID']}}
                    @endisset
        </td>          
          <td style="width: 10%;">{{$up['_spLegalName']}}</td>
          <td style="width: 10%;">{{$up['_serviceProvideCategory']}}</td> 
          <td style="width: 10%;">{{$up['_majorBusiness']}}</td>
          <td style="width: 10%;">{{$up['_majorBusinessDesc']}}</td>
          <td style="width: 10%;">{{$up['_engagedProjects']}}</td>
          <td style="width: 10%;">{{$up['_businessPeriod']}}</td>
          <td style="width: 10%;">{{$up['_address']}}</td>
          <td style="width: 10%;">{{$up['_email']}}</td>
          <td style="width: 10%;">{{$up['_phone1']}}{{$up['_phone2']}}</td>
          <td style="width: 10%;">{{$up['_region']}}</td>
          <td style="width: 10%;">{{$up['_district']}}</td>
        </tr>
        @endforeach

                                                            
              </tbody>
              <tfoot>
                <tr>
                  <th style="width: 100px;">By Ref No</th>
                  <th>By Company Name</th>
                  <th>By Service Provider Category</th> 
                  <th>By Major Business Category</th>
                  <th>By Details of Business Category</th>
                  <th>By Projects Implemented</th>
                  <th>By Years in the Business</th>
                  <th>By Address</th>
                  <th>By Email</th>
                  <th>By Phone Number</th>
                  <th>By Region</th>
                  <th>By District</th>
                </tr>
              </tfoot>
          </table>

              
        </div>

            </div>
        </div>

     <!-- end tabs -->
        </div>

                
        
        </main>
        
  
    


     
  <!-- Footer -->
  <footer class="page-footer font-small pt-4 bg-primary text-light">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left pt-4">

  <!-- Grid row -->
  <div class="row" id="help-center">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3 container">

      <!-- Content -->
      <h5 class="text-uppercase"> Need Help ? </h5>
      <p class="container">
      Common Qualification System (CQS) is a tool intended to streamline standards, capacities and capabilities of suppliers and service providers in order to help licensees, contractors or any other operator who are carrying out petroleum and natural gas activities in Tanzania to obtain eligible local suppliers and services providers for provision of goods, services or execution of works

      </p>
      <h5 class="text-uppercase"> Contact Us</h5>
      <h6>info@cqs.go.tz</h6>
      <h6>+255 700 000 000</h6>

    </div>
    <!-- Grid column -->

  

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3 mt-3">

      <!-- Links -->
      <h5 class="text-uppercase">Quick Links</h5>

      <ul class="list-unstyled">
        
        <li class="nav-item">
            <a class="nav-link text-light" href="#">Home</a>
          </li>
        <li class="nav-item">
            <a class="nav-link text-light" href="#">About</a>
          </li>
        
        <li class="nav-item">
            <a class="nav-link text-light" href="#">Help</a>
          </li>
      
       
      </ul>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 mb-md-0 mb-3">

      <!-- Links -->
      <h5 class="text-uppercase">Related Links</h5>

      <ul class="list-unstyled">
   
        <li class="nav-item"> 
          <a class="nav-link text-light" href="#">Ministry of Energy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Pura</a>
      </li>
        <li class="nav-item"> 
          <a class="nav-link text-light" href="#">Lois</a>
        </li>
        <li class="nav-item">   
          <a class="nav-link text-light" href="#">Eris</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">Majis</a>
        </li>
    </ul>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2021 Copyright:
  <a href="https://cqs.ewura.go.tz/" class="text-light" style="text-decoration: none"> Common Qualification System</a>
</div>
<!-- Copyright -->

</footer>
</body>
<script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script type="text/javascript">
  function showDetails(button){
    var profile = button.id;
   // alert(profile);
    $.ajax({
        url:"http://localhost:5001/api/v1/lssp/upstream",
        method:"GET",
        data:{"profile":profile},
        success:function(response){
         //alert(response);
          //parsing the json string to javascript object
          var result = JSON.parse(response);
          //display in proper field
          $('#refno').val(result._cqsRegNum);
          $('#legalname').val(result._spLegalName);
          $('#businessname').val(result._spBusinessName);
          $('#category').val(result._spCategory);
          $('#city').val(result._city);
          $('#district').val(result._district);
          $('#mobile').val(result._mobilePhone);
          $('#phone').val(result._telePhone);
          $('#fax').val(result._fax);
          $('#email').val(result._email);
          $('#major').val(result._majorServiceActivity);
          $('#exampleFormControlTextarea2').val(result._serviceDesc);
          $('#supplierid').val(result._spEntryID);
        }
    });
  }
  </script>
  <script type="text/javascript">
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

        
    } );
 
    // DataTable
    var table = $('table').DataTable({
      "scrollY": "450px",
      "scrollX": true,
        initComplete: function () {
            // Apply the search
            this.api().columns().every( function () {
                var that = this;
 
                $( 'input', this.footer() ).on( 'keyup change clear', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
        }
    });
 
} );



</script>
</html>