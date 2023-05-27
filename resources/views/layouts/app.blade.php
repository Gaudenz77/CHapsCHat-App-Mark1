@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')


<body class="font-sans antialiased">
    <header>
        @include('layouts.navigation')

    </header>
            
    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{-- {{ $header }} --}}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
        
    <!-- toggle mode script start -->
    @include('components.darkmodeToggle')
    
    @vite(['resources/js/app.js', 'resources/js/custom.js'])
    </body>
</html>
@endsection