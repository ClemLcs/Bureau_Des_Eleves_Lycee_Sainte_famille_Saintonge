<!DOCTYPE html>
<?php if(Auth::check() === true){?>
 $users = $users;

<html lang="en">

<head>
    
    <!-- Required meta tags-->
    @extends('layouts.head.HTML.Meta')
    @section('meta-html')
    @endsection

    <!-- Title Page-->
    <title>Dashboard BDE Saintonge</title>

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
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        @extends('layouts.body.HTML.Header-mobile')
        @section('header-mobile-html')
        @endsection
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @extends('layouts.body.HTML.Menu-sidebar')
        @section('menu-sidebar-html')
        @endsection
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            @extends('layouts.body.HTML.Header-desktop')
            @section('header-desktop-html')
            @endsection
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Vue d'ensemble</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <?php if($users->rôle === "responsable"){?>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                            
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <em class="zmdi zmdi-account-o"></em>
                                            </div>
                                            <div class="text">
                                                <h2>1</h2>
                                                <span>membre(s) en ligne(s)</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <em class="zmdi zmdi-shopping-cart"></em>
                                            </div>
                                            <div class="text">
                                                <h2>0</h2>
                                                <span>produits vendus</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <em class="zmdi zmdi-calendar-note"></em>
                                            </div>
                                            <div class="text">
                                                <h2>1</h2>
                                                <span>cette semaine</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <em class="zmdi zmdi-money"></em>
                                            </div>
                                            <div class="text">
                                                <h2>0€</h2>
                                                <span>bénéfices</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }else{

                        }?>
                        
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40" style="width: 210%;display: inline-block;">
                                    <div class="au-card-title" style="background-image:url('public/images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                            <em class="zmdi zmdi-account-calendar"></em>Liste des évènements</h3>
                                        <a href="/dashboard/create/posts" class="au-btn-plus-1">
                                            <em class="zmdi zmdi-plus"></em>
                                        </a>
                                    </div>
                                    
                                    <div class="au-task js-list-load">
                                        <div class="au-task__title">
                                            <p>Evènement à venir</p>
                                        </div>
                                        <div class="au-task-list js-scrollbar3">
                                            <div class="au-task__item au-task__item--danger">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Réunion parent professeur 1ère GT le 6 Décembre</a>
                                                    </h5>
                                                    <span class="time">17:10</span>
                                                </div>
                                            </div>
                                            <div class="au-task__item au-task__item--warning">
                                                <div class="au-task__item-inner">
                                                    <h5 class="task">
                                                        <a href="#">Journée d'intégration le 25 Septembre</a>
                                                    </h5>
                                                    <span class="time">08:10</span>
                                                </div>
                                            </div>
                                            <?php if(!empty($posts)){?>
                                                @foreach($posts as $post)
                                                <div class="au-task__item au-task__item--warning">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                            <a href="/dashboard/view/{{$post->name}}">{{$post->name}}</a>
                                                        </h5>
                                                        <p>
                                                            {{$post->content}}
                                                            <h2>
                                                            </h2>
                                                            
                                                        </p>
                                                        <span class="time">{{$post->created_at}}</span>
                                                    </div>
                                                </div>
                                                @endforeach
                                            <?php } ?> 
                                        </div>
                                        <div class="au-task__footer">
                                            <button class="au-btn au-btn-load js-load-btn">en savoir plus </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 LO-CASCIO Clément. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    @extends('layouts.footer.HTML.Footer')
    @section('footer-html')
    @endsection
    
    
    
    
    



</body>

</html>
<!-- end document-->
<?php }else{
    return redirect()->route('login');
} ?>