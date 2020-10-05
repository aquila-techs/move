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
        .nav-link { max-width: 150px; }
    </style>
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('company/dashboard') }}">Company Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Profile</h4>
    </div>
</div>
@endsection

@section('content')
    <div id="loader">
        <div class="spinner-grow text-primary m-2" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

<div class="row">
    <div class="col-lg-3">
     @include('companies.includes.profile-sidebar')
    </div>

    <div class="col-lg-9">
        <div class="card" style="height: 500px;">
            <div class="card-body">

                    <div class="card-body">
                        <ul class="nav nav-pills navtab-bg nav-justified" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-activity-tab" data-toggle="pill" href="#pills-activity" role="tab" aria-controls="pills-activity" aria-selected="true">
                                    About
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">

                            @foreach (['danger', 'warning', 'success', 'info'] as $key)
                                @if(Session::has($key))
                                    <div class="row">
                                        <div class="offset-3 col-6">
                                            <div class="alert alert-{{ $key }} alert-dismissible fade show" role="alert">
                                                {{ Session::get($key) }}
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <div class="tab-pane fade active show" id="pills-activity" role="tabpanel" aria-labelledby="pills-activity-tab">
                                {!! $profile->description  !!}
                            </div>


                            </div>
                        </div>
                <!-- end card -->
            </div>
            </div>
        </div>

</div>

@endsection

@section('script')
    <script>
        $(document).ready(function () {
            $('#loader').fadeOut('slow');
        });
    </script>
@endsection

@section('script-bottom')
@endsection
