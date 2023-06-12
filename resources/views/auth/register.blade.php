@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'registerMain')

@section('content')

<section class="">
    <div class="content">
        <div class="row justify-content-center align-items-center" {{-- style="height: 100vh;" --}}>


<!-- QUOTE TYPEWRITER REGISTER -->

            <div class="col-sm-4 mt-3 px-3 pt-3 pb-0 animate__animated animate__flipInX">
                <button class="btn btn-own" id="playButtonReg"><span class="material-symbols-outlined">play_circle</span>Play Audio</button>
                <div class="typewriter-wrapper" id="colElementReg" style="display: none;">
                  <blockquote class="blockquote-fluid mb-0 p-4" {{-- style="width:fit-content;" --}}>
                      <span id="" class="type" style="--n:742">"In general, we look for a new law by the following process. First, we guess it (audience laughter), no, don't laugh, that's really true. Then we compute the consequences of the guess to see what, if this is right, if this law that we guessed is right, to see what it would imply and then we compare the computation results to nature or we say, compare to experiment or experience, compare it directly with observations to see if it works. If it disagrees with experiment, it's wrong. In that simple statement is the key to science. It doesn't make any difference how beautiful your guess is, it doesn't matter how smart you are who made the guess, or what his name is… If it disagrees with experiment, it's wrong. That's all there is to it."</span>
                   <footer class="blockquote-footer mt-2">Quote generated by <cite title="Source title">ChatGPT, 29/05/2023 <br>(asked for giving a quote about the importance for individual humans of playing, testing, and trying).</cite></footer>
                  </blockquote>
                </div>
              </div>

            <div class="col-md-4 animate__animated animate__flipInY">
                <div class="card circleAuth cardLogin">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                    
                            <!-- Name -->
                            <label class="form-label loginLabel" for="name">{{ __('Name') }}</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text login labelAuth" for="email"><i class="fa-solid fa-signature iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your name">{{ __('') }}</i></span>   
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
                                <span class="input-group-text login labelAuth" for="email"><i class="fa-solid fa-at iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter your e-mail address">{{ __('') }}</i></span>
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
                                <span class="input-group-text login labelAuth" for="email"><i class="fa-solid fa-key iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Enter a password">{{ __('') }}</i></span>
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
                                <span class="input-group-text login labelAuth" for="email"> <p class="squared"></p> <i class="fa-solid fa-key iconAuth" data-bs-custom-class="custom-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Confirm your password">{{ __('^2') }}</i></span>
                                <input id="password_confirmation" class="form-control login" title="Confirm your password" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
        
                            <!-- Already Registered? -->
                            <div class="d-md-flex justify-content-md-between align-items-md-center flex-md-column text-center">
                                <a class="loginLabel text-decoration-none mb-3" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>
                              
                                <button type="submit" class=" btn btn-lg btn-auth p-2 ml-md-4">
                                    <span class="material-symbols-outlined pe-3">
                                        login
                                        </span>{{-- <br>{{ __('Register') }} --}}
                                </button>
                            </div>
                              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<audio id="myAudioReg">
    <source src="./assets/audio/typewriter-1.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
  </audio>
  
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var audio = document.getElementById("myAudioReg");
      var playButton = document.getElementById("playButtonReg");
      var colElement = document.getElementById("colElementReg");
      var playCountPercentage = 50; // Play count as a percentage
      var playCount = audio.duration * (playCountPercentage / 100); // Calculate play count based on audio duration
      var currentPlayCount = 0; // Counter for tracking play count
      
      // Play audio and show the colElement when the button is clicked
      playButton.addEventListener("click", function() {
        if (currentPlayCount < playCount) {
          audio.play();
          currentPlayCount++;
          colElement.classList.add("show");
        }
      });
      
      // Event listener to reset the play count when the audio ends
      audio.addEventListener('ended', function() {
        if (currentPlayCount >= playCount) {
          currentPlayCount = 0; // Reset the play count
        }
      });
    });
  </script>
  
  
  

@endsection