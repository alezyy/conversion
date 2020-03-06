<?php
$lang = config('default_lang');
?>
@extends('super_backend.layouts.admin_layout')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li> <a href="{{ route('admin.home') }}">{{__('Home')}}</a> <i class="fa fa-circle"></i>
                    </li>
                    <li> <span>{{__('Edit Site Merchant Gateway Setting')}}</span> </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <!--<h3 class="page-title">Edit User <small>Users</small> </h3>-->
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <br />
            @include('flash::message')
            <div class="row">
                <div class="col-md-12">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-red-sunglo">
                                <i class="icon-settings font-red-sunglo"></i>
                                <span class="caption-subject bold uppercase">
                                    {{__('Merchant Gateway Setting Form')}}
                                </span>
                            </div>
                        </div>
                        <div class="portlet-body form">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#site" data-toggle="tab" aria-expanded="false"> {{__('Site')}} </a>
                                </li>
                                <li class=""> <a href="#social" data-toggle="tab" aria-expanded="false"> {{__('Paypal Merchant')}} </a> </li>
                                <li class=""> <a href="#captcha" data-toggle="tab" aria-expanded="false"> {{__('Stripe Merchant')}} </a> </li>
                            </ul>
                            {!! Form::model($siteSetting=0, array('method' => 'put', 'route' => array('update.site.setting'), 'class' => 'form', 'files'=>true)) !!}
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="site"> </div>
                                <div class="tab-pane fade" id="social"> @include('super_backend.gateway_merchant.forms.PaypalSetting_form') </div>
                                <div class="tab-pane fade" id="captcha"> @include('super_backend.gateway_merchant.forms.StripeSetting_form') </div>
                            </div>
                            <div class="form-actions">
                                {!! Form::button('
                                <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> '.__('Update'),
                                array('class'=>'btn btn-large btn-primary', 'type'=>'submit')) !!}
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
    </div>
@endsection
