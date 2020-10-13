@extends('admin.layouts.vertical')


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
    </style>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('breadcrumb')
    <div class="row page-title">
        <div class="col-md-12">
            <nav aria-label="breadcrumb" class="float-right mt-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Admin Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> Blogs </li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Blogs </h4>
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

                    <div class="col-12">
                        <a href="{{ url('admin/blogs/create')  }}" class="mb-3 btn btn-sm btn-outline-primary float-right"> Add Blog </a>
                    </div>

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


                    <table id="blog_datatable" class="table nowrap table-hover">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th> Author </th>
                            <th> Featured Image </th>
                            <th>Description</th>
                            <th> Created at </th>
                            <th> Actions </th>
                        </tr>
                        </thead>

                        <tbody>
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

            var table = $('#blog_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/blogs') }}",
                columns: [
                    {data: 'title', name: 'title'},
                    {data: 'author.name', name: 'author.name'},
                    {data: 'picture', name: 'picture'},
                    {
                        data: 'description',
                        name: 'description',
                        orderable: true,
                        searchable: true
                    },
                    {data: 'created_at', name: 'created_at'},
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