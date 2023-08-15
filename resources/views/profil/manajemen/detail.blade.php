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
                <h5 class="subtitle">Detail Manajemen Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="row align-items-end">
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="image">Gambar Profil</label>
                                    <div class="wrapper d-flex gap-3 align-items-end">
                                        @if ($management->image)
                                            <img src="{{ asset('storage/' . $management->image) }}" class="img-fluid"
                                                alt="Management Image" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="fullname">Nama Lengkap</label>
                                    @if ($management->fullname)
                                        <input disabled type="text" id="fullname" class="input"
                                            value="{{ $management->fullname }}">
                                    @else
                                        <input disabled type="text" id="fullname" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="nip">NIP</label>
                                    @if ($management->nip)
                                        <input disabled type="text" id="nip" class="input"
                                            value="{{ $management->nip }}">
                                    @else
                                        <input disabled type="text" id="nip" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="place_of_birth">Tempat Lahir</label>
                                    @if ($management->place_of_birth)
                                        <input disabled type="text" id="place_of_birth" class="input"
                                            value="{{ $management->place_of_birth }}">
                                    @else
                                        <input disabled type="text" id="place_of_birth" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="date_of_birth">Tanggal Lahir</label>
                                    @if ($management->date_of_birth)
                                        <input disabled type="date" id="date_of_birth" class="input"
                                            value="{{ $management->date_of_birth }}">
                                    @else
                                        <input disabled type="text" id="date_of_birth" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="position">Jabatan</label>
                                    @if ($management->position)
                                        <input disabled type="text" id="position" class="input"
                                            value="{{ $management->position }}">
                                    @else
                                        <input disabled type="text" id="position" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="input" disabled>
                                        @if ($management->gender == 'L')
                                            <option>Laki Laki</option>
                                        @elseif($management->gender == 'P')
                                            <option>Perempuan</option>
                                        @else
                                            <option selected>-</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="status">Status</label>
                                    <select name="status" id="status" class="input" disabled>
                                        @if ($management->status == 'pns')
                                            <option>Manajemen pns</option>
                                        @elseif($management->status == 'pppk')
                                            <option>Manajemen pppk</option>
                                        @elseif($management->status == 'honorer')
                                            <option>Manajemen honorer</option>
                                        @else
                                            <option>-</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="highest_rank">Pangkat Tertinggi</label>
                                    @if ($management->highest_rank)
                                        <input disabled type="text" id="highest_rank" class="input"
                                            value="{{ $management->highest_rank }}">
                                    @else
                                        <input disabled type="text" id="highest_rank" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="room_type">Golongan Ruangan</label>
                                    @if ($management->room_type)
                                        <input disabled type="text" id="room_type" class="input"
                                            value="{{ $management->room_type }}">
                                    @else
                                        <input disabled type="text" id="room_type" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="tmt">TMT</label>
                                    @if ($management->tmt)
                                        <input disabled type="date" id="tmt" class="input"
                                            value="{{ $management->tmt }}">
                                    @else
                                        <input disabled type="text" id="tmt" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="last_number_skp">Nomor SKP Terakhir</label>
                                    @if ($management->last_number_skp)
                                        <input disabled type="text" id="last_number_skp" class="input"
                                            value="{{ $management->last_number_skp }}">
                                    @else
                                        <input disabled type="text" id="last_number_skp" class="input"
                                            value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="last_date_skp">Tanggal SKP Terakhir</label>
                                    @if ($management->last_date_skp)
                                        <input disabled type="date" id="last_date_skp" class="input"
                                            value="{{ $management->last_date_skp }}">
                                    @else
                                        <input disabled type="text" id="last_date_skp" class="input" value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="work_tenure">Masa Kerja</label>
                                    <input disabled type="text" id="work_tenure" class="input"
                                        value="{{ $work_tenure }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="first_number_skp">Nomor SKP Pertama</label>
                                    @if ($management->first_number_skp)
                                        <input disabled type="text" id="first_number_skp" class="input"
                                            value="{{ $management->first_number_skp }}">
                                    @else
                                        <input disabled type="text" id="first_number_skp" class="input"
                                            value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="first_date_skp">Tanggal SKP Pertama</label>
                                    @if ($management->first_date_skp)
                                        <input disabled type="date" id="first_date_skp" class="input"
                                            value="{{ $management->first_date_skp }}">
                                    @else
                                        <input disabled type="text" id="first_date_skp" class="input"
                                            value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="salary_increase">Kenaikan Gaji Berskala</label>
                                    @if ($management->salary_increase)
                                        <input disabled type="date" id="salary_increase" class="input"
                                            value="{{ $management->salary_increase }}">
                                    @else
                                        <input disabled type="text" id="salary_increase" class="input"
                                            value="-">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="employee_card_number">Nomor Kartu Pegawai</label>
                                    @if ($management->employee_card_number)
                                        <input disabled type="text" id="employee_card_number" class="input"
                                            value="{{ $management->employee_card_number }}">
                                    @else
                                        <input disabled type="text" id="employee_card_number" class="input"
                                            value="-">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <div class="button-wrapper d-flex gap-2">
                            <a href="{{ route('manajemen-index') }}" class="button-default-solid">Kembali ke Halaman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const tagEdit = document.querySelector('.tag-edit-image');
        const inputEdit = document.querySelector('.input-edit-image');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
