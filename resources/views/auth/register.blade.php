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
    .registerform-page{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:url("assets/img/banner2.png");
    padding:50px 0px;
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
}
.registerform-page .row{ 
    align-items:center;
}
.registerform-page button#register-submit{
    background-color: #9CCB00 !important;
    color: white !important;
    font-size: 15px !important;
    font-weight: 500 !important;
    height: 45px;
    border: none !important;

}


.registerform-page form#register-form .btn{
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


.registerform-page .form-control {
    height:45px;
}
.registerform-page form#register-form{
   padding-top:15px;
   padding-bottom:30px;
   padding-left:10px;
   padding-right:10px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    border-radius:10px;
    background-color:white;
    overflow:hidden;
}
.registerform-page .container{
    max-width:1000px;
}
.login-regiter-page-btn{
    display:inline-block;background-color:#9CCB00;padding:10px 30px;border-radius:50px;
    font-weight:600;
    color:white;
}
.login-regiter-page-btn:hover{
    color:black ;
}
</style>

<body class="registerform-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align:center;margin:50px auto;">
            <a href="https://hiretalent.cz">
                    <img class="logoimg" src="https://hiretalent.cz/assets/img/logo/brand-logo.png" width="300">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

            <form id="register-form" method="POST" action="{{ route('register') }}" role="form">
            <h1 style="text-align:center;color:black;padding-bottom:15px;">Register</h1>
                                                @csrf
                                                <div class="form-group">
                                                    <input type="text" name="name" id="name" tabindex="1" class="form-control @error('name') is-invalid @enderror" placeholder="Username" value="{{ old('name') }}" autocomplete="user_name" required autofocus>

                                                </div>
                                                <div class="form-group">
                                                    <input type="email" id="email" name="email" tabindex="1" class="form-control" placeholder="Email Address" value="{{ old('email') }}" autocomplete="email">

                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required autocomplete="new-password">

                                                </div>
                                                <div class="form-group">
                                                    <input type="password" name="password_confirmation" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password" required autocomplete="new-password">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" name="contact" id="contact" tabindex="2" class="form-control phone" placeholder="Phone Number" required autocomplete="0347 5152586" value="{{ old('contact') }}">
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                    <input class="form-check-input " type="checkbox" name="consent" id="terms-conditions">
                                                        <label style="font-weight:500 !important; " class="form-check-label" for="terms-conditions">
                                                            Agree to <a style="text-decoration: underline !important;" target="_blank" class="term-condition" href="{{route('term.condition')}}">Terms and conditions</a> and
                                                            <a style="text-decoration: underline !important;" href="{{route('privacy.policy')}}" class="privacy-policy" target="_blank">
                                                                Privacy policy</a>
                                                        </label>
                                                        <div class="aggree_err text-danger"></div>
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
            <div class="col-md-6">
                <div style="text-align:center;">
                    <h1 style="font-size:18px;font-weight:400;color:white;">Already an user?</h1>
                    <a class="login-regiter-page-btn"  href="/login">Login</a>
                </div>
            </div>
        </div>

    </div>

    </div>






    <!-- Vendor JS Files -->
    <!-- <script type="text/javascript" src="{{asset('assets/js/langjs/choices.min.js')}}"></script> -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
    <script type="text/javascript">
        // const sorting = document.querySelector('.selectpickerlang');
        // const commentSorting = document.querySelector('.selectpickerlang');
        // const sortingchoices = new Choices(sorting, {
        //     placeholder: false,
        //     itemSelectText: ''
        // });


        // Trick to apply your custom classes to generated dropdown menu
        // let sortingClass = sorting.getAttribute('class');
        // window.onload = function() {
        //     sorting.parentElement.setAttribute('class', sortingClass);
        // }
    </script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
        // $(document).ready(function() {
        //     $("#login-submit").click(function(e) {
        //         e.preventDefault();

        //         $("#login-form").validate({
        //             rules: {
        //                 email: {
        //                     required: true,
        //                     email: true,
        //                 },
        //                 password: {
        //                     required: true,
        //                 }
        //             },
        //             messages: {
        //                 email: {
        //                     required: "Email is required",
        //                     email: "Email must be a valid email address",
        //                 },
        //                 password: {
        //                     required: "Password is required",
        //                     minlength: "Password must be at least 5 characters"
        //                 }
        //             }
        //         });


        //     })
        // });
    </script>


</body>

</html>