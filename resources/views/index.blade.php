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
        <div class="colSquare col-sm-3 mx-sm-4 me-md-4 me-lg-4 mb-4 {{-- animate__animated animate__backInLeft animate__delay-2s --}}"  style="height: 300px;"></div>

        <div class="colCircle rounded-circle col-sm-3 mb-4 {{-- animate__animated animate__backInDown animate__delay-3s --}}" style="height: 300px;"></div>

        <div class="col-sm-3 position-relative {{-- animate__animated animate__backInRight animate__delay-4s --}}" style="height: 300px;">
          <div class="square">
            <div class="colTriangle"></div>
          </div>
        </div>

        <h1 class="display-3 text-center mt-5 {{-- animate__animated animate__zoomInUp animate__delay-5s --}}">
          <b>{{ __('Welcome To ChapsChat') }}</b>
        </h1>
    </div>

    <div class="row justify-content-center mt-5">
        <div class="col-12 text-center">
          {{-- TEXT --}}
        </div>
    </div>
</div>
        
@endsection