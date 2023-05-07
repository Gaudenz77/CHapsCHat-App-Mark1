<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container-fluid">
        <a class="brand" href="{{  url('/') }}"></a>
        <button class="navbar-toggler border-0 text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
            <img src="./assets/img/Group 26.svg" alt="logo_image" class="img-fluid mt-3">
                <a class="navbar-brand  text-dark" href="{{ url('/') }}">
                    {{ config('app.name', 'CHapsCHat') }} </a>
                    
           
            @auth
            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                

                <li class="nav-item">
                    {{-- <a class="navbar-brand  text-dark" href="{{ url('/') }}">
                    {{ config('app.name', 'CHapsCHat') }} </a> --}}
                </li>

                <li class="nav-item">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/playground') }}">Playground</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/blogoSphere') }}">Blogosphere </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/knowledgeSphere') }}">KnowledgeSphere </a>
                </li>

                <li class="nav-item">
                <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }} text-dark" aria-current="page" href="{{ url('/about') }}">About</a>
                </li>
            <!-- TOGGLE AMAZING START-->
                <li class=" px-2">
                    @include('components.toggle')
                </li>
            <!-- TOGGLE AMAZING STOP-->
            </ul>
            @endauth
            <div class="d-flex">
                @if (Route::has('login'))
                @auth
                {{-- <a href="{{ url('dashboard') }}" class="">My Account</a> --}}
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="nav-item" href="{{ url('profile') }}">Profile</a></li>
                        <li><a class="nav-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </div>
                @else
                <a href="{{ route('login') }}" class="">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="">Register</a>
                @endif
                @endauth
                @endif
                
            </div>
        </div>  
        <!---------------------------------------------------------------->
        {{-- <button class="btn btn-outline-secondary" onclick="toggleDarkMode()">Light/Dark Toggle</button> --}}
        <!---------------------------------------------------------------->
    </div>
</nav>
