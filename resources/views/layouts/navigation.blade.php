<nav class="navbar navbar-expand-md fixed-top container-fluid">
    <img src="./assets/img/Group 26.svg" alt="logo_image" class="logoImg img-fluid mx-0 mt-sm-n1" style="margin-bottom: -1rem;">
    @include('components.toggle')
    <div class="display-2 display-md-6 ms-2 sm-my-0" style="height:80%;"><a class="brand myNavUnderline mt-0 mx-0 ms-2 me-2" href="{{ url('/') }}"><b>{{ config('app.name', 'CHapsCHat') }}</b></a></div>
   
          <button class="navbar-toggler custom-toggler me-3 mb-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header mb-0">
              <div class="offcanvas-title" id="offcanvasNavbarLabel">
                </div>
                <img src="./assets/img/Group 26.svg" alt="logo_image" class="img-fluid">
                <h2><a class="brand myNavToggleTitle" href="{{ url('/') }}"> {{ config('app.name', 'CHapsCHat') }} </a></h2>
                <button type="button" class="btn-close me-5 mb-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body px-3">
            
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
              
              <li class="nav-item">
                @if (Route::has('login'))
            @auth
              </li>
  
              <li class="nav-item py-3">
              <a class="myNavUnderline px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/playground') }}" onclick="reloadTwice()">Playground</a>
              </li>
            @endauth

              <li class="nav-item py-3">
                <a class="myNavUnderline px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/blogoSphere') }}">Blogosphere </a>
              </li>

            @auth
              <li class="nav-item py-3">
                  <a class="myNavUnderline px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/knowledgeSphere') }}">KnowledgeSphere </a>
              </li>
            @endauth
              <li class="nav-item py-3">
              <a class="myNavUnderline px-0 {{ (request()->is('about')) ? '' : '' }}" aria-current="page" href="{{ url('/about') }}">About</a>
              </li>
            @auth
                <li class="nav-item dropdown mx-0 pe-4">
                    <a class="myNavUnderline dropdown-toggle m-3 px-0 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdownProfile" id="myDropdownAccount">
                      <li><a class="nav-item myNavUnderline px-0 " href="{{ url('profile') }}">Profile</a></li>
                      <li><a class="nav-item myNavUnderline px-0 " href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
            @else

                      <li><a class="nav-item myNavUnderline py-4 px-0 " href="{{ route('login') }}" class="">Login</a></li>

            @if (Route::has('register'))
                      <li><a class="nav-item myNavUnderline py-4 px-0 " href="{{ route('register') }}" class="">Register</a></li>

            @endif
            @endauth
            @endif 
                  </ul>
                </li>
            </ul>
        </div>
    </div>
    {{-- @include('components.toggle') --}}
  </nav>

