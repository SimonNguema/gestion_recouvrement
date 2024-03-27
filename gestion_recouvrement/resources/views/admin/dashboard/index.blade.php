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
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Tableau de bord</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Tableau de bord</li>
                            <li class="breadcrumb-item active">Accueil</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div id="app">
                <dashboard-admin></dashboard-admin>
            </div>

            <div class="row clearfix">
                
                <div class="col-xl-9 col-lg-8 col-md-12">
                    
                    
                  
                </div>
            </div>
        </div>
    </div>
    
</div>
<!-- Javascript -->
<script src="/assets/bundles/libscripts.bundle.js"></script>    
<script src="/assets/bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="/assets/bundles/apexcharts.bundle.js"></script>
<script src="/assets/bundles/c3.bundle.js"></script>
<script src="/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<!-- page js file -->
<script src="/assets/bundles/mainscripts.bundle.js"></script>
<script src="/js/university/index.js"></script>
</body>
</html>