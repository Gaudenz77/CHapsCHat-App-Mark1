@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'knowledgeMain')

@section('content')
<section class="knowledgeMain">
<div class="container mt-3">
    <div class="row justify-content-center align-items-center" style="height: 100vh;">

      <div class="col-sm-7 bg-danger order-2">
        <my-library-content></my-library-content>
      </div>

      <div class="col-sm-2 bg-warning circleKnowledgeForm order-1" id="formContainer1" style="display: none;">
        <div class="form-wrapper">
          <h2 class="mt-5 p-2">{{ Auth::user()->name }}'s Library</h2>
          <my-library-form></my-library-form>
        </div>
      </div>


    </div>
    
    <div class="row justify-content-center">

    </div>
</div>
</section>

@endsection