<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- Hier wird der Wert von der Konstanten APP_NAME aus .env eingetragen, falls vorhanden. 
   Andernfalls wird der Default-String "Laravel" verwendet -->
    <title>{{ config('app.name', 'ChapChat') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/areset.css', 'resources/css/custom.css'])
    {{-- , 'resources/css/app.css' --}}

    <style>
        /* body {
            margin-top:100px;
        } */
    </style>
</head>

<body class="{{-- d-flex flex-column h-100 bg-gradient --}}">
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-navbar-gradient">
            <div class="container-fluid">
                <a class="brand" href="{{  url('/') }}"><x-application-logo class="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }} text-dark" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }} text-dark" aria-current="page" href="{{ url('/about') }}">About Us</a>
                        </li>
                    </ul>
                    <!---------------------------------------------------------------->
                    <a class="navbar-brand " href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="btn btn-outline-secondary" onclick="toggleDarkMode()">Light/Dark Toggle</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!---------------------------------------------------------------->
                    <form class="d-flex">
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('dashboard') }}" class="btn btn-primary mx-2">My Account</a>
                        @else
                        <a href="{{ route('login') }}" class="btn btn-primary mx-2">Login</a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary mx-2">Register</a>
                        @endif
                        @endauth
                        @endif
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Begin page content -->
    <main>
        <div id="app">
            @yield('content')
        </div>
    </main>
    <footer class="footer mt-5 py-3 bg-footer-gradient sticky-footer">
        <div class="container-fluid text-center">
            <span class=" text-dark"><b>Copyright &copy;: {{date('d.m.Y')}} - <a href="{{ url('/about') }}">Dare To Meet Me?</a></b></span>
        </div>
    </footer>

    <!-- toggle mode script start -->
<script>

    // Read the value of the "darkMode" cookie
    const cookies = document.cookie.split("; ");
    const darkModeCookie = cookies.find(cookie => cookie.startsWith("darkMode="));
    const darkModeOn = darkModeCookie ? (darkModeCookie.split("=")[1] === "on") : false;
    
    // Set the "dark-mode" class on the body element if necessary
    if (darkModeOn) {
      document.body.classList.add("dark-mode");
    } 
    
    function setDarkModePreference(darkModeOn) {
      const cookieValue = darkModeOn ? "on" : "off";
      document.cookie = `darkMode=${cookieValue}; path=/; max-age=${60 * 60 * 24 * 365}`;
    }
    
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
      setDarkModePreference(document.body.classList.contains('dark-mode'));
    }
        
    </script>
    <!-- toggle mode script end-->
    <!-- Bootstrap JS -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
</body>

</html>