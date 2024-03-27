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
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Table Filter</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Table</li>
                            <li class="breadcrumb-item active">Table Filter</li>
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
            
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Table Filter</h2>
                        </div>
                        <div class="body">
                            <button type="button" class="btn mb-1 btn-simple btn-sm btn-default btn-filter" data-target="all">Todos</button>
                            <button type="button" class="btn mb-1 btn-simple btn-sm btn-success btn-filter" data-target="approved">Approved</button>
                            <button type="button" class="btn mb-1 btn-simple btn-sm btn-warning btn-filter" data-target="suspended">Suspended</button>
                            <button type="button" class="btn mb-1 btn-simple btn-sm btn-info btn-filter" data-target="pending">Pending</button>
                            <button type="button" class="btn mb-1 btn-simple btn-sm btn-danger btn-filter" data-target="blocked">Blocked</button>
                            <div class="table-responsive m-t-20">
                                <table class="table table-filter table-hover mb-0">                                
                                    <tbody>
                                        <tr data-status="approved">
                                            <td>1</td>
                                            <td><div class="media-object"><img src="{{ asset('assets/images/xs/avatar1.jpg')}}" alt="" width="35px" class="rounded-circle"></div></td>
                                            <td>jacob</td>
                                            <td>jacob@gnail.com</td>
                                            <td width="250px">
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                        </tr>
                                        <tr data-status="suspended">
                                            <td>2</td>
                                            <td><div class="media-object"><img src="assets/images/xs/avatar2.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                            <td>charlotte</td>
                                            <td>a.charlotte@gnail.com</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-warning">Suspended</span></td>
                                        </tr>
                                        <tr data-status="blocked">
                                            <td>3</td>
                                            <td><div class="media-object"><img src="assets/images/xs/avatar3.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                            <td>grayson</td>
                                            <td>grayson@yahoo.com</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-coral" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-danger">Blocked</span></td>
                                        </tr>
                                        <tr data-status="approved">
                                            <td>4</td>
                                            <td><div class="media-object"><img src="assets/images/xs/avatar4.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                            <td>jacob</td>
                                            <td>jacob@gnail.com</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                        </tr>
                                        <tr data-status="approved">
                                            <td>5</td>
                                            <td><div class="media-object"><img src="assets/images/xs/avatar5.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                            <td>amelia</td>
                                            <td>amelia@gnail.com</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-success">Approved</span></td>
                                        </tr>
                                        <tr data-status="pending">
                                            <td>6</td>
                                            <td><div class="media-object"><img src="assets/images/xs/avatar6.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                            <td>michael</td>
                                            <td>michael@gmail.com</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                        </tr>
                                        <tr data-status="pending">
                                            <td>7</td>
                                            <td><div class="media-object "><img src="assets/images/xs/avatar7.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                            <td>michael</td>
                                            <td>michael@gmail.com</td>
                                            <td>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge badge-info">Pending</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
