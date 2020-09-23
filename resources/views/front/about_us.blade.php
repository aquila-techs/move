@extends('layouts.front.template')

	@section('content')

@php $root = env('ROOT_FOLDER'); @endphp
				<!-- Including header -->
			@include('front.includes.header')


		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-mini">

			<div class="container clearfix">
				<h1>About Us</h1>
				<span>Everything you need to know about our Company</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">About Us</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

					<div class="container clearfix mb-5">

						<div class="row">
							<div class="col-lg-6">
								<h3>Objective</h3>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et, dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur ipsum libero quaerat, nam. Ad, sunt, error!</p>
							</div>

							<div class="col-lg-6">
								<h3>Our Mission</h3>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et, dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur ipsum libero quaerat, nam. Ad, sunt, error!</p>
							</div>
						</div>

					</div>


					<div class="container clearfix" style="margin-top: 10%; margin-bottom: 12%;">

						<!-- Contact Info
						============================================= -->
						<div class="row col-mb-50">
							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-map-marker2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Our Headquarters<span class="subtitle">Melbourne, Australia</span></h3>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-phone3"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Speak to Us<span class="subtitle">(123) 456 7890</span></h3>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-skype2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Make a Video Call<span class="subtitle">CanvasOnSkype</span></h3>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-twitter2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
									</div>
								</div>
							</div>
						</div><!-- Contact Info End -->
					</div>


					<div class="container clearfix">

							<div class="row col-mb-50 mb-0">

								<div class="col-lg-4">

									<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
										<h4>Why choose <span>Us</span>.</h4>
									</div>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

								</div>

								<div class="col-lg-4">

									<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
										<h4>Our <span>Mission</span>.</h4>
									</div>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

								</div>

								<div class="col-lg-4">

									<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
										<h4>What we <span>Do</span>.</h4>
									</div>

									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quidem minus id omnis, nam expedita, ea fuga commodi voluptas iusto, hic autem deleniti dolores explicabo labore enim repellat earum perspiciatis.</p>

								</div>

							</div>

						</div>


				<div class="section m-0">
					<div class="container clearfix">

						<div class="row col-mb-50">

							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn">
								<i class="i-plain i-xlarge mx-auto icon-line2-directions"></i>
								<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
								<h5>Lines of Codes</h5>
							</div>

							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
								<i class="i-plain i-xlarge mx-auto mb-0 icon-line2-graph"></i>
								<div class="counter counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
								<h5>KBs of HTML Files</h5>
							</div>

							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
								<i class="i-plain i-xlarge mx-auto mb-0 icon-line2-layers"></i>
								<div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span>*</div>
								<h5>No. of Templates</h5>
							</div>

							<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
								<i class="i-plain i-xlarge mx-auto mb-0 icon-line2-clock"></i>
								<div class="counter counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
								<h5>Hours of Coding</h5>
							</div>

						</div>

					</div>
				</div>



				<div class="container clearfix">

					<div class="clear"></div>

					<div class="heading-block center mt-5">
						<h4>Our Clients</h4>
					</div>

					<ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
						<li class="grid-item"><a href="http://logofury.com/logo/enzo.html"><img src="{{ asset($root.'front/images/clients/1.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com"><img src="{{ asset($root.'front/images/clients/2.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/03/grabbt/"><img src="{{ asset($root.'front/images/clients/3.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/01/ladera-granola/"><img src="{{ asset($root.'front/images/clients/4.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/02/hershel-farms/"><img src="{{ asset($root.'front/images/clients/5.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/food-fight-radio.html"><img src="{{ asset($root.'front/images/clients/6.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com"><img src="{{ asset($root.'front/images/clients/7.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/up-travel.html"><img src="{{ asset($root.'front/images/clients/8.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/caffi-bardi.html"><img src="{{ asset($root.'front/images/clients/9.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/bignix-design.html"><img src="{{ asset($root.'front/images/clients/10.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/"><img src="{{ asset($root.'front/images/clients/11.png') }}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/"><img src="{{ asset($root.'front/images/clients/12.png') }}" alt="Clients"></a></li>
					</ul>


				</div>

			</div>
		</section><!-- #content end -->


@push('custom-scripts')
	<script src="{{ asset($root.'front/js/plugins.animations.js' )}}"></script>
@endpush

@endsection
