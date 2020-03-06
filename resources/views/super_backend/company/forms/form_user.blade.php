{!! APFrmErrHelp::showOnlyErrorsNotice($errors) !!}
@include('flash::message')
<div class="form-body">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group {!! APFrmErrHelp::hasError($errors, 'logo') !!}">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="{{ asset('/') }}admin_assets/no-image.png" alt="" /> </div>
                    <div class="fileinput-preview fileinput-exists thumbnail"
                         style="max-width: 200px; max-height: 150px;">
                    </div>
                    <div>
                        <span class="btn default btn-file">
                            <span class="fileinput-new">
                                {{__('Select User Picture')}}
                            </span>
                            <span class="fileinput-exists"> {{__('Change')}} </span>
                            {!! Form::file('logo', null, array('id'=>'logo')) !!}
                        </span>
                        <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
                            {{__('Remove')}}
                        </a>
                    </div>
                </div>
                {!! APFrmErrHelp::showErrors($errors, 'logo') !!} </div>
        </div>
        @if(isset($userCompany))
        <div class="col-md-6">
            {{ ImgUploader::print_image("user_pictures/$user->picture") }}
        </div>    
        @endif  
    </div>

    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'name') !!}">
        {!! Form::label('name', 'User Name', ['class' => 'bold']) !!}
        {!! Form::text('name', null,
        array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'User Name')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'name') !!}
    </div>

    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'email') !!}">
        {!! Form::label('email', 'User Email', ['class' => 'bold']) !!}
        {!! Form::text('email', null,
        array('class'=>'form-control', 'id'=>'email', 'placeholder'=>'Company Email')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'email') !!}
    </div>

    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'password') !!}">
        {!! Form::label('password', 'Password', ['class' => 'bold']) !!}
        {!! Form::password('password',
        array('class'=>'form-control', 'id'=>'password', 'placeholder'=>'Password')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'password') !!}
    </div>

    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'company_id') !!}">
        {!! Form::label('company_id', 'Company', ['class' => 'bold']) !!}
        {!! Form::select('company_id',
        ['' => 'Select Company']+$industries, null, array('class'=>'form-control', 'id'=>'company_id')) !!}
        {!! APFrmErrHelp::showErrors($errors, 'company_id') !!}
    </div>

    <div class="form-group {!! APFrmErrHelp::hasError($errors, 'is_active') !!}">
        {!! Form::label('is_active', 'Is Active?', ['class' => 'bold']) !!}
        <div class="radio-list">
            <?php
            $is_active_1 = 'checked="checked"';
            $is_active_2 = '';
            if (old('is_active', ((isset($company)) ? $company->is_active : 1)) === 0) {
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
@include('super_backend.shared.tinyMCEFront')
<script type="text/javascript">
    $(document).ready(function () {
        $('#country_id').on('change', function (e) {
            e.preventDefault();
            filterDefaultStates(0);
        });
        $(document).on('change', '#state_id', function (e) {
            e.preventDefault();
            filterDefaultCities(0);
        });
        filterDefaultStates(<?php echo old('state_id', (isset($company)) ? $company->state_id : 0); ?>);
    });
    function filterDefaultStates(state_id)
    {
        var country_id = $('#country_id').val();
        if (country_id != '') {
            $.post("{{ route('filter.default.states.dropdown') }}", {country_id: country_id, state_id: state_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#default_state_dd').html(response);
                        filterDefaultCities(<?php echo old('city_id', (isset($company)) ? $company->city_id : 0); ?>);
                    });
        }
    }
    function filterDefaultCities(city_id)
    {
        var state_id = $('#state_id').val();
        if (state_id != '') {
            $.post("{{ route('filter.default.cities.dropdown') }}", {state_id: state_id, city_id: city_id, _method: 'POST', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        $('#default_city_dd').html(response);
                    });
        }
    }
</script>
@endpush
