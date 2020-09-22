@extends('layouts.front.template')

@php if(env('ROOT_FOLDER')) $root = env('ROOT_FOLDER'); else $root='/public/' @endphp
{{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v4.7.0/css/font-awesome-css.min.css">--}}

{{--<link rel="stylesheet" href="{{ asset($root.'front/css/fontawesome.min.css') }}" type="text/css" />--}}
<style>
.dark .menu-link { color: #666 !important; }
.dark .menu-link:hover { color: var(--themecolor) !important; }
.sub-menu-container .menu-link:hover { color: white; }
.bg-light { background: #fafafa !important; }
section { min-height: 400px; }
a { color: #888a85 ; }
.card-title { font-size: 20px; }
.qtus, .qtus p { font-size: 14px !important; }

</style>
@section('content')

    <!-- Including header -->
    @include('front.includes.header')


    <!-- Content
		============================================= -->


    <section class="py-5 qtus">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-7 col-lg-8">
          <div class="row">
            <div class="col-sm-12">
              <div class="row-box well--idea mb-4">
                <h5><b>June</b> is peak moving season. Prices will be higher with limited availability, especially near the end of the month! <a href="">Book Soon!</a></h5>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row-box well--idea mb-4">
                  <h5>You're moving close to  <b>Independence Day</b> . Holidays are extremely busy. Prices will be higher with limited availability.
                  <a href="">Book Soon!</a></h5>
              </div>
            </div>

          <div class="col-sm-4 py-5">
              <div class="row-box mb-4">
                  <span class="float-left"> From  </span>
                  <span class="float-right"> {{ $request->from_location  }}  </span>
              </div>
          </div>

          <div class="col-sm-4 py-5 ">
              <div class="row-box mb-4">
                  <span class="float-left"> To </span>
                  <span class="float-right">  {{ $request->to_location  }}   </span>
              </div>
          </div>

          <div class="col-sm-4  py-5">
              <div class="row-box mb-4">
                  <span class="float-left"> Date </span>
                  <span class="float-right"> {{ $request->date  }} </span>
              </div>
          </div>

             <div class="col-md-6 col-lg-4">

              <div class="row-box mb-4 people-box">
                <a href="">
                    <i class="fas fa-people-carry"></i>
                    <h4>Professional</h4>
                    <p> $0 - $0 </p>
                </a>
              </div>
             </div>
            <div class="col-md-6 col-lg-4">
              <div class="row-box mb-4 people-box">
                <a href="">
                  <i class="fas fa-warehouse"></i>
                  <h4>Container</h4>
                  <p> $0 - $0 </p>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="row-box mb-4 people-box">
                <a href="">
                <i class="fas fa-truck-moving"></i>
                  <h4>Rental Truck</h4>
                  <p> $0 - $0 </p>
                </a>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row-box well--idea mb-4">
                <h5><b>These price ranges are a rough estimate!</b> The actual size of your move, additional services required, truck parking
                access, and availability can greatly affect the actual cost of your move.</h5>
              </div>
            </div>
          </div>



      </div>
      <div class="col-sm-12 col-md-5 col-lg-4">
            <div class="row-box sidebar text-center mb-4">
              <h6>Our <b>#1 choice</b>  for local movers.</h6>
              <img src="{{ asset($root.'front/images/hireahelper-logo-2color.svg') }}" alt="">
              <div class="star-reviews mb-3">
                <ul>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                </ul>
                <p>4.7 Avg. Rating
                </p>
              </div>
              <a class="active-btn mb-2 mr-2" href="">Check Price</a>
              <p>Fast, easy, no commitment</p>
            </div>

            <div class="row-box sidebar  mb-4">
              <h6>THE RESULTS ARE IN!</h6>
              <h4>2020 Best Moving Container Guide</h4>
              <p>We evaluated over 500 moving container companies and narrowed it down to the top 7 in the country!</p>
              <div class="text-center">
                <a class="active-btn peach-btn mb-2 mr-2" href="">Read More</a>
              </div>

            </div>

{{--            <div class="row-box sidebar  mb-4">--}}
{{--              <h6>MOVING A CAR?</h6>--}}
{{--              <h4>2020 Best Auto-Shippers</h4>--}}
{{--              <p>Get instant pricing for shipping your vehicle safely and affordably.</p>--}}
{{--              <div class="text-center">--}}
{{--                <a class="active-btn peach-btn mb-2 mr-2" href="">Read More</a>--}}
{{--              </div>--}}

{{--            </div>--}}
      </div>

    </div>



    <!-- slider -->
      <div class="row bg-white p-5 mb-5">
          <div class="row">
              <div class="col-sm-12">
                    <div class="row-box mover mb-4">
            <h5>THEY LOAD, THEY DRIVE</h5>
            <h1>Professional Movers</h1>
            <p><span> 0$ </span> to <span> 0$ </span></p>
            <div class="lists">
              <ul>
                <li>All loading and unloading</li>
                <li>Moving blankets, pads, straps</li>
                <li>Furniture breakdown &amp; reassembly</li>
                <li>Moving equipment (dolly, rollers)</li>
                <li>Fuel, tolls, taxes</li>
                <li>Parking permits</li>
              </ul>
            </div>

            <p>We found   <b> {{ count($pms) }} </b> local movers near that would be perfect for you:</p>
          </div>
              </div>
          </div>
             <div class="col-sm-11">
                    <div class="owl-carousel owl-theme" id="companyCarousel1">
                    @foreach( $pms as $pm )
                        <div class="item">
                            <a href="{{ url('company_profile')  }}">
                              <div class="card text-center company-card" >
                                <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"> {{ $pm->company->name }} </h5>
                                    <div class="star-reviews mb-3">
                                         <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                       <p class="p-1">(23 reviews)</p>
                                        <a href="#">Visit Website <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach

                                </div>
                            </div>
                            <div class="col-sm-1 arrow-div">
                                <div class="arrow-icon" id="nextCompanybtn1">
                                    <i class="fas fa-long-arrow-alt-up"></i><br>
                                </div>
                                <div class="arrow-icon"  id="prevCompanybtn1">
                                    <i class="fas fa-long-arrow-alt-down"></i>
                                </div>
                            </div>


  </div>

   <div class="row bg-white p-5 mb-5">
          <div class="row">
              <div class="col-sm-12">
                    <div class="row-box mover mb-4">
            <h5>THEY LOAD, THEY DRIVE</h5>
            <h1>Realtors Movers</h1>
            <p><span> 0$ </span> to <span> 0$ </span></p>
            <div class="lists">
              <ul>
                <li>All loading and unloading</li>
                <li>Moving blankets, pads, straps</li>
                <li>Furniture breakdown &amp; reassembly</li>
                <li>Moving equipment (dolly, rollers)</li>
                <li>Fuel, tolls, taxes</li>
                <li>Parking permits</li>
              </ul>
            </div>

            <p>We found   <b> {{ count($realtors) }} </b> local movers near that would be perfect for you:</p>
          </div>
              </div>
          </div>
             <div class="col-sm-11">
                                <div class="owl-carousel owl-theme" id="companyCarousel2">
                                    @foreach( $realtors as $realtor )
                                        <div class="item">
                                            <div class="card text-center company-card" >
                                                <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title"> {{ $realtor->company->name }} </h5>
                                                    <div class="star-reviews mb-3">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <p class="p-1">(23 reviews)</p>
                                                        <a href="#">Visit Website <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                                    </div>
                                                    <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-1 arrow-div">
                                <div class="arrow-icon" id="nextCompanybtn2">
                                    <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i><br>
                                </div>
                                <div class="arrow-icon"  id="prevCompanybtn2">
                                    <i class="fas fa-long-arrow-alt-down " aria-hidden="true"></i>
                                </div>
                            </div>


  </div>

   <div class="row bg-white p-5 mb-5">
          <div class="row">
              <div class="col-sm-12">
                    <div class="row-box mover mb-4">
            <h5>THEY LOAD, THEY DRIVE</h5>
            <h1>Service Provider </h1>
            <p><span> 0$ </span> to <span> 0$ </span></p>
            <div class="lists">
              <ul>
                <li>All loading and unloading</li>
                <li>Moving blankets, pads, straps</li>
                <li>Furniture breakdown &amp; reassembly</li>
                <li>Moving equipment (dolly, rollers)</li>
                <li>Fuel, tolls, taxes</li>
                <li>Parking permits</li>
              </ul>
            </div>

            <p>We found   <b> {{ count($sps) }} </b> local movers near that would be perfect for you:</p>
          </div>
              </div>
          </div>
             <div class="col-sm-11">
                                <div class="owl-carousel  owl-theme" id="companyCarousel3">
                                    @foreach( $sps as $sp )
                                        <div class="item">
                                            <div class="card text-center company-card" >
                                                <img class="mx-auto d-flex img-responsive img-circle mt-2 img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title"> {{ $sp->company->name }} </h5>
                                                   <div class="star-reviews mb-3">
                                                        <ul>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                        </ul>
                                                        <p class="p-1">(23 reviews)</p>
                                                        <a href="#">Visit Website <i class="fa fa-external-link" aria-hidden="true"></i></a>
                                                    </div>
                                                    <a href="#" class="btn btn-sm btn-outline-info">Get Quote</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-1 arrow-div">
                                <div class="arrow-icon" id="nextCompanybtn3">
                                    <i class="fas fa-long-arrow-alt-up" aria-hidden="true"></i><br>
                                </div>
                                <div class="arrow-icon"  id="prevCompanybtn3">
                                    <i class="fas fa-long-arrow-alt-down " aria-hidden="true"></i>
                                </div>
                            </div>


  </div>
      </div>

</section>

{{--<script src="https://use.fontawesome.com/3f7c8758bb.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="{{ $root }}/front/owl/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function(){



        const company1 = $('#companyCarousel1').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextCompanybtn1').click(function () {
            company1.trigger('next.owl.carousel');
        });
        $('#prevCompanybtn1').click(function () {
            company1.trigger('prev.owl.carousel');
        });

   const company2 = $('#companyCarousel2').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextCompanybtn2').click(function () {
            company2.trigger('next.owl.carousel');
        });
        $('#prevCompanybtn2').click(function () {
            company2.trigger('prev.owl.carousel');
        });

          const company3 = $('#companyCarousel3').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextCompanybtn3').click(function () {
            company3.trigger('next.owl.carousel');
        });
        $('#prevCompanybtn3').click(function () {
            company3.trigger('prev.owl.carousel');
        });

        const relator = $('#retalorCarosousel').owlCarousel({
             loop:true,
    margin:10,
    responsiveClass:true,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
        });
        $('#nextRetalorbtn').click(function () {
            relator.trigger('next.owl.carousel');
        });
        $('#prevRetalorbtn').click(function () {
            relator.trigger('prev.owl.carousel');
        });

        const sp = $('#spCarousel').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextspbtn').click(function () {
            sp.trigger('next.owl.carousel');
        });
        $('#prevspbtn').click(function () {
            sp.trigger('prev.owl.carousel');
        });

    });
</script>
    @include('front.includes.footer')

@endsection

