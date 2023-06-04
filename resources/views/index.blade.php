@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'welcomeMain')


@section('content')

    <body class="antialiased">
        <header>
            @include('layouts.navigation')
        </header>
        <div id="icon">
            <i class="iconshooter fa-solid fa-face-grin-tongue-wink fa-5x {{-- fa-beat --}}"></i>
          </div>
    

          <div class="container mt-3 p-5 d-flex ">
            <div class="row align-items-center justify-content-center">
              {{-- <h2 class="text-center mb-5">
                {{ __('WELCOME TO CHaps-CHat') }}
              </h2> --}}

            <div class="row justify-content-center">               
                <div class="colSquare col-sm-3 mx-4 mb-4 {{-- animate__animated animate__backInLeft animate__delay-2s --}}"  style="height: 300px;">
                    {{-- <img class="img-fluid" src="./assets/img/square_red.svg" alt="logo-placeholder"> --}}
                    {{-- <p class="m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem eveniet eaque vitae necessitatibus id!</p> --}}
                </div>

                <div class="colCircle rounded-circle col-sm-3 mb-4 {{-- animate__animated animate__backInDown animate__delay-3s --}}" style="height: 300px;">
                    {{-- <img class="img-fluid" src="./assets/img/circle_yellow.svg" alt="logo-placeholder"> --}}
                 {{-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores rem eveniet eaque vitae necessitatibus id!</p> --}}
                </div>

                <div class="col-sm-3 position-relative {{-- animate__animated animate__backInRight animate__delay-4s --}}" style="height: 300px;">
                    {{-- <img class="img-fluid position-absolute" style="transform: scale(1.07); margin-top:3%; margin-left:-10%" src="./assets/img/triangle_blue.svg" alt="logo-placeholder"> --}}   
                  <div class="square">
                    <div class="colTriangle mx-4n"></div>
                  </div>
                </div>

                <h2 class="text-center mt-5">
                  {{ __('WELCOME TO CHaps-CHat') }}
                </h2>

            </div>

            <div class="row justify-content-center mt-5">
                <div class="col">
                   <p> ipsum dolor sit, amet consectetur adipisicing elit. Cumque, nulla? Corporis perferendis veritatis mollitia nesciunt magnam necessitatibus itaque hic quia provident unde dolores ad fuga, repellat voluptate enim facere. Voluptates.</p>      
                </div>
            </div>
          </div>
        
        {{-- @include('auth.login') --}}

@endsection