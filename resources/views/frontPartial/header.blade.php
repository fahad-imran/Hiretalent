<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Hire Talent')</title>
    <meta property="og:title" content="HIRE WORLD'S TOP REMOTE TALENT">
    <meta property="og:type" content="article" />
    <meta property="og:image" content="{{asset('assets/img/logo/brand-logo.png')}}">
    <meta property="og:url" content="{{url('/')}}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta property="og:description" content="A hiring platform that helps companies to hire remote based talents efficiently and 5x faster.">
    <meta property="og:site_name" content="Hire Talent">
    <meta name="twitter:image:alt" content="Hire Talent Logo">
    <!-- facebook meta tag -->
    <meta name="facebook-domain-verification" content="xcf3gsrgcl0gwoap0nib4dseupyv44" />

    <!-- Favicons -->
    <link href="{{asset('assets/img/logo/tab-logo4.png')}}" rel="icon">
    <link href="{{asset('assets/img/logo/tab-logo4.png')}}" rel="apple-touch-icon">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <link rel="stylesheet" href="{{asset('build/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{asset('build/css/demo.css')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



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
    <!-- Google Tag Manager -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K4F2S3X');
    </script><!-- End Google Tag Manager -->
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
        background: #9AC40C;
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

        a.nav-link.btn.btn-info.login.login-btn {
            width: 150px;
        }

    }

    .navbar {
        margin-bottom: 0 !important;
    }

    ul.dropdown-menu .dropdown-toggle {
        display: none;
    }

    .fa-google {
        background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
        -webkit-text-fill-color: transparent;
    }

    /* horizental Or */

    .horizental-or h1 {
        overflow: hidden;
        text-align: center;
        font-size: 16px;
        font-weight: 500;
        color: black;
    }

    .horizental-or h1:before,
    .horizental-or h1:after {
        background-color: lightgray;
        content: "";
        display: inline-block;
        height: 1px;
        position: relative;
        vertical-align: middle;
        width: 50%;
    }

    .horizental-or h1:before {
        right: 0.5em;
        margin-left: -50%;
    }

    .horizental-or h1:after {
        left: 0.5em;
        margin-right: -50%;
    }

    #login-submit {}

    #login-form input[type="email"],
    #login-form input[type="password"],
    #login-form input[type="text"] {
        background-color: transparent !important;
        color: black;
        font-size: 13px;
        color: #000000;
        border: 1px solid #A6A6A6;

    }

    #register-form input[type="email"],
    #register-form input[type="password"],
    #register-form input[type="text"] {
        background-color: transparent !important;
        color: black;
        font-size: 13px;
        color: #000000;
        border: 1px solid #A6A6A6;

    }

    #register-form input[type="email"]::placeholder,
    #register-form input[type="password"]::placeholder,
    #register-form input[type="text"]::placeholder {
        background-color: transparent !important;
        color: #A6A6A6;
        font-size: 13px !important;

    }

    .facebook-login {
        background-color: #4267B2 !important;
        color: white !important;
        border-color: #4267B2 !important;
    }

    #login-form .btn {
        height: 45px;
        border: 1px solid lightgray;
        background-color: white;
        color: black;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;

    }

    #login-form i {
        position: absolute;
        left: 20px;
        font-size: 20px;
    }

    button#login-submit,
    #register-submit {
        background-color: #9CCB00 !important;
        color: white !important;
        font-size: 15px !important;
        font-weight: 500 !important;
        height: 45px;
        border: none !important;

    }

    .forgot-password {
        color: black !important;
    }

    .panel-login>.panel-heading a.active {
        color: #9AC40C !important;
        font-size: 23px !important;

    }

    .panel-login>.panel-heading a {
        font-weight: 700 !important;
        color: #737373 !important;
        font-size: 18px !important;
    }

    .invalid-feedback {
        display: block !important;
    }

    .password-group {
        position: relative;
    }

    .password-group i {
        position: absolute;
        right: 25px;
        left: unset !important;
        top: 0;
        bottom: 0;
        display: flex;
        background: transparent;
        border: none;
        font-size: 16px !important;
    }

    span#email-error,
    span#password-error,
    span#name-error,
    span#confirm-password-error,
    span#phone-error,
    span#consent-error {

        margin-top: -10px;
        margin-bottom: 13px;
    }

    .fa-eye-slash {
        display: none;
    }
