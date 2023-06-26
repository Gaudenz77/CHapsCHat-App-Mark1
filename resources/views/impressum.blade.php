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
            <div class="col-12 text-center">
                <div class="text-center">
                    <h1 class="display-3 text-center animate__animated animate__zoomInUp animate__delay-5s">
                        <b>{{ __('Welcome To CHapsCHat') }}</b>
                    </h1>
                        
                    <h4 style="text-align: left;">Legal Notice</h4>
                    <div class="legalNotice text-start">
                        [Company Name]
                        [Address]
                        [Phone Number]
                        [Email Address]
                        <p>Represented by:</p>
                        [Name of Person in Charge]
                        <p>Responsible for Content:</p>
                        [Name of Person in Charge]
                        <p>VAT ID: [VAT Number, if applicable]
                        </p><p>Regulatory Authority: [Name of relevant regulatory authority, if applicable]
                        </p><p>Online Dispute Resolution: [Link to the Online Dispute Resolution platform, if applicable]
                        </p><p>This Legal Notice complies with the German laws under § 5 TMG and § 55 RStV.</p>
                        <p><strong>&nbsp;</strong></p>
                        <p><strong>Liability for Content</strong></p>
                        <p>The contents of our website have been created with the greatest possible care. However, we cannot guarantee the contents' accuracy, completeness, or topicality. According to Section 7, paragraph 1 of the TMG (Telemediengesetz - German Telemedia Act), we as service providers are liable for our content on these pages by general laws. However, according to Sections 8 to 10 of the TMG, we service providers are not obliged to monitor external information transmitted or stored or investigate circumstances pointing to illegal activity. Obligations to remove or block the use of information under general laws remain unaffected. However, a liability in this regard is only possible from the moment of knowledge of a specific infringement. Upon notification of such violations, we will remove the content immediately.</p>
                        <p><strong>Liability for Links</strong></p>
                        <p>Our website contains links to external websites, over whose contents we have no control. Therefore, we cannot accept any liability for these external contents. The respective provider or operator of the websites is always responsible for the contents of the linked pages. The linked pages were checked for possible legal violations at the time of linking. Illegal contents were not identified at the time of linking. However, permanent monitoring of the contents of the linked pages is not reasonable without specific indications of a violation. Upon notification of violations, we will remove such links immediately.</p>
                        <p><strong>Copyright</strong></p>
                        <p>The contents and works on these pages created by the site operator are subject to German copyright law. The duplication, processing, distribution, and any kind of utilization outside the limits of copyright require the written consent of the respective author or creator. Downloads and copies of these pages are only permitted for private, non-commercial use. In so far as the contents on this site were not created by the operator, the copyrights of third parties are respected. In particular, third-party content is marked as such. Should you become aware of a copyright infringement, please inform us accordingly. Upon notification of violations, we will remove such contents immediately.</p>
                        <p>Last Updated: [Date of last update]
                        </p>
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