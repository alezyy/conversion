@extends('super_backend.layouts.admin_layout')
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content" style="background-color:#eef1f5;">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN PAGE BAR -->
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li> <a href="index.html">{{__('Home')}}</a> <i class="fa fa-circle"></i> </li>
                    <li> <span>{{ $site_name }} {{__('Admin Panel')}}</span> </li>
                </ul>
            </div>

            <!-- END PAGE BAR -->
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> {{ $site_name }} {{__('Admin Panel')}} <small>{{ $site_name }}
                    {{__('Admin Panel')}}</small> </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                            <div class="visual"> <i class="fa fa-user"></i> </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="1349">{{ $totalTodaysUsers }}</span>
                                </div>
                                <div class="desc">{{__('Todays Users')}} </div>
                            </div>
                        </a> </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                            <div class="visual"> <i class="fa fa-user"></i> </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="1349">{{ $totalActiveUsers }}</span>
                                </div>
                                <div class="desc">{{__('Active Users')}}</div>
                            </div>
                        </a> </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                            <div class="visual"> <i class="fa fa-user"></i> </div>
                            <div class="details">
                                <div class="number">
                                    <span data-counter="counterup" data-value="1349">{{ $totalVerifiedUsers }}</span>
                                </div>
                                <div class="desc">{{__('Verified Users')}}</div>
                            </div>
                        </a> </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                            <div class="visual"> <i class="fa fa-list"></i> </div>
                            <div class="details">
                                <div class="number"> <span data-counter="counterup" data-value="1349">
                                        {{ $totalTodaysEblast }}</span> </div>
                                <div class="desc">{{__('Todays Eblast')}}</div>
                            </div>
                        </a> </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                            <div class="visual"> <i class="fa fa-list"></i> </div>
                            <div class="details">
                                <div class="number"> <span data-counter="counterup" data-value="1349">
                                        {{ $totalActiveEblast }}</span> </div>
                                <div class="desc">{{__('Active Eblast')}}  </div>
                            </div>
                        </a> </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"> <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                            <div class="visual"> <i class="fa fa-list"></i> </div>
                            <div class="details">
                                <div class="number"> <span data-counter="counterup" data-value="1349">
                                        {{ $totalContract }}</span> </div>
                                <div class="desc">{{__('Total Contract')}}</div>
                            </div>
                        </a> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption"> <i class="icon-share font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">
                                    {{__('Recent Registered Users')}}
                                </span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="slimScrol">
                                <ul class="feeds">

                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"><a href="#">
                                                            </a>  - <i class="fa fa-home" aria-hidden="true"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                </ul>
                            </div>
                            <div class="scroller-footer">
                                <div class="btn-arrow-link pull-right"> <a href="#">{{__('See All Users')}}</a>
                                    <i class="icon-arrow-right"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption"> <i class="icon-share font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">{{__('Recent')}} Eblast</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="slimScrol">
                                <ul class="feeds">

                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i> </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"><a href="#">
                                                            </a>  - <i class="fa fa-list" aria-hidden="true">

                                                            </i>  - <i class="fa fa-home" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                </ul>
                            </div>
                            <div class="scroller-footer">
                                <div class="btn-arrow-link pull-right"> <a href="#">{{__('See All Eblast')}}</a>
                                    <i class="icon-arrow-right"></i> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption"> <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">
                                    {{__('Recent Payments due')}}
                                </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="slimScrol">
                                    <ul class="feeds">

                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"><a href="#">
                                                            </a>  - <i class="fa fa-home" aria-hidden="true"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="scroller-footer">
                                    <div class="btn-arrow-link pull-right"> <a href="#">{{__('See All Payments due')}}</a>
                                        <i class="icon-arrow-right"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption"> <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">{{__('Recent Invoices')}}</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="slimScrol">
                                    <ul class="feeds">

                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i> </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"><a href="#">
                                                            </a>  - <i class="fa fa-list" aria-hidden="true">

                                                            </i>  - <i class="fa fa-home" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="scroller-footer">
                                    <div class="btn-arrow-link pull-right"> <a href="#">{{__('See All Invoices')}}</a>
                                        <i class="icon-arrow-right"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption"> <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">
                                    {{__('Recent Contract')}}
                                </span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="slimScrol">
                                    <ul class="feeds">

                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"><a href="#">
                                                            </a>  - <i class="fa fa-home" aria-hidden="true"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="scroller-footer">
                                    <div class="btn-arrow-link pull-right"> <a href="#">{{__('See All Contract')}}</a>
                                        <i class="icon-arrow-right"></i> </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="portlet light bordered">
                            <div class="portlet-title">
                                <div class="caption"> <i class="icon-share font-dark hide"></i>
                                    <span class="caption-subject font-dark bold uppercase">{{__('Recent Billing')}}</span>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="slimScrol">
                                    <ul class="feeds">

                                        <li>
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-check"></i> </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc"><a href="#">
                                                            </a>  - <i class="fa fa-list" aria-hidden="true">

                                                            </i>  - <i class="fa fa-home" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="scroller-footer">
                                    <div class="btn-arrow-link pull-right"> <a href="#">{{__('See All Billing')}}</a>
                                        <i class="icon-arrow-right"></i> </div>
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
    <script type="text/javascript">
        $(function () {
            $('.slimScrol').slimScroll({
                height: '250px',
                railVisible: true,
                alwaysVisible: true
            });
        });
    </script>
@endpush
