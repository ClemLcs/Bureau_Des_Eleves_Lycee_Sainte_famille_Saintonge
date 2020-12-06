<!DOCTYPE html>
<html lang="fr">

<head>
    
    <!-- Required meta tags-->
    @extends('head.HTML.Meta')
    @section('meta-html')
    @endsection

    <!-- Title Page-->
    <title>Conexxion BDE Saintonge</title>

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

<body class="body-register" style="animation-duration: 900ms; opacity: 1;">
    @yield('content')
</body>

</html>