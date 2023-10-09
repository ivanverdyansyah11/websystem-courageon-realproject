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
                <h5 class="subtitle">Detail Berita Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form class="form d-flex flex-column justify-content-center">
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="banner">Banner</label>
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($berita->banner)
                                                <img src="{{ asset('assets/img/humas-images/berita-image/' . $berita->banner) }}"
                                                    class="img-fluid" alt="Banner Berita" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="title">Judul</label>
                                        <input type="text" id="title" class="input" autocomplete="off"
                                            value="{{ $berita->title }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="penulis">Penulis</label>
                                        <input type="text" id="penulis" class="input" autocomplete="off"
                                            value="{{ $berita->author }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                        <input type="date" id="tanggal_dibuat" class="input" autocomplete="off"
                                            value="{{ $berita->created_date }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputDetailBerita" autocomplete="off" class="input">{{ $berita->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('berita-index') }}" class="button-default-solid">Kembali ke Halaman</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputDetailBerita = new RichTextEditor("#inputDetailBerita");
    </script>
@endsection
