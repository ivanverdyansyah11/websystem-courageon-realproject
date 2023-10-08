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
                <h5 class="subtitle">Tambah Proyek 5P Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('proyek-store') }}" method="post" enctype="multipart/form-data"
                            class="form d-flex flex-column justify-content-center">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Image</label>
                                        <div class="wrapper d-flex align-items-end">
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                class="img-fluid tag-add-image" alt="Image Project" width="80">
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-add-image" name="image"
                                                    required>
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul Proyek</label>
                                        <input type="text" id="judul" class="input" required
                                            value="{{ old('title') }}" name="title" autocomplete="off">
                                        @error('title')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="topik">Topik</label>
                                        <input type="text" id="topik" class="input" required
                                            value="{{ old('topic') }}" name="topic" autocomplete="off">
                                        @error('topic')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputAddProject" autocomplete="off" class="input" required name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Tambah Proyek</button>
                                <a href="{{ route('proyek-index') }}" class="button-default">Batal
                                    Tambah</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputAddProject = new RichTextEditor("#inputAddProject");

        const tagAddImage = document.querySelector('.tag-add-image');
        const inputAddImage = document.querySelector('.input-add-image');

        inputAddImage.addEventListener('change', function() {
            tagAddImage.src = URL.createObjectURL(inputAddImage.files[0]);
        });
    </script>
@endsection
