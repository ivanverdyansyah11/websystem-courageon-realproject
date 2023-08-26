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

        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Tambah Ekstrakurikuler Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('ekstrakurikuler-store') }}" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-10">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="row align-items-end">
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <label for="icon">Icon</label>
                                                <div class="wrapper d-flex align-items-end">
                                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                        class="img-fluid tag-add-icon" alt="Icon Extracurricular"
                                                        width="80">
                                                    <div class="wrapper-image w-100">
                                                        <input type="file" id="icon" class="input-add-icon"
                                                            name="icon">
                                                    </div>
                                                </div>
                                                @error('icon')
                                                    <p class="caption-error mt-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <label for="banner">Banner</label>
                                                <div class="wrapper d-flex align-items-end">
                                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                        class="img-fluid tag-add-banner" alt="Banner Extracurricular"
                                                        width="80">
                                                    <div class="wrapper-image w-100">
                                                        <input type="file" id="banner" class="input-add-banner"
                                                            name="banner">
                                                    </div>
                                                </div>
                                                @error('banner')
                                                    <p class="caption-error mt-2">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="input" name="name"
                                            autocomplete="off">
                                        @error('name')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul Ekstrakurikuler</label>
                                        <input type="text" id="judul" class="input" name="title"
                                            autocomplete="off">
                                        @error('title')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="link">Link Pendaftaran</label>
                                        <input type="text" id="link" class="input" name="link_register"
                                            autocomplete="off">
                                        @error('link_register')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pembina">Pembina</label>
                                        <input type="text" id="pembina" class="input" name="coach"
                                            autocomplete="off">
                                        @error('coach')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nomor">Nomor Telepon Pembina</label>
                                        <input type="text" id="nomor" class="input" name="number_phone_coach"
                                            autocomplete="off">
                                        @error('number_phone_coach')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label>Jadwal Ekstrakurikuler</label>
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" name="schedule_day[]" id="senin" value="Senin">
                                                <label class="mb-0" for="senin">Senin</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" name="schedule_day[]" id="selasa"
                                                    value="Selasa">
                                                <label class="mb-0" for="selasa">Selasa</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" name="schedule_day[]" id="rabu"
                                                    value="Rabu">
                                                <label class="mb-0" for="rabu">Rabu</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" name="schedule_day[]" id="kamis"
                                                    value="Kamis">
                                                <label class="mb-0" for="kamis">Kamis</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2">
                                                <input type="checkbox" name="schedule_day[]" id="jumat"
                                                    value="Jumat">
                                                <label class="mb-0" for="jumat">Jumat</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2">
                                                <input type="checkbox" name="schedule_day[]" id="sabtu"
                                                    value="Sabtu">
                                                <label class="mb-0" for="sabtu">Sabtu</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2">
                                                <input type="checkbox" name="schedule_day[]" id="minggu"
                                                    value="Minggu">
                                                <label class="mb-0" for="minggu">Minggu</label>
                                            </div>
                                        </div>
                                        @error('schedule_day')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jam_mulai">Jam Mulai</label>
                                        <input type="time" id="jam_mulai" class="input" name="start_time"
                                            autocomplete="off">
                                        @error('start_time')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jam_selesai">Jam Selesai</label>
                                        <input type="time" id="jam_selesai" class="input" name="end_time"
                                            autocomplete="off">
                                        @error('end_time')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputAddDescription" autocomplete="off" class="input" name="description"></textarea>
                                        @error('description')
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
                                <button type="submit" class="button-default-solid">Tambah Ekstrakurikuler</button>
                                <a href="{{ route('ekstrakurikuler-index') }}" class="button-default">Batal
                                    Tambah</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            const inputAddDescription = new RichTextEditor("#inputAddDescription");

            const tagAddIcon = document.querySelector('.tag-add-icon');
            const inputAddIcon = document.querySelector('.input-add-icon');

            const tagAddBanner = document.querySelector('.tag-add-banner');
            const inputAddBanner = document.querySelector('.input-add-banner');

            inputAddIcon.addEventListener('change', function() {
                tagAddIcon.src = URL.createObjectURL(inputAddIcon.files[0]);
            });

            inputAddBanner.addEventListener('change', function() {
                tagAddBanner.src = URL.createObjectURL(inputAddBanner.files[0]);
            });
        </script>
    @endsection
