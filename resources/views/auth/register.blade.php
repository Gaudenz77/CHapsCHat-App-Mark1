@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')
<div class="row justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-4">
        <div class="card circleAuth cardLogin">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
            
                    <!-- Name -->
                    <label class="form-label loginLabel" for="name">{{ __('Name') }}</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text login" for="email"><i class="fa-solid fa-signature iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your name">{{ __('') }}</i></span>   
                        <input id="name" class="form-control login{{ $errors->has('name') ? ' is-invalid' : '' }}" title="Enter your name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>

                    <!-- Email Address -->
                    <label class="form-label loginLabel" for="email">{{ __('Email') }}</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text login" for="email"><i class="fa-solid fa-at iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your e-mail address">{{ __('') }}</i></span>
                        <input id="email" class="form-control login{{ $errors->has('email') ? ' is-invalid' : '' }}" title="Enter your e-mail adress" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
            
                    <!-- Password -->
                    <label class="form-label loginLabel" for="password">{{ __('Password') }}</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text login" for="email"><i class="fa-solid fa-key iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter a password">{{ __('') }}</i></span>
                        <input id="password" class="form-control login{{ $errors->has('password') ? ' is-invalid' : '' }}" title="Enter a password" type="password" name="password" required autocomplete="new-password" />
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
            
                    <!-- Confirm Password -->
                    <label class="form-label loginLabel" for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text login" for="email"> <p class="squared"></p> <i class="fa-solid fa-key iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm your password">{{ __('^2') }}</i></span>
                        <input id="password_confirmation" class="form-control login" title="Confirm your password" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <!-- Already Registered? -->
                    <div class="d-md-flex justify-content-md-between align-items-md-center flex-md-column text-center">
                        <a class="loginLabel text-decoration-none mb-3" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                      
                        <button type="submit" class="btn btn-circle ml-md-4">{{ __('Register') }}</button>
                    </div>
                      
                </form>
            </div>
        </div>
    </div>
</div>
@endsection