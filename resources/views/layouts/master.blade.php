<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    @if (Auth::check()) 
    <meta name="user" content="{{ Auth::user() }}">
    @endif 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> --}}

    <!-- Cross Server Reference token setting  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- the value of the constant APP_NAME from the .env file is being assigned, if it exists. Otherwise, the default string "Laravel" is used. -->

    <link rel="icon" href="./assets/img/krakatoom_favicon.png" type="image/x-icon">

    <title>{{ config('app.name', 'ChapsChat') }}</title>

    <!---------------------------------------------------------------- Fontawesome link -->

    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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

    <style>
        body {
        
        }

        /* toggle container */
        .card-checkbox.custom-control-input:not(:checked)~.custom-control-label::before {
            background-color: blue;
            /* Change the background color of the toggle container  when it is not checked */
            border-color: yellow;
            /* Change the border color of the toggle container when it is not checked */
        }

        .card-checkbox.custom-control-input:checked~.custom-control-label::before {
            background-color: red;
            /* Change the color of the toggle container when it is checked */
            border-color: green;
            /* Change the border color of the toggle container when it is checked */
        }

        /* toggle knob */
        .card-checkbox.checkbox-outside-card.custom-control-input:not(:checked)~.custom-control-label::after {
            background-color: #fff;
            /* Change the background color of the knob when it is checked */
            border: 2px solid purple;
            /* Add a border if you prefer */
        }

        .card-checkbox.checkbox-outside-card.custom-control-input:checked~.custom-control-label::after {
            background-color: pink;
            /* Change the background color of the knob when it is checked */
            border: 2px solid violet;
            /* Add a border if you prefer */
        }

        * {
            /* border: 1px solid red !important; */
            }
            
    </style>

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
        <div class="container-fluid fixed-bottom text-center">
            <button class="btn btn-own ms-2 scrollBtn" onclick="scrollToTop()"><i
                    class="fa-solid fa-circle-chevron-up  fa-4x"></i></button>
            <button id="footerButton" class="btn btn-circleFoot"><span class="material-symbols-outlined">barefoot</span>
                <p class="footerBtnTextStart">Footer?</p>
            </button>
            <span id="footerContent" class="span1 fixed-bottom pt-3 ps-2"><a href="{{ url('/about') }}"
                    class="nav-item mt-2 ms-0 px-2 ps-0 py-0" style="color:#ffc107;"><b class="">Dare To Meet
                        Me?</b></a><br><b style="color:  blue;">&copy; {{ date('d/m/Y') }} <a class="small" style="color:chartreuse" href="{{ url('/impressum') }}"><br>Legal Notice</a></span>
                            
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}

    <script>
        /* ENABLE TOOLTIP/POPOVER */
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
            $('[data-bs-toggle="popover"]').popover({
                html: true
            })
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
                    footerButton.innerHTML =
                        '<span class="material-symbols-outlined">barefoot</span><br><p class="footerBtnTextStart">Footer?</p>';
                } else {
                    footerContent.style.display = "block";
                    isContentVisible = true;
                    footerButton.innerHTML =
                        '<span class="material-symbols-outlined">barefoot</span><br><p class="footerBtnTextStart">Voilà!</p>';
                }
            });
        });

        // Scroll top
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
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
      }, 500); // Set the desired delay (in milliseconds) between the reloads

      // Second reload
      setTimeout(() => {
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
