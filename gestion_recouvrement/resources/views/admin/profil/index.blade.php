<!doctype html>
<html lang="en">

@include('layoutsAdmin.head')

<body data-theme="light" class="font-nunito">

    
    <div id="wrapper" class="theme-cyan">

        
            <!-- Page Loader -->
            @include('layoutsAdmin.loader')
    
        <!-- Top navbar div start -->
         <!-- Top navbar div start -->
   @include('layoutsAdmin.navbar')

   <!-- main left menu -->
   @include('layoutsAdmin.leftbar')
    
       
    
        <!-- mani page content body part -->
        

        <div id="app">
            <profil-admin  :admin='{{$admin}}'></profil-admin>
        </div>
    
    </div>

<!-- Javascript -->
<script src="{{ asset('/assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{ asset('/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>


<!-- page js file -->
<script src="{{ asset('/assets/bundles/mainscripts.bundle.js')}}"></script>
<script>
    $(function() {
        // photo upload
        $('#btn-upload-photo').on('click', function() {
            $(this).siblings('#filePhoto').trigger('click');
        });

        // plans
        $('.btn-choose-plan').on('click', function() {
            $('.plan').removeClass('selected-plan');
            $('.plan-title span').find('i').remove();

            $(this).parent().addClass('selected-plan');
            $(this).parent().find('.plan-title').append('<span><i class="fa fa-check-circle"></i></span>');
        });
    });
</script>
</body>
</html>