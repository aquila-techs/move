@extends('layouts.front.template')

@php $root = env('ROOT_FOLDER'); @endphp

@section('content')

@include('front.includes.header')

    <section id="content">

        <div class="container-fluid">
            <div class="row" >
                <div class="col-8">

                    <div class="row mt-n3">
                        <div class="col-12 p-5">
                            <div class="mx-auto">
                                <a href="/">
                                    <img src="/public/assets/images/logo.png" alt="" height="24" />
                                    <h3 class="d-inline align-middle ml-1  text-logo">MoveinandOut</h3>
                                </a>
                            </div>

                            <p class="text-muted text-white mt-0">Register as a Company</p>

                            @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>
                            <br>@endif
                            @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                            <br>@endif

                            <form method="POST" action="{{ url('register/company') }}" class="authentication-form">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <h4> Personal Information </h4>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-control-label">Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                            </div>
                                            <input type="text"
                                                   name="username" value="{{ old('username')}}"
                                                   class="form-control @if($errors->has('username')) is-invalid @endif"
                                                   id="username" placeholder="Your full name" />

                                            @if($errors->has('username'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="form-control-label">Email Address</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope"></i>
                                                </span>
                                            </div>
                                            <input type="email"
                                                   name="email" value="{{ old('email')}}"
                                                   class="form-control @if($errors->has('email')) is-invalid @endif"
                                                   id="email" placeholder="hello@coderthemes.com" />

                                            @if($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-6">
                                        <label class="form-control-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                            <input type="password"
                                                   name="password" value="{{ old('password')}}"
                                                   class="form-control @if($errors->has('password')) is-invalid @endif"
                                                   id="password" placeholder="Enter your password" />

                                            @if($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="form-control-label">Re-Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                            <input type="password"
                                                   name="confirm_password" value="{{ old('confirm_password')}}"
                                                   class="form-control @if($errors->has('confirm_password')) is-invalid @endif"
                                                   id="confirm_password" placeholder="Confirm your password" />

                                            @if($errors->has('confirm_password'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('confirm_password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <h4> Company Information </h4>
                                    </div>
                                    <div class="form-group col-6">
                                        <label class="form-control-label">Company Name</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                            <input type="text"
                                                   name="name" value="{{ old('name')}}"
                                                   class="form-control @if($errors->has('name')) is-invalid @endif"
                                                   id="name" placeholder="Your Company Name" />

                                            @if($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="form-control-label">Company Email</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                            <input type="email"
                                                   name="company_email" value="{{ old('company_email')}}"
                                                   class="form-control @if($errors->has('company_email')) is-invalid @endif"
                                                   id="company_email" placeholder="Your Company Email" />

                                            @if($errors->has('company_email'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('company_email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="form-group col-6">
                                        <label class="form-control-label">City</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                            <input type="text"
                                                   name="city" value="{{ old('city')}}"
                                                   class="form-control @if($errors->has('city')) is-invalid @endif"
                                                   id="city" placeholder="Company City" />

                                            @if($errors->has('city'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group col-6">
                                        <label class="form-control-label">State</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                            </div>
                                            <input type="text"
                                                   name="state" value="{{ old('state')}}"
                                                   class="form-control @if($errors->has('state')) is-invalid @endif"
                                                   id="state" placeholder="Company State" />

                                            @if($errors->has('state'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <input type="hidden" name="role" value="company">
                                </div>

                                <div class="form-group my-0 text-center">
                                    <button class="button button-rounded btn-block" type="submit"> Register Company </button>
                                </div>
                            </form>
                                <p class="text-muted text-center">Already have account? <a href="/login"
                                                                               class="text-primary font-weight-bold ml-1">Login Up</a></p>

                            <!-- <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">Or</span>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="btn btn-white"><i
                                            class='uil uil-google icon-google mr-2'></i>With Google</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="" class="btn btn-white"><i
                                            class='uil uil-facebook mr-2 icon-fb'></i>With Facebook</a>
                                </div>
                            </div> -->
                        </div>
                        <div class="col-lg-6 d-none d-md-inline-block">

                        </div>
                    </div>

                    <!-- end row -->

                </div> <!-- end col -->

                <div class="col-lg-4 ">
               </div>

            </div>


            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end page -->


    <script src="https://use.fontawesome.com/3f7c8758bb.js"></script>
@endsection
