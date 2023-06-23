@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'profileMain')

@section('content')

<x-app-layout>
    <div class="container">
        <div class="row justify-content-evenly text-center">
            <div class="col-sm circleProfileCols bg-warning mx-1">
                @include('profile.partials.update-profile-information-form')
            </div>

            <div class="col-sm circleProfileCols bg-danger mt-3 mx-1">
                @include('profile.partials.update-password-form')
            </div>

            <div class="col-sm circleProfileCols bg-primary mt-3 mx-1">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>

@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        var profileCols = $('.circleProfileCols');

        // Check if the device meets the specified conditions
        if (window.matchMedia("(orientation: landscape) and (max-width: 576px)").matches) {
            profileCols.removeClass('circleProfileCols');
        }
    });
</script>
@endpush