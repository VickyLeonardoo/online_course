
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Home</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/fontawesome.css">

    <!-- ico-font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/icofont.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/themify.css">

    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/flag-icon.css">

    <!-- prism css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/prism.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/bootstrap.css">

    <!-- vertical-menu css -->
    <link  rel="stylesheet" type="text/css"  href="{{ asset('assets') }}/dashboard/css/vertical-menu.css">

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
                <a href="index.html">
                    <img src="{{ asset('assets') }}/dashboard/images/logo-light-dark-layout.png" class="image-light" alt=""/>
                </a>
            </div>
        </div>
        <div class="main-header-right row">

            <div class="mega-menu-header">
                <div class="vertical-mobile-sidebar">
                    <i class="icon-align-right sidebar-toggle-btn"></i>
                </div>
                <div class="vertical-menu-main">
                    <nav id="main-nav">
                        <!-- Sample menu definition -->
                        <ul id="main-menu" class="sm pixelstrap">
                            <li>
                                <div class="text-right mobile-back">
                                    Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i>
                                </div>
                            </li>
                            
                            <li><a href="/home"><i class="icon-dropbox font-secondary"></i>Home</a>
                                <ul class="mega-menu">
                                
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--vertical menu ends-->

            <div class="nav-right col">
                <ul class="nav-menus">
                    
                    <li class="onhover-dropdown">
                        <a href="#!" class="txt-dark">
                            <h6 class="m-0 txt-dark f-16">
                                Daftar Kelas
                                <i class="fa fa-angle-down pull-right ml-2"></i>
                            </h6>
                        </a>
                        <ul class="language-dropdown onhover-show-div p-20">
                           
                            <li>
                                <a href="jurusan-informatika" data-lng="en">
                                    Teknik Informatika
                                </a>
                            </li>
                            <li>
                                <a href="jurusan-elektro" data-lng="es">
                                   Teknik Elektro
                                </a>
                            </li>
                            <li>
                                <a href="jurusan-mesin" data-lng="pt">
                                   Teknik Mesin
                                </a>
                            </li>
                            <li>
                                <a href="jurusan-manajemen-bisnis" data-lng="fr">
                                   Manajemen Bisnis
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#!" onclick="javascript:toggleFullScreen()" class="text-dark">
                            <img class="align-self-center pull-right mr-2" src="{{ asset('assets') }}/dashboard/images/dashboard/browser.png" alt="header-browser">
                        </a>
                    </li>

                    <li class="onhover-dropdown">
                        <div class="media  align-items-center">
                            <img class="align-self-center pull-right mr-2" src="{{ asset('assets') }}/dashboard/images/dashboard/user.png" alt="header-user">
                            <div class="media-body">
                                <h6 class="m-0 txt-dark f-16">
                                    {{ Auth::guard('user')->user()->username }}
                                    <i class="fa fa-angle-down pull-right ml-2"></i>
                                </h6>
                            </div>
                        </div>
                        
                        <ul class="profile-dropdown onhover-show-div p-20">
                            <li>
                                <a href="edit-profile">
                                    <i class="icon-user"></i>
                                    Edit Profile
                                </a>
                            </li>
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
   @yield('content')
    <!--Page Body Ends-->
    @include('sweetalert::alert')
</div>
<!--page-wrapper Ends-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "bi bi-eye-slash" );
            $('#show_hide_password i').removeClass( "bi bi-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "bi bi-eye-slash" );
            $('#show_hide_password i').addClass( "bi bi-eye" );
        }
    });
    });
</script>
<!-- latest jquery-->
<script src="{{ asset('assets') }}/dashboard/js/jquery-3.2.1.min.js" ></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets') }}/dashboard/js/bootstrap/popper.min.js" ></script>
<script src="{{ asset('assets') }}/dashboard/js/bootstrap/bootstrap.js" ></script>

<!-- prism js -->
<script src="{{ asset('assets') }}/dashboard/js/prism/prism.min.js"></script>

<!-- clipboard js -->
<script src="{{ asset('assets') }}/dashboard/js/clipboard/clipboard.min.js" ></script>

<!-- custom card js  -->
<script src="{{ asset('assets') }}/dashboard/js/custom-card/custom-card.js" ></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets') }}/dashboard/js/sidebar-menu.js" ></script>

<!-- SmartMenus jQuery plugin -->
<script  src="{{ asset('assets') }}/dashboard/js/vertical-menu.js"></script>

<!--drilldown menu-->
<script src="{{ asset('assets') }}/dashboard/js/jquery.drilldown.js"></script>

<!--Mega menu menu-->

<!-- Theme js-->
<script src="{{ asset('assets') }}/dashboard/js/script.js" ></script>

</body>
</html>