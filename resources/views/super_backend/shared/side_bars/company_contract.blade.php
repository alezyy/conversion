<li class="nav-item  "> <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-globe" aria-hidden="true"></i>
        <span class="title">{{__('Company Contracts')}}</span> <span class="arrow"></span> </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{ route('list.contracts.companies') }}" class="nav-link ">
                <span class="title">{{__('List Contract')}}</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('create.contract.company') }}" class="nav-link ">
                <span class="title">{{__('Add new Contract')}}</span>
            </a>
        </li>
        <li class="nav-item  ">
            <a href="{{ route('sort.contract.company') }}" class="nav-link ">
                <span class="title">{{__('Sort Contract')}}</span>
            </a>
        </li>
    </ul>
</li>
