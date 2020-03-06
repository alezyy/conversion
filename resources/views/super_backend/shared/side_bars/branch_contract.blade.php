<li class="nav-item"> <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-globe" aria-hidden="true"></i>
        <span class="title">{{__('Branch Contracts')}}</span> <span class="arrow"></span> </a>
    <ul class="sub-menu">
        <li class="nav-item"> <a href="{{ route('list.contracts.branches') }}" class="nav-link ">
                <span class="title">{{__('List branch Contract')}}</span> </a>
        </li>
        <li class="nav-item"> <a href="{{ route('create.contract.branch') }}" class="nav-link ">
                <span class="title">{{__('Add new branch Contract')}}</span> </a>
        </li>
        <li class="nav-item"> <a href="{{ route('sort.contract.branch') }}" class="nav-link ">
                <span class="title">{{__('Sort branch Contract')}}</span> </a>
        </li>
    </ul>
</li>
