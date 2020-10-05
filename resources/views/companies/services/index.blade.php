@extends('companies.layouts.vertical')

@section('css')
    <style>
        #loader {
            position: fixed;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 100;
            background: #fff;
            padding-top: 20%;
            padding-left: 45%;
        }
        .tab-content { padding-top: 0 !important; }
        .nav-pills { background: #fff; }
        .service-category-name { font-weight: 700; text-transform: uppercase; margin-bottom: 3%; text-align: center; }
    </style>
@endsection

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('company/dashboard') }}">Company Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Services </li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Services</h4>
        </div>
    </div>
@endsection

@section('content')

    <div id="loader">
        <div class="spinner-grow text-primary m-2" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="row bg-white pb-5 pl-2">

        <div class="col-12"> <a href="{{ url('company/services/create')  }}" class="mt-3 float-right btn btn-outline-primary"> Add Service </a>  </div>

        @if( $services->isEmpty() )
            <div class="col-12">
                <div class="col-12">
                    <h3 class="text-center my-5 pt-5"> No Service is added yet. </h3>
                    <a href="{{ url('company/services/create')  }}" class="btn btn-outline-primary mx-auto"> Add Service </a>
                </div>
            </div>
        @else
            <div class="col-3">
                @foreach( $services as $service )
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-{{ $service->id  }}-tab" data-toggle="pill" href="#v-pills-{{ $service->id }}" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            {{ $service->category->name  }}
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="col-9">
                @if( $service->rates)
                @foreach( $services as $key => $service )
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show @if($key == 0) active @endif" id="v-pills-{{ $service->id  }}" role="tabpanel" aria-labelledby="v-pills-{{ $service->id  }}-tab">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="service-category-name"> {{ $service->category->name  }} </h4>
                                    <h6> <b>  Price/km within 100km for: </b> </h6>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> Studio </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_studio_less_then_100km )   ${{ $service->rates->price_per_km_for_studio_less_then_100km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 1 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_1bed_less_then_100km ) $ {{ $service->rates->price_per_km_for_1bed_less_then_100km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 2 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_2bed_less_then_100km ) $ {{ $service->rates->price_per_km_for_2bed_less_then_100km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 3 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_3bed_less_then_100km ) $ {{ $service->rates->price_per_km_for_3bed_less_then_100km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 4 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_4bed_less_then_100km ) $ {{ $service->rates->price_per_km_for_4bed_less_then_100km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 5 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_5bed_less_then_100km ) $ {{ $service->rates->price_per_km_for_5bed_less_then_100km }} @endif </p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h6> <b>  Price/km within 250km for: </b> </h6>
                                </div>

                                <div class="col-4">
                                    <h6 class="float-left"> Studio </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_studio_less_then_250km ) $ {{ $service->rates->price_per_km_for_studio_less_then_250km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 1 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_1bed_less_then_250km ) $ {{ $service->rates->price_per_km_for_1bed_less_then_250km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 2 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_2bed_less_then_250km ) $ {{ $service->rates->price_per_km_for_2bed_less_then_250km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 3 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_3bed_less_then_250km ) $ {{ $service->rates->price_per_km_for_3bed_less_then_250km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 4 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_4bed_less_then_250km ) $ {{ $service->rates->price_per_km_for_4bed_less_then_250km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 5 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_5bed_less_then_250km ) $ {{ $service->rates->price_per_km_for_5bed_less_then_250km }} @endif </p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h6> <b>  Price/km within 1000km for: </b> </h6>
                                </div>

                                <div class="col-4">
                                    <h6 class="float-left"> Studio </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_studio_less_then_1000km ) $ {{ $service->rates->price_per_km_for_studio_less_then_1000km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 1 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_1bed_less_then_1000km ) $ {{ $service->rates->price_per_km_for_1bed_less_then_1000km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 2 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_2bed_less_then_1000km ) $ {{ $service->rates->price_per_km_for_2bed_less_then_1000km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 3 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_3bed_less_then_1000km ) $ {{ $service->rates->price_per_km_for_3bed_less_then_1000km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 4 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_4bed_less_then_1000km ) $ {{ $service->rates->price_per_km_for_4bed_less_then_1000km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 5 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_5bed_less_then_1000km ) $ {{ $service->rates->price_per_km_for_5bed_less_then_1000km }} @endif </p>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <h6> <b>  Price/km within 2500km for: </b> </h6>
                                </div>

                                <div class="col-4">
                                    <h6 class="float-left"> Studio </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_studio_less_then_2500km ) $ {{ $service->rates->price_per_km_for_studio_less_then_2500km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 1 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_1bed_less_then_2500km ) $ {{ $service->rates->price_per_km_for_1bed_less_then_2500km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 2 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_2bed_less_then_2500km ) $ {{ $service->rates->price_per_km_for_2bed_less_then_2500km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 3 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_3bed_less_then_2500km ) $ {{ $service->rates->price_per_km_for_3bed_less_then_2500km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 4 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_4bed_less_then_2500km ) $ {{ $service->rates->price_per_km_for_4bed_less_then_2500km }} @endif </p>
                                </div>
                                <div class="col-4">
                                    <h6 class="float-left"> 5 Beds </h6>
                                    <p class="float-left ml-5 pl-5 pt-2"> @if( $service->rates->price_per_km_for_5bed_less_then_2500km ) $ {{ $service->rates->price_per_km_for_5bed_less_then_2500km }} @endif </p>
                                </div>

                            </div>


                        </div>
                    </div>
                @endforeach
                @endif

            </div>
        @endif


    </div>


@section('script')
    <script>
        $(document).ready(function () {
            $('#loader').fadeOut('slow');
        });

        $('.nav-link').click(function () {
            const href = $(this).attr('href');
            $('.tab-pane').hide();
            $(href).fadeIn();

        });
    </script>
@endsection


@endsection
