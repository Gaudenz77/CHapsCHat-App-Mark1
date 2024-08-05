<!DOCTYPE html>
@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'welcomeMain')

@section('content')

    <div id="icon">
        <div class="circle-container">
            <svg viewBox="-17 0 130 100" class="circle-svg">
              <path id="circlePath" class="circle-path" d="M50,0 A50,50 0 1,1 50,99.9"></path>
              <text class="circle-text">
                <textPath xlink:href="#circlePath" startOffset="50%" text-anchor="middle">
                  Catch Me If U Can!
                </textPath>
              </text>
            </svg>
            <i class="iconshooter fa-solid fa-laugh-wink fa-5x"></i>
          </div>
    </div>

    <div class="container">

        <div class="row align-items-center justify-content-center">

            <div id="logoMiddle" class="row justify-content-center d-lg-none" {{-- style="display:;" --}}>
                <div class="col-12  d-flex align-items-middle ms-3">
                    <a type="button" href="{{ url('/blogoSphere') }}" id="button"
                        class="btn btn-index-small col-sm-3 pe-0 me-md-4 me-lg-4 animate__animated animate__backInLeft animate__delay-2s overlay-container">
                        <img class="img-fluid squareSmall" src="./assets/img/square_pure.svg" alt="square pure shape">
                        <div class="overlay-small">
                            <span class="overlay-text-small">ReaD thE latesTest BlOgs!</span>
                        </div>
                    </a>

                    <a type="button" href="{{ url('/playground') }}" id="button"
                        class="btn btn-index-small rounded-circle col-sm-3 px-0 mb-0 animate__animated animate__backInDown animate__delay-3s overlay-container">
                        <img class="img-fluid mx-1" src="./assets/img/circle_pure.svg" alt="circle pure shape">
                        <div class="overlay-small">
                            <span class="overlay-text-small">ENter thE PlayGroUnD!</span>
                        </div>
                    </a>

                    <a type="button" href="{{ url('/knowledgeSphere') }}" id="button"
                        class="btn btn-index-small  col-sm-3 ps-0 animate__animated animate__backInRight animate__delay-4s overlay-container">
                        <div class="col-12">
                            <img class="img-fluid ps-2" src="./assets/img/triangle_blue_pure_small.svg" alt="blue triangle shape">
                        </div>

                        <div class="overlay-small">
                            <span class="overlay-text-small mt-3">ColleCt YouR KnoWledGe!</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="container text-center">
                        <h1 class="hookLine display-5 display-md-3 pt-3 pb-1 pb-md-3 text-center animate__animated animate__zoomInUp animate__delay-5s" style="font-style: italic;">
                            <b>{{ __('Welcome To CHapsCHat') }}</b>
                        </h1>
                        <p class="indexListText lead mb-sm-0 animate__animated animate__bounceInLeft animate__delay-1s" style="font-style: italic;">
                          
                                    <strong>Visit our Blog:</strong> <a
                                    class="nav-item myNavToggleTitle px-0 {{ request()->is('/') ? '' : '' }}"
                                    aria-current="page" href="{{ url('/blogoSphere') }}"><b class="hookLineParaKnow">>>> Read more...</b></a>
                           
                        </p>
                        <p class="indexListText lead mb-sm-0 animate__animated animate__bounceInRight animate__delay-2s" style="font-style: italic;">
                            <strong>Let's chat and code together:</strong> <a
                            class="nav-item myNavToggleTitle px-0 {{ request()->is('/') ? '' : '' }}"
                            aria-current="page" href="{{ url('/playground') }} " onclick="reloadTwice()"><b class="hookLineParaPlay">>>> Welcome
                                to the Playground. Join Now!</b></a>   </p>
                        <p class="indexListText lead mb-sm-0 animate__animated animate__bounceInUp animate__delay-3s" style="font-style: italic;">
                            <strong>Go to Your Personal Library:</strong> <a
                                class="nav-item myNavToggleTitle px-0 {{ request()->is('/') ? '' : '' }}"
                                aria-current="page" href="{{ url('/knowledgeSphere') }}"><b class="hookLineParaLib">>>> Explore Now</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="col-12 text-center d-none d-md-block d-lg-block">
                <a type="button" href="{{ url('/blogoSphere') }}"
                    class="btn btn-index col-sm-3 me-md-4 me-lg-4 animate__animated animate__backInLeft animate__delay-2s overlay-container">
                    <img class="img-fluid p-3" src="./assets/img/square_pure.svg" alt="square pure shape">
                    <div class="overlay">
                        <span class="overlay-text">ReaD thE latesT BlOgs!</span>
                    </div>
                </a>

                <a type="button" href="{{ url('/playground') }}" id="button"
                    class="btn btn-index rounded-circle col-sm-3 mb-0 animate__animated animate__backInDown animate__delay-3s overlay-container">
                    <img class="img-fluid p-3" src="./assets/img/circle_pure.svg" alt="circle pure shape">
                    <div class="overlay">
                        <span class="overlay-text">ENter thE PlayGroUnD!</span>
                    </div>
                </a>

                <a type="button" href="{{ url('/knowledgeSphere') }}" id="button"
                    class="btn btn-index  col-sm-3  animate__animated animate__bounceInUp animate__delay-s overlay-container">
                    <img class="img-fluid triangleFix" src="./assets/img/triangle_pure_large.svg" alt="triangle pure shape">
                    <div class="overlay">
                        <span class="overlay-text mt-5 me-4">ColleCt YouR KnoWledGe!</span>
                    </div>
                </a>
            </div>

        </div>

    </div>

    <!-- Modal -->
    {{-- <div class="modal fade cookiemodal" id="cookiemodal" tabindex="-1" aria-labelledby="cookieModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cookieModalLabel">Cookie Consent</h5>
                    <button type="button" class="btn-close d-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>This website uses cookies to ensure you get the best experience on our website.</p>
                    <p>By continuing to use this site, you consent to the use of cookies.</p>
                    <div class="d-flex align-items-center">
                        <input type="checkbox" id="cookieConsentCheckbox" class="mr-2 d-none">
                        <label for="cookieConsentCheckbox" class="mb-0  ms-3 d-none">I accept the use of cookies</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Decline</button>
                    <button type="button" class="btn btn-primary" id="acceptCookiesBtn">Accept</button>
                </div>
            </div>
        </div>
    </div> --}}

@endsection

<script>
/* document.addEventListener('DOMContentLoaded', function() {
  var cookieModal = document.getElementById('cookiemodal');
  var acceptCookiesBtn = document.getElementById('acceptCookiesBtn');

  // Show the modal
  function showModal() {
    cookieModal.classList.add('show');
    cookieModal.style.display = 'block';
    document.body.classList.add('modal-open');
    document.body.appendChild(document.createElement('div')).classList.add('modal-backdrop', 'fade', 'show');
  }

  // Hide the modal
  function hideModal() {
    cookieModal.classList.remove('show');
    cookieModal.style.display = 'none';
    document.body.classList.remove('modal-open');
    var backdrop = document.querySelector('.modal-backdrop');
    document.body.removeChild(backdrop);
  }

  // Check if the user has already accepted the cookies
  var hasConsent = localStorage.getItem('cookieConsent');
  console.log('hasConsent:', hasConsent); // Log the value

  // Delay showing the modal
  setTimeout(function() {
    if (!hasConsent || hasConsent !== 'true') {
      showModal();
    }
  }, 10000); // 10 seconds delay

  // Handle accept button click
  acceptCookiesBtn.addEventListener('click', function() {
    // Set the cookie consent flag in localStorage
    localStorage.setItem('cookieConsent', 'true');

    // Hide the modal
    hideModal();
  });
}); */

</script>
