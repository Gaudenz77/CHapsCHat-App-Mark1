@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'blogMain')

@section('content')

<section class="">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-start">
            <div class="col-sm-4 col-lg-3 columnBlogTwo px-lg-4 px-2 pt-4 mb-0" id="formContainer" style="display: none;height: 100vh;">
                <div class="form-wrapper">
                    <h3 class="pt-3">Create Blog</h3>
                    <my-blog-form></my-blog-form>
                </div>
            </div>
            
            <div class="col-sm-8 col-lg-8 colBlogContent mt-md-0 mt-0">
                <div class="container mb-3" style=" margin-top:-15% ! important">
                    @auth
                    <div class="text-center">
                        <button class="btn btn-own mt-md-0 mt-5 text-end" type="button" role="button" id="createButton2">
                          <i class="fa-solid fa-circle-plus fa-4x formOwnOne pt-2"
                              data-bs-custom-class="custom-tooltip"
                              data-bs-toggle="tooltip"
                              data-bs-placement="left"
                              data-bs-html="true"
                              title="<b>Press to<br>open form</b>">
                          </i></button>
                        <p class="pBlogText small mt-0 mb-0" style="padding-top:-2rem;">Create</p>
                    </div>
                    @endauth
                    
                    <div class="row">
                        <my-blog-content></my-blog-content>
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