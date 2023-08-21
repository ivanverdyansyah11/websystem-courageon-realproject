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
                <h5 class="subtitle">Detail Siswa Sekolah</h5>
            </div>
            <div class="col-12">
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" id="nama_lengkap" class="input" autocomplete="off"
                                            value="{{ $student->nama_lengkap }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_masuk">Tahun Masuk</label>
                                        @foreach ($tahun_ajarans as $tahun_ajaran)
                                            @if ($tahun_ajaran->id == $student->tahun_masuk)
                                                <input type="text" id="tahun_masuk" class="input" autocomplete="off"
                                                    value="{{ $tahun_ajaran->tahun }}" disabled>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nis">NIS</label>
                                        <input type="text" id="nis" class="input" autocomplete="off"
                                            value="{{ $student->nis }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nisn">NISN</label>
                                        <input type="text" id="nisn" class="input" autocomplete="off"
                                            value="{{ $student->nisn }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_ajarans_id">Tahun Ajaran</label>
                                        @foreach ($tahun_ajarans as $tahun_ajaran)
                                            @if ($tahun_ajaran->id == $student->tahun_ajarans_id)
                                                <input type="text" id="tahun_ajarans_id" class="input"
                                                    autocomplete="off" value="{{ $tahun_ajaran->tahun }}" disabled>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="semesters_id">Semester</label>
                                        @foreach ($semesters as $semester)
                                            @if ($semester->id == $student->semesters_id)
                                                <input type="text" id="semesters_id" class="input" autocomplete="off"
                                                    value="{{ $semester->semester }}" disabled>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jurusans_id">Jurusan</label>
                                        @foreach ($jurusans as $jurusan)
                                            @if ($jurusan->id == $student->semesters_id)
                                                <input type="text" id="jurusans_id" class="input" autocomplete="off"
                                                    value="{{ $jurusan->name }}" disabled>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="indices_id">Index</label>
                                        @foreach ($indexes as $index)
                                            @if ($index->id == $student->indices_id)
                                                <input type="text" id="indices_id" class="input" autocomplete="off"
                                                    value="{{ $index->name }}" disabled>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tempat_lahir">Tempat Lahir</label>
                                        <input type="text" id="tempat_lahir" class="input" autocomplete="off"
                                            value="{{ $student->tempat_lahir }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal_lahir">Tanggal Lahir</label>
                                        <input type="date" id="tanggal_lahir" class="input" autocomplete="off"
                                            value="{{ $student->tanggal_lahir }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <input type="text" id="jenis_kelamin" class="input" autocomplete="off"
                                            value="{{ $student->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}"
                                            disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kelurahan">Kelurahan</label>
                                        <input type="text" id="kelurahan" class="input" autocomplete="off"
                                            value="{{ $student->kelurahan }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kecamatan">Kecamatan</label>
                                        <input type="text" id="kecamatan" class="input" autocomplete="off"
                                            value="{{ $student->kecamatan }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="alamat">Alamat</label>
                                        <input type="text" id="alamat" class="input" autocomplete="off"
                                            value="{{ $student->alamat }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('data-siswa-index', $student->kelases_id) }}"
                                    class="button-default-solid">Kembali ke Halaman</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
