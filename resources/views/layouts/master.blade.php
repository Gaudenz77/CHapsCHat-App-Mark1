<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Cross Server Reference token setting  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Hier wird der Wert von der Konstanten APP_NAME aus .env eingetragen, falls vorhanden. Andernfalls wird der Default-String "Laravel" verwendet -->
    <title>{{ config('app.name', 'ChapsChat') }}</title>

    <!---------------------------------------------------------------- Fontawesome link -->
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
    <!-- AOS -->
    <!-- MARKDOWN LIBRARY -->
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!---------------------------------------------------------------- Google Fonts IN CUSTOM.CSS -->
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/custom.js', 'resources/css/areset.css', 'resources/css/custom.css'])
    {{-- 'resources/css/app.css', --}}
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Scripts -->

    <script src="https://unpkg.com/@christianliebel/paint/dist/elements/index.js" type="module"></script>

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

  
{{-- <body class="d-flex flex-column h-100 bg-gradient"> --}}
<body class="@yield('body-class')">

<div id="app">
        <header>
            @include('layouts.navigation')
        </header>

    <!-- Begin page content -->
    <main>
        <div id="app">
            @yield('content')
        </div>
    </main>

<footer class="footer mt-5 py-3 bg-footer-gradient">
  <div class="container-fluid text-center">
    <button id="footerButton" class="btn btn-circleOwn btn-danger"><span class="material-symbols-outlined">barefoot</span><p style="font-size:50%; color:#ffc107;">Who needs a footer</p></button>
    <span id="footerContent" class="span1"><b>Copyright &copy;: {{date('d/m/Y')}} - <a href="{{ url('/about') }}" class="nav-item myNavToggle">Dare To Meet Me?</a></b></span>
  </div>
</footer>




</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
<script>
  /* ENABLE TOOLTIP */
    $(function(){
      $('[data-bs-toggle="tooltip"]').tooltip();
    });

/* FOOTER EASTEREGG */
    document.addEventListener("DOMContentLoaded", function() {
    var footerContent = document.getElementById("footerContent");
    var footerButton = document.getElementById("footerButton");
    var isContentVisible = false;

    footerButton.addEventListener("click", function() {
        if (isContentVisible) {
          footerContent.style.display = "none";
          isContentVisible = false;
          footerButton.innerHTML = '<span class="material-symbols-outlined">barefoot</span><br><p style="font-size:60%;color:#ffc107;"">Who needs a footer</p>';
        } else {
          footerContent.style.display = "block";
          isContentVisible = true;
          footerButton.innerHTML = '<span class="material-symbols-outlined">barefoot</span><br><p style="font-size:80%;color:#ffc107;"">Go away</p>';
        }
      });
    });


    // Get the container element
const outputContainer = document.getElementById('outputContainer');

// Set the markdown content
const markdownContent = "This is a **bold** sentence.\n\n```javascript\nconsole.log('Hello, world!');\n```";

// Render the markdown content using Marked.js
outputContainer.innerHTML = marked(markdownContent);



</script>

<!-- toggle mode script start -->
    @include('components.darkmodeToggle')
<!-- toggle mode script end-->
    
<!-- Bootstrap JS -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> --}}
  
  @vite(['resources/js/app.js', 'resources/js/custom.js'])
  <!-- AOS -->  
  {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}
  {{-- <script>
    AOS.init();
  </script> --}}
</body>

</html>