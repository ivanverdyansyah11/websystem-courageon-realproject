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
                <h5 class="subtitle">Tambah Berita Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('berita-store') }}" method="post"
                            class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="banner">Banner</label>
                                        <div class="wrapper d-flex align-items-end">
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                class="img-fluid tag-add-banner" alt="Banner Berita" width="80">
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="banner" class="input-add-banner" required
                                                    name="banner">
                                            </div>
                                        </div>
                                        @error('banner')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="title">Judul</label>
                                        <input type="text" id="title" class="input" autocomplete="off" required
                                            name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="penulis">Penulis</label>
                                        <input type="text" id="penulis" class="input" autocomplete="off" required
                                            name="author" value="{{ old('author') }}">
                                        @error('author')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                        <input type="date" id="tanggal_dibuat" class="input" autocomplete="off" required
                                            name="created_date" value="{{ old('created_date') }}">
                                        @error('created_date')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputAddBerita" autocomplete="off" class="input" required name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Tambah Berita</button>
                                <a href="{{ route('berita-index') }}" class="button-default">Batal Tambah</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputAddBerita = new RichTextEditor("#inputAddBerita");

        const tagAddBanner = document.querySelector('.tag-add-banner');
        const inputAddBanner = document.querySelector('.input-add-banner');

        inputAddBanner.addEventListener('change', function() {
            tagAddBanner.src = URL.createObjectURL(inputAddBanner.files[0]);
        });
    </script>
@endsection
