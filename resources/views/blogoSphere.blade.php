@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')

<section class="blogMain">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-sm-3 bg-info" id="formContainer2" style="display: none;">
                <div class="form-wrapper">
                    <h3>Create Blog</h3>
                    <my-blog-form></my-blog-form>
                </div>
            </div>
            
            <div class="col-sm-9 bg-warning">
                <div class="container">
                    <div class="row justify-content-evenly">
                        <my-blog-content></my-blog-content>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection