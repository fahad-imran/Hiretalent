<footer id="footer">
    <div class="footer-top">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-links">
                    <img style="max-width: 200px;" src="{{asset('assets/img/logo/footerlogo.png')}}" alt="">
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <p>
                        <span style=" font-weight: bold;">{{__('CZECH REPUBLIC')}}</span> :
                        {{__('Vlkova 36, Praha 3, 13000, Czech republic')}}
                    </p>
                    <p class="mt-2"> <span style=" font-weight: bold;">{{__('IRELAND')}}</span> :
                        {{__('85 Terenure Road North, Dublin 6W, D6W E363, Ireland')}}
                    </p>
                    <br>
                    <span>{{__('Phone')}}:</span> <a href="tel:+420774942355">+420774942355</a><br>
                    <span>{{__('Email')}}:</span> <a href="mailto:Info@hiretalent.cz">Info@hiretalent.cz</a><br>

                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{__('Useful Links')}}</h4>
                    <ul>
                        <li><a href="{{url('/')}}">{{__('Home')}}</a></li>
                        <li><a href="{{url(App::getLocale().'/services')}}">{{__('Services')}}</a>
                        </li>
                        <li> <a href="{{url(App::getLocale().'/contact')}}">{{__('Contact')}}</a>
                        </li>
                        <li> <a href="{{url(App::getLocale().'/terms-conditions')}}">{{__('Terms of Conditions')}}</a></li>
                        <li> <a href="{{url(App::getLocale().'/privacy-policy')}}">{{__('Privacy policy')}}</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{__('Our Services')}}</h4>
                    <ul>
                        @foreach(App\Models\Job::inRandomOrder()->limit(5)->get() as $ser)
                        <li><a href="{{url(App::getLocale().'/service/'.$ser->slug)}}">{{__($ser->title)}}</a></li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>

</footer>
<div class="footer-bottom">
    <div class="container  py-5">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; <?php echo date("Y"); ?> <span>{{__('HireTalent')}}</span>
                        {{__('All Rights Reserved')}}.
                    </div>

                </div>
            </div>
            <div class="col-md-4 text-center text-white">
                {{__('Developed By')}} <a href="https://itgs.ie/" target="_blank"><span class="text-success"><img style="width:150px;" src="{{asset('assets/img/logo/itgs-logo.png')}}" alt=""></span></a>

            </div>

            <div class="col-md-4">
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a target="_blank" href="https://www.facebook.com/profile.php?id=100089448731559" class="facebook"><img src="{{asset('assets/img/icon/footer/facebook.png')}}" alt=""></a>
                    <a href="https://www.instagram.com/hiretalenteurope/?igshid=YmMyMTA2M2Y" target="_blank" class="instagram"><img src="{{asset('assets/img/icon/footer/instagram.png')}}" alt=""></a>
                    <a href="https://www.linkedin.com/company/hiretalent-cz/?viewAsMember=true" target="_blank" class="linkedin"><img src="{{asset('assets/img/icon/footer/linkedin.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</div>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


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
<!-- <script src="node_modules/intl-tel-input/build/js/intlTelInput.js"></script> -->
<!-- End owl Carusel js -->
<!-- Begin  js Sweet alert   -->
<!-- input maskking -->
<!--<script type="text/javascript" src="{{asset('assets/js/jquery.inputmask.bundle.js')}}"></script>-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
<!-- End js sweet alerlt -->

<script src="{{asset('build/js/intlTelInput.js')}}"></script>
<script src="{{asset('build/js/utils.js')}}"></script>
<script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        //  allowDropdown: false,
        autoHideDialCode: true, //this is live comment 
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        //  excludeCountries: ["us"],
        //  formatOnDisplay: false,
        //   geoIpLookup: function(callback) {
        //     $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //       var countryCode = (resp && resp.country) ? resp.country : "";
        //       callback(countryCode);
        //     });
        //   },
        initialCountry: "auto",
        geoIpLookup: function(callback) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "us";
                // success(countryCode);
                callback(countryCode);
            });
        },


        //hiddenInput: "full_number",
        //  initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        //  nationalMode: false,
        //  onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        //  placeholderNumberType: "MOBILE",
        //   preferredCountries: ['cn', 'jp'],
        //separateDialCode: true,
        // utilsScript: '../../build/js/utils.js?9c785d029a462dfe51ca408acf9bba982dab4bac226dba25d093e391',
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js',
        //utilsScript: "{{asset('build/js/utils.js')}}",
    });


    var input = document.querySelector("#phone"),
        errorMsg = document.querySelector("#error-msg"),
        validMsg = document.querySelector("#valid-msg");

    // here, the index maps to the error code returned from getValidationError - see readme
    var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

    // initialise plugin
    var iti = window.intlTelInput(input, {
        utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js'
        // https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js
    });

    var reset = function() {
        input.classList.remove("error");
        errorMsg.innerHTML = "";
        errorMsg.classList.add("hide");
        validMsg.classList.add("hide");
    };

    // on blur: validate
    input.addEventListener('blur', function() {
        reset();
        if (input.value.trim()) {
            if (iti.isValidNumber()) {
                validMsg.classList.remove("hide");
            } else {
                input.classList.add("error");
                var errorCode = iti.getValidationError();
                errorMsg.innerHTML = errorMap[errorCode];
                errorMsg.classList.remove("hide");
            }
        }
    });

    // on keyup / change flag: reset
    input.addEventListener('change', reset);
    input.addEventListener('keyup', reset);
    //code for validate
    // $('#phone').on('keydown', function(e) {
    //     var regex = new RegExp("^[0-9\b]+$");
    //     var key = String.fromCharCode(!e.charCode ? e.which : e.charCode);
    //     if (!regex.test(key)) {
    //         e.preventDefault();
    //         return false;
    //     }
    // })
