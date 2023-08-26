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
                <h5 class="subtitle">Tambah Prestasi Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('prestasi-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Dokumentasi</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                class="img-fluid tag-add-image" alt="Gambar Profil" width="80">
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-add-image"
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
                                        <select id="kategori_prestasis_id" class="input" autocomplete="off"
                                            name="kategori_prestasis_id">
                                            <option>Pilih kategori prestasi</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->nama }}</option>
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
                                            name="tanggal">
                                        @error('tanggal')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="input">
                                            <option selected>Pilih status</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Pegawai">Pegawai</option>
                                            <option value="Siswa">Siswa</option>
                                        </select>
                                        @error('status')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_kegiatan">Nama Kegiatan</label>
                                        <input type="text" id="nama_kegiatan" class="input" autocomplete="off"
                                            name="nama_kegiatan">
                                        @error('nama_kegiatan')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="penyelenggara">Penyelenggara</label>
                                        <input type="text" id="penyelenggara" class="input" autocomplete="off"
                                            name="penyelenggara">
                                        @error('penyelenggara')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_peserta">Nama Peserta</label>
                                        <input type="text" id="nama_peserta" class="input" autocomplete="off"
                                            name="nama_peserta">
                                        @error('nama_peserta')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="hasil">Hasil</label>
                                        <input type="text" id="hasil" class="input" autocomplete="off"
                                            name="hasil">
                                        @error('hasil')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tingkat">Tingkat</label>
                                        <select name="tingkat" id="tingkat" class="input">
                                            <option selected>Pilih tingkat</option>
                                            <option value="Kecamatan">Kecamatan</option>
                                            <option value="Kabupaten">Kabupaten</option>
                                            <option value="Provisi">Provisi</option>
                                            <option value="Negara">Negara</option>
                                        </select>
                                        @error('tingkat')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pembina">Pembina</label>
                                        <input type="text" id="pembina" class="input" autocomplete="off"
                                            name="pembina">
                                        @error('pembina')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputAddPrestasi" autocomplete="off" class="input" name="deskripsi"></textarea>
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
                                <button type="submit" class="button-default-solid">Tambah Prestasi</button>
                                <a href="{{ route('prestasi-index') }}" class="button-default">Batal Tambah</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const inputAddPrestasi = new RichTextEditor("#inputAddPrestasi");

        const tagAdd = document.querySelector('.tag-add-image');
        const inputAdd = document.querySelector('.input-add-image');

        inputAdd.addEventListener('change', function() {
            tagAdd.src = URL.createObjectURL(inputAdd.files[0]);
        });
    </script>
@endsection
