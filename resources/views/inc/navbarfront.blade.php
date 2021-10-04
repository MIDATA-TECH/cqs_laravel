

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
                            

                            @if (Route::has('register'))
                                
                                <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      Register
                                  </a>
                                  
                                  <div class="dropdown-menu dropdown-menu-right ml-4" aria-labelledby="navbarDropdown">
                                   
                                    <a class="nav-item dropdown-item" href="{{ route('getregister') }}?accountType=Professional">{{ __('Professional') }}</a>
                                    <a class="dropdown-item" href="{{ route('getregister') }}?accountType=LSSP">{{ __('LSSP') }}</a>
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
                            
                        @endguest

                       
                    </ul>
       
      </div>
    </div>
  </nav>