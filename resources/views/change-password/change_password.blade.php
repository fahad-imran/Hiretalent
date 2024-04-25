@include('frontPartial.header')
<style>
    #selector select option {
        color: #333;
        position: relative;
        top: 5px;
    }

    /*==================================================
remove the original arrow in select option dropdown
==================================================*/

    #selector {
        margin: 5px 10%;
        width: 15%;
    }

    select {
        -webkit-appearance: none;
        -moz-appearance: none;
        -o-appearance: none;
        appearance: none;
    }

    select.input-lg {
        height: 50px !important;
        line-height: 25px !important;
    }

    .profile-select-field {
        position: relative;
    }

    .profile-select-field i {
        position: absolute;
        right: 10px;
        top: 28%;
    }
    .passwordChangeClass{
        display: flex;
        gap: 20px;
        align-items: center;
    }
</style>
<section id="hero" style="min-height:350px !important; margin:auto; height:auto !important">
    <div class="hero-container mt-5" style="margin:auto;">
        {{-- <h3 style="background:transparent " class="services-title">Services</h3> --}}
        <div class="what-we-offer mt-5">
            <h1>{{__('Profile')}}</h1>
        </div>
    </div>
</section>
<div class="container" style="width: 750px">
    <!-- User Card starts-->
    <div class="col-md-12">
        <div class="card user-card mt-5 mb-5">
            <div class="card-body">
                <div class="row ">
                    <div class="col-xl-8 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                        <div class="user-avatar-section">
                            <div class="justify-content-start">
                                <div class="d-flex flex-column ml-1 width_full">
                                    <div class="user-info mb-1">
                                        <div class="user_display">
                                        </div>
                                        <form class="form-validate" method="POST" action="{{route('store.change.password')}}" enctype="multipart/form-data">
                                            @csrf
                                            @foreach ($errors->all() as $error)
                                            <p class="text-danger">{{ $error }}</p>
                                            @endforeach 
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group passwordChangeClass">
                                                        <label for="username">{{__('Current Password')}}</label>
                                                        <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password" id="username"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group passwordChangeClass">
                                                        <label for="username">{{__('New Password')}}</label>
                                                        <input type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" id="username"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group passwordChangeClass">
                                                        <label for="username">{{__('New Confirm Password')}}</label>
                                                        <input type="password" class="form-control @error('new_password_confirmation') is-invalid @enderror" name="new_password_confirmation" id="username"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-lg-2 d-xsm-flex flex-column d-block full_width_display" id="back_next">
                                                <button type="submit" class="btn btn-primary">
                                                    {{__('Update Password')}}
                                                </button>
                                                <span class=" btn btn-primary">{{__('Cancel')}}</span>
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

@include('frontPartial.footer')