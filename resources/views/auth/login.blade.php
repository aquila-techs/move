@extends('layouts.front.template')


@php $root = env('ROOT_FOLDER'); @endphp


@section('content')

@include('front.includes.header')

<section id="content">

    <div class="container">
        <div class="row">
            <div class="col-5 offset-2">

                <div class="row">
                            <div class="col-12 p-5">
                                <div class="mx-auto mb-5">
                                    <a href="/">
                                        <img src="public/assets/images/logo.png" alt="" height="24" />
                                        <h3 class="d-inline align-middle ml-1 text-logo">MoveinandOut</h3>
                                    </a>
                                </div>

                                <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                    access admin panel.</p>

                                @if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>
                                <br>@endif
                                @if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>
                                <br>@endif

                                <form action="{{ route('login') }}" method="post" class="authentication-form">
                                    @csrf

                                    <div class="form-group">
                                        <label class="form-control-label">Email Address</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="email"
                                                class="form-control @if($errors->has('email')) is-invalid @endif" id="
                                                email" placeholder="hello@coderthemes.com" name="email" value="{{ old('email')}}" />

                                            @if($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <label class="form-control-label">Password</label>
                                        <a href="{{ route('password.request') }}"
                                            class="float-right text-muted text-unline-dashed ml-1">Forgot your
                                            password?</a>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                            <input type="password" class="form-control @if($errors->has('password')) is-invalid @endif" id="password"
                                                placeholder="Enter your password"  name="password" />

                                            @if($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                                {{ old('remember') ? 'checked' : '' }} />
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="button button-rounded btn-block" type="submit"> Log In
                                        </button>
                                    </div>
                                </form>

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

                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="/register"
                                class="text-primary font-weight-bold ml-1">Sign Up</a></p>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->

            <div class="col-lg-5 d-none d-lg-flex flex-wrap justify-content-center">
                <img src="{{ asset('public/front/images/main_cover.webp') }}" style="margin-top: -20% !important;" alt="Image 1" class="d-flex align-self-end ml-5 mt-3">
            </div>

        </div>


        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end page -->


<script src="https://use.fontawesome.com/3f7c8758bb.js"></script>
@endsection
