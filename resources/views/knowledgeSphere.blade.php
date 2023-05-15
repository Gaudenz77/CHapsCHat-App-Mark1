@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')
<section class="knowledgeMain">
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-3 bg-warning circleKnowledgeForm">
          <h2 class="mt-3">{{ Auth::user()->name }}'s Library</h2>
          
          
            <my-library-form></my-library-form>

        </div>
        
        <div class="col-sm-8 bg-danger {{-- circleKnowledge --}} mx-2">
          
          
          <my-library-content></my-library-content>

    </div>
</div>
</section>

@endsection