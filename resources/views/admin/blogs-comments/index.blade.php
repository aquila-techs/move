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
                    <li class="breadcrumb-item active" aria-current="page"> Blog Comments </li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Blog Comments</h4>
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


                    <table id="blog-comments-datatable" class="table nowrap table-hover">
                        <thead>
                        <tr>
                            <th> Blog </th>
                            <th> Comment Author </th>
                            <th> Comment </th>
                            <th> Created at </th>
                            <th> Actions </th>
                        </tr>
                        </thead>

                        <tbody>
                        </tbody>
                    </table>

<div class="modal fade" id="editCommentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Edit Comment</h5>
            </div>

            <div class="modal-body">
                <div class="form-group">
                    <textarea class="form-control"  id="edited-comment"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

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

            var table = $('#blog-comments-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/blogs-comments') }}",
                columns: [
                    {data: 'blog.title', name: 'blog.title'},
                    {data: 'author.name', name: 'author.name'},
                    {data: 'comment', name: 'comment'},
                    {data: 'created_at', name: 'created_at'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ]
            });


            $('#blog-comments-datatable').on('click', '.edit-comment', function (){
                const id = $(this).data('id');
                $('#loader').fadeIn('slow');
                $.ajax({
                    url: `blogs-comments/${id}`,
                    method: "get",
                    success: function (response) {
                        $('#loader').fadeOut('slow');
                        $('#editCommentModal').modal('show');
                        $('#edited-comment').val(response['comment']);
                    }

                });
            });
        });
    </script>
@endsection


@section('script-bottom')
@endsection
