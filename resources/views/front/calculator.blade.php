@extends('layouts.front.main_template')

	@section('content')

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
                                                <input type="text" class="form-control" id="simpleinput" placeholder="Some text value...">
                                            </div>

                                            <div class="form-group col-6">
                                                <label for="example-date">Moving To</label>
                                                <input type="text" class="form-control" id="simpleinput" placeholder="Some text value...">
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
                                                    <label class="col-lg-7 col-form-label" for="example-static">Estimate Distance</label>
                                                    <div class="col-lg-5">
                                                        <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="email@example.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-4">
                                                <div class="form-group row">
                                                    <label class="col-lg-7 col-form-label" for="example-static">Estimate Cost</label>
                                                    <div class="col-lg-5">
                                                        <input type="text" readonly="" class="form-control-plaintext" id="example-static" value="email@example.com">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-2 offset-10">
                                                <button type="button" class="btn btn-outline-success">Calculate</button>
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
@endpush

@endsection
