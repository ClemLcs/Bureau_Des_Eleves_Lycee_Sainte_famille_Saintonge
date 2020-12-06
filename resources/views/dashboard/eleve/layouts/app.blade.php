<!DOCTYPE html>
<html lang="fr">

<head>
    
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Accueil BDE Saintonge</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('public/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('public/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('public/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('public/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Saintonge -->
    <link rel="stylesheet" href="{{asset('public/Lyc%C3%A9e%20Sainte%20Famille%20Saintonge%20-%20Bordeaux%20-%20Accueil_fichiers/css.css')}}" media="all">
    <link rel="stylesheet" href="https://www.lyceesaintefamille.com/wp-content/themes/lycee-sainte-famille/css/style.css">
    <link rel="preload" href="https://www.lyceesaintefamille.com/wp-content/themes/lycee-sainte-famille/css/style.css" as="style" onload="this.rel='stylesheet'">
    
    <!-- Main CSS-->
    <link href="{{asset('public/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('public/css/accueil.css')}}">

</head>

<body class="body-register" style="animation-duration: 900ms; opacity: 1;">
    @yield('content')
</body>

</html>