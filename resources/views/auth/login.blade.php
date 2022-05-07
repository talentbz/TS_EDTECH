@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Login')
@endsection

@section('body')

    <body>
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
                                <div class="p-2">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input name="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" id="username"
                                                placeholder="Enter Email" autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div
                                                class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                <input type="password" name="password"
                                                    class="form-control  @error('password') is-invalid @enderror"
                                                    id="userpassword" placeholder="Enter password"
                                                    aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i
                                                        class="mdi mdi-eye-outline"></i></button>
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-success waves-effect waves-light" type="submit">Log
                                                In</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-muted"><i
                                                        class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                                            @endif

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <div class="mt-5 text-center">

                            <div>
                                <p>Don't have an account ? <a href="{{ url('register') }}" class="fw-medium text-primary text-success">
                                        Signup now </a> </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

    @endsection
