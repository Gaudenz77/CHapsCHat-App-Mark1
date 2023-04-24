<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- Hier wird der Wert von der Konstanten APP_NAME aus .env eingetragen, falls vorhanden. 
   Andernfalls wird der Default-String "Laravel" verwendet -->
    <title>{{ config('app.name', 'ChapChat') }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body class="d-flex flex-column h-100 bg-gradient">
    <header>
        <!-- Fixed navbar -->
        {{-- <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-navbar-gradient">
            <div class="container-fluid">
                <a class="brand" href="{{  url('/') }}"><x-application-logo class="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('about')) ? 'active' : '' }}" aria-current="page" href="{{ url('/about') }}">About Us</a>
                        </li>
                    </ul>
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
        </nav> --}}
    </header>

    <!-- Begin page content -->
    <main>
        <div id="app">
            @yield('content')
        </div>
    </main>
    <footer class="footer mt-auto py-3 bg-footer-gradient sticky-footer">
        <div class="container-fluid text-center">
            <span class="text-light"><b>Copyright &copy;: {{date('d.m.Y')}} - <a href="{{ url('/about') }}">Team Palaver</a></b></span>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>