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
                <h5 class="subtitle">Edit Ekstrakurikuler Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('ekstrakurikuler-update', $extracurricular->id) }}" method="POST"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
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
                                                    @if ($extracurricular->icon)
                                                        <img src="{{ asset('assets/img/kesiswaan-images/ekstrakurikuler-image/' . $extracurricular->icon) }}"
                                                            class="img-fluid tag-edit-icon" alt="Icon Extracurricular"
                                                            width="40">
                                                    @else
                                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                            class="img-fluid tag-edit-icon" alt="Image Not Found"
                                                            width="80">
                                                    @endif
                                                    <div class="wrapper-image w-100">
                                                        <input type="file" id="icon" class="input-edit-icon"
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
                                                    @if ($extracurricular->banner)
                                                        <img src="{{ asset('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/' . $extracurricular->banner) }}"
                                                            class="img-fluid tag-edit-banner" alt="Banner Extracurricular"
                                                            width="80">
                                                    @else
                                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                            class="img-fluid tag-edit-banner" alt="Image Not Found"
                                                            width="80">
                                                    @endif
                                                    <div class="wrapper-image w-100">
                                                        <input type="file" id="banner" class="input-edit-banner"
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
                                        <input type="text" id="nama" class="input"
                                            value="{{ $extracurricular->name }}" name="name" autocomplete="off">
                                        @error('name')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul Ekstrakurikuler</label>
                                        <input type="text" id="judul" class="input"
                                            value="{{ $extracurricular->title }}" name="title" autocomplete="off">
                                        @error('title')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="link">Link Pendaftaran</label>
                                        <input type="text" id="link" class="input"
                                            value="{{ $extracurricular->link_register }}" name="link_register"
                                            autocomplete="off">
                                        @error('link_register')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pembina">Pembina</label>
                                        <input type="text" id="pembina" class="input"
                                            value="{{ $extracurricular->coach }}" name="coach" autocomplete="off">
                                        @error('coach')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nomor">Nomor Telepon Pembina</label>
                                        <input type="text" id="nomor" class="input"
                                            value="{{ $extracurricular->number_phone_coach }}" name="number_phone_coach"
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
                                                <input type="checkbox" id="senin" name="schedule_day[]"
                                                    value="Senin"
                                                    {{ in_array('Senin', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="senin">Senin</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="selasa" name="schedule_day[]"
                                                    value="Selasa"
                                                    {{ in_array('Selasa', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="selasa">Selasa</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="rabu" name="schedule_day[]"
                                                    value="Rabu"
                                                    {{ in_array('Rabu', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="rabu">Rabu</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="kamis" name="schedule_day[]"
                                                    value="Kamis"
                                                    {{ in_array('Kamis', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="kamis">Kamis</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="jumat" name="schedule_day[]"
                                                    value="Jumat"
                                                    {{ in_array('Jumat', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="jumat">Jumat</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="sabtu" name="schedule_day[]"
                                                    value="Sabtu"
                                                    {{ in_array('Sabtu', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="sabtu">Sabtu</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="minggu" name="schedule_day[]"
                                                    value="Minggu"
                                                    {{ in_array('Minggu', $schedule_days) ? 'checked' : '' }}>
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
                                        <input type="time" id="jam_mulai" class="input"
                                            value="{{ $extracurricular->start_time }}" name="start_time"
                                            autocomplete="off">
                                        @error('start_time')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jam_selesai">Jam Selesai</label>
                                        <input type="time" id="jam_selesai" class="input"
                                            value="{{ $extracurricular->end_time }}" name="end_time" autocomplete="off">
                                        @error('end_time')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="deskripsi" name="description" class="input" autocomplete="off" rows="4">{{ $extracurricular->description }}</textarea>
                                        @error('description')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('ekstrakurikuler-index') }}" class="button-default">Kembali ke
                                    Page</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script>
            const tagEditIcon = document.querySelector('.tag-edit-icon');
            const inputEditIcon = document.querySelector('.input-edit-icon');

            const tagEditBanner = document.querySelector('.tag-edit-banner');
            const inputEditBanner = document.querySelector('.input-edit-banner');

            inputEditIcon.addEventListener('change', function() {
                tagEditIcon.src = URL.createObjectURL(inputEditIcon.files[0]);
            });

            inputEditBanner.addEventListener('change', function() {
                tagEditBanner.src = URL.createObjectURL(inputEditBanner.files[0]);
            });
        </script>
    @endsection
