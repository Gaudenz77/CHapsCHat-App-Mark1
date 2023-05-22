@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<section class="blogMain">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-3 bg-info">
                <h3>Create Blog</h3>
                <my-blog-form></my-blog-form>
                
            </div>
            <div class="col bg-warning">
                
                <my-blog-content></my-blog-content>


            </div>
                            <!-- Loop through the blogs and display them -->
                    {{-- @foreach($blogs as $blog)
                    <div class="col-sm-3 bg-danger circleBlog mx-2">
                            <h2>{{ $blog->title }}</h2>
                            <p>Topic: {{ $blog->id }}</p>
                            <p>Topic: {{ $blog->topic }}</p>
                            <p>{{ $blog->content }}</p>
                            <!-- Add any other fields you want to display -->
            
                            <!-- Add edit and delete buttons if necessary -->
                            <a href="{{ route('blogosphere.edit', $blog->id) }}">Edit</a>
                            <form action="{{ route('blogosphere.destroy', $blog->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </div>
                    @endforeach --}}
                
                
   
            </div>
        </div>
    </div>
</section>



@endsection