<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Required meta tags-->
    
    <?php $__env->startSection('meta-html'); ?>
    <?php $__env->stopSection(); ?>

    <!-- Title Page-->
    <title>Messages BDA Saintonge</title>

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

    <!-- SweetAlert JS -->
    <script src="<?php echo e(asset('public/js/sweetalert2.all.js')); ?>"></script>

    <!-- Submit JS -->
    <script src="<?php echo e(asset('public/js/envoie.js')); ?>"></script>

</head>
<!-- HEADER MOBILE-->

        <?php $__env->startSection('header-mobile-html'); ?>
        <?php $__env->stopSection(); ?>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        
        <?php $__env->startSection('menu-sidebar-html'); ?>
        <?php $__env->stopSection(); ?>
        <!-- END MENU SIDEBAR-->
    
  <body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
            
            <?php $__env->startSection('header-desktop-html'); ?>
            <?php $__env->stopSection(); ?>
            <!-- HEADER DESKTOP-->
        
        
    </div>
    <div class="create">
    <script src="https://cloud.tinymce.com/5/tinymce.min.js?apiKey=s6y83qq7vai9czpd52r6ni6yxdff6kj5ok1exvr57ns6b3yx"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea2'
        });
    </script>
        <h1>Modifier l'article pour le BDA:</h1>
        <form action="sql/bda-update" method="post" class="form-control" id="envoie">
        <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label >Le titre</label>
                <input type="text" name="title" class="au-input au-input--full" value="<?php echo e($post['title']); ?>"><br>
            </div>
            <div class="form-group">
                <label>Le Contenu: </label>
                <textarea class="form-control rounded-0" name="body" id="mytextarea"><?php echo e($post['body']); ?></textarea>
            </div>
            <div class="form-group">
                <label>Le résumé en deux lignes:</label>
                <input type="text" name="resum" class="au-input au-input--full" id="mytextarea2"><br>
            </div>
            <div class="form-group">
                <label >L'image du message</label>
                <input type="text" name="img" class="au-input au-input--full" value="<?php echo e($post['img']); ?>"><br>
            </div>
            <div class="form-group">
                <label>De:</label>
                <input type="text" name="author" value="<?php echo e($post['author']); ?>"value="<?php echo e($users->prenom); ?>" class="au-input au-input--full"><br>
            </div>
            <div class="form-group">
                <label >L'email</label>
                <input type="text" name="email" value="<?php echo e($users->email); ?>" class="au-input au-input--full"><br>
            </div>
            <div class="form-group">
                <label>L'url de l'article ( ex: le-premier-article ) </label>
                <input type="text" name="slug"  class="au-input au-input--full" value="<?php echo e($post['slug']); ?>"><br>
            </div>
            <button onclick="envoie()" type="button" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</body>
</html>

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
<?php echo $__env->make('layouts.head.HTML.Meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/site/bde/resources/views/bda/validate.blade.php ENDPATH**/ ?>