@extends('layouts.auth')

@section('title')
    Register Account
@endsection

@section('content')
    <div class="col-md-4 col-11">
        <div class="card p-3 rounded shadow-sm">
            <img src="{{ asset('assets/logo.png') }}" width="200" class="mx-auto mt-4" alt="">
            <h3 class="text-center mt-4">Register Account</h3>
            <p class="fw-bold text-center">Create New Account</p>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Full Name">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="text" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" placeholder="New Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="password" class="form-control form-control-xl" name="password_confirmation" placeholder="Repeat Password">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-sm mt-3">
                    Log in
                </button>
            </form>
            <div class="d-flex justify-content-between mt-3">
                <p class="fw-bold mb-0">Account Ready ?</p>
                <a href="{{ route('login') }}">LogIn Now</a>
            </div>
            <div class="divider">
                <div class="divider-text">OR</div>
            </div>
            <a href="" class="text-center">
                <img src="{{ asset('assets/auth_google.png') }}" width="200" alt="">
            </a>
        </div>
    </div>
@endsection
