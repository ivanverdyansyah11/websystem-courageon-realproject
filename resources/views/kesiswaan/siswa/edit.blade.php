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
                <h5 class="subtitle">Edit Siswa Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('data-siswa-update', $student->id) }}" method="POST"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <input type="hidden" value="{{ $student->kelases_id }}" name="kelases_id">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" id="nama_lengkap" class="input" autocomplete="off"
                                            value="{{ $student->nama_lengkap }}" name="nama_lengkap">
                                        @error('nama_lengkap')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_masuk">Tahun Masuk</label>
                                        <select name="tahun_masuk" id="tahun_masuk" class="input">
                                            @foreach ($tahun_ajarans as $tahun_ajaran)
                                                <option value="{{ $tahun_ajaran->id }}"
                                                    {{ $student->tahun_masuk == $tahun_ajaran->tahun ? 'selected' : '' }}>
                                                    {{ $tahun_ajaran->tahun }}</option>
                                            @endforeach
                                        </select>
                                        @error('tahun_masuk')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nis">NIS</label>
                                        <input type="text" id="nis" class="input" autocomplete="off"
                                            value="{{ $student->nis }}" name="nis">
                                        @error('nis')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nisn">NISN</label>
                                        <input type="text" id="nisn" class="input" autocomplete="off"
                                            value="{{ $student->nisn }}" name="nisn">
                                        @error('nisn')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_ajarans_id">Tahun Ajaran</label>
                                        <select name="tahun_ajarans_id" id="tahun_ajarans_id" class="input" required>
                                            @if ($student->tahun_ajaran)
                                                @foreach ($tahun_ajarans as $tahun_ajaran)
                                                    <option value="{{ $tahun_ajaran->id }}"
                                                        {{ $student->tahun_ajarans_id == $tahun_ajaran->id ? 'selected' : '' }}>
                                                        {{ $tahun_ajaran->tahun }}</option>
                                                @endforeach
                                            @else
                                                <option value="">Pilih tahun ajaran</option>
                                                @foreach ($tahun_ajarans as $tahun_ajaran)
                                                    <option value="{{ $tahun_ajaran->id }}">{{ $tahun_ajaran->tahun }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                        @error('tahun_ajarans_id')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="semesters_id">Semester</label>
                                        <select name="semesters_id" id="semesters_id" class="input">
                                            @foreach ($semesters as $semester)
                                                <option value="{{ $semester->id }}"
                                                    {{ $student->semesters_id == $semester->id ? 'selected' : '' }}>
                                                    {{ $semester->semester }}</option>
                                            @endforeach
                                        </select>
                                        @error('semesters_id')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jurusans_id">Jurusan</label>
                                        <select name="jurusans_id" id="jurusans_id" class="input">
                                            @foreach ($jurusans as $jurusan)
                                                <option value="{{ $jurusan->id }}"
                                                    {{ $student->jurusans_id == $jurusan->id ? 'selected' : '' }}>
                                                    {{ $jurusan->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('jurusans_id')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="indices_id">Index</label>
                                        <select name="indices_id" id="indices_id" class="input">
                                            @foreach ($indexes as $index)
                                                <option value="{{ $index->id }}"
                                                    {{ $student->indices_id == $index->id ? 'selected' : '' }}>
                                                    {{ $index->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('indices_id')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" class="input" autocomplete="off"
                                            name="tempat_lahir" value="{{ $student->tempat_lahir }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" class="input" autocomplete="off"
                                            name="tanggal_lahir" value="{{ $student->tanggal_lahir }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="input">
                                            <option value="L" {{ $student->jenis_kelamin == 'L' ? 'selected' : '' }}>
                                                Laki Laki</option>
                                            <option value="P" {{ $student->jenis_kelamin == 'P' ? 'selected' : '' }}>
                                                Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kelurahan">Kelurahan</label>
                                        <input type="text" id="kelurahan" class="input" autocomplete="off"
                                            name="kelurahan" value="{{ $student->kelurahan }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" id="kecamatan" class="input" autocomplete="off"
                                            name="kecamatan" value="{{ $student->kecamatan }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" id="alamat" class="input" autocomplete="off"
                                            name="alamat" value="{{ $student->alamat }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('data-siswa-index', $student->kelases_id) }}"
                                    class="button-default">Batal
                                    Edit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
