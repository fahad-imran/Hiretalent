<div class="page404-header">
    @include('frontPartial.header')
</div>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css -->
    <!-- Css -->
    <title>@yield('title', '404')</title>
    <meta name="Keywords" content="Pet shop, online pet shop, pet food, online pet food, best pet food">
    <meta name="Description"
        content="We are leading online pet store for all your pet supply needs. We deliver our products all over the world with the best prices available.">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description"
        content="We are leading online pet store for all your pet supply needs. We deliver our products all over the world with the best prices available.">
    <meta name="twitter:title" content="Buy Pet Products Online With Best Prices | Pet Shop">
    <meta name="twitter:image" content="assets/images/meta-banner.jpg">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Buy Pet Products Online With Best Prices | Pet Shop">
    <meta property="og:description"
        content="We are leading online pet store for all your pet supply needs. We deliver our products all over the world with the best prices available.">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="Pet Shop">
    <meta property="og:image" content="assets/images/meta-banner.jpg">
    <meta property="og:image:secure_url" content="{{asset('assets/images/meta-banner.jpg')}}">
    <style>
    .content-wrapper-404 {
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .error-page {
        padding: 10rem 0;
        text-align: center;
    }

    .error-page:before {
        color: #f3f6f9;
        content: "404";
        font-size: 20rem;
        font-weight: 700;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        z-index: -1;
        justify-content: center;
        align-items: center;
        display: flex;
        font-family: 'Poppins', sans-serif;
    }

    .page404-header .fixed-top {
        position: relative;
    }

    .page404-header #header {
        background: black;
        padding: 15px 0px;
    }

    .error-page h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 45px;
        font-weight: 700;
        color: black;

    }

    .error-page a {
        font-size: 15.1px;
        color: white;
        font-weight: bold;
        background-color: #9AC40C !important;
        border-radius: 20px;
        padding: 6px 25px !important;
        display: inline-block;
        margin: 20px 0px;
    }
    </style>

</head>

<body>
    <!-- 404 Page -->

    <section class="content-wrapper-404">
        <div class="error-page" data-error="404">
            <div id="hs_cos_wrapper_content"
                class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-rich_text" style=""
                data-hs-cos-general-type="widget" data-hs-cos-type="module"><span id="hs_cos_wrapper_content_"
                    class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_rich_text" style=""
                    data-hs-cos-general-type="widget" data-hs-cos-type="rich_text">
                    <h1>{{__('Page not found.')}}</h1>
                </span>
            </div>
            <div id="hs_cos_wrapper_button" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module"
                style="" data-hs-cos-general-type="widget" data-hs-cos-type="module">
                <a class="hs-button " href="/">
                    {{__('Go Home')}}
                </a>
            </div>
        </div>
    </section>

    <!-- Javascript -->
</body>
@include('frontPartial.footer')

</html>