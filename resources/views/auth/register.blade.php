@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'registerMain')

@section('content')

    <section class="">
        <div class="container">
            <div class="row justify-content-between align-items-center" {{-- style="height: 100vh;" --}}>

                <!-- QUOTE TYPEWRITER REGISTER -->

                <div class="col-sm-4 mt-3 px-3 pt-3 pb-0  order-2 order-sm-1 animate__animated animate__flipInX">
                    <a class="col-6 btn btn-circleType" id="playButtonReg" href="#"
                        style="display: inline-block; padding: 5px;">
                        <img class="col-12 image-fluid" src="./assets/img/typewriter.png" alt="typewriter_cute">
                    </a>
                    {{-- <button class="btn btn-own" id="playButtonReg"><span class="material-symbols-outlined">play_circle</span>Play Audio</button> --}}
                    <div class="typewriter-wrapper" id="colElementReg" style="display: none;">
                        <blockquote class="blockquote-fluid mb-0 p-4" {{-- style="width:fit-content;" --}}>
                            <span id="" class="type" style="--n:742">"In general, we look for a new law by the
                                following process. First, we guess it (audience laughter), no, don't laugh, that's really
                                true. Then we compute the consequences of the guess to see what, if this is right, if this
                                law that we guessed is right, to see what it would imply and then we compare the computation
                                results to nature or we say, compare to experiment or experience, compare it directly with
                                observations to see if it works. If it disagrees with experiment, it's wrong. In that simple
                                statement is the key to science. It doesn't make any difference how beautiful your guess is,
                                it doesn't matter how smart you are who made the guess, or what his name is… If it disagrees
                                with experiment, it's wrong. That's all there is to it."</span>
                            <footer class="blockquote-footer mt-2">Quote found in Volume 1, Chapter 1, Section 1-1 titled
                                "The Law of Gravitation – An Example of Physical Law" in "The Feynman Lectures on Physics."
                                <cite title="Source title">Richard Feynman</cite></footer>
                        </blockquote>
                    </div>
                </div>

                <div class="col-md-7 animate__animated animate__flipInY">
                    <div class="card circleAuthReg cardLogin px-3 pt-2 pb-3 m-0 m-md-5 px-md-2" id="authCard">

                        <div class="card-body text-center d-flex justify-content-center px-0 px-md-5 pt-5">
                            <form class="mx-2 mt-md-4 px-0 px-md-5 pt-0 pb-0 pt-md-0" method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <label class="form-label loginLabel" for="name">{{ __('Name') }}</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text login labelAuth" for="email"><i
                                            class="fa-solid fa-signature iconAuth" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Enter your name">{{ __('') }}</i></span>
                                    <input id="name"
                                        class="form-control login{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                        title="Enter your name" type="text" name="name" value="{{ old('name') }}"
                                        required autofocus autocomplete="name" />
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <!-- Email Address -->
                                <label class="form-label loginLabel" for="email">{{ __('Email') }}</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text login labelAuth" for="email"><i
                                            class="fa-solid fa-at iconAuth" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Enter your e-mail address">{{ __('') }}</i></span>
                                    <input id="email"
                                        class="form-control login{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        title="Enter your e-mail adress" type="email" name="email"
                                        value="{{ old('email') }}" required autocomplete="username" />
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <!-- Password -->
                                <label class="form-label loginLabel" for="password">{{ __('Password') }}</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text login labelAuth" for="email"><i
                                            class="fa-solid fa-key iconAuth" data-bs-custom-class="custom-tooltip"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Enter a password">{{ __('') }}</i></span>
                                    <input id="password"
                                        class="form-control login{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        title="Enter a password" type="password" name="password" required
                                        autocomplete="new-password" />
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <!-- Confirm Password -->
                                <label class="form-label loginLabel"
                                    for="password_confirmation">{{ __('Confirm Password') }}</label>
                                <div class="input-group mb-2">
                                    <span class="input-group-text login labelAuth" for="email">
                                        <p class="squared"></p> <i class="fa-solid fa-key iconAuth"
                                            data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Confirm your password">{{ __('^2') }}</i>
                                    </span>
                                    <input id="password_confirmation" class="form-control login"
                                        title="Confirm your password" type="password" name="password_confirmation" required
                                        autocomplete="new-password" />
                                </div>

                                <div class="form-group d-flex justify-content-center mx-2 mt-3 mb-2">
                                    {!! NoCaptcha::renderJs() !!}
                                    {!! NoCaptcha::display(['data-theme' => 'dark']) !!}
                                </div>

                                <div class="row">
                                    <div class="col text-center">
                                        <button type="submit" class=" btn btn-lg btn-auth my-2 p-2 ml-md-4">
                                            <span class="material-symbols-outlined pe-3">
                                                login
                                            </span>{{-- <br>{{ __('Register') }} --}}
                                        </button>
                                    </div>
                                </div>
                                <!-- Already Registered? -->
                                <div
                                    class="d-md-flex justify-content-md-between align-items-md-center flex-md-column text-center">
                                    <a class="loginLabel text-decoration-none mb-1" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                                </div>
                               

                            </form>
                        </div>
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
            var playButton = document.getElementById("playButtonReg");
            var colElement = document.getElementById("colElementReg");
            var playCount = 10; // Desired play count (e.g., 3.5 seconds)
            var isPlaying = false; // Flag to track audio playing state

            function playAudio() {
                audio.currentTime = 0; // Reset current time
                audio.play();
                colElement.classList.add("show");
                isPlaying = true;
            }

            function handleAudioEnd() {
                playCount -= 0.8; // Decrease play count by 1 second
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
                authCard.classList.add('circleAuthReg');
            } else {
                authCard.classList.remove('circleAuthReg');
            }
        }

        // Call the function on page load and window resize
        window.addEventListener('DOMContentLoaded', removeCircleAuthClass);
        window.addEventListener('resize', removeCircleAuthClass);


        /* var onloadCallback = function() {
            alert("grecaptcha is ready!");
        }; */


    </script>

@endsection
