<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Cross Server Reference token setting  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Hier wird der Wert von der Konstanten APP_NAME aus .env eingetragen, falls vorhanden. Andernfalls wird der Default-String "Laravel" verwendet -->
    
    <link rel="icon" href="./assets/img/krakatoom_favicon.png" type="image/x-icon">

    <title>{{ config('app.name', 'ChapsChat') }}</title>  

    <!---------------------------------------------------------------- Fontawesome link -->

    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />  
    
    <!-- Animate.css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!---------------------------------------------------------------- Google Fonts IN CUSTOM.CSS -->
    
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/areset.css', 'resources/css/custom.css'])
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

   {{--  <script src="https://unpkg.com/@christianliebel/paint/dist/elements/index.js" type="module"></script> --}}

    {{-- <script src="https://unpkg.com/monaco-editor@0.37.0/min/vs/loader.js"></script> --}}

    <!-- Include jQuery from a CDN or from your own server -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    @include('components.gueststylesheet')

</head>

<body class="@yield('body-class')">

<div id="app">
        <header>
            @include('layouts.navigation')
        </header>

        <main>
            <div id="app">
                @yield('content')
            </div>
        </main>
  </div>

<footer class="footer mt-0 ms-3 py-3 bg-footer-gradient footerOwn">
  <div class="container-fluid fixed-bottom text-sm-start text-md-center">
    <button class="btn btn-own ms-2 scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-circle-chevron-up  fa-4x"></i></button>
    <button id="footerButton" class="btn btn-circleFoot"><span class="material-symbols-outlined">barefoot</span><p style="font-size:50%; color:#ffc107;">Who needs a footer</p></button>
    <span id="footerContent" class="span1 fixed-bottom pt-3 ps-2"><a href="{{ url('/about') }}" class="nav-item bg-danger mt-2 ms-0 px-2 py-0" style="color:#ffc107;"><b class="">Dare To Meet Me?</b></a><br><b  style="color:  blue;">Copyright &copy; @ {{date('d/m/Y')}}</span>
  </div>
</footer>

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

// Scroll top
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

  /* Reload page twice to grant vs code triggering */
      function reloadTwice() {
      // First reload
      /* setTimeout(() => {
        location.reload();
      }, 500); */ // Set the desired delay (in milliseconds) between the reloads

      // Second reload
      /* setTimeout(() => {
        location.reload();
      }, 1000);  */// Set the desired delay (in milliseconds) between the reloads
    }
</script>

<!-- toggle mode script start -->
    @include('components.darkmodeToggle')
<!-- toggle mode script end-->
    
  @vite(['resources/js/app.js', 'resources/js/custom.js'])

</body>

</html>