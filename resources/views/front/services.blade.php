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
</style>

<body>
    <section id="hero" style=" margin:auto;">
        <div class="hero-container mt-5" style="margin:auto;">
            {{-- <h3 style="background:transparent " class="services-title">Services</h3> --}}
            <div class="what-we-offer mt-5">
                <h1>{{__('WHAT WE OFFER')}}</h1>
                <h2 style="background:transparent;">
                    {{__('Explore the 50k+ Strong pre-audit talent from all over the world.')}}
                </h2>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 suggestion-bar">
                <p>{{__('If your required skillset is not listed, please')}} <a href="JavaScript:Void(0);" id="click-here" class="clickhere-btn" style="text-decoration:none !important;">{{__('click here')}}</a></p>
            </div>
        </div>
    </div>
    <!-- submit suggetion modal start here -->
    <div id="submitSuggetion" class="modal" data-easein="perspectiveRightIn" tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close closeSubmitSuggModal" data-dismiss="modal" aria-hidden="true">
                        ×
                    </button>
                    <h4 class="modal-title suggestion-modal">
                        {{__('Submit Suggestion')}}
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="error_container" {{count($errors) ? '' : 'hidden'}}>
                        <div class="error_wrapper">
                            <ul id="error_list">
                                @if(count($errors))
                                @foreach($errors->all() as $error)
                                <li class="error">{{$error}}</li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <form id="suggetion-form" action="{{route('submit.own.skillset')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Skillset Title')}}</label>
                                    <input type="text" name="title" class="form-control" placeholder="{{__('Title')}}">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('Year of Experience')}}</label>
                                    <input type="number" name="year_of_experince" class="form-control" placeholder="{{__('1 year or 2 year')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('From Date')}}</label>
                                    <input type="text" class="form-control datepicker" autocomplete="off" id="from_date" name="from_date" />
                                    <p class="err_text"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{__('To Date')}}</label>
                                    <input type="text" class="form-control datepicker" autocomplete="off" id="to_date" name="to_date" />
                                    <p class="err_text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{__('Description')}}</label>
                                    <textarea class="form-control" name="description" id="description" id="form4Example3" placeholder="{{__('Add comments here...')}}" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-md float-end mb-3 mt-5" id="suggetion-submit">{{__('Submit')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- submit suggetion modal ended here -->
    <section id="services" class="services">
        <section id="pricing" class="pricing">
            <div class="container">
                <div class="row">
                    @foreach($skillsets as $skillset)
                    <div class="column col-lg-4 col-md-6 col-sm- mt-4 mt-md-0">
                        <div class="box recommended">
                            <h3 style="border-bottom: 2px solid #30AD23">{{__($skillset->title)}}</h3>
                            <p class="description">{{__($skillset->description)}}</p>
                            <div class="btn-wrap">
                                <a href="{{url(App::getLocale().'/service',$skillset->slug)}}" class="btn btn-success btn-block">{{__('View Details')}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Pricing Section -->
    </section><!-- End Services Section -->
</body>

@include('frontPartial.footer')
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
    jQuery(document).ready(function() {
        jQuery("#click-here").click(function() {
            var AuthUser = "{{{ (Auth::user()) ? Auth::user() : null }}}";
            if (AuthUser) {
                $("#submitSuggetion").modal('show');
                $('.closeSubmitSuggModal').click(function() {
                    $('#submitSuggetion').delay(350).fadeOut('slow').modal('hide');
                })
            } else {
                $("#myModal").modal('show');
                $(".closeMainModal").click(function(){
                $('#myModal').delay(350).fadeOut('slow').modal('hide');
            })
            }
        })
    })
</script>
<script>
    $(document).ready(function() {
        $("#suggetion-submit").click(function(e) {
            $("#suggetion-form").validate({
                rules: {
                    title: {
                        required: true,
                    },
                    year_of_experince: {
                        required: true,
                    },
                    from_date: {
                        required: true,
                    },
                    to_date: {
                        required: true
                    },
                    description: {
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    title: {
                        required: "{{__('This field is required.')}}",
                    },
                    year_of_experince: {
                        required: "{{__('This field is required.')}}",
                    },
                    from_date: {
                        required: "{{__('This field is required.')}}",
                    },
                    to_date: {
                        required: "{{__('This field is required.')}}",
                    },
                    description: {
                        required: "{{__('This field is required.')}}",
                        minlength: "{{__('Please enter at least 10 characters.')}}",
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }


            });


        })
    });
</script>
<script>
    @if(Session::has('message'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('message') }}");
    @endif
</script>