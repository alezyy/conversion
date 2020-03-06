@extends('layouts.user')
@section('userContent')
    <div class="ml-4 mr-4">

        <div class="row mt-2 ml-1">
            <div class="float-left">
                <h4>{{__('My Subscriber Lists')}}</h4>
                <small>{{__('Add, create, and manage your own targeted email lists, by uploading your contacts.')}}</small>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-9">
                <div class="float-left">
                    <button class="btn btn-secondary">
                        {{__('Add List')}}
                    </button>
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group m-3">
                    <input type="text" class="form-control" placeholder=" " aria-label=" " aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <ion-icon name="search" class="input-group-text" id="btn-search"></ion-icon>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
