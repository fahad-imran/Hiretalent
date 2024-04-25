<!-- ======= Header ======= -->
@include('frontPartial.header')
<style>
    .question.collapsed {
        color: white !important;
    }

    .collapse {
        visibility: visible;
    }

    .faq .faq-list .question {
        display: block;
        position: relative;
        font-family: #e43c5c;
        font-size: 18px;
        line-height: 24px;
        font-weight: 400;
        padding-left: 25px;
        cursor: pointer;
        color: white;
        transition: 0.3s;
    }

    .faq-sub-list li {
        padding: 0 !important;
        margin-bottom: 10px !important;
    }

    .services .icon-box {
        margin-bottom: 27px;
        margin-left: 30px;
    }

    .services-btn {
        font-size: 14px;
        font-weight: 500;
        padding: 5px 30px;
        border-radius: 0;
        margin-top: 20px;
    }

    .owl-carousel {

        margin: 0 auto;
        padding: 10px 0;
    }


    .owl-carousel .owl-nav button.owl-prev,
    .owl-carousel .owl-nav button.owl-next {
        z-index: 1;
        width: 40px;
        height: 40px;
        background-color: #ccc;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        transform: translatey(-50%);
    }

    .owl-nav button span {
        font-size: 30px;
        height: 100%;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .owl-carousel .owl-nav button.owl-prev {
        left: 0;
    }

    .owl-carousel .owl-nav button.owl-next {
        right: 0;
    }

    .owl-carousel .owl-nav {
        margin: 0;
    }

    .btn-wrap {
        text-align: center;
        width: 100%;
    }

    button {
        background-color: #ddd;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin: 10px;
        font-size: 18px;
        font-weight: 600;
        transition: all 0.5s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .owl-carousel .owl-item img {
        object-fit: contain;
        width: 100px;
    }

    .owl-carousel .owl-stage {
        display: flex;
        align-items: center;
    }

    .owl-carousel.owl-drag .owl-item {
        display: flex;
        justify-content: center;
    }

    .View-more-resources {
        font-size: 15.1px;
        color: white;
        font-weight: bold;
        background-color: #9AC40C !important;
        border-radius: 20px;
        padding: 6px 25px !important;
        display: inline-block;
        margin: 20px 0px;
    }

    .services.services-home {
        margin-top: -230px;
    }

    .our-mission p {
        font-size: 30px;
        font-weight: bold;
        color: white;
        text-align: center;
        max-width: 900px;
        margin: auto !important;
    }

    .our-mission {
        min-height: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #000000;

    }

    .our-mission span {
        color: #C2E41B;
    }
</style>
<!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container mt-5">
        {{-- <h3>Welcome to <strong>HireTalent</strong></h3> --}}
        <br><br>
        <h1 class=" mt-5">{{__('Hire World\'s Top remote talent')}}</h1>
        <h2>{{__('We are making it easy for global companies with remote hiring and connecting with top tech talents.')}}
        </h2>

    </div>
</section><!-- End Hero -->

<main id="main">
    <section id="our-services-slider">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item"> <img class="logoimg" src=" {{asset('assets/img/slider/PHP-logo.png')}}" /></div>
                <!-- <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/laravel-logo1.png')}}" /></div> -->
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/1.png')}}" />
                </div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/2.png')}}" /></div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/3.png')}}" /></div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/4.png')}}" /></div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/5.png')}}" /></div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/6.png')}}" /></div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/7.png')}}" /></div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/8.png')}}" /></div>
                <div class="item"> <img class="logoimg" src="{{asset('assets/img/slider/9.png')}}" /></div>
            </div>

        </div>
    </section>
    <div class="services-section">
        <h3>{{__('Our Services')}}</h3>
    </div>
    <section id="services" class="services services-home" style="padding: 8px 0;">
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="row">
                    @foreach($skillsets as $skillset)
                    <div class="column col-lg-4 col-md-6 col-sm-6 mt-4 mt-md-0">
                        <div class="box recommended">
                            <h3 style="border-bottom: 2px solid #30AD23; font-weight: bold;">{{__($skillset->title)}}
                            </h3>
                            <p class="description">{{ __($skillset->description)}}</p>
                            <div class="btn-wrap">
                                <a href="{{route('skillset.detail',$skillset->slug)}}" class="btn btn-success btn-block">{{__('View Details')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div style="margin-top:20px; text-align:center;" class="col-md-12">
                        <a class=" btn-success btn-sm View-more-resources" href="{{url(App::getLocale().'/services')}}">{{__('View more resources')}}</a>
                    </div>
                </div>

            </div>
        </section><!-- End Pricing Section -->
    </section>

    <section class="our-mission">
        <div class="container">
            <p><span>{{__('Our mission is to simplify remote hiring')}}</span> {{__('making it easy for global businesses to connect with the top tech talents')}}.</p>
        </div>
    </section>
    <!-- ======= About Section ======= -->
    <section id="about" class="about" style="background-color: rgba(227,227,227,0.4);">
        <div class="container">

            <div class="section-title">
                <h3><span>{{__('About Us')}}</span></h3>
                <p class="section-title-tagline" style="width: auto;">
                    {{__('HireTalent is a global IT firm and a project / temporary / permanent staffing solution provider for remote hires.')}}
                </p>
                <!-- <p style="width: auto;text-align:justify;">
                    {{__('We specializes in providing a direct hire, contract-to-hire, MSP staffing. Our functional expertise covers IT, Accounting, Finance, Operations, Human Resources, Insurance, Legal and Compliance, Clinical, Administrative, and Sales. Our industry expertise includes Pharmaceutical, Financial Services, Technology, Retail, Media, Retail, Hhospitality, and Consumer Goods.')}}
                </p>
                <p style="width: auto;text-align:justify;">
                    {{__('We have a network of 50k+ talents, pre-audit against their technical capabilities, language proficiency and behaviour skills Every talent in our network is pre-vetted and qualified on below parameters.')}}

                </p> -->


            </div>
            <!-- section column -->
            <div class="aboutus-column">
                <div class="aboutus-column-text">
                    <p style="width: auto; text-align:left;">
                        {{__('We are a team of 17 experts who have been in business for over 50 years of collective experience, providing a wide range of services in 7 countries and have previously worked in over 13 countries.')}}
                    </p>
                    <p style="width: auto; text-align:left;">
                        {{__('We specializes in providing a direct hire, contract-to-hire, MSP staffing.Our functional expertise covers IT, Accounting, Finance, Operations, Human Resources, Insurance,Legal and Compliance, Clinical, Administrative, and Sales.')}}
                    </p>
                    <p style="width: auto; text-align:left;">
                       {{__('We have a network of 7k+ talents, pre-audit againsts their technical capabilities, language profeiceincy and behaviour skills Every talent in our network is pre-vetted and qualified on below parameters.')}}
                    </p>
                </div>
                <div class="aboutus-column-image">
                    <div class="right-column-img">
                        <img src="{{asset('assets/img/internalpage.png')}}" alt="">
                        <p>{{__('We have a network of 7k+ talents, pre-audit againsts their technical capabilities, language proficiency and behaviour skills Every talent in our network is pre-vetted and qualified on below parameters.')}}
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="aboutus-Communication">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>{{__('Excellent Communication')}}</h3>
                    <p>{{__('Vetted through a world-leading AI-powered English communication test that assesses speaking, listening, reading, writing, pronunciation, fluency, clarity of expression, and speed of speech.')}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{__('Culturally Fit')}}</h3>
                    <p>{{__('Compatible to adapt, understand, & adjust accordingly with company\'s core values, vision, principle, identity.')}}
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>{{__('Technically Super Sound')}}</h3>
                    <p>{{__('Each candidate goes through a minimum 5-hour rigorous skill assessment curated uniquely as per the role.')}}
                    </p>
                </div>
                <div class="col-md-6">
                    <h3>{{__('Available across time zones')}}</h3>
                    <p>{{__('HireTalent network has talents working across different time zones, hence, we have someone to fit your local time zone and ready to join you in as less as 5 days.')}}
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta" style="padding: 0px;">
        <div class="container">
            <section id="faq" class="faq">
                <div class="container">
                    <div class="section-title">
                        {{-- <h2>F.A.Q</h2> --}}
                        <h3><span>{{__('Frequently Asked Questions')}}</span></h3>
                    </div>
                    <ul class="faq-list">
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                                {{__('What are the typical steps in the recruiting process?')}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                <ol class="faq-sub-list">
                                    <li class="text-white border-0">
                                        {{__('Go to services and find a suitable service for your need.')}}
                                    </li>
                                    <li class="text-white border-0">
                                        {{__('Select one of them in three categories Junior, Mid-level and senior.')}}
                                    </li>
                                    <li class="text-white border-0">
                                        {{__('Enter the required information in the form and submit your request.')}}
                                    </li>
                                </ol>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                                {{__('What is the average cost per hire?')}}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    {{__('The cost depends on how long you need the service for. According to time, we have four categories that are per hour, per day, per week and per month.')}}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                                {{__('How much time it takes to book a resource?')}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    {{__('It will take a maximum of 5 to 10 minutes to hire a resource.')}}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">
                                {{__('How long are candidates typically on the market?')}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    {{__('We have a lot of developers in the market. If developers are busy on some other project, we can manage it easily.')}}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">
                                {{__('Are resources available for on-site positions?')}}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    {{__('No, they are not but we have offices they can come to work from while working remotely on your project.')}}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">
                                {{__('Do you guys have interns also?')}} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    {{__('Yes, interns are also available.')}}
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </section><!-- End Cta Section -->
</main><!-- End #main -->


<!-- ======= Footer ======= -->
@include('frontPartial.footer')

<!-- End Footer -->
<script>
    $(document).ready(function($) {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: true,
            autoplay: true,
            autoplayTimeout: 2000,
            items: 5,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    loop: true
                },
                600: {
                    items: 2,
                    nav: true,
                    loop: true
                },
                1000: {
                    items: 5,
                    nav: true,
                    loop: true
                }
            }
        });
        var owl = $(".owl-carousel");
        owl.owlCarousel();
        $(".next-btn").click(function() {
            owl.trigger("next.owl.carousel");
        });
        $(".prev-btn").click(function() {
            owl.trigger("prev.owl.carousel");
        });
        // $(".prev-btn").addClass("disabled");
        // $(owl).on("translated.owl.carousel", function(event) {
        //     if ($(".owl-prev").hasClass("disabled")) {
        //         $(".prev-btn").addClass("disabled");
        //     } else {
        //         $(".prev-btn").removeClass("disabled");
        //     }
        //     if ($(".owl-next").hasClass("disabled")) {
        //         $(".next-btn").addClass("disabled");
        //     } else {
        //         $(".next-btn").removeClass("disabled");
        //     }
        // });
    });
</script>