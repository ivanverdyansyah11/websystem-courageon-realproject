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
                <h5 class="subtitle">Tambah Siswa Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('data-siswa-store', $kelas->id) }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" id="nama_lengkap" class="input" autocomplete="off"
                                            name="nama_lengkap">
                                        @error('nama_lengkap')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_masuk">Tahun Masuk</label>
                                        <select name="tahun_masuk" id="tahun_masuk" class="input select2">
                                            <option selected>Pilih tahun ajaran masuk</option>
                                            @foreach ($tahun_ajarans as $tahun_ajaran)
                                                <option value="{{ $tahun_ajaran->id }}">{{ $tahun_ajaran->tahun }}</option>
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
                                            name="nis">
                                        @error('nis')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nisn">NISN</label>
                                        <input type="text" id="nisn" class="input" autocomplete="off"
                                            name="nisn">
                                        @error('nisn')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_ajarans_id">Tahun Ajaran</label>
                                        <select name="tahun_ajarans_id" id="tahun_ajarans_id" class="input">
                                            <option selected>Pilih tahun ajaran</option>
                                            @foreach ($tahun_ajarans as $tahun_ajaran)
                                                <option value="{{ $tahun_ajaran->id }}">{{ $tahun_ajaran->tahun }}</option>
                                            @endforeach
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
                                            <option selected>Pilih semester</option>
                                            @foreach ($semesters as $semester)
                                                <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
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
                                            <option selected>Pilih jurusan</option>
                                            @foreach ($jurusans as $jurusan)
                                                <option value="{{ $jurusan->id }}">{{ $jurusan->name }}</option>
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
                                            <option selected>Pilih index</option>
                                            @foreach ($indexes as $index)
                                                <option value="{{ $index->id }}">{{ $index->name }}</option>
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
                                            name="tempat_lahir">
                                        @error('tempat_lahir')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" class="input" autocomplete="off"
                                            name="tanggal_lahir">
                                        @error('tanggal_lahir')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id="jenis_kelamin" class="input select2">
                                            <option selected>Pilih jenis kelamin</option>
                                            <option value="L">Laki Laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                        @error('jenis_kelamin')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kelurahan">Kelurahan</label>
                                        <input type="text" id="kelurahan" class="input" autocomplete="off"
                                            name="kelurahan">
                                        @error('kelurahan')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" id="kecamatan" class="input" autocomplete="off"
                                            name="kecamatan">
                                        @error('kecamatan')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" id="alamat" class="input" autocomplete="off"
                                            name="alamat">
                                        @error('alamat')
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
                                <button type="submit" class="button-default-solid">Tambah Siswa</button>
                                <a href="{{ route('data-siswa-index', $kelas->id) }}" class="button-default">Batal
                                    Tambah</a>
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
<script>
      $(document).ready(function() {
        $(".select2").select2()
    })
</script>
@endpush

