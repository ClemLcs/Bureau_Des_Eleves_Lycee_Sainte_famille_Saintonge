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
    <link href="{{asset('css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Saintonge -->
    <link rel="stylesheet" href="{{asset('Lyc%C3%A9e%20Sainte%20Famille%20Saintonge%20-%20Bordeaux%20-%20Accueil_fichiers/css.css')}}" media="all">
    <link rel="stylesheet" href="https://www.lyceesaintefamille.com/wp-content/themes/lycee-sainte-famille/css/style.css">
    <link rel="preload" href="https://www.lyceesaintefamille.com/wp-content/themes/lycee-sainte-famille/css/style.css" as="style" onload="this.rel='stylesheet'">
    
    <!-- Main CSS-->
    <link href="{{asset('css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('css/accueil.css')}}">

</head>

<body class="body-register" style="animation-duration: 900ms; opacity: 1; background-image: url('https://bde-saintonge.com/images/fond.JPG');">
    @yield('content')
</body>

</html>