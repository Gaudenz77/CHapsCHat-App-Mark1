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

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  
    
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

        @media (max-width: 565.98px) {
        .loginMain {
          margin-top:23vh;
          margin-bottom:10%;
        }

        .registerMain {
          margin-top:17vh;
          margin-bottom:-50%;
        }
      }

      @media (min-width: 566px) {
        .loginMain {
         margin-top:14rem;
        }

        .registerMain {
          margin-top:8%;
          margin-bottom:-50%;
        }
      }
       
      .custom-toggler.navbar-toggler {
            border-color: rgb(255, 255, 0);
      }
       
      .custom-toggler .navbar-toggler-icon {
            background-image: url(
            "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 0, 0.8)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
      }

      body.dark-mode .custom-toggler.navbar-toggler {
            border-color: rgb(255, 0, 0);
            background-color:#ebebeb;
            color: #ebebeb;
      }

        body.dark-mode .custom-toggler .navbar-toggler-icon {
            background-image: url(
            "data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 0, 0, 0.8)' stroke-width='3' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
      }
    </style>
    
</head>

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

<footer class="footer mt-5 ms-3 py-3 bg-footer-gradient footerOwn">
  <div class="container-fluid text-sm-start text-md-center">
    <button class="btn btn-own ms-2 scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-circle-chevron-up  fa-4x"></i></button>
    <button id="footerButton" class="btn btn-circleOwn btn-danger"><span class="material-symbols-outlined">barefoot</span><p style="font-size:50%; color:#ffc107;">Who needs a footer</p></button>
    <span id="footerContent" class="span1"><a href="{{ url('/about') }}" class="nav-item mt-2 ms-0 py-0" style="color:#ffc107;"><b class="">Dare To Meet Me?</b></a><br><b  style="color:  blue;">Copyright &copy; @ {{date('d/m/Y')}}</span>
  </div>
  {{-- <button class="btn btn-own ms-2" onclick="scrollToTop()"><i class="fa-solid fa-circle-chevron-up  fa-4x"></i></button> --}}
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

function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    window.addEventListener('scroll', function() {
      var button = document.querySelector('.back-to-top');
      if (window.pageYOffset > 200) {
        button.classList.add('show');
      } else {
        button.classList.remove('show');
      }
    });


/* function reloadTwice() {
  location.reload(); // First reload
  setTimeout(function() {
    location.reload(); // Second reload after a delay (e.g., 1 second)
  }, 1000);
  location.reload(); // First reload
      setTimeout(function() {
    location.reload(); // Second reload after a delay (e.g., 1 second)
  }, 1000);
} */

</script>



<!-- toggle mode script start -->
    @include('components.darkmodeToggle')
<!-- toggle mode script end-->
    
  @vite(['resources/js/app.js', 'resources/js/custom.js'])

</body>

</html>