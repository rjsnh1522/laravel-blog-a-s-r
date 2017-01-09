<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    @yield('title')

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS & JS -->
    {{--<link rel="stylesheet" media="screen" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css')}}">--}}
{{----}}
    <link rel="stylesheet" type="text/css" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.css')}}">


    <!-- jquery cdnj -->

    <link rel="stylesheet" type="text/css" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{url("resources/assets/vendor/parsely/validation.css")}}">

    <link rel="stylesheet" href="{{url("resources/assets/css/style.css")}}">
    <link rel="stylesheet" href="{{url("resources/assets/css/normalize.css")}}">
    <link rel="stylesheet" href="{{url("resources/assets/css/aplication.css")}}">




    @yield('css')
    <style>
        span.error{
            color: red;
        }
    </style>
</head>
<body>

@include('includes.navbar')
<div class="container">
@include('includes.messages')

@yield('content')

</div>



@include('includes.footer')
<script type="text/javascript" src="{{url('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.js')}}"></script>
{{--<script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js')}}"></script>--}}
<script src="{{url('resources/assets/vendor/parsely/validation.js')}}"></script>
@yield('script')
</body>
</html>