@extends('layouts.main')
@section('content')
    <video autoplay="true" muted loop playsinline id="myVideo">
        <source src="https://res.cloudinary.com/ioiofadhil/video/upload/v1647196841/People_walk_on_a_rocky_coast_hqjpew.mp4"
            type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="container vht-20-mobile text-white text-center" data-aos="fade-up" data-aos-duration="2000">
        <div class="row">
            <div class="typing-container">
                <h1 id="sentence" class="sentence">About&nbsp;</h1>
                <h1 id="feature-text"></h1>
                <span class="input-cursor"></span>
            </div>
        </div>
    </div>

    <div class="container mt-5 text-center" data-aos="flip-right" data-aos-duration="2000">
        <div class="row">
            <div class="col-md-12">
                <img src="/img/gio.png" alt="Giofadhil" class="rounded-circle mb-5 img-thumbnail" width="170" height="170">
            </div>
        </div>
    </div>

    <div class="container text-white">
        <div class="row">
            <div class="col-md-4 mt-5" data-aos="fade-right" data-aos-duration="2000">
                <h1 class="fw-light text-center"><i class="fa-solid fa-code"></i></h1>
                <h4 class="fw-bold text-center">Web Developer</h4>
                <p class="text-center">In college, i used to develop a website by my self. i learn quickly how to be a
                    better Web Developer. I have a capability to be a Full Stack Developer.</p>
            </div>
            <div class="col-md-4 mt-5" data-aos="fade-up" data-aos-duration="2000">
                <h1 class="fw-light text-center"><i class="fa-solid fa-laptop-code"></i></h1>
                <h4 class="fw-bold text-center">Front End Developer</h4>
                <p class="text-center">When i develop a website, i used to design it as well and be a better front-end
                    web
                    developer day by day.</p>
            </div>
            <div class="col-md-4 mt-5" data-aos="fade-left" data-aos-duration="2000">
                <h1 class="fw-light text-center"><i class="fa-solid fa-terminal"></i></h1>
                <h4 class="fw-bold text-center">Back End Developer</h4>
                <p class="text-center">When i develop a website, i used to prepare the Server, Databases, and other
                    back-end
                    things. I also accustomed to using Terminal to set up a Website.</p>
            </div>
        </div>
    </div>

    <div class="container text-white my-5 programs" data-aos="fade-up" data-aos-duration="2000">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Well-versed in</h1>
            </div>
            <div class="col-md-6 text-center py-5">
                <img class="laravel" src="/img/laravel.png" alt="laravel logo">
                <h4 class="my-3">LARAVEL</h4>
                <p>Laravel is a web application framework with expressive, elegant syntax. I used this frameworks for some
                    projects, such as <a class="text-decoration-none text-decoration-underline text-warning"
                        href="https://avirtech.co">Avirtech</a>
                    and
                    <a class="text-decoration-none text-decoration-underline text-warning"
                        href="http://kamilah-anugerah-wisata.herokuapp.com">Kawisata</a>.
                </p>
            </div>
            <div class="col-md-6 text-center py-5" data-aos="fade-up" data-aos-duration="2000">
                <img class="node" src="/img/node.png" alt="laravel logo">
                <h4 class="my-3">NODE JS</h4>
                <p>Node.js is a JavaScript runtime built on Chrome's V8 JavaScript engine. Node JS is one of back-end
                    environment that i used to make a website. This website is also made of Node JS. <a href="/contact"
                        class="text-warning">Click here to test.</a> </p>
            </div>
        </div>
    </div>

    <div class="container text-white pb-5 position-relative" data-aos="fade-right" data-aos-duration="2000">
        <div class="row">
            <div class="col-md-12">
                <h1 class=" text-center pb-5">Contact</h1>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5 pb-5 social">
                <div class="contact pb-5">
                    <h5 class="text-start d-inline"><i class="fa-solid fa-envelope"></i> Email</h5>
                    <p>Giofadhil.ahmad@gmail.com</p>

                    <h5 class="text-start d-inline"><i class="fa-solid fa-phone"></i> Phone Number</h5>
                    <p>+62 813 8493 4615</p>

                    <h5 class="text-start d-inline"><i class="fa-solid fa-location-dot"></i> Location</h5>
                    <p>Cipinang Cempedak, Jatinegara, Jakarta Timur</p>

                    <br>

                    <br>

                </div>
                <div class="icon text-center">
                    <h2 class="d-inline mx-4"><a href="https://instagram.com/ioiofadhil" target="_blank"
                            class="text-white">
                            <i class="bi bi-instagram"></i></a> <a href="" class="text-white"> <i
                                class="bi bi-whatsapp"></i></a> <a
                            href="https://www.linkedin.com/in/ahmad-giofadhil-196900221/" class="text-white"
                            target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                    </h2>
                </div>
                <br>
                <h6 class="text-center">
                    Social Media
                </h6>
            </div>
            <div class="col-md-5 pb-3 justify-content-center" data-aos="fade-left" data-aos-duration="2000">
                <!-- modify this form HTML and place wherever you want your form -->
                <form action="https://formspree.io/f/mqknleel" method="POST">
                    <div class="mb-3 text-start">
                        <h6>Send me a message!</h6>
                    </div>
                    <div class="mb-3">
                        <input type="from" name="from" class="form-control" id="exampleInputfrom1"
                            aria-describedby="fromHelp" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="exampleInputemail1"
                            aria-describedby="emailHelp" placeholder="Your Email">
                    </div>
                    <div class="mb-3">
                        <input type="phone" name="phone" class="form-control" id="exampleInputphone1"
                            aria-describedby="phoneHelp" placeholder="Phone Number">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Let's collab!"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-light ">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        setTimeout(function() {
            AOS.init();
        }, 500);
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        const carouselText = [{
            text: "Gio.",
            color: "white"
        }, {
            text: "Fadhil.",
            color: "white"
        }, {
            text: "Io.",
            color: "white"
        }, ]

        $(document).ready(async function() {
            carousel(carouselText, "#feature-text")
        });

        async function typeSentence(sentence, eleRef, delay = 100) {
            const letters = sentence.split("");
            let i = 0;
            while (i < letters.length) {
                await waitForMs(delay);
                $(eleRef).append(letters[i]);
                i++
            }
            return;
        }
        async function
        deleteSentence(eleRef) {
            const sentence = $(eleRef).html();
            const letters = sentence.split("");
            let i = 0;
            while (letters.length > 0) {
                await waitForMs(100);
                letters.pop();
                $(eleRef).html(letters.join(""));
            }
        }

        async function carousel(carouselList, eleRef) {
            var i = 0;
            while (true) {
                updateFontColor(eleRef, carouselList[i].color)
                await typeSentence(carouselList[i].text, eleRef);
                await waitForMs(1500);
                await deleteSentence(eleRef);
                await waitForMs(500);
                i++
                if (i >= carouselList.length) {
                    i = 0;
                }
            }
        }

        function updateFontColor(eleRef, color) {
            $(eleRef).css('color', color);
        }

        function waitForMs(ms) {
            return new Promise(resolve => setTimeout(resolve, ms))
        }
    </script>
@endsection
