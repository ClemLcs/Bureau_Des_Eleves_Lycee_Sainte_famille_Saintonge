<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags-->
    
    <?php $__env->startSection('meta-html'); ?>
    <?php $__env->stopSection(); ?>

    <!-- Title Page-->
    <title>Dashboard BDE Saintonge</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Fontfaces CSS-->
    
    <?php $__env->startSection('font-css'); ?>
    <?php $__env->stopSection(); ?>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Vendor CSS-->
    
    <?php $__env->startSection('vendor-css'); ?>
    <?php $__env->stopSection(); ?>

    <!-- Saintonge -->
    
    <?php $__env->startSection('saintonge-css'); ?>
    <?php $__env->stopSection(); ?>
    
    <!-- Main CSS-->
    
    <?php $__env->startSection('main-css'); ?>
    <?php $__env->stopSection(); ?>

    <!-- Bootstrap JS -->
    
    <?php $__env->startSection('bootstrap-js'); ?>
    <?php $__env->stopSection(); ?>

    <!-- Vendor JS -->
    
    <?php $__env->startSection('vendor-js'); ?>
    <?php $__env->stopSection(); ?>

    <!-- Main JS -->
    
    <?php $__env->startSection('main-js'); ?>
    <?php $__env->stopSection(); ?>


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
        
        <?php $__env->startSection('header-mobile-html'); ?>
        <?php $__env->stopSection(); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        
        <?php $__env->startSection('menu-sidebar-html'); ?>
        <?php $__env->stopSection(); ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <?php $__env->startSection('header-desktop-html'); ?>
            <?php $__env->stopSection(); ?>
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

    <?php $__env->startSection('footer-html'); ?>
    <?php $__env->stopSection(); ?>
</body>

</html>
<!-- end document-->
<?php echo $__env->make('layouts.footer.HTML.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.body.HTML.Header-desktop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.body.HTML.Menu-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.body.HTML.Header-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.JS.Main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.JS.Vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.JS.Bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Saintonge', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Fontfaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.HTML.Meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/site/bde/resources/views/dashboard/eleve/index.blade.php ENDPATH**/ ?>