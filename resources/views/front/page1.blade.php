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
            #est_cost, #est_distance
            {
                color: #55be73;
                font-weight: 600;
            }
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

                        <div class="col-12 my-5">
                            <div class="card">
                                <div class="card-header bg-color text-white">
                                    Cost Calculator
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label  for="simpleinput">Moving From</label>
                                                <input type="text" class="form-control" id="zip_code1" placeholder="Enter Zip Code" list="zip_codes">
                                                <div class="invalid-feedback" id="zip_code1_message">
                                                    Please provide a valid Zip Code.
                                                </div>
                                            </div>

                                            <div class="form-group col-6">
                                                <label for="example-date">Moving To</label>
                                                <input type="text" class="form-control" id="zip_code2" placeholder="Enter Zip Code" list="zip_codes">
                                                <div class="invalid-feedback" id="zip_code2_message">
                                                    Please provide a valid Zip Code.
                                                </div>
                                            </div>

                                            <datalist id="zip_codes"></datalist>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label  for="simpleinput">Move size</label>
                                                <select class="custom-select mb-2">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-6">
                                                <label for="example-date">Date</label>
                                                <input class="form-control" id="example-date" type="date" name="date">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-4">
                                                <div class="custom-control custom-switch mb-2">
                                                    <input type="checkbox" class="custom-control-input input-lg" id="packing_services">
                                                    <label class="custom-control-label" for="packing_services">
                                                        Packing Services
                                                    </label>
                                                </div>
                                                <div id="packing_servieces_div"></div>
                                            </div>
                                            <div class="form-group col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-6 col-form-label" for="example-static">Estimate Distance</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" readonly="" class="form-control-plaintext" id="est_distance" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-6 col-form-label" for="example-static">Estimate Cost</label>
                                                    <div class="col-lg-6">
                                                        <input type="text" readonly="" class="form-control-plaintext" id="est_cost" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2 offset-10">
                                                <button type="button" id="calculate_btn" class="btn btn-outline-success">Calculate</button>
                                            </div>
                                        </div>


                                    </form>
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
    <script src="{{ asset($root.'front/js/plugins.animations.js' )}}"></script>
    <script>
        $(document).ready(function () {
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

            $('#zip_code1, #zip_code2').change(function () {
                const est_dist = $('#est_distance');
                const est_cost = $('#est_cost');
                est_dist.val(''); est_cost.val('');
                if( $('#zip_code1').val() != '' && $('#zip_code2').val() != '' )
                {
                    const zip1 = $('#zip_codes [value="' + $('#zip_code1').val() + '"]').data();
                    const zip2 = $('#zip_codes [value="' + $('#zip_code2').val() + '"]').data();
                    const btn = $('#calculate_btn');
                    btn.prop('disabled', true);

                    $.ajax({
                        url: 'distance_calculator',
                        type: 'POST',
                        data: {'_token': token, 'zip1': zip1, 'zip2': zip2},
                        success: function (response){
                            btn.prop('disabled', false);
                            response = parseFloat(response).toFixed(3);
                            est_dist.val(`${response} kms`);
                        },
                        error: function (err) {
                            btn.prop('disabled', false);
                            console.log(err);
                        }
                    });
                }

            });

            $('#zip_code1, #zip_code2').keydown(function () {
                $('#zip_code1_message').fadeOut('fast'); $('#zip_code2_message').fadeOut('fast');
                $('#zip_code1').removeClass('is-invalid is-valid'); $('#zip_code2').removeClass('is-valid is-invalid');
            });

            $('#packing_services').change(function (){
                if($(this).prop('checked'))
                {
                    $('#packing_servieces_div').append(`
                        <div class="custom-control custom-radio">
                        <input type="radio" id="full_service" name="packing_service" class="custom-control-input" checked>
                        <label class="custom-control-label" for="full_service"> Half Service </label>
                        </div>
                        <div class="custom-control custom-radio">
                        <input type="radio" id="half_service" name="packing_service" class="custom-control-input">
                        <label class="custom-control-label" for="half_service"> Full Service </label>
                        </div>
                    `);
                }
                else
                {
                    $('#packing_servieces_div').html('');
                }
            });

            $('#calculate_btn').click(function () {
                const zip_code1 = $('#zip_code1').val();
                const zip_code2 = $('#zip_code2').val();

                if( zip_code1 == '' && zip_code2 != '' )
                {
                    $('#zip_code1_message').fadeIn('slow');
                    $('#zip_code1').addClass('is-invalid');
                    $('#zip_code2').addClass('is-valid');
                }
                else if( zip_code2 == '' && zip_code1 != '' )
                {
                    $('#zip_code2_message').fadeIn('slow');
                    $('#zip_code1').addClass('is-valid');
                    $('#zip_code2').addClass('is-invalid');
                }
                else if ( zip_code1 == '' && zip_code2 == '' )
                {
                    $('#zip_code1_message').fadeIn('slow');
                    $('#zip_code2_message').fadeIn('slow');
                    $('#zip_code1').addClass('is-invalid');
                    $('#zip_code2').addClass('is-invalid');

                }
                else
                {
                    $('#est_cost').val('$ '+parseFloat($('#est_distance').val()) * 3);
                }

            });
        });
    </script>
@endpush
@endsection
