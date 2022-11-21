@extends('front.master.app')

@section('main-body')
<div class="main-body">
    <div class="main-wrapper log-wrap">
        <div class="container">

            <div class="col-md-6 offset-md-3">

                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100  ">
                            <div class="img-logo text-center">
                                <img src="{{ asset('/') }}assets/images/content/{{ $content->logo }}" class="img-fluid"
                                  alt="Logo">

                            </div>
                            <h1 class="text-center">Sign into Your Account</h1>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" name="email" class="form-control"
                                      placeholder="Enter your email address">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input"
                                          placeholder="Enter your password">
                                        <span class="feather-eye toggle-password"></span>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="forgot">
                                    <span><a class="forgot-link" href="forgot-password.html">Forgot Password
                                            ?</a></span>
                                </div>
                                <div class="remember-me">
                                    <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                        <input type="checkbox" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit">Sign In</button>
                                </div>
                                <div class="d-grid">
                                    <a href="{{ route('register') }}" class="btn btn-info mt-3"
                                      type="submit">register</a>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
