@extends('layouts.front.template')
    <!-- Including header -->

@push('custom-css')
    <style>
        #est_cost, #est_distance
        {
            color: #55be73;
            font-weight: 600;
        }
        .card-header {
            background: #666; }
    </style>
@endpush

@section('content')

    @include('front.includes.header')

    <section id="page-title">

        <div class="container clearfix">
            <h1>Pricing</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/')  }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pricing</li>
            </ol>
        </div>

    </section>

    <section id="content">
        <div class="content-wrap">

            <div class="container clearfix mb-5">

                <div class="row">
                    <div class="offset-2 col-8">
                        <div class="card">
                            <div class="card-header text-white">
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
                                            <button type="button" id="calculate_btn" class="btn btn-dark">Calculate</button>
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@include('front.includes.footer')   

@push('custom-scripts')
    <script src="{{ asset('public/front/js/plugins.animations.js' )}}"></script>
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

