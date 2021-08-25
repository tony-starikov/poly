<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
          crossorigin="anonymous"
    />

    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-router@3.5.2/dist/vue-router.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>

    <!-- vuebar -->
    <script src="https://unpkg.com/vuebar"></script>

    <title>PolygoNerds</title>

    <style>
        html { position: absolute; top: 0; bottom: 0; left: 0; right: 0; }

        html { min-height: 100%; }
        body { min-height: 100%; }

        html, body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            margin: 0;
            padding: 0;
            width: 100%;
            color: white;
        }

        .my-overlay {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            width: 100%;
            transition: .5s ease;
            opacity:0;
            color: white;
            font-size: 20px;
            padding: 5px;
            text-align: left;
            /*border-radius: 0 0 10px 10px;*/
        }

        .my-overlay-mobile {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            width: 100%;
            transition: .5s ease;
            opacity:1;
            color: white;
            font-size: 20px;
            padding: 5px;
            text-align: left;
            /*border-radius: 0 0 10px 10px;*/
        }

        .my-card:hover .my-overlay {
            opacity: 1;
        }

        .showMe {
            opacity:0;
        }
        .hoverMe:hover + div {
            opacity:1;
            filter: brightness(100%) !important;
        }

        .hoverMe:hover{
            opacity:1;
            filter: brightness(100%) !important;
        }

        .hoverMe{
            filter: brightness(50%);
        }

        .nav-link {
            color: rgba(255,255,255,1);
            height: 100%;
            vertical-align: middle;
        }

        .nav-item {
            height: 100%;
        }

        /*new*/
        .vb > .vb-dragger {
            background-color: rgba(255, 255, 255, 0.5);
            /*border: 10px solid;*/
            /*border-color: rgba(255, 255, 255, 0.8);*/
            z-index: 5;
            width: 3vw;
            height: 100%;
            right: 0;
            margin-right: 2.5vw;
            margin-top: 4vh;
            border-radius: 25px;
            display: block;
        }
        /*new*/

        .router-link-exact-active{
            background-image: url("/images/menu.png");
            color: black !important;
            background-color: rgba(255, 255, 255, 0);
        }

        .btn-circle.btn-xl {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            border-radius: 35px;
            font-size: 24px;
            line-height: 1.33;
        }

        .btn-circle {
            width: 50px;
            height: 50px;
            padding: 6px 0px;
            border-radius: 25px;
            text-align: center;
            font-size: 12px;
            line-height: 1.42857;
        }

        .dropdown-toggle::after {
            content: none;
        }

        .dropdown-menu {
            border-radius: 0px 15px 15px 15px;
        }

        .dropdown-item:hover{
            background-color: rgba(0, 0, 0, 0);
        }

        /* The Overlay (background) */
        .overlay {
            /* Height & width depends on how you want to reveal the overlay (see JS below) */
            display: none;
            height: 100%;
            width: 100%;
            position: fixed; /* Stay in place */
            z-index: 100; /* Sit on top */
            left: 0;
            top: 0;
            background-color: rgb(0,0,0); /* Black fallback color */
            background-color: rgba(0,0,0, 0.9); /* Black w/opacity */
            overflow-x: hidden; /* Disable horizontal scroll */
            transition: 0.5s; /* 0.5 second transition effect to slide in or slide down the overlay (height or width, depending on reveal) */
        }

        /* Position the content inside the overlay */
        .overlay-content {
            position: relative;
            top: 10%; /* 25% from the top */
            width: 100%; /* 100% width */
            text-align: center; /* Centered text/links */
            margin-top: 30px; /* 30px top margin to avoid conflict with the close button on smaller screens */
        }

        /* The navigation links inside the overlay */
        .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block; /* Display block instead of inline */
            transition: 0.3s; /* Transition effects on hover (color) */
        }

        /* When you mouse over the navigation links, change their color */
        .overlay a:hover, .overlay a:focus {
            color: #f1f1f1;
        }

        /* Position the close button (top right corner) */
        .overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 45px;
            font-size: 60px;
        }

        /* When the height of the screen is less than 450 pixels, change the font-size of the links and position the close button again, so they don't overlap */
        @media screen and (max-height: 450px) {
            .overlay a {font-size: 20px}
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }

        .row-eq-height {
            display: flex;
            flex-flow: row wrap;
        }

        .video {
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
        }
    </style>
</head>
<body class="bg-dark">

