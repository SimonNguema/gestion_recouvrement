<!doctype html>
<html lang="en">

@include('layoutsAdmin.head')
<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    @include('layoutsAdmin.loader')

    <!-- Top navbar div start -->
    @include('layoutsAdmin.navbar')

    <!-- main left menu -->
    @include('layoutsAdmin.leftbar')

    <!-- rightbar icon div -->
    

    <!-- mani page content body part -->
   <div id="app">
    <programme-index></programme-index>
   </div>
    
</div>

<!-- Javascript -->
<script src="/assets/bundles/libscripts.bundle.js"></script>    
<script src="/assets/bundles/vendorscripts.bundle.js"></script>

<script src="/assets/vendor/dropify/js/dropify.min.js"></script>

<!-- page js file -->
<script src="/assets/bundles/mainscripts.bundle.js"></script>
<script src="js/pages/forms/dropify.js"></script>
</body>
</html>
