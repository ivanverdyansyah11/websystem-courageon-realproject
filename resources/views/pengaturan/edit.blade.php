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
                <h5 class="subtitle">Edit Akun Sekolah</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('pengaturan-update') }}" method="POST"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="border-profile">
                                @if ($user->profile)
                                    <img src="{{ asset('assets/img/pengaturan-images/' . $user->profile) }}"
                                        class="img-fluid img-profile tag-edit-profile w-100" alt="Profile Admin">
                                @else
                                    <img src="{{ asset('assets/img/pengaturan-images/default/profile-admin.png') }}"
                                        class="img-fluid img-profile tag-edit-profile w-100" alt="Profile Default">
                                @endif
                            </div>
                            <div class="wrapper-image w-100 mt-4">
                                <input type="file" id="profile" class="input-edit-profile" name="profile">
                                <input type="hidden" name="oldImage" value="{{ $user->profile }}">
                            </div>
                            @error('profile')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col ms-lg-5">
                            <div class="input-wrapper mb-4">
                                <label for="username">Nama Pengguna</label>
                                <input type="text" id="username" class="input" autocomplete="off" name="username"
                                    value="{{ $user->username }}">
                                @error('username')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-wrapper mb-3">
                                <label for="role">Role</label>
                                <input type="text" id="role" class="input" autocomplete="off" name="role"
                                    value="{{ $user->role }}">
                                @error('role')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-wrapper mb-3">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="input" autocomplete="off" name="email"
                                    value="{{ $user->email }}">
                                @error('email')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-wrapper mb-3">
                                <label for="oldPassword">Password Lama</label>
                                <input type="text" id="oldPassword" class="input" autocomplete="off" name="oldPassword">
                                @error('oldPassword')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="input-wrapper mb-4">
                                <label for="newPassword">Password Baru</label>
                                <input type="text" id="newPassword" class="input" autocomplete="off" name="password">
                                @error('password')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('pengaturan-index') }}" class="button-default">Batal Edit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const tagEdit = document.querySelector('.tag-edit-profile');
        const inputEdit = document.querySelector('.input-edit-profile');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
