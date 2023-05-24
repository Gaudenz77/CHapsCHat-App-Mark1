@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')
<section class="knowledgeMain">
<div class="container mt-3">
    <div class="row justify-content-center" style="margin-top:15vh;">
      {{-- <button id="createButton">Create</button> --}}

      <div class="col-sm-12 bg-warning circleKnowledgeForm" id="formContainer1" style="display: none;">
        <div class="form-wrapper">
          {{-- <button type="button" id="closeButton" class="btn-close" aria-label="Close"></button> --}}
          <h2 class="mt-3">{{ Auth::user()->name }}'s Library</h2>
          <my-library-form></my-library-form>
        </div>
      </div>
      
      
        
        <div class="col-sm-8 bg-danger">
          <my-library-content></my-library-content>
        </div>
    </div>
    <div class="row justify-content-center">

    </div>
</div>
</section>

@endsection