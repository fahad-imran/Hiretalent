@include('frontPartial.header')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
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

    .modal-header p {
        text-align: right;
    }

    .modal-price {
        text-align: right;
    }

    .modal-body label {
        font-size: 15px;
        color: #000000 !important;
    }

    .modal-body li,
    .modal-body p {
        font-size: 11px;
        font-weight: 700;
        text-transform: capitalize;

    }

    .modal-body li {
        list-style: none;

    }

    .fa-ul {
        margin-left: 10px !important;
    }

    .modal-body li::before {
        font-family: "Font Awesome 6 Free";
        font-weight: 900;
        content: "\f00c";
        margin-right: 5px;
        color: #000000;
        position: absolute;
        left: -5px;

    }

    .far::before {
        display: none;
    }

    .skillset-offered b {
        width: 40%;
        display: inline-block;

    }

    .skillset-offered li {
        padding-left: 10px;
        display: flex;
    }

    .skillset-offered span {
        width: 60%;
    }

    .expertise-feature li {
        padding-left: 10px;
    }

    .modal-datepicker {
        display: block !important;
    }
</style>
<style>
    /* Inspired by https://dribbble.com/shots/6544191-Radio-Buttons */
    *,
    *::before *::after {
        box-sizing: border-box;
    }

    .radios {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        flex-wrap: wrap;
    }

    @media (max-width: 640px) {
        .radios {
            flex-direction: column;
        }
    }

    .radio input {
        position: absolute;
        pointer-events: none;
        visibility: hidden;
        display: none;
    }

    .radio {
        margin: 0 !important;
    }

    .radio label {
        color: rgb(68, 68, 68) !important;
        font-weight: 700 !important;
        font-size: 11px !important;
    }

    .radio input:focus+label {
        background: #eef;
    }

    .radio input:focus+label .checker {
        border-color: #66f;
    }

    .radio input:checked+label .checker {
        box-shadow: inset 0 0 0 6px #000000;
    }

    .radio label {
        display: flex;
        align-items: center;
        height: 28px;
        border-radius: 14px;
        padding: 0 8px 0 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .radio label:hover {
        background: #eef;
    }

    .radio label:hover .checker {
        box-shadow: inset 0 0 0 2px #66f;
    }

    .radio .checker {
        width: 18px;
        height: 18px;
        border-radius: 50%;
        margin-right: 8px;
        box-shadow: inset 0 0 0 2px #ccc;
        transition: box-shadow 0.3s ease;
    }

    .clearCSS {
        display: none;
    }

    .form-group.row.enter-desired-hours {
        margin-top: 30px;
    }

    small.discount {
        margin-top: -18px;
        color: #b5523c;
    }

    a.term-condition {
        text-decoration: underline !important;
    }

    a.term-condition:hover {
        text-decoration: none !important;
    }

    span.text-dark.to_date_err.text-danger {
        color: #a94442 !important;
    }
</style>
<style>
    label#email-error {
        color: red !important;
        font-size: 11px;
    }

    label#password-error {
        color: red !important;
        font-size: 11px;
    }

    .pricing ul {
        list-style: disc !important;
        text-align: left !important;

    }

    .pricing ul li {
        padding-bottom: 0px !important;
    }

    @media (max-width: 640px) {
        .radios {
            flex-direction: row;
        }
    }

    a.privacy-policy {
        text-decoration: underline !important;
    }

    .alert-dismissible .btn-close {
        position: absolute;
        top: 6px;
        right: 0;
        z-index: 2;
        padding: 1.25rem 1rem;
    }

    .after-ajax-call {
        display: none !important;
    }

    .modal-open .modal-datepicker {
        display: block;
    }

    .swal2-popup.swal2-modal.swal2-icon-success.swal2-show {
        width: 850px;
    }

    div#swal2-content {
        font-size: 20px;
        font-weight: 00;
        font-family: 'Poppins', sans-serif;
        text-align: justify;
    }

    button.swal2-confirm.swal2-styled {
        font-size: 20px;
    }

    button.swal2-confirm.swal2-styled {
        background: #5cb85c;
    }
</style>

