<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

@php $root = env('ROOT_FOLDER'); @endphp

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset($root.'front/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset($root.'front/style.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset($root.'front/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset($root.'front/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset($root.'front/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset($root.'front/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset($root.'front/css/custom.css') }}" type="text/css" />

	<!-- Movers Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset($root.'front/css/colors.php?color=55be73') }}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{ asset($root.'front/movers/css/fonts.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset($root.'front/movers/movers_2.css') }}" type="text/css" />
	<!-- / -->

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{ asset($root.'front/css/components/datepicker.css') }}" type="text/css" />

	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Document Title
	============================================= -->
	<title>Move'in</title>

    <style>
        footer
        {
            margin-top: 0 !important;
        }
    </style>

    @stack('custom-css')


</head>

<body class="stretched">

	@yield('content')
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">




	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset($root.'front/js/jquery.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.toggles.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.counter.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.carousel.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.linkscroll.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.form.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.ajaxform.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.easing.js' )}}"></script>
	<script src="{{ asset($root.'front/js/plugins.lightbox.js' )}}"></script>

	<!-- bootstrap min -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha256-u+Q/eQIe6P5wU4K8maihJOQkhqBbf7K1NN68GwTpNz0=" crossorigin="anonymous"></script>

	<!-- DatePicker JS -->
	<script src="{{ asset($root.'front/js/datepicker.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset($root.'front/js/functions.js') }}"></script>

@stack('custom-scripts')

	<script>

		jQuery('.home-date').datepicker({
			autoclose: true,
			startDate: "today",
		});
	</script>


</body>
</html>
