<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">

    <title>:: Falcon - Admin Dashboard ::</title>
    <link rel="icon" type="image/ico" href="http://thememakker.com/templates/falcon/html/assets/images/favicon.ico"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- vendor css files -->
    <link rel="stylesheet" href="assets/js/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animsition.min.css">
    <link rel="stylesheet" href="assets/js/vendor/morris/morris.css">
    <!-- project main css files -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body id="falcon" class="main_Wrapper">


<div id="wrap" class="animsition">
   @include('frontend.layouts.header')
    <div id="controls">
        @include('frontend.layouts.leftmenu')
        @include('frontend.layouts.rightmenu')
    </div>
    <!-- CONTENT -->
   @yield('contend')
</div>
<!-- Vendor JavaScripts -->
<script src="assets/bundles/libscripts.bundle.js"></script>
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<!--/ vendor javascripts -->
<script src="assets/bundles/flotscripts.bundle.js"></script>
<script src="assets/bundles/d3cripts.bundle.js"></script>
<script src="assets/bundles/sparkline.bundle.js"></script>
<script src="assets/bundles/raphael.bundle.js"></script>
<script src="assets/bundles/morris.bundle.js"></script>
<script src="assets/bundles/loadercripts.bundle.js"></script>

<!-- page Js -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/page/index.js"></script>
</body>
</html>

