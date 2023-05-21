<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Cross Server Reference token setting  -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Hier wird der Wert von der Konstanten APP_NAME aus .env eingetragen, falls vorhanden. Andernfalls wird der Default-String "Laravel" verwendet -->
    <title>{{ config('app.name', 'ChapsChat') }}</title>
    <!---------------------------------------------------------------- Fontawesome link -->
    <script src="https://kit.fontawesome.com/d4cbcb96c8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!---------------------------------------------------------------- Animate Css link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    
    <!-- Styles -->
    <!---------------------------------------------------------------- Google Fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/css/areset.css', 'resources/css/custom.css'])
    {{-- 'resources/css/app.css', --}}

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
{{-- <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          </paint-app>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div> --}}

  
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
            <span class="span1"><b>Copyright &copy;: {{date('d.m.Y')}} - <a href="{{ url('/about') }}" class="nav-item myNavToggle">Dare To Meet Me?</a></b></span>
        </div>
    </footer>
</div>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
<script>
  
    $(function(){
      $('[data-bs-toggle="tooltip"]').tooltip();
    });


</script>

<!-- toggle mode script start -->
    @include('components.darkmodeToggle')
    <!-- toggle mode script end-->
    <!-- Bootstrap JS -->
   

    @vite(['resources/js/app.js', 'resources/js/custom.js'])
</body>

</html>