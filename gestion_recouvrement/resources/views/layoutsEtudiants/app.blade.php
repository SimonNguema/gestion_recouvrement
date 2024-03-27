<!doctype html>
<html lang="en">

<head>
<title>:: Iconic University :: Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Iconic Bootstrap 4.5.0 Admin Template">
<meta name="author" content="thememakker, design by: ThemeMakker.com">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/charts-c3/plugin.css"/>
<link rel="stylesheet" href="../assets/vendor/jvectormap/jquery-jvectormap-2.0.3.min.css"/>

<!-- MAIN Project CSS file -->
<link rel="stylesheet" href="../assets/css/main.css">
</head>

<body data-theme="light" class="font-nunito">
<div id="wrapper" class="theme-cyan">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/logo-icon.svg" width="48" height="48" alt="Iconic"></div>
            <p>Please wait...</p>
        </div>
    </div>

    <!-- Top navbar div start -->
    <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-brand">
                <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button>
                <button type="button" class="btn-toggle-fullwidth"><i class="fa fa-bars"></i></button>
                <a href="index.html">ICONIC</a>                
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="notification-dot"></span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                               
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="javascript:void(0);" class="more">See all notifications</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="page-login.html" class="icon-menu"><i class="fa fa-power-off"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- main left menu -->
    <div id="left-sidebar" class="sidebar">
        <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-arrow-left"></i></button>
        <div class="sidebar-scroll">
            <div class="user-account">
                <img src="../assets/images/user.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>Pro. Chandler Bing</strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="doctor-profile.html"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="app-inbox.html"><i class="icon-envelope-open"></i>Messages</a></li>
                        <li><a href="javascript:void(0);"><i class="icon-settings"></i>Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="page-login.html"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>                
                <hr>
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>Exp</small>
                        <h6>14</h6>
                    </li>
                    <li class="col-4">
                        <small>Awards</small>
                        <h6>13</h6>
                    </li>
                    <li class="col-4">
                        <small>Clients</small>
                        <h6>213</h6>
                    </li>
                </ul>
            </div>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>                
            </ul>
                
            <!-- Tab panes -->
            <div class="tab-content padding-0">
                <div class="tab-pane active" id="menu">
                    <nav id="left-sidebar-nav" class="sidebar-nav">
                        <ul class="metismenu li_animation_delay">
                            <li class="active"><a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-tag"></i><span>Apps</span></a>
                                <ul>
                                    <li><a href="events.html">Events</a></li>
                                    <li><a href="app-inbox.html">Inbox App</a></li>
                                    <li><a href="app-chat.html">Chat App</a></li>
                                    <li><a href="app-contact.html">Contact list</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa  fa-user-circle"></i><span>Professors</span> </a>
                                <ul>
                                    <li><a href="professors-add.html">Add Professors</a></li>
                                    <li><a href="professors-list.html">Professors List</a></li>
                                    <li><a href="professors-profile.html">Professors Profile</a></li>
                                    <li><a href="professors-leave.html">Leave Request</a></li>
                                    <li><a href="attendance.html">Attendance</a></li>
                                    <li><a href="noticeboard.html">Noticeboard</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-users"></i><span>Students</span> </a>
                                <ul>
                                    <li><a href="students-add.html">Add Students</a></li>
                                    <li><a href="students-list.html">Students List</a></li>
                                    <li><a href="students-profile.html">Students Profile</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-user"></i><span>Parents</span> </a>
                                <ul>
                                    <li><a href="parents-add.html">Add Parents</a></li>
                                    <li><a href="parents-list.html">Parents List</a></li>
                                </ul>
                            </li>
                            <li><a href="hostel.html"><i class="fa fa-tag"></i>Hostel</a></li>
                            <li><a href="transport.html"><i class="fa fa-taxi"></i>Transport</a></li>
                            <li><a href="departments.html"><i class="fa fa-building"></i>Departments</a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-graduation-cap"></i><span>Courses</span> </a>
                                <ul>
                                    <li><a href="course-list.html">All Courses</a></li>
                                    <li><a href="course-add.html">Add Courses</a></li>
                                    <li><a href="course-info.html">Courses Info</a></li>
                                </ul>
                            </li>
                            <li><a href="library.html"><i class="fa fa-book"></i>Library</a></li>
                            <li><a href="classroom.html"><i class="fa fa-sitemap"></i>Classes</a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-cc-visa"></i><span>Payments</span> </a>
                                <ul>
                                    <li><a href="payments.html">Payments</a></li>
                                    <li><a href="payments-add.html">Add Payment</a></li>
                                    <li><a href="payments-invoice.html">Invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="our-centres.html"><i class="fa fa-map"></i>University Centres</a></li>
                            <li><a href="javascript:void(0);" class="has-arrow"><i class="fa fa-folder"></i><span>File Manager</span></a>
                                <ul>
                                    <li><a href="file-dashboard.html">Dashboard</a></li>
                                    <li><a href="file-documents.html">Documents</a></li>
                                    <li><a href="file-media.html">Media</a></li>
                                    <li><a href="file-images.html">Images</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Authentication" class="has-arrow"><i class="fa fa-lock"></i><span>Authentication</span></a>
                                <ul>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="page-forgot-password.html">Forgot Password</a></li>
                                    <li><a href="page-404.html">Page 404</a></li>
                                    <li><a href="page-403.html">Page 403</a></li>
                                    <li><a href="page-500.html">Page 500</a></li>
                                    <li><a href="page-503.html">Page 503</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#Pages" class="has-arrow"><i class="fa fa-tag"></i><span>Extra Pages</span></a>
                                <ul>
                                    <li><a href="page-blank.html">Blank Page</a></li>
                                    <li><a href="page-profile.html">Profile</a></li>
                                    <li><a href="page-gallery.html">Image Gallery</a></li>
                                    <li><a href="page-timeline.html">Timeline</a></li>
                                    <li><a href="page-pricing.html">Pricing</a></li>
                                    <li><a href="page-search-results.html">Search Results</a></li>
                                    <li><a href="page-maintenance.html">Maintenance</a></li>
                                    <li><a href="page-testimonials.html">Testimonials</a></li>
                                    <li><a href="page-faq.html">FAQs</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane" id="Chat">
                    <form>
                        <div class="input-group m-b-20">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="right_chat list-unstyled li_animation_delay">
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Chris Fox <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">chrisfox@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Joge Lucky <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Jogelucky@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Isabella@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                    <span class="message">FolisiseChosielie@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Alexander <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Alexander@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../assets/images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Isabella <i class="fa fa-heart-o font-12"></i></span>
                                    <span class="message">Isabella@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../assets/images/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="name d-flex justify-content-between">Pro. Folisise Chosielie <i class="fa fa-heart font-12"></i></span>
                                    <span class="message">FolisiseChosielie@gmail.com</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="app-contact.html" class="btn btn-block btn-primary">View all Doctors</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="setting">
                    <h6>Choose Skin</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="blue"><div class="blue"></div></li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="red"><div class="red"></div></li>
                    </ul>

                    <ul class="list-unstyled font_setting mt-3">
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-nunito" checked="">
                                <span class="custom-control-label">Nunito Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-ubuntu">
                                <span class="custom-control-label">Ubuntu Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-raleway">
                                <span class="custom-control-label">Raleway Google Font</span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-IBMplex">
                                <span class="custom-control-label">IBM Plex Google Font</span>
                            </label>
                        </li>
                    </ul>

                    <ul class="list-unstyled mt-3">
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-switch">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable Dark Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-rtl">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable RTL Mode!</span>
                        </li>
                        <li class="d-flex align-items-center mb-2">
                            <label class="toggle-switch theme-high-contrast">
                                <input type="checkbox">
                                <span class="toggle-switch-slider"></span>
                            </label>
                            <span class="ml-3">Enable High Contrast Mode!</span>
                        </li>
                    </ul>                    

                    <hr>
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox" checked>
                                <span>Allowed Notifications</span>
                            </label>                      
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Offline</span>
                            </label>
                        </li>
                        <li>
                            <label class="fancy-checkbox">
                                <input type="checkbox" name="checkbox">
                                <span>Location Permission</span>
                            </label>
                        </li>
                    </ul>

                    <a href="#" target="_blank" class="btn btn-block btn-primary">Buy this item</a>
                    <a href="https://themeforest.net/user/wrraptheme/portfolio" target="_blank" class="btn btn-block btn-secondary">View portfolio</a>
                </div>
                <div class="tab-pane" id="question">
                    <form>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="icon-magnifier"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Search...">
                        </div>
                    </form>
                    <ul class="list-unstyled question">
                        <li class="menu-heading">HOW-TO</li>
                        <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                        <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                        <li><a href="javascript:void(0);">Website Analytics</a></li>
                        <li class="menu-heading">ACCOUNT</li>
                        <li><a href="javascript:void(0);">Cearet New Account</a></li>
                        <li><a href="javascript:void(0);">Change Password?</a></li>
                        <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                        <li class="menu-heading">BILLING</li>
                        <li><a href="javascript:void(0);">Payment info</a></li>
                        <li><a href="javascript:void(0);">Auto-Renewal</a></li>                        
                        <li class="menu-button mt-3">
                            <a href="../docs/index.html" class="btn btn-primary btn-block">Documentation</a>
                        </li>
                    </ul>
                </div>    
            </div>          
        </div>
    </div>

    <!-- rightbar icon div -->
    <div class="right_icon_bar">
        <ul>
            <li><a href="app-inbox.html"><i class="fa fa-envelope"></i></a></li>
            <li><a href="app-chat.html"><i class="fa fa-comments"></i></a></li>
            <li><a href="app-calendar.html"><i class="fa fa-calendar"></i></a></li>
            <li><a href="file-dashboard.html"><i class="fa fa-folder"></i></a></li>
            <li><a href="app-contact.html"><i class="fa fa-id-card"></i></a></li>
            <li><a href="blog-list.html"><i class="fa fa-globe"></i></a></li>
            <li><a href="javascript:void(0);"><i class="fa fa-plus"></i></a></li>
            <li><a href="javascript:void(0);" class="right_icon_btn"><i class="fa fa-angle-right"></i></a></li>
        </ul>
    </div>
    
    <!-- mani page content body part -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2>Analytical</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>                            
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Analytical</li>
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
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row clearfix row-deck">
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter3" class="carousel slide" data-ride="carousel" data-interval="2300">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-eye"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Expense</div>
                                                    <h4 class="number mb-0">32k <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 13%</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-eye"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Income</div>
                                                    <h4 class="number mb-0">351k <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 8.2%</span></h4>
                                                    <small class="text-muted">Analytics for last week</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter1" class="carousel slide" data-ride="carousel" data-interval="2500">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Total Student</div>
                                                    <h4 class="number mb-0">3,251 <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 13%</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Total Teacher</div>
                                                    <h4 class="number mb-0">351 <span class="font-12 text-muted"><i class="fa fa-level-up"></i> 8.2%</span></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter2" class="carousel slide" data-ride="carousel" data-interval="2000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user-md"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Department</div>
                                                    <h4 class="number mb-0">32</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user-md"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Courses</div>
                                                    <h4 class="number mb-0">24</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-user-md"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Class</div>
                                                    <h4 class="number mb-0">45</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card top_widget">
                                <div id="top_counter4" class="carousel slide" data-ride="carousel" data-interval="2300">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-thumbs-o-up"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Our Center</div>
                                                    <h4 class="number mb-0">780</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="body">
                                                <div class="icon"><i class="fa fa-smile-o"></i></div>
                                                <div class="content">
                                                    <div class="text mb-2 text-uppercase">Smiley Faces</div>
                                                    <h4 class="number mb-0">2,351</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Total Revenue</h2>
                            <ul class="header-dropdown">
                                <li><a class="tab_btn" href="javascript:void(0);" title="Weekly">W</a></li>
                                <li><a class="tab_btn" href="javascript:void(0);" title="Monthly">M</a></li>
                                <li><a class="tab_btn active" href="javascript:void(0);" title="Yearly">Y</a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="body primary-bg text-light">
                                        <h4><i class="fa fa-bank"></i> $7,12,326</h4>
                                        <span>Fees</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body secondary-bg text-light">
                                        <h4><i class="fa fa-bank"></i> $25,965</h4>
                                        <span>Donation</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="body bg-danger text-light">
                                        <h4><i class="fa fa-cc-visa"></i> $14,965</h4>
                                        <span>Expenses</span>
                                    </div>
                                </div>
                            </div>
                            <div id="apex-chart-line-column"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="card average_rating">
                        <div class="header">
                            <h2>Parents Feedback</h2>
                        </div>
                        <div class="body">                            
                            <h2 class="bold padding-bottom-7">4.3 <small>/ 5</small></h2>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star-o text-warning"></i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Gender Ratio</h2>
                        </div>
                        <div class="body">
                            <div id="Gender-Ratio" style="height: 16rem"></div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="carousel slide twitter w_feed" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item">
                                    <i class="fa fa-twitter fa-2x"></i>
                                    <p>23th Feb</p>
                                    <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                                </div>
                                <div class="carousel-item active">
                                    <i class="fa fa-twitter fa-2x"></i>
                                    <p>25th Jan</p>
                                    <h4>Now Get <span>50% Off</span><br>on buy</h4>
                                    <div class="m-t-20"><i>- post form thememakker</i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Social Counter</h2>
                        </div>
                        <div class="body social_counter">                        
                            <ul class=" list-unstyled basic-list">
                                <li><i class="fa fa-facebook-square mr-1"></i> FaceBook <span class="badge badge-primary">16,785</span></li>
                                <li><i class="fa fa-twitter-square mr-1"></i> Twitter <span class="badge badge-default">2,365</span></li>
                                <li><i class="fa fa-linkedin-square mr-1"></i> Linkedin<span class="badge badge-success">9,021</span></li>
                                <li><i class="fa fa-behance-square mr-1"></i> Behance<span class="badge badge-info">1,725</span></li>
                                <li><i class="fa fa-dribbble mr-1"></i> Dribbble<span class="badge badge-info">11,725</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="row clearfix row-deck">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-info"><i class="fa fa-line-chart"></i> </div>
                                    <div class="content">
                                        <div class="text">Graduate</div>
                                        <h5 class="number">89%</h5>
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-warning"><i class="fa fa-shield"></i> </div>
                                    <div class="content">
                                        <div class="text">Gold Medals</div>
                                        <h5 class="number">262</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon text-danger"><i class="fa fa-star"></i> </div>
                                    <div class="content">
                                        <div class="text">Top Rank</div>
                                        <h5 class="number">305</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card top_counter">
                                <div class="body">
                                    <div class="icon"><i class="fa fa-globe"></i> </div>
                                    <div class="content">
                                        <div class="text">Other Country</div>
                                        <h5 class="number">317</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card visitors-map">
                        <div class="header">
                            <h2>Our Location</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers2" style="height: 300px;" class="jvector-map m-t-20"></div>
                        </div>
                    </div>
                    <div class="row clearfix row-deck">
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>Exam Toppers</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Report</th>
                                                <th>Year</th>
                                                <th>Field</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dean Otto</td>
                                                <td><span class="sparkbar">5,8,6,3,-5,9,2</span></td>
                                                <td>2018</td>
                                                <td>MCA</td>
                                            </tr>
                                            <tr>
                                                <td>K. Thornton</td>
                                                <td><span class="sparkbar">10,-8,-9,3,5,8,5</span></td>
                                                <td>2018</td>
                                                <td>B.E</td>
                                            </tr>
                                            <tr>
                                                <td>Kane D.</td>
                                                <td><span class="sparkbar">7,5,9,3,5,2,5</span></td>
                                                <td>2019</td>
                                                <td>B.Pharm</td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td><span class="sparkbar">10,8,1,-3,-3,-8,7</span></td>
                                                <td>2018</td>
                                                <td>MCA</td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td><span class="sparkbar">2,8,9,8,5,1,5</span></td>
                                                <td>2020</td>
                                                <td>PHD</td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td><span class="sparkbar">1,8,2,3,9,8,5</span></td>
                                                <td>2018</td>
                                                <td>MCA</td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td><span class="sparkbar">10,8,-1,-3,2,8,-5</span></td>
                                                <td>2020</td>
                                                <td>MBA</td>
                                            </tr>
                                            <tr>
                                                <td>Kane D.</td>
                                                <td><span class="sparkbar">7,5,9,3,5,2,5</span></td>
                                                <td>2019</td>
                                                <td>B.Pharm</td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td><span class="sparkbar">10,8,1,-3,-3,-8,7</span></td>
                                                <td>2018</td>
                                                <td>MCA</td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td><span class="sparkbar">2,8,9,8,5,1,5</span></td>
                                                <td>2020</td>
                                                <td>PHD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2>New Admission</h2>
                                    <ul class="header-dropdown">
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0);">Action</a></li>
                                                <li><a href="javascript:void(0);">Another Action</a></li>
                                                <li><a href="javascript:void(0);">Something else</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Age</th>
                                                <th>Number</th>
                                                <th>Department</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dean Otto</td>
                                                <td>22</td>
                                                <td>+404-447-6013</td>
                                                <td><span class="badge badge-primary">MCA</span></td>
                                            </tr>
                                            <tr>
                                                <td>K. Thornton</td>
                                                <td>23</td>
                                                <td>+404-447-6013</td>
                                                <td><span class="badge badge-default">MBA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Kane D.</td>
                                                <td>22</td>
                                                <td>+404-447-4582</td>
                                                <td><span class="badge badge-warning">Medical</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>24</td>
                                                <td>+404-447-3214</td>
                                                <td><span class="badge badge-success">BBA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td>22</td>
                                                <td>+404-447-2589</td>
                                                <td><span class="badge badge-primary">MCA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>23</td>
                                                <td>+404-447-1478</td>
                                                <td><span class="badge badge-info">M.COM</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td>22</td>
                                                <td>+404-447-7896</td>
                                                <td><span class="badge badge-info">M.COM</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>24</td>
                                                <td>+404-447-3214</td>
                                                <td><span class="badge badge-success">BBA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hughe L.</td>
                                                <td>22</td>
                                                <td>+404-447-2589</td>
                                                <td><span class="badge badge-primary">MCA</span></td>
                                            </tr>
                                            <tr>
                                                <td>Jack Bird</td>
                                                <td>23</td>
                                                <td>+404-447-1478</td>
                                                <td><span class="badge badge-info">M.COM</span></td>
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
    
</div>
<!-- Javascript -->
<script src="../assets/bundles/libscripts.bundle.js"></script>    
<script src="../assets/bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="../assets/bundles/apexcharts.bundle.js"></script>
<script src="../assets/bundles/c3.bundle.js"></script>
<script src="../assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->

<!-- page js file -->
<script src="../assets/bundles/mainscripts.bundle.js"></script>
<script src="../../js/university/index.js"></script>
</body>
</html>