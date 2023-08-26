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
                <h5 class="subtitle">Detail Prestasi Sekolah</h5>
            </div>
            <div class="col-12">
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Dokumentasi</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            @if ($prestasi->dokumentasi)
                                                <img src="{{ asset('assets/img/kesiswaan-images/prestasi-image/' . $prestasi->dokumentasi) }}"
                                                    class="img-fluid" alt="Guru Image" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="kategori_prestasis_id">Kategori Prestasi</label>
                                        @foreach ($categories as $category)
                                            @if ($category->id == $prestasi->kategori_prestasis_id)
                                                <input type="text" id="kategori_prestasis_id" class="input"
                                                    autocomplete="off" disabled value="{{ $category->nama }}">
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="text" id="tanggal" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->tanggal }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="status">Status</label>
                                        <input type="text" id="status" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->status }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_kegiatan">Nama Kegiatan</label>
                                        <input type="text" id="nama_kegiatan" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->nama_kegiatan }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="penyelenggara">Penyelenggara</label>
                                        <input type="text" id="penyelenggara" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->penyelenggara }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama_peserta">Nama Peserta</label>
                                        <input type="text" id="nama_peserta" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->nama_peserta }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="hasil">Hasil</label>
                                        <input type="text" id="hasil" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->hasil }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tingkat">Tingkat</label>
                                        <input type="text" id="tingkat" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->tingkat }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pembina">Pembina</label>
                                        <input type="text" id="pembina" class="input" autocomplete="off" disabled
                                            value="{{ $prestasi->pembina }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputDetailPrestasi" autocomplete="off" class="input">{{ $prestasi->deskripsi }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('prestasi-index') }}" class="button-default-solid">Kembali ke
                                    Halaman</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const inputDetailPrestasi = new RichTextEditor("#inputDetailPrestasi");
    </script>
@endsection
