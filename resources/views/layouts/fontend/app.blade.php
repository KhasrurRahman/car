<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->

    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/fontend/css/bootstrap.min.css')}}" media="all" />

    <!-- start font-awesome css -->
    <link rel="stylesheet" href="{{asset('public/assets/fontend/css/font-awesome.min.css')}}" media="all" />

    <!-- start slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/fontend/css/slick.css')}}" media="all" />

    <!-- start style css -->
    <link rel="stylesheet" href="{{asset('public/assets/fontend/css/style.css')}}" media="all" />

    <!-- start respossive css -->
    <link rel="stylesheet" href="{{asset('public/assets/fontend/css/respossive.css')}}" media="all" />
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    @stack('css')

</head>
<body>
@include('layouts.fontend.partial.header')


@yield('content')

@include('layouts.fontend.partial.footer')

<!-- start jquer version js -->
<script src="{{asset('public/assets/fontend/js/jquery-1.12.4.min.js')}}"></script>

<!-- start proper js -->
<script src="{{asset('public/assets/fontend/js/popper.min.js')}}"></script>

<!-- start bootstrap js -->
<script src="{{asset('public/assets/fontend/js/bootstrap.min.js')}}"></script>

<!-- start slick js -->
<script src="{{asset('public/assets/fontend/js/slick.min.js')}}"></script>

<!-- start script js -->
<script src="{{asset('public/assets/fontend/js/script.js')}}"></script>

<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script>
    @if($errors->any())
    @foreach($errors->all() as $error)
    toastr.error('{{ $error }}','Error',{
        closeButton:true,
        progressBar:true,
    }       );
    @endforeach
    @endif
</script>

@stack('js')


</body>
</html>
