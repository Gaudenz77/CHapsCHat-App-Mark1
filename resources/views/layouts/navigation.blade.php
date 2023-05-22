<nav class="navbar navbar-expand-md fixed-top container-fluid">
    <img src="./assets/img/Group 26.svg" alt="logo_image" class="img-fluid mt-3">
    <h1><a class="brand myNavUnderline" href="{{ url('/') }}">{{ config('app.name', 'CHapsCHat') }}</a></h1>
    {{-- @include('components.toggle') --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <div class="offcanvas-title" id="offcanvasNavbarLabel">
                </div>
                <img src="./assets/img/Group 26.svg" alt="logo_image" class="img-fluid">
                <h2><a class="brand myNavToggleTitle" href="{{ url('/') }}"> {{ config('app.name', 'CHapsCHat') }} </a></h2>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            
            <div class="offcanvas-body px-3">
            @auth
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
              <li class="nav-item">
            
                <a class="d-inline-flex p-0">@include('components.toggle')</a>
                @if (Route::has('login'))
                    @auth
                  {{-- <a class="navbar-brand text-dark" href="{{ url('/') }}">
                  {{ config('app.name', 'CHapsCHat') }} </a> --}}
              </li>
  
              <li class="nav-item py-3">
              <a class="myNavUnderline px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/playground') }}">Playground</a>
              </li>
  
              <li class="nav-item py-3">
                  <a class="myNavUnderline px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/blogoSphere') . '/' . session('blogId') }}">Blogosphere </a>
                  {{-- <a class="nav-link {{ (request()->is('/tipps')) ? 'active' : '' }}" aria-current="page" href="{{ url('/tipps') . '/' . session('feedbackMapId') }}">Tipps</a> --}}
              </li>
  
              <li class="nav-item py-3">
                  <a class="myNavUnderline px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/knowledgeSphere') }}">KnowledgeSphere </a>
              </li>
  
              <li class="nav-item py-3">
              <a class="myNavUnderline px-0 {{ (request()->is('about')) ? '' : '' }}" aria-current="page" href="{{ url('/about') }}">About</a>
              </li>
                <!-- TOGGLE AMAZING START-->
                <!-- <li class="toggle  py-3">
                  @include('components.toggle')
                </li> -->
                <!-- TOGGLE AMAZING STOP-->

                <li class="nav-item dropdown mx-0 pe-4">
                    <a class="myNavUnderline dropdown-toggle m-3 px-0 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- @if (Route::has('login'))
                    @auth --}}
                    {{-- <a href="{{ url('dashboard') }}" class="">My Account</a> --}}
                    {{ Auth::user()->name }}
                    </a>
                <ul class="dropdown-menu" id="myDropdownAccount">
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
            </ul>
            @endauth
            
        </div>
    </div>
  </nav>