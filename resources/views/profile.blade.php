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
</style>
<section id="hero" style="min-height:350px !important; margin:auto; height:auto !important">
    <div class="hero-container mt-5" style="margin:auto;">
        {{-- <h3 style="background:transparent " class="services-title">Services</h3> --}}
        <div class="what-we-offer mt-5">
            <h1>{{__('Profile')}}</h1>
        </div>
    </div>
</section>
<div class="container">
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
                                            <!-- <h4 class="role">Role : <span>{{$user->role}}</span></h4> -->
                                        </div>
                                        <form class="form-validate" method="POST" action="{{route('profile.update')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="username">{{__('Name')}}</label>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="username" required value="{{ old('name') ?? $user->name}}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">{{__('E-mail')}}</label>
                                                        <input disabled type="email" class="form-control" value="{{$user->email}}" name="email" required id="email" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="username">{{__('Phone Number')}}</label>
                                                        <input class="form-control @error('contact') is-invalid @enderror" type="text" value="{{ old('contact') ?? $user->contact}}" required placeholder="Phone" name="contact" id="checkout-phone">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">{{__('Date of Birth')}}</label>
                                                        <input type="date"  value="{{ old('dob') ?? $user->dob}}" name="dob" class="form-control @error('dob') is-invalid @enderror" required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="checkout-city">{{__('Gender')}}</label>
                                                        <div class="profile-select-field">
                                                            <select class="form-control @error('gender') is-invalid @enderror " name="gender" id="checkout-city" required>
                                                                <option value="Choose" selected disabled>{{__('select one option')}}
                                                                </option>
                                                                <option value="Male" {{ $user->gender == "Male" ? 'selected' : '' }}>{{__('Male')}}
                                                                </option>
                                                                <option value="Female" {{ $user->gender == "Female" ? 'selected' : '' }}>{{__('Female')}}
                                                                </option>
                                                            </select>
                                                            <i class="fa fa-chevron-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="checkout-address-1">{{__('Address')}}</label>
                                                        <input class="form-control @error('address_line_1') is-invalid @enderror" placeholder="Address without City & State" type="text" name="address_line_1" value="{{ old('address_line_1') ?? $user->address_line_1}}" id="checkout-address-1" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="checkout-city">{{__('Business / Company name')}}</label>
                                                        <input class="form-control @error('company_name') is-invalid @enderror" placeholder="Add Company name" type="text" name="company_name" value="{{ old('company_name') ?? $user->company_name}}" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group">
                                                        <label>{{__('Company Size')}}</label>
                                                        <div class="profile-select-field">
                                                            <select class="form-control" name="company_size" required>
                                                                <option value="" selected disabled>--{{__('select one option')}}--</option>
                                                                <option value="1-10" @if ($user->company_size == "1-10") {{ 'selected' }}@endif>1-10</option>
                                                                <option value="10-50" @if ($user->company_size == "10-50") {{ 'selected' }}@endif>10-50</option>
                                                                <option value="50-100" @if ($user->company_size == "50-100") {{ 'selected' }}@endif>50-100</option>
                                                                <option value="100-150" @if ($user->company_size == "100-150") {{ 'selected' }}@endif>100-150</option>
                                                                <option value="150-200" @if ($user->company_size == "150-200") {{ 'selected' }}@endif>150-200</option>
                                                                <option value="200-250" @if ($user->company_size == "200-250") {{ 'selected' }}@endif>200-250</option>
                                                                <option value="200-250" @if ($user->company_size == "200-250") {{ 'selected' }}@endif>250-300</option>
                                                                <option value="300-350" @if ($user->company_size == "300-350") {{ 'selected' }}@endif>300-350</option>
                                                                <option value="350-400" @if ($user->company_size == "350-400") {{ 'selected' }}@endif>350-400</option>
                                                            </select>
                                                            <i class="fa fa-chevron-down"></i>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="checkout-city">{{__('Country')}}</label>
                                                        <div class="profile-select-field">
                                                            <select class="form-control" name="country" required>
                                                                <option value="" selected disabled>Select a country
                                                                </option>
                                                                <option value="Russia" @if ($user->country == "Russia") {{ 'selected' }}@endif >Russia</option>
                                                                <option value="Germany" @if ($user->country == "Germany") {{ 'selected' }}@endif >Germany</option>
                                                                <option value="	United Kingdom" @if ($user->country == "United Kingdom") {{ 'selected' }}@endif >United Kingdom</option>
                                                                <option value="France" @if ($user->country == "France") {{ 'selected' }}@endif >France</option>
                                                                <option value="	Italy" @if ($user->country == "Italy") {{ 'selected' }}@endif >Italy</option>
                                                                <option value="Ukraine" @if ($user->country == "Ukraine") {{ 'selected' }}@endif >Ukraine</option>
                                                                <option value="Spain" @if ($user->country == "Spain") {{ 'selected' }}@endif >Spain</option>
                                                                <option value="Poland" @if ($user->country == "Poland") {{ 'selected' }}@endif >Poland</option>
                                                                <option value="Romania" @if ($user->country == "Romania") {{ 'selected' }}@endif >Romania</option>
                                                                <option value="Netherlands" @if ($user->country == "Netherlands") {{ 'selected' }}@endif>Netherlands</option>
                                                                <option value="Belgium" @if($user->country == "Belgium") {{ 'selected' }}@endif>Belgium</option>
                                                                <option value="Czech Republic (Czechia)" @if ($user->country == "Czech Republic (Czechia)") {{ 'selected' }}@endif>Czech Republic (Czechia)</option>
                                                                <option value="Greece" @if ($user->country == "Greece") {{ 'selected' }}@endif >Greece</option>
                                                                <option value="Portugal" @if($user->country == "Portugal") {{ 'selected' }} @endif >Portugal</option>
                                                                <option value="Sweden" @if ($user->country == "Sweden") {{ 'selected' }}@endif >Sweden</option>
                                                                <option value="Hungary" @if ($user->country == "Hungary") {{ 'selected' }}@endif >Hungary</option>
                                                                <option value="Belarus" @if ($user->country == "Belarus") {{ 'selected' }}@endif >Belarus</option>
                                                                <option value="Austria" @if ($user->country == "Austria") {{ 'selected' }}@endif >Austria</option>
                                                                <option value="Serbia" @if ($user->country == "Serbia") {{ 'selected' }}@endif>Serbia</option>
                                                                <option value="Switzerland" @if ($user->country == "Switzerland") {{ 'selected' }}@endif>Switzerland</option>
                                                                <option value="Bulgaria" @if ($user->country == "Bulgaria") {{ 'selected' }}@endif>Bulgaria</option>
                                                                <option value="Denmark" @if ($user->country == "Denmark") {{ 'selected' }}@endif>Denmark</option>
                                                                <option value="Finland" @if ($user->country == "Finland") {{ 'selected' }}@endif>Finland</option>
                                                                <option value="Slovakia" @if ($user->country == "Slovakia") {{ 'selected' }}@endif>Slovakia</option>
                                                                <option value="Norway" @if ($user->country == "Norway") {{ 'selected' }}@endif>Norway</option>
                                                                <option value="Ireland">Ireland</option>
                                                                <option value="Croatia" @if ($user->country == "Croatia") {{ 'selected' }}@endif>Croatia</option>
                                                                <option value="Moldova" @if ($user->country == "Moldova") {{ 'selected' }}@endif>Moldova</option>
                                                                <option value="Bosnia and Herzegovina" @if ($user->country == "Bosnia and Herzegovina") {{ 'selected' }}@endif>Bosnia and Herzegovina</option>
                                                                <option value="Albania" @if ($user->country == "Albania") {{ 'selected' }}@endif>Albania</option>
                                                                <option value="Lithuania" @if ($user->country == "Lithuania") {{ 'selected' }}@endif>Lithuania</option>
                                                                <option value="North Macedonia" @if ($user->country == "North Macedonia") {{ 'selected' }}@endif>North Macedonia</option>
                                                                <option value="Slovenia" @if ($user->country == "Slovenia") {{ 'selected' }}@endif>Slovenia</option>
                                                                <option value="Latvia" @if ($user->country == "Latvia") {{ 'selected' }}@endif>Latvia</option>
                                                                <option value="Estonia" @if ($user->country == "Estonia") {{ 'selected' }}@endif>Estonia</option>
                                                                <option value="Montenegro" @if ($user->country == "Montenegro") {{ 'selected' }}@endif>Montenegro</option>
                                                                <option value="Luxembourg" @if ($user->country == "Luxembourg") {{ 'selected' }}@endif>Luxembourg</option>
                                                                <option value="Malta" @if ($user->country == "Malta") {{ 'selected' }}@endif>Malta</option>
                                                                <option value="Iceland" @if ($user->country == "Iceland") {{ 'selected' }}@endif>Iceland</option>
                                                                <option value="Andorra" @if ($user->country == "Andorra") {{ 'selected' }}@endif>Andorra</option>
                                                                <option value="Monaco" @if ($user->country == "Monaco") {{ 'selected' }}@endif>Monaco</option>
                                                                <option value="Liechtenstein" @if ($user->country == "Liechtenstein") {{ 'selected' }}@endif>Liechtenstein</option>
                                                                <option value="San Marino" @if ($user->country == "San Marino") {{ 'selected' }}@endif>San Marino</option>
                                                                <option value="Holy See" @if ($user->country == "Holy See") {{ 'selected' }}@endif>Holy See</option>
                                                                <option value="China" @if ($user->country == "China") {{ 'selected' }}@endif>China</option>
                                                                <option value="India" @if ($user->country == "India") {{ 'selected' }}@endif>India</option>
                                                                <option value="Indonesia" @if ($user->country == "Indonesia") {{ 'selected' }}@endif>Indonesia</option>
                                                                <option value="Pakistan" @if ($user->country == "Pakistan") {{ 'selected' }}@endif>Pakistan</option>
                                                                <option value="Bangladesh" @if ($user->country == "Bangladesh") {{ 'selected' }}@endif>Bangladesh</option>
                                                                <option value="Japan" @if ($user->country == "Japan") {{ 'selected' }}@endif>Japan</option>
                                                                <option value="Philippines" @if ($user->country == "Philippines") {{ 'selected' }}@endif>Philippines</option>
                                                                <option value="Vietnam" @if ($user->country == "Vietnam") {{ 'selected' }}@endif>Vietnam</option>
                                                                <option value="Turkey" @if ($user->country == "Turkey") {{ 'selected' }}@endif>Turkey</option>
                                                                <option value="Iran" @if ($user->country == "Iran") {{ 'selected' }}@endif>Iran</option>
                                                                <option value="Thailand" @if ($user->country == "Thailand") {{ 'selected' }}@endif>Thailand</option>
                                                                <option value="Myanmar" @if ($user->country == "Myanmar") {{ 'selected' }}@endif>Myanmar</option>
                                                                <option value="South Korea" @if ($user->country == "South Korea") {{ 'selected' }}@endif>South Korea</option>
                                                                <option value="Iraq" @if ($user->country == "Iraq") {{ 'selected' }}@endif>Iraq</option>
                                                                <option value="Afghanistan" @if ($user->country == "Afghanistan") {{ 'selected' }}@endif>Afghanistan</option>
                                                                <option value="Saudi Arabia" @if ($user->country == "Saudi Arabia") {{ 'selected' }}@endif>Saudi Arabia</option>
                                                                <option value="Uzbekistan" @if ($user->country == "Uzbekistan") {{ 'selected' }}@endif>Uzbekistan</option>
                                                                <option value="Malaysia" @if ($user->country == "Malaysia") {{ 'selected' }}@endif>Malaysia</option>
                                                            </select>
                                                            <i class="fa fa-chevron-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="checkout-city">{{__('City')}}</label>
                                                        <input class="form-control @error('city') is-invalid @enderror" placeholder="Add City" type="text" name="city" value="{{ old('city') ?? $user->city}}" id="checkout-address-1" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="mb-1" for="order-comments"><span class="font-weight-medium">{{__('Description')}} </span></label>
                                                        <textarea class="form-control ckeditor @error('description') is-invalid @enderror" name="description" rows="3" id="order-comments" placeholder="Additional Note" >{{old('description',$user->description)}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-lg-2 d-xsm-flex flex-column d-block full_width_display" id="back_next">
                                                <button type="submit" class="btn btn-primary">
                                                    {{__('Update')}}
                                                </button>
                                                <span class=" btn btn-primary">{{__('Cancel')}}</span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-12 mt-2 mt-xl-0 user_info_profile">
                        <div class="user-info-wrapper">
                            <div class="d-flex flex-wrap">
                                <div class="user-info-title">
                                    <i data-feather="user" class="mr-1"></i>
                                    <span class="card-text user-info-title font-weight-bold mb-0">Username: &nbsp;</span>
                                </div>
                                <p class="card-text mb-0"></p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontPartial.footer')