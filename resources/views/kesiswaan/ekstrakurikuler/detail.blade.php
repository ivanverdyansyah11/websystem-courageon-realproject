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
                <h5 class="subtitle">Detail Ekstrakurikuler Sekolah</h5>
            </div>
            <div class="col-12">
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-10">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="row align-items-end">
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <label>Icon</label>
                                                <div class="wrapper d-flex align-items-end">
                                                    @if ($extracurricular->icon)
                                                        <img src="{{ asset('assets/img/kesiswaan-images/ekstrakurikuler-image/' . $extracurricular->icon) }}"
                                                            class="img-fluid" alt="Icon Extracurricular" width="40">
                                                    @else
                                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                            class="img-fluid" alt="Image Not Found" width="80">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-wrapper">
                                                <label>Banner</label>
                                                <div class="wrapper d-flex align-items-end">
                                                    @if ($extracurricular->banner)
                                                        <img src="{{ asset('assets/img/kesiswaan-images/ekstrakurikuler-image/banner/' . $extracurricular->banner) }}"
                                                            class="img-fluid" alt="Banner Extracurricular" width="80">
                                                    @else
                                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                            class="img-fluid" alt="Image Not Found" width="80">
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama">Nama</label>
                                        <input type="text" id="nama" class="input"
                                            value="{{ $extracurricular->name }}" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul Ekstrakurikuler</label>
                                        <input type="text" id="judul" class="input"
                                            value="{{ $extracurricular->title }}" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="link">Link Pendaftaran</label>
                                        <input type="text" id="link" class="input"
                                            value="{{ $extracurricular->link_register }}" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pembina">Pembina</label>
                                        <input type="text" id="pembina" class="input"
                                            value="{{ $extracurricular->coach }}" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nomor">Nomor Telepon Pembina</label>
                                        <input type="text" id="nomor" class="input"
                                            value="{{ $extracurricular->number_phone_coach }}" autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label>Jadwal Ekstrakurikuler</label>
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="senin" value="enin" disabled
                                                    {{ in_array('Senin', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="senin">Senin</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="selasa" value="selasa" disabled
                                                    {{ in_array('Selasa', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="selasa">Selasa</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="rabu" value="rabu" disabled
                                                    {{ in_array('Rabu', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="rabu">Rabu</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="kamis" value="kamis" disabled
                                                    {{ in_array('Kamis', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="kamis">Kamis</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="jumat" value="jumat" disabled
                                                    {{ in_array('Jumat', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="jumat">Jumat</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="sabtu" value="sabtu" disabled
                                                    {{ in_array('Sabtu', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="sabtu">Sabtu</label>
                                            </div>
                                            <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                                <input type="checkbox" id="minggu" value="minggu" disabled
                                                    {{ in_array('Minggu', $schedule_days) ? 'checked' : '' }}>
                                                <label class="mb-0" for="minggu">Minggu</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jam_mulai">Jam Mulai</label>
                                        <input type="time" id="jam_mulai" class="input"
                                            value="{{ $extracurricular->start_time }}" disabled autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jam_selesai">Jam Selesai</label>
                                        <input type="time" id="jam_selesai" class="input"
                                            value="{{ $extracurricular->end_time }}" disabled autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea disabled id="deskripsi" class="input" autocomplete="off" rows="4">{{ $extracurricular->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex">
                                <a href="{{ route('ekstrakurikuler-index') }}" class="button-default-solid">Kembali ke
                                    Page</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
