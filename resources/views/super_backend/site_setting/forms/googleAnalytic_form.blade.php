{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'google_analytic_tracking_id') !!}">
        {!! Form::label('google_analytic_tracking_id', __('Google Analytic Tracking ID'), ['class' => 'bold']) !!}
        {!! Form::text('google_analytic_tracking_id', null,
        array('class'=>'form-control', 'id'=>'google_analytic_tracking_id',
        'placeholder'=>__('Google Analytic Tracking ID'))) !!}
        {!! APFrmErrHelp::showErrors($errors, 'google_analytic_tracking_id') !!}
    </div>
</div>
