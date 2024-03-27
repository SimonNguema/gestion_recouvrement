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
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Ajouter Admin</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Admin</li>
                            <li class="breadcrumb-item active">Ajouter</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="d-flex flex-row-reverse">
                            <div class="page_action">
                                <button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button>
                                <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button>
                            </div>
                            <div class="p-2 d-flex">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            

            <div id="app">
                <admin-create></admin-create>
            </div>

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="/assets/bundles/libscripts.bundle.js"></script>    
<script src="/assets/bundles/vendorscripts.bundle.js"></script>

<script src="/assets/vendor/dropify/js/dropify.min.js"></script>
<script src="/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- page js file -->
<script src="/assets/bundles/mainscripts.bundle.js"></script>
<script src="/js/pages/forms/dropify.js"></script>
</body>
</html>
