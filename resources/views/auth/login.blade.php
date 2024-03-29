@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'loginMain')

@section('content')

    <section class="">
        <div class="container">
            <div class="row justify-content-evenly align-items-center">
                <div class="col-md-5 px-2 mt-1 animate__animated animate__flipInX">
                    <div class="card circleAuthLog cardLogin px-0 pt-0 pb-3 px-md-5" id="authCard">
                        <div class="card-body text-center">
                            <!-- Session Status -->
                            @if (session('status'))
                                <div class="alert alert-success mb-4" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form class="mx-0 mx-md-2 px-0 px-md-3 pt-5" method="POST" action="{{ route('login') }}"> @csrf
                                <!-- Email Address -->
                                <label class="form-label loginLabel" for="email">{{ __('Email') }}</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text login labelAuth" for="email">
                                        <i class="fa-solid fa-solid fa-at iconAuth" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Enter your e-mail address">{{ __('') }}</i>
                                    </span>
                                    <input id="email" class="form-control {{-- glowing-input --}} login" title="Enter your e-mail address"
                                        type="email" name="email" value="{{ old('email') }}" required autofocus
                                        autocomplete="username"> 
                                        @error('email')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                </div>
                                <!-- Password -->
                                <label class="form-label loginLabel" for="password">{{ __('Password') }}</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text login labelAuth" for="email">
                                        <i class="fa-solid fa-key iconAuth" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Enter your password">{{ __('') }}</i>
                                    </span>
                                    <input id="password" class="form-control {{-- glowing-input --}} login" title="Enter your password"
                                        type="password" name="password" required autocomplete="current-password">
                                        @error('password')
                                        <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                </div>
                                <!-- Remember Me -->
                                <div class="mb-2 form-check text-start">
                                    
                                    <label class="form-check-label loginLabel"
                                        for="remember_me">{{ __('Remember me') }}</label>
                                        <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                </div>
                                
                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class="btn btn-auth my-2 p-2 ml-md-4">
                                            <span class="material-symbols-outlined pe-3" style="padding-left:-2rem;"> login
                                            </span>{{-- {{ __('Log in') }} --}} </button>
                                    </div>
                                </div>
                                <!-- Forgot your password? -->
                                <div
                                    class="d-md-flex justify-content-md-between align-items-md-center flex-md-column text-center">
                                    @if (Route::has('password.request'))
                                        <a class="loginLabel text-decoration-none mb-2"
                                            href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                                    @endif
                                </div>
                            </form>
                            <div class="text-center">
                                <p class="loginLabel pt-3">Subscribe & <a class="loginLabel mb-1"
                                        href="{{ route('register') }}" class="me-0">
                                        <b>Register</b>
                                    </a> now! </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- QUOTE TYPEWRITER LOGIN -->
                <div class="col-sm-6 p-3 text-center text-md-start animate__animated animate__flipInY">
                    <a class="col-6 btn btn-circleType" id="playButtonLog" href="#"
                        style="display: inline-block; padding: 5px;">
                        <img class="col-12 image-fluid" src="./assets/img/typewriter.png" alt="typewriter_cute">
                    </a>
                    {{-- <button class="btn btn-own" id="playButtonLog">
                                      <span class="material-symbols-outlined">play_circle</span>Play Audio
                                  </button> --}}
                    <div class="typewriter-wrapper" id="colElementLog" style="display: none;">
                        <blockquote class="blockquote-fluid mb-0 p-4">
                            <span id="contentSpan" class="type" style="--n:590">"Playing, testing, and trying are not mere
                                frivolous endeavors, but essential elements that unlock the true potential of humanity.
                                Through play, we discover the limits of our imagination and creativity, paving the way for
                                innovation. Testing allows us to push boundaries, uncover flaws, and refine our ideas,
                                ensuring progress and growth. Trying, with its inherent risk and uncertainty, is the
                                catalyst for personal development and the gateway to remarkable achievements. Embrace these
                                pursuits, for they hold the power to transform the world and unveil the extraordinary within
                                ourselves."</span>
                            <footer class="blockquote-footer mt-2">Quote generated by <cite title="Source title">ChatGPT,
                                    29/05/2023 <br>(asked for giving a quote about the importance for individual humans of
                                    playing, testing, and trying). </cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <audio id="myAudioReg">
        <source src="./assets/audio/typwriter_no2.wav" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
  var audio = document.getElementById("myAudioReg");
  var playButton = document.getElementById("playButtonLog");
  var colElement = document.getElementById("colElementLog");
  var playCount = 11; // Desired play count (e.g., 2.5 seconds)
  var isPlaying = false; // Flag to track audio playing state

  function playAudio() {
    audio.currentTime = 0; // Reset current time
    audio.play();
    colElement.classList.add("show");
    isPlaying = true;
  }
 
  function handleAudioEnd() {
    playCount -= 0.8; // Decrease play count by 0.1 second (adjust the increment as needed)
    if (playCount > 0) {
      playAudio();
    } else {
      audio.pause();
      audio.currentTime = 0;
      isPlaying = false;
    }
  }

  // Play audio and show the colElement when the button is clicked
  playButton.addEventListener("click", function() {
    if (!isPlaying) {
      playAudio();
    }
  });

  // Event listener to handle audio pause and end
  audio.addEventListener('pause', function() {
    if (isPlaying) {
      handleAudioEnd();
    }
  });

  audio.addEventListener('ended', function() {
    if (isPlaying) {
      handleAudioEnd();
    }
  });
});



        // Function to handle class removal
        function removeCircleAuthClass() {
            var authCard = document.getElementById('authCard');
            if (window.matchMedia("(orientation: landscape) and (min-width: 768px)").matches) {
                authCard.classList.add('circleAuthLog');
            } else {
                authCard.classList.remove('circleAuthLog');
            }
        }

        // Call the function on page load and window resize
        window.addEventListener('DOMContentLoaded', removeCircleAuthClass);
        window.addEventListener('resize', removeCircleAuthClass);
    </script>

@endsection
