@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'knowledgeMain')

@section('content')

<section class="">
<div class="container mt-3">

    <div class="row justify-content-center align-items-center" style="">

      <div class="col-sm-12 col-md-8 col-lg-8 p-3 rounded order-2 mx-5 knowledgeTable" {{-- style="width:100%;" --}}>
        <h2 class="pt-3">{{ Auth::user()->name }}'s Library</h2> 
        <my-library-content></my-library-content>
      </div>

      <div class="col-sm-5 col-md-9 col-lg-5 circleKnowledgeForm order-1 text-center mb-4 animate__animated animate__zoomInDown" id="formContainer" style="display: none;">
        <div class="form-wrapper">
          <div class="circle-text">
            <svg viewBox="0 -20 200 40" xmlns="http://www.w3.org/2000/svg">
              <path id="halfCirclePath" d="M0,100 A100,100 0 0,1 200,100" fill="none" stroke="none"></path>
              <text>
                <textPath href="#halfCirclePath" startOffset="50%" text-anchor="middle" class="rainbow-text" :fill="isDarkMode ? '#333' : '#ebebeb'">Library</textPath>
              </text>
            </svg>
            <p class="hintKnowledge">Arm yourself, with knowledge!</p>
          </div>
          <my-library-form :edit-mode="editMode"></my-library-form>
        </div>
      </div>
      
      
      
      
      
      

    </div>
    
</div>

</section>


@endsection