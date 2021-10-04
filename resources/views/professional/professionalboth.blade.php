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


            {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>	
              --}}
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
            @include('inc.navbarfront')
        </header>



        <main class="mt-4 pt-4">

        <div class="container">
        <div class="row justify-content-center p-2">
            <h2>TANZANIA PROFESSIONALS DATABASE</h2>
        </div>
        </div>

        

        <div class="pt-2">

                 <!-- tabs -->

            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="/professional" style="text-decoration: none">
                <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Mid-Down Stream Operations</button>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="/professional/up" style="text-decoration: none">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Upstream Operations</button>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="/professional/both" style="text-decoration: none">
                <button class="nav-link active" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="true">Both Operations</button>
                </a>
            </li>
            </ul>
            <div class="tab-content p-2 pt-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                <!-- TABLE -->
                <div class="table-responsive">
            



          <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Nationality</th>
                <th>Proffesion</th>
                <th>Education Level</th>
                <th>Experience</th>
                <th>Employee Status</th>
                <th>Physical Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            @isset($db['both'])
                
           
        @foreach($db['both'] as $up)
        <tr>
            <td>
            @isset($up['_proMDSID'])
            {{$up['_proMDSID']}}
                @endisset

                @isset($up['_proUPSID'])
            {{$up['_proUPSID']}}
                @endisset
            </td>
            <td>{{$up['_firstName']}} {{$up['_middleName']}} {{$up['_surname']}}</td>
            <td>{{$up['_nationality']}}</td>
            <td>
                @isset($up['_proffesion'])
            {{$up['_proffesion']}}
                @endisset
            </td>
            <td>{{$up['_highestEduLevel']}}</td>
            <td>{{$up['_workingExperience']}}</td>
                 <td>{{$up['_employmentStatus']}}</td>
      <td>{{$up['_address']}}</td>
      <td>
                 @isset($up['_phoneNumber'])
                {{$up['_phoneNumber']}}
                @endisset</td>
      
      <td>{{$up['_email']}}</td>
        </tr>
            

           
        @endforeach
        @endisset
        </tfoot>
    </table>

              
        </div>

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

              
                <!-- TABLE -->
                <div class="table-responsive">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Nationality</th>
                <th>Proffesion</th>
                <th>Education Level</th>
                <th>Experience</th>
                <th>Employee Status</th>
                <th>Physical Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            @isset($db['both'])
                
           
        @foreach($db['both'] as $up)
            <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            </tr>
            

           
        @endforeach
        @endisset
        </tfoot>
    </table>

              
        </div>

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

               <!-- TABLE -->
               <div class="table-responsive">
               <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Name</th>
                <th>Nationality</th>
                <th>Proffesion</th>
                <th>Education Level</th>
                <th>Experience</th>
                <th>Employee Status</th>
                <th>Physical Address</th>
                <th>Phone Number</th>
                <th>Email</th>
                
            </tr>
        </thead>
        <tbody>
            @isset($db['both'])
        @foreach($db['both'] as $up)
        <tr>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
        <td>...</td>
        <td>...</td>
        <td>...</td>
        </tr>
            

           
        @endforeach
        @endisset  
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
</body>
</html>