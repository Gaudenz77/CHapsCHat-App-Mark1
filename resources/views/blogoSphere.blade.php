<!DOCTYPE html> 
@extends('layouts.master')

@section('title', 'ChapsChat') 

@section('body-class', 'blogMain')

@section('content') 

<section class="">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-middle">
      <div class="col-sm-4 col-lg-3 columnBlogTwo pb-3 pb-md-5 px-lg-4 px-2 pt-3 pt-md-4 mb-0" id="formContainer" style="display: none;">
        <div class="form-wrapper"> 
          @auth 
          <h1 class="playgLandsTitle">Create Blog<br>
            <strong class="text-warning">{{ Auth::user()->name }}'</strong></h1>
          
          <my-blog-form></my-blog-form> 
          @endauth
        </div>
      </div>
      <div class="col-sm-8 col-lg-8 colBlogContent mt-md-0 mt-3 mb-md-0 mb-2 mb-md-0 px-1 py-md-0">
        <div class="container mb-3" style=" margin-top:-15% ! important">
          <div class="row"> 
          @auth 
            <div class="col-12 text-center mt-0 mt-md-3 mb-0 mb-md-2">
              <button class="btn btn-own mt-md-0 mt-4 mt-md-2 text-end" type="button" role="button" id="createButton2">
                <i class="fa-solid fa-circle-plus fa-4x formOwnOne pt-2" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-html="true" title="
									<b>Create a<br>new post!</b>">
                </i>
              </button>
              <p class="pBlogText small mt-0 mb-0" style="padding-top:-2rem;">Create</p>
            </div> 
          @endauth 
          </div>
          <div class="row">
            <my-blog-content :auth-user-id="{{ Auth::check() ? Auth::id() : 'null' }}"></my-blog-content>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection 

<script>
  // CREATE BLOG DIV -------------------------------------------------------TEST IF ENTRY PAGE STILL WORKING!!!
  
  document.addEventListener('DOMContentLoaded', () => {
    const createButton = document.getElementById('createButton2');
    const formContainer = document.getElementById('formContainer');
    createButton.addEventListener('click', () => {
      formContainer.style.display = 'block';
    });
  });
  document.addEventListener('DOMContentLoaded', () => {
    const createButton = document.getElementById('createButton2');
    const formContainer = document.getElementById('formContainer');
    const closeButton = document.getElementById('closeButton2');
    createButton.addEventListener('click', () => {
      formContainer.style.display = 'block';
    });
    closeButton.addEventListener('click', () => {
      formContainer.style.display = 'none';
    });
  });
  
</script>