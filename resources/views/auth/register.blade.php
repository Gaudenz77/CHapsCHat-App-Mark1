@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="card circleAuth cardLogin">
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
            
                    <!-- Name -->
                    <div class="form-group mb-3">
                    <label class="form-label login" for="name">{{ __('Name') }}</label>
                    <input id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" />
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    </div>
            
                    <!-- Email Address -->
                    <div class="form-group mb-3">
                    <label class="form-label login" for="email">{{ __('Email') }}</label>
                    <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" />
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    </div>
            
                    <!-- Password -->
                    <div class="form-group mb-3">
                    <label class="form-label login" for="password">{{ __('Password') }}</label>
                    <input id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" required autocomplete="new-password" />
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    </div>
            
                    <!-- Confirm Password -->
                    <div class="form-group mb-3">
                    <label class="form-label login" for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
            
                    <div class="d-md-flex justify-content-md-between align-items-md-center flex-md-column text-center">
                        <a class="login text-decoration-none mb-3" href="{{ route('login') }}">
                          {{ __('Already registered?') }}
                        </a>
                      
                        <button type="submit" class="btn btn-circle ml-md-4">{{ __('Register') }}</button>
                      </div>
                      
                </form>
            </div>
        </div>
    </div>
</div>
  