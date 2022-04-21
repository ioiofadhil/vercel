@extends('layouts.main')

@section('content')
    <video autoplay muted loop playsinline id="myVideo">
        <source src="https://res.cloudinary.com/ioiofadhil/video/upload/v1650531426/Pexels_Videos_2516160_zmwcqm.mp4"
            type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <!-- Laravel -->
    <div class="container vht-20-mobile text-white">
        <div class="row">
            <div class="col-md-12" data-aos="fade-right" data-aos-duration="2000">
                <h1>My Projects</h1>
                <p>Skills Representations Only</p>
            </div>
            <div class="col-md-12 text-center mb-5" data-aos="fade-up" data-aos-duration="2000">
                <img src="/img/laravel.png" alt="laravel" width="96" height="48">
                <h1>Laravel</h1>
            </div>

            <!-- avirtech -->
            <div class="col-md-6 aos-mobile my-5" data-aos="fade-right" data-aos-duration="2000">
                <div id="carouselExampleControls" class="carousel slide border border-light" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/avirtech.png" class="d-block w-100" height="auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/cms.png" class="d-block w-100" height="auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/form.png" class="d-block w-100" height="auto" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 aos-mobile my-5" data-aos="fade-left" data-aos-duration="2000">
                <h3><a href="https://avirtech.co" target="_blank"
                        class="text-decoration-none text-decoration-underline text-white">
                        avirtech.co
                    </a></h3>
                <p>Avirtech is a precision agriculture technology company in Indonesia, Singapore, Thailand, Malaysia
                    delivering
                    agriculture drone spraying, mapping, plantation management software, and other drone inspection
                    services. </p>
                <p>This project contains some features, such as :</p>
                <ul>
                    <li>Content Management System for Admin (CMS)</li>
                    <li>Queue Job for sending an email (Instant Submit)</li>
                    <li>Captcha Forms</li>
                    <li>Live Chat</li>
                </ul>
            </div>

            <!-- Porto -->
            <div class="col-md-12 text-center my-5" data-aos="fade-up" data-aos-duration="2000">
                <img src="/img/node.png" alt="node" width="96" height="auto">
                <h1>Node.js</h1>
            </div>
            <div class="col-md-6 aos-mobile my-5" data-aos="fade-right" data-aos-duration="2000">
                <div id="carouselExampleControls2" class="carousel slide border border-light" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/ioio-home.png" class="d-block w-100" height="auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/ioio-about.png" class="d-block w-100" height="auto" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/express.png" class="d-block w-100" height="auto" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
            <div class="col-md-6 aos-mobile my-5" data-aos="fade-left" data-aos-duration="2000">
                <h3><a href="https://ioiofadhil.herokuapp.com" target="_blank"
                        class="text-decoration-none text-decoration-underline text-white">
                        My Portofolio
                    </a></h3>
                <p>
                    This project was made of Node.js, Express, and MongoDB. The reason why I made this project is to show a
                    simple
                    programs that can be used as my skills representation in Node.
                </p>
                <p>This project contains some features, such as :</p>
                <ul>
                    <li>Advanced Create, Update, and Delete (with Validation)</li>
                    <li>Validation (with token cookies implementation)</li>
                    <li>Simple API example</li>
                </ul>
                <a href="/contact" class="text-warning">Click here to test.</a>
            </div>
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
            text: "Coming Soon.",
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

    <script>
        if ($(window).width() < 990) {
            $(window).resize(function() {
                $('.aos-mobile').attr('data-aos', 'fade-up');
            }).resize();
        } else {

        }
    </script>
@endsection
