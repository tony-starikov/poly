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

    <!-- vidage -->
    <script src="https://cdn.jsdelivr.net/npm/vidage@1.0.0/dist/vidage.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vidage@1.0.0/dist/vidage.min.css">

    <title>PolygoNerds</title>

    <style>
        .vidage::before {
            background-image: url('/images/poly.jpg');
        }

        html { position: absolute; top: 0; bottom: 0; left: 0; right: 0; }

        html { min-height: 100%; }
        body { min-height: 100%; }

        html, body {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            color: rgb(255,255,255);
            margin: 0;
            padding: 0;
            width: 100%;
            color:white;
        }

        .my-overlay {
            position: absolute;
            bottom: 0;
            background: rgb(0, 0, 0);
            background: rgba(0, 0, 0, 0.5); /* Black see-through */
            color: #f1f1f1;
            width: 100%;
            transition: .5s ease;
            opacity:0;
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
            width: 3rem;
            height: 100%;
            right: 0;
            margin-right: 4rem;
            margin-top: 2rem;
            border-radius: 25px;
            display: block;
        }

        /*.vb > .vb-dragger > .vb-dragger-styler {*/
        /*    !*-webkit-backface-visibility: hidden;*!*/
        /*    !*backface-visibility: hidden;*!*/
        /*    !*-webkit-transform: rotate3d(0,0,0,0);*!*/
        /*    !*transform: rotate3d(0,0,0,0);*!*/
        /*    !*-webkit-transition:*!*/
        /*    !*    background-color 100ms ease-out,*!*/
        /*    !*    margin 100ms ease-out,*!*/
        /*    !*    height 100ms ease-out;*!*/
        /*    !*transition:*!*/
        /*    !*    background-color 100ms ease-out,*!*/
        /*    !*    margin 100ms ease-out,*!*/
        /*    !*    height 100ms ease-out;*!*/
        /*    !*background-color: rgba(255, 255, 255, 0.5);*!*/
        /*    !*border: 10px solid;*!*/
        /*    !*border-color: rgba(255, 255, 255, 0.2);*!*/
        /*    background-color: rgba(255, 255, 255, 0.5);*/
        /*    margin-right: 3rem;*/
        /*    margin-top: 2rem;*/
        /*    border-radius: 25px;*/
        /*    height: 100%;*/
        /*    display: block;*/
        /*}*/

        /*.vb.vb-scrolling-phantom > .vb-dragger > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 0.8);*/
        /*}*/

        /*.vb > .vb-dragger:hover > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 0.8);*/
        /*    !*margin: 0px;*!*/
        /*    height: 100%;*/
        /*}*/

        /*.vb.vb-dragging > .vb-dragger > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 0.8);*/
        /*    !*margin: 0px;*!*/
        /*    height: 100%;*/
        /*}*/

        /*.vb.vb-dragging-phantom > .vb-dragger > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 0.8);*/
        /*}*/

        /*new*/

        /*old*/
        /*.vb > .vb-dragger {*/
        /*    z-index: 5;*/
        /*    width: 3%;*/
        /*    right: 0;*/
        /*    margin-top: 2rem;*/
        /*    margin-right: 3rem;*/
        /*    background-color: rgba(255, 255, 255, 0.7);*/
        /*    border-radius: 25px;*/
        /*    !*margin-top: 2%;*!*/
        /*    !*height: 50px;*!*/
        /*    !*border: 10px solid rgba(255, 255, 255, 0.3);*!*/
        /*}*/

        /*.vb > .vb-dragger > .vb-dragger-styler {*/
        /*    -webkit-backface-visibility: hidden;*/
        /*    backface-visibility: hidden;*/
        /*    -webkit-transform: rotate3d(0,0,0,0);*/
        /*    transform: rotate3d(0,0,0,0);*/
        /*    -webkit-transition:*/
        /*        background-color 100ms ease-out,*/
        /*        margin 100ms ease-out,*/
        /*        height 100ms ease-out;*/
        /*    transition:*/
        /*        background-color 100ms ease-out,*/
        /*        margin 100ms ease-out,*/
        /*        height 100ms ease-out;*/
        /*    background-color: rgba(255, 255, 255, 1);*/
        /*    !*margin: 5px 5px 5px 0;*!*/
        /*    border-radius: 25px;*/
        /*    !*height: calc(100% - 10px);*!*/
        /*    display: block;*/
        /*}*/

        /*.vb.vb-scrolling-phantom > .vb-dragger > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 1);*/
        /*}*/

        /*.vb > .vb-dragger:hover > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 1);*/
        /*    !*margin: 0px;*!*/
        /*    !*height: 100%;*!*/
        /*}*/

        /*.vb.vb-dragging > .vb-dragger > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 1);*/
        /*    !*margin: 0px;*!*/
        /*    !*height: 100%;*!*/
        /*}*/

        /*.vb.vb-dragging-phantom > .vb-dragger > .vb-dragger-styler {*/
        /*    background-color: rgba(255, 255, 255, 1);*/
        /*}*/
        /*old*/

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
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            text-align: center;
            font-size: 12px;
            line-height: 1.42857;
        }

        .dropdown-toggle::after {
            content: none;
        }

        .dropdown-menu {
            border-radius: 0px 25px 25px 25px;
        }

        .dropdown-item:hover{
            background-color: rgba(255, 255, 255, 0);
        }
    </style>
</head>
<body class="bg-dark">

<div class="vidage">
    <video id="vidage" class="vidage-video" preload="metadata" loop autoplay muted>
        <source src="/images/poly.webm" type="video/webm">
        <source src="/images/poly.mp4" type="video/mp4">
    </video>
</div>

<div id="app" class="container-fluid text-center" style="height: 99vh; width: 83%;">

    <header class="p-2" style="width: 100%; height: 19vh;">

        <nav class="navbar navbar-expand-lg p-0 m-0" style="height: 100%; width: 100%; background-color: rgba(255,255,255,0.07); border-radius: 25px;">
            <div class="container-fluid mx-4" style="height: 100%;">
                <router-link class="navbar-brand" style="background-image: none;" to="/">
                    <img
                        src="/images/font-logo.png"
                        class="me-2 d-none d-lg-block d-xl-block img-fluid"
                        style="max-height: 12vh;"
                        alt=""
                        loading="lazy"
                    />
                    <img
                        src="/images/logo.png"
                        class="me-2 d-block d-lg-none d-xl-none img-fluid"
                        style="height: 10vh;"
                        alt=""
                        loading="lazy"
                    />
                </router-link>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
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


{{--                        <li class="nav-item">--}}
{{--                            <router-link class="nav-link h3 fw-bolder m-0 d-flex align-items-center" style="font-weight: 400; background-image: none; color: rgba(255,255,255,1) !important; height: 100%; vertical-align: middle;"  to="/">EN</router-link>--}}
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
