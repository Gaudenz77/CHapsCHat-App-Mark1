<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="mOdZWR6MamPSqqjIn4cerD4DjI5409y8pPXtHgyICjw" />
    {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> --}}

    <!-- Cross Server Reference token setting  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- OPENGRAPH meta data -->
    <meta property="og:title" content="CHapsChat: All-in-One Coding, Chat, Library, and Blog Platform"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site-name" content="CHapsChat Coding, Chatting n Blogging"/>
    <meta property="og:description" content="All-in-One Coding, Chat, Library, and Blog Platform"/>
    <meta property="og:image" content="https://user-images.githubusercontent.com/42372680/262365580-73c18508-c647-45c5-b63c-8c6967cfe212.png"/>
    <meta property="og:url" content="https://krakatoom.ch/"/>
    <meta property='og:image:width' content='1200' />
    <meta property='og:image:height' content='627' />

    <!-- the value of the constant APP_NAME from the .env file is being assigned, if it exists. Otherwise, the default string "Laravel" is used. -->

    <link rel="icon" href="./assets/img/krakatoom_favicon.png" type="image/x-icon">
    {{-- <link rel="icon" href="aviconReal1.ico" type="image/x-icon"> --}}
    {{-- <link rel="icon" type="image/svg+xml" href="./assets/img/favicon.png"> --}}

    <title>{{ config('app.name', 'ChapsChat') }}</title>

    <!---------------------------------------------------------------- Fontawesome link -->

    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>

    <!-- Styles -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   
        <!-- Animate.css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!---------------------------------------------------------------- GOOGLE FONTS (IN CUSTOM.CSS) -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/areset.css', 'resources/css/custom.css'])

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="https://www.google.com/recaptcha/enterprise.js?render=your_site_key"></script> --}}

    <link rel="stylesheet" href="https://unpkg.com/vue-simple-markdown/dist/vue-simple-markdown.css">
<script src="https://unpkg.com/vue-simple-markdown"></script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettier/2.0.3/parser-html.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prettier/2.0.3/standalone.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.39.0/min/vs/loader.min.js"></script> --}}
    <script src="https://unpkg.com/monaco-editor@0.39.0/min/vs/loader.js"></script>

    {{--  <script src="https://unpkg.com/@christianliebel/paint/dist/elements/index.js" type="module"></script> --}}

    <!-- Include jQuery from a CDN or from your own server -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    @include('components.gueststylesheet')

    <style>
        body {
            margin-top: 10%;
            overflow: auto;
        }

        * {
            /* border: 0.1px solid red !important; */
            padding: 0;
        }

        .navbar-scroll-hide {
            transition: top 1.8s;
            z-index: 1000;
        }
    </style>

</head>

<body class="@yield('body-class')">

    <div id="cookieConsent">
        @include('components.cookieconssentEu')
    </div>

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

    <footer class="footer mt-0 ms-3 py-3 bg-footer-gradient footerOwn" style="z-index:1">
        <div class="container-fluid fixed-bottom text-center">
            <button id="scrollToTopBtn" class="btn btn-own ms-2 scrollBtn" onclick="scrollToTop()">
                <i class="fa-solid fa-circle-chevron-up fa-4x scrollUpChevron"></i></button>

            <button id="footerButton" class="btn btn-circleFoot"><span class="material-symbols-outlined">barefoot</span>
                <p class="footerBtnTextStart">Footer?</p>
            </button>

            <span id="footerContent" class="span1 fixed-bottom mb-0 py-3 py-md-3 ps-2"><a href="{{ url('/about') }}"
                class="nav-item mt-2 ms-0 px-2 ps-0 py-0" style="color:#ffc107; text-decoration:none">
                <b class="">Dare To Meet Me?</b></a>
                <br><b style="color:  blue;">&copy; {{ date('d/m/Y') }} <a class="small" style="color:chartreuse" href="{{ url('/impressum') }}">
                    <br>Legal Notice</a>
            </span>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        
    {{-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var cookieConsent = document.getElementById('cookieConsent');
        var popup = cookieConsent.querySelector('.eu-popup');

        setTimeout(function() {
            popup.classList.add('show');
            cookieConsent.style.display = 'block';
        }, 5000); // Delay for 5 seconds (adjust as needed)
        });



        /* PAGE SCROLLUP BTN HIDE ON SCROLLDOWN */
        document.addEventListener('DOMContentLoaded', () => {
        // Add the scroll event listener
        window.addEventListener('scroll', handleScroll);
        });

        // Function to check the scroll position and show/hide the buttons
        function handleScroll() {
        // Calculate the scroll position and the document height
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        const documentHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;

        // Calculate the threshold (last 20% of the page)
        const threshold = documentHeight * 0.6;

        // Show/hide the first button based on the scroll position
        const scrollToTopBtn = document.getElementById('scrollToTopBtn');
            if (scrollPosition > threshold) {
                scrollToTopBtn.style.display = 'block';
            } else {
                scrollToTopBtn.style.display = 'none';
            }

        // Show/hide the second button based on the scroll position
        const footerButton = document.getElementById('footerButton');
            if (scrollPosition > threshold) {
                footerButton.style.display = 'block';
            } else {
                footerButton.style.display = 'none';
            }
        }

        // Function to scroll to the top of the page
        function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
        }


        /* NAVBAR HIDE ONSCROLL*/
        /* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-7rem";
            }
            prevScrollpos = currentScrollPos;
        }

        /* ENABLE TOOLTIP/POPOVER */
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });

        $(function() {
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

        /* Reload page twice to grant vs code triggering */
        function reloadTwice() {
            // First reload
            /* setTimeout(() => {
              location.reload();
            }, 500); // Set the desired delay (in milliseconds) between the reloads

            // Second reload
            setTimeout(() => {
              location.reload();
            }, 1000);  */ // Set the desired delay (in milliseconds) between the reloads
        }



    </script>

    <!-- DARKMODE TOGGLE START -->
    @include('components.darkmodeToggle')
    
    @vite(['resources/js/app.js', 'resources/js/custom.js'])

</body>

</html>
