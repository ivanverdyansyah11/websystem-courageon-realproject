@extends('templates.main')

@section('container')
    <div class="container-fluid login">
        <div class="row justify-content-center">
            <div class="col-11 col-md-7 col-lg-5 col-xl-4 px-xxl-5">
                <div class="login-content d-flex flex-column align-items-center">
                    @if (session()->has('success'))
                        <div class="alert alert-success w-100 mb-4" role="alert">
                            {{ session('success') }}
                        </div>
                    @elseif(session()->has('failed'))
                        <div class="alert alert-danger w-100 mb-4" role="alert">
                            {{ session('failed') }}
                        </div>
                    @endif
                    <img src="{{ asset('assets/img/brand/brand-logo.png') }}" class="img-fluid brand-logo text-center mx-auto"
                        alt="Brand Logo" draggable="false">
                    <form action="{{ route('login.action') }}" method="POST"
                        class="form d-flex flex-column justify-content-center align-items-end">
                        @csrf
                        <div class="input-wrapper w-100">
                            <input type="email" class="input" autocomplete="off" placeholder="Enter your email.."
                                name="email">
                            @error('email')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper w-100">
                            <input type="password" class="input" autocomplete="off" placeholder="Enter your password.."
                                name="password">
                            @error('password')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="button-form">Login</button>
                    </form>
                    <p>Forgot password account? <a href="#" class="link-forgot">Forgot Password</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
