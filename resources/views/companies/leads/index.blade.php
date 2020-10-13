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
        .edit-btn
        {
            color: #43d39e;
        }
        .delete-btn
        {
            color: #ff5c75;
        }
        .link{ color: #777; font-weight: 700; }
        .link:hover{ color: #555; }
    </style>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('company/dashboard') }}">Company Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Leads </li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">In-Progress Leads </h4>
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

        <div class="col-lg-12">
            <div class="card" style="height: 500px;">

                <div class="table-responsive card-body">

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


                    <table id="leads_datatable" class="table nowrap table-hover">
                        <thead>
                        <tr>
                            <th> Service </th>
                            <th> Client Name </th>
                            <th> Client Email </th>
                            <th> Client Phone </th>
                            <th> Moving Distance </th>
                            <th> Estimated Cost </th>
                            <th> Lead Requested </th>
                            <th> Status </th>
                            <th> Actions </th>
                        </tr>
                        </thead>

                        <tbody class="text-center">
                        </tbody>
                    </table>
                </div>

            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->


@endsection

@section('script')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#loader').fadeOut('slow');

            const table = $('#leads_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('company/leads') }}",
                columns: [
                    {
                        data: 'service',
                        name: 'service',
                        orderable: true,
                        searchable: true
                    },
                    {data: 'username', name: 'username'},
                    {data: 'email', name: 'email'},
                    {data: 'phone', name: 'phone'},
                    {
                        data: 'distance',
                        name: 'distance',
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: 'est_price',
                        name: 'est_price',
                        orderable: true,
                        searchable: true
                    },
                    {data: 'created_at', name: 'created_at'},
                    {data: 'status', name: 'status'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });
        });
    </script>
@endsection

@section('script-bottom')
@endsection
