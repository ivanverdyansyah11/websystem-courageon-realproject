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
                <h5 class="subtitle">Detail Pembinaan Siswa Sekolah</h5>
            </div>
            <div class="col-12">
                <form class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label>Dokumentasi</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            @if ($pembinaan->dokumentasi)
                                                <img src="{{ asset('assets/img/kesiswaan-images/pembinaan-siswa-image/' . $pembinaan->dokumentasi) }}"
                                                    class="img-fluid" alt="Image Pembinaan Siswa" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="students_id">Siswa</label>
                                        @foreach ($students as $student)
                                            <input type="text" id="students_id" class="input" autocomplete="off"
                                                disabled
                                                value="{{ $pembinaan->id === $student->id ? $student->nama_lengkap : '' }}">
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="text" id="tanggal" class="input" autocomplete="off" disabled
                                            value="{{ $pembinaan->tanggal }}">
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="masalah">Masalah</label>
                                        <textarea disabled id="masalah" rows="4" class="input" autocomplete="off">{{ $pembinaan->masalah }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="solusi">Solusi</label>
                                        <textarea disabled id="solusi" rows="4" class="input" autocomplete="off">{{ $pembinaan->solusi }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('pelayanan-karir-index') }}" class="button-default-solid">Kembali ke
                                    Page</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
