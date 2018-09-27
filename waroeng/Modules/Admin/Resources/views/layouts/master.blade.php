<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Admin | @yield('title')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #4 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="{{ asset('assets/css/admincss1.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset('assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('assets/global/css/plugins.min.css') }} " rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->

        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ asset('assets/layouts/layout4/css/layout.min.css') }} " rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/layouts/layout4/css/themes/default.min.css') }} " rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets/layouts/layout4/css/custom.min.css') }} " rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->

        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" /> </head>
        <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">

        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">

                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ url('admin') }}">
                        <img src="{{ asset('assets/img/sadasd - Copy.png') }}" alt="logo" class="logo-default" />
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->

                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->

                <!-- BEGIN PAGE ACTIONS -->
                <!-- END PAGE ACTIONS -->

                <!-- BEGIN PAGE TOP -->
                <div class="page-top">

                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form" action="page_general_search_2.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->

                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-success"> 7 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold">12 pending</span> notifications</h3>
                                        <a href="page_user_profile_1.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">just now</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-success">
                                                            <i class="fa fa-plus"></i>
                                                        </span> New user registered. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Server #12 overloaded. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">10 mins</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Server #2 not responding. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">14 hrs</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> Application error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">2 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Database overloaded 68%. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">3 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> A user IP blocked. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">4 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-warning">
                                                            <i class="fa fa-bell-o"></i>
                                                        </span> Storage Server #4 not responding dfdfdfd. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">5 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-info">
                                                            <i class="fa fa-bullhorn"></i>
                                                        </span> System Error. </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="time">9 days</span>
                                                    <span class="details">
                                                        <span class="label label-sm label-icon label-danger">
                                                            <i class="fa fa-bolt"></i>
                                                        </span> Storage server failed. </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->

                            <li class="separator hide"> </li>

                            <!-- BEGIN INBOX DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-extended dropdown-inbox dropdown-dark" id="header_inbox_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-envelope-open"></i>
                                    <span class="badge badge-danger"> 4 </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>You have
                                            <span class="bold">7 New</span> Messages</h3>
                                        <a href="app_inbox.html">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">16 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('assets/layouts/layout3/img/avatar1.jpg') }}" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Bob Nilson </span>
                                                        <span class="time">2 hrs </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('assets/layouts/layout3/img/avatar2.jpg') }}" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">40 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed auctor 40% nibh congue nibh... </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <span class="photo">
                                                        <img src="{{ asset('assets/layouts/layout3/img/avatar3.jpg') }}" class="img-circle" alt=""> </span>
                                                    <span class="subject">
                                                        <span class="from"> Richard Doe </span>
                                                        <span class="time">46 mins </span>
                                                    </span>
                                                    <span class="message"> Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->

                            {{-- <li class="separator hide"> </li> --}}

                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- END TODO DROPDOWN -->

                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> Nick </span>
                                    <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                                    <img alt="" class="img-circle" src="{{ asset('assets/layouts/layout4/img/avatar9.jpg') }}" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="page_user_profile_1.html">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <li>
                                        <a href="app_calendar.html">
                                            <i class="icon-calendar"></i> My Calendar </a>
                                    </li>
                                    <li>
                                        <a href="app_inbox.html">
                                            <i class="icon-envelope-open"></i> My Inbox
                                            <span class="badge badge-danger"> 3 </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="app_todo_2.html">
                                            <i class="icon-rocket"></i> My Tasks
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a href="page_user_lock_1.html">
                                            <i class="icon-lock"></i> Lock Screen </a>
                                    </li>
                                    <li>
                                        <a href="page_user_login_1.html">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->

                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- END QUICK SIDEBAR TOGGLER -->

                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->

                </div>
                <!-- END PAGE TOP -->

            </div>
            <!-- END HEADER INNER -->

        </div>
        <!-- END HEADER -->

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">

                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">

                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu   " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

                        <li class="nav-item start active open">
                            <a href="{{ url('admin') }}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="badge badge-success">1</span>
                            </a>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Master</h3>
                        </li>
                        
                        
                        <li class="nav-item  ">
                            <a href="{{ url('admin/profil') }}" class="nav-link nav-toggle">
                                <i class="icon-bulb"></i>
                                <span class="title">Profil</span>
                            </a>
                        </li>

                        <li class="nav-item  ">
                            <a href="{{ url('admin/produk-dan-layanan') }}" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Produk & Layanan</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ url('admin/karir') }}" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Karir</span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ url('admin/berita') }}" class="nav-link nav-toggle">
                                <i class="icon-pointer"></i>
                                <span class="title">Berita</span>
                            </a>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Profil & Promo</h3>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-layers"></i>
                                <span class="title">Profil</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/sejarah') }}" class="nav-link ">
                                            <i class="icon-layers"></i>
                                        <span class="title">Sejarah & Perkembangan</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/visi-misi') }}" class="nav-link ">
                                            <i class="icon-layers"></i>
                                        <span class="title">Visi & Misi</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/profil-perusahaan') }}" class="nav-link ">
                                            <i class="icon-layers"></i>
                                        <span class="title">Profil Perusahaan</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/jajaran-tinggi-manajemen') }}" class="nav-link ">
                                            <i class="icon-layers"></i>
                                        <span class="title">Jajaran Tinggi Manajemen</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/galeri-dan-info-waroeng') }}" class="nav-link ">
                                            <i class="icon-layers"></i>
                                        <span class="title">Geleri & Info Waroeng</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-feed"></i>
                                <span class="title">Produk & Layanan</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/daftar-menu') }}" class="nav-link ">
                                            <i class="icon-feed"></i>
                                        <span class="title">Daftar Menu</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/layanan-takeaway') }}" class="nav-link ">
                                            <i class="icon-feed"></i>
                                        <span class="title">Layanan Take Away</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/layanan-nasi-dos') }}" class="nav-link ">
                                            <i class="icon-feed"></i>
                                        <span class="title">Layanan Nasi Dos</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/kerjasama-produk') }}" class="nav-link ">
                                            <i class="icon-feed"></i>
                                        <span class="title">Layanan Kerjasama Produk</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/produk-mitra') }}" class="nav-link ">
                                            <i class="icon-feed"></i>
                                        <span class="title">Produk Mitra</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ url('admin/karir-ss') }}" class="nav-link nav-toggle">
                                <i class=" icon-wrench"></i>
                                <span class="title">Karir</span>
                            </a>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Berita</h3>
                        </li>

                        <li class="nav-item  ">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-social-dribbble"></i>
                                <span class="title">Berita Seputar SS</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/berita-perusahaan') }}" class="nav-link ">
                                        <i class="icon-info"></i>
                                        <span class="title">Berita Perusahaan</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/penyaluran-dansos') }}" class="nav-link ">
                                        <i class="icon-call-end"></i>
                                        <span class="title">Penyaluran Dana Sosial</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/promo-produk-layanan') }}" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">promosi Produk & Layanan</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="{{ url('admin/event-kerjasama') }}" class="nav-link ">
                                        <i class="icon-tag"></i>
                                        <span class="title">Event Kerjasama Khusus</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ url('admin/berita-nikmat') }}" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Berita Nikmat</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/media-silaturrahmi') }}" class="nav-link nav-toggle">
                                <i class="icon-folder"></i>
                                <span class="title">Media Silaturrahmi</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->

                </div>
                <!-- END SIDEBAR -->

            </div>
            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">

                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">

                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">

                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>@yield('judul')
                                <small>@yield('subjudul')</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->

                        <!-- BEGIN PAGE TOOLBAR -->
                        <!-- END PAGE TOOLBAR -->

                    </div>
                    <!-- END PAGE HEAD-->
                    
                    <!-- BEGIN PAGE BREADCRUMB -->
					
					@yield('content')
                    
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            
            <!-- BEGIN QUICK SIDEBAR -->
            <!-- END QUICK SIDEBAR -->

        </div>
        <!-- END CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; 
                <a target="_blank" href="http://waroengss.com">Waroeng SS</a> &nbsp;|&nbsp;
                <a href="{{ url('sitemap/kebijakan') }}" title="Kebijakan Waroeng SS" target="_blank">Kebijakan</a> &nbsp;|&nbsp;
                <a href="{{ url('sitemap') }}" title="Sitemap Waroeng SS" target="_blank">Sitemap</a>
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->

        <!-- BEGIN QUICK NAV -->
        <!-- END QUICK NAV -->

        
        <!--[if lt IE 9]>
<script src="{{ asset('assets/global/plugins/respond.min.js') }}"></script>
<script src="{{ asset('assets/global/plugins/excanvas.min.js') }}"></script> 
<script src="{{ asset('assets/global/plugins/ie8.fix.min.js') }}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets/global/plugins/moment.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/morris/morris.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/morris/raphael-min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amcharts/pie.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amcharts/radar.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/light.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/patterns.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amcharts/themes/chalk.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/ammap/ammap.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/amcharts/amstockcharts/amstock.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/fullcalendar/fullcalendar.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/flot/jquery.flot.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/flot/jquery.flot.resize.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/flot/jquery.flot.categories.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jquery.sparkline.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }} " type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset('assets/global/scripts/app.min.js') }} " type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/pages/scripts/dashboard.min.js') }} " type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{ asset('assets/layouts/layout4/scripts/layout.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/layouts/layout4/scripts/demo.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/layouts/global/scripts/quick-sidebar.min.js') }} " type="text/javascript"></script>
        <script src="{{ asset('assets/layouts/global/scripts/quick-nav.min.js') }} " type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>