<video class="video" poster="/images/{{ \App\Page::where('name', 'video')->first()->bg_image_jpg }}" autoplay playsinline muted loop>
    <source src="/images/{{ \App\Page::where('name', 'video')->first()->video_webm }}" type="video/webm">
    <source src="/images/{{ \App\Page::where('name', 'video')->first()->video_mp4 }}" type="video/mp4">
</video>

<div id="app" style="min-width: 300px">
    <div  class="container-fluid text-center d-none d-xl-block d-xxl-block" style="height: 98vh; width: 83%;">

        <header class="p-2" style="width: 100%; height: 18vh;">

            <nav class="navbar navbar-expand-xl p-0 m-0" style="height: 100%; width: 100%; background-color: rgba(255,255,255,0.07); border-radius: 25px;">
                <div class="container-fluid mx-4" style="height: 100%;">
                    <router-link class="navbar-brand" style="background-image: none;" to="/">
                        <img
                            src="/images/font-logo.png"
                            class="d-none d-xl-block d-xxl-block img-fluid"
                            style="max-height: 13vh;"
                            alt=""
                            loading="lazy"
                        />
                    </router-link>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars text-white"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="height: 100%">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="height: 100%">
                            <li class="nav-item d-flex align-items-center">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/works">@lang('main.works')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/artists">@lang('main.artists')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/about">@lang('main.about')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/recruit">@lang('main.recruit')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/contact">@lang('main.contact')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="m-0 mx-2 d-flex align-items-center" style="font-weight: 200;font-size: 70px; background-image: none; color: rgba(255,255,255,1) !important; height: 100%; vertical-align: middle;"  to="/">
                                    <span style="height: 55px; width: 2px; background-color: white; border-radius: 25px; margin: 0 8px 5px 0;"></span>
                                </router-link>
                            </li>

                            <li class="nav-item dropdown my-auto" style="height: 30px;">
                                <a class="nav-link h3 fw-bolder p-0 m-0 d-flex align-items-center dropdown-toggle" style="font-weight: 400; background-image: none; color: rgba(255,255,255,1) !important; vertical-align: middle;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('main.current_locale')
                                </a>
                                <ul class="dropdown-menu m-0 ps-4 pe-2 overflow-hidden" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'ua') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'ua') }}">Українська</a></li>
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'en') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'en') }}">English</a></li>
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'ru') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'ru') }}">Русский</a></li>
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'de') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'de') }}">Deutsch</a></li>
                                </ul>
                            </li>

                            {{--                        <li class="nav-item dropdown my-auto" style="height: 30px;">--}}
                            {{--                            <a class="nav-link h3 fw-bolder p-0 m-0 d-flex align-items-center dropdown-toggle" style="font-weight: 400; background-image: none; color: rgba(255,255,255,1) !important; vertical-align: middle;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
                            {{--                                @lang('main.current_locale')--}}
                            {{--                            </a>--}}
                            {{--                            <ul class="dropdown-menu m-0 p-0 overflow-hidden" aria-labelledby="navbarDropdown">--}}
                            {{--                                <li>--}}
                            {{--                                    <a--}}
                            {{--                                        class="dropdown-item h5 w-100 m-0 p-0 @if(App::getLocale() === 'ua') text-white @endif "--}}
                            {{--                                        href="{{ route('locale', 'ua') }}"--}}
                            {{--                                    >--}}
                            {{--                                        <div class="row p-0 m-0">--}}
                            {{--                                            <div class="col-3 p-0 m-0"></div>--}}
                            {{--                                            <div class="col-9 py-0 px-2 m-0 text-white bg-secondary text-start" style="border-radius: 15px 0 0 15px;">--}}
                            {{--                                                Українська--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </a>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a--}}
                            {{--                                        class="dropdown-item h5 w-100 m-0 p-0 @if(App::getLocale() === 'en') text-white @endif "--}}
                            {{--                                        style="border-radius: 15px 0 0 15px" href="{{ route('locale', 'en') }}"--}}
                            {{--                                    >--}}
                            {{--                                        <div class="row p-0 m-0">--}}
                            {{--                                            <div class="col-3 p-0 m-0"></div>--}}
                            {{--                                            <div class="col-9 py-0 px-2 m-0 text-white bg-secondary text-start" style="border-radius: 15px 0 0 15px;">--}}
                            {{--                                                English--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </a>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a--}}
                            {{--                                        class="dropdown-item h5 w-100 m-0 p-0 @if(App::getLocale() === 'ru') text-white @endif "--}}
                            {{--                                        style="border-radius: 15px 0 0 15px" href="{{ route('locale', 'ru') }}"--}}
                            {{--                                    >--}}
                            {{--                                        <div class="row p-0 m-0">--}}
                            {{--                                            <div class="col-3 p-0 m-0"></div>--}}
                            {{--                                            <div class="col-9 py-0 px-2 m-0 text-white bg-secondary text-start" style="border-radius: 15px 0 0 15px;">--}}
                            {{--                                                Русский--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </a>--}}
                            {{--                                </li>--}}
                            {{--                                <li>--}}
                            {{--                                    <a--}}
                            {{--                                        class="dropdown-item h5 w-100 m-0 p-0 @if(App::getLocale() === 'de') text-white @endif "--}}
                            {{--                                        style="border-radius: 15px 0 0 15px" href="{{ route('locale', 'de') }}"--}}
                            {{--                                    >--}}
                            {{--                                        <div class="row p-0 m-0">--}}
                            {{--                                            <div class="col-3 p-0 m-0"></div>--}}
                            {{--                                            <div class="col-9 py-0 px-2 m-0 text-white bg-secondary text-start" style="border-radius: 15px 0 0 15px;">--}}
                            {{--                                                Deutsch--}}
                            {{--                                            </div>--}}
                            {{--                                        </div>--}}
                            {{--                                    </a>--}}
                            {{--                                </li>--}}
                            {{--                                --}}{{-- <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'de') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'de') }}">Deutsch</a></li>--}}
                            {{--                            </ul>--}}
                            {{--                        </li>--}}

                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <main class="p-2">
            <router-view>

            </router-view>
        </main>

        <footer style="width: 100%; color: rgba(255,255,255,0.7); font-family: Roboto, sans-serif;">
            <div>
                <p>PolygoNerds &copy; 2021 Ukraine</p>
            </div>
        </footer>

    </div>

    <div  class="container-fluid text-center d-block d-sm-block d-md-block d-lg-block d-xl-none d-xxl-none" style="height: 98vh; width: 100%;">

        <header class="p-1 p-sm-1 p-md-1 p-lg-1" style="width: 100%; height: max-content;">

            <nav class="navbar navbar-expand-xl p-0 m-0" style="height: 100%; width: 100%; background-color: rgba(255,255,255,0.07); border-radius: 25px;">
                <div class="container-fluid mx-4" style="height: 100%;">
                    <router-link class="navbar-brand" style="background-image: none;" to="/">
                        <img
                            src="/images/font-logo.png"
                            class="d-none d-md-block d-lg-block img-fluid"
                            style="max-height: 11vh;"
                            alt=""
                            loading="lazy"
                        />
                        <img
                            src="/images/logo.png"
                            class="d-block d-sm-block d-md-none img-fluid"
                            style="max-height: 11vh;"
                            alt=""
                            loading="lazy"
                        />
                    </router-link>
                    <button class="bg-transparent border-0">
                        <i onclick="openNav()" class="fas fa-bars fa-2x text-white"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02" style="height: 100%">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="height: 100%">
                            <li class="nav-item d-flex align-items-center">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/works">@lang('main.works')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/artists">@lang('main.artists')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/about">@lang('main.about')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/recruit">@lang('main.recruit')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="nav-link h3 m-0 d-flex align-items-center" style="font-weight: 400; color: rgba(255,255,255,1); height: 100%; vertical-align: middle;" to="/contact">@lang('main.contact')</router-link>
                            </li>

                            <li class="nav-item">
                                <router-link class="m-0 mx-2 d-flex align-items-center" style="font-weight: 200;font-size: 70px; background-image: none; color: rgba(255,255,255,1) !important; height: 100%; vertical-align: middle;"  to="/">
                                    <span style="height: 55px; width: 2px; background-color: white; border-radius: 25px; margin: 0 8px 5px 0;"></span>
                                </router-link>
                            </li>

                            <li class="nav-item dropdown my-auto" style="height: 30px;">
                                <a class="nav-link h3 fw-bolder p-0 m-0 d-flex align-items-center dropdown-toggle" style="font-weight: 400; background-image: none; color: rgba(255,255,255,1) !important; vertical-align: middle;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    @lang('main.current_locale')
                                </a>
                                <ul class="dropdown-menu m-0 ps-4 pe-2 overflow-hidden" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'ua') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'ua') }}">Українська</a></li>
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'en') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'en') }}">English</a></li>
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'ru') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'ru') }}">Русский</a></li>
                                    <li><a class="dropdown-item h5 py-0 ps-2 w-100 m-0 ms-2 @if(App::getLocale() === 'de') text-white bg-secondary @endif " style="border-radius: 25px 0 0 25px" href="{{ route('locale', 'de') }}">Deutsch</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        <!-- route outlet -->
        <!-- component matched by the route will render here -->
        <main class="p-1 p-sm-1 p-md-1 p-lg-1 p-xl-2 p-xxl-2">
            <router-view>

            </router-view>
        </main>

        <footer class="mt-auto" style="width: 100%; color: rgba(255,255,255,0.7); font-family: Roboto, sans-serif;">
            <div>
                <p>PolygoNerds &copy; 2021 Ukraine</p>
            </div>
        </footer>

    </div>

    <!-- Menu overlay -->
    <div id="myNav" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content">
            <router-link onclick="closeNav()" to="/works">@lang('main.works')</router-link>
            <router-link onclick="closeNav()" to="/artists">@lang('main.artists')</router-link>
            <router-link onclick="closeNav()" to="/about">@lang('main.about')</router-link>
            <router-link onclick="closeNav()" to="/recruit">@lang('main.recruit')</router-link>
            <router-link onclick="closeNav()" to="/contact">@lang('main.contact')</router-link>

            <hr class="w-50 m-0 p-0 mx-auto">
            <a class=" @if(App::getLocale() === 'ua') text-white @endif " href="{{ route('locale', 'ua') }}">Українська</a>

            <hr class="w-50 m-0 p-0 mx-auto">
            <a class=" @if(App::getLocale() === 'en') text-white @endif " href="{{ route('locale', 'en') }}">English</a>

            <hr class="w-50 m-0 p-0 mx-auto">
            <a class=" @if(App::getLocale() === 'ru') text-white @endif " href="{{ route('locale', 'ru') }}">Русский</a>

            <hr class="w-50 m-0 p-0 mx-auto">
            <a class=" @if(App::getLocale() === 'de') text-white @endif " href="{{ route('locale', 'de') }}">Deutsch</a>

        </div>

    </div>
    <!-- Menu overlay -->
