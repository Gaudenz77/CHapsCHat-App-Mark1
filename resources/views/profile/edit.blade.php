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
        <div class="row justify-content-evenly">
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
