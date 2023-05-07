@extends('layouts.master')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ChapsChat') }}</title>
        <style>
           /*  body {
                margin-top:100px;
                background-color: blue;
            } */
        </style>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/js/custom.js', 'resources/css/areset.css', 'resources/css/custom.css'])
        {{-- 'resources/css/app.css', --}}</head>

    
    <body class="font-sans antialiased">
        <header>
            @include('layouts.navigation')

        </header>
            
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        
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
    </body>
</html>
@endsection