<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('assets') }}/login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/login/css/style.css">
</head>
<body>

    <div class="main">
       
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
               
               
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="{{ asset('assets') }}/login/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="/daftar" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        @if (session('message'))
                        <div class="alert alert-success alert-dismissible">
                            <h4><i class="icon fa fa-check"></i>Berhasil</h4>
                            {{ session('message') }}
                        </div>
                        @elseif (session('pesan'))
                        <div class="alert alert-success alert-dismissible">
                            <h4><i class="icon fa fa-check"></i>Gagal</h4>
                            {{ session('pesan') }}
                        </div>
                        @elseif (session('error'))
                        <div class="alert alert-success alert-dismissible">
                            <h4><i class="icon fa fa-check"></i>Gagal</h4>
                            {{ session('error') }}
                        </div>
                        @endif
                        <form method="POST" class="register-form" id="login-form" action="{{url('proses_login')}}">
                            @csrf
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="email" id="your_name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('assets') }}/login/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/login/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>