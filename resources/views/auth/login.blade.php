@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'loginMain')

@section('content')

<section class="loginMain">
  <div class="container">
    <div class="row justify-content-center align-items-center" {{-- style="height: 100vh;" --}}>
      <div class="col-md-4 mt-5">
        <div class="card circleAuth cardLogin">
          <div class="card-body">
            <!-- Session Status -->
            @if (session('status'))
              <div class="alert alert-success mb-4" role="alert">
                {{ session('status') }}
              </div>
            @endif
    
            <form method="POST" action="{{ route('login') }}">
              @csrf
    
              <!-- Email Address -->
              <label class="form-label loginLabel" for="email">{{ __('Email') }}</label>
              <div class="input-group mb-3">
                <span class="input-group-text login" for="email"><i class="fa-solid fa-solid fa-at iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your e-mail address">{{ __('') }}</i></span>
                <input id="email" class="form-control login" title="Enter your e-mail address" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                @error('email')
                  <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
              </div>
              
              <!-- Password -->
              <label class="form-label loginLabel" for="password">{{ __('Password') }}</label>
              <div class="input-group mb-3">  
                <span class="input-group-text login" for="email"><i class="fa-solid fa-key iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your password">{{ __('') }}</i></span>
                <input id="password" class="form-control login" title="Enter your password" type="password" name="password" required autocomplete="current-password">
                @error('password')
                  <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
              </div>
    
              <!-- Remember Me -->
              <div class="mb-3 form-check">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label class="form-check-label loginLabel" for="remember_me">{{ __('Remember me') }}</label>
              </div>
    
              <!-- Forgot your password? -->
              <div class="d-md-flex justify-content-md-between align-items-md-center flex-md-column text-center">
                @if (Route::has('password.request'))
                  <a class="loginLabel text-decoration-none mb-3" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                @endif
                <button type="submit" class="btn btn-circle ml-md-4">{{ __('Log in') }}</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  
@endsection
