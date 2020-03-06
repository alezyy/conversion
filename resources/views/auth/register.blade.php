@extends('layouts.public')

@section('content')
<div class="jumbotron">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card" >
                    <div class="card-body">
                        <div class="col-12">
                            <h5>{{__('Create your account')}}</h5>
                        </div>
                        <ul class="nav nav-tabs mt-4 nav-justified" id="user-tab" role="tablist"><li class="nav-item" id="nav-item-step-1">
                                <a class="nav-link active" data-toggle="tab" href="#step1" role="tab" aria-controls="home">
                                    <div class="row">
                                        <div class="col col-lg-auto">
                                            <i class="fa fa-key fa-2x"></i>
                                        </div>
                                        <div class="col col-lg d-none d-lg-block text-left">
                                            <div class="row">
                                                <div class="col">
                                                    <strong class="d-inline-block justify-content-end mr-auto">{{__('Step')}} 1 :</strong>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: -8px;">
                                                <div class="col">
                                                    <small class="grey-text justify-content-end">{{__('Create your account login')}}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li><li class="nav-item " id="nav-item-step-2">
                                <a class="nav-link disabled" data-toggle="tab" href="#step2" role="tab" aria-controls="step2">
                                    <div class="row">
                                        <div class="col col-lg-auto">
                                            <i class="fa fa-user fa-2x"></i>
                                        </div>
                                        <div class="col col-lg d-none d-lg-block text-left">
                                            <div class="row">
                                                <div class="col">
                                                    <strong class="d-inline-block justify-content-end mr-auto">{{__('Step')}}&nbsp;2&nbsp; :</strong>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: -8px;">
                                                <div class="col">
                                                    <small class="grey-text justify-content-end">{{__('Your personal details')}}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li><li class="nav-item " id="nav-item-step-3">
                                <a class="nav-link disabled" data-toggle="tab" href="#step3" role="tab" aria-controls="messages">
                                    <div class="row">
                                        <div class="col col-lg-auto">
                                            <i class="fa fa-suitcase fa-2x"></i>
                                        </div>
                                        <div class="col col-lg d-none d-lg-block text-left">
                                            <div class="row">
                                                <div class="col">
                                                    <strong class="d-inline-block justify-content-end mr-auto">{{__('Step')}}&nbsp;3&nbsp; :</strong>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: -8px;">
                                                <div class="col">
                                                    <small class="grey-text justify-content-end">{{__('Your Company information')}}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <form method="POST" action="{{ route('register') }}" id="formRegister" enctype="multipart/form-data">
                            @csrf
                        <!-- Step 1 -->
                        <div id="accountInfoRegis" class="row" style="display: none;">
                            <div class="col-12">
                                    <div class="form-group mt-5 row">
                                        <div class="col-md-6" id="inputEmailDiv">
                                            <label>{{__('Email')}}</label>
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                            <span class='text-danger' style="display: none;" id="emptyEmailMsg">
                                                <small>{{__('Enter a valid email')}}</small>
                                            </span>
                                            <span class='text-danger' style="display: none;" id="emailInUseMesg">
                                                <small>{{__('Email already in use')}}</small>
                                            </span>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6" id="inputLangDiv">
                                            <label>{{__('Account Language')}}</label>
                                            <select class="form-control" id="selectLanguage" name="lang">
                                                <option>{{__('Select a language')}}</option>
                                                <option value="en">English</option>
                                                <option value="fr">Français</option>
                                            </select>
                                            <span class='text-danger' style="display: none;">
                                                <small>{{__('Select a language')}}</small>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6" id="inputPasswordDiv">
                                            <label>{{__('Password')}}</label>
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                            <span class='text-danger' style="display: none;">
                                                <small>{{__('Enter a password')}}</small>
                                            </span>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="col-md-6" id="inputConfirmPasswordDiv">
                                            <label>{{__('Confirm your password')}}</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            <span class='text-danger' style="display: none;">
                                                <small>{{__('Enter the same value again')}}</small>
                                            </span>
                                        </div>
                                    </div>

                            </div>
                        </div><!-- End of Step 1 -->

                        <!-- Step 2 -->
                         <div id="personalDetailRegis" class="row mt-5" style="display: none;">
                            <div class="col-12">
                                <div class="form-group row">
                                    <div class="col-md-6" id="inputFirstNameDiv">
                                        <label>{{__('First name')}}</label>
                                        <input id="firstName" name="firstName" type="text" class="form-control">
                                        <span class='text-danger' style="display: none;">
                                            <small>{{__('Enter a first name')}}</small>
                                        </span>
                                    </div>
                                    <div class="col-md-6" id="inputLastNameDiv">
                                        <label>{{__('Last name')}}</label>
                                        <input id="lastName" name="lastName" type="text" class="form-control">
                                        <span class='text-danger' style="display: none;">
                                            <small>{{__('Enter a last name')}}</small>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-5">
                                        <label>{{__('Title')}}</label>
                                        <input id="title" name="title" type="text" class="form-control">
                                    </div>
                                    <div class="col-md-4 col-8" id="inputPhoneDiv">
                                        <label>{{__('Phone')}}</label>
                                        <input id="phone" name="phone" type="text" class="form-control">
                                        <span class='text-danger' style="display: none;">
                                            <small>{{__('Enter a valid phone number')}}</small>
                                        </span>
                                    </div>
                                    <div class="col-md-3 col-4">
                                        <label>{{__('Extension')}}</label>
                                        <input id="ext" name="ext" type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                         </div><!--End of Step 2 -->

                         <!-- Step 3 -->
                         <div id="companyInfoRegis" class="row mt-5" style="display: none;">
                             <div class="col-md-4">
                                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                                     <li class="nav-item">
                                         <a class="nav-link active show" id="en-tab" style="padding: 0 1rem;" data-toggle="tab" href="#en" role="tab" aria-controls="en" aria-selected="true">
                                             {{__('English')}}
                                         </a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-link" id="fr-tab" style="padding: 0 1rem;" data-toggle="tab" href="#fr" role="tab" aria-controls="fr" aria-selected="false">
                                             {{__('French')}}
                                         </a>
                                     </li>
                                 </ul>

                                 <div id="englishLogoCard" class="card" style="border-top: 0px;height: 150px;">
                                     <div class="card-body">
                                         <label for="en-logo" class="text-center" style="width: 100%;">
                                             <div class="">
                                                <i class="fa fa-image fa-4x"></i>
                                             </div>
                                             <div class="mt-2">
                                                 {{__('Click to upload your English logo')}}
                                             </div>
                                             <img id="englishLogo" src="#" alt="your image" style="width:100%;display: none;" class="img-fluid"/>
                                         </label>
                                     </div>
                                 </div>
                                 <input type="file" name="en-logo" id="en-logo" class="inputfile" />

                                 <div id="frenchLogoCard" class="card" style="border-top: 0px;height: 150px;display: none;">
                                     <div class="card-body">
                                         <label for="fr-logo" class="text-center" style="width: 100%;">
                                             <div class="">
                                                 <i class="fa fa-image fa-4x"></i>
                                             </div>
                                             <div class="mt-2">
                                                 {{__('Click to upload your French logo')}}
                                             </div>
                                             <img id="frenchLogo" src="#" alt="your image" style="width:100%;display: none;" class="img-fluid"/>
                                         </label>
                                     </div>
                                 </div>
                                 <input type="file" name="fr-logo" id="fr-logo" class="inputfile" />

                                 <div class="row mt-1 mb-2">
                                     <div class="col-12">
                                         <small>
                                             <i class="fa fa-info-circle"></i>
                                         {{__('For best results, choose an image that is no larger than 200x200 pixels and 100 KB. Accepted image formats: JPG, PNG and GIF.')}}
                                         </small>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-md-8">
                                 <div class="form-group row">
                                     <div class="col-md-6">
                                         <label>{{__('Company name')}}</label>
                                         <input id="companyName" name="companyName" type="text" class="form-control">
                                     </div>
                                     <div class="col-md-6">
                                         <label>{{__('Address')}}</label>
                                         <input id="address" name="address" type="text" class="form-control">
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-md-6">
                                         <label>{{__('City')}}</label>
                                         <input id="city" name="city" type="text" class="form-control">
                                     </div>
                                     <div class="col-md-6">
                                         <label>{{__('Province')}}</label>
                                         <select class="form-control" id="selectProvince" name="province" disabled>

                                         </select>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <div class="col-md-6">
                                         <label>{{__('Country')}}</label>
                                         <select class="form-control" id="selectCountry" name="country">
                                             <option value="0" selected>
                                                 {{__('Select country')}}
                                             </option>
                                             @foreach($countries as $country)
                                                 <option value="{{$country->id}}">
                                                     {{$country->name_en}}
                                                 </option>
                                             @endforeach
                                         </select>
                                     </div>
                                     <div class="col-md-6">
                                         <label>{{__('Postal code')}}</label>
                                         <input id="postalcode" name="postalcode" type="text" class="form-control">
                                     </div>
                                 </div>
                             </div>
                         </div><!-- End of Step 3-->


                            <div class="row">
                                <div class="col-12">
                                    <button id="nextStep" class="btn btn-primary float-right" type="button">
                                        {{__('Next')}} <i class="fa fa-caret-right"></i>
                                    </button>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <small class="float-left">
                                        <i class="fa fa-info-circle"></i>
                                        {{__('By clicking Submit, you agree to our')}} <a href="#">{{__('Privacy Policy')}}</a> {{__('and')}} <a href="#">{{__('Terms of Use')}}</a>
                                    </small>
                                </div>
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12 text-center">
                                {{__('Already have an account?')}} <a href="{{route('login')}}">{{__('Login')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/register.js') }}"></script>
@endpush
