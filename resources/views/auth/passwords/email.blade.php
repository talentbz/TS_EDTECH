@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Recover_Password') 2
@endsection

@section('css')
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
@endsection

@section('body')

    <body class="auth-body-bg">
    @endsection

    @section('content')
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="d-flex justify-content-center mt-3">
                                <img src="{{ URL::asset('/images/logo.png') }}" alt=""
                                    class="img-fluid">
                            </div>
                            <div class="card-body pt-0">
                            <div>
                                <h5 class="text-primary">FORGET PASSWORD</h5>
                                <!-- <p class="text-success">Please provide your registered email</p> -->
                            </div>

                            <div class="mt-4">
                                @if (session('status'))
                                    <div class="alert alert-success text-center mb-4" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form class="form-horizontal" method="POST"
                                    action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="useremail" class="form-label">Email</label>
                                        <input type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            id="useremail" name="email" placeholder="Enter email"
                                            value="{{ old('email') }}" id="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="text-end">
                                        <button class="btn btn-success w-md waves-effect waves-light"
                                            type="submit">Reset</button>
                                    </div>

                                </form>
                            </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                            <div class="mt-5 text-center">
                                    <p>Remember It ? <a href="{{ url('login') }}"
                                            class="font-weight-medium text-success"> Sign In here</a> </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('script')
        <!-- owl.carousel js -->
        <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
        <!-- auth-2-carousel init -->
        <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>
    @endsection
