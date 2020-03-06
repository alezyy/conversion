<li class="nav-item  "> <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-building"></i> <span class="title">{{__('Branches Users')}}</span> <span class="arrow"></span> </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{ route('list.users.branches') }}" class="nav-link ">
                <span class="title">{{__('List Branches Users')}}</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('create.user.branch') }}" class="nav-link ">
                <span class="title">{{__('Add new Branch User')}}</span>
            </a>
        </li>
    </ul>
</li>
