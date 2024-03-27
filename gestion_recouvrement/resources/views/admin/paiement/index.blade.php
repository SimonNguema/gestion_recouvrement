<!doctype html>
<html lang="en">

@include('layoutsAdmin.head')
<body data-theme="light" class="font-nunito">

<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    

    <!-- Top navbar div start -->
   @include('layoutsAdmin.navbar')

    <!-- main left menu -->
    @include('layoutsAdmin.leftbar')

   

    <!-- mani page content body part -->
    <div id="app">
    <paiement-index></paiement-index>
   </div>
    
</div>

<!-- Javascript -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js')}}"></script>    
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js')}}"></script>


<!-- page js file -->
<script src="{{ asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script>
    $(document).ready(function () {
        $('.star').on('click', function () {
            $(this).toggleClass('star-checked');
        });

        $('.ckbox label').on('click', function () {
            $(this).parents('tr').toggleClass('selected');
        });

        $('.btn-filter').on('click', function () {
            var $target = $(this).data('target');
            if ($target != 'all') {
                $('.table tr').css('display', 'none');
                $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
            } else {
                $('.table tr').css('display', 'none').fadeIn('slow');
            }
        });
    });
</script>
</body>
</html>
