@extends('layouts.public')

@section('content')
<div class="jumbotron">
    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3>{{ __('Login') }}</h3></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-12 col-form-label text-left">{{ __('Email') }} <span class="text-danger">*</span></label>

                                <div class="col-12">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-12 col-form-label text-left">{{ __('Password') }} <span class="text-danger">*</span></label>

                                <div class="col-12">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="float-left mt-2">{{__('Forgot your password?')}}  <a href="#">{{__('Click here')}}</a></div>
                                    <div class="float-right"><button class="btn btn-primary">{{__('Sign in')}}</button></div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
