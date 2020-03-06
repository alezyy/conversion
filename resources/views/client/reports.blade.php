@extends('layouts.user')
@section('userContent')
    <div class="ml-4 mr-4">

        <div class="row mt-2 ml-1">
            <div class="float-left">
                <h4>{{__('Total day')}}</h4>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <div class="row">
                    <div class="input-group mb-3 col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><ion-icon name="calendar"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{__('Start date')}}" aria-label="" aria-describedby="basic-addon1" >
                    </div>
                    <div class="input-group mb-3 col-6">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><ion-icon name="calendar"></ion-icon></span>
                        </div>
                        <input type="text" class="form-control" placeholder="{{__('End date')}}" aria-label="" aria-describedby="basic-addon2">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="float-right">
                    <button class="btn btn-dark float-left mr-1">
                        <ion-icon name="print" class="float-left mt-1 mr-1"></ion-icon>
                        {{__('Print')}}
                    </button>
                    <button class="btn btn-success float-left">
                        <ion-icon name="download" class="float-left mt-1 mr-1"></ion-icon>
                        {{__('Export')}}
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{__('Date')}}</th>
                            <th>{{__('QP - English')}}</th>
                            <th>{{__('Total($) - English')}}</th>
                            <th>{{__('QP - French')}}</th>
                            <th>{{__('Total($) - French')}}</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
@endsection
