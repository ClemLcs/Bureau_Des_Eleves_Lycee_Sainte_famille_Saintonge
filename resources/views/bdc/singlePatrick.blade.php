<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags-->
    @extends('layouts.head.HTML.Meta')
    @section('meta-html')
    @endsection

    <!-- Title Page-->
    <title>Messages BDA Saintonge</title>

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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" id="contact-form-7-css"
        href="Promoteur%20immobilier%20Bordeaux%20et%20France%20-%20Anth%C3%A9lios%20Immobilier_fichiers/styles_002.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="google-fonts-css"
        href="Promoteur%20immobilier%20Bordeaux%20et%20France%20-%20Anth%C3%A9lios%20Immobilier_fichiers/css.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-css"
        href="Promoteur%20immobilier%20Bordeaux%20et%20France%20-%20Anth%C3%A9lios%20Immobilier_fichiers/bootstrap.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="main-css"
        href="Promoteur%20immobilier%20Bordeaux%20et%20France%20-%20Anth%C3%A9lios%20Immobilier_fichiers/styles.css"
        type="text/css" media="all">
    <link rel="stylesheet" id="slick-css"
        href="Promoteur%20immobilier%20Bordeaux%20et%20France%20-%20Anth%C3%A9lios%20Immobilier_fichiers/slick.css"
        type="text/css" media="all">
    <script type="text/javascript"
        src="Promoteur%20immobilier%20Bordeaux%20et%20France%20-%20Anth%C3%A9lios%20Immobilier_fichiers/jquery.js"></script>
    <script type="text/javascript"
        src="Promoteur%20immobilier%20Bordeaux%20et%20France%20-%20Anth%C3%A9lios%20Immobilier_fichiers/jquery-migrate.js"></script>
    <link rel="https://api.w.org/" href="https://www.anthelios.fr/wp-json/">
    <link rel="shortlink" href="https://www.all-archi.net">
    <link rel="alternate" type="application/json+oembed"
        href="https://www.anthelios.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.anthelios.fr%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://www.anthelios.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.anthelios.fr%2F&amp;format=xml">

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

        <!-- HEADER DESKTOP-->
        @extends('layouts.body.HTML.Header-desktop')
            @section('header-desktop-html')
            @endsection
            <!-- HEADER DESKTOP-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            @csrf
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Recherche ..." required />
                                <button class="au-btn--submit" type="submit">
                                    <em class="zmdi zmdi-search"></em>
                                </button>
                            </form>
                            <div class="header-button">
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        <?php if(empty($users)){?>
                                            <img src="{{$users->img_profil}}" alt="Img profil" />
                                        <?php }?>
                                        </div>
                                        <div class="content">
                                        <?php if(empty($users)){?>
                                            <a class="js-acc-btn" href="#">{{$users->name}} {{$users->prenom}}</a>
                                        <?php }?>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <?php if(empty($users)){?>
                                                        <img src="{{$users->img_profil}}" alt="Img profil " />
                                                    <?php }?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                    <?php if(empty($users)){?>
                                                        <a href="#">{{$users->name}} {{$users->prenom}}</a>
                                                    </h5>
                                                    <span class="email">{{$users->email}}</span>
                                                    <?php }?>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <em class="zmdi zmdi-account"></em>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <em class="zmdi zmdi-settings"></em>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <em class="zmdi zmdi-money-box"></em>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <em class="zmdi zmdi-power"></em>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/login" target="_blank">Connexion</a>
                                    <a href="/register" target="_blank">Enregistrement</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            
            <!-- END PAGE CONTAINER-->
        </div>
  
        <div class="col-lg-9" style="position: relative;left: 17%;top: 20%;display: block;">
<!--
<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel" style="position: relative;left: 18%;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="{{asset('public/images/Arkose7.jpg')}}" alt="First slide" height="900px" width="350px">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->


<section class="jumbotron text-center" style="width: 100%;top: 76px;">
      <div class="container">
        <h1 class="jumbotron-heading">Message du BDC</h1>
      </div>
</section>
<br><br><br><br><br>
<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">{{$posts->title}}</h1>
      </div>
</div>


<div class="container">