<body>


    <section id="hero" style="margin:auto;">
        <div class="hero-container mt-5" style="margin:auto;">
            <h1 class="mt-5">{{__($job->title)}}</h1>
            <h2 style="background:transparent;">{{__($job->description)}}</h2>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="successalert" class="" role="alert" style="display: none;">
                        <strong style="font-size: 15px;" id="successMessage"></strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="pricing" class="pricing pricing-box" style="margin-top: -45px ;">
        <div class="container">
            <div class="row">
                @foreach($jobExpertise as $expertise)
                <div class="column col-lg-4 col-md-6 mt-4 mt-md-0" style=" text-align: inherit !important; ">
                    <div class="box recommended" style="min-height:500px !important; height:100%;">
                        <p style="margin-top:10px;text-align: center; font-weight: bold; font-size: 18px;color:#000000;">
                            {{ __($expertise->name)}}
                        </p>

                        <div class="" style="padding-top: 10px;border-top: 1px solid #30AD23;margin-left:10px;margin-right:10px;">
                            <div class="col-md-12">
                                <p style="padding-top:10px; text-align: center;margin-left:10px;margin-right:10px;  font-weight: normal; font-size: 15px">
                                    {{ __($expertise->description)}}
                                </p>
                            </div>
                        </div>

                        <div class="" style="border-top: 1px solid #30AD23; padding-top: 10px; margin-left:10px;margin-right:10px;">
                            <div class="col-md-6">
                                <ul>
                                    <li><b>€{{ __($expertise->price_hr)}}</b><span> / {{__('hour')}}</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><b>€ {{ __($expertise->price_day) }}</b><span> / {{__('day')}}</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><b>€ {{ __($expertise->price_week) }}</b><span> /{{__('week')}}</span></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><b>€ {{ __($expertise->price_month)}}</b><span> / {{__('month')}}</span></li>
                                </ul>
                            </div>
                        </div>

                        <div class="" style="border-top: 1px solid #30AD23; padding-top: 10px; margin-left:10px;margin-right:10px;">
                            <div class="col-md-12">
                                <p style="margin-top:0;font-weight: bold; font-size: 15px">{{__('Skills:')}}</p>
                            </div>
                            @foreach($expertise->expertise_skills as $exp_skill)
                            <div class="col-md-6" style="padding-bottom: 5px;">
                                <ul>
                                    <li><b>{{__($exp_skill->skills->name)}}</b><span>
                                            {{__($exp_skill->levels->description)}}</span>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>

                        <div class="" style="border-top: 1px solid #30AD23; padding-top: 10px; margin-left:10px;margin-right:10px;">
                            <div class="col-md-12">
                                <p style="margin-top:0;font-weight: bold; font-size: 15px">{{__('Features:')}}</p>
                            </div>
                            @foreach($expertise->features as $feature)
                            <div class="col-md-12">
                                <ul>
                                    <li>{{__($feature->feature)}}</li>
                                </ul>
                            </div>
                            @endforeach
                        </div>


                        <div class="btn-wrap " style="margin-top:auto;">
                            <button type="button" data-id="{{$expertise->id}}" class="btn btn-success btn-block click">{{__('Book Now')}}</button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- code for modal starts here -->
        <div class="modal" id="popup-modal">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close pricingModal" data-dismiss="modal" aria-hidden="true">
                            ×
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="row content mb-3">
                            <div class="col-md-6 col-sm-8 col-xs-8">
                                <h4 class="modal-title" id="job_title" style="color: #000000;font-szie:15px !important;font-weight: 600;">{{ __('Login') }}
                                </h4>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-4">
                                <P style="color: #000000;font-szie:15px !important;font-weight: 600;" id="proffency">
                                    Mid-level</P>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 skillset-offered">
                                <label>{{__('Skills Offered')}}</label>
                                <ol class="fa-ul" id="skills_offered"></ol>
                                <hr>
                            </div>
                            <div class="col-md-6 expertise-feature">
                                <label>{{__('Expertise Features')}}</label>
                                <ol class="fa-ul" id="feature">
                                </ol>
                                <hr>
                            </div>
                        </div>
                        <!-- </div> -->
                        <div class="row">
                            <div class="col-md-12">
                                <form id="requestformsubmit">
                                    @csrf
                                    <input type="hidden" class="form-control" value="{{Auth::user()->id ?? null}}" name="user_id" id="user_id" />
                                    <input type="hidden" class="form-control" id="job_id" name="job_id" />
                                    <input type="hidden" class="form-control" id="expertise_id" name="expertise_id" />
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="radios">
                                                <div class="radio" id="radioBtnDiv">
                                                    <input type="radio" id="radio1" value="Hourly" class="radiovalue" name="radio1[]">
                                                    <label for="radio1">
                                                        <div class="checker"></div>
                                                        {{__('Hourly')}}
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <input type="radio" id="radio2" value="Daily" class="radiovalue" name="radio1[]">
                                                    <label for="radio2">
                                                        <div class="checker"></div>
                                                        {{__('Daily')}}
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <input type="radio" id="radio3" value="Weekly" class="radiovalue" name="radio1[]">
                                                    <label for="radio3">
                                                        <div class="checker"></div>
                                                        {{__(' Weekly')}}
                                                    </label>
                                                </div>

                                                <div class="radio">
                                                    <input type="radio" id="radio4" value="Monthly" class="radiovalue" name="radio1[]">
                                                    <label for="radio4">
                                                        <div class="checker"></div>
                                                        {{__('Monthly')}}
                                                    </label>
                                                </div>
                                            </div>
                                            <span class="rate_err text-danger"></span>
                                        </div>

                                    </div>
                                    <div class="form-group row  enter-desired-hours">
                                        <div class="col-md-6">
                                            <label class="hourlyInputField" style="display: none;">{{__('How many hours?')}}</label>
                                            <input type="number" min="4" value="4" class="form-control hourlyInputField clearCSS " id="desired-hour" />
                                        </div>
                                        <div class="desired_err text-danger"></div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label>{{__('From Date')}}</label>
                                            <input type="text" id="from_date" class="form-control datepicker modal-datepicker " autocomplete="off">
                                            <div class=" from_date_err text-danger"></div>
                                            <label>{{__('To Date')}}</label>
                                            <input type="text" id="to_date" class="form-control datepicker modal-datepicker" autocomplete="off">
                                            <span class="text-dark to_date_err text-danger"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <label>{{__('Description')}}</label>
                                            <textarea class="form-control" name="requestdescription" placeholder="{{__('Description')}}" id="requestdescription" id="form4Example3" rows="4"></textarea>
                                            <div class="requestdescription_err text-danger"></div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input " type="checkbox" name="consent" id="terms">
                                            <label class="form-check-label" for="terms">
                                                {{__('Agree to')}} <a target="_blank" class="term-condition" href="{{route('term.condition')}}">{{__('Terms and conditions')}}</a> {{__('and')}}
                                                <a href="{{route('privacy.policy')}}" class="privacy-policy" target="_blank">
                                                    {{__(' Privacy policy')}}</a>
                                            </label>
                                            <div class="aggree_err text-danger"></div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success p-3 btn-sm-block mb-4 float-end" id="submitBtn">{{__('Send Request')}}</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- code for modal ended here -->



    </section>
