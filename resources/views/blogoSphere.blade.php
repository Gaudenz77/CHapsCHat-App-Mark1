@extends('layouts.master')

@section('content')

<section class="blogMain">
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-sm-3">
        CREATEBLOG
        </div>
        
        <div class="col-sm-3 bg-danger circleBlog mx-2">
            <div class="textfieldBlog">LOOP BLOG/BLOGENTRYNO1</div>
        </div>
        <div class="col-sm-3 bg-warning circleBlog mx-2">
            <div class="textfieldBlog">LOOP BLOG/BLOGENTRYNO2</div>
        </div>
        <div class="col-sm-3 bg-success circleBlog mx-2">
            <div class="textfieldBlog">LOOP BLOG/BLOGENTRYNO3</div>
        </div>
    </div>
</div>
</section>



@endsection