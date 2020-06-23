		<!-- Header
		============================================= -->
		<header id="header" class="dark" data-menu-padding="24" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row">

					<!-- Logo
					============================================= -->
					<div id="logo" class="ml-auto ml-md-0">
						<a href="{{ url('/') }}" class="standard-logo" data-dark-logo="images/logo-dark.png">Move In and Out</a>
						<a href="{{ url('/') }}" class="retina-logo" data-dark-logo="images/logo-dark@2x.png">
						Move In and Out</a>
					</div><!-- #logo end -->

					<ul class="header-extras d-none d-sm-flex mx-auto mx-md-0 mb-4 mb-md-0">
						<li>
							<i class="i-plain icon-call m-0"></i>
							<div class="he-text font-weight-normal text-white-50">
								Call Us:
								<span><a href="tel:+111 22-33-44" class="text-white font-weight-medium">+111 22-33-44</a></span>
							</div>
						</li>
						<li>
							<i class="i-plain icon-line2-envelope m-0"></i>
							<div class="he-text font-weight-normal text-white-50">
								Email Us:
								<span><a href="mailto:info@canvas.com" target="_top" class="text-white font-weight-medium">info@moveinandout.com</a></span>
							</div>
						</li>
					</ul>

				</div>
			</div>

			<div id="header-wrap">
				<div class="container">
					<div class="header-row justify-content-between flex-row-reverse flex-lg-row">

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

							<!-- Header Buttons
							============================================= -->
							<div class="header-buttons d-none d-sm-inline-block">
								<a href="#slider" data-scrollto="#slider" data-offset="-80" class="button button-rounded button-white button-light button-small m-0">Get a Quote</a>
							</div>

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows not-dark">

							<ul class="menu-container">
								<li class="current menu-item"><a class="menu-link" href="{{ url('/') }}"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('about_us') }}"><div>Our Company</div></a></li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Rates</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-line2-home"></i>Home Moving</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-building2"></i>Office Moving</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-line2-globe"></i>International Moving</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-paw"></i>Pet Shifting</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-car"></i>Car Shifting</div></a></li>
										<li class="menu-item"><a class="menu-link" href="#"><div><i class="icon-truck1"></i>Hire Truck</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a class="menu-link" href="#"><div>Team</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('faqs') }}"><div>FAQs</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('blog_I') }}"><div>Blog</div></a></li>
								<li class="menu-item"><a class="menu-link" href="{{ url('contact_us') }}"><div>Contact Us</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
		</header><!-- #header end -->
