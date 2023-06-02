@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'loginMain')

@section('content')


    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
        
    <!-- toggle mode script start -->
    
    @include('components.darkmodeToggle')
    
    {{-- @vite(['resources/js/app.js', 'resources/js/custom.js']) --}}
    </body>
</html>
@endsection