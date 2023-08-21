@extends('layouts.master')

@section('title', 'ChapsChat')

@section('body-class', 'aboutMain')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="aboutLeft col-md-4 mb-0 mb-md-0 p-3 px-4 animate__animated animate__slideInDown animate__delay-1s">
                <h2 class="mt-0"><b>About This Project/Web-App:</b></h2>

                <ul class="list-unstyled">

                    <li>
                        <h4><u>Initial Situation Test</u></h4>
                        <p>Hello, my friends. I thought of this app while doing my web development crash course over a
                            period of six months, while commuting on public transport during the week. Since I usually spend
                            this idle time browsing the web, social media, or engaging in other forms of entertainment, I
                            often had coding-related thoughts lingering in my mind throughout the day. I used to search for
                            apps with code editors to quickly test some code on the go. However, despite the availability of
                            many professional apps, I wasn't entirely satisfied with most of them.</p>
                    </li>

                    <li>
                        <h4><u>Analysis</u></h4>
                        <p>Similarly, I tested several apps such as Codepen, TrebEd, Dcoder, Anwriter Free, and Spck
                            Editor and more. While these apps were professionally developed and offered a wide range of
                            functionalities, they either required payment or had an overwhelming amount of features. What I
                            was looking for was a simple editor that resembled VS Code, allowing me to quickly test a layout
                            grid, a JavaScript function, or a CSS selector. Additionally, I wanted the ability to easily
                            copy and paste CDNs and Unpkg's (such as Bootstrap, jQuery, and more) to test basic features. Another idea I
                            had was to create a personal library where I could store code snippets, web links, or simply text
                            and manuals for quick reference.

                            <br><br>On the other hand, I thought it would be fantastic to have a built-in channel for
                            discussing coding ideas with friends, enabling quick help without the need to switch to a different
                            messaging app or create special accounts in other 3rd party apps/messengers for it.
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
                            as a masterpiece and the final project for my web development crash course offered by SEB Zurich. I
                            aimed to showcase all the newly acquired knowledge and skills through this project to the best
                            of my abilities.
                        </p>
                    </li>

                    <li>
                        <h4><u>Solution/Synthesis</u></h4>
                        <p>
                        <h3>Welcome to ChapsChat-Meeting-Space!</h3> After registering or logging in, you will find the core
                        page known as the <b>"Playground"</b>. Its main features include the Messagecenter, powered by Pusher, and
                        the code editor, primarily based on the Monaco Code Editor, which is the core editor of VS Code.
                        The code editor provides individual editors for HTML, CSS, and JavaScript. In the next updated
                        release, version 2, we will introduce combined editors as a new feature.
                        <br><br>
                        Save your new discoveries and findings in your personal library within the <b>"KnowledSphere"</b>. If you
                        have stories to share or knowledge to extend beyond the live interaction in the playground
                        messenger, feel free to post a blog in the <b>"Blogosphere"</b>. These articles will be publicly
                        accessible, even to non-registered users, and can be deleted by the creator. As the main
                        administrator and responsible entity of CHapsChat@Krakatoom.ch , I will also
                        intervene if any content violates common decency. Use the contact-form or direct mail
                        at <a href="mailto:masterofceremonies@krakatoom.ch">masterofceremonies@krakatoom.ch</a>
                        <br><br>
                        I warmly welcome everyone who discovers this page to join us in exchanging knowledge, learning
                        from one another, and utilizing this app's mobile-first approach for coding on the go. Please
                        refrain from using the chat for nefarious purposes or spreading discriminatory ideas. If you
                        notice any abusive use of the platform, kindly inform me so that I can personally address it.
                        <br><b>Thank you for your time, and happy coding!</b>
                        </p>
                    </li>

                    <li class="text-center animate__animated animate__zoomInUp animate__delay-5s">
                        <h4><u>That's me...<i class="fa-solid fa-face-laugh-squint"></i></u></h4>
                        <img src="./assets/img/krakatoom_favicon.png" alt="About Image" class="img-fluid mx-auto px-1">
                    </li>


                </ul>
            </div>

            <div class="aboutCenter col-md-4 mb-0 mb-md-0 p-3 px-4 animate__animated animate__slideInUp animate__delay-3s">
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
                        <h4><u>Personal Interests or Hobbies</u></h4>
                        <p>When I'm not working, you'll frequently find me at a local café or in a park, engaging in
                            activities that bring me joy and relaxation. I enjoy immersing myself in a good book, strumming
                            the guitar, gaming, or exploring social media and the internet to discover interesting knowledge
                            and stay updated with the latest news. Music plays a significant role in my life, and I find
                            fulfillment in playing various instruments such as the guitar, violin, piano, and percussion.
                            Whether it's jamming freely with fellow musicians or participating in planned gigs and events,
                            making music brings me immense satisfaction.
                            <br><br>
                            In addition to actively pursuing my hobbies, I also appreciate the value of doing nothing at all
                            to truly relax. Taking time for myself allows me to find balance and rejuvenation, ultimately
                            inspiring me to approach my work with a fresh perspective and renewed energy.
                        </p>
                    </li>

                    <li>
                        <h4><u>Call to Action</u></h4>
                        <p>Thank you for taking the time to learn more about me. would be delighted to explore potential
                            collaborations and discuss how we can work together. You can reach out to me by using the
                            contact form on this page or by sending an email to: <a
                                href="mailto:masterofceremonies@krakatoom.ch">masterofceremonies@krakatoom.ch</a>.
                            <br>Additionally, you can find more information about my work and projects by exploring my
                            GitHub,
                            Behance, or LinkedIn profiles. Simply click on the related icons to access the respective
                            profiles. I look forward to hearing from you and discussing exciting opportunities ahead.
                        </p>
                    </li>

                </ul>

            </div>

            <div class="aboutRight col-md-4 mb-0 mb-md-0 p-3 px-4 animate__animated animate__slideInDown animate__delay-2s">

                <ul class="list-unstyled">

                    <li>
                        <h2><b>How To Use:</b></h2>
                        <p><b>This website/app is designed for use on both mobile and desktop devices. I appreciate any
                                feedback, advice, or critique you may have, as well as any notifications regarding any lack
                                of responsiveness. Your input will help me improve the user experience and ensure the app is
                                up-to-date. Please use the form below to provide your feedback. Thank you!</b></p>

                        <ul class="list-unstyled">
                            <li>Explore the homepage and click wherever you'd like to pique your curiosity.</li><br>
                            <li>Register and complete the Turing Test by ReCaptcha, or log in if you already have an
                                account.</li><br>
                            <li>Navigate through the content pages, freely explore the app's features and enjoy using it.
                            </li><br>
                            <li>Whenever you see a
                                <a tabindex="0" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="right"
                                    data-bs-html="true" data-bs-content="Like This!" style="font-size:1rem;">
                                    <i class="fa-solid fa-circle-info infoToggle mt-1 mb-2"></i></a>-icon, click on it to
                                get immediate information.
                            </li><br>
                            <li>
                                <h5><a href="{{ url('/playground') }}">Playground</a></h5>
                                <ul>
                                    <li>Messenger: Engage in text conversations, exchange ideas, and ask for help. You have
                                        the ability to delete your own messages.</li>
                                    <li>Editor: Write your code using three editors, which can be toggled below the editor
                                        frame. The preview will adapt accordingly, providing formatting for HTML, CSS, and
                                        JS. Additional features include a "Format Code" button, a dark/bright mode switch
                                        (adapting to the master page's current state), and undo/redo buttons.</li>
                                    <li>Next to the editor, you'll find preview frames. The HTML preview supports common
                                        techniques such as basic HTML, inline and internal CSS, and in-code JavaScript. Most
                                        CDN or unpkg links and scripts will function correctly when placed within the code
                                        itself. There is also an individual JavaScript preview that displays the actual
                                        console output. In an updated version, I intend to enable real external file coding
                                        by linking the editors.</li>
                                    <li>In an updated version I intend to link the editors so that real external file coding
                                        will be possible.</li>
                                    <li>For easier coding on mobile, I recommend using a specialized keyboard. Personally, I
                                        use the  <a
                                            href="https://play.google.com/store/apps/details?id=org.pocketworkstation.pckeyboard&hl=en_US"><b>Hackers-Keyboard</b></a>
                                        (available on the  <i class="fa-brands fa-google-play"></i> Google Play Store).
                                    </li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h5><a href="{{ url('/blogoSphere') }}">BlogoSphere</a></h5>
                                <ul>
                                    <li>Read interesting new blog posts.</li>
                                    <li>Registered users can create their own posts by clicking the <i
                                            class="fa-solid fa-circle-plus"></i>-icon. Add a
                                        title, select a topic group, and enter content along with an optional image. If no
                                        image is chosen, a default image will be displayed.</li>
                                    <li>Blog creators can delete their own posts. In case of violations of common decency or
                                        other abuse, the admin (me) has the authority to delete all posts. If you come
                                        across any such content, please inform me using the contact form on this about-page.
                                    </li>
                                </ul>
                            </li>
                            <br>
                            <li>
                                <h5><a href="{{ url('/knowledgeSphere') }}">KnowledgeSphere</a></h5>
                                <ul>
                                    <li>This is your personal library.</li>
                                    <li>Add your own knowledge or anything you find useful to your library by clicking the
                                        <i class="fa-solid fa-circle-plus"></i>-icon to create a new entry. HTML tags are
                                        explicitly allowed, such as links and list formatting.
                                    </li>
                                    <li>Like any good library, you have direct access to various search engines and
                                        entities, including a direct link to Google search, Wikipedia, and Stack Overflow.
                                    </li>
                                    <li>The filter function allows you to browse your library based on topic, content, or
                                        date (to be confirmed).</li>
                                    <li>You can always edit the topic/title and content of each entry by using the
                                        respective buttons below it in the library table. Additionally, you can delete each
                                        entry individually.</li>
                                </ul>
                            </li>
                        </ul>
                        <br>
                        Thank you for your interest in my ChapsChat-App. Feel free to reach out with any constructive
                        critique, new feature ideas, report safety issues, or just to say hi.
                        <br>Cheers Yallzies, Gaudenz
                    </li>
                    <br>
                    <li>
                        <div class="row justify-content-evenly">
                            <div class="col-4 text-center">
                                <a class="btn btn-circleLibrary" href="https://github.com/Gaudenz77" target="_blank"><i
                                        class="fab fa-github-alt fa-3x"></i></a>
                            </div>
                            <div class="col-4 text-center">
                                <a class="btn btn-circleLibrary" href="https://www.linkedin.com/in/gaudenz-d-raiber/" target="_blank"><i
                                        class="fab fa-linkedin-in fa-3x"></i></a>
                            </div>
                            <div class="col-4 text-center">
                                <a class="btn btn-circleLibrary" href="https://www.behance.net/krakatoomdesign" target="_blank"><i
                                        class="fab fa-behance fa-3x"></i></a>
                            </div>
                        </div>
                    </li>
                </ul>

                <h2 class="mx-0 mt-0 mb-3"><b>For Contact use form:</b></h2>
                <div class="row justify-content-center">
                    <form class="col-12 col-md-10" action="https://formspree.io/f/mdorolbg" method="POST">
                        <div class="mb-3">
                            {{-- <label for="email" class="form-label">Your email:</label> --}}
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Your email..." required>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="message" class="form-label">Your message:</label> --}}
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your message..." required></textarea>
                        </div>
                        <!-- your other form fields go here -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-circleLibrary"><i
                                    class="fa-solid fa-paper-plane {{-- fa-brands fa-optin-monster  --}}fa-2x pt-0"></i></button>
                        </div>
                    </form>
                </div>

                <h2 class="mx-0 mt-5"><b>Mailto:</b></h2>
                <a class="mx-0" href="mailto:masterofceremonies@krakatoom.ch">
                    <p class=""><b>masterofceremonies@krakatoom.ch</b></p>
                </a>
                <p><b style="color: blue;">Copyright &copy;@ {{ date('d/m/Y') }}</b></p>

            </div>
        </div>
    </div>

@endsection
