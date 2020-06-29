@extends('layouts.front.main_template')

@php $root = env('ROOT_FOLDER'); @endphp

@push('custom-css')
    <link rel="stylesheet" href="{{  asset($root.'front/headphones/headphones.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49bf7f7ca4.js" crossorigin="anonymous"></script>

@endpush

<style>
    #owl-demo .item{
        padding: 15px;
    }

    #custom_btns{
        position: relative;
        top: 35%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
    .customNextBtn, .customPreviousBtn{
        ackground-color: #fff;
        box-shadow: -14.142px 14.142px 20px 0px rgba(157,157,157,0.2);
        padding: 14px;
        color: #000;
        font-weight: 500;
        border: 1px solid #f5f5f5;
        display: inline-flex;
        cursor: pointer;
    }
    .gtc_pictures img { min-height: 400px; margin-bottom: 5%; }
    .customNextBtn:hover, .customPreviousBtn:hover
    {
        box-shadow: -21.142px 9.142px 20px #ccc;
    }
    .transparent-header
    {
        background: rgba(255,255,255,.2) !important;
    }
    .menu-item a
    {
        margin-right: 10px !important;
    }
    #logo a, .menu-item a
    {
        color: white !important;
    }
    .sub-menu-container
    {
        background: #fff !important;
    }
    .sub-menu-container .menu-item a
    {
        color: #0F66DD !important;
    }
    .sub-menu-container .menu-item a:hover
    {
        color: white !important;
    }
    .text-overlay-wrap img
    {
        height: 300px;
    }
    .vertical-middle a
    {
        position: absolute;
        bottom: 15%;
        left: 31%;
        width: 150px;
    }
    .image-text
    {
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        width: calc(100% - 30px);
        height: 100%;
        z-index: 1;
        /*background-color: rgba(255,255,255,.3);*/
        margin-left: 15px;
        -webkit-transition: all .4s ease;
        -o-transition: all .4s ease;
        transition: all .4s ease;
    }
    .image-text h4
    {
        margin-top: 10%;
        color: white;
        background: rgba(0,0,0,.5) !important;
        border-radius: 5px;
        padding: 5px;
        font-size: 22px !important;
        text-transform: uppercase;
    }
</style>

@section('content')
    <!-- Header
		============================================= -->
