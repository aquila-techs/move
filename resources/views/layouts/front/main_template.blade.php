<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/style.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('front/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('front/css/custom.css') }}" type="text/css" />

	<!-- Movers Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('front/css/colors.php?color=0F66DD') }}" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="{{ asset('front/movers/css/fonts.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('front/movers/movers.css') }}" type="text/css" />
	<!-- / -->

	<!-- DatePicker CSS -->
	<link rel="stylesheet" href="{{ asset('front/css/components/datepicker.css') }}" type="text/css" />

	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Document Title
	============================================= -->
	<title>Move'in</title>


	@stack('custom-css')

	<style>
		footer
		{
			margin-top: 0 !important;
		}
	</style>

</head>

<body class="stretched">

	@yield('content')
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">


		<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-transparent border-0">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap pb-4 clearfix">

					<div class="row">

						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Features</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Help Center</a></li>
									<li class="mb-2"><a href="#">Paid with Moblie</a></li>
									<li class="mb-2"><a href="#">Status</a></li>
									<li class="mb-2"><a href="#">Changelog</a></li>
									<li class="mb-2"><a href="#">Contact Support</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Support</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Home</a></li>
									<li class="mb-2"><a href="#">About</a></li>
									<li class="mb-2"><a href="#">FAQs</a></li>
									<li class="mb-2"><a href="#">Support</a></li>
									<li class="mb-2"><a href="#">Contact</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Trending</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Shop</a></li>
									<li class="mb-2"><a href="#">Portfolio</a></li>
									<li class="mb-2"><a href="#">Blog</a></li>
									<li class="mb-2"><a href="#">Events</a></li>
									<li class="mb-2"><a href="#">Forums</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-2 col-md-2 col-6">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Get to Know us</h4>

								<ul class="list-unstyled iconlist ml-0">
									<li class="mb-2"><a href="#">Corporate</a></li>
									<li class="mb-2"><a href="#">Agency</a></li>
									<li class="mb-2"><a href="#">eCommerce</a></li>
									<li class="mb-2"><a href="#">Personal</a></li>
									<li class="mb-2"><a href="#">OnePage</a></li>
								</ul>

							</div>
						</div>
						<div class="col-lg-4 col-md-4 text-md-right">
							<div class="widget clearfix">

								<h4 class="ls0 mb-4 nott">Headquarters:</h4>

								<div>
									<address>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
									<h3 class="mb-3"><a href="tel:+111 22-33-44"><i class="icon-call mr-1" style="font-size: 22px;"></i> +111 22-33-44</a></h3>
									<div class="d-flex justify-content-md-end">
										<a href="#" class="social-icon si-small si-facebook" title="Facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>

										<a href="#" class="social-icon si-small si-instagram" title="instagram">
											<i class="icon-instagram"></i>
											<i class="icon-instagram"></i>
										</a>

										<a href="#" class="social-icon si-small si-paypal" title="Paypal">
											<i class="icon-paypal"></i>
											<i class="icon-paypal"></i>
										</a>

										<a href="#" class="social-icon si-small si-wikipedia" title="Apple Pay">
											<i class="icon-apple-pay"></i>
											<i class="icon-apple-pay"></i>
										</a>
									</div>
								</div>

							</div>
						</div>

					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent">

				<div class="container clearfix">

					<div class="row justify-content-between align-items-center">
						<div class="col-md-6 text-black-50">
							Copyrights &copy; 2020 All Rights Reserved by Moveinandout Inc.
						</div>

						<div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
							<div class="copyrights-menu copyright-links text-black-50 clearfix">
								<a href="#">About</a>/<a href="#">Features</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('front/js/jquery.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.toggles.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.counter.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.carousel.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.linkscroll.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.form.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.ajaxform.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.easing.js' )}}"></script>
	<script src="{{ asset('front/js/plugins.lightbox.js' )}}"></script>

	<!-- bootstrap min -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha256-u+Q/eQIe6P5wU4K8maihJOQkhqBbf7K1NN68GwTpNz0=" crossorigin="anonymous"></script>
	
	<!-- DatePicker JS -->
	<script src="{{ asset('front/js/datepicker.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('front/js/functions.js') }}"></script>

@stack('custom-scripts')

	<script>

		jQuery('.home-date').datepicker({
			autoclose: true,
			startDate: "today",
		});
	</script>


</body>
</html>