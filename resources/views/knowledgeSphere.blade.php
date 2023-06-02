@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'knowledgeMain')

@section('content')

<section class="">
<div class="container mt-3">
    <div class="row justify-content-center align-items-center" style="">

      <div class="col-sm-8 bg-danger order-2" style="width:100%;">
        <h2>{{ Auth::user()->name }}'s Library</h2>    
        <my-library-content></my-library-content>
      </div>

      <div class="col-sm-2 bg-warning circleKnowledgeForm order-1" id="formContainer1" style="display: none;">
        <div class="form-wrapper">
          <h2 class="mt-5 p-2">Library</h2>
          <my-library-form></my-library-form>
        </div>
      </div>
    </div>
</div>


  
</section>

@endsection