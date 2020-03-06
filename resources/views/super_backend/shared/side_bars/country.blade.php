<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-globe" aria-hidden="true"></i>
        <span class="title">{{__('Countries')}}</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{ route('list.countries') }}" class="nav-link ">
                <span class="title">{{__('List Countries')}}</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('create.country') }}" class="nav-link ">
                <span class="title">{{__('Add new Country')}}</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('sort.countries') }}" class="nav-link ">
                <span class="title">{{__('Sort Countries')}}</span>
            </a>
        </li>
    </ul>
</li>
