@extends('layouts.front.template')

@php $root = env('ROOT_FOLDER'); @endphp

@section('content')
  
			<!-- Including header -->
		@include('front.includes.header')


		<!-- Content
		============================================= -->

		<section>
   <div class="container">
		 <div class="row com-section-top">
				<div class="col-md-3">
              <div class="company-brand">
								<img class="img-thumbnail"  src="https://startbootstrap.com/assets/img/branding/start-bootstrap-logo-500x500.png" alt="">
								<h6>Comapny Name</h6>
								<p>Company Tagline</p>
							
							</div>
									<div class="menu-pills">
              <div class="nav  nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">About</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
					</div>
   
</div>
				</div>
				<div class="col-md-9 mb-2">
					  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTOTzarj6dvMcazIqd0Cr9FFsJy5QsVesHDfQ&usqp=CAU" alt="">
				</div>
		 </div>
		  <div class="row com-section">
				<div class="col-md-3">
			
           
				</div>
				<div class="col-md-9">
					<div class="menu-content">
                	  <div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
	<div class="about-data">
	         <div class="card " >
                            
                            <div class="card-body">
                                <h5 class="card-title">About Us</h5>
																 <p class="card-text mb-2">Services: <span> Full Service </span> 
																	
																  <div class="star-reviews">
																		Rating: <span> &nbsp;</span> 
                                 <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                               <p>(23 reviews)</p>
                                
                            </div>
																</p>
                                 
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d435521.4079239993!2d74.0542001338166!3d31.48263523074283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190483e58107d9%3A0xc23abe6ccc7e2462!2sLahore%2C%20Punjab!5e0!3m2!1sen!2s!4v1598862910657!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
														<div class="company-about-info">
                             <ul class="list-unstyled">
															 <li> <i class="fas fa-map-marker-alt mr-3"></i> Company Address is Here</li>
																<li> <i class="fas fa-phone-alt mr-3"></i> Company phone number is here</li>
																 
														 </ul>
														</div>
															</div>
                        </div>
	</div>
	</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">def</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">ghi</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">kml</div>
</div>
					</div>
				
				</div>
		 </div>
   </div>
		</section

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    @include('front.includes.footer')

@endsection
