<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta Tag -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Beautyqueen - Spa and Beauty Parlour HTML5 Template">
	<meta name="keywords" content="spa, beauty, beauty parlor, booking, creative, hair, make up, massage, nail, one page, physiotherapy, salon, single page, skincare, wellness">
	<meta name="author" content="root">
	
	<!-- Title
	====================================-->
	<title>{{ env('APP_NAME', 'beauty') }}</title>
	<!-- Favicons
	====================================-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<!-- Typography links 
 		 Import Google Fonts
	====================================-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
	<!-- Links of CSS Files
	====================================-->
	<link rel="stylesheet" href="{{asset('home_style/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('home_style/css/layerslider.css')}}">
	<link rel="stylesheet" href="{{asset('home_style/css/plugins.css')}}">
	<link rel="stylesheet" href="{{asset('home_style/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('home_style/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('home_style/fonts/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('home_style/css/settings.css')}}">    
</head>
<body id="top" class="page-wrapper page-load">
    <a href="#" id="scroll" class="bg-gradient" style="display: none;"><span></span></a>
    @yield('content')
	<!-- Links of js Files
	===========================================-->
	<script src="{{ asset('home_style/js/jquery.min.js') }}"></script>
	<script src="{{ asset('home_style/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('home_style/js/greensock.js') }}"></script>
	<script src="{{ asset('home_style/js/layerslider.transitions.js') }}"></script>
	<script src="{{ asset('home_style/js/layerslider.kreaturamedia.jquery.js') }}"></script>
	<script src="{{ asset('home_style/js/popper.min.js') }}"></script>
	<script src="{{ asset('home_style/js/plugins.js') }}"></script>
	<script src="{{ asset('home_style/js/settings.js') }}"></script>
	<script src="{{ asset('home_style/js/custom.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=#"></script>
    <script src="{{ asset('home_style/js/map.scripts.js') }}"></script>
</body>
</html>