</body>
@include('frontPartial.footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    let today = new Date();
    today.setDate(today.getDate() + 1);
    $('.datepicker').datepicker({

        startDate: today,
        autoclose: true

    });
</script>
<script>
    $(document).ready(function() {
        $(".click").click(function() {
            var id = $(this).data("id");

            //code when clcik on book now button then reset all form
            $("#requestformsubmit").trigger("reset");
            $('.hourlyInputField').css('display', 'none');
            //code for reset jquery datepicker clander after click on book now button
            var $dates = $('#from_date, #to_date').datepicker();
            $dates.datepicker('setDate', null);
            //code ended

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{route('expertise.featur')}}",
                type: 'GET',
                dataType: "JSON",
                data: {
                    id: id
                },
                dataType: "JSON",
                success: function(response) {
                    var loggedIn = "{{{ (Auth::user()) ? Auth::user() : null }}}";
                    if (loggedIn) {
                        $("#popup-modal").modal('show');
                        // code for job table start here
                        $("#job_title").text('');
                        $("#job_title").text(response.title);
                        //  $("#job_title").text(response.job[0].title);
                        // console.log(response.expertise_name);
                        // code for job table ended here

                        //expertise table start here
                        $("#proffency").html('');
                        $("#expertise_id").val(response.expertise.id)
                        $("#proffency").html(response.expertise_name);
                        $("#price").html('');
                        $("#price").html(response.expertise.price + ',' + 'Months');
                        $("#description").html('');
                        $("#description").html(response.expertise.description);
                        $("#job_id").val(response.expertise.job_id);
                        //code for expertise table ended here

                        $("#skills_offered").empty();
                        $.each(response.skillsets, function(key, value) {
                            $("#skills_offered").append('<li><b>' + value.skill +
                                '</b> &emsp;<span>' + value.level + '</span></li>');
                        });
                        $("#feature").empty();
                        $.each(response.features, function(key, value) {
                            $("#feature").append(
                                '<li><span class="fa-li"><i class="far fa-square"></i></span>' +
                                value.feature + '</li>');
                        });
                    } //if ended here
                    else {
                        $("#myModal").modal('show');
                        $(".closeMainModal").click(function() {
                            $('#myModal').delay(350).fadeOut('slow').modal('hide');
                        })
                    }

                    $(".pricingModal").click(function() {
                        $('#popup-modal').delay(350).fadeOut('slow').modal('hide');
                    })
                    //else ended here
                },
                error: function(xhr) {
                    alert("some thing went to wrong");
                }
            });


        }) //click function code ended here
    }); //main ended here
