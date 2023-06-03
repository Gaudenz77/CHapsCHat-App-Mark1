@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<section class="blogMain">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-start" {{-- style="height: 100vh;" --}}>
            <div class="col-sm-4 circleBig bg-info {{-- mt-md-5 mt-5 --}} mb-0" id="formContainer2" style="display: none;height: 100vh;">
                <div class="form-wrapper">
                    <h3 class="">Create Blog</h3>
                    <my-blog-form></my-blog-form>
                </div>
            </div>
            
            <div class="col-sm-8 {{-- bg-warning --}} mt-md-0 mt-0">
                <div class="container" style=" margin-top:-15% ! important">
                    @auth
                    <div class="text-end mt-2">
                        <button class="btn btn-own mt-md-0 mt-5 text-end" type="button" role="button" id="createButton2"><i class="fa-solid fa-circle-plus fa-2xl formOwnOne"></i> Create</button>
                    </div>
                    @endauth
                    
                    <div class="row justify-content-evenly">
                        <my-blog-content></my-blog-content>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection