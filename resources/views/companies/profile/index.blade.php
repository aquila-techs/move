@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Shreyu</a></li>
                <li class="breadcrumb-item"><a href="">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Profile</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center mt-3">
                    <img src="{{ asset('public/assets/images/users/avatar-7.jpg') }}" alt="" class="avatar-lg rounded-circle" />
                    <h5 class="mt-2 mb-0"> Company Name </h5>
                    <h6 class="text-muted font-weight-normal mt-2 mb-0"> Company Type
                    </h6>
                    <h6 class="text-muted font-weight-normal mt-1 mb-4">San Francisco, CA</h6>

                </div>

                <!-- profile  -->
                <div class="mt-5 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">About</h4>
                    <p class="text-muted mb-4">Hi I'm Shreyu. I am user experience and user
                        interface designer.
                        I have been working on UI & UX since last 10 years.</p>
                </div>
                <div class="mt-3 pt-2 border-top">
                    <h4 class="mb-3 font-size-15">Contact Information</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless mb-0 text-muted">
                            <tbody>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>xyz123@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone</th>
                                    <td>(123) 123 1234</td>
                                </tr>
                                <tr>
                                    <th scope="row">Address</th>
                                    <td>1975 Boring Lane, San Francisco, California, United States -
                                        94108</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <!-- end card -->

    </div>

    <div class="col-lg-9">
      
    </div>
</div>
<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection
