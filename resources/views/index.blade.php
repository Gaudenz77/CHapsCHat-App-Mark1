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
      <div class="col-12 text-center">
        <div class="container text-center">
          <h1 class="display-3 text-center animate__animated animate__zoomInUp animate__delay-5s">
            <b>{{ __('Welcome To CHapsCHat') }}</b>
          </h1>
          <p class="lead animate__animated animate__rubberBand animate__delay-1s">
              <strong>1. Come join on Chaps Chat to code together:</strong> <a class="myNavToggleTitle px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/playground') }} " onclick="reloadTwice()"><b>Join Now!</b></a>
          </p>
          <p class="lead animate__animated animate__wobble animate__delay-2s">
              <strong>2. Report on our Blog:</strong> <a class="myNavToggleTitle px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/blogoSphere') }}"><b>Read more...</b></a>
          </p>
          <p class="lead animate__animated animate__fadeInUp animate__delay-3s">
              <strong>3. Go to Your Library:</strong> <a class="myNavToggleTitle px-0 {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/knowledgeSphere') }}"><b>Explore Now</a>
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="row justify-content-center">               
    {{-- <a class="btn colSquare col-sm-3 mx-sm-4 me-md-4 me-lg-4 mb-4 animate__animated animate__backInLeft animate__delay-2s" class="btn  {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/playground') }}" onclick="reloadTwice()" style="height: 300px;"><b>Playground</b></a>
      
    <a class="btn colCircle rounded-circle col-sm-3 mb-4 animate__animated animate__backInLeft animate__delay-3s" class="btn {{ (request()->is('/')) ? '' : '' }}" aria-current="page" href="{{ url('/blogoSphere') }}" onclick="reloadTwice()" style="height: 300px;"><b>Blogosphere</b></a>
    
    <a class="btn  col-sm-3 mb-4 animate__animated animate__backInLeft animate__delay-4s" href="{{ url('/knowledgeSphere') }}" onclick="reloadTwice()" style="height: 300px;">
      <div class="square">
        <div class="colTriangle">
          <b>KnowledgeSphere</b>
        </div>
      </div>
    </a> --}}
         
      <div class="colSquare col-sm-3 mx-sm-4 me-md-4 me-lg-4 mb-4 {{-- animate__animated animate__backInLeft animate__delay-2s --}}"  style="height: 300px;"></div>

      <div class="colCircle rounded-circle col-sm-3 mb-4 {{-- animate__animated animate__backInDown animate__delay-3s --}}" style="height: 300px;"></div>

      <div class="col-sm-3 position-relative {{-- animate__animated animate__backInRight animate__delay-4s --}}" style="height: 300px;">
        <div class="square">
          <div class="colTriangle"></div>
        </div>
      </div>
  </div>


  


</div>
        
@endsection