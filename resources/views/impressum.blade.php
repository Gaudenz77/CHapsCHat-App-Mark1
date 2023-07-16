@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'welcomeMain')

@section('content')

    <div id="icon">
        <div class="circle-container">
            <svg viewBox="-15 0 130 100" class="circle-svg">
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
            <div class="col-12 text-center px-4">
                <div class="text-center">
                    <h1 class="display-5 mt-3 mb-2 text-center animate__animated animate__zoomInUp animate__delay-5s">
                        <b>{{ __('Welcome To CHapsCHat') }}</b>
                    </h1>
                    <h3 class="text-center mb-1">Legal Notice</h3>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-4 {{-- bg-info --}} p-3 py-0">
                <p>
                    <p class="lead mb-0"><b><strong>Responsible entity:</strong></b></p>
                    Gaudenz Raiber<br />Neugasse 81<br />Ch-8005
                    Zurich<br />Switzerland<br /><strong>Email</strong>:
                    <a href="mailto:krakatoom01@proton.me">Gaudenz Raiber</a><br />
                    <strong>Github</strong>:
                    <a href="https://github.com/Gaudenz77">Gaudenz@Krakatoom</a><br /><br />
                    <p class="lead mb-0"><b><strong>Copyright declaration</strong></b></p>
                    The copyrights and all other rights
                    to content, images, photos or other files on this website belong exclusively to Gaudenz Raiber
                    or the specifically named rights holders. The written consent of the copyright holder must be
                    obtained in advance for the reproduction of any elements.<br /><br />
                </p>
            </div>
            <div class="col-sm-6 p-3 py-0">
                <p>
                    <p class="lead mb-0"><b><strong>Disclaimer</strong></b></p>
                    The author assumes no
                    liability for the correctness, accuracy, timeliness, reliability and completeness of the
                    information.<br />Liability claims against the author for material or immaterial damage
                    resulting from access to, use or non-use of the published information, from misuse of the
                    connection or from technical malfunctions are excluded.<br /><br />All offers are non-binding.
                    The author expressly reserves the right to change, add to, or delete parts of the pages or the
                    entire offer without prior notice, or to temporarily or permanently cease
                    publication.<br /><br />
                    <p class="lead mb-0"><b><strong>Disclaimer for content and links</strong></b></p>
                        References and
                    links to third party websites are outside our area of responsibility. It rejected any
                    responsibility for such websites.<br /> Access to and use of such websites is at the user's own
                    risk.<br /><br />
                     
                </p>
            </div>
        </div>

        <p class="text-center mb-2">
            <strong>Source</strong>: <a
            style='color:inherit;text-decoration:none;' href='https://brainbox.swiss/'>BrainBox
            Solutions</a>
        </p>

        <div class="row justify-content-center">
            <div class="col-sm-6 text-center">
                <img id="logoImage" class="animate__animated animate__pulse animate__infinite"
                    src="./assets/img/Group 26.svg" alt="logo_image" class="logoImg img-fluid mx-0 mt-sm-n1 ms-2"
                    style="width: 30%; margin-bottom: -1rem;">
            </div>
        </div>
    </div>

    <script>
        const logoImage = document.getElementById('logoImage');

        setTimeout(() => {
            logoImage.classList.remove('animate__pulse');
            setTimeout(() => {
                logoImage.classList.add('animate__pulse');
            }, 2000);
        }, 2000);
    </script>

@endsection