<div class="row">

  <div class="col-sm-8 blog-main">

    <div class="blog-post" style="width: 1190px;text-align;text-align: center;">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.bde-saintonge.com/public/acdemie/patrick_dupond_3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.bde-saintonge.com/public/acdemie/patrick_dupond_2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://entrepreneur-heureux.com/wed/img/Leila.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.bde-saintonge.com/public/acdemie/leila_da_rocha.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


      <?php
        $datetimeFormat = 'D, M Y à H:i:s';                                                  
        $date = new DateTime(null, new \DateTimeZone('Europe/Paris'));
        $date->setTimestamp(strtotime($posts->created_at));
      ?>
      
      <p class="blog-post-meta"> Crée le: <?php echo $date->format($datetimeFormat); ?> de <a href=""><?php echo $users->prenom; ?></a></p>

      <h6><br><?php echo html_entity_decode($posts->resum); ?></h6>
      
      <hr>
      <h4>
      <div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: {{$posts->pourcentage}}%;" aria-valuenow="{{$posts->pourcentage}}" aria-valuemin="0" aria-valuemax="100">{{$posts->pourcentage}}%</div>
</div>
<?php if($posts->pourcentage =="erreur" OR $posts->pourcentage =="Erreur"){
    echo "Erreur à l'étape actuelle";
} ?>
          <?php echo html_entity_decode($posts->body); ?>
          <section id="prog-content" class="container">
            <div class="row">
                <div id="prog-general" class="col-12 col-md-6">
                    <div class="bg-light prog-column">
                        <div class="col-12 col-md-8 ml-md-auto mr-md-auto">
                            <h1 data-title="BOTANIK  &lt;br&gt;LE TAILLAN MEDOC">
                                Comment le Projet va-t- il fonctionner ?  <br><br>
                            </h1>
                            <div id="prog-place" class="">
                                 <br>
                                <span class="text-uppercase"> </span>
                            </div>
                            <div id="prog-intro">
                                Vous trouverez ci-dessous une barre de progression détaillant l'anvancement des différentes 
                                étapes du projet. 
                            </div>
                        </div>
                    </div>
                </div>
                <div id="prog-caracteristics" class="col-12 col-md-6 d-flex flex-column prog-column text-uppercase">
                <div class="caract-item">
                    <div class="svg">
                            <img src="https://img.icons8.com/metro/26/000000/collaboration.png" alt="" srcset="">
                            Interview: 2%
                        </div>
                        <div id="prog-price">
                             </div>
                    </div>
                    <?php
                        if($posts->pourcentage >= "25"){
                    ?>
                    <div class="caract-item">
                        <div class="svg">
                                <img src="https://img.icons8.com/metro/26/000000/video-file.png" alt="" srcset="">
                                Test du Fonctionnement des fichiers: 25%
                        </div>
                        
                    </div>
                    <?php
                    }
                        elseif($posts->pourcentage >= "50"){
                    ?>
                        <div class="caract-item">
                        <div class="svg">
                        <img src="https://img.icons8.com/metro/26/000000/video-file.png" alt="" srcset="">
                                Test du Fonctionnement des fichiers: 25%<br>
                            <img src="https://img.icons8.com/metro/26/000000/video-editing.png" alt="" srcset="">
                            Montage: 50%<br>
                        </div>
                        <div id="prog-date">
                    </div>                            
                        </div>
                    <?php
                        }elseif($posts->pourcentage >= "75"){
                    ?>
                    <div class="caract-item">
                        <div class="svg">
                        <img src="https://img.icons8.com/metro/26/000000/video-file.png" alt="" srcset="">
                                Test du Fonctionnement des fichiers: 25%<br>
                                <img src="https://img.icons8.com/metro/26/000000/video-editing.png" alt="" srcset="">
                            Montage: 50%<br>
                            <img src="https://img.icons8.com/metro/26/000000/video-call.png" alt="" srcset="">
                            Rendu Vidéo: 75%<br>
                        </div>
                        <div id="prog-date">
                            
                        </div>
                    </div>
                    <?php
                    }elseif($posts->pourcentage == "100"){?>
                        <div class="caract-item">
                        <div class="svg">
                        <img src="https://img.icons8.com/metro/26/000000/video-file.png" alt="" srcset="">
                                Test du Fonctionnement des fichiers: 25%<br>
                                <img src="https://img.icons8.com/metro/26/000000/video-editing.png" alt="" srcset="">
                            Montage: 50%<br>
                            <img src="https://img.icons8.com/metro/26/000000/video-call.png" alt="" srcset="">
                            Rendu Vidéo: 75%<br>
                            <img src="https://img.icons8.com/metro/26/000000/ms-powerpoint.png" alt="" srcset="">
                            Présentation: 100% <a href="#">Cliquez Ici</a>
                        </div>
                    </div>
                    <?php }
                    ?>
                    
                    
                    
                    
                    
                </div>
            </div>
        </section>
    </h4>
    </div><!-- /.blog-post -->

    

  </div><!-- /.blog-main -->

  

</div><!-- /.row -->

</div><!-- /.container -->




</div>
<!-- /.col-lg-9 -->

  
    @extends('layouts.footer.HTML.Footer')
    @section('footer-html')
    @endsection

  </body>
</html>
