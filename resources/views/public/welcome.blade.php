@extends('layouts.public')

@section('content')
<!-- First Jumbotron -->
@include('welcome.jumbotron1')

<!-- Welcome Message -->
@include('welcome.message1')

<!-- Welcome eblast section-->
@include('welcome.eblast')

<!-- Carousel section -->
@include('welcome.carousel1')

@include('welcome.carousel2')

<!-- Second Jumbotron -->
@include('welcome.jumbotron2')

@endsection
