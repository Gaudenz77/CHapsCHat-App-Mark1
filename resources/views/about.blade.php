@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'aboutMain')

@section('content')

    <div class="container-fluid">
        <div class="row {{-- align-items-center --}} justify-content-center">
            <div class="col-md-4 bg-danger mb-0 mb-md-3 p-3 px-4 {{-- animate__animated animate__flipInX animate__delay-1s --}}">
                <h2 class="mt-0"><b>About This Project/Web-App:</b></h2>

                <ul class="list-unstyled">

                    <li>
                        <h4><u>Problem</u></h4>
                        <p>Hello, my friends. I thought of this app while doing my web development crash course over a
                            period of six months, while commuting on public transport during the week. Since I usually spend
                            this idle time browsing the web, social media, or engaging in other forms of entertainment, I
                            often had coding-related thoughts lingering in my mind throughout the day. I used to search for
                            apps with code editors to quickly test some code on the go. However, despite the availability of
                            many professional apps, I wasn't entirely satisfied with most of them.</p>
                    </li>

                    <li>
                        <h4><u>Analysis</u></h4>
                        <p>Similarly, I tested several apps such as Codepen, TrepEdit, Dcoder, Anwriter Free, and Spck
                            Editor. While these apps were professionally developed and offered a wide range of
                            functionalities, they either required payment or had an overwhelming amount of features. What I
                            was looking for was a simple editor that resembled VS Code, allowing me to quickly test a layout
                            grid, a JavaScript function, or a CSS selector. Additionally, I wanted the ability to easily
                            copy and paste CDNs (such as Bootstrap, jQuery, and more) to test basic features. Another idea I
                            had was to create a personal library where I could store code snippets, web links, or even text
                            and manuals for quick reference.

                            <br><br>On the other hand, I thought it would be fantastic to have a built-in channel for
                            discussing
                            coding ideas with friends, enabling quick help without the need to switch to a different
                            messaging app or create special accounts for it.
                        </p>
                    </li>

                    <li>
                        <h4><u>Hypothesis</u></h4>
                        <p>Therefore, while learning about the Laravel framework for data processing (CRUD: Create, Read,
                            Update, and Delete data), as well as exploring frontend frameworks like Vue.js and Bootstrap, I
                            embarked on testing a simple real-time chat exercise provided by various online sources. During
                            this process, I also delved into understanding how in-app code editors generally function,
                            curious about the inner workings of these large applications. Inspired by these experiences, I
                            decided to combine the following features into a single web platform: a messenger, a code
                            editor, and a library.

                            <br><br>The idea of the CHapsChat-App was born, with the additional motivation of considering it
                            as
                            a masterpiece and the final project for my web development crash course offered by SEB Zurich. I
                            aimed to showcase all the newly acquired knowledge and skills through this project to the best
                            of my abilities.
                        </p>
                    </li>

                    <li>
                        <h4><u>Solution/Synthesis</u></h4>
                        <p>
                        <h3>Welcome to ChapsChat-Meeting-Space!</h3> After registering or logging in, you will find the core
                        page
                        known as the "Playground." Its main features include the Messagecenter, powered by Pusher, and
                        the code editor, primarily based on the Monaco code editor, which is the core editor of VS Code.
                        The code editor provides individual editors for HTML, CSS, and JavaScript. In the next updated
                        release, version 2, we will introduce combined editors as a new feature.
                        <br><br>
                        Save your new discoveries and findings in your personal library within the KnowledSphere. If you
                        have stories to share or knowledge to extend beyond the live interaction in the playground
                        messenger, feel free to post a blog in the Blogosphere. These articles will be publicly
                        accessible, even to non-registered users, and can be deleted by the creator. As the main
                        administrator and responsible entity of CHapsChat@Krakatoom.ch (use the contact-form or direct mail
                        at <a href="mailto:masterofceremonies@krakatoom.ch">masterofceremonies@krakatoom.ch)</a>, I will also
                        intervene if any
                        content violates common decency.
                        <br><br>
                        I warmly welcome everyone who discovers this page to join us in exchanging knowledge, learning
                        from one another, and utilizing this app's mobile-first approach for coding on the go. Please
                        refrain from using the chat for nefarious purposes or spreading discriminatory ideas. If you
                        notice any abusive use of the platform, kindly inform me so that I can personally address it.
                        <br><b>Thank you for your time, and happy coding!</b>
                        </p>



                </ul>
            </div>


            <div class="col-md-4 bg-info mb-0 mb-md-3 p-3 {{-- animate__animated animate__flipInX animate__delay-3s --}}">
                <h2 class="mt-0"><b>About Me:</b></h2>
                <ul class="list-unstyled">

                    <li>
                        <h4><u>Personal</u></h4>
                        <p>My name is Gaudenz Raiber, and I'm a web development rookie. My professional background lies in
                            visual communication and graphic design. Apart from my passion for web development, I have a
                            keen interest in various creative arts, history, science, contemporary events, and societal
                            development. I enjoy engaging intellectually with these subjects and taking action to contribute
                            to their growth and understanding.</p>
                    </li>

                    <li>
                        <h4><u>Background and Expertise</u></h4>
                        <p>I have a degree in humanities and music, specifically Matura Typus B (Latein) and Musik, which is
                            similar to the United States Advanced Placement (AP) program. After completing my education, I
                            worked as a Datatypist for various Swiss Banks and later as a Journalist for Ta-Media,
                            specifically within its 20 Minuten "Week" Magazine. In my role as an assistant to the head of
                            the editorial team, I wrote articles primarily in the cultural sector, covering topics such as
                            music, movies, theater, and social trends. I also organized interviews, meetings, and took care
                            of writing redaction meeting protocols.
                            <br><br>
                            Following that, I embarked on a journey around the world, making music with various bands, while
                            also searching for a profession that suited me. During this time, I volunteered at a community
                            center as a Public Relations manager, visual communicator, graphic designer, and web content
                            manager. I was responsible for updating and maintaining information about events and provided IT
                            support when needed.
                            <br><br>
                            On my quest for my professional future, I discovered the opportunity program to become a
                            full-stack web developer. This program allowed me to further explore my interest in web
                            development and equipped me with the skills necessary to pursue this career path.
                            .
                        </p>
                    </li>

                    <li>
                        <h4><u>Mission and Values</u></h4>
                        <p>At the heart of my work is a strong commitment to sharing knowledge, fostering idea exchange, and
                            promoting a collaborative and inclusive environment. I believe in the value of learning together
                            and striving for a productive, joyful, and equal society, free from discrimination. It is my
                            belief that every individual has an inherent goodness that deserves respect, validation, and
                            love, along with the freedom to express their thoughts and take action.
                            <br><br>
                            My driving force is to provide an opportunity that is financially accessible and open to
                            everyone, regardless of their background. I firmly believe in upholding basic human decency,
                            respecting others, and practicing empathy. It is through these principles that we can create a
                            space where individuals can thrive and contribute to shaping a better future for all.
                        </p>
                    </li>

                    <li>
                        <h4><u>Services or Products</u></h4>
                        <p>I approach every task and project with an open mind, drawing upon my intellectual background and
                            a willingness to invest my abilities. I am driven by supporting endeavors that align with my
                            core values, ignite my interest, stimulate my creativity, and allow me to express my
                            imagination. With passion and dedication, I aim to contribute my skills and make a meaningful
                            impact in the pursuit of these endeavors.</p>
                    </li>

                    <li>
                        <h4><u>Achievements and Recognition</u></h4>
                        <p>Throughout my career, I have been honored to receive [Awards/Honors], and my work has been
                            featured in [Relevant Publications/Media Outlets]. I have also had the privilege of
                            collaborating with [Influential Individuals/Organizations] on projects that have made a
                            significant impact.</p>
                    </li>

                    <li>
                        <h4><u>Personal Interests or Hobbies</u></h4>
                        <p>When I'm not working, you'll often find me [Personal Interest/Hobby]. I'm an avid
                            [Interest/Hobby] enthusiast and enjoy [Related Activities]. It helps me find balance and
                            inspiration, allowing me to bring fresh perspectives to my work.</p>
                    </li>

                    <li>
                        <h4><u>Call to Action</u></h4>
                        <p>Thank you for taking the time to learn more about me. I would love to hear from you and discuss
                            how we can work together. Feel free to [Contact Option] or explore [Related Sections/Links] for
                            more information.</p>
                    </li>

                </ul>

            </div>

            <div class="col-md-4 bg-warning mb-0 mb-md-3 p-3 px-4 {{-- animate__animated animate__flipInY animate__delay-2s --}}">
                <ul class="list-unstyled">

                    <li>
                        <i class="fa-brands fa-github-alt"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                        <i class="fa-brands fa-behance"></i>
                    </li>

                    <li class="text-center animate__animated animate__zoomInUp animate__delay-5s">
                        <h4><u>That's me...</u></h4>
                        <img src="./assets/img/krakatoom_favicon.png" alt="About Image" class="img-fluid mx-auto px-1">
                    </li>
                    
                    <li>
                        <h4><u>How To Use This Web-Page/Web-App</u></h4>
                        <p>When I'm not working, you'll often find me [Personal Interest/Hobby]. I'm an avid
                            [Interest/Hobby] enthusiast and enjoy [Related Activities]. It helps me find balance and
                            inspiration, allowing me to bring fresh perspectives to my work.</p>
                    </li>
                </ul>



                <h2 class="mx-0 mt-0"><b>Contact</b></h2>

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

                <h2 class="mx-0 mt-5"><b>Mailto:</b></h2>
                <a class="mx-0" href="mailto:masterofceremonies@krakatoom.ch">
                    <p class=""><b>masterofceremonies@krakatoom.ch</b></p>
                </a>
                <p><b style="color: blue;">Copyright &copy; @ {{ date('d/m/Y') }}</b></p>

            </div>
        </div>
    </div>

@endsection
