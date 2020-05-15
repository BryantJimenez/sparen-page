<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<html class="no-js" lang="zxx">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/web/images/favicon.png') }}">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('/web/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/gijgo.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/animate.css') }}">
	<link rel="stylesheet" href="{{ asset('/web/css/slick.css') }}">
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
	<script src="{{ asset('/web/js/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('/web/js/ajax-form.js') }}"></script>
	<script src="{{ asset('/web/js/waypoints.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.counterup.min.js') }}"></script>
	<script src="{{ asset('/web/js/imagesloaded.pkgd.min.js') }}"></script>
	<script src="{{ asset('/web/js/scrollIt.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('/web/js/wow.min.js') }}"></script>
	<script src="{{ asset('/web/js/nice-select.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.slicknav.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('/web/js/plugins.js') }}"></script>
	<script src="{{ asset('/web/js/gijgo.min.js') }}"></script>
	<script src="{{ asset('/web/js/slick.min.js') }}"></script>
	<script src="{{ asset('/web/js/contact.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.form.js') }}"></script>
	<script src="{{ asset('/web/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('/web/js/mail-script.js') }}"></script>


	@yield('script')
	<script src="{{ asset('/web/js/main.js') }}"></script>

	@include('web.partials.notifications')
</body>
</html>