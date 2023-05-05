<nav class="navbar navbar-expand-md navbar-light fixed-top">
    <div class="container-fluid">
        <a class="brand" href="{{  url('/') }}"></a>
        <button class="navbar-toggler border-0 text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">

                <li class="nav-item">
                    <a class="navbar-brand text-dark" href="{{ url('/') }}">
                        {{ config('app.name', 'CHapsCHat') }}
                    </a>
                </li>
                
                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/playground') }}">
                            Playground
                        </a>
                    </li>
                @endauth

            {{-- <li class="nav-item">
                <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
            </li> --}}

                <li class="nav-item">
                <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }} text-dark" aria-current="page" href="{{ url('/about') }}">About</a>
                </li>
            </ul>
            <div class="d-flex">
                @if (Route::has('login'))
                @auth
                {{-- <a href="{{ url('dashboard') }}" class="">My Account</a> --}}
                <div class="dropdown">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                       account {{-- {{ Auth::user()->name }} --}}
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
        <button class="btn btn-outline-secondary" onclick="toggleDarkMode()">Light/Dark Toggle</button>
        {{-- <button class="bg-white text-gray-700 border border-gray-300 rounded-md shadow-sm py-2 px-4 inline-flex items-center" onclick="toggleDarkMode()">
            <span class="mr-2">Light/Dark Toggle</span>
            </button> --}}   
        <!---------------------------------------------------------------->
    </div>
</nav>
