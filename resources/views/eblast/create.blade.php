@extends('layouts.user')
@section('userContent')
<div class="container">

    <div class="row mt-2">
        <div class="col-8">
            <ion-icon name="add-circle" class="float-left mt-1 mr-1"></ion-icon>
            <h4>{{__('Create your eblast')}}</h4>
        </div>
        <div class="col-4">
            <div class="float-right">
                <a>
                    <ion-icon name="arrow-round-back" class="float-left mt-1 mr-1"></ion-icon>
                    <small>{{__('Back to Quick Presse List')}}</small>
                </a>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-12">
            <!---Setup Eblast card -->
            <div class="card">
                <div class="card-header bg-primary">
                    <div class="text-white float-left">
                        1. {{__('Setup your eblast')}}
                    </div>
                    <div class="float-right text-white">
                        <ion-icon name="remove-circle" class="mt-1" id="createFirst"></ion-icon>
                    </div>
                </div>
                <div class="card-body" id="firstBody">
                    <div>
                        {{__('You know your target audience, and you can’t wait to share what’s new and exciting with them.  Now it’s time to bring your message to life, digitally! ')}}
                    </div>
                    <div class="mt-2 float-right">
                        <button class="btn btn-primary">{{__('Begin')}}</button>
                    </div>
                </div>
            </div>
            <!---Design Eblast card -->
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="text-white float-left">
                        2. {{__('Design your content ')}}
                    </div>
                    <div class="float-right text-white">
                        <ion-icon name="remove-circle" class="mt-1" id="createSecond"></ion-icon>
                    </div>
                </div>
                <div class="card-body" id="secondBody">
                    <div>
                        {{__('Once you’ve chosen between custom or list options, you can easily add text, photos, and links to your Quick Presse.  Get started now! ')}}
                    </div>
                    <div class="mt-2 float-right">
                        <button class="btn btn-secondary" disabled>{{__('Create')}}</button>
                    </div>
                </div>
            </div>
            <!---Schedule Eblast card -->
            <div class="card">
                <div class="card-header bg-dark">
                    <div class="text-white float-left">
                        3. {{__('Schedule')}}
                    </div>
                    <div class="float-right text-white">
                        <ion-icon name="remove-circle" class="mt-1" id="createThird"></ion-icon>
                    </div>
                </div>
                <div class="card-body" id="thirdBody">
                    <div>
                        {{__('Set a preferred date and time for your clients to receive your Quick Presse')}}
                    </div>
                    <div class="mt-2 float-right">
                        <button class="btn btn-secondary" disabled>{{__('Create')}}</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            var firstOpen = 1;
            var secondOpen = 1;
            var thirdOpen = 1;

            $('#createFirst').click(function(){
                if(firstOpen == 1){
                    $(this).attr('name','add-circle');
                    $('#firstBody').hide();
                    firstOpen = 0;
                }else{
                    $(this).attr('name','remove-circle');
                    $('#firstBody').show();
                    firstOpen = 1;
                }
            });

            $('#createSecond').click(function(){
                if(secondOpen == 1){
                    $(this).attr('name','add-circle');
                    $('#secondBody').hide();
                    secondOpen = 0;
                }else{
                    $(this).attr('name','remove-circle');
                    $('#secondBody').show();
                    secondOpen = 1;
                }
            });

            $('#createThird').click(function(){
                if(thirdOpen == 1){
                    $(this).attr('name','add-circle');
                    $('#thirdBody').hide();
                    thirdOpen = 0;
                }else{
                    $(this).attr('name','remove-circle');
                    $('#thirdBody').show();
                    thirdOpen = 1;
                }
            });
        });
    </script>
@endpush
