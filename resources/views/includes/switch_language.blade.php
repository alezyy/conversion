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
