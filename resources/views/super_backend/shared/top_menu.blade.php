@php
    $lang = app()->getLocale();
@endphp
<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle"
               data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <span class="username username-hide-on-mobile">
                    {{ (null !== (Auth::user()) && isset(Auth::user()->name)) ? Auth::user()->name : '' }}
                </span> <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
                <li><a href="#"> <i class="icon-user"></i>{{__('My Profile')}}</a></li>
                <li class="divider"></li>
                <li><a href="#"> <i class="icon-key"></i>{{__('Log Out')}}</a></li>
            </ul>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
        <li class="dropdown dropdown-quick-sidebar-toggler">
            <a href="#" class="dropdown-toggle">
                <i class="icon-logout"></i>
            </a>
        </li>
        <!-- Translation -->
        <li class="nav-item">
            @if($lang === 'fr')
                <a class="nav-link" href="" onclick="event.preventDefault();
                document.getElementById('locale-form-en').submit();">English</a>
                <form id="locale-form-en" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="locale" value="en"/>
                    <input type="hidden" name="return_url" value="{{url()->full()}}"/>

                </form>
            @else
                <a class="nav-link" href="" onclick="event.preventDefault();
                document.getElementById('locale-form-fr').submit();">Français</a>
                <form id="locale-form-fr" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                    <input type="hidden" name="locale" value="fr"/>
                    <input type="hidden" name="return_url" value="{{url()->full()}}"/>

                </form>
            @endif
        </li>
    </ul>
</div>
