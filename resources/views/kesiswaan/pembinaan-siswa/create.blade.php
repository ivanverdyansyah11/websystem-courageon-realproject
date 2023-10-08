@extends('templates.main')

@section('container')
    <div class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('failed'))
                    <div class="alert alert-danger mb-4" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Tambah Pembinaan Siswa Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('pembinaan-siswa-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Dokumentasi</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                class="img-fluid tag-add-image" alt="Gambar Profil" width="80">
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-add-image"
                                                    name="dokumentasi" required>
                                            </div>
                                        </div>
                                        @error('dokumentasi')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="students_id">Siswa</label>
                                        <select required name="students_id" id="students_id" class="input"
                                            autocomplete="off">
                                            <option value="">Pilih siswa</option>
                                            @foreach ($students as $student)
                                                <option value="{{ $student->id }}"
                                                    {{ old('students_id') == $student->id ? 'selected' : '' }}>
                                                    {{ $student->nama_lengkap }}</option>
                                            @endforeach
                                        </select>
                                        @error('students_id')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" id="tanggal" class="input" autocomplete="off" required
                                            name="tanggal" value="{{ old('tanggal') }}">
                                        @error('tanggal')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="masalah">Masalah</label>
                                        <textarea id="inputAddMasalah" autocomplete="off" class="input" required name="masalah">{{ old('masalah') }}</textarea>
                                        @error('masalah')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="solusi">Solusi</label>
                                        <textarea id="inputAddSolusi" autocomplete="off" class="input" required name="solusi">{{ old('solusi') }}</textarea>
                                        @error('solusi')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Tambah Pembinaan Siswa</button>
                                <a href="{{ route('pelayanan-karir-index') }}" class="button-default">Batal Tambah</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const inputAddMasalah = new RichTextEditor("#inputAddMasalah");
        const inputAddSolusi = new RichTextEditor("#inputAddSolusi");

        const tagAdd = document.querySelector('.tag-add-image');
        const inputAdd = document.querySelector('.input-add-image');

        inputAdd.addEventListener('change', function() {
            tagAdd.src = URL.createObjectURL(inputAdd.files[0]);
        });
    </script>
@endsection
