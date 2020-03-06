@php
    $lang = app()->getLocale();
@endphp
<nav class="navbar navbar-expand-md navbar-light bg-white fixed-top" style="border-bottom: 2px solid #ababab;">

    <a class="navbar-brand" href="http://quickpresse.com">
        <img class="brand-logo my-1 " width="240px"
             src="{{asset('image/quickpresse.svg')}}">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link " href="{{route('welcome')}}">{{__('Home')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('pricing')}}">{{__('Pricing')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('contact')}}">{{__('Contact')}}</a>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown1" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{__('Your account')}}
                </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
                        @guest
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @else
                            <a class="dropdown-item" href="{{ route('home') }}">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </div>
                </a>
            </li>
            <li class="nav-item">
                @if($lang === 'fr')
                    <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('locale-form-en').submit();">English</a>
                    <form id="locale-form-en" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="locale" value="en"/>
                        <input type="hidden" name="return_url" value="{{url()->full()}}"/>

                    </form>
                @else
                    <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('locale-form-fr').submit();">Français</a>
                    <form id="locale-form-fr" action="{{ route('set.locale') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="locale" value="fr"/>
                        <input type="hidden" name="return_url" value="{{url()->full()}}"/>

                    </form>
                @endif
            </li>
        </ul>
    </div>

</nav>
