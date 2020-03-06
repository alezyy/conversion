@extends('layouts.user')
@section('userContent')
    <div class="ml-4 mr-4">

        <div class="row mt-2 ml-1">
            <div class="float-left">
                <h4>{{__('Help & Specs')}}</h4>
                <h5>{{__('Easy steps to create your eblast')}}</h5>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-6">
                <h5>Step #1</h5>
            </div>
            <div class="col-md-6">
                <h5>Step #2</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5>Step #3</h5>
            </div>
            <div class="col-md-6">
                <h5>Step #4</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h5>{{__('Guided tour of Quick Presse')}}</h5>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h5>{{__('Technical Specifications')}}</h5>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <small><ion-icon name="document" class="float-left mt-1 mr-1"></ion-icon>{{__('HTML File')}}</small>
            </div>
            <div class="col-md-4">
                <small><ion-icon name="images" class="float-left mt-1 mr-1"></ion-icon>{{__('JPEG Format')}}</small>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5>{{__('Need help with your Quick Presse eblast?')}}</h5>
                        <h5>{{__('Please contact us at  (450) 689-5060  Extension 221  or by email at logimonde@logimonde.com')}}</h5>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
