
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="universal admin is super flexible, powerful, clean & modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, universal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets') }}/dashboard/images/favicon.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('assets') }}/dashboard/images/favicon.png" type="image/x-icon"/>
    <title>Universal - Premium Admin Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/fontawesome.css">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/icofont.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/themify.css">

     <!--JSGrid css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/datatables.css" />

    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/flag-icon.css">

    <!-- prism css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/prism.css">

    <!-- Owl css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/owlcarousel.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/responsive.css">

</head>
<body>



<!--page-wrapper Start-->
<div class="page-wrapper">

    <!--Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper">
                @if (Auth::guard('mentor')->user()->role == 2)
                <a href="/admin">
                @else
                <a href="/mentor">

                @endif
                    <img src="{{ asset('assets') }}/dashboard/images/logo-light.png" class="image-dark" alt=""/>
                    <img src="{{ asset('assets') }}/dashboard/images/logo-light-dark-layout.png" class="image-light" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch">
                        <input type="checkbox" id="sidebar-toggle" checked>
                        <span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                       
                    </li>
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()" class="text-dark">
                            <img class="align-self-center pull-right mr-2" src="{{ asset('assets') }}/dashboard/images/dashboard/browser.png" alt="header-browser">
                        </a>
                    </li>
                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <img class="align-self-center pull-right mr-2" src="{{ asset('assets') }}/dashboard/images/dashboard/user.png" alt="header-user"/>
                            <div class="media-body">
                                <h6 class="m-0 txt-dark f-16">
                                    My Account
                                    <i class="fa fa-angle-down pull-right ml-2"></i>
                                </h6>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20">
                            @if (Auth::guard('mentor')->user()->role == 2)
                            <li>
                                <a href="/admin-profile">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
                            @else
                            <li>
                                <a href="/mentor-profile">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
                                @endif

                            
                            <li>
                                <a href="/logout">
                                    <i class="icon-power-off"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle">
                    <i class="icon-more"></i>
                </div>
            </div>
        </div>
    </div>
    <!--Page Header Ends-->

    <!--Page Body Start-->
    <div class="page-body-wrapper">
        <!--Page Sidebar Start-->
        @include('template.sidebar')
        <!--Page Sidebar Ends-->

        <div class="page-body">
            <!-- Container-fluid starts -->
            @yield('content')
        </div>
        <!--Page Body Ends-->
    </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="{{ asset('assets') }}/dashboard/js/jquery-3.2.1.min.js" ></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets') }}/dashboard/js/bootstrap/bootstrap.js" ></script>


<!-- Morris Chart JS-->
<script src="{{ asset('assets') }}/dashboard/js/morris-chart/raphael.js"></script>
<script src="{{ asset('assets') }}/dashboard/js/morris-chart/morris.js"></script>

<!-- owlcarousel js-->
<script src="{{ asset('assets') }}/dashboard/js/owlcarousel/owl.carousel.js" ></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets') }}/dashboard/js/sidebar-menu.js" ></script>

<!--Sparkline  Chart JS-->
<script src="{{ asset('assets') }}/dashboard/js/sparkline/sparkline.js"></script>

<!--Height Equal Js-->
<script src="{{ asset('assets') }}/dashboard/js/height-equal.js"></script>

{{-- Data Tabel  --}}
<script src="{{ asset('assets') }}/dashboard/js/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets') }}/dashboard/js/datatables/datatable.custom.js"></script>

<!-- clipboard js -->
<script src="{{ asset('assets') }}/dashboard/js/clipboard/clipboard.min.js" ></script>

<!-- custom card js  -->
<script src="{{ asset('assets') }}/dashboard/js/custom-card/custom-card.js" ></script>

<!-- Theme js-->
<script src="{{ asset('assets') }}/dashboard/js/script.js" ></script>

<!-- Counter js-->

<script src="{{ asset('assets') }}/dashboard/js/notify/bootstrap-notify.min.js"></script>
<script src="{{ asset('assets') }}/dashboard/js/notify/index.js"></script>

</body>
</html>