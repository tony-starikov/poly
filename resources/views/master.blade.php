<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
        rel="stylesheet"
    />

    <title>@yield('title')</title>

    <style>
        html, body {
            font-weight: 400;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
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
            border-radius: 0 0 10px 10px;
        }

        .my-card:hover .my-overlay {
            opacity: 1;
        }
    </style>
</head>
<body class="text-center">

<!-- Easy as hell -->
<div id="block" style="width: 100%; height: 100%; z-index: -1; position: fixed;" data-vide-bg="/images/poly"></div>

<div class="container pt-2 pb-2 d-flex w-100 h-100 flex-column">

    <header class="mb-auto">
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: rgba(251, 251, 251, 0.15);border-radius: 25px;">
            <div class="container">
                <a class="navbar-brand" href="{{ route('main') }}">
                    <img
                        src="/images/logo.png"
                        class="me-2 d-none d-lg-block d-xl-block"
                        width="350"
                        alt=""
                        loading="lazy"
                    />
                    <img
                        src="/images/logo-s.png"
                        class="me-2 d-block d-lg-none d-xl-none"
                        height="100"
                        alt=""
                        loading="lazy"
                    />
                </a>
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
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link h3 text-white" href="{{ route('works') }}">@lang('main.works')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3 text-white" href="{{ route('artists') }}">@lang('main.artists')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3 text-white" href="{{ route('about') }}">@lang('main.about')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3 text-white" href="{{ route('recruit') }}">@lang('main.recruit')</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h3 text-white" href="{{ route('contact') }}">@lang('main.contact')</a>
                        </li>
                        @auth()
                            <li class="nav-item">
                                <a class="nav-link h3 text-white" href="{{ route('admin') }}">Admin</a>
                            </li>
                        @endauth
                        <li class="nav-item h3 text-white dropdown">
                            <a
                                class="nav-link text-white dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-mdb-toggle="dropdown"
                                aria-expanded="false"
                            >
                                @lang('main.current_locale')
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ route('locale', 'ua') }}">UA</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('locale', 'ru') }}">RU</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('locale', 'en') }}">EN</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('locale', 'de') }}">DE</a>
                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('main')

    <footer class="mt-auto p-1">
        <div class="inner">
            <p>PolygoNerds &copy; 2021 Ukraine</p>
        </div>
    </footer>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/jquery.vide.js"></script>

<!-- MDB -->
<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"
></script>

<!-- Masonry -->
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"
        integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D"
        crossorigin="anonymous"
        async>
</script>

</body>
</html>
