<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Hire Talent')</title>
    <meta property="og:title" content="HIRE WORLD'S TOP REMOTE TALENT">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{asset('assets/img/logo/logo-4.png')}}">
    <meta property="og:url" content="{{url('/')}}">
    <meta name="twitter:card" content="summary_large_image">

    <meta property="og:description" content="A hiring platform that helps companies to hire remote based talents efficiently and 5x faster.">
    <meta property="og:site_name" content="Hire Talent">
    <meta name="twitter:image:alt" content="Hire Talent Logo">

    <!-- Favicons -->
    <link href="{{asset('assets/img/logo/Tab-logo.png')}}" rel="icon">
    <link href="{{asset('assets/img/logo/Tab-logo.png')}}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- owl carusel linl  Begin-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css//owl.theme.default.min.css')}}" />
    <!-- owl carusel ended -->

    <!-- =======================================================
  * Template Name: Tempo - v4.9.1
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <!-- Google Analytics -->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-51GZXSYS5P"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-51GZXSYS5P');
    </script>
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '258697558647174');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=258697558647174&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

</head>
<style>
    .modal-backdrop.in {
        filter: alpha(opacity=50);
        z-index: -1;
        opacity: .5;
    }

    .login-sigup-modal .modal-header {
        justify-content: flex-end !important;
    }

    .login-sigup-modal .modal-header .close {
        color: #666 !important;
        opacity: 1;
    }



    .login-sigup-modal .modal-dialog {
        width: 100% !important;
        max-width: 450px !important;
    }

    .panel-login>.panel-heading {
        color: #00415d;
        background-color: #fff;
        border-color: #fff;
        text-align: center;
    }

    .panel-login>.panel-heading a {
        text-decoration: none;
        color: #666;
        font-weight: bold;
        font-size: 15px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }

    .panel-login>.panel-heading a.active {
        color: #029f5b;
        font-size: 18px;
    }

    .navbar .dropdown ul a:hover,
    .navbar .dropdown ul .active:hover,
    .navbar .dropdown ul li:hover>a {
        color: white;
        background: #6d8500;
    }

    .panel-login>.panel-heading hr {
        margin-top: 10px;
        margin-bottom: 0px;
        clear: both;
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
        background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
    }

    .panel-login input[type="text"],
    .panel-login input[type="email"],
    .panel-login input[type="password"] {
        height: 45px;
        border: 1px solid #ddd;
        font-size: 16px;
        -webkit-transition: all 0.1s linear;
        -moz-transition: all 0.1s linear;
        transition: all 0.1s linear;
    }

    .panel-login input:hover,
    .panel-login input:focus {
        outline: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        box-shadow: none;
        border-color: #ccc;
    }




    .btn-login:hover,
    .btn-login:focus {
        color: #fff;
        background-color: #e43c5c;
        border-color: #e43c5c;
    }

    .forgot-password {
        text-decoration: underline;
        color: #888;
    }

    .forgot-password:hover,
    .forgot-password:focus {
        text-decoration: underline;
        color: #666;
    }

    .btn-register,
    .btn-login {
        background-color: #6d8500;
        outline: none;
        color: #fff;
        font-size: 14px;
        height: auto;
        font-weight: normal;
        padding: 14px 0;
        text-transform: uppercase;
        border-color: #6d8500;
    }

    .btn-register:hover,
    .btn-login:hover {
        background-color: #AFC548;
        border-color: #AFC548;
    }

    .btn-register:hover,
    .btn-register:focus {
        color: #fff;
        background-color: #e43c5c;
        border-color: #e43c5c;
    }



    .modal-button {
        display: flex;
        justify-content: space-around;
    }

    a#register-form-link,
    a#login-form-link {
        width: 50%;
        padding: 10px !important;
    }

    .panel-login>.panel-heading a.active {
        color: black !important;
    }

    .panel {
        box-shadow: none !important;
    }

    /* language swictches */
    .languages-switch a {
        padding: 0 !important;

    }

    .languages-switch span {
        margin-right: 5px;
    }

    /* style for facebook button */
    a.btn.btn-success.btn-block.facebook-login {
        background-color: #4267B2;
    }

    a.btn.btn-success.btn-block.google-account-login {
        background-color: grey;
    }
