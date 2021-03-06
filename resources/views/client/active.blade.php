@extends('layouts.user')
@section('userContent')
    <div class="ml-4 mr-4">

        <div class="row mt-2 ml-1">
            <div class="float-left">
                <h4>{{__('Active Quick Presse')}}</h4>
                <small>{{__('The following Quick Presse are currently active.')}}</small>
            </div>
        </div>

        <div class="row mt-1">
            <div class="col-md-6">
                <button class="btn btn-primary float-left">
                    <ion-icon name="add-circle" class="float-left mt-1 mr-1"></ion-icon>
                    {{__('Add Eblast')}}
                </button>
                <button class="btn btn-reload float-left ml-1">
                    <ion-icon name="refresh" class="float-left mt-1 mr-1"></ion-icon>
                    {{__('Reload Page')}}
                </button>
            </div>
            <div class="col-md-6">
                <div class="float-right mt-1 eblast-alert">
                    <ion-icon name="alert" class="float-left mt-1 mr-1"></ion-icon>
                    {{__('There are')}} {{__('incomplete eblast.')}} <a href="#">{{__('Click here to review')}}</a>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder=" " aria-label=" " aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <ion-icon name="search" class="input-group-text" id="btn-search"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="col-md-8 row">
                <div class="col-md-6 filters">
                    <div class="float-right">
                        <div class="float-left mt-2 mr-1">
                            {{__('Filter by:')}}
                        </div>
                        <div class="dropdown float-left">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Active
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">{{__('Active')}}</a>
                              <a class="dropdown-item" href="#">{{__('Today')}}</a>
                              <a class="dropdown-item" href="#">{{__('New')}}</a>
                              <hr>
                              <a class="dropdown-item" href="#">{{__('Contract')}}</a>
                              <a class="dropdown-item" href="#">{{__('Qp List')}}</a>
                              <a class="dropdown-item" href="#">{{__('Custom List')}}</a>
                              <hr>
                              <a class="dropdown-item" href="#">{{__('All')}}</a>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 filters">
                    <div class="float-right">
                        <div class="float-left mt-2 mr-1">
                            {{__('Sort by:')}}
                        </div>
                        <div class="dropdown float-left">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('Send date (ascending)')}}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">{{__('Send date (ascending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Send date (descending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Company (ascending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Company (descending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Title (ascending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Title (descending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Created (ascending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Created (descending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Type (ascending)')}}</a>
                                <a class="dropdown-item" href="#">{{__('Type (descending)')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>{{__('Send date')}}</th>
                            <th>{{__('Subject line')}}</th>
                            <th>{{__('Company')}}</th>
                            <th>{{__('Destination')}}</th>
                            <th>{{__('User')}}</th>
                            <th>{{__('Type')}}</th>
                            <th>{{__('Created on')}}</th>
                            <th>{{__('Actions')}}</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>

    </div>
@endsection