<div style="height: 100vh; padding: 60px 0; background: url({{ asset($root.'front/images/main_cover.jpg') }}) no-repeat center center / 100% 100%;">
    <header id="header" class="dark transparent-header"  style="position:absolute; top:0; left: 0; width:100%;" data-menu-padding="24" data-sticky-shrink="false">
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


    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element" >

        <div class="container" style="z-index: 2">
            <div class="row topmargin">
                <div class="col-lg-6" style="margin-top:15vh;">
                    <ul class="nav nav-tabs nav-justified flex-column border-bottom-0 flex-md-row bg-color mt-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link py-3 active" id="home-moving-tab" data-toggle="tab" href="#home-moving" role="tab" aria-controls="home-moving" aria-selected="true">Home Moving</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" id="office-moving-tab" data-toggle="tab" href="#office-moving" role="tab" aria-controls="office-moving" aria-selected="false">Office Moving</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-3" id="others-moving-tab" data-toggle="tab" href="#others-moving" role="tab" aria-controls="others-moving" aria-selected="false">Others Service</a>
                        </li>
                    </ul>
                    <div class="tab-content rounded-bottom shadow bg-white py-4 px-5">
                        <div class="tab-pane fade show active" id="home-moving" role="tabpanel" aria-labelledby="home-moving-tab">
                            <p class="mb-4">Shift to your new Home, So we're here. Please send us your Deatils &amp; our team will contact your email asap.</p>
                            <div class="form-widget">
                                <div class="form-result"></div>
                                <form class="row home-moving-form position-relative mb-0" action="include/form.php" method="post" enctype="multipart/form-data">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-truck1"></i></span>
                                        </div>
                                        <input type="text" name="home-moving-form-location-from" id="home-moving-form-location-from" class="form-control required" value="" placeholder="Location From">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-map"></i></span>
                                        </div>
                                        <input type="text" name="home-moving-form-location-to" id="home-moving-form-location-to" class="form-control required" value="" placeholder="Location To">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-user"></i></span>
                                        </div>
                                        <input type="text" name="home-moving-form-name" id="home-moving-form-name" class="form-control required" value="" placeholder="Your Full Name">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-envelope"></i></span>
                                        </div>
                                        <input type="email" name="home-moving-form-email" id="home-moving-form-email" class="form-control required" value="" placeholder="Your Email">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-call-out"></i></span>
                                        </div>
                                        <input type="text" name="home-moving-form-phone" id="home-moving-form-phone" class="form-control required" value="" placeholder="Your Phone Number">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control home-date required" name="home-moving-form-date" id="home-moving-form-date" value="" placeholder="Your Date">
                                    </div>

                                    <div class="col-12 d-none">
                                        <input type="text" id="home-moving-form-botcheck" name="home-moving-form-botcheck" value="" />
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" name="home-moving-form-submit" class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2">Contact Us</button>
                                    </div>

                                    <input type="hidden" name="prefix" value="home-moving-form-">
                                    <input type="hidden" name="subject" value="Home Moving Request">
                                    <input type="hidden" name="html_title" value="Home Moving">
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="office-moving" role="tabpanel" aria-labelledby="office-moving-tab">
                            <p class="mb-4">Share your Office Shifting details by Filling out an Easy Form. Get Free Quotes from Verified Packers &amp; Movers Instantly.</p>
                            <div class="form-widget">
                                <div class="form-result"></div>
                                <form class="row office-moving-form position-relative mb-0" action="include/form.php" method="post" enctype="multipart/form-data">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-truck1"></i></span>
                                        </div>
                                        <input type="text" name="office-moving-form-location-from" id="office-moving-form-location-from" class="form-control required" value="" placeholder="Location From">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-map"></i></span>
                                        </div>
                                        <input type="text" name="office-moving-form-location-to" id="office-moving-form-location-to" class="form-control required" value="" placeholder="Location To">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-user"></i></span>
                                        </div>
                                        <input type="text" name="office-moving-form-name" id="office-moving-form-name" class="form-control required" value="" placeholder="Your Full Name">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-envelope"></i></span>
                                        </div>
                                        <input type="email" name="office-moving-form-email" id="office-moving-form-email" class="form-control required" value="" placeholder="Your Email">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-call-out"></i></span>
                                        </div>
                                        <input type="text" name="office-moving-form-phone" id="office-moving-form-phone" class="form-control required" value="" placeholder="Your Phone Number">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control home-date required" name="office-moving-form-date" id="office-moving-form-date" value="" placeholder="Your Date">
                                    </div>

                                    <div class="col-12 d-none">
                                        <input type="text" id="office-moving-form-botcheck" name="office-moving-form-botcheck" value="" />
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" name="office-moving-form-submit" class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2">Contact Us</button>
                                    </div>

                                    <input type="hidden" name="prefix" value="office-moving-form-">
                                    <input type="hidden" name="subject" value="Office Moving Request">
                                    <input type="hidden" name="html_title" value="Office Moving">
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="others-moving" role="tabpanel" aria-labelledby="others-moving-tab">
                            <div class="form-widget">
                                <div class="form-result"></div>
                                <form class="row others-moving-form position-relative mb-0" action="include/form.php" method="post" enctype="multipart/form-data">
                                    <div class="form-process">
                                        <div class="css3-spinner">
                                            <div class="css3-spinner-scaler"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><img src="{{ asset($root.'front/movers/images/baggage.png') }}" height="18" alt="baggage Icon"></span>
                                        </div>
                                        <select class="required custom-select" name="others-moving-form-service" id="others-moving-form-service">
                                            <option value="" disabled selected>-- Select Your Service --</option>
                                            <option value="International Moving">International Moving</option>
                                            <option value="Pet Moving">Pet Moving</option>
                                            <option value="Car Moving">Car Moving</option>
                                            <option value="Hire Mover Truck">Hire Mover Truck</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-social-dropbox"></i></span>
                                        </div>
                                        <input type="text" name="others-moving-form-item" id="others-moving-form-item" class="form-control required" value="" placeholder="Your Item">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text text-muted bg-transparent"><i class="icon-user-circle1"></i></span>
                                        </div>
                                        <select class="required custom-select" name="others-moving-form-movers" id="others-moving-form-movers">
                                            <option value="" disabled selected>-- Select Movers --</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-truck1"></i></span>
                                        </div>
                                        <input type="text" name="others-moving-form-location-from" id="others-moving-form-location-from" class="form-control required" value="" placeholder="Location From">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-map"></i></span>
                                        </div>
                                        <input type="text" name="others-moving-form-location-to" id="others-moving-form-location-to" class="form-control required" value="" placeholder="Location To">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-user"></i></span>
                                        </div>
                                        <input type="text" name="others-moving-form-name" id="others-moving-form-name" class="form-control required" value="" placeholder="Your Full Name">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-envelope"></i></span>
                                        </div>
                                        <input type="email" name="others-moving-form-email" id="others-moving-form-email" class="form-control required" value="" placeholder="Your Email">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-call-out"></i></span>
                                        </div>
                                        <input type="text" name="others-moving-form-phone" id="others-moving-form-phone" class="form-control required" value="" placeholder="Your Phone Number">
                                    </div>

                                    <div class="col-sm-6 input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-transparent"><i class="icon-line2-calendar"></i></span>
                                        </div>
                                        <input type="text" class="form-control home-date required" name="others-moving-form-date" id="others-moving-form-date" value="" placeholder="Your Date">
                                    </div>

                                    <div class="col-12 d-none">
                                        <input type="text" id="others-moving-form-botcheck" name="others-moving-form-botcheck" value="" />
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" name="others-moving-form-submit" class="btn bg-color text-white font-weight-medium btn-block py-2 mt-2">Contact Us</button>
                                    </div>

                                    <input type="hidden" name="prefix" value="others-moving-form-">
                                    <input type="hidden" name="subject" value="Others Service Request">
                                    <input type="hidden" name="html_title" value="Others Service">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-flex flex-wrap justify-content-center">
                <!-- <img src="{{ asset('front/movers/images/slider/1.png') }}" alt="Image 1" class="d-flex align-self-end ml-5 mt-3">
						<small><a class="text-black-50" target="_blank" href="https://icons8.com" style="opacity: .4"><u>illustration by Ouch.pics</u></a></small> -->
                </div>
            </div>
        </div>


    </section>

