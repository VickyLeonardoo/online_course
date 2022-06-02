
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

    <!-- Flag icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/dashboard/css/flag-icon.css">

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

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">
    <!--Page Body Start-->
    <div class="page-body-wrapper landing-main">
        <div class="landing-home">
            <div class="landing-header">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#"><img src="{{ asset('assets') }}/dashboard/images/logo-light.png" class="img-fluid" alt=""/></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon">
                            <i class="fa fa-bars"></i>
                        </span>
                        </button>
                        <div class="collapse navbar-collapse" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pre-build">Ke</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#cutomizer">customizer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#key-feature">key-feature</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#support">Update</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#rate">support</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!--admin option section start-->
        <section class="section-space bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="landing-header">
                            <h2><span class="digits">30+</span> Course</h2>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    @foreach ($course as $data)
                    <div class="col-md-3">
                        <div class="live-box">
                            <img src="{{ asset('assets') }}/dashboard/images/landing/layouts_prebuild/1.jpg" class="img-fluid" alt=""/>
                            <a class="btn btn-sm btn-info" href="default/index.html" target="_blank">Detail</a>
                        </div>
                        <div class="m-t-15 m-b-20  text-center">
                            <h6 class="f-w-700">{{ $data->nama }}</h6>
                            @if ($data->level == 1)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 2)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 3)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 4)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="far fa-star"></i>
                            </h6>
                            @elseif ($data->level == 5)
                            <h6><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </h6>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--footer start-->
        <section class="section-space footer-bg" id="rate">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>if you like our products Please Rate Us</h2>
                        <div class="star-rate">
                            <i class="fa fa-star font-warning"></i>
                            <i class="fa fa-star font-warning"></i>
                            <i class="fa fa-star font-warning"></i>
                            <i class="fa fa-star font-warning"></i>
                            <i class="fa fa-star font-warning"></i>
                        </div>
                        <button type="button" class="btn btn-warning btn-lg" data-original-title="btn btn-info btn-lg" title="">Rate Us</button>
                    </div>
                </div>
            </div>
        </section>
        <!--footer ends-->

        <!-- Tap on Top -->
        <div class="tap-top">
            <div>
                <i class="fa fa-angle-double-up"></i>
            </div>
        </div>
        <!-- Tap on Ends -->
        <!--Page Body Ends-->
    </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="{{ asset('assets') }}/dashboard/js/jquery-3.2.1.min.js" ></script>

<!-- Bootstrap js-->
<script src="{{ asset('assets') }}/dashboard/js/bootstrap/popper.min.js" ></script>
<script src="{{ asset('assets') }}/dashboard/js/bootstrap/bootstrap.js" ></script>

<!-- owlcarousel js-->
<script src="{{ asset('assets') }}/dashboard/js/owlcarousel/owl.carousel.js" ></script>

<!-- Sidebar jquery-->
<script src="{{ asset('assets') }}/dashboard/js/sidebar-menu.js" ></script>

<!-- Theme js-->
<script src="{{ asset('assets') }}/dashboard/js/script.js" ></script>
<script>
    "use strict";
    $(document).ready(function(){
        $("nav a").on('click', function(event) {
            if (this.hash !== "") {
                event.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 0
                }, 1000, function(){
                });
                return false;
            }
        });
        /*----------------------------------------
         GO to Home
         ----------------------------------------*/
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 500) {
                $('.tap-top').fadeIn();
            } else {
                $('.tap-top').fadeOut();
            }
        });
        $('.tap-top').on('click', function() {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });

    });

</script>
</body>
</html>