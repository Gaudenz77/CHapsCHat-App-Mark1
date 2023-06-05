@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'aboutMain')

@section('content')

<div class="container">
  <div class="row {{-- align-items-center --}} justify-content-center">
    <div class="col-md-4 aboutCol bg-danger me-md-2 mx-2 p-4 animate__animated animate__flipInX animate__delay-1s">
      <h1 class="display-6 mt-0"><b>About Us:</b></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod sem ut mi blandit, in tempus lacus vestibulum.</p>
    </div>
    
    <div class="col-md-3 circle bg-info d-flex align-items-center justify-content-center mx-md-4 my-4 animate__animated animate__zoomInUp animate__delay-5s">
        <img src="./assets/img/krakatoom_favicon.png" alt="About Image" class="img-fluid mx-auto px-1">
    </div>
      
    <div class="col-md-4 aboutCol bg-warning mss-md-2 mx-2 p-4 animate__animated animate__flipInY animate__delay-2s">
      <h1 class="display-6 mx-0 mt-0"><b>Mailto:</b></h1>
      <a class="lead mx-0" href="mailto:krakatoom@proton.me"><b>krakatoom@proton.me:</b></a>
      <p><b style="color: blue;">Copyright &copy; @ {{date('d/m/Y')}}</b></p>
      
      {{-- <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Send Message</button>
      </form> --}}
    </div>
  </div>
</div>

@endsection