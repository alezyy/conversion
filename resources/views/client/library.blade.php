@extends('layouts.user')
@section('userContent')
    <div class="ml-4 mr-4">

        <div class="row mt-2 ml-1">
            <div class="float-left">
                <h4>{{__('My Library')}}</h4>
                <small>{{__('Welcome to the Quick Presse Library! Here, you can add images and files to include in your Quick Presse.  Upload multiple images and files and store them safely and securely for future use. ')}}</small>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-7">
                <button class="btn btn-secondary">
                    <ion-icon name="cloud-upload"></ion-icon>
                    {{__('Upload')}}
                </button>
            </div>
            <div class="col-md-2">
                <div class="float-left mt-2 mr-1">
                    <div class="float-left">
                        {{__('View by:')}}
                    </div>
                    <div class="float-left ml-1">
                        <button class="btn btn-active">
                            <ion-icon name="grid"></ion-icon>
                        </button>
                    </div>
                    <div class="float-left">
                        <button class="btn btn-deactive">
                            <ion-icon name="list"></ion-icon>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="float-right">
                    <div class="float-left mt-2 mr-1">
                        {{__('Sort by:')}}
                    </div>
                    <div class="dropdown float-left">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__('Newest first')}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">{{__('Newest')}}</a>
                            <a class="dropdown-item" href="#">{{__('Oldest')}}</a>
                            <a class="dropdown-item" href="#">{{__('Smallest')}}</a>
                            <a class="dropdown-item" href="#">{{__('Largest')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="input-group m-3">
                <input type="text" class="form-control" placeholder=" " aria-label=" " aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <ion-icon name="search" class="input-group-text" id="btn-search"></ion-icon>
                </div>
            </div>
        </div>

    </div>
@endsection
