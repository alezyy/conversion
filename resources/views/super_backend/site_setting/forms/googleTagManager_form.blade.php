{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'google_tag_manager') !!}">
        {!! Form::label('google_tag_manager', __('Google Tag Manager ID'), ['class' => 'bold']) !!}
        {!! Form::text('google_tag_manager', null, array('class'=>'form-control',
        'id'=>'google_tag_manager', 'placeholder'=>__('Google Tag Manager ID'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'google_tag_manager') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'google_tag_manager_active') !!}">
        {!! Form::label('google_tag_manager_active', __('Google Tag Manager Enable'), ['class' => 'bold']) !!}
        {!! Form::text('google_tag_manager_active', null, array('class'=>'form-control',
         'id'=>'google_tag_manager_active', 'placeholder'=>__('Google Tag Manager Enable'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'google_tag_manager_active') !!}
    </div>
</div>
