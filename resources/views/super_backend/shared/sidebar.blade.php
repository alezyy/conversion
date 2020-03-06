<!-- BEGIN SIDEBAR -->
<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
<div class="page-sidebar navbar-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <ul class="page-sidebar-menu page-header-fixed" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <li class="sidebar-toggler-wrapper hide">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler"> </div>
            <!-- END SIDEBAR TOGGLER BUTTON -->
        </li>
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="nav-item start active"> <a href="#" class="nav-link"> <i class="icon-home"></i> <span class="title">{{__('Dashboard')}}</span> </a> </li>
        @include('super_backend/shared/side_bars/admin_user')

        <li class="heading">
            <h3 class="uppercase">{{__('Sup User Role')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/sup_user_role')

        <li class="heading">
            <h3 class="uppercase">{{__('Manage Company')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/company')
        @include('super_backend/shared/side_bars/company_users')
        @include('super_backend/shared/side_bars/company_contract')

        <li class="heading">
            <h3 class="uppercase">{{__('Manage Branch')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/branch')
        @include('super_backend/shared/side_bars/branch_users')
        @include('super_backend/shared/side_bars/branch_contract')

        <li class="heading">
            <h3 class="uppercase">{{__('Manage Location')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/country')
        @include('super_backend/shared/side_bars/country_detail')
        @include('super_backend/shared/side_bars/state')

        <li class="heading">
            <h3 class="uppercase">{{__('Manage Industry')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/industry')

        <li class="heading">
            <h3 class="uppercase">{{__('Products')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/product')

        <li class="heading">
            <h3 class="uppercase">{{__('Packages and Pricing lot')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/package')

        <li class="heading">
            <h3 class="uppercase">{{__('Statistics')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/statistic')

        <li class="heading">
            <h3 class="uppercase">{{__('Cms')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/cms')

        <li class="heading">
            <h3 class="uppercase">{{__('Reporting')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/transaction')
        @include('super_backend/shared/side_bars/company_transaction')
        @include('super_backend/shared/side_bars/branch_transaction')
        @include('super_backend/shared/side_bars/payment_due')
        @include('super_backend/shared/side_bars/payment_receive')
        @include('super_backend/shared/side_bars/eblast_report_send')

        <li class="heading">
            <h3 class="uppercase">{{__('Template Engine')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/template_engine')

        <li class="heading">
            <h3 class="uppercase">{{__('Logs and Security')}}</h3>
        </li>
        @include('super_backend/shared/side_bars/log')
        @include('super_backend/shared/side_bars/system_event_log')
        @include('super_backend/shared/side_bars/throttle')


        <li class="heading">
            <h3 class="uppercase">{{__('General Setting')}}</h3>
        </li>		 
        @include('super_backend/shared/side_bars/site_setting')
        @include('super_backend/shared/side_bars/merchant_gateway')
        @include('super_backend/shared/side_bars/status')
        @include('super_backend/shared/side_bars/permission')
        @include('super_backend/shared/side_bars/payment_method')
        @include('super_backend/shared/side_bars/type_quickpress')
        @include('super_backend/shared/side_bars/type_content_eblast')
        @include('super_backend/shared/side_bars/bounce_code')
        @include('super_backend/shared/side_bars/agreement')
        @include('super_backend/shared/side_bars/agreement_item')
        @include('super_backend/shared/side_bars/tax_setting')
        @include('super_backend/shared/side_bars/importation')

    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
