@extends('super_backend.layouts.admin_layout')
@section('content')
<style type="text/css">
    .table td, .table th {
        font-size: 12px;
        line-height: 2.42857 !important;
    }
</style>
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="{{ route('admin.home') }}">{{__('Home')}}</a> <i class="fa fa-circle"></i>
                </li>
                <li> <span>{{__('Provinces')}}</span> </li>
            </ul>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title">{{__('Manage Provinces')}} <small>{{__('Provinces')}}</small> </h3>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->

        <div class="row">
            <div class="col-md-12">
                <!-- Begin: life time stats -->
                <div class="portlet light portlet-fit portlet-datatable bordered">
                    <div class="portlet-title">
                        <div class="caption"> <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">{{__('Provinces')}}</span> </div>
                        <div class="actions">
                            <a href="{{ route('create.province') }}" class="btn btn-xs btn-success">
                                <i class="glyphicon glyphicon-plus"></i>{{__('Add New Province')}}</a> </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-container">
                            <form method="post" role="form" id="province-search-form">
                                <table class="table table-striped table-bordered table-hover"
                                       id="provinceDatatableAjax">
                                    <thead>
                                        <tr role="row" class="filter">
                                            <td>{!! Form::select('lang',
                                            ['' => 'Select Language']+$languages, config('default_lang'),
                                            array('id'=>'lang', 'class'=>'form-control')) !!}</td>
                                            <td>
                                                <?php $default_country_id = Request::query('country_id', 2); ?>
                                                {!! Form::select('country_id',
                                                ['' => 'Select Country']+$countries, 2,
                                                array('id'=>'country_id', 'class'=>'form-control')) !!}
                                            </td>
                                            <td>
                                                <input type="text" class="form-control"
                                                       name="state" id="state" autocomplete="off" placeholder="Province">
                                            </td>
                                            <td><select name="is_active" id="is_active"  class="form-control">
                                                    <option value="-1">Is Active?</option>
                                                    <option value="1" selected="selected">{{__('Active')}}</option>
                                                    <option value="0">In Active</option>
                                                </select></td>
                                        </tr>
                                        <tr role="row" class="heading">
                                            <th>{{__('Language')}}</th>
                                            <th>{{__('Country')}}</th>
                                            <th>{{__('Province')}}</th>
                                            <th>{{__('Actions')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>
@endsection
@push('scripts')
<script>
    $(function () {
        var oTable = $('#provinceDatatableAjax').DataTable({
            processing: true,
            serverSide: true,
            stateSave: true,
            searching: false,
            /*
             "order": [[1, "asc"]],
             paging: true,
             info: true,
             */
            ajax: {
                url: '{!! route('fetch.data.provinces') !!}',
                data: function (d) {
                    d.lang = $('#lang').val();
                    d.province = $('input[name=province]').val();
                    d.is_active = $('#is_active').val();
                }
            }, columns: [
                {data: 'lang', name: 'lang'},
                {data: 'province', name: 'province'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });
        $('#province-search-form').on('submit', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#lang').on('change', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#province').on('keyup', function (e) {
            oTable.draw();
            e.preventDefault();
        });
        $('#is_active').on('change', function (e) {
            oTable.draw();
            e.preventDefault();
        });
    });
    function deleteProvince(id, is_default) {
        var msg = 'Are you sure?';
        if (is_default === 1) {
            msg = 'Are you sure? You are going to delete default Province, all other non default Countries will be deleted too!';
        }
        if (confirm(msg)) {
            $.post("{{ route('delete.province') }}", {id: id, _method: 'DELETE', _token: '{{ csrf_token() }}'})
                .done(function (response) {
                    if (response == 'ok')
                    {
                        var table = $('#provinceDatatableAjax').DataTable();
                        table.row('provinceDtRow' + id).remove().draw(false);
                    } else
                    {
                        alert('Request Failed!');
                    }
                });
        }
    }
    function makeActive(id) {
        $.post("{{ route('make.active.province') }}", {id: id, _method: 'PUT', _token: '{{ csrf_token() }}'})
            .done(function (response) {
                if (response === 'ok')
                {
                    var table = $('#provinceDatatableAjax').DataTable();
                    table.row('provinceDtRow' + id).remove().draw(false);
                } else
                {
                    alert('Request Failed!');
                }
            });
    }
    function makeNotActive(id) {
        $.post("{{ route('make.not.active.province') }}", {id: id, _method: 'PUT', _token: '{{ csrf_token() }}'})
            .done(function (response) {
                if (response === 'ok')
                {
                    var table = $('#provinceDatatableAjax').DataTable();
                    table.row('provinceDtRow' + id).remove().draw(false);
                } else
                {
                    alert('Request Failed!');
                }
            });
    }
</script>
@endpush
