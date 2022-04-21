@extends('layouts.main')

@section('content')
    <video autoplay="true" muted loop playsinline id="myVideo">
        <source src="https://res.cloudinary.com/ioiofadhil/video/upload/v1647196841/People_walk_on_a_rocky_coast_hqjpew.mp4"
            type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    @auth
        <div class="container vht-40">
        @else
            <div class="container vht-40 vhb-40">
            @endauth
            <div class="row">
                <div class="col-md-12">
                    <div class="w-100 text-white">

                        @auth
                            <h1 class="text-center">Welcome, {{ Auth::user()->username }} !</h1>
                            <div class="a" data-aos="fade-up" data-aos-duration="2000">
                                <p class="text-end text-white"><i class="bi bi-people"></i> Users
                                    now : {{ $count }}</p>
                                <a href="/link" class="text-white">Tap here to visit the latest feature! &raquo;
                                </a>
                            </div>
                        @else
                            <div class="typing-container" data-aos="fade-left" data-aos-duration="2000">
                                <h1 id="sentence" class="sentence">&nbsp;</h1>
                                <h1 id="feature-text-two"></h1>
                                <span class="input-cursor-2"></span>
                            </div>
                            <div class="ab" data-aos="fade-up" data-aos-duration="2000">
                                <p class="text-end text-white"><i class="bi bi-people"></i> Users
                                    now : {{ $count }}</p>
                                <a href="/login" class="text-white">Login here to access features! &raquo;
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('footer')
        {{-- this section will be empty --}}
    @stop

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
                    text: "Node.js",
                    color: "white"
                },
                {
                    text: "Express.js",
                    color: "white"
                },
                {
                    text: "MongoDB",
                    color: "white"
                }
            ]

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
            const carouselTextTwo = [{
                    text: "Halo.",
                    color: "white"
                },
                {
                    text: "Hello.",
                    color: "white"
                },
                {
                    text: "Bonjour.",
                    color: "white"
                },
                {
                    text: "こんにちは.",
                    color: "white"
                },
                {
                    text: "Привет.",
                    color: "white"
                },
                {
                    text: "Hola.",
                    color: "white"
                }
            ]

            $(document).ready(async function() {
                carousel(carouselTextTwo, "#feature-text-two")
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
