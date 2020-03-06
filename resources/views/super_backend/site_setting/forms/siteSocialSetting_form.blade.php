{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'facebook_address') !!}">
        {!! Form::label('facebook_address', __('Facebook Address'), ['class' => 'bold']) !!}
        {!! Form::text('facebook_address', null, array('class'=>'form-control', 'id'=>'facebook_address', 'placeholder'=>__('Facebook Address'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'facebook_address') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'twitter_address') !!}">
        {!! Form::label('twitter_address', __('Twitter Address'), ['class' => 'bold']) !!}
        {!! Form::text('twitter_address', null, array('class'=>'form-control', 'id'=>'twitter_address', 'placeholder'=>__('Twitter Address'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'twitter_address') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'linkedin_address') !!}">
        {!! Form::label('linkedin_address', __('Linkedin Address'), ['class' => 'bold']) !!}
        {!! Form::text('linkedin_address', null, array('class'=>'form-control', 'id'=>'linkedin_address', 'placeholder'=>__('Linkedin Address'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'linkedin_address') !!}
    </div>
</div>

