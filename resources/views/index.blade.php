@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'welcomeMain')

@section('content')

<div id="icon">
  <i class="iconshooter fa-solid fa-face-grin-squint-tears fa-5x {{-- fa-beat --}}"></i><p style="font-family:'Roboto', sans-serif: font-size:50%;">Catch Me If U Can!</p>
</div>

<div class="container">
  <div class="row align-items-center justify-content-center">

    <div class="row justify-content-center">               
        <a class="btn colSquare col-sm-3 mx-sm-4 me-md-4 me-lg-4 mb-4 animate__animated animate__backInLeft animate__delay-2s" class="btn {{-- myNavUnderline px-0 --}} {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/playground') }}" onclick="reloadTwice()" style="height: 300px;"><b>Playground</b></a>
          
        <a class="btn colCircle rounded-circle col-sm-3 mb-4 animate__animated animate__backInLeft animate__delay-3s" class="btn {{-- myNavUnderline px-0 --}} {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/blogoSphere') }}" onclick="reloadTwice()" style="height: 300px;"><b>Blogosphere</b></a>
        

        <a class="btn  col-sm-3 mb-4 animate__animated animate__backInLeft animate__delay-4s" href="{{ url('/knowledgeSphere') }}" onclick="reloadTwice()" style="height: 300px;">
          <div class="square">
            <div class="colTriangle">
              <b>KnowledgeSphere</b>
            </div>
          </div>
        </a>
        

        <h1 class="display-3 text-center mt-5 animate__animated animate__zoomInUp animate__delay-5s">
          <b>{{ __('Welcome To CHapsCHat') }}</b>
        </h1>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-12 text-center">
          {{-- TEXT --}}
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore porro adipisci ea eius quod nobis beatae nemo harum repellat hic, cupiditate, nesciunt nisi. Necessitatibus, ex! Ut quis possimus voluptate non.
        </div>
    </div>
</div>
        
@endsection