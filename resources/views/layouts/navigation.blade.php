<nav class="navbar navbar-scroll-hide navbar-expand-md fixed-top container-fluid" id="navbar">
    <img src="./assets/img/Group 26.svg" alt="logo_image" class="logoImg img-fluid mx-0 mt-sm-n1 ms-2"
        style="margin-bottom: -1rem;">
    {{-- @include('components.toggle') --}}
    <h1 class="display-5 ms-2 my-sm-0" style="font-style: italic;font-weight: 500;"><a class="brand myNavUnderlineTitle mt-0 mx-0 ms-2 me-2"
            href="{{ url('/') }}"><b>{{ config('app.name', 'CHapsCHat') }}</b></a>
    </h1>

    <button class="navbar-toggler navBarTogglOwn custom-toggler me-3 mb-0" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>   
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header mb-0">
            <div class="offcanvas-title" id="offcanvasNavbarLabel">
            </div>
            <img src="./assets/img/Group 26.svg" alt="logo_image" class="canvasLogo pt-2">
            <h2 class="mb-1 mb-md-2"><a class="brand myNavToggleTitle" style="font-style: italic;font-weight: 500;" href="{{ url('/') }}"> {{ config('app.name', 'CHapsCHat') }} </a>
            </h2>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>


        
        <div class="offcanvas-body px-3">

            <ul class="navbar-nav ms-auto mb-2 mb-md-0">

                <li class="nav-item">
                    
                        <a tabindex="0" data-bs-toggle="popover" data-bs-custom-class="popoverInfoMain"
                        data-bs-trigger="focus" data-bs-placement="right" data-bs-html="true"
                        data-bs-title="
                            <h3 class='{{-- text-white --}}'><b>INFOPOINT</b></h3>"
                        data-bs-content='
                            <div class="">
                                <p class="{{-- text-white --}}">Wherever you see this symbol, you will find helpful information.<br>
                                    <a class="myNavUnderline" href="http://127.0.0.1:8000/about"><b>more help...</b></a>
                            </div>'><i class="mainInfo fa-solid fa-circle-info fa-2x ms-2 ms-md-0 my-4 pt-1"></i></a>
   
                </li>

                <li class="nav-item pt-0 pt-md-3">
                    @if (Route::has('login'))
                        @auth
                </li>

                <li class="nav-item pt-0 pt-md-3">
                    <a class="myNavUnderline pt-0 pt-md-3 {{ request()->is('/') ? '' : '' }}" aria-current="page"
                        href="{{ url('/playground') }}" onclick="reloadTwice()"><b>Playground</b></a>
                </li>

                @endauth

                <li class="nav-item pt-3">
                    <a class="myNavUnderline pt-3 {{ request()->is('/') ? '' : '' }}" aria-current="page"
                        href="{{ url('/blogoSphere') }}"><b>Blogosphere</b></a>
                </li>

                @auth
                    <li class="nav-item pt-3">
                        <a class="myNavUnderline pt-3 {{ request()->is('/') ? '' : '' }}" aria-current="page"
                            href="{{ url('/knowledgeSphere ') }}"><b>KnowledgeSphere</b></a>
                    </li>
                @endauth
                <li class="nav-item pt-3">
                    <a class="myNavUnderline pt-3 {{ request()->is('about') ? '' : '' }}" aria-current="page"
                        href="{{ url('/about') }}"><b>About</b></a>
                </li>
                @auth
                    <li class="nav-item dropdown mx-0 pe-4">
                        <a class="myNavUnderline dropdown-toggle mt-4 pt-2" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b>{{ Auth::user()->name }}</b>
                        </a>
                        <ul class="dropdown-menu dropdownProfile py-0" id="myDropdownAccount">
                            <li class="nav-item"><a class="myNavUnderline pt-3" href="{{ url('profile') }}"><b>Profile</b></a></li>
                            <li class="nav-item"><a class="myNavUnderline pt-3" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><b>Log
                                        out</b></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @else
                            <li class="nav-item pt-3">
                                <a class="nav-item myNavUnderline pt-3" href="{{ route('login') }}"
                                    class=""><b>Login</b></a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item pt-3">
                                    <a class="nav-item myNavUnderline pt-3" href="{{ route('register') }}"
                                        class=""><b>Register</b></a>
                                </li>
                            @endif
                        @endauth
                        @endif
                    </ul>
                </li>
                <li class="nav-item mt-3 mt-md-0 pt-2" style="list-style-type: none; width:10rem;">
                    @include('components.toggle')
                </li>
            </ul>
        </div>
        {{-- <div class="toggle">
            @include('components.toggle')
        </div> --}}
    </div>
    {{-- @include('components.toggle') --}}
</nav>
