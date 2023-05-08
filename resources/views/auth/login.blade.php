@extends('layouts.master')

@section('title', 'ChapsChat')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <!-- Session Status -->
          <x-auth-session-status class="mb-4" :status="session('status')" />
  
          <form method="POST" action="{{ route('login') }}">
            @csrf
  
            <!-- Email Address -->
            <div class="mb-3">
              <x-input-label for="email" :value="__('Email')" />
              <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
  
            <!-- Password -->
            <div class="mb-3">
              <x-input-label for="password" :value="__('Password')" />
  
              <x-text-input id="password" class="form-control"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
  
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
  
            <!-- Remember Me -->
            <div class="mb-3 form-check">
              <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
              <label for="remember_me" class="form-check-label">
              {{ __('Remember me') }}
              </label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              @if (Route::has('password.request'))
              <a class="text-decoration-none" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
              </a>
              @endif
              <button type="submit" class="btn btn-primary ml-4">{{ __('Log in') }}</button>
              {{-- <x-primary-button class="ml-auto">
                {{ __('Log in') }}
              </x-primary-button> --}}
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
