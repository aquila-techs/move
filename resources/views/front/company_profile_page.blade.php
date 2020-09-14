@extends('layouts.front.template')

@php $root = env('ROOT_FOLDER'); @endphp

<style>
    h3, h4,h5, h6 { color: #555 !important; font-weight: 550 !important; }
    .review-user-info {
        display: flex;
        align-items: center;
        margin-bottom: 2%;
    }

    .review-user-info .user-data {
        padding-left: 3%;
    }
    .rating-section h5,.review-user-info h5,.review-user-info h6{
        margin: 0 auto;
    }
    .star-rating--orange { color: orange !important; }
    .company_profile_page .nav-pills .active { background: var(--themecolor) !important; }
    .company_profile_page .nav-link { margin: 30px 50px; }
        .company-brand h4 { margin: 0; }
    .company-brand p { font-size: 13px; padding-top: 5px; }
    .company_brand img { height: 150px; margin-left: -10% !important;  }
    .menu-content p, .menu-content li, .menu-content
    {
        font-size: 16px;
        font-weight: 500;
        color: #777;
        letter-spacing: .5px;
        line-height: 2rem;
    }
    .company_profile_page li { list-style: none; line-height: 3rem; }
    .company_profile_page .pros li:before, .company_profile_page .cons li:before ,.company_profile_page .services li:before {
        display: inline-block;
        margin-left: -1.3em; /* same as padding-left set on li */
        width: 1.3em; /* same as padding-left set on li */
        font-size: 22px;
        color: var(--themecolor);
        font-weight: 600;
    }

    .company_profile_page .pros li:before{
        content: "\f118"; /* FontAwesome Unicode */
        font-family: FontAwesome;
    }

    .company_profile_page .cons li:before{
        content: "\f119"; /* FontAwesome Unicode */
        font-family: FontAwesome;
        color: #ff5722;
    }
    .company_profile_page .services li:before{
        content: "\f00c"; /* FontAwesome Unicode */
        font-family: FontAwesome;
    }
    .company_profile_page .rating-div
    {
        display: flex;
        justify-content: space-between;
    }
    .company_profile_page .rating-div span-div {  justify-content: flex-end; }
    .company_profile_page .side-bar-links {
        font-size: 15px;
        margin-left: -50px !important;
        font-weight: 600;
    }
    .company_profile_page .side-bar-links li:before {
        content: "\f101"; /* FontAwesome Unicode */
        font-family: FontAwesome;
    }
</style>
@section('content')

			<!-- Including header -->
		@include('front.includes.header')


		<!-- Content
		============================================= -->

		<section class="my-5 company_profile_page">
   <div class="container">
     <div class="row com-section-top">
        <div class="col-md-2">
                <div class="company-brand">
                    <img class="img-rounded mb-3" style="margin-left: -10%;"  src="https://cdn.unlockboot.com/wp-content/uploads/2018/12/type-apple-logo.jpg" alt="">
                    <h4>Comapny Name</h4>
                    <p>Company Tagline</p>
                </div>
            <button class="btn btn-outline-success btn-sm"> Get Quote <i class="fa fa-angle-double-right" aria-hidden="true"></i> </button>

        </div>

        <div class="col-md-10">
              <img class="img img-responsive  img-rounded" width="100%" height="400px;" src="https://media.glassdoor.com/l/56/16/7c/72/store-front.jpg" alt="">
        </div>
     </div>

       <div class="row com-section">
            <div class="col-md-2 pt-5 ml-n3">

                <ul class="side-bar-links">
                    <li>
                        <a href="#"> Lorem ipsem </a>
                    </li>
                    <li>
                        <a href="#"> Lorem ipsem Lorem ipsem Lorem ipsem </a>
                    </li>
                    <li>
                        <a href="#"> Lorem ipsem Lorem ipsem</a>
                    </li>
                    <li>
                        <a href="#"> Lorem ipsem Lorem ipsem</a>
                    </li><li>
                        <a href="#"> Lorem ipsem </a>
                    </li>
                    <li>
                        <a href="#"> Lorem ipsem Lorem ipsem Lorem ipsem Lorem ipsem </a>
                    </li>
                    <li>
                        <a href="#"> Lorem ipsem </a>
                    </li>
                    <li>
                        <a href="#"> Lorem ipsem </a>
                    </li>


                </ul>

            </div>

            <div class="col-md-10">
                <div class="menu-content">
                    <div class="nav  nav-pills mb-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Company Overview</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Services</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Reviews</a>
                    </div>
                  <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="about-data">

                            <h3> Company Overview </h3>
                            <p>
                                American Van Lines (USDOT# 614506) started in 1995 with only two trucks and a single location. The company has grown to become a nationwide mover with over 70 trucks servicing all 48 states. Despite their rapid growth, American still feels like a family owned business.
                            </p>
                            <p>
                                This year, Newsweek Magazine commissioned an independent survey and found American Van Lines ranks as one of America’s Best Customer Service 2019 in the Moving Services category. Wow!
                            </p>
                            <p>
                                Their focus on customer service and affordable pricing put them at the top of our list!
                            </p>

                            <h4> Pros </h4>

                            <ul class="row pros">
                                <li class="col-6">
                                    Excellent customer service scores
                                </li>
                                <li class="col-6">
                                    Best pricing we've seen
                                </li>
                                <li class="col-6">
                                    Can handle last minute moves
                                </li>
                                <li class="col-6">
                                    Various options to get a quote (video, app, phone)
                                </li>
                                <li class="col-6">
                                    Private storage options available
                                </li>
                                <li class="col-6">
                                    Can handle antiques, pianos, fine art, etc.
                                </li>
                                <li class="col-6">
                                    Member of top industry organizations
                                </li>
                            </ul>

                            <h4> Cons </h4>
                            <ul class="row cons">
                                <li class="col-6">
                                    May require a deposit at booking
                                </li>
                            </ul>

                        </div>
                      </div>

                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                          <h4> Services </h4>

                          <ul class="row services">
                              <li class="col-4"> Professional Drivers </li>
                              <li class="col-4"> Packing & Unpacking </li>
                              <li class="col-4"> Loading & Unloading </li>
                              <li class="col-4"> Moving Supplies </li>
                              <li class="col-4"> Moving Insurance </li>
                              <li class="col-4"> Storage </li>
                          </ul>
                      </div>

                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                          <div class="row">
                              <div class="col-12 mb-5">
                                  <div class="rating-div">
                                      <h4> Rating
                                          <span class="mx-3" style="color:orange"> 4.00 </span>
                                          <span class="star-rating star-rating--orange">
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                </span>
                                      </h4>
                                      <ul>
                                          <li> Pricing Accuracy
                                              <span class="float-right star-rating star-rating--orange">
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                </span>
                                              <span class="float-right mx-3" style="color:orange"> 4.00 </span>
                                          </li>
                                          <li> Timeliness
                                              <span class="float-right star-rating star-rating--orange">
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                </span>
                                              <span class="float-right mx-3" style="color:orange"> 5.00 </span>
                                          </li>
                                          <li> Customer Service
                                              <span class="float-right star-rating star-rating--orange">
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                                </span>
                                              <span class="float-right mx-3" style="color:orange"> 3.00 </span>
                                          </li>
                                      </ul>
                                  </div>
                                  <div class="review-user-info">
                                      <img src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="" class="img img-thumbnail img-responsive">
                                      <div class="user-data">
                                          <h5> John </h5>
                                          <h6> 12-03-2019 </h6>
                                          <h6>
                                            <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            </span>
                                          </h6>
                                      </div>
                                  </div>
                                  <div class="user-comment">
                                      <p>
                                          A little hiccup on the pricing as the inventory I submitted wasn't accurate. The binding estimate nearly doubled but they changed to arrangement to weight-based which raised the price about $600 but was not unreasonable. I guess lesson-learned is to really understand the inventory needs to be accurate. Would highly recommend.
                                      </p>
                                  </div>

                                  <div class="row mt-3 rating-section">
                                      <div class="col-2">
                                          <h5> Pricing Accuracy </h5>
                                          <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            </span>
                                      </div>
                                      <div class="col-2">
                                          <h5> Timeliness </h5>
                                          <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star"
                                                  aria-hidden="true"></span>&nbsp;
                                            </span>
                                      </div>
                                      <div class="col-2">
                                          <h5> Customer Service </h5>
                                          <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            </span>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-12">
                                  <div class="review-user-info">
                                      <img src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="" class="img img-thumbnail img-responsive">
                                      <div class="user-data">
                                          <h5> John </h5>
                                          <h6> 12-03-2019 </h6>
                                          <h6>
                                            <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            </span>
                                          </h6>
                                      </div>
                                  </div>
                                  <div class="user-comment">
                                     <p>
                                         A little hiccup on the pricing as the inventory I submitted wasn't accurate. The binding estimate nearly doubled but they changed to arrangement to weight-based which raised the price about $600 but was not unreasonable. I guess lesson-learned is to really understand the inventory needs to be accurate. Would highly recommend.
                                     </p>
                                  </div>

                                  <div class="row mt-3 rating-section">
                                      <div class="col-2">
                                          <h5> Pricing Accuracy </h5>
                                          <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            </span>
                                      </div>
                                      <div class="col-2">
                                          <h5> Timeliness </h5>
                                          <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            </span>
                                      </div>
                                      <div class="col-2">
                                          <h5> Customer Service </h5>
                                          <span class="star-rating star-rating--orange">
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            <span class="fa fa-star" aria-hidden="true"></span>&nbsp;
                                            </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>

            </div>

		 </div>
   </div>
		</section>
<script src="https://use.fontawesome.com/3f7c8758bb.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    @include('front.includes.footer')

@endsection
