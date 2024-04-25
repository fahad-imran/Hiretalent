@include('frontPartial.header')
@section('title','Services')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
<style>
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
</style>
<!-- style for show loginregistermodal -->
<style>
    .modal-backdrop.show {
        opacity: var(--bs-backdrop-opacity);
        z-index: 22;
    }

    .fade {
        opacity: 1;
    }

    .modal.fade .modal-dialog {
        transform: translate(0, 25%);
    }

    .item {
        min-height: 400px;
        margin-left: 150px;
    }

    .modal-header {
        display: inline-block !important;
    }

    /* suggestion-bar */
    .suggestion-bar {
        padding-top: 30px;
        padding-bottom: 10px;
        height: 48vh;
        text-align: center;
        color: #000000;
        font-size: 27px;
        font-weight: 600;
        text-transform: capitalize;
        margin-top: 30px;
    }

    .suggestion-bar p {
        margin-bottom: 0px;
    }

    .suggestion-bar a {
        margin-left: 5px;
        color: black;
        text-decoration: underline !important;
        text-transform: lowercase;
        display: inline-block !important;
    }

    .suggestion-bar a:hover {
        cursor: pointer !important;
    }

    /* submit suggestions */
    .suggestion-modal {
        color: #000000;
        text-align: center;
        font-size: 20px;
        font-weight: 600;
    }

    .clickhere-btn {
        font-size: 26px;
        background-color: #9CCB00;
        color: white !important;
        padding: 5px 20px;
        border-radius: 50px;
    }

    #hero {
        height: 9vh;

    }

    .fa-solid,
    .fas {
        font-weight: 900;
        color: green;
        font-size: 61px;
    }
</style>

<body>
    <section id="hero" style=" margin:auto;">
        <div class="hero-container mt-5" style="margin:auto;">
            {{-- <h3 style="background:transparent " class="services-title">Services</h3> --}}
            <div class="what-we-offer mt-5">
                <!-- <h1>{{__('WHAT WE OFFER')}}</h1> -->
                <h2 style="background:transparent;">
                    <!-- {{__('Explore the 50k+ Strong pre-audit talent from all over the world.')}} -->
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 suggestion-bar">
                <h2><i class="fa-solid fa-check"></i></h2>
                <h3>{{__('Booking Confirm')}}</h3>
                <h4>{{__("Your request has been received. We will contact you shortly. If your query is urgent, please email us at info@hiretalent.cz or call us. Thank you.")}}</h4>
            </div>
        </div>
    </div>


</body>

@include('frontPartial.footer')