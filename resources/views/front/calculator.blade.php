@extends('layouts.front.main_template')

	@section('content')
        <style>
            #est_cost, #est_distance
            {
                color: #55be73;
                font-weight: 600;
            }
        </style>
@php $root = env('ROOT_FOLDER'); @endphp
				<!-- Including header -->
			@include('front.includes.main_header')


		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-mini">

			<div class="container clearfix">
				<h1>Calculator</h1>
				<span>Calculator</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Calculator</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">

					<div class="container clearfix mb-5">

                        <div class="row">
                            <div class="offset-2 col-8">
                            <div class="card">
                                <div class="card-header bg-color text-white">
                                    Cost Calculator
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal">
                                        <div class="row">
                                            <div class="form-group col-6">
                                                <label  for="simpleinput">Moving From</label>
                                                <input type="text" class="form-control" id="zip_code1" placeholder="Some text value...">
                                                <div class="invalid-feedback" id="zip_code1_message">
                                                    Please provide a valid Zip Code.
                                                </div>
                                            </div>

                                            <div class="form-group col-6">
                                                <label for="example-date">Moving To</label>
                                                <input type="text" class="form-control" id="zip_code2" placeholder="Some text value...">
                                                <div class="invalid-feedback" id="zip_code2_message">
                                                    Please provide a valid Zip Code.
                                                </div>
                                            </div>
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
                                                    <input type="checkbox" class="custom-control-input input-lg" id="customSwitch1">
                                                    <label class="custom-control-label" for="customSwitch1">
                                                        Packing Services
                                                    </label>
                                                </div>
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
                        </div>

					</div>

			</div>
		</section><!-- #content end -->


@push('custom-scripts')
	<script src="{{ asset($root.'front/js/plugins.animations.js' )}}"></script>
    <script>
        $(document).ready(function () {
            const token = '{{ csrf_token()  }}';

            $('#zip_code1, #zip_code2').change(function () {
                const est_dist = $('#est_distance');
                const est_cost = $('#est_cost');
                est_dist.val(''); est_cost.val('');
                if( $('#zip_code1').val() != '' && $('#zip_code2').val() != '' )
                {
                    const btn = $('#calculate_btn');
                    btn.prop('disabled', true);

                    $.ajax({
                        url: 'distance_calculator',
                        type: 'POST',
                        data: {'_token': token},
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
                    console.log('calculating');
                }

            });
        });
    </script>
@endpush

@endsection
