@extends('layouts.front.main_template')

@section('content')

    @php $root = env('ROOT_FOLDER'); @endphp

    @push('custom-css')
        <link rel="stylesheet" href="{{ asset($root.'front/css/pages/css/all.min.css')  }}">
        <link rel="stylesheet" href="{{ asset($root.'front/css/pages/css/style.css')  }}">
        <link rel="stylesheet" href="{{ asset($root.'front/css/pages/css/fontawesome.min.css')  }}">
        <link rel="stylesheet" href="{{ asset($root.'front/css/pages/css/imagelightbox.min.css')  }}">
        <style>
            .row-box h5 { color: #55be73; text-transform: uppercase; }
        </style>
    @endpush
    <!-- Including header -->
    @include('front.includes.main_header')

    <section id="content">
        <div class="container pt-5">
            <div class="row pt-5">
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
                        <div class="col-sm-12">
                            <div class="row-box mb-4">
                                <div class="travel">
                                    <div class="">
                                        <h5>FROM</h5>
                                        <p>Lahore</p>
                                    </div>
                                    <div class="">
                                        <h5>To</h5>
                                        <p>Karachi</p>
                                    </div>
                                    <div class="">
                                        <h5>Move Date</h5>
                                        <p>Jun 29, 2020</p>
                                    </div>
                                    <div class="">
                                        <h5>Move Size</h5>
                                        <p>4 to 5</p>
                                    </div>
                                    <div class="">
                                        <h5>Distance</h5>
                                        <p>112km</p>
                                    </div>
                                </div>
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
                    <div class="row-box mover mb-4">
                        <h5>THEY LOAD, THEY DRIVE</h5>
                        <h1>Professional Movers</h1>
                        <p><span> 0$ </span> to <span> 0$ </span></p>
                        <div class="lists">
                            <ul>
                                <li>All loading and unloading</li>
                                <li>Moving blankets, pads, straps</li>
                                <li>Furniture breakdown & reassembly</li>
                                <li>Moving equipment (dolly, rollers)</li>
                                <li>Fuel, tolls, taxes</li>
                                <li>Parking permits</li>
                            </ul>
                        </div>

                        <p>We found   <b>0</b> local movers near that would be perfect for you:</p>
                    </div>
                    <div class="row-box mover mb-4">
                        <h5>YOU LOAD, THEY DRIVE</h5>
                        <h1>Containers</h1>
                        <p><span> 0$ </span> to <span> 0$ </span></p>
                        <div class="lists">
                            <ul>
                                <li>All loading and unloading</li>
                                <li>Moving blankets, pads, straps</li>
                                <li>Furniture breakdown & reassembly</li>
                                <li>Moving equipment (dolly, rollers)</li>
                                <li>Fuel, tolls, taxes</li>
                                <li>Parking permits</li>
                            </ul>
                        </div>

                        <p>We found <b>3</b> local movers near that would be perfect for you:</p>
                        <div class="action">
                            <div class="logo mb-3">
                                <img src="{{ asset($root.'front/images/pages/PODS_logo.png') }}" alt="">
                            </div>
                            <div class="star-reviews mb-3">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <p>Verified reviews
                                </p>
                            </div>
                            <div class="buttons mb-3">
                                <a class="active-btn mb-2 mr-2" href="">Check Price</a>
                                <a class="normal-btn mb-2 mr-2"  href="">Visit Website</a>
                            </div>

                        </div>
                        <div class="action">
                            <div class="logo mb-3">
                                <img src="{{ asset($root.'front/images/pages/zippy-shell-logo-white.png') }}" alt="">
                            </div>
                            <div class="star-reviews mb-3">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <p>Verified reviews
                                </p>
                            </div>
                            <div class="buttons mb-3">
                                <a class="active-btn mb-2 mr-2" href="">Check Price</a>
                            </div>

                        </div>
                    </div>
                    <div class="row-box mover mb-4">
                        <h5>YOU LOAD, YOU DRIVE</h5>
                        <h1>Rental Trucks</h1>
                        <p><span> 0$ </span> to <span> 0$ </span></p>
                        <div class="lists">
                            <ul>
                                <li>All loading and unloading</li>
                                <li>Moving blankets, pads, straps</li>
                                <li>Furniture breakdown & reassembly</li>
                                <li>Moving equipment (dolly, rollers)</li>
                                <li>Fuel, tolls, taxes</li>
                                <li>Parking permits</li>
                            </ul>
                        </div>

                        <p>We found <b>1</b> rental truck company for your move from to:
                        </p>
                        <div class="action">
                            <div class="logo mb-3">
                                <img src="{{ asset($root.'front/images/pages/logo-budget-rental-truck.jpg') }}" alt="">
                            </div>
                            <div class="star-reviews mb-3">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <p>Learn More
                                </p>
                            </div>
                            <div class="buttons mb-3">
                                <a class="active-btn mb-2 mr-2" href="">Check Price</a>
                                <a class="normal-btn mb-2 mr-2" href="">Visit Website</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-4">
                    <div class="row-box sidebar text-center mb-4">
                        <h6>Our <b>#1 choice</b>  for local movers.</h6>
                        <img src="{{ asset($root.'front/images/pages/hireahelper-logo-2color.svg') }}" alt="">
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

                    <div class="row-box sidebar  mb-4">
                        <h6>MOVING A CAR?</h6>
                        <h4>2020 Best Auto-Shippers</h4>
                        <p>Get instant pricing for shipping your vehicle safely and affordably.</p>
                        <div class="text-center">
                            <a class="active-btn peach-btn mb-2 mr-2" href="">Read More</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

@push('custom-scripts')
    <script src="{{ asset($root.'front/js/pages/imagelightbox.min.js')  }}"></script>
@endpush
@endsection
