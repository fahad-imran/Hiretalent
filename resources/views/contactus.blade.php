@include('frontPartial.header')
<style>
    .invalid-feedback {
        /* display: none; */
        width: 100%;
        margin-top: 0.25rem;
        font-size: .875em;
        color: #dc3545;
    }
</style>

<body>


    <!-- ======= Contact Section ======= -->
    <section id="hero" style="margin:auto;">
        <div class="hero-container mt-5 ">
            <!-- <h3 style="background:transparent">Contact</h3> -->
            <h1>{{__('Contact Us')}}</h1>
            <h2 style="background:transparent;"> {{__('Need to get in touch with us? Fill in the form or either call at the given number.')}}</h2>
        </div>
    </section>
    <section id="contact" class="contact">
        <div class="container">

            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <img src="{{asset('assets/img/icon/contact/location.png')}}" alt="">
                            <h4>{{__('Location:')}}</h4>
                            <p> <span style=" font-weight: bold;">{{__('CZECH REPUBLIC')}}</span> : {{__('Vlkova 36, Praha 3, 13000, Czech republic')}}</p><br>
                            <p><span style=" font-weight: bold;">{{__('IRELAND')}}</span> : {{__('85 Terenure Road North, Dublin 6W, D6W E363, Ireland')}}</p>

                        </div>

                        <div class="email">
                            <img src="{{asset('assets/img/icon/contact/email.png')}}" alt="">
                            <h4>Email:</h4>
                            <p><a href="mailto:Info@hiretalent.cz">Info@hiretalent.cz</a></p>
                        </div>

                        <div class="phone">
                            <img src="{{asset('assets/img/icon/contact/phone.png')}}" alt="">
                            <h4>{{__('Call:')}}</h4>
                            <p><a href="tel:+420774942355">+420774942355</a></p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="{{route('store.contact.us')}}" method="post" role="form" id="contact-us" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control " id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit" id="contact-submit">{{__('Send a message')}}</button></div>
                    </form>

                </div>

            </div>
            <div class="mt-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1191.9060832768125!2d-6.284159200214661!3d53.310810124774065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670bf5ec6e6f1b%3A0x623ceee482b45353!2s6w%2C%2085%20Terenure%20Rd%20N%2C%20Terenure%2C%20Dublin%206W%2C%20Co.%20Dublin%2C%20D6W%20E363%2C%20Ireland!5e0!3m2!1sen!2s!4v1674633410524!5m2!1sen!2s" width="100%" height="270px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                <!-- <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
            </div>

        </div>
    </section><!-- End Contact Section -->

    @include('frontPartial.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#contact-us').validate({
                rules: {
                    name: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    subject: {
                        required: true,
                    },
                    message: {
                        required: true,
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