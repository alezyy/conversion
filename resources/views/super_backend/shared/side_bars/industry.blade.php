<li class="nav-item  "> <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-building-o" aria-hidden="true"></i>
        <span class="title">{{__('Industries')}}</span> <span class="arrow"></span> </a>
    <ul class="sub-menu">
        <li class="nav-item  "> <a href="{{ route('list.industries') }}" class="nav-link ">
                <span class="title">{{__('List Industries')}}</span> </a> </li>
        <li class="nav-item  "> <a href="{{ route('create.industry') }}" class="nav-link ">
                <span class="title">{{__('Add new Industry')}}</span> </a> </li>
        <li class="nav-item  "> <a href="{{ route('sort.industries') }}" class="nav-link ">
                <span class="title">{{__('Sort Industries')}}</span> </a> </li>
    </ul>
</li>
