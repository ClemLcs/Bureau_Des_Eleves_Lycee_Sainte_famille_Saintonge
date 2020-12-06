<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags-->
    @extends('layouts.head.HTML.Meta')
    @section('meta-html')
    @endsection

    <!-- Title Page-->
    <title>Messages BDS Saintonge</title>

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
  
        <div class="col-lg-9" style="position: relative;left: 17%;">
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
      <img class="d-block img-fluid" src="https://placehold.it/900x350" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="https://placehold.it/900x350" alt="Third slide">
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
        <h1 class="jumbotron-heading">Message(s) du BDS</h1>
        <p class="lead text-muted">Ici sont affichés les différents messages du BDS ( Bureau Des Sports ).</p>
      </div>
</section>

<div class="row" style="top: 76px;position: relative;">


@foreach ($posts as $post)

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#"><img class="card-img-top" src="{{$post->img}}" alt="" height="158px" width="320"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="/bds/{{$post->slug}}">{{$post->title}}</a>
        </h4>
        <p class="card-text"><?php echo html_entity_decode($post->resum); ?></p>
      </div>
      <div class="card-footer">
        <h5>De: {{$post->author}}</h5>
      </div>
    </div>
  </div>
@endforeach

</div>
<!-- /.row -->

</div>


<!-- /.col-lg-9 -->

  
    @extends('layouts.footer.HTML.Footer')
    @section('footer-html')
    @endsection

					<!-- Caroussel -->
        <div class="caroussel_bootstrap">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style = "position: relative; text-align: center;">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose1.jpg')}}" alt="First slide" height="1100px" width="550px"> 
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose2.jpg')}}" alt="Second slide" height="1100px" width="550px">
                </div>
                <div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose3.jpg')}}" alt="Third slide" height="1100px" width="550px">
                </div>
				<div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose4.jpg')}}" alt="Fourth slide" height="1100px" width="550px">
                </div>
				<div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose5.jpg')}}" alt="Fifth slide" height="1100px" width="550px">
                </div>
				<div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose6.jpg')}}" alt="Sixth slide" height="1100px" width="550px">
                </div>
				<div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose7.jpg')}}" alt="Seventh slide" height="1100px" width="550px">
                </div>
				<div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose8.jpg')}}" alt="Eighth slide" height="1100px" width="550px">
                </div>
				<div class="carousel-item">
                    <img class="d-block img-fluid" src="{{asset('public/images/Arkose9.jpg')}}" alt="Ninth slide" height="1100px" width="550px" >
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
			
        </div>
	
	
  </body>
</html>
