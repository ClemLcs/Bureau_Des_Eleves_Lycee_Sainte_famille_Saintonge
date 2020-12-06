<!DOCTYPE html>
<?php if(Auth::check() === true){?>
 $users = $users;
<html lang="en">
<head>
    
    <!-- Required meta tags-->
    @extends('head.HTML.Meta')
    @section('meta-html')
    @endsection

    <!-- Title Page-->
    <title>Dashboard BDE Saintonge</title>

    <!-- Fontfaces CSS-->
    @extends('head.CSS.Fontfaces')
    @section('font-css')
    @endsection

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Vendor CSS-->
    @extends('head.CSS.Vendor')
    @section('vendor-css')
    @endsection

    <!-- Saintonge -->
    @extends('head.CSS.Saintonge')
    @section('saintonge-css')
    @endsection
    
    <!-- Main CSS-->
    @extends('head.CSS.Main')
    @section('main-css')
    @endsection

    <!-- Bootstrap JS -->
    @extends('head.JS.Bootstrap')
    @section('bootstrap-js')
    @endsection

    <!-- Vendor JS -->
    @extends('head.JS.Vendor')
    @section('vendor-js')
    @endsection

    <!-- Main JS -->
    @extends('head.JS.Main')
    @section('main-js')
    @endsection


</head>
<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper-dash">
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

            @yield('content')
            <!-- END PAGE CONTAINER-->
        </div>
        
        

        
    </div>
   
    @extends('footer.HTML.Footer')
    @section('footer-html')
    @endsection

</body>

</html>
<!-- end document-->

<?php }else{
    return redirect()->route('login');
} ?> 