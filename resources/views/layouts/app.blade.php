<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Common Qualification System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- icons -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="images/CQS2.png">
</head>
<body class="bg-white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-primary bg-white shadow-sm sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                Common Qualification System
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Help</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Contact</a>
                                </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                        @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}

                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        Register
                                    </a>
                                    
                                    <div class="dropdown-menu dropdown-menu-right ml-4" aria-labelledby="navbarDropdown">
                                     
                                      <a class="nav-item dropdown-item" href="{{ route('register') }}?accountType=Professional">{{ __('Professional') }}</a>
                                      <a class="dropdown-item" href="{{ route('register') }}?accountType=LSSP">{{ __('LSSP') }}</a>
                                      <a class="dropdown-item" href="/registerlicensee">{{ __('Licensee/Contractors') }}</a>
                                   
                                    </div>
                                </li>
                            @endif
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-primary" href="/">Home</a>
                                    <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 bg-white">
            @yield('content')
        </main>
  <footer>
        <div class="footer-copyright text-center py-3">© 2021 Copyright:
  <a href="https://cqs.ewura.go.tz/" class="text-primary" style="text-decoration: none"> Common Qualification System</a>
</div>
<!-- Copyright -->

</footer>
    </div>
    <script type="text/javascript">
  function showDetails(button){
    var profile = button.id;
   // alert(profile);
    $.ajax({
        url:"../Include/getcompanydetails.php",
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
            $('#example tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
            } );
        
            // DataTable
            var table = $('#example').DataTable({
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


    <script>
        $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
