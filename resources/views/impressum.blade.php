@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'welcomeMain')

@section('content')

    <div id="icon">
        <i class="iconshooter fa-solid fa-face-grin-squint-tears fa-5x {{-- fa-beat --}}"></i>
        <p style="font-family:'Roboto', sans-serif: font-size:50%;">Catch Me If U Can!</p>
    </div>

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center px-4">
                <div class="text-center">
                    <h1 class="display-3 text-center animate__animated animate__zoomInUp animate__delay-5s">
                        <b>{{ __('Welcome To CHapsCHat') }}</b>
                    </h1>

                    <h4 style="text-align: left;">Legal Notice</h4>
                    <div class="legalNotice text-start">
                        <p><b>Responsible entity:</b><br />Gaudenz Raiber<br />Neugasse 81<br />Ch-8005
                            Zurich<br />Switzerland<br /><strong>Email</strong>:
                            Krakatoom01@proton.me<br /><br /><strong>Disclaimer</strong><br />The author assumes no
                            liability for the correctness, accuracy, timeliness, reliability and completeness of the
                            information.<br />Liability claims against the author for material or immaterial damage
                            resulting from access to, use or non-use of the published information, from misuse of the
                            connection or from technical malfunctions are excluded.<br /><br />All offers are non-binding.
                            The author expressly reserves the right to change, add to, or delete parts of the pages or the
                            entire offer without prior notice, or to temporarily or permanently cease
                            publication.<br /><br /><strong>Disclaimer for content and links</strong><br />References and
                            links to third party websites are outside our area of responsibility. It rejected any
                            responsibility for such websites. Access to and use of such websites is at the user's own
                            risk.<br /><br /><strong>Copyright declaration</strong><br />The copyrights and all other rights
                            to content, images, photos or other files on this website belong exclusively to Gaudenz Raiber
                            or the specifically named rights holders. The written consent of the copyright holder must be
                            obtained in advance for the reproduction of any elements.<br /><br /><strong>Source</strong>: <a
                                style='color:inherit;text-decoration:none;' href='https://brainbox.swiss/'>BrainBox
                                Solutions</a></p>
                    </div>


                </div>
            </div>
        </div>


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