</style>
<script>
function switchLanguage() {
    var url = window.location.href;
    var local = '{{ config('app.locale') }}';
  //  console.log(!url.search(local)>=0)
    if (!url.includes('/'+local))
    {
        if(local == 'en')
        {
            window.history.pushState("object or string", "Title", url.replace('/cz','/en' ));
        }
        else if(local == 'cz')
        {
            window.history.pushState("object or string", "Title", url.replace('/en','/cz' ));
        }
        if(!window.location.href.includes('/'+local))
        {
            window.history.pushState("object or string", "Title", url+local);
        }
    }
}
switchLanguage();
</script>

<body>
    <!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4F2S3X" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <!-- <a href="{{url('/')}}"><img class="logoimg" src="{{asset('assets/img/logo/logo.png')}}" height="100" width="100" /></a> -->
            <h1 class="logo"><a href="{{url('/')}}">
                    <img class="logoimg" src="{{asset('assets/img/logo/brand-logo.png')}}" width="100" />
                </a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link scrollto {{ (Request()->is('/')) ? 'active' : '' }}  " href="{{url('/')}}">{{__('Home')}}</a>
                    </li>
                    <li class="dropdown nav-item">

                        <a href="{{route('services')}}" class="dropdown-toggle {{ (Request()->is('services')) ? 'active' : '' }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{__('Services')}}<b class=""></b>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="{{url(App::getLocale().'/services')}}" aria-haspopup="true">{{__('Hire a Talent')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="dropdown-item {{ (Request()->is('services')) ? 'active' : '' }}" href="{{url(App::getLocale().'/it-services')}}" aria-haspopup="true">{{__('IT Consulting Services')}}</a>
                    </li>
                    <!-- <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Our IT Consulting Services</a> -->
                    <!-- <ul class="dropdown-menu">
                                    <li class="kopie"><a href="#">Digital transformation consulting</a></li>
                                    <li><a href="#">IT strategy consulting</a></li>
                                    <li><a href="#">IT assessment</a></li>
                                    <li><a href="#">IT operations consulting</a></li>
                                    <li><a href="#">IT project and program management</a></li>
                                    <li><a href="#">Technology consulting </a></li>
                                    <li><a href="#">Application implementation</a></li>
                                    <li><a href="#">Application modernization </a></li>
                                    <li><a href="#">Application support </a></li>
                                    <li><a href="#">IT infrastructure management </a></li>

                                </ul> -->
                    </li>
                </ul>
                </li>
                <li class="nav-item">
                    <a class="{{ (Request()->is('blog')) ? 'active' : '' }}" href="{{url(App::getLocale().'/blog')}}">{{__('Blog')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scrollto {{ request()->is('/contact*') ? 'active' : '' }}" href="{{url(App::getLocale().'/contact')}}">{{__('Contact')}}</a>
                </li>
                @if(Auth::user())
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{url(App::getLocale().'/profile')}}" style="color:black; padding: 12px; border-bottom: 1px solid gray;">&emsp;&emsp;{{__('Profile')}}</a>
                            <a class="dropdown-item" href="{{url(App::getLocale().'/change/password')}}" style="color:black; padding: 12px; border-bottom: 1px solid gray;">&emsp;&emsp;{{__('Change Password')}}</a>
                            <a class="dropdown-item" href="{{url(App::getLocale().'/requests')}}" style="color:black; padding: 12px; border-bottom: 1px solid gray;">&emsp;&emsp;{{__('Requests')}}</a>
                            <a class="dropdown-item" href="#" style="color:red; padding: 12px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">&emsp;&emsp;{{__('Logout')}}</a>
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
                    {{__('Sign in')}}</a>
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
                    <div class="modal-header">
                        <button type="button" class="close closeMainModal" data-dismiss="modal">&times;</button>
                        <!-- <h4 class="modal-title">{{ __('Login') }}</h4> -->
                    </div>
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
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12 ">
                                                                <a href="{{url('auth/google')}}" tabindex="4" class="btn m-0 btn-success btn-block google-account-login"><i class="fa-brands fa-google"></i>{{__('Continue with Google')}}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12 ">
                                                                <a href="{{ url('auth/facebook') }}" tabindex="4" class="btn btn-success btn-foursquare btn-block facebook-login"><i class="fa-brands fa-facebook-f"></i>{{__('Continue with Facebook')}}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="horizental-or">
                                                        <h1>OR</h1>
                                                    </div>
                                                    @csrf
                                                    <div class="form-group-1">
                                                        <div class="form-group">
                                                            <input type="email" name="email" tabindex="1" class="form-control" placeholder="{{__('Enter Email')}}" value="{{ old('email') }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group-1">
                                                        <div class="form-group password-group">
                                                            <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="{{__('Password')}}">
                                                            <div class="togglePassword">
                                                                <i class="input-group-text  fa fa-eye-slash"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                        <label style="font-weight: 500; color:black;" for="remember">
                                                            {{__('Remember Me')}}</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-sm-12 ">
                                                                <button type="submit" id="login-submit" tabindex="4" class="btn btn-success btn-block m-0">{{__('Log In')}}</button>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-sm-12 d-none">
                                                            <form> <a href="JavaScript:Void(0);" tabindex="4" class="btn btn-success btn-block facebook-login">{{__('Log In as Guest')}}</a></form>

                                                        </div>
                                                    </div>
                                                </div> -->
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
                                                    <div class="form-group-1">
                                                        <div class="form-group">
                                                            <input type="text" name="name" id="name" tabindex="1" class="form-control @error('name') is-invalid @enderror" placeholder="{{__('Enter Name')}}" value="{{ old('name') }}" autocomplete="user_name" required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-1">
                                                        <div class="form-group">
                                                            <input type="email" id="email" name="email" tabindex="1" class="form-control" placeholder="{{__('Enter Email')}}" value="{{ old('email') }}" autocomplete="email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group-1">
                                                        <div class="form-group password-group">
                                                            <input type="password" name="password" id="password-reg" tabindex="2" class="form-control" placeholder="{{__('Enter Password')}}" required autocomplete="new-password">
                                                            <div class="togglePassword-reg">
                                                            <i class="input-group-text  fa fa-eye-slash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-1">
                                                        <div class="form-group password-group">
                                                            <input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control" placeholder="{{__('Confirm Password')}}" required autocomplete="new-password">
                                                            <div class="togglePassword-conform">
                                                            <i class="input-group-text fa fa-eye-slash"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-1">
                                                        <div class="form-group">
                                                            <input id="phone" name="phone" class="form-control phone-validation" type="tel">
                                                            <span id="valid-msg" style="color:green" class="hide">✓
                                                                Valid</span>
                                                            <span id="error-msg" style="color:red" class="hide"></span>
                                                            <!-- <input type="text" name="contact" id="contact" tabindex="2" class="form-control phone" placeholder="{{__('Enter Phone Number')}}" required autocomplete="0347 5152586" value="{{ old('contact') }}"> -->
                                                        </div>
                                                    </div>
                                                    <div class="form-group-1">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input " type="checkbox" name="consent" id="terms-conditions">
                                                                <label style="font-weight:500 !important; " class="form-check-label" for="terms-conditions">
                                                                    {{__('Agree to')}} <a style="text-decoration: underline !important;" target="_blank" class="term-condition" href="{{route('term.condition')}}">{{__('Terms and conditions')}}</a>
                                                                    {{__('and')}}
                                                                    <a style="text-decoration: underline !important;" href="{{route('privacy.policy')}}" class="privacy-policy" target="_blank">
                                                                        {{__('Privacy policy')}}</a>
                                                                </label>
                                                                <div class="aggree_err text-danger"></div>
                                                            </div>
                                                        </div>
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