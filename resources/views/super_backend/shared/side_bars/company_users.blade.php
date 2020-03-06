<li class="nav-item  ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-building"></i> <span class="title">{{__('Companies Users')}}</span>
        <span class="arrow"></span>
    </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{ route('list.users.companies') }}" class="nav-link ">
                <span class="title">{{__('List Companies Users')}}</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('create.user.company') }}" class="nav-link ">
                <span class="title">{{__('Add new Company User')}}</span>
            </a>
        </li>
    </ul>
</li>
