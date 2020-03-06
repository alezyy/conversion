@php
    $lang = app()->getLocale();
@endphp
<div id="userTopMenu">
    <div class="float-left burger">
        <ion-icon name="menu"></ion-icon>
    </div>

    <div class="close-btn float-right">
        <ion-icon name="close"></ion-icon>
    </div>

    <div id="topmenu" class="float-right">
        <ul class="nav-menu  text-center list-inline">
            <li class="list-inline-item">
                <a class="top-item" href="#">
                    <ion-icon name="home"></ion-icon>
                    <span class="d-md-block">{{__('Go to homepage')}}</span>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="top-item" href="{{route('client.help')}}">
                    <ion-icon name="information-circle"></ion-icon>
                    <span class="d-md-block">{{__('Help & Specs')}}</span>
                </a>
            </li>
            <li class="list-inline-item">
                    <a class="top-item" href="{{route('client.administration')}}">
                        <ion-icon name="logo-angular"></ion-icon>
                        <span class="d-md-block">{{__('Administration')}}</span>
                    </a>
            </li>
            <li class="list-inline-item">
                @if($lang === 'fr')
                    <a class="top-item" onclick="event.preventDefault(); document.getElementById('locale-form-en').submit();">
                        <ion-icon name="flag"></ion-icon>
                        <span class="d-md-block">{{__('English')}}</span>
                    </a>
                    <form id="locale-form-en" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="locale" value="en"/>
                        <input type="hidden" name="return_url" value="{{url()->full()}}"/>

                    </form>
                @else
                    <a class="top-item" onclick="event.preventDefault(); document.getElementById('locale-form-fr').submit();">
                        <ion-icon name="flag"></ion-icon>
                        <span class="d-md-block">{{__('Français')}}</span>
                    </a>
                    <form id="locale-form-fr" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="locale" value="fr"/>
                        <input type="hidden" name="return_url" value="{{url()->full()}}"/>

                    </form>
                @endif
            </li>
            <li class="list-inline-item">
                <a class="top-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <ion-icon name="log-out"></ion-icon>
                    <span class="d-md-block">{{__('Logout')}}</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>

</div>
