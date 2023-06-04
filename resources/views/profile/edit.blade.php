@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'playgroundMain')

@section('content')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="">
            <div class="">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
 --}}


    <div class="container">
        <div class="row justify-content-evenly text-center">
            <div class="col-sm circleProfileCols bg-warning mx-1">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="col-sm circleProfileCols bg-danger mx-1">
                @include('profile.partials.update-password-form')
            </div>

            <div class="col-sm circleProfileCols bg-info mx-1">
                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>
</x-app-layout>

<footer class="footer mt-5 ms-3 py-3 bg-footer-gradient footerOwn" style="display:none">
    <div class="container-fluid text-sm-start text-md-center">
      <button class="btn btn-own ms-2 scrollBtn" onclick="scrollToTop()"><i class="fa-solid fa-circle-chevron-up  fa-4x"></i></button>
      <button id="footerButtonP" class="btn btn-circleOwn btn-danger"><span class="material-symbols-outlined">barefoot</span><p style="font-size:50%; color:#ffc107;">Who needs a footer</p></button>
      <span id="footerContentP" class="span1"><a href="{{ url('/about') }}" class="nav-item mt-2 ms-0 py-0" style="color:#ffc107;"><b class="">Dare To Meet Me?</b></a><br><b  style="color:  blue;">Copyright &copy; @ {{date('d/m/Y')}}</span>
    </div>
    {{-- <button class="btn btn-own ms-2" onclick="scrollToTop()"><i class="fa-solid fa-circle-chevron-up  fa-4x"></i></button> --}}
  </footer>

<script>

    /* FOOTER EASTEREGG */
document.addEventListener("DOMContentLoaded", function() {
var footerContent = document.getElementById("footerContentP");
var footerButton = document.getElementById("footerButtonP");
var isContentVisible = false;

footerButton.addEventListener("click", function() {
    if (isContentVisible) {
      footerContent.style.display = "none";
      isContentVisible = false;
      footerButton.innerHTML = '<span class="material-symbols-outlined">barefoot</span><br><p style="font-size:60%;color:#ffc107;"">Who needs a footer</p>';
    } else {
      footerContent.style.display = "block";
      isContentVisible = true;
      footerButton.innerHTML = '<span class="material-symbols-outlined">barefoot</span><br><p style="font-size:80%;color:#ffc107;"">Go away</p>';
    }
  });
});

function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
    }
    
    window.addEventListener('scroll', function() {
    var button = document.querySelector('.back-to-top');
    if (window.pageYOffset > 200) {
        button.classList.add('show');
    } else {
        button.classList.remove('show');
    }
    });
</script>

    @endsection