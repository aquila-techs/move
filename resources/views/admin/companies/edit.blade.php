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
                    <li class="breadcrumb-item active" aria-current="page">Companies</li>
                </ol>
            </nav>
            <h4 class="mb-1 mt-0">Companies / Edit</h4>
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

                    <div class="row">
                        <div class="col-12">
                            <form action="{{ url('company/profile/'.\Auth::user()->id)  }}" method="post" class="parsley-examples">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="name">Company Name<span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name" autocomplete="off" parsley-trigger="change" required placeholder="Enter company name"
                                               class="form-control" id="userName" value="{{ old('name',$company->profile->name)  }}">
                                        @error('name')
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            </div>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="category_id">Company Type<span class="text-danger">*</span></label>
                                        <input type="text" id="category_id" autocomplete="off" class="form-control" name="category_id" list="category_list" placeholder="Select Company Type"
                                               required data-value="{{ old('category_id',$company->profile->category_id) }}" value="{{ old('category_id',\App\Company\Categories::select('name')->whereId($company->profile->category_id)->first()->name)  }}">
                                        <div class="invalid-input"></div>
                                        <datalist id="category_list">
                                            @foreach( \App\Company\Categories::orderBY('name')->get() as $row)
                                                <option data-value="{{  $row->id }}" value="{{ $row->name  }}"></option>
                                            @endforeach
                                        </datalist>
                                    </div>

                                <div class="form-group col-md-3">
                                    <label for="city">City</label>
                                    <input type="text" id="city" name="city" parsley-trigger="change"  placeholder="Enter city"
                                           class="form-control" value="{{ old('city',$company->profile->city)  }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="state">State</label>
                                    <input type="text" id="state" name="state" parsley-trigger="change"  placeholder="Enter state"
                                           class="form-control" value="{{ old('state',$company->profile->state)  }}">
                                </div>

                        </div>

                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <label for="phone_number">Phone</label>
                                        <input type="text" id="phone_number" name="phone_number" parsley-trigger="change"  placeholder="Enter company phone number"
                                               class="form-control" value="{{ old('phone_number',$company->profile->phone_number) }}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="email">E-mail</label>
                                        <input type="email" id="email" name="email" parsley-trigger="change"  placeholder="Enter company email"
                                               class="form-control" value="{{ old('email',$company->profile->email)  }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="address">Address</label>
                                        <textarea type="text" rows="3" id="address" name="address" parsley-trigger="change"
                                                  placeholder="Enter company address" class="form-control">{{ old('address',$company->profile->address)  }}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="editor">About</label>
                                        <textarea id="editor" name="description">{{ old('description',$company->profile->description)  }}</textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-12">
                                        <button type="submit" class="ml-3 col-2 col-lg-1 col-md-1 btn btn-md btn-primary float-right"> Save </button>
                                        <a href="{{ url('admin/companies') }}" class="col-2 col-lg-1 col-md-1 btn btn-md btn-light float-right"> Cancel </a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

{{--                    <div class="row">--}}
{{--                        <div class="col-12">--}}
{{--                            <table id="companies_datatable" class="table nowrap">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Name</th>--}}
{{--                                    <th>Email</th>--}}
{{--                                    <th> Actions </th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}

{{--                                <tbody>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>

            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end row -->


@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/k8aaemajh4grijw0jczycetgt4ddfipsgptm84u9jhdoxp8f/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#loader').fadeOut('slow');

            tinymce.init({
                selector: 'textarea#editor',
                menubar: false
            });

            var table = $('#companies_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('admin/companies') }}",
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
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
