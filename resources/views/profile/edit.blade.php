@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'profileMain')

@section('content')

<x-app-layout>
    <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-sm-3 circleProfileCols pt-5 pb-3 bg-info mx-1 ms-0 me-md-5 {{-- animate__animated animate__flipInY animate__delay-6s --}}">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="col-sm-3 circleProfileCols bg-warning mt-0 mt-md-3 mx-0 mx-md-1 {{-- animate__animated animate__flipInY animate__delay-2s --}}">
                @include('profile.partials.update-password-form')
            </div>

            <div class="col-sm-3 circleProfileCols bg-danger mt-0 mt-md-3 mx-1 ms-0 ms-md-5 {{-- animate__animated animate__flipInY animate__delay-4s --}}">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    // Function to handle class removal
    function removeCircleProfileCols() {
        var elements = document.getElementsByClassName('circleProfileCols');
        var isLandscape = window.matchMedia("(orientation: landscape)").matches;
        var isLargeDevice = window.matchMedia("(min-width: 768px)").matches;

        for (var i = 0; i < elements.length; i++) {
            var element = elements[i];
            if (isLandscape && isLargeDevice) {
                element.classList.add('circleProfileCols');
            } else {
                element.classList.remove('circleProfileCols');
            }
        }
    }

    // Call the function initially
    removeCircleProfileCols();

    // Listen for orientation and window resize events
    window.addEventListener('resize', function () {
        removeCircleProfileCols();
        if (!window.matchMedia("(orientation: landscape)").matches) {
            // Call again after a delay to handle scaling up after scaling down
            setTimeout(removeCircleProfileCols, 500);
        }
    });
    window.addEventListener('orientationchange', function () {
        removeCircleProfileCols();
        if (!window.matchMedia("(orientation: landscape)").matches) {
            // Call again after a delay to handle scaling up after scaling down
            setTimeout(removeCircleProfileCols, 500);
        }
    });
</script>

@endsection


