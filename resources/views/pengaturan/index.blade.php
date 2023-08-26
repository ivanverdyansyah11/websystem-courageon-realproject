@extends('templates.main')

@section('container')
    <div class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif(session()->has('failed'))
                    <div class="alert alert-danger mb-4" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Pengaturan Admin Sekolah</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="border-profile">
                    @if ($user->profile)
                        <img src="{{ asset('assets/img/pengaturan-images/' . $user->profile) }}"
                            class="img-fluid img-profile w-100" alt="Profile Admin">
                    @else
                        <img src="{{ asset('assets/img/pengaturan-images/default/profile-admin.png') }}"
                            class="img-fluid img-profile w-100" alt="Profile Default">
                    @endif
                </div>
            </div>
            <div class="col ms-lg-5">
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="username">Nama Pengguna</label>
                        <input type="text" id="username" class="input" autocomplete="off" name="username"
                            value="{{ $user->username }}" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="role">Role</label>
                        <input type="text" id="role" class="input" autocomplete="off" name="role"
                            value="{{ $user->role }}" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="input" autocomplete="off" name="email"
                            value="{{ $user->email }}" disabled>
                    </div>
                    <div class="button-wrapper d-flex">
                        <a href="{{ route('pengaturan-edit') }}" class="button-default-solid">Lakukan Perubahan</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
