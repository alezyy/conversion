<li class="nav-item  "> <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-building"></i>
        <span class="title">{{__('Payment Method')}}</span> <span class="arrow"></span> </a>
    <ul class="sub-menu">
        <li class="nav-item  ">
            <a href="{{ route('list.payment.method') }}" class="nav-link ">
                <span class="title">{{__('List Payment')}}</span> </a>
        </li>
        <li class="nav-item  "> <a href="{{ route('create.payment.method') }}" class="nav-link ">
                <span class="title">{{__('Add new Payment Method')}}</span> </a>
        </li>
    </ul>
</li>
