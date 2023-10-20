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
                <h5 class="subtitle">Edit Prestasi Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('prestasi-update', $prestasi->id) }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Dokumentasi</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            @if ($prestasi->dokumentasi)
                                                <img src="{{ asset('assets/img/kesiswaan-images/prestasi-image/' . $prestasi->dokumentasi) }}"
                                                    class="img-fluid tag-edit-image" alt="Guru Image" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-image" alt="Image Not Found" width="80">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-edit-image"
                                                    name="dokumentasi">
                                            </div>
                                        </div>
                                        @error('dokumentasi')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kategori_prestasis_id">Kategori Prestasi</label>
                                        <select id="kategori_prestasis_id" class="input select2" autocomplete="off"
                                            name="kategori_prestasis_id" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $prestasi->kategori_prestasis_id ? 'selected' : '' }}>
                                                    {{ $category->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori_prestasis_id')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" id="tanggal" class="input" autocomplete="off"
                                            name="tanggal" value="{{ $prestasi->tanggal }}" required>
                                        @error('tanggal')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="input select2" required>
                                            <option value="Guru" {{ $prestasi->status === 'Guru' ? 'selected' : '' }}>
                                                Guru
                                            </option>
                                            <option value="Pegawai"
                                                {{ $prestasi->status === 'Pegawai' ? 'selected' : '' }}>
                                                Pegawai</option>
                                            <option value="Siswa" {{ $prestasi->status === 'Siswa' ? 'selected' : '' }}>
                                                Siswa</option>
                                        </select>
                                        @error('status')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_kegiatan">Nama Kegiatan</label>
                                        <input type="text" id="nama_kegiatan" class="input" autocomplete="off" required
                                            name="nama_kegiatan" value="{{ $prestasi->nama_kegiatan }}">
                                        @error('nama_kegiatan')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="penyelenggara">Penyelenggara</label>
                                        <input type="text" id="penyelenggara" class="input" autocomplete="off" required
                                            name="penyelenggara" value="{{ $prestasi->penyelenggara }}">
                                        @error('penyelenggara')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_peserta">Nama Peserta</label>
                                        <input type="text" id="nama_peserta" class="input" autocomplete="off" required
                                            name="nama_peserta" value="{{ $prestasi->nama_peserta }}">
                                        @error('nama_peserta')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="hasil">Hasil</label>
                                        <input type="text" id="hasil" class="input" autocomplete="off" required
                                            name="hasil" value="{{ $prestasi->hasil }}">
                                        @error('hasil')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tingkat">Tingkat</label>
                                        <select required name="tingkat" id="tingkat" class="input select2">
                                            <option value="Kecamatan"
                                                {{ $prestasi->tingkat === 'Kecamatan' ? 'selected' : '' }}>
                                                Kecamatan</option>
                                            <option value="Kabupaten"
                                                {{ $prestasi->tingkat === 'Kabupaten' ? 'selected' : '' }}>
                                                Kabupaten</option>
                                            <option value="Provinsi"
                                                {{ $prestasi->tingkat === 'Provinsi' ? 'selected' : '' }}>
                                                Provinsi</option>
                                            <option value="Negara"
                                                {{ $prestasi->tingkat === 'Negara' ? 'selected' : '' }}>
                                                Negara
                                            </option>
                                        </select>
                                        @error('tingkat')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pembina">Pembina</label>
                                        <input type="text" id="pembina" class="input" autocomplete="off" required
                                            name="pembina" value="{{ $prestasi->pembina }}">
                                        @error('pembina')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputEditPrestasi" autocomplete="off" class="input" required name="deskripsi">{{ $prestasi->deskripsi }}</textarea>
                                        @error('deskripsi')
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
                                <a href="{{ route('prestasi-index') }}" class="button-default">Batal Edit</a>
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

    const inputAddPrestasi = new RichTextEditor("#inputAddPrestasi");

    const tagEdit = document.querySelector('.tag-edit-image');
    const inputEdit = document.querySelector('.input-edit-image');

    inputEdit.addEventListener('change', function() {
        tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
    });
</script>
@endpush