</script>



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
    $(function() {

        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            $('.forgot-password').css('display', 'block');

            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            $('.forgot-password').css('display', 'none');
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
                        required: "{{__('Please fill in your email')}}",
                        email: "{{__('Email must be a valid email address')}}",
                    },
                    password: {
                        required: "{{__('Please fill in your password')}}",
                        minlength: "{{__('Password must be at least 8 characters')}}"
                    }
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group-1').append(error);
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
    $(document).ready(function() {
        $("#register-form").click(function(e) {
            document.getElementById("login-form").reset();
            if ($('#error-msg').text() != '') {
                e.preventDefault();
                return false;
            }
            $("#register-form").validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 8,
                    },
                    password_confirmation: {
                        required: true,
                        minlength: 8,
                        equalTo: "#password-reg"
                    },
                    phone: {
                        required: true
                        //contact: {matches:"[0-9]+",minlength:10, maxlength:10}
                    },
                    consent: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "{{__('Please fill in your name.')}}",

                    },
                    email: {
                        required: "{{__('Please fill in your email.')}}",
                    },
                    password: {
                        required: "{{__('Password is required')}}",
                        minlength: "{{__('Password must be at least 8 characters')}}"
                    },
                    password_confirmation: {
                        required: "{{__('Password Confirmation is required')}}",
                        equalTo: "{{__('Password does not match')}}"
                    },
                    phone: {
                        required: "{{__('You must need to enter phone number')}}"
                    },
                    consent: {
                        required: "{{__('You must need to agree to our T&C and Privacy Policy')}}"
                    }

                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group-1').append(error);
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

<!-- Input Masking -->
<script type="text/javascript">
    //   $(":input").inputmask();
    // $("#contact").inputmask({
    //   "mask": "0-999999999"
    //});
</script>
<script>
    $(document).ready(function() {
        var startTimer;
        $('#email').on('keyup', function() {
            clearTimeout(startTimer);
            let email = $(this).val();
            startTimer = setTimeout(checkEmail, 500, email);
        });

        $('#email').on('keydown', function() {
            clearTimeout(startTimer);
        });

        function checkEmail(email) {
            $('#email-error').remove();
            if (email.length > 1) {
                $.ajax({
                    type: 'post',
                    url: "{{ route('checkEmail') }}",
                    data: {
                        email: email,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        if (data.success == false) {
                            $('#email').after('<div id="email-error" style="font-size:.875em" class="text-danger" <strong>' + data.message + '<strong></div>');
                            $("#register-submit").prop('disabled', true);
                        } else {
                            $("#register-submit").prop('disabled', false);
                        }

                    }
                });
            } else {
                $("#register-submit").prop('disabled', false);
            }
        }
    });
</script>







<script>
    //code for show fail messages i.e your Credential dose not match our records when user login
    @if(Session::has('fail'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "showDuration": "30000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
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

<script type="text/javascript">
    var url = "{{ url('language') }}";

    $(".changeLang").change(function() {
        window.location.href = url + "?lang=" + $(this).val();
    });
</script>


<script>
    const togglePassword = document.querySelector('.togglePassword');
    const password = document.querySelector('#password');
    const icon = togglePassword.querySelector('i');

    if (!togglePassword || !password || !icon) {
        console.error('One or more elements not found.');
    } else {
        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            // toggle the icon
            icon.classList.toggle('fa-eye');
            icon.classList.toggle('fa-eye-slash');
        });
    }
</script>

<script>
    // code for register passwor
    const togglePassword1 = document.querySelector('.togglePassword-reg');
    const password1 = document.querySelector('#password-reg');
    const icon1 = togglePassword1.querySelector('i');

    if (!togglePassword1 || !password1 || !icon1) {
        console.error('One or more elements not found.');
        alert('icon not found!')
    } else {
        togglePassword1.addEventListener('click', function(e) {
            // toggle the type attribute
            const type1 = password1.getAttribute('type') === 'password' ? 'text' : 'password';
            password1.setAttribute('type', type1);

            // toggle the icon
            icon1.classList.toggle('fa-eye');
            icon1.classList.toggle('fa-eye-slash');
        });
    }
</script>


<script>
    const togglePassword11 = document.querySelector('.togglePassword-conform');
    const password11 = document.querySelector('#confirm-password');
    const icon11 = togglePassword1.querySelector('i');

    if (!togglePassword11 || !password11 || !icon11) {
        console.error('One or more elements not found.');
        alert('icon not found!')
    } else {
        togglePassword11.addEventListener('click', function(e) {
            // toggle the type attribute
            const type11 = password11.getAttribute('type') === 'password' ? 'text' : 'password';
            password11.setAttribute('type', type11);

            // toggle the icon
            icon11.classList.toggle('fa-eye');
            icon11.classList.toggle('fa-eye-slash');
        });
    }
</script>

</body>

</html>