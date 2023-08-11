@extends('templates.main')

@section('container')
    <div class="container-fluid login">
        <div class="row justify-content-center">
            <div class="col-11 col-md-7 col-lg-5 col-xl-4 px-xxl-5">
                <div class="login-content d-flex flex-column align-items-center">
                    <img src="{{ asset('assets/img/brand/brand-logo.svg') }}" class="img-fluid brand-logo text-center mx-auto"
                        alt="Brand Logo" draggable="false">
                    <form action="" class="form d-flex flex-column justify-content-center align-items-end">
                        <div class="input-wrapper w-100">
                            <input type="email" class="input" autocomplete="off" placeholder="Enter your email..">
                        </div>
                        <div class="input-wrapper w-100">
                            <input type="password" class="input" autocomplete="off" placeholder="Enter your password..">
                        </div>
                        <button class="button-form">Login</button>
                    </form>
                    <p>Forgot password account? <a href="#" class="link-forgot">Forgot Password</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
