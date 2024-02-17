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

    {{-- <script src="https://unpkg.com/monaco-editor@0.45.0/min/vs/loader.js"></script> --}}

    <!-- Include jQuery from a CDN or from your own server -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}

    @include('components.gueststylesheet')

</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script>
        /* ENABLE TOOLTIP */
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip();
        });
    </script>

    <!-- toggle mode script start -->
    @include('components.darkmodeToggle')
    <!-- toggle mode script end-->

    @vite(['resources/js/app.js', 'resources/js/custom.js'])

</body>

</html>