</div>



<script>
    /* Open */
    function openNav() {
        document.getElementById("myNav").style.display = "block";
    }

    /* Close */
    function closeNav() {
        document.getElementById("myNav").style.display = "none";
    }
</script>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
</script>

<script>
    new Vidage('#vidage');
</script>

<script src="/js/main.vue.js"></script>
<script src="/js/works.vue.js"></script>
<script src="/js/about.vue.js"></script>
<script src="/js/contact.vue.js"></script>
<script src="/js/artists.vue.js"></script>
<script src="/js/recruit.vue.js"></script>
<script src="/js/work.vue.js"></script>
<script src="/js/artist.vue.js"></script>

<script>
    // 0. If using a module system, call Vue.use(VueRouter)
    Vue.use(VueRouter);

    Vue.use(Vuebar);
    // 1. Define route components.
    // These can be imported from other files

    Vue.component('Main', Main);
    Vue.component('Works', Works);
    Vue.component('Work', Work);
    Vue.component('About', About);
    Vue.component('Contact', Contact);
    Vue.component('Artists', Artists);
    Vue.component('Artist', Artist);
    Vue.component('Recruit', Recruit);

    // 2. Define some routes
    // Each route should map to a component. The "component" can
    // either be an actual component constructor created via
    // Vue.extend(), or just a component options object.
    // We'll talk about nested routes later.
    const routes = [
        { path: '/', component: Main },
        { path: '/works', component: Works },
        { path: '/artists', component: Artists },
        { path: '/about', component: About },
        { path: '/recruit', component: Recruit },
        { path: '/contact', component: Contact },
        { path: '/work/:code', component: Work },
        { path: '/artist/:code', component: Artist },
    ]

    // 3. Create the router instance and pass the `routes` option
    // You can pass in additional options here, but let's
    // keep it simple for now.
    const router = new VueRouter({
        routes: routes,
        mode: 'history',
        base: '/'
    })

    // 4. Create and mount the root instance.
    // Make sure to inject the router with the router option to make the
    // whole app router-aware.
    const app = new Vue({
        router: router,
    }).$mount('#app')

    // Now the app has started!
</script>

</body>
</html>
