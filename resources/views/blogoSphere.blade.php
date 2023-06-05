@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'blogMain')

@section('content')

<section class="">
    <div class="container-fluid">

        <div class="row justify-content-center align-items-start">
            <div class="col-sm-4 circleBig bg-info mb-0" id="formContainer" style="display: none;height: 100vh;">
                <div class="form-wrapper">
                    <h3 class="">Create Blog</h3>
                    <my-blog-form></my-blog-form>
                </div>
            </div>
            
            <div class="col-sm-8 mt-md-0 mt-0">
                <div class="container" style=" margin-top:-15% ! important">
                    @auth
                    <div class="text-end mt-2">
                        <button class="btn btn-own mt-md-0 mt-5 text-end" type="button" role="button" id="createButton2"><i class="fa-solid fa-circle-plus fa-4x formOwnOne"></i> Create</button>
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