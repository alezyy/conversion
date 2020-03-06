@extends('layouts.public')

@section('content')
    @include('welcome.pricing')
    @include('welcome.jumbotron2')
    @include('welcome.message1')
    @include('welcome.carousel2')
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            $('.card').matchHeight();
        });
    </script>
@endpush
