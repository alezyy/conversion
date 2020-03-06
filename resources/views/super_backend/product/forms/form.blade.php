{!! APFrmErrHelp::showOnlyErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'package_title') !!}">
        {!! Form::label('package_title', 'Product Title', ['class' => 'bold']) !!}
        {!! Form::text('package_title', null,
        array('class'=>'form-control', 'id'=>'package_title', 'placeholder'=>'Product Title')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'package_title') !!}
    </div>

    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'package_price') !!}">
        {!! Form::label('package_price', 'Product Price', ['class' => 'bold']) !!}
        {!! Form::text('package_price', null,
        array('class'=>'form-control', 'id'=>'package_price', 'placeholder'=>'Product Price')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'package_price') !!}
    </div>

    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'package_num_days') !!}">
        {!! Form::label('package_num_days', 'Product lang', ['class' => 'bold']) !!}
        {!! Form::text('package_num_days', null,
        array('class'=>'form-control', 'id'=>'package_num_days', 'placeholder'=>'Product lang')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'package_num_days') !!}
    </div>
    <div class="form-actions"> {!! Form::button('Update <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>',
    array('class'=>'btn btn-large btn-primary', 'type'=>'submit')) !!}
    </div>
</div>
