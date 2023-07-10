@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'aboutMain')

@section('content')

    <div class="container-fluid">
        <div class="row {{-- align-items-center --}} justify-content-center">
            <div class="col-md-4 bg-danger mb-0 mb-md-3 p-3 px-4 animate__animated animate__flipInX animate__delay-1s">
                <h1 class="display-6 mt-0"><b>About Us:</b></h1>

                <ul class="list-unstyled">

                    <li>
                        <h3>Introduction</h3>
                        <p>Hello and welcome! My name is [Your Name], and I'm thrilled to have you here on my website.</p>
                    </li>

                    <li>
                        <h3>Background and Expertise</h3>
                        <p>I have a degree in [Field of Study] and have been working in the [Industry/Field] for over
                            [Number] years. My passion lies in [Your Passion/Expertise], where I have gained extensive
                            knowledge and experience.</p>
                    </li>

                    <li>
                        <h3>Mission and Values</h3>
                        <p>At the core of my work is a commitment to [Your Mission/Values]. I believe that [Brief
                            Explanation of Beliefs/Motivations]. It is my driving force to [How You Contribute/Make a
                            Difference].</p>
                    </li>

                    <li>
                        <h3>Services or Products</h3>
                        <p>I offer a range of [Services/Products] that are designed to [Benefit/Address a Specific Need].
                            Through my [Services/Products], I strive to [Unique Selling Proposition].</p>
                    </li>

                    <li>
                        <h3>Achievements and Recognition</h3>
                        <p>Throughout my career, I have been honored to receive [Awards/Honors], and my work has been
                            featured in [Relevant Publications/Media Outlets]. I have also had the privilege of
                            collaborating with [Influential Individuals/Organizations] on projects that have made a
                            significant impact.</p>
                    </li>

                </ul>
            </div>


            <div class="col-md-4 bg-info mb-0 mb-md-3 p-3 animate__animated animate__flipInX animate__delay-3s">

                <ul class="list-unstyled">
                    <li>
                        <h3>Achievements and Recognition</h3>
                        <p>Throughout my career, I have been honored to receive [Awards/Honors], and my work has been
                            featured in [Relevant Publications/Media Outlets]. I have also had the privilege of
                            collaborating with [Influential Individuals/Organizations] on projects that have made a
                            significant impact.</p>
                    </li>

                    <li>
                        <h3>Personal Interests or Hobbies</h3>
                        <p>When I'm not working, you'll often find me [Personal Interest/Hobby]. I'm an avid
                            [Interest/Hobby] enthusiast and enjoy [Related Activities]. It helps me find balance and
                            inspiration, allowing me to bring fresh perspectives to my work.</p>
                    </li>

                    <li>
                        <h3>Call to Action</h3>
                        <p>Thank you for taking the time to learn more about me. I would love to hear from you and discuss
                            how we can work together. Feel free to [Contact Option] or explore [Related Sections/Links] for
                            more information.</p>
                    </li>

                    <li class="text-center animate__animated animate__zoomInUp animate__delay-5s">
                        <h3>That's me...</h3>
                        <img src="./assets/img/krakatoom_favicon.png" alt="About Image" class="img-fluid mx-auto px-1">
                    </li>
                </ul>

            </div>

            <div class="col-md-4 bg-warning mb-0 mb-md-3 p-3 px-5 animate__animated animate__flipInY animate__delay-2s">
                <ul class="list-unstyled">
                    <li class="text-center">

                </ul>

                <h1 class="display-6 mx-0 mt-0"><b>Contact</b></h1>

                <form action="https://formspree.io/f/mdorolbg" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Your email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your message:</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <!-- your other form fields go here -->
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>

                <h1 class="display-6 mx-0 mt-5"><b>Mailto:</b></h1>
                <a class="lead mx-0" href="mailto:krakatoom@proton.me"><b>krakatoom@proton.me:</b></a>
                <p><b style="color: blue;">Copyright &copy; @ {{ date('d/m/Y') }}</b></p>

            </div>
        </div>
    </div>

@endsection
