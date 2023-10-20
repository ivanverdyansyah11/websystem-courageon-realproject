@extends('templates.main')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
@endsection
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
                <h5 class="subtitle">Tambah Pegawai Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('pegawai-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Gambar Profil</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                class="img-fluid tag-edit-image" alt="Gambar Profil" width="80">
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-edit-image" name="image"
                                                    required>
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="fullname">Nama Lengkap</label>
                                        <input type="text" id="fullname" class="input" autocomplete="off"
                                            name="fullname" value="{{ old('fullname') }}" required>
                                        @error('fullname')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nip">NIP</label>
                                        <input type="text" id="nip" class="input" autocomplete="off"
                                            name="nip" value="{{ old('nip') }}">
                                        @error('nip')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="place_of_birth">Tempat Lahir</label>
                                        <input type="text" id="place_of_birth" class="input" autocomplete="off"
                                            name="place_of_birth" value="{{ old('place_of_birth') }}">
                                        @error('place_of_birth')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="date_of_birth">Tanggal Lahir</label>
                                        <input type="date" id="date_of_birth" class="input" autocomplete="off"
                                            name="date_of_birth" value="{{ old('date_of_birth') }}">
                                        @error('date_of_birth')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="position">Jabatan</label>
                                        <input type="text" id="position" class="input" autocomplete="off"
                                            name="position" value="{{ old('position') }}">
                                        @error('position')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="rank">Pangkat/ Golongan</label>
                                        <input type="text" id="rank" class="input" autocomplete="off"
                                            name="rank" value="{{ old('rank') }}">
                                        @error('rank')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="gender" id="gender" class="input select2" required>
                                            <option value="">Pilih jenis kelamin</option>
                                            <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki Laki
                                            </option>
                                            <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan
                                            </option>
                                        </select>
                                        @error('gender')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="input select2" required>
                                            <option value="">Pilih status manajemen</option>
                                            <option value="pns" {{ old('status') == 'pns' ? 'selected' : '' }}>
                                                Manajemen
                                                pns</option>
                                            <option value="pppk" {{ old('status') == 'pppk' ? 'selected' : '' }}>
                                                Manajemen pppk</option>
                                            <option value="honorer" {{ old('status') == 'honorer' ? 'selected' : '' }}>
                                                Manajemen honorer</option>
                                        </select>
                                        @error('status')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="highest_rank">Pangkat Tertinggi</label>
                                        <input type="text" id="highest_rank" class="input" autocomplete="off"
                                            name="highest_rank" value="{{ old('highest_rank') }}">
                                        @error('highest_rank')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="room_type">Golongan Ruangan</label>
                                        <input type="text" id="room_type" class="input" autocomplete="off"
                                            name="room_type" value="{{ old('room_type') }}">
                                        @error('room_type')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tmt">TMT</label>
                                        <input type="date" id="tmt" class="input" autocomplete="off"
                                            name="tmt" value="{{ old('tmt') }}">
                                        @error('tmt')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="last_number_skp">Nomor SKP Terakhir</label>
                                        <input type="text" id="last_number_skp" class="input" autocomplete="off"
                                            name="last_number_skp" value="{{ old('last_number_skp') }}">
                                        @error('last_number_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="last_date_skp">Tanggal SKP Terakhir</label>
                                        <input type="date" id="last_date_skp" class="input" autocomplete="off"
                                            name="last_date_skp" value="{{ old('last_date_skp') }}">
                                        @error('last_date_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="work_tenure">Masa Kerja</label>
                                        <input type="date" id="work_tenure" class="input" autocomplete="off"
                                            name="work_tenure" value="{{ old('work_tenure') }}">
                                        @error('work_tenure')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="first_number_skp">Nomor SKP Pertama</label>
                                        <input type="text" id="first_number_skp" class="input" autocomplete="off"
                                            name="first_number_skp" value="{{ old('first_number_skp') }}">
                                        @error('first_number_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="first_date_skp">Tanggal SKP Pertama</label>
                                        <input type="date" id="first_date_skp" class="input" autocomplete="off"
                                            name="first_date_skp" value="{{ old('first_date_skp') }}">
                                        @error('first_date_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="salary_increase">Kenaikan Gaji Berskala</label>
                                        <input type="date" id="salary_increase" class="input" autocomplete="off"
                                            name="salary_increase" value="{{ old('salary_increase') }}">
                                        @error('salary_increase')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="employee_card_number">Nomor Kartu Pegawai</label>
                                        <input type="text" id="employee_card_number" class="input"
                                            autocomplete="off" name="employee_card_number"
                                            value="{{ old('employee_card_number') }}">
                                        @error('employee_card_number')
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
                                <button type="submit" class="button-default-solid">Tambah Pegawai</button>
                                <a href="{{ route('pegawai-index') }}" class="button-default">Batal Tambah</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}
<script>
    $(document).ready(function() {
        $(".select2").select2()
    })
    const tagEdit = document.querySelector('.tag-edit-image');
    const inputEdit = document.querySelector('.input-edit-image');

    inputEdit.addEventListener('change', function() {
        tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
    });
</script>
@endpush
