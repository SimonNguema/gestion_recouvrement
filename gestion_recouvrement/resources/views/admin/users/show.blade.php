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
        <users-show :id='{{ $id }}'></users-show>
    </div>
    
    
</div>

<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js')}}"></script>

<!-- page vendor js file -->
<script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
<script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>

<!-- page js file -->
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('../js/index.js')}}"></script>
</body>
</html>
