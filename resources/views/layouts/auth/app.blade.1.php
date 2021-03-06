<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Site Du BEE du Lycée Sainte Famille Saintonge') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Jquery JS-->
    <script src="http://vps523758.ovh.net/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="http://vps523758.ovh.net/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="http://vps523758.ovh.net/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="http://vps523758.ovh.net/vendor/slick/slick.min.js">
    </script>
    <script src="http://vps523758.ovh.net/vendor/wow/wow.min.js"></script>
    <script src="http://vps523758.ovh.net/vendor/animsition/animsition.min.js"></script>
    <script src="http://vps523758.ovh.net/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="http://vps523758.ovh.net/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="http://vps523758.ovh.net/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="http://vps523758.ovh.net/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="http://vps523758.ovh.net/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="http://vps523758.ovh.net/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="http://vps523758.ovh.net/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="http://vps523758.ovh.net/js/main.js"></script>

    <!-- Bootstrap CSS-->
    <link href="http://vps523758.ovh.net/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="http://vps523758.ovh.net/css/theme.css" rel="stylesheet" media="all">


    <!-- Vendor CSS-->
    <link href="http://vps523758.ovh.net/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">


    <!-- Fonts -->
    <link href="http://vps523758.ovh.net/css/font-face.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="http://vps523758.ovh.net/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
