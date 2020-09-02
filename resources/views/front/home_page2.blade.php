@extends('layouts.front.template')

@php $root = env('ROOT_FOLDER'); @endphp

@section('content')
    <link rel="stylesheet" href="{{ $root }}/front/owl/owl.carousel.min.css">
{{--    <link rel="stylesheet" href="{{ $root }}/public/front/owl/owl.theme.default.min.css">--}}
<style>
.dark .menu-link { color: #666; }
.dark .menu-link:hover { color: var(--themecolor); }
.sub-menu-container .menu-link:hover { color: white; }
.card-text { line-height: 1.6em; margin-bottom: 8px; color: #666; font-size: 14px; }
.card a:hover { color: var(--themecolor); font-weight: 600; }
.card i { font-size: 11px; margin-left: 2px; }
.bg-light { background: #fafafa !important; }
section { min-height: 400px; }
.owl-carousel { padding-top: 5%; }
.arrow-div { margin-top: 5%; }
.arrow-icon { width: 40px; height: 40px; background: #fff; padding-left: 15%; margin-bottom: 10px;  }
.arrow-icon:hover { box-shadow: 10px 10px 40px 5px #ccc; cursor: pointer; }
h3 { margin-top: 12% !important; }
.nav-link, .nav-link:hover { color: #fff; }
.item-body { height: 80%; }
.item-footer { height: 20%; }
.checked { color: #ffa500; }
.item-body img  { height: 210px; }
.stars, .item-footer { margin-top: 5%; }
a { color: #888a85 ; }
a:hover { var(--themecolor) !important; }
.h2 {
        font-size: 40px !important;
        font-family: cursive !important;
        color: gray;
}
.modal-form-body
{
    position: relative;
    width: 100%;
    height: 100%;
}
.hide { display: none; }
</style>
			<!-- Including header -->
		@include('front.includes.header')


		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap" style="overflow: visible;">

                <div class="container" style="z-index: 2">

                    <div class="row topmargin justify-content-end">
                        <div class="col-lg-6">

                          <h1>Find professionals for pretty much anything.</h1>
                           <form class="page-2" action="{{ url('get-quote')  }}" method="get">
                              <div class="input-group mb-3">
                                <input type="text" class="form-control company" autocomplete="off" id="destination" list="zip_codes" placeholder="Choose your destination?" style="width: 40%;">
                                <div class="input-group-append ">
                                  <button class="btn button btn-lg" id="modal_opened" data-toggle="modal" data-target="#myModal" type="button">search</button>
                                </div>
                              </div>
                           </form>
                        </div>
                        <div class="col-lg-5 d-none d-lg-flex flex-wrap justify-content-center">
                                <img src="{{ asset('public/front/images/640.jpg') }}" style="margin-top: -20% !important;" alt="Image 1" class="d-flex align-self-end ml-5 mt-3">
                        </div>
                    </div>
                </div>

                 <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog ">
      <div class="modal-content">

        <!-- Modal Header -->
          <h4 class="modal-title"></h4>
          <button type="button" class="close" style="position: absolute; z-index: 10; right: 5px; top:5px;" data-dismiss="modal">&times;</button>

        <!-- Modal body -->
        <div class="modal-body">
          <form  method="get" action="{{ url('get-quote') }}">
              <h4 class="text-center">Please Fill the Form</h4>
              <div class="form-group">
                  <input placeholder="Where are you moving from?" class="form-control"  list="zip_codes" name="from_location">
              </div>
              <div class="form-group">
                  <input class="form-control" placeholder="Select your moving date" type="date" name="date">
              </div>
              <div class="form-group">
                  <input placeholder="Where are you moving to?" class="form-control" list="zip_codes" name="to_location">
              </div>
              <datalist id="zip_codes"></datalist>
              <button class="btn btn-primary" type="submit"> Submit </button>

            </form>

        </div>


      </div>
    </div>
  </div>

                <!--Form Modal -->
                {{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="modal-form-body" id="formModalInfo">
                                        <h3 class="text-center"> We need some information from you.</h3>
                                        <button type="button" class="float-left btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q1">Next</button>
                                    </div>

                                    <div class="modal-form-body hide" id="q1">
                                        <input type="text" class="form-control company" name="current_location" placeholder="From" style="width: 40%;">
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="formModalInfo">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q2">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q2">
                                        <input type="text" class="form-control company" name="mover_name" placeholder="Name" style="width: 40%;">
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q1">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q3">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q3">
                                        <input type="text" class="form-control company" name="destination" required="" placeholder="Choose your destination?" style="width: 40%;">
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q2">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q4">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q4">
                                        <h3 class="text-center"> Phone </h3>
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q3">Back</button>
                                        <button type="button" class="float-right btn btn-primary changeTabBtn" data-value="q5">Next</button>
                                    </div>
                                    <div class="modal-form-body hide" id="q6">
                                        <h3 class="text-center"> Date </h3>
                                        <button type="button" class="float-left btn btn-secondary changeTabBtn" data-value="q5" data-dismiss="modal">Close</button>
                                        <button type="button" class="float-right btn btn-primary" >Submit</button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> --}}


            </div>
        </section><!-- #content end -->

    {{--                Companies Tab       --}}
                <section class="bg-light">
                    <div class="container-fluid">
                        <div class="row py-5">
                            <div class="col-md-3 pl-5">
                                <h3> Top Rated Moving Companies </h3>
                                <p class="card-text"> We analyzed millions of bids from Thumbtack professionals to see what things really cost. Find out what other people have paid for projects like yours. </p>
                                <a href="#" class="button button-rounded btn-sm"> Get All Companies <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                            </div>
                            <div class="col-md-8">
                                <div class="owl-carousel owl-theme" id="companyCarousel">
                                    <div class="item">
                                        <div class="item-body">
                                            <img src="https://secureservercdn.net/50.62.172.232/6cb.dd2.myftpupload.com/wp-content/uploads/2019/11/Moving-Companies.jpg" alt="">
                                        </div>
                                        <div class="item-footer">
                                            <h6> Company Name </h6>
                                            <div class="stars mt-n4">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-body">
                                            <img src="https://www.meganewsviral.com/wp-content/uploads/2019/02/questions_for_moving_company_large.jpg" alt="">
                                        </div>
                                        <div class="item-footer">
                                            <h6> Company Name </h6>
                                            <div class="stars mt-n4">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-body">
                                            <img src="http://www.movingsupplies.us/wp-content/uploads/2018/09/Moving-Companies-Helping-You-to-Relocate.jpg" alt="">
                                        </div>
                                        <div class="item-footer">
                                            <h6> Company Name </h6>
                                            <div class="stars mt-n4">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="item-body">
                                            <img src="https://www.iblogshub.com/wp-content/uploads/2019/08/Moving-Companies.jpg" alt="">
                                        </div>
                                        <div class="item-footer">
                                            <h6> Company Name </h6>
                                            <div class="stars mt-n4">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1 arrow-div">
                                <div class="arrow-icon" id="nextCompanybtn">
                                    <i class="fa fa-long-arrow-up" aria-hidden="true"></i><br>
                                </div>
                                <div class="arrow-icon"  id="prevCompanybtn">
                                    <i class="fa fa-long-arrow-down mt-3" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

        {{--     Retalors Tab    --}}
    <section class="clearfix">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme" id="retalorCarosousel">
                        <div class="item">
                            <div class="item-body">
                                <img src="https://snow-wolf-studios.com/wp-content/uploads/Fotolia_72430358_Subscription_Monthly_M-1.jpg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Realtors Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-body">
                                <img src="https://realtybiznews.com/wp-content/uploads/2017/02/Realtor.jpg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Realtors Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-body">
                                <img src="https://www.thechronicleherald.ca/media/photologue/photos/cache/while-the-market-is-plummeting-realtors-are-turning-to-high-tech-solutions-1_large.jpg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Realtors Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-body">
                                <img src="https://i2.wp.com/www.pammarketingnut.com/wp-content/uploads/iStock_000014364264XSmall.jpg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Realtors Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 arrow-div">
                    <div class="arrow-icon" id="nextRetalorbtn">
                        <i class="fa fa-long-arrow-up" aria-hidden="true"></i><br>
                    </div>
                    <div class="arrow-icon"  id="prevRetalorbtn">
                        <i class="fa fa-long-arrow-down mt-3" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-3 pr-5">
                    <h3> Top Rated Realtors </h3>
                    <p class="card-text"> We analyzed millions of bids from Thumbtack professionals to see what things really cost. Find out what other people have paid for projects like yours. </p>
                    <a href="#" class="button button-rounded btn-sm "> Get All Realtors <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                </div>
            </div>
        </div>
    </section>


    {{--                Service Providers Tab       --}}
    <section class="bg-light">
        <div class="container-fluid">
            <div class="row py-5">
                <div class="col-md-3 pl-5">
                    <h3> Top Rated Service Providers </h3>
                    <p class="card-text"> We analyzed millions of bids from Thumbtack professionals to see what things really cost. Find out what other people have paid for projects like yours. </p>
                    <a href="#" class="button button-rounded btn-sm"> Get All Service Providers <i class="fa fa-angle-double-right" aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme" id="spCarousel">
                        <div class="item">
                            <div class="item-body">
                                <img src="https://miro.medium.com/max/685/1*BfCdPHrqkGIIwv7j9O5LhQ.jpeg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Service Provider Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-body">
                                <img src="http://www.wall-ebuilders.com/wp-content/uploads/2018/04/brand-620x400.jpg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Service Provider Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-body">
                                <img src="https://i1.wp.com/movingtips.wpengine.com/wp-content/uploads/2018/07/movers-carrying-boxes.jpg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Service Provider Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-body">
                                <img src="https://i.pinimg.com/originals/a0/9f/01/a09f01c8f344512299f9830f0ec25e16.jpg" alt="">
                            </div>
                            <div class="item-footer">
                                <h6> Service Provider Name </h6>
                                <div class="stars mt-n4">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 arrow-div">
                    <div class="arrow-icon" id="nextspbtn">
                        <i class="fa fa-long-arrow-up" aria-hidden="true"></i><br>
                    </div>
                    <div class="arrow-icon"  id="prevspbtn">
                        <i class="fa fa-long-arrow-down mt-3" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--                Home Improvement Tab       --}}
    <section class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12 p-5">
                    <h2 class="text-center"> Home Improvement </h2>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c.png" alt="">
                                    </div>
                                    <div class="col-md-8">
                                        <h4> Home Remodeling </h4>
                                        <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                        <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c-1.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Kitchen Remodeling </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/Untitled-1.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Bathroom Remodeling </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/s.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Home Repair </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c-2.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Home Additions </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="img-responsive img-circle img-thumbnail" src="http://themebubble.com/demo/webify/consult/wp-content/uploads/sites/3/2019/03/c-3.png" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h4> Desk Extensions </h4>
                                    <p class="card-text">Whether it's a complete refurbishment or a small remodeling job, we have everything you need from the designers.</p>
                                    <a href="">View All <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
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
<script src="{{ $root }}/front/owl/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){

        const token = '{{ csrf_token()  }}';
            $.ajax({
                url: 'https://public.opendatasoft.com/api/records/1.0/search/?dataset=us-zip-code-latitude-and-longitude&q=',
                method: 'GET',
                success: function (response) {
                    $(response.records).each(function () {
                        const lat = ($(this)[0]['fields']['latitude']);
                        const long = ($(this)[0]['fields']['longitude']);
                        const zip = ($(this)[0]['fields']['zip']);
                        const city = ($(this)[0]['fields']['city']);
                        const state = ($(this)[0]['fields']['state']);
                        $('#zip_codes').append(`
                            <option data-lat='${lat}' data-long='${long}' value='${zip} , ${city} ${state}'></option>
                        `);
                    });
                },
                error: function (err) {
                    console.log(err);
                }
            });

        const company = $('#companyCarousel').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
        });
        $('#nextCompanybtn').click(function () {
            company.trigger('next.owl.carousel');
        });
        $('#prevCompanybtn').click(function () {
            company.trigger('prev.owl.carousel');
        });

        const relator = $('#retalorCarosousel').owlCarousel({
            loop:true,
            margin: 20,
            dots:false,
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

       $('#modal_opened').click(function(){
           $("input[name='from_location']").focus();
           const val = $('#destination').val();
           $("input[name='to_location']").val(val);
       });


    });
</script>
    @include('front.includes.footer')

@endsection
