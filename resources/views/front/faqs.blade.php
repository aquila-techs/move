@extends('layouts.front.template')

@section('content')

@php $root = env('ROOT_FOLDER'); @endphp

			<!-- Including header -->
		@include('front.includes.header')


		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>FAQs</h1>
				<span>All your Questions answered in one place</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">FAQs</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row gutter-40 col-mb-80">
						<!-- Post Content
						============================================= -->
						<div class="postcontent col-lg-9">

							<div class="grid-filter-wrap">
								<ul class="grid-filter style-4 customjs">

									<li class="activeFilter"><a href="#" data-filter="all">All</a></li>
									<li><a href="#" data-filter=".faq-marketplace">Marketplace</a></li>
									<li><a href="#" data-filter=".faq-authors">Authors</a></li>
									<li><a href="#" data-filter=".faq-legal">Legal</a></li>
									<li><a href="#" data-filter=".faq-itemdiscussion">Item Discussion</a></li>
									<li><a href="#" data-filter=".faq-affiliates">Affiliates</a></li>
									<li><a href="#" data-filter=".faq-miscellaneous">Miscellaneous</a></li>

								</ul>
							</div>

							<div class="clear"></div>

							<div id="faqs" class="faqs">

								<div class="toggle faq faq-marketplace faq-authors">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-question-sign"></i>
											<i class="toggle-open icon-question-sign"></i>
										</div>
										<div class="toggle-title">
											How do I become an author?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-authors faq-miscellaneous">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-comments-alt"></i>
											<i class="toggle-open icon-comments-alt"></i>
										</div>
										<div class="toggle-title">
											Helpful Resources for Authors
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-miscellaneous">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-lock3"></i>
											<i class="toggle-open icon-lock3"></i>
										</div>
										<div class="toggle-title">
											How much money can I make?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-authors faq-legal faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-download-alt"></i>
											<i class="toggle-open icon-download-alt"></i>
										</div>
										<div class="toggle-title">
											Can I offer my items for free on a promotional basis?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-marketplace faq-authors">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-ok"></i>
											<i class="toggle-open icon-ok"></i>
										</div>
										<div class="toggle-title">
											An Introduction to the Marketplaces for Authors
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-affiliates faq-miscellaneous">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-money"></i>
											<i class="toggle-open icon-money"></i>
										</div>
										<div class="toggle-title">
											How does the Tuts+ Premium affiliate program work?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-legal faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-picture"></i>
											<i class="toggle-open icon-picture"></i>
										</div>
										<div class="toggle-title">
											What Images, Videos, Code or Music Can I Use in my Items?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-legal faq-authors faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-file3"></i>
											<i class="toggle-open icon-file3"></i>
										</div>
										<div class="toggle-title">
											Can I use trademarked names in my items?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-affiliates">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-bar-chart"></i>
											<i class="toggle-open icon-bar-chart"></i>
										</div>
										<div class="toggle-title">
											Tips for Increasing Your Referral Income
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-authors faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-phone3"></i>
											<i class="toggle-open icon-phone3"></i>
										</div>
										<div class="toggle-title">
											How can I get support for an item which isn't working correctly?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

								<div class="toggle faq faq-marketplace faq-itemdiscussion">
									<div class="toggle-header">
										<div class="toggle-icon">
											<i class="toggle-closed icon-credit"></i>
											<i class="toggle-open icon-credit"></i>
										</div>
										<div class="toggle-title">
											How do I pay for items on the Marketplaces?
										</div>
									</div>
									<div class="toggle-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
								</div>

							</div>


						</div><!-- .postcontent end -->

						<!-- Sidebar
						============================================= -->
						<div class="sidebar col-lg-3">
							<div class="sidebar-widgets-wrap">

								<div class="widget widget_links clearfix">

									<h4>Pages</h4>
									<ul>
										<li><a href="#"><div>About Us</div></a></li>
										<li><a href="#"><div>About Us - Layout 2</div></a></li>
										<li><a href="#"><div>About Me</div></a></li>
										<li><a href="#"><div>Team Members</div></a></li>
										<li><a href="#"><div>Careers</div></a></li>
										<li><a href="#"><div>Side Navigation</div></a></li>
										<li><a href="#"><div>Page Submenu</div></a></li>
										<li><a href="#"><div>Services - Layout 1</div></a></li>
										<li><a href="#"><div>Services - Layout 2</div></a></li>
										<li><a href="#"><div>Services - Layout 3</div></a></li>
										<li><a href="#"><div>FAQs - Layout 1</div></a></li>
										<li><a href="#"><div>FAQs - Layout 2</div></a></li>
										<li><a href="#"><div>FAQs - Layout 3</div></a></li>
										<li><a href="#"><div>FAQs - Layout 4</div></a></li>
										<li><a href="#"><div>Full Width Page</div></a></li>
										<li><a href="#"><div>Full Width - Wide Page</div></a></li>
										<li><a href="#"><div>Right Sidebar Page</div></a></li>
										<li><a href="#"><div>Left Sidebar Page</div></a></li>
										<li><a href="#"><div>Both Sidebar Page</div></a></li>
										<li><a href="#"><div>Both Right Sidebar Page</div></a></li>
										<li><a href="#"><div>Both Left Sidebar Page</div></a></li>
										<li><a href="#"><div>Maintenance Page</div></a></li>
										<li><a href="#"><div>Blank Page</div></a></li>
										<li><a href="#"><div>Sitemap</div></a></li>
										<li><a href="#"><div>Login/Register</div></a></li>
										<li><a href="#"><div>404 - Simple Layout</div></a></li>
										<li><a href="#"><div>404 - Parallax Image</div></a></li>
										<li><a href="#"><div>404 - HTML5 Video</div></a></li>
									</ul>

								</div>

								<div class="widget clearfix">

									<h4>Recent Posts</h4>
									<div class="posts-sm row col-mb-30" id="post-list-sidebar">
										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset($root.'front/images/magazine/3.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset($root.'front/images/magazine/2.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>

										<div class="entry col-12">
											<div class="grid-inner row no-gutters">
												<div class="col-auto">
													<div class="entry-image">
														<a href="#"><img src="{{ asset($root.'front/images/magazine/1.jpg') }}" alt="Image"></a>
													</div>
												</div>
												<div class="col pl-3">
													<div class="entry-title">
														<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li>10th July 2021</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="widget clearfix">

									<h4>Connect with Us</h4>
									<a href="#" class="social-icon si-colored si-small si-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-delicious" data-toggle="tooltip" data-placement="top" title="Delicious">
										<i class="icon-delicious"></i>
										<i class="icon-delicious"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-android" data-toggle="tooltip" data-placement="top" title="Android">
										<i class="icon-android"></i>
										<i class="icon-android"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-gplus" data-toggle="tooltip" data-placement="top" title="Google Plus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-stumbleupon" data-toggle="tooltip" data-placement="top" title="Stumbleupon">
										<i class="icon-stumbleupon"></i>
										<i class="icon-stumbleupon"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-foursquare" data-toggle="tooltip" data-placement="top" title="Foursquare">
										<i class="icon-foursquare"></i>
										<i class="icon-foursquare"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-forrst" data-toggle="tooltip" data-placement="top" title="Forrst">
										<i class="icon-forrst"></i>
										<i class="icon-forrst"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-digg" data-toggle="tooltip" data-placement="top" title="Digg">
										<i class="icon-digg"></i>
										<i class="icon-digg"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-spotify" data-toggle="tooltip" data-placement="top" title="Spotify">
										<i class="icon-spotify"></i>
										<i class="icon-spotify"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-reddit" data-toggle="tooltip" data-placement="top" title="Reddit">
										<i class="icon-reddit"></i>
										<i class="icon-reddit"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-blogger" data-toggle="tooltip" data-placement="top" title="Blogger">
										<i class="icon-blogger"></i>
										<i class="icon-blogger"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-dribbble" data-toggle="tooltip" data-placement="top" title="Dribbble">
										<i class="icon-dribbble"></i>
										<i class="icon-dribbble"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-flickr" data-toggle="tooltip" data-placement="top" title="Flickr">
										<i class="icon-flickr"></i>
										<i class="icon-flickr"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-linkedin" data-toggle="tooltip" data-placement="top" title="Linked In">
										<i class="icon-linkedin"></i>
										<i class="icon-linkedin"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-rss" data-toggle="tooltip" data-placement="top" title="RSS">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-skype" data-toggle="tooltip" data-placement="top" title="Skype">
										<i class="icon-skype"></i>
										<i class="icon-skype"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-twitter" data-toggle="tooltip" data-placement="top" title="Twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-youtube" data-toggle="tooltip" data-placement="top" title="Youtube">
										<i class="icon-youtube"></i>
										<i class="icon-youtube"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-vimeo" data-toggle="tooltip" data-placement="top" title="Vimeo">
										<i class="icon-vimeo"></i>
										<i class="icon-vimeo"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-yahoo" data-toggle="tooltip" data-placement="top" title="Yahoo">
										<i class="icon-yahoo"></i>
										<i class="icon-yahoo"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-github" data-toggle="tooltip" data-placement="top" title="Github">
										<i class="icon-github-circled"></i>
										<i class="icon-github-circled"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-tumblr" data-toggle="tooltip" data-placement="top" title="Trumblr">
										<i class="icon-tumblr"></i>
										<i class="icon-tumblr"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-instagram" data-toggle="tooltip" data-placement="top" title="Instagram">
										<i class="icon-instagram"></i>
										<i class="icon-instagram"></i>
									</a>

									<a href="#" class="social-icon si-colored si-small si-pinterest" data-toggle="tooltip" data-placement="top" title="Pinterst">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>

								</div>

								<div class="widget clearfix">

									<h4>Embed Videos</h4>
									<iframe src="//player.vimeo.com/video/103927232" width="500" height="250" allow="autoplay; fullscreen" allowfullscreen></iframe>

								</div>

							</div>
						</div><!-- .sidebar end -->
					</div>

				</div>
			</div>
		</section><!-- #content end -->

@endsection
