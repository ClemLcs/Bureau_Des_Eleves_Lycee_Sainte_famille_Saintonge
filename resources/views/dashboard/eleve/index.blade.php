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

            <section class="jumbotron text-center" style="width: 100%;top: 76px;">
      <div class="container">
        <h1 class="jumbotron-heading">Messages des différents Bureaux</h1>
        <p class="lead text-muted">Ici sont affichés les différents messages des Bureaux</p>
      </div>
</section>

<div class="row" style="top: 76px;position: relative;">


  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/bda"><img class="card-img-top" src="https://www.bde-saintonge.com/public/images/bdfa.png" alt="" height="158px" width="320"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="/bda">Articles du BDA</a>
        </h4>
        <p class="card-text">Cliquez Ici pour accéder aux articles du BDA</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/bdc"><img class="card-img-top" src="https://www.bde-saintonge.com/public/images/bdc.jpg" alt="" height="158px" width="320"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="/bdc">Articles du BDC</a>
        </h4>
        <p class="card-text">Cliquez Ici pour accéder aux articles du BDC</p>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="/bds"><img class="card-img-top" src="https://www.bde-saintonge.com/public/images/bds-image.png" alt="" height="158px" width="320"></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="/bds">Articles du BDS</a>
        </h4>
        <p class="card-text">Cliquez Ici pour accéder aux articles du BDS</p>
      </div>
    </div>
  </div>

        </div>
  </div>
            
            <!-- END PAGE CONTAINER-->
        </div>

</div>
@extends('layouts.footer.HTML.Footer')
    @section('footer-html')
    @endsection
</body>

</html>
<!-- end document-->