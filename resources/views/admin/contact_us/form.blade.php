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
        .btns-div
        {
            display: flex;
            justify-content: center;
        }
        .btns-div .btn
        {
            width: 100px;
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
                    <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Messages</li>
                </ol>
            </nav>
            @if( isset( $contact_us ) )
            <h4 class="mb-1 mt-0">Messages / Edit</h4>
            @else
            <h4 class="mb-1 mt-0">Messages / Create</h4>
            @endif
        </div>
    </div>
@endsection

@section('content')
    <div id="loader">
        <div class="spinner-grow text-primary m-2" role="contact_us_status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <div class="card" style="min-height: 500px;">
                <div class="card-body">

                             @if( isset( $contact_us ) )
                            <form action="{{ url('admin/contact_us/'.$contact_us->id)  }}" method="post" class="parsley-examples">
                            @else
                            <form action="{{ url('admin/contact_us')  }}" method="post" class="parsley-examples">
                            @endif
                                @csrf
                                @if( isset($contact_us) )
                                @method('PUT')
                                @endif

                                <div class="row">

                                    <div class="form-group col-md-4">
                                        <label for="name">Name<span class="text-danger">*</span></label>
                                        <input autocomplete="off" type="text" id="name" name="name" autocomplete="off" parsley-trigger="change" required placeholder="Name"
                                               class="form-control @if($errors->has('name')) is-invalid @endif" id="name" value="@if(isset($contact_us)) {{ old('name',$contact_us->name)  }}@endif">
                                        @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input autocomplete="off" type="email" id="email" name="email" parsley-trigger="change"  placeholder="Email"
                                               class="form-control @if($errors->has('email')) is-invalid @endif" value="@if(isset($contact_us)) {{ old('email',$contact_us->email) }}@endif">
                                        @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label for="subject">Subject</label>
                                        <input autocomplete="off" type="text" id="subject" name="subject" parsley-trigger="change"  placeholder="Subject"
                                               class="form-control @if($errors->has('subject')) is-invalid @endif" value="@if(isset($contact_us)) {{ old('subject',$contact_us->subject) }}@endif">

                                        @if($errors->has('subject'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('subject') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>


                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="message">Message</label>
                                        <textarea autocomplete="off" type="text" id="message" name="message" parsley-trigger="change"  placeholder="Message"
                                               class="form-control @if($errors->has('message')) is-invalid @endif">
                                           @if(isset($contact_us))
                                                {{ old('message',$contact_us->message) }}
                                            @endif
                                        </textarea>

                                        @if($errors->has('message'))
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('message') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>



                                <div class="row mt-5">
                                    <div class="form-group btns-div col-12">
                                         <a href="{{ url('admin/contact_us') }}" class="btn btn-md btn-light mr-5"> Cancel </a>
                                        <button type="submit" class="btn btn-md btn-primary "> Save </button>
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
        $(document).ready(function () {
            $('#loader').fadeOut('slow');

            tinymce.init({
                selector: 'textarea#message',
                menubar: false
            });

        });
    </script>
@endsection

@section('script-bottom')
@endsection
