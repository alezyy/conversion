<li class="nav-item  "> <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-building"></i> <span class="title">{{__('Products')}}</span> <span class="arrow"></span> </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{ route('list.products') }}" class="nav-link ">
                <span class="title">{{__('List Products')}}</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('create.product') }}" class="nav-link ">
                <span class="title">{{__('Add Products')}}</span>
            </a>
        </li>
    </ul>
</li>
