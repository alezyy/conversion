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
                    <li> <a href="{{ route('admin.home') }}">{{__('Home')}}</a> <i class="fa fa-circle"></i> </li>
                    <li> <span>{{__('Branches Contracts')}}</span> </li>
                </ul>
            </div>
            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title">
                {{__('Manage Branches Contracts')}}
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- Begin: life time stats -->
                    <div class="portlet light portlet-fit portlet-datatable bordered">
                        <div class="portlet-title">
                            <div class="caption"> <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark bold uppercase">
                                    {{__('Branches Contracts')}}
                                </span>
                            </div>
                            <div class="actions">
                                <a href="{{ route('create.contract.branch') }}" class="btn btn-xs btn-success">
                                    <i class="glyphicon glyphicon-plus"></i> {{__('Add New Branch Contract')}}
                                </a>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-container">
                                <form method="post" role="form" id="datatable-search-form">
                                    <table class="table table-striped table-bordered table-hover"
                                           id="branchDatatableAjax">
                                        <thead>
                                        <tr role="row" class="filter">
                                            <td>
                                                <input type="text" class="form-control" name="name"
                                                       id="name" autocomplete="off" placeholder="Contract Title">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="email"
                                                       id="email" autocomplete="off" placeholder="Url">
                                            </td>
                                            <td><select name="is_active" id="is_active" class="form-control">
                                                    <option value="-1">{{__('Is Active?')}}</option>
                                                    <option value="1" selected="selected">{{__('Active')}}</option>
                                                    <option value="0">{{__('In Active')}}</option>
                                                </select>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                        <tr role="row" class="heading">
                                            <th>{{__('Contract Title')}}</th>
                                            <th>{{__('Url')}}</th>
                                            <th>{{__('Is Active?')}}</th>
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
            var oTable = $('#branchDatatableAjax').DataTable({
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
                    url: '{!! route('fetch.data.branches') !!}',
                    data: function (d) {
                        d.name = $('#name').val();
                        d.email = $('#email').val();
                        d.is_active = $('#is_active').val();
                    }
                }, columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'is_active', name: 'is_active'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
            $('#datatable-search-form').on('submit', function (e) {
                oTable.draw();
                e.preventDefault();
            });
            $('#name').on('keyup', function (e) {
                oTable.draw();
                e.preventDefault();
            });
            $('#email').on('keyup', function (e) {
                oTable.draw();
                e.preventDefault();
            });
            $('#is_active').on('change', function (e) {
                oTable.draw();
                e.preventDefault();
            });
            $('#is_featured').on('change', function (e) {
                oTable.draw();
                e.preventDefault();
            });
        });
        function deleteBranch(id) {
            var msg = 'Are you sure?';
            if (confirm(msg)) {
                $.post("{{ route('delete.branch') }}", {id: id, _method: 'DELETE', _token: '{{ csrf_token() }}'})
                    .done(function (response) {
                        if (response === 'ok')
                        {
                            var table = $('#branchDatatableAjax').DataTable();
                            table.row('branchDtRow' + id).remove().draw(false);
                        } else
                        {
                            alert('Request Failed!');
                        }
                    });
            }
        }
        function makeActive(id) {
            $.post("{{ route('make.active.branch') }}", {id: id, _method: 'PUT', _token: '{{ csrf_token() }}'})
                .done(function (response) {
                    if (response === 'ok')
                    {
                        var table = $('#branchDatatableAjax').DataTable();
                        table.row('branchDtRow' + id).remove().draw(false);
                    } else
                    {
                        alert('Request Failed!');
                    }
                });
        }
        function makeNotActive(id) {
            $.post("{{ route('make.not.active.branch') }}", {id: id, _method: 'PUT', _token: '{{ csrf_token() }}'})
                .done(function (response) {
                    if (response === 'ok')
                    {
                        var table = $('#branchDatatableAjax').DataTable();
                        table.row('branchDtRow' + id).remove().draw(false);
                    } else
                    {
                        alert('Request Failed!');
                    }
                });
        }

    </script>
@endpush
