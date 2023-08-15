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
                <h5 class="subtitle">Edit Manajemen Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('manajemen-update', $management->id) }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Gambar Profil</label>
                                        <div class="wrapper d-flex align-items-end">
                                            <input type="hidden" name="oldImage" value="{{ $management->image }}">
                                            @if ($management->image)
                                                <img src="{{ asset('storage/' . $management->image) }}"
                                                    class="img-fluid tag-edit-image" alt="Management Image" width="80"
                                                    name="image">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-image" alt="Image Not Found" width="80"
                                                    name="image">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="banner" class="input-edit-image"
                                                    name="image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="fullname">Nama Lengkap</label>
                                        <input type="text" id="fullname" class="input"
                                            value="{{ $management->fullname }}" name="fullname">
                                        @error('fullname')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nip">NIP</label>
                                        <input type="text" id="nip" class="input" value="{{ $management->nip }}"
                                            name="nip">
                                        @error('nip')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="place_of_birth">Tempat Lahir</label>
                                        <input type="text" id="place_of_birth" class="input"
                                            value="{{ $management->place_of_birth }}" name="place_of_birth">
                                        @error('place_of_birth')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="date_of_birth">Tanggal Lahir</label>
                                        <input type="date" id="date_of_birth" class="input"
                                            value="{{ $management->date_of_birth }}" name="date_of_birth">
                                        @error('date_of_birth')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="position">Jabatan</label>
                                        <input type="text" id="position" class="input"
                                            value="{{ $management->position }}" name="position">
                                        @error('position')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="gender">Jenis Kelamin</label>
                                        <select name="gender" id="gender" class="input" name="gender">
                                            @if ($management->gender == 'L')
                                                <option value="L" selected>Laki Laki</option>
                                                <option value="P">Perempuan</option>
                                            @elseif($management->gender == 'P')
                                                <option value="L">Laki Laki</option>
                                                <option value="P" selected>Perempuan</option>
                                            @else
                                                <option value="-" selected>Pilih jenis kelamin</option>
                                                <option value="L">Laki Laki</option>
                                                <option value="P">Perempuan</option>
                                            @endif
                                        </select>
                                        @error('gender')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="input" name="status">
                                            @if ($management->status == 'pns')
                                                <option value="pns" selected>Manajemen pns</option>
                                                <option value="pppk">Manajemen pppk</option>
                                                <option value="honorer">Manajemen honorer</option>
                                            @elseif($management->status == 'pppk')
                                                <option value="pns">Manajemen pns</option>
                                                <option value="pppk" selected>Manajemen pppk</option>
                                                <option value="honorer">Manajemen honorer</option>
                                            @elseif($management->status == 'honorer')
                                                <option value="pns">Manajemen pns</option>
                                                <option value="pppk">Manajemen pppk</option>
                                                <option value="honorer" selected>Manajemen honorer</option>
                                            @else
                                                <option value="-" selected>Pilih status manajemen</option>
                                                <option value="pns">Manajemen pns</option>
                                                <option value="pppk">Manajemen pppk</option>
                                                <option value="honorer">Manajemen honorer</option>
                                            @endif
                                        </select>
                                        @error('status')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="highest_rank">Pangkat Tertinggi</label>
                                        <input type="text" id="highest_rank" class="input"
                                            value="{{ $management->highest_rank }}" name="highest_rank">
                                        @error('highest_rank')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="room_type">Golongan Ruangan</label>
                                        <input type="text" id="room_type" class="input"
                                            value="{{ $management->room_type }}" name="room_type">
                                        @error('room_type')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tmt">TMT</label>
                                        <input type="date" id="tmt" class="input"
                                            value="{{ $management->tmt }}" name="tmt">
                                        @error('tmt')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="last_number_skp">Nomor SKP Terakhir</label>
                                        <input type="text" id="last_number_skp" class="input"
                                            value="{{ $management->last_number_skp }}" name="last_number_skp">
                                        @error('last_number_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="last_date_skp">Tanggal SKP Terakhir</label>
                                        <input type="date" id="last_date_skp" class="input"
                                            value="{{ $management->last_date_skp }}" name="last_date_skp">
                                        @error('last_date_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="work_tenure">Masa Kerja</label>
                                        <input type="date" id="work_tenure" class="input"
                                            value="{{ $management->work_tenure }}" name="work_tenure">
                                        @error('work_tenure')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="first_number_skp">Nomor SKP Pertama</label>
                                        <input type="text" id="first_number_skp" class="input"
                                            value="{{ $management->first_number_skp }}" name="first_number_skp">
                                        @error('first_number_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="first_date_skp">Tanggal SKP Pertama</label>
                                        <input type="date" id="first_date_skp" class="input"
                                            value="{{ $management->first_date_skp }}" name="first_date_skp">
                                        @error('first_date_skp')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="salary_increase">Kenaikan Gaji Berskala</label>
                                        <input type="date" id="salary_increase" class="input"
                                            value="{{ $management->salary_increase }}" name="salary_increase">
                                        @error('salary_increase')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="employee_card_number">Nomor Kartu Pegawai</label>
                                        <input type="text" id="employee_card_number" class="input"
                                            value="{{ $management->employee_card_number }}" name="employee_card_number">
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
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('manajemen-index') }}" class="button-default">Batal Edit</a>
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

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
