@extends('templates.main')

@section('container')
    <div class="container-fluid login">
        <div class="row justify-content-center">
            <div class="col-11 col-md-7 col-lg-5 col-xl-4 px-xxl-5">
                <div class="login-content d-flex flex-column align-items-center">
                    @if (Session::has('message'))
                        <div class="alert alert-success w-100 mb-4" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <img src="{{ asset('assets/img/brand/' . $logo->logo) }}" class="img-fluid brand-logo text-center mx-auto"
                        alt="Brand Logo" draggable="false">
                    <form action="{{ route('forgot-password-action') }}" method="POST"
                        class="form d-flex flex-column justify-content-center align-items-end">
                        @csrf
                        <div class="input-wrapper w-100">
                            <input type="email" class="input" autocomplete="off" placeholder="Enter your email.."
                                name="email">
                            @error('email')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="button-form">Send Email</button>
                    </form>
                    <p>Remember your password account? <a href="{{ route('login') }}" class="link-forgot">Login</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