</style>
<style>
    label#email-error {
        color: red;
        font-size: 11px;
    }

    label#password-error {
        color: red;
        font-size: 11px;
    }

    @media(max-width:991px) {
        .mobile-nav-toggle {
            order: 1;
        }

        .navbar .dropdown {
            display: flex;
            flex-direction: column;
        }

    }

    .navbar {
        margin-bottom: 0 !important;
    }

    ul.dropdown-menu .dropdown-toggle {
        display: none;
    }

    .resetpassword-body #header {
        background-color: black;
    }

    .new-password-container .container {
        max-width: 1000px;
        margin: auto;
    }

    .new-password-container {
        min-height: 50vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
     .reset-btn button{
     margin-top:15px;
     }
</style>

<body class="resetpassword-body">
    <header id="header">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- <a href="{{url('/')}}"><img class="logoimg" src="{{asset('assets/img/logo/logo.png')}}" height="100" width="100" /></a> -->
            <h1 class="logo"><a href="{{url('/')}}">
                    <img class="logoimg" src="{{asset('assets/img/logo/logo-4.png')}}" width="100" />
                </a></h1>
            <nav id="navbar" class="navbar">



                @if(Auth::user())
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('profile')}}" style="color:black; padding: 12px; border-bottom: 1px solid gray;">&emsp;&emsp;Profile</a>
                            <a class="dropdown-item" href="{{url('/requests')}}" style="color:black; padding: 12px; border-bottom: 1px solid gray;">&emsp;&emsp;Requests</a>
                            <a class="dropdown-item" href="#" style="color:red; padding: 12px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">&emsp;&emsp;Logout</a>
                        </div>
                    </div>

                    {{-- <a href="{{route('profile')}}"><span>{{Auth::user()->name}}</span></a> --}}
                </li>
                {{-- <a class="nav-link logout-btn btn btn-danger logout-btn" href="{{ route('logout') }}"
                >Logout</a> --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <a class="nav-link btn btn-info login login-btn" data-toggle="modal" data-target="#myModal">
                    {{__('Login')}}</a>
                @endif
                </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
                @include('partials/language_switcher')

            </nav><!-- .navbar -->
        </div>
        <!-- modal code ended here -->
        <div class="modal login-sigup-modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    {{-- <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <!-- <h4 class="modal-title">{{ __('Login') }}</h4> -->
                </div> --}}
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-login">
                                <div class="panel-heading">
                                    <div class="modal-button">

                                        <a href="#" class="active" id="login-form-link">{{__('Login')}}</a>
                                        <a href="#" id="register-form-link">{{__('Register')}}</a>

                                    </div>
                                    {{-- <hr> --}}
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form id="login-form" method="POST" action="{{ route('login') }}" method="post" role="form" style="display: block;">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" name="email" tabindex="1" class="form-control" placeholder="example@gmail.com" value="{{ old('email') }}">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" tabindex="2" class="form-control" placeholder="Password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                    <label for="remember"> {{__('Remember Me')}}</label>
                                                </div>
                                                <div class="form-group">
                                                    {{-- <div class="row"> --}}
                                                    {{-- <div class="col-sm-12 col-sm-offset-3"> --}}
                                                    <button type="submit" id="login-submit" tabindex="4" class="btn btn-success btn-block">{{__('Log In')}}</button>
                                                    {{-- </div> --}}
                                                    {{-- </div> --}}
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-12 ">
                                                            <a href="{{url('auth/google')}}" tabindex="4" class="btn btn-success btn-block google-account-login">{{__('Log In with Google')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-12 ">
                                                            <a href="{{ url('auth/facebook') }}" tabindex="4" class="btn btn-success btn-foursquare btn-block facebook-login">{{__('Log In with Facebook')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-12 ">
                                                            <a href="JavaScript:Void(0);" tabindex="4" class="btn btn-success btn-block facebook-login">{{__('Log In as Guest')}}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="text-center">
                                                                @if (Route::has('password.request'))
                                                                <a href="{{ route('password.request') }}" tabindex="5" class="forgot-password">{{__('Forgot Password?')}}</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <form id="register-form" method="POST" action="{{ route('register') }}" role="form" style="display: none;">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" tabindex="1" class="form-control @error('name') is-invalid @enderror" placeholder="Username" value="{{ old('name') }}" autocomplete="user_name" required autofocus>

                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" tabindex="1" class="form-control" placeholder="Email Address" value="{{ old('email') }}" autocomplete="email">

                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" tabindex="2" class="form-control" placeholder="Password" required autocomplete="new-password">

                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="contact" id="contact" tabindex="2" class="form-control" placeholder="Phone Number" required autocomplete="0347 5152586" value="{{ old('contact') }}">
                                                </div>
                                                <div class="form-group">
                                                    {{-- <div class="row"> --}}
                                                    {{-- <div class="col-sm-6 col-sm-offset-3"> --}}
                                                    <button type="submit" id="register-submit" tabindex="4" class="btn btn-success btn-block">{{__('Register Now')}}</button>
                                                    {{-- </div> --}}
                                                    {{-- </div> --}}
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        </div>

    </header>
    <div class="new-password-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <h2>{{ __('Reset Password') }}</h2>
                                <div class="login-logo">
                                    <a href="index.html"><span class="theme-logo"></span></a>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                       
                                    <div class="theme-input-box" style="margin-bottom:10px;">
                                      <label>Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="theme-input-box">
                                            <label>Password</label>
                                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Confirm Password</label>
                                        <div class="theme-input-box">
                                            <input id="password-confirm" type="password" placeholder="confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>
                                <div class="theme-input-box reset-btn">
                                    <button class="theme-btn btn btn-primary resetemailpassbtn">{{ __('Reset Password') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












    <!-- Vendor JS Files -->
    <!-- <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> -->
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <!-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- toastr js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/regular.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <!-- Begin owl carusel js  -->
    <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- End owl Carusel js -->



    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script>
        $(function() {

            $('#login-form-link').click(function(e) {
                $("#login-form").delay(100).fadeIn(100);
                $("#register-form").fadeOut(100);
                $('#register-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });
            $('#register-form-link').click(function(e) {
                $("#register-form").delay(100).fadeIn(100);
                $("#login-form").fadeOut(100);
                $('#login-form-link').removeClass('active');
                $(this).addClass('active');
                e.preventDefault();
            });

        });
    </script>
    <script>
        $(document).ready(function() {
            $("#login-submit").click(function(e) {
                document.getElementById("register-form").reset();
                $("#login-form").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true,
                        },
                        password: {
                            required: true,
                        }
                    },
                    messages: {
                        email: {
                            required: "Email is required",
                            email: "Email must be a valid email address",
                        },
                        password: {
                            required: "Password is required",
                            minlength: "Password must be at least 5 characters"
                        }
                    }
                });


            })
        });
    </script>
    <script>
        //code for show fail messages i.e your Credential dose not match our records when user login
        @if(Session::has('fail'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
        toastr.error("{{ session('fail') }}");
        @endif
    </script>
    <script>
        //code for when user update profile
        @if(Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
        }
        toastr.success("{{ session('success') }}");
        @endif
    </script>
    </script>
    <script type="text/javascript">
        var url = "{{ url('language') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>

</body>

</html>