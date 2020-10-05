

							<div class="sidebar-widgets-wrap">


							  	<div class="widget clearfix">

                                    <h4> <b> Featured Companies </b></h4>
									<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

									 @foreach( \App\Company\Profile::all() as $company )
										<div class="oc-item">
											<div class="portfolio-item">
												<div class="portfolio-image">
													<a href="#">
														<img src="{{asset('storage/company/media/'.$company->media->logo)}}" alt="Mac Sunglasses">
													</a>
													<div class="bg-overlay">
														<div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-speed="350">
															<a href="https://vimeo.com/89396394" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="zoomIn" data-hover-speed="350" data-lightbox="iframe"><i class="icon-line-play"></i></a>
														</div>
														<div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-speed="350"></div>
													</div>
												</div>
												<div class="portfolio-desc text-center pb-0">
													<h3><a href="{{ url('/company_profile') }}">{{ $company->name }}</a></h3>
													<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
												</div>
											</div>
										</div>
									 @endforeach


								</div>

								<div class="widget clearfix">

									<div class="tabs mb-0 clearfix" id="sidebar-tabs">

										<ul class="tab-nav clearfix">
											<li><a href="#tabs-1">Popular</a></li>
											<li><a href="#tabs-2">Recent</a></li>
											<li><a href="#tabs-3"><i class="icon-comments-alt mr-0"></i></a></li>
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tabs-1">
												<div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="images/small/3.jpg" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li><i class="icon-comments-alt"></i> 35 Comments</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="images/small/2.jpg" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li><i class="icon-comments-alt"></i> 24 Comments</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="images/small/1.jpg" alt="Image"></a>
																</div>
															</div>
															<div class="col pl-3">
																<div class="entry-title">
																	<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
																</div>
																<div class="entry-meta">
																	<ul>
																		<li><i class="icon-comments-alt"></i> 19 Comments</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-content clearfix" id="tabs-2">
												<div class="posts-sm row col-mb-30" id="recent-post-list-sidebar">
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="images/small/1.jpg" alt="Image"></a>
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
																	<a href="#"><img class="rounded-circle" src="images/small/2.jpg" alt="Image"></a>
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
																	<a href="#"><img class="rounded-circle" src="images/small/3.jpg" alt="Image"></a>
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
											<div class="tab-content clearfix" id="tabs-3">
												<div class="posts-sm row col-mb-30" id="recent-comments-list-sidebar">
													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
																</div>
															</div>
															<div class="col pl-3">
																<strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
																</div>
															</div>
															<div class="col pl-3">
																<strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
															</div>
														</div>
													</div>

													<div class="entry col-12">
														<div class="grid-inner row no-gutters">
															<div class="col-auto">
																<div class="entry-image">
																	<a href="#"><img class="rounded-circle" src="images/icons/avatar.jpg" alt="User Avatar"></a>
																</div>
															</div>
															<div class="col pl-3">
																<strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>

									</div>

								</div>



								<div class="widget clearfix">

									<h4>Tags</h4>
									<div class="tagcloud">
										<a href="#">general</a>
										<a href="#">videos</a>
										<a href="#">music</a>
										<a href="#">media</a>
										<a href="#">photography</a>
										<a href="#">parallax</a>
										<a href="#">ecommerce</a>
										<a href="#">terms</a>
										<a href="#">coupons</a>
										<a href="#">modern</a>
									</div>

								</div>

							</div>
