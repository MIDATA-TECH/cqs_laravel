<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Common Qualification System</title> -->

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style> -->
<!-- 
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif

                    @endauth
                </div>
            @endif

            <h1>Welcome to CQS</h1>

               
            </div>
        </div>
    </body>
</html> -->





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    
    <title>Common Qualification System</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">
    <script src="{{ asset('js/app.js') }}" defer></script>
    

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
  @include('inc.navbarfront')
</header>

<main>
@yield('content')
  

<!-- Footer -->
</main class="">



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
  <script>
      $(document).ready(function() {
        $('#example').DataTable();
    } );
  </script>

    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       -->
  </body>
</html>
