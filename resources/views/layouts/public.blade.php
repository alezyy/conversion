<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Quickpresse') }}</title>
    <!-- Icon -->
    <link rel="icon" type="image/png" href="{{asset('image/icon/favicon.ico')}}"/>
    <!-- CSS Stylesheet -->
    <!-- Navbar CSS -->
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet">
    <!-- Public CSS -->
    <link href="{{ asset('css/public.css') }}" rel="stylesheet">
    <!-- Pricing Slider CSS -->
    <link href="{{ asset('css/pricing.css') }}" rel="stylesheet">
    <!-- Font Awsme Icons CSS-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">

    <!-- Jquery UI CSS -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">


</head>
<body>
@include('includes.navbar')
    @yield('content')
@include('includes.footer')
</body>

<!--JQuery -->
<script
    src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>

<!--JQuery UI -->
<script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>

<!-- Popper JS-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<!--Bootstrap JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<!--Jquery match height -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight.js"></script>

<script src="{{asset('js/pricing.js')}}"></script>

<script src="{{ asset('js/partners.js') }}"></script>
@stack('scripts')

</html>
