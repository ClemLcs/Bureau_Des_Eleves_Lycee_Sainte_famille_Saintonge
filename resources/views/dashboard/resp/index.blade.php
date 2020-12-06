<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags-->
    @extends('layouts.head.HTML.Meta')
    @section('meta-html')
    @endsection

    <!-- Title Page-->
    <title>Dashboard BDE Saintonge</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Fontfaces CSS-->
    @extends('layouts.head.CSS.Fontfaces')
    @section('font-css')
    @endsection

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Vendor CSS-->
    @extends('layouts.head.CSS.Vendor')
    @section('vendor-css')
    @endsection

    <!-- Saintonge -->
    @extends('layouts.head.CSS.Saintonge')
    @section('saintonge-css')
    @endsection
    
    <!-- Main CSS-->
    @extends('layouts.head.CSS.Main')
    @section('main-css')
    @endsection

    <!-- Bootstrap JS -->
    @extends('layouts.head.JS.Bootstrap')
    @section('bootstrap-js')
    @endsection

    <!-- Vendor JS -->
    @extends('layouts.head.JS.Vendor')
    @section('vendor-js')
    @endsection

    <!-- Main JS -->
    @extends('layouts.head.JS.Main')
    @section('main-js')
    @endsection


</head>
<body class="animsition" style="animation-duration: 900ms; opacity: 1;">

<style>
    .col-lg-9-users{
        position: relative;
        left: 15%;
        min-width: 25%;
        max-width: 100%;
    }
</style>

<div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @extends('layouts.body.HTML.Header-mobile')
        @section('header-mobile-html')
        @endsection
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('public/images/Sans titre.png')}}" alt="Cool Admin" class="img_haut_a_gauche" height="70px" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="/index.html">
                                <em class="fas fa-tachometer-alt"></em>Page d'accueil</a>
                        </li>
                        <li>
                            <a href="/dashboard">Tableau de Bord</a>
                        </li> 
                        <li><a href="/dashboard/eleve">Espace Elève</a></li>
                        <li><a href="/bda">Le BDA</a></li>
                        <li><a href="/bda-create">Créer des articles pour le BDA</a></li>
                        <li><a href="/bda-list">Valider des articles pour le BDA</a></li>
                        <li><a href="/bds">Le BDS</a></li>
                        <li><a href="/bds-create">Créer des articles pour le BDS</a></li>
                        <li><a href="/bds-validate">Valider des articles pour le BDS</a></li>
                        <li><a href="/bdc">Le BDC</a></li>
                        <li><a href="/bdc-create">Créer des articles pour le BDC</a></li>
                        <li><a href="/bdc-validate">Valider des articles pour le BDC</a></li>
                        <!--<li><a href="/activity">Activités</a></li>  -->
                        <li>
                            
                        </li> 
                                              
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        

        

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @extends('layouts.body.HTML.Header-desktop')
            @section('header-desktop-html')
            @endsection
            <!-- HEADER DESKTOP-->
            <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9-users" style="left: 0%;">
                            <h2 class="title-1 m-b-25">Liste des utilisateurs</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th class="text-center">Classe</th>
                                        <th class="text-center">Rôle</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Date de création</th>
                                        <th class="text-center">Edition</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users_all as $list)
                                        <tr>
                                            <td class="text-center">{{$list->name}}</td>
                                            <td class="text-center">{{$list->prenom}}</td>
                                            <td class="text-center">{{$list->classe}}</td>
                                            <td class="text-center">{{$list->role}}</td>
                                            <td class="text-center">{{$list->email}}</td>
                                                <?php 
                                                    $datetimeFormat = 'D, M Y à H:i:s';
                                                    
                                                    $date = new DateTime(null, new \DateTimeZone('Europe/Paris'));
                                                    $date->setTimestamp(strtotime($list->created_at));
                                                      
                                                ?>
                                            <td class="text-center">{{ $date->format($datetimeFormat)}}</td>
                                            <td class="text-left">
                                                <button class="btn btn-warning btn-sm"><em class="material-icons">mode_edit</em>Edition</button><br><br>
                                                <button class="btn btn-danger btn-sm"><em class="material-icons">event_busy</em>Supprimer</button><br><br>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            <!-- END PAGE CONTAINER-->
        </div>
        
        
</div>

        
    </div>

</div>
@extends('layouts.footer.HTML.Footer')
    @section('footer-html')
    @endsection
</body>

</html>
<!-- end document-->