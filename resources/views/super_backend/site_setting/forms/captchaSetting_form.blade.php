{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'nocaptcha_sitekey') !!}">
        {!! Form::label('nocaptcha_sitekey', __('Captcha sitekey'), ['class' => 'bold']) !!}
        {!! Form::text('nocaptcha_sitekey', null, array('class'=>'form-control', 'id'=>'nocaptcha_sitekey', 'placeholder'=>__('Captcha sitekey'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'nocaptcha_sitekey') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'nocaptcha_secret') !!}">
        {!! Form::label('nocaptcha_secret', __('Captcha secret'), ['class' => 'bold']) !!}
        {!! Form::text('nocaptcha_secret', null, array('class'=>'form-control', 'id'=>'nocaptcha_secret', 'placeholder'=>__('Captcha secret'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'nocaptcha_secret') !!}
    </div>
</div>
