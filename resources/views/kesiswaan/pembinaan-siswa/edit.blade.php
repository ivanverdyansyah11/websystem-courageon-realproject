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
                <h5 class="subtitle">Edit Pembinaan Siswa Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('pembinaan-siswa-update', $pembinaan->id) }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Dokumentasi</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            @if ($pembinaan->dokumentasi)
                                                <img src="{{ asset('assets/img/kesiswaan-images/pembinaan-siswa-image/' . $pembinaan->dokumentasi) }}"
                                                    class="img-fluid tag-edit-image" alt="Image Pembinaan Siswa"
                                                    width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-image" alt="Image Not Found" width="80">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-edit-image"
                                                    name="dokumentasi">
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
                                        <select name="students_id" id="students_id" class="input" autocomplete="off">
                                            @foreach ($students as $student)
                                                <option value="{{ $student->id }}"
                                                    {{ $student->id === $pembinaan->id ? 'selected' : '' }}>
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
                                        <input type="date" id="tanggal" class="input" autocomplete="off"
                                            value="{{ $pembinaan->tanggal }}" name="tanggal">
                                        @error('tanggal')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="masalah">Masalah</label>
                                        <textarea name="masalah" id="masalah" rows="4" class="input" autocomplete="off">{{ $pembinaan->masalah ? $pembinaan->masalah : '' }}</textarea>
                                        @error('masalah')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="solusi">Solusi</label>
                                        <textarea name="solusi" id="solusi" rows="4" class="input" autocomplete="off">{{ $pembinaan->solusi ? $pembinaan->solusi : '' }}</textarea>
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
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('pelayanan-karir-index') }}" class="button-default">Batal Edit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const tagEdit = document.querySelector('.tag-edit-image');
        const inputEdit = document.querySelector('.input-edit-image');

        inputEdit.EditEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
