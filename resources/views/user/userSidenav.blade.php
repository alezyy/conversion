<div id='sideNav'>

    <div id='sideNavTopBan'>
        <div id="userDetail">
            <div id="userProfilePic" class="float-left pl-3 pt-3">
                <img width="56" height="56" src="{{asset('img/user-empty.jpg')}}" class="rounded-circle"/>
            </div>
            <div class="float-left pl-3 pt-3">
                <div>{{auth()->user()->first_name." ".auth()->user()->last_name}}</div>
                <span id="userCompanyName" class="d-block"><small>{{__('Company Name')}}</small></span>
            </div>
        </div>
    </div>

    <div id="sideNavMenu">
        <div>
            <ul id="sideNavMenuList">
                <li>
                    <a href="{{route('eblast.create')}}">
                        <ion-icon name="add-circle" class="float-left mt-1"></ion-icon>
                        <span class="ml-1">{{__('New Eblast')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.active')}}">
                        <ion-icon name="settings" class="float-left mt-1"></ion-icon>
                        <span class="ml-1">{{__('Active Quick Presse')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.archives')}}">
                        <ion-icon name="filing" class="float-left mt-1"></ion-icon>
                        <span class="ml-1">{{__('Archives')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.library')}}">
                        <ion-icon name="folder" class="float-left mt-1"></ion-icon>
                        <span class="ml-1">{{__('My Library')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('client.lists')}}">
                        <ion-icon name="list-box" class="float-left mt-1"></ion-icon>
                        <span class="ml-1">{{__('My Subscriber Lists')}}</span>
                    </a>
                </li>
                <li>
                    <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <ion-icon name="stats" class="float-left mt-1"></ion-icon>
                        <span class="ml-1">{{__('Reports')}}</span>
                        <ion-icon name="arrow-dropdown" class="float-right mt-1 mr-2"></ion-icon>
                    </a>
                </li>
                <li class="collapse" id="collapseExample">
                    <ul class="ulreport">
                        <li>
                            <a href="{{route('client.reports')}}">
                                <ion-icon name="arrow-dropright" class="float-left mt-1"></ion-icon>
                                <span class="ml-1">{{__('Total day')}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('client.statistiques')}}">
                                <ion-icon name="arrow-dropright" class="float-left mt-1"></ion-icon>
                                <span class="ml-1">{{__('Statistics')}}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('client.templates')}}">
                        <ion-icon name="crop" class="float-left mt-1"></ion-icon>
                        <span class="ml-1">{{__('Templates')}}</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="sideNavBottomLogo" >
        <img class=" " width="180px"
             src="http://quickpresse.com/themes/logimonde/assets/images/quickpresse.svg"/>
    </div>
</div>
