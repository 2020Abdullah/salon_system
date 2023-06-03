<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>{{env('APP_NAME', 'beauty')}}</title>
	<meta name="description" content="Beauty Queen - Spa & Beauty Parlour. ">
	<meta name=”robots” content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('dashboard_style/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard_style/css/fontawsome/all.min.css') }}">
    <link rel="stylesheet" href="{{asset('dashboard_style/css/bootstrap-material-design.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_style/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_style/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('dashboard_style/css/toastr.min.css')}}">
    <link rel="stylesheet" href="{{ asset('dashboard_style/css/main.css') }}">
</head>
<body class="rtl">
	<!-- dashboard structure
	===========================================-->
    <div class="bmd-layout-canvas">
        @yield('content')
    </div>
	<!-- Links of js Files
	===========================================-->
    <script src="{{ asset('dashboard_style/js/vendor/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('dashboard_style/js/vendor/popper.js') }}"></script>
    <script src="{{ asset('dashboard_style/js/vendor/toastr.min.js') }}"></script>
    <script src="{{ asset('dashboard_style/js/vendor/bootstrap-material-design.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('body').bootstrapMaterialDesign();
        });
    </script>
    <script src="{{ asset('dashboard_style/js/main.js') }}"></script>
    @include('layouts.messages')
</body>
</html>