</script>
<script>
    //code for radio button
    $(".radio").change(function(e) {
        e.preventDefault();
        var val = $("#radio1:checked").val();
        if (val) {
            $(".hourlyInputField").css('display', 'block');
        } else {
            $(".hourlyInputField").css('display', 'none');
        }
        $("#desired-hour").val('');

    });

    //focus on input after one time ajax call

    $('#requestformsubmit').submit(function(e) {
        e.preventDefault();
        var user_id = $("#user_id").val();
        var expertise_id = $("#expertise_id").val();
        var job_id = $("#job_id").val();
        var to_date = $("#to_date").val();
        var em_form_date = $("#from_date").val();
        var rate_type = $("input[name='radio1[]']:checked").val();
        var hours = $("#desired-hour").val();
        var requestdescription = $.trim($("#requestdescription").val());

        var chk = true;
        $('.aggree_err').html('');
        $(".requestdescription_err").html('');
        $('.to_date_err').html('');
        $('.from_date_err').html('');
        $('.rate_err').html('');
        $('.desired_err').html('');
        if ($('#terms').is(':checked') == false) {
            $('.aggree_err').html("{{__('By signing up, you must accept our terms and conditions!')}}");
            chk = false;
        }
        if (requestdescription == '') {
            $(".requestdescription_err").html("{{__('This Description Field is Required')}}");
            chk = false;
        }
        if (to_date == '') {
            $('.to_date_err').html("{{__('The To Date Field is Required')}}");
            chk = false;
        }
        if (em_form_date == '') {
            $('.from_date_err').html("{{__('The From Date Field is Required')}}");
            chk = false;
        }
        if (!$("input[name='radio1[]']:checked").val()) {
            $('.rate_err').html("{{__('You must be selected one option')}}");
            chk = false;
        }
        if ($("input[name='radio1[]']:checked").val() == "Hourly") {
            if (hours < 4) {
                $('.desired_err').html("{{__('Value must be greater than 3.')}}");
                chk = false;
            }

        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        //code for ajax start here
        if (chk) {
            $.ajax({
                url: "{{ route('store.employee.request')}}",
                type: 'GET',
                dataType: "json",
                data: {
                    user_id: user_id,
                    expertise_id: expertise_id,
                    job_id: job_id,
                    to_date: to_date,
                    em_form_date: em_form_date,
                    hours: hours,
                    rate_type: rate_type,
                    requestdescription: requestdescription,
                },
                beforeSend: function(xhr) {
                    $("#submitBtn").html("{{__('Sending')}}");
                },
                success: function(response) {
                    // $("#successalert").css('dispaly', 'block');
                    // $("#successalert").addClass('alert alert-success alert-dismissible fade show');
                    // $("#successMessage").empty();
                    // $("#successMessage").html('Your request has been received. We will contact you shortly. If your query is urgent,please email us at <a href="mailto:info@itgs.ie">info@itgs.ie</a> or call us. Thank you.');
                    // //b/c we show session message
                    // location.href += location.href.substr(location.href.length - 1)=='/'?"booking-ok":"/booking-ok";
                    //  window.history.pushState("object or string", "Title", location.href+"/booking-ok");

                    //code for swal alert
                    // Swal.fire({
                    //     title: "{{__('Booking Confirm')}}",
                    //     icon: 'success',
                    //     text: '{{__("Your request has been received. We will contact you shortly. If your query is urgent, please email us at info@hiretalent.cz or call us. Thank you.")}}',
                    //     type: "primary",
                    // })
                    //code ended for swal alert ended
                    var local = "{{ config('app.locale') }}";
                    console.log(local);
                    // if (local == 'en') {
                    //     console.log("this check for english language  " + local);
                    //     window.location.href = "/booking-ok";
                    // } else {
                    //     console.log("this check for CZ language " + local);
                    //    // window.location.href = "/booking-ok";
                    //    console.log(baseUrl);

                    // }

                    window.location.href = window.location.origin+'/'+ local+"/booking-ok";
                    // console.log( window.location.href)

                    //toastr.options.positionClass = 'toast-top-right';
                    //toastr.success(response.message);

                    $('#requestformsubmit')[0].reset();
                    $('#popup-modal').modal('hide');
                    $('.datepicker.datepicker-dropdown.dropdown-menu.datepicker-orient-left.datepicker-orient-top').css('display', 'none');
                    //code for clear desired hour empty
                    $("#desired-hour").val('');
                    $('.hourlyInputField').css('display', 'none');
                    //code for reset jquery datepicker clander after ajax success response
                    var $dates = $('#from_date, #to_date').datepicker();
                    $dates.datepicker('setDate', null);
                },
                complete: function(response) {
                    $("#submitBtn").html('Send Request');
                }
            });
        }

    });
</script>