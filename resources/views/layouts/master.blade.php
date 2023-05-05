<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- Hier wird der Wert von der Konstanten APP_NAME aus .env eingetragen, falls vorhanden. 
   Andernfalls wird der Default-String "Laravel" verwendet -->
    <title>{{ config('app.name', 'ChapsChat') }}</title>
    <!---------------------------------------------------------------- Fontawesome link -->
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!---------------------------------------------------------------- Google Fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/custom.js', 'resources/css/areset.css', 'resources/css/custom.css'])
    {{-- 'resources/css/app.css', --}}

    <!-- Scripts -->
    <script src="https://unpkg.com/monaco-editor@0.27.0/min/vs/loader.js"></script>
    <!-- Include jQuery from a CDN or from your own server -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <style>
        body {
            /* background-color: black; */
        }
        /* body {
            margin-top:100px;
        } */
     

    </style>
</head>

<body class="{{-- d-flex flex-column h-100 bg-gradient --}}">
<div id="app">
    <header>
        @include('layouts.navigation')
    </header>

    <!-- Begin page content -->
    <main>
        {{-- <div id="app"> --}}
            @yield('content')
        {{-- </div> --}}
    </main>
    <footer class="footer mt-5 py-3 bg-footer-gradient sticky-footer">
        <div class="container-fluid text-center">
            <span class=" text-dark"><b>Copyright &copy;: {{date('d.m.Y')}} - <a href="{{ url('/about') }}">Dare To Meet Me?</a></b></span>
        </div>
    </footer>
</div>
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