</div>

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap pb-0">

            <div class="clear"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="about-text">
                            <div class="section-title">
                                <h2> Top Rated Companies</h2>
                            </div>
                            <p class="f-para">Movein is a leading online moving company selection site. Every day
                                we inspire and reach thousands of customers gloabally.  ,</p>
                            <p class="s-para">We’re passionate about providing you with the top rated moving companies.
                                So when it comes to the selection of the best company, we’ve got you covered.</p>
                            <a href="#" class="primary-btn about-btn">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-pic">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div id="top_rated_hotels" class="owl-carousel owl-theme">
                                           <div class="item">
                                                <div class="gtc_pictures">
                                                    <img src="{{ asset($root.'front/images/apartment.jpg') }}" alt="" class="img-fluid img-thumbmnail">
                                                </div>
                                                <div class="gtc_des">
                                                    <span class="gtc_country_flag float-left"> Company Logo </span>
                                                    <a class="hotels_a" href=""> <span class="gtc_name float-left ml-2"> Company Name </span> </a>
                                                </div>
                                            </div>

                                        <div class="item">
                                            <div class="gtc_pictures">
                                                <img src="{{ asset($root.'front/images/magazine/2.jpg') }}" alt="" class="img-fluid img-thumbmnail">
                                            </div>
                                            <div class="gtc_des">
                                                <span class="gtc_country_flag float-left"> Company Logo </span>
                                                <a class="hotels_a" href=""> <span class="gtc_name float-left ml-2"> Company Name</span> </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div id="custom_btns">
                                        <div class="customNextBtn mt-1"><i class="fas fa-long-arrow-alt-up"></i></div>
                                        <div class="customPreviousBtn mt-2"><i class="fas fa-long-arrow-alt-down"></i></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>


            <div class="container" style="margin: 0 8%;">

                <h3 class="nott mb-3 font-weight-semibold ls0 text-center" style="font-size: 30px; margin: 50px !important;"> Helping Hands  </h3>


                <!-- Explore Gallery
                ============================================= -->
                <div class="row clearfix">

                    <div class="col-md-4 lazy lazy-loaded mb-4 overflow-hidden text-overlay-wrap" >
                        <img src="{{  asset($root.'front/images/trucks.jpg' ) }}" alt="Image">
                        <div class="image-text">
                            <h4 class="text-center"> Rent a Truck </h4>
                        </div>
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott font-weight-normal m-0"><span>Show</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lazy lazy-loaded mb-4 mb-md-auto overflow-hidden text-overlay-wrap">
                        <img src="{{  asset($root.'front/images/packing.jpg' ) }}" alt="Image">
                        <div class="image-text">
                            <h4 class="text-center"> Packing </h4>
                        </div>
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott font-weight-normal m-0"><span>Show</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lazy lazy-loaded mb-4 mb-md-auto overflow-hidden text-overlay-wrap">
                        <img src="{{  asset($root.'front/images/pets.jpg' ) }}" alt="Image">
                        <div class="image-text">
                            <h4 class="text-center"> Pets Shifting </h4>
                        </div>
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott font-weight-normal m-0"><span>Show</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lazy lazy-loaded mb-md-auto overflow-hidden text-overlay-wrap">
                        <img src="{{  asset($root.'front/images/storage.jpg' ) }}" alt="Image">
                        <div class="image-text">
                            <h4 class="text-center"> Storage </h4>
                        </div>
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott font-weight-normal m-0"><span>Show</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lazy lazy-loaded mb-md-auto overflow-hidden text-overlay-wrap">
                        <img src="{{  asset($root.'front/images/loading.jpg' ) }}" alt="Image">
                        <div class="image-text">
                            <h4 class="text-center"> Loading / Unloading </h4>
                        </div>
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott font-weight-normal m-0"><span>Show</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 lazy lazy-loaded mb-md-auto overflow-hihubsdden text-overlay-wrap">
                        <img src="{{  asset($root.'front/images/antique.jpg' ) }}" alt="Image">
                        <div class="image-text">
                            <h4 class="text-center"> Shifting Antiques </h4>
                        </div>
                        <div class="explore-text-overlay">
                            <div class="vertical-middle dark center">
                                <div>
                                    <a href="#" class="button button-border button-circle button-fill fill-from-bottom button-white button-light nott font-weight-normal m-0"><span>Show</span></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="section p-0 dark mb-0" style="background: linear-gradient(to right, rgba(25,102,221,0.2), rgba(25,102,221,0.5)), url({{ asset($root.'front/movers/images/section/2.jpg') }} ) no-repeat center center / cover; min-height: 400px">
                <div class="container">
                    <div class="row justify-content-between mb-4" style="padding: 100px 0 160px;">
                        <div class="col-lg-5 col-md-6 offset-lg-1 pt-3">
                            <a href="https://www.youtube.com/watch?v=P3Huse9K6Xs" data-lightbox="iframe" class="play-video ml-3"><i class="icon-play"></i></a>
                            <h2 class="display-4 font-weight-bold text-white topmargin-lg">Services we can help you with.</h2>
                        </div>
                        <div class="col-lg-5 col-md-6 mb-0 mb-md-5">
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt distinctio dolor nemo quasi cum. A ipsam tempora voluptatem officiis! Accusantium!</p>
                            <h3 class="mb-2 text-white">Service We Provide:</h3>
                            <div class="d-flex">
                                <ul class="col-6 iconlist">
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">100% Trustable</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">100% Safe &amp; Secure</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">On-Time Delivery</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Verified Movers</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Liecenced Company</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">No Hidden Charges</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Live Chat</span></li>
                                </ul>
                                <ul class="col-6 iconlist">
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">24x7  Support</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">No Extra Payments</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Also Deliver on Sunday</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Minimum 1 Mover Free</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Track Items by App</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">International Delivery</span></li>
                                    <li class="my-2"><i class="icon-line-circle-check font-weight-light"></i> <span class="pl-2">Door to Door</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <svg class="svg-curve" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1463 188.03">
                    <path style="fill:#FFF;" d="M-.5,288.5s297-175,792-97,599,52,671,25v143H-.5Z" transform="translate(0 -171.47)"/></svg>
            </div>

            <div class="section section-features bg-transparent mt-0 p-0 clearfix">
                <div class="container clearfix">
                    <div class="row col-mb-50 col-mb-lg-80">
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-icon position-relative mb-4" style="background-image: url({{ asset($root.'front/movers/images/featured-img/1.jpg') }});">
                                    <i class="icon-line2-home"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="font-weight-semibold">Office Moving.</h3>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-icon position-relative mb-4" style="background-image: url({{ asset($root.'front/movers/images/featured-img/2.jpg') }});">
                                    <i class="icon-building2"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="font-weight-semibold">Home Moving.</h3>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-icon position-relative mb-4" style="background-image: url({{ asset($root.'front/movers/images/featured-img/3.jpg') }});">
                                    <i class="icon-line2-globe"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="font-weight-semibold">International Moving.</h3>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-icon position-relative mb-4">
                                    <i class="icon-paw"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="font-weight-semibold">Pet Shifting.</h3>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-icon position-relative mb-4" style="background-image: url({{ asset($root.'front/movers/images/featured-img/1.jpg') }});">
                                    <i class="icon-car"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="font-weight-semibold">Car Shifting.</h3>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box media-box">
                                <div class="fbox-icon position-relative mb-4">
                                    <i class="icon-truck1"></i>
                                </div>
                                <div class="fbox-content">
                                    <h3 class="font-weight-semibold">Hire Truck.</h3>
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="clear"></div>

            <div class="section-map clearfix bottommargin-lg topmargin-lg">
                <div class="container">
                    <img src="{{ asset($root.'front/movers/images/map.png') }}" alt="Map Image" class="img-fluid map-image">
                    <div class="map-title">
                        <h2 class="center">More than 21 Countries included in Our Network. Some of Our Most Popular Countries</h2>
                        <div class="d-flex justify-content-center">
                            <ul class="iconlist m-0 pr-5">
                                <li><img src="{{ asset($root.'front/movers/images/flags/uk.png') }}" alt="Country Flag"><a href="#">United Kingdom</a></li>
                                <li><img src="{{ asset($root.'front/movers/images/flags/us.png') }}" alt="Country Flag"><a href="#">USA</a></li>
                                <li><img src="{{ asset($root.'front/movers/images/flags/br.png') }}" alt="Country Flag"><a href="#">Brazil</a></li>
                                <li><img src="{{ asset($root.'front/movers/images/flags/sa.png') }}" alt="Country Flag"><a href="#">South Africa</a></li>
                                <li><img src="{{ asset($root.'front/movers/images/flags/in.png') }}" alt="Country Flag"><a href="#">India</a></li>
                            </ul>
                            <ul class="iconlist m-0 pl-5">
                                <li><img src="{{ asset($root.'front/movers/images/flags/si.png') }}" alt="Country Flag"><a href="#">Singapore</a></li>
                                <li><img src="{{ asset($root.'front/movers/images/flags/ja.png') }}" alt="Country Flag"><a href="#">Japan</a></li>
                                <li><img src="{{ asset($root.'front/movers/images/flags/au.png') }}" alt="Country Flag"><a href="#">Australia</a></li>
                                <li><img src="{{ asset($root.'front/movers/images/flags/ca.png') }}" alt="Country Flag"><a href="#">Canada</a></li>
                                <li><a href="#" class="text-black-50">See all..</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="counter-section">
                    <div class="row align-items-stretch m-0 w-100 clearfix">

                        <div class="col-sm-3 col-6 center">
                            <div class="counter-dots"></div>
                            <div class="counter font-secondary"><span data-from="100" data-to="11000" data-refresh-interval="50" data-speed="2100" data-comma="true"></span>+</div>
                            <h5 class="text-capitalize ls0 mt-0"><u>Moved Monthly</u></h5>
                        </div>

                        <div class="col-sm-3 col-6 center">
                            <div class="counter-dots"></div>
                            <div class="counter font-secondary"><span data-from="3" data-to="26" data-refresh-interval="50" data-speed="2200" data-comma="true"></span>+</div>
                            <h5 class="text-capitalize ls0 mt-0"><u>Years of Experience</u></h5>
                        </div>

                        <div class="col-sm-3 col-6 center">
                            <div class="counter-dots"></div>
                            <div class="counter font-secondary"><span data-from="100" data-to="6000" data-refresh-interval="25" data-speed="2300" data-comma="true"></span>+</div>
                            <h5 class="text-capitalize ls0 mt-0"><u>Trained Manpower</u></h5>
                        </div>

                        <div class="col-sm-3 col-6 center">
                            <div class="counter-dots"></div>
                            <div class="counter font-secondary"><span data-from="1" data-to="21" data-refresh-interval="10" data-speed="2100" data-comma="true"></span>+</div>
                            <h5 class="text-capitalize ls0 mt-0"><u>Countries Worldwide</u></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="section section-gradient m-0">
                <div class="svg-separator top rotate">
                    <div>
                        <svg preserveAspectRatio="xMidYMax meet" class="svg-separator sep3" viewBox="0 0 1600 100">
                            <path style="opacity: 1;fill: #FFF;" d="M-40,71.627C20.307,71.627,20.058,32,80,32s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,26H-60V72L-40,71.627z"></path>
                            <path class="svg-themecolor" style="opacity: 0.1;" d="M-40,83.627C20.307,83.627,20.058,44,80,44s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,14H-60V84L-40,83.627z"></path>
                            <path style="fill: #FFF;" d="M-40,95.627C20.307,95.627,20.058,56,80,56s60.003,40,120,40s59.948-40,120-40s60.313,40,120,40s60.258-40,120-40s60.202,40,120,40s60.147-40,120-40s60.513,40,120,40s60.036-40,120-40c59.964,0,60.402,40,120,40s59.925-40,120-40s60.291,40,120,40s60.235-40,120-40s60.18,40,120,40s59.82,0,59.82,0l0.18,138H-60V96L-40,95.627z"></path>
                        </svg>
                    </div>
                </div>
                <div class="container">
                    <div class="mx-auto" style="max-width: 1200px; padding: 120px 0 50px;">
                        <div class="d-flex justify-content-between align-items-center mb-4 dark">
                            <h3 class="mb-0">What Our Users Say:</h3>
                            <a href="#" class="button button-white button-light button-rounded button-small font-weight-medium m-0">View More</a>
                        </div>
                        <div class="row row-eq-height justify-content-center">
                            <div class="col-md-6">
                                <div class="bg-white shadow-sm d-flex justify-content-center flex-column rounded">
                                    <div class="testimonial bg-transparent shadow-none border-0 p-0">
                                        <div class="d-flex flex-row mb-4 align-items-center">
                                            <div class="testi-image">
                                                <a href="#"><img src="{{ asset($root.'front/images/testimonials/1.jpg') }}" alt="Customer Testimonails"></a>
                                            </div>
                                            <h4 class="ml-1 mb-0">John Dow</h4>
                                        </div>
                                        <div class="testi-content pl-4">
                                            <p>Assertively leverage existing integrated communities after turnkey quality vectors. Assertively coordinate sustainable quality vectors and pandemic markets. Assertively leverage existing integrated communities.</p>
                                            <div class="testi-meta ls1 mt-3"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 mt-md-0">
                                <div class="bg-white shadow-sm d-flex justify-content-center flex-column mb-3 rounded p-5">
                                    <div class="testimonial small bg-transparent shadow-none border-0 p-0">
                                        <div class="d-flex flex-row mb-4 align-items-center">
                                            <h4 class="ml-1 mb-0">John Dow</h4>
                                        </div>
                                        <div class="testi-content pl-3">
                                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                            <div class="testi-meta ls1"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white shadow-sm d-flex justify-content-center flex-column rounded p-5">
                                    <div class="testimonial small bg-transparent shadow-none border-0 p-0">
                                        <div class="d-flex flex-row mb-4 align-items-center">
                                            <h4 class="ml-1 mb-0">John Dow</h4>
                                        </div>
                                        <div class="testi-content pl-3">
                                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
                                            <div class="testi-meta ls1"> Fig Nelson</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-bg d-none d-md-block">
                            <img src="{{ asset($root.'front/movers/images/dot-grid.svg') }}" alt="Dot Image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mb-5">
                <div class="section-clients mx-auto" style="max-width: 700px">
                    <div class="center clearfix mb-4">
                        <span class="badge badge-pill lightthemecolor color text-uppercase ls1 font-weight-medium py-2 px-3">We’ve valuable Organizations Since 2021</span>
                    </div>
                    <div class="clear"></div>

                    <div class="toggle mt-5" data-state="open">
                        <div class="toggle-header flex-row-reverse">
                            <div class="toggle-icon">
                                <i class="toggle-closed icon-line-circle-plus"></i>
                                <i class="toggle-open icon-line-circle-cross"></i>
                            </div>
                            <div class="toggle-title font-weight-medium">
                                Why Moveinandout for Home Shifting?
                            </div>
                        </div>
                        <div class="toggle-content text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                    </div>

                    <div class="toggle">
                        <div class="toggle-header flex-row-reverse">
                            <div class="toggle-icon">
                                <i class="toggle-closed icon-line-circle-plus"></i>
                                <i class="toggle-open icon-line-circle-cross"></i>
                            </div>
                            <div class="toggle-title font-weight-medium">
                                Advanced Moving Equipments
                            </div>
                        </div>
                        <div class="toggle-content text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                    </div>

                    <div class="toggle border-0">
                        <div class="toggle-header flex-row-reverse">
                            <div class="toggle-icon">
                                <i class="toggle-closed icon-line-circle-plus"></i>
                                <i class="toggle-open icon-line-circle-cross"></i>
                            </div>
                            <div class="toggle-title font-weight-medium">
                                Best Moving Equipments
                            </div>
                        </div>
                        <div class="toggle-content text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                    </div>
                </div>
            </div>



            <div class="clear"></div>

            <div class="section dark pt-0 mb-0 bg-color" style="background: url({{ asset($root.'front/movers/images/bg-2.png') }} ) no-repeat center bottom / 100%; overflow: visible">
                <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 1960 206.8" class="bg-white">
                    <path class="svg-themecolor" style="opacity:0.2;" d="M0,142.8A2337.49,2337.49,0,0,1,297.5,56.3C569.33-3.53,783.89.22,849.5,2.3c215.78,6.86,382.12,45.39,503.25,73.45,158.87,36.8,283.09,79.13,458.75,54.55A816.49,816.49,0,0,0,1983,86.8v110H0Z"/>
                    <path class="svg-themecolor" d="M.5,152.8s498-177,849-150,1031,238,1134,94v110H.5Z"/>
                </svg>
                <div class="container">
                    <div class="row align-items-center justify-content-center center my-4">

                        <div class="col-sm-8">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="font-weight-semibold ls0 nott mb-3" style="font-size: 44px; line-height: 1.3">Contact Our Movers Specialist</h2>
                                <p>Phosfluorescently develop customized relationships vis-a-vis B2C infomediaries.</p>
                            </div>
                            <a href="#" class="button button-white button-light button-rounded font-weight-medium m-0">Get In Touch</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #content end -->

@push('custom-scripts')
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function(){
            const owl = $("#top_rated_hotels");
            owl.owlCarousel({
                loop:true,
                margin:30,
                responsiveClass:true,
                lazyLoad: true,
                autoplay:true,
                infinite: true,
                smartSpeed: 800,
                nav: false,
                items: 2,

            });
            $('.customNextBtn').click(function() {
                owl.trigger('next.owl.carousel');
            });
            $('.customPreviousBtn').click(function() {
                owl.trigger('prev.owl.carousel');
            });

        });
    </script>
@endpush


@endsection
