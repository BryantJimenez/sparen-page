<!DOCTYPE html>
<html lang="{{ $lang }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Compañía especializada en brindar consultorías en Economía, Finanzas e Inversión a Empresas, Inversores e Instituciones.">
	<meta name="keywords" content="Economía, Finanzas, Inversión">
	<meta property="og:title" content="Sparen | Economía, Finanzas e Inversión" />
	<meta property="og:description" content="Compañía especializada en brindar consultorías en Economía, Finanzas e Inversión a Empresas, Inversores e Instituciones." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://www.sparen.com.ar" />
	<meta property="og:image" content="http://www.sparen.pe/web/images/about/logo.jpg" />
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/web/images/favicon.ico') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('/web/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/slicknav.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/style.css') }}">

	@yield('links')
</head>

<body>	

	@include('web.partials.navbar')

	@yield('content')

	@include('web.partials.footer')


	<script src="{{ asset('/web/js/vendor/modernizr-3.5.0.min.js') }}"></script>
	<script src="{{ asset('/web/js/vendor/jquery-1.12.4.min.js') }}"></script>
	<script src="{{ asset('/web/js/popper.min.js') }}"></script>
	<script src="{{ asset('/web/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/web/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('/web/js/wow.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.magnific-popup.min.js') }}"></script>

	@yield('script')
	<script src="{{ asset('/web/js/main.js') }}"></script>

	@include('web.partials.notifications')
</body>
</html>