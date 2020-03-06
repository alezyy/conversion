<li class="nav-item  "> <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-globe" aria-hidden="true"></i>
        <span class="title">{{__('Provinces')}}</span> <span class="arrow"></span> </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{ route('list.provinces') }}" class="nav-link "> <span class="title">{{__('List Provinces')}}</span> </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('create.province') }}" class="nav-link ">  <span class="title">{{__('Add new Province')}}</span> </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('sort.provinces') }}" class="nav-link ">  <span class="title">{{__('Sort Provinces')}}</span> </a>
        </li>
    </ul>
</li>
