

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



    <!-- mani page content body part -->
    
    <div id="app">
        <admin-index></admin-index>
    </div>
    
</div>

<!-- Javascript -->
<script src="/assets/bundles/libscripts.bundle.js"></script>    
<script src="/assets/bundles/vendorscripts.bundle.js"></script>

<!-- page js file -->
<script src="/assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>

