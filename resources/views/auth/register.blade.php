@extends('front.master.app')

@section('main-body')

<div class="main-body">
    <div class="page-content">
        <div class="container">
            <div class="col-md-6  offset-md-3">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="img-logo text-center">
                            <img src="{{ asset('/') }}assets/images/content/{{ $content->logo }}" class="img-fluid"
                              alt="Logo">
                        </div>
                        <h1 class=" text-center">Sign up</h1>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                  name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">phone</label>
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror"
                                  name="phone" placeholder="please include your country code..."
                                  value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group" id="passwordInput">
                                    <input id="password" type="password"
                                      class="form-control @error('password') is-invalid @enderror" name="password"
                                      required autocomplete="new-password">


                                    <span class="toggle-password feather-eye"></span>
                                    <span class="pass-checked"><i class="feather-check"></i></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Confirm Password</label>
                                <div class="pass-group" id="password_confirmation">
                                    <input id="password" type="password"
                                      class="form-control @error('password') is-invalid @enderror"
                                      name="password_confirmation" required>


                                    <span class="toggle-password feather-eye"></span>
                                    <span class="pass-checked"><i class="feather-check"></i></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-check remember-me">
                                <label class="form-check-label mb-0">
                                    <input class="form-check-input" type="checkbox" name="remember"> I agree to the <a
                                      href="term-condition.html">Terms of Service</a> and <a
                                      href="privacy-policy.html">Privacy Policy.</a>
                                </label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-start" type="submit">Create Account</button>
                            </div>
                            <div class="d-grid">
                                <a href="{{ route('login') }}" class="btn btn-info mt-3" type="submit">Login</a>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
