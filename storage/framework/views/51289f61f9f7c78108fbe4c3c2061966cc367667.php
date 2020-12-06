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

    <!-- Jquery JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



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
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo e(asset('public/images/Sans titre.png')); ?>" alt="Cool Admin" class="img_haut_a_gauche" height="70px" />
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
            
            <?php $__env->startSection('header-desktop-html'); ?>
            <?php $__env->stopSection(); ?>
            <!-- HEADER DESKTOP-->
            <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-9-users" style="left: 0%;">
                            <h2 class="title-1 m-b-25">Liste des articles du BDA</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th class="text-center">Slug</th>
                                        <th class="text-center">Titre</th>
                                        <th class="text-center">Contenu</th>
                                        <th class="text-center">Résumé</th>
                                        <th class="text-center">Auteur</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Date de création</th>
                                        <th class="text-center">Edition</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <form action="bda-validate" method="post">
                                        <?php echo e(csrf_field()); ?>

                                            <tr>
                                                <td class="text-center">
                                                    <?php echo e($list->slug); ?>

                                                    <input type="hidden" name="slug" value="<?php echo e($list->slug); ?>">
                                                </td>
                                                <td class="text-center">
                                                    <?php echo e($list->title); ?>

                                                    <input type="hidden" name="title" value="<?php echo e($list->title); ?>">                                                    
                                                </td>
                                                <?php
                                                    $nbChar = 10; // Nb. de caractères sans '...'
                                                    
                                                    if(strlen($list->body) >= $nbChar){
                                                        $listModify = substr($list->body, 0, $nbChar).' ... ( Pour afficher le texte
                                                        en entier, cliquer sur le boutton édition ).';
                                                    }

                                                ?>
                                                <td class="text-center">
                                                    <?php echo e($listModify); ?>

                                                    <input type="hidden" name="body" value="<?php echo e($list->body); ?>">
                                                </td>
                                                <td class="text-center">
                                                    <?php echo e($list->resum); ?>

                                                    <input type="hidden" name="resum" value="<?php echo e($list->resum); ?>">
                                                </td>
                                                <td class="text-center">
                                                    <?php echo e($list->author); ?>

                                                    <input type="hidden" name="author" value="<?php echo e($list->author); ?>">
                                                </td>
                                                <td class="text-center">
                                                    <?php echo e($list->img); ?>

                                                    <input type="hidden" name="img" value="<?php echo e($list->img); ?>">
                                                </td>
                                                    <?php 
                                                        $datetimeFormat = 'D, M Y à H:i:s';
                                                        
                                                        $date = new DateTime(null, new \DateTimeZone('Europe/Paris'));
                                                        $date->setTimestamp(strtotime($list->created_at));
                                                        
                                                    ?>
                                                <td class="text-center">
                                                    <?php echo e($date->format($datetimeFormat)); ?>

                                                    <input type="hidden" name="dateCreation" value="<?php echo e($date->format($datetimeFormat)); ?>">
                                                </td>
                                                <td class="text-left">
                                                    <button class="btn btn-warning btn-sm"><em class="material-icons">mode_edit</em>Edition</button><br><br>
                                                    <button class="btn btn-danger btn-sm"><em class="material-icons">event_busy</em>Supprimer</button><br><br>
                                                </td>
                                            </tr>
                                        </form>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    
    <?php $__env->startSection('footer-html'); ?>
    <?php $__env->stopSection(); ?>
</body>

</html>
<!-- end document-->
<?php echo $__env->make('layouts.footer.HTML.Footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.body.HTML.Header-desktop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.body.HTML.Header-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.JS.Main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.JS.Vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.JS.Bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Saintonge', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Vendor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.CSS.Fontfaces', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.head.HTML.Meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/site/bde/resources/views/bda/list.blade.php ENDPATH**/ ?>