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
        <etudiant-index></etudiant-index>
    </div>
    
</div>

<!-- Javascript -->
<script src="{{asset('/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<!-- page js file -->
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>
