@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'welcomeMain')

@section('content')

    <div id="icon">
        <i class="iconshooter fa-solid fa-face-grin-squint-tears fa-5x {{-- fa-beat --}}"></i>
        <p style="font-family:'Roboto', sans-serif: font-size:50%;">Catch Me If U Can!</p>
    </div>

    <div class="container">

        <div class="row align-items-center justify-content-center">

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="container text-center">
                        <h1 class="display-3 pb-3 text-center animate__animated animate__zoomInUp animate__delay-5s">
                            <b>{{ __('Welcome To CHapsCHat') }}</b>
                        </h1>
                        <p class="lead animate__animated animate__bounceInLeft animate__delay-1s">
                            <strong>1. Come join on ChapsChat to code together:</strong> <a
                                class="myNavToggleTitle px-0 {{ request()->is('/') ? '' : '' }}" aria-current="page"
                                href="{{ url('/playground') }} " onclick="reloadTwice()"><b>Join Now!</b></a>
                        </p>
                        <p class="lead animate__animated animate__bounceInRight animate__delay-2s">
                            <strong>2. Report on our Blog:</strong> <a
                                class="myNavToggleTitle px-0 {{ request()->is('/') ? '' : '' }}" aria-current="page"
                                href="{{ url('/blogoSphere') }}"><b>Read more...</b></a>
                        </p>
                        <p class="lead animate__animated animate__bounceInUp animate__delay-3s">
                            <strong>3. Go to Your Library:</strong> <a
                                class="myNavToggleTitle px-0 {{ request()->is('/') ? '' : '' }}" aria-current="page"
                                href="{{ url('/knowledgeSphere') }}"><b>Explore Now</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">

            <a type="button"  href="{{ url('/blogoSphere') }}" class="btn btn-index col-sm-3 me-md-4 me-lg-4 {{-- animate__animated animate__backInLeft animate__delay-2s --}} overlay-container">
                <img class="img-fluid p-3" src="./assets/img/square_pure.svg">
                <div class="overlay">
                    <span class="overlay-text">ReaD thE latesT BlOgs!</span>
                </div>
            </a>

            <a type="button" href="{{ url('/playground') }}" id="button" class="btn btn-index rounded-circle col-sm-3 mb-0 {{-- animate__animated animate__backInDown animate__delay-3s --}} overlay-container">
                <img class="img-fluid p-3" src="./assets/img/circle_pure.svg">
                <div class="overlay">
                    <span class="overlay-text">ENter thE PlyGroUnD!</span>
                </div>
            </a>

            <a type="button" href="{{ url('/knowledgeSphere') }}" id="button" class="btn btn-index  col-sm-3 {{-- animate__animated animate__backInRight animate__delay-4s --}} overlay-container">
                <img class="img-fluid triangleFix" src="./assets/img/triangle_pure_large.svg">
                <div class="overlay">
                    <span class="overlay-text mt-5 me-4">ColleCt YouR KnoWledGe!</span>
                </div>
            </a>
        </div>
        




    </div>

@endsection
