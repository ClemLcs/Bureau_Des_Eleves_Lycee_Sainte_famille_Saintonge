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

    <!-- SweetAlert JS -->
    <script src="{{asset('public/js/sweetalert2.all.js')}}"></script>

    <!-- Submit JS -->
    <script src="{{asset('public/js/envoie.js')}}"></script>

</head>
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

    
    
  <body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
            @extends('layouts.body.HTML.Header-desktop')
            @section('header-desktop-html')
            @endsection
            <!-- HEADER DESKTOP-->
        
        
    </div>
    <div class="create" style="height:1920px;position:relative;left:16%;top:100px;">
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
        <h1>Création d'un article pour le BDS:</h1>
        <form action="/sql/bds" method="post" class="form-control" id="create">
        {{ csrf_field() }}
            <div class="form-group">
                <label >Votre titre</label>
                <input type="text" name="title" class="au-input au-input--full"><br>
            </div>
            <div class="form-group">
                <label>Votre Contenu</label>
                <input type="text" name="body" class="au-input au-input--full" id="mytextarea"><br>
            </div>
            <div class="form-group">
                <label>Votre résumé en deux lignes:</label>
                <input type="text" name="resum" class="au-input au-input--full" id="mytextarea2"><br>
            </div>
            <div class="form-group">
                <label >Votre Email</label>
                <input type="text" name="email" value="{{$users->email}}" class="au-input au-input--full"><br>
            </div>
            <div class="form-group">
                <label >Votre image du message</label>
                <input type="text" name="img" class="au-input au-input--full"><br>
            </div>
            <div class="form-group">
                <label>Votre Nom</label>
                <input type="text" name="author" value="{{$users->prenom}}" class="au-input au-input--full"><br>
            </div>
            <div class="form-group">
                <label>L'url de l'article</label>
                <input type="text" name="slug" value="https://www.bde-saintonge.com/" class="au-input au-input--full"><br>
            </div>
            <button onclick="envoie()" type="button" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</body>
</html>
