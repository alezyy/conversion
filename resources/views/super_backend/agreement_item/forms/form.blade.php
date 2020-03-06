<?php
$lang = config('default_lang');
if (isset($country))
    $lang = $country->lang;
//$lang = MiscHelper::getLang($lang);
//$direction = MiscHelper::getLangDirection($lang);
//$queryString = MiscHelper::getLangQueryStr();
?>
{!! APFrmErrHelp::showErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'lang') !!}">
        {!! Form::label('lang', 'Language', ['class' => 'bold']) !!}                    
        {!! Form::select('lang', ['' => 'Select Language']+$languages, $lang,
        array('class'=>'form-control', 'id'=>'lang', 'onchange'=>'setLang(this.value)')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'lang') !!}                                       
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'agreement_item') !!}">
        {!! Form::label('agreement_item', 'Agreement Item', ['class' => 'bold']) !!}
        {!! Form::text('agreement_item', null,
        array('class'=>'form-control', 'id'=>'agreement_item', 'placeholder'=>'Agreement Item name')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'agreement_item') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'agreement_item_desc') !!}">
        {!! Form::label('agreement_item_desc', 'Agreement Item Desc', ['class' => 'bold']) !!}
        {!! Form::text('agreement_item_desc', null,
        array('class'=>'form-control', 'id'=>'agreement_item_desc', 'placeholder'=>'Desc')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'agreement_item_desc') !!}
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'country_id') !!}" id="country_id_div">
        {!! Form::label('country_id', 'Default Country', ['class' => 'bold']) !!}                    
        {!! Form::select('country_id', ['' => 'Select Default Country']+$countries, null,
        array('class'=>'form-control', 'id'=>'country_id')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'country_id') !!}                                       
    </div>
    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'is_active') !!}">
        {!! Form::label('is_active', 'Active', ['class' => 'bold']) !!}
        <div class="radio-list">
            <?php
            $is_active_1 = 'checked="checked"';
            $is_active_2 = '';
            if (old('is_active', ((isset($country)) ? $country->is_active : 1)) === 0) {
                $is_active_1 = '';
                $is_active_2 = 'checked="checked"';
            }
            ?>
            <label class="radio-inline">
                <input id="active" name="is_active" type="radio" value="1" {{$is_active_1}}>
                Active </label>
            <label class="radio-inline">
                <input id="not_active" name="is_active" type="radio" value="0" {{$is_active_2}}>
                In-Active </label>
        </div>
        {!! APFrmErrHelp::showErrors($errors, 'is_active') !!}
    </div>
    <div class="form-actions">
        {!! Form::button('Update <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>',
        array('class'=>'btn btn-large btn-primary', 'type'=>'submit')) !!}
    </div>
</div>
@push('scripts')
<script type="text/javascript">
    function setLang(lang) {
        window.location.href = "<?php echo url(Request::url()) . $queryString=0; ?>" + lang;
    }
    function showHideCountryId() {
        $('#country_id_div').hide();
        var is_default = $("input[name='is_default']:checked").val();
        if (is_default == 0) {
            $('#country_id_div').show();
        }
    }
    showHideCountryId();
</script>
@endpush

