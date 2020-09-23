@extends('companies.layouts.vertical')


@section('css')
    <style>
        label { font-weight: 650 !important; }
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
@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('company/dashboard') }}">Company Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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
        <div class="card" style="mix-height: 500px;">
            <div class="card-body">

                <form action="{{ url('company/profile/'.$profile->id)  }}" method="post" class="parsley-examples">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="name">Company Name<span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" autocomplete="off" parsley-trigger="change" required placeholder="Enter company name"
                                   class="form-control @if($errors->has('name')) is-invalid @endif" id="userName" value="{{ old('name',$profile->name)  }}" >

                            @if($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif


                        </div>

                        <div class="form-group col-md-6">
                            <label for="phone_number">Phone</label>
                            <input type="text" id="phone_number" name="phone_number" parsley-trigger="change"  placeholder="Enter company phone number"
                                   class="form-control @if($errors->has('phone_number')) is-invalid @endif" value="{{ old('phone_number',$profile->phone_number) }}">

                            @if($errors->has('phone_number'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                            @endif
                        </div>
{{--                        <div class="form-group col-md-6">--}}
{{--                            <label for="category_id">Company Type<span class="text-danger">*</span></label>--}}
{{--                            <input type="text" id="category_id" autocomplete="off" class="form-control" name="category_id" list="category_list" placeholder="Select Company Type"--}}
{{--                                   required data-value="{{ old('category_id',$profile->category_id) }}" value="{{ old('category_id',\App\Company\Categories::select('name')->whereId($profile->category_id)->first()->name)  }}">--}}
{{--                            <div class="invalid-input"></div>--}}
{{--                            <datalist id="category_list">--}}
{{--                               @foreach( \App\Company\Categories::orderBY('name')->get() as $row)--}}
{{--                                    <option data-value="{{  $row->id }}" value="{{ $row->name  }}"></option>--}}
{{--                                @endforeach--}}
{{--                            </datalist>--}}
{{--                        </div>--}}
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="company_email">Company Email</label>
                            <input type="text" id="company_email" name="company_email" parsley-trigger="change"  placeholder="Enter city"
                                   class="form-control @if($errors->has('company_email')) is-invalid @endif"  value="{{ old('company_email',$profile->company_email)  }}">
                            @if($errors->has('company_email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company_email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group col-md-6">
                            <label for="city">City</label>
                            <input type="text" id="city" name="city" parsley-trigger="change"  placeholder="Enter city"
                                   class="form-control @if($errors->has('city')) is-invalid @endif" value="{{ old('city',$profile->city)  }}">
                            @if($errors->has('city'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                            @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" parsley-trigger="change"  placeholder="Enter state"
                                   class="form-control @if($errors->has('state')) is-invalid @endif" value="{{ old('state',$profile->state)  }}">
                        @if($errors->has('state'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('state') }}</strong>
                                </span>
                        @endif

                        </div>
                    </div>

{{--                    <div class="row">--}}
{{--                        <div class="form-group col-md-6">--}}
{{--                            <label for="phone_number">Phone</label>--}}
{{--                            <input type="text" id="phone_number" name="phone_number" parsley-trigger="change"  placeholder="Enter company phone number"--}}
{{--                                   class="form-control" value="{{ old('phone_number',$profile->phone_number) }}">--}}
{{--                        </div>--}}
{{--                        <div class="form-group col-md-6">--}}
{{--                            <label for="email">E-mail</label>--}}
{{--                            <input type="email" id="email" name="email" parsley-trigger="change"  placeholder="Enter company email"--}}
{{--                                   class="form-control" value="{{ old('email',$profile->email)  }}">--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="address">Address</label>
                            <textarea type="text" rows="6" id="address" name="address" parsley-trigger="change"
                              placeholder="Enter company address" class="form-control @if($errors->has('address')) is-invalid @endif">{{ old('address',$profile->address)  }}</textarea>
                        @if($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                        @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="editor">About</label>
                            <textarea id="editor" name="description" class="@if($errors->has('description')) is-invalid @endif">{{ old('description',$profile->description)  }}</textarea>
                        @if($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                        @endif

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-12">
                            <button type="submit" class="ml-3 col-2 col-lg-1 col-md-1 btn btn-md btn-primary float-right"> Save </button>
                            <a href="{{ url('company/profile') }}" class="col-2 col-lg-1 col-md-1 btn btn-md btn-light float-right"> Cancel </a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
    <script src="https://cdn.tiny.cloud/1/k8aaemajh4grijw0jczycetgt4ddfipsgptm84u9jhdoxp8f/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            $('#loader').fadeOut('slow');
            $('#edit-button').hide('fast');

            tinymce.init({
                selector: 'textarea#editor',
                menubar: false
            });

            // $('form').submit(function(e) {
            //     e.preventDefault();
            //     const value = $('#category_id').val();
            //     const op_value = $('#category_list [value="' + value + '"]').data('value');
            //
            //     if (op_value == undefined)
            //     {
            //         $('#category_id').addClass('is-invalid');
            //         $('.invalid-input').text('Please select option from list.');
            //     }
            //     else
            //     {
            //         $('#category_id').val(op_value);
            //         this.submit();
            //     }
            // });
            //
            // $('#category_id').keydown(function () {
            //     $(this).removeClass('is-invalid');
            //     $('.invalid-input').text('');
            // });
        });

    </script>
@endsection

@section('script-bottom')
@endsection
