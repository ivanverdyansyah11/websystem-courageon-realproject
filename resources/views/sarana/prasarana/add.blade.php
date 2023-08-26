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
                        <form action="{{ route('prasarana-store') }}" method="post"
                            class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Image</label>
                                        <div class="wrapper d-flex align-items-end">
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                class="img-fluid tag-add-image" alt="Image Prasarana" width="80">
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-add-image" name="image">
                                            </div>
                                        </div>
                                        @error('image')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama">Nama Sarana Prasarana</label>
                                        <input type="text" id="nama" class="input" autocomplete="off"
                                            name="name">
                                        @error('name')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="total">Total Sarana Prasarana</label>
                                        <input type="text" id="total" class="input" autocomplete="off"
                                            name="total">
                                        @error('total')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="description">Deskripsi</label>
                                        <textarea id="inputAddPrasarana" autocomplete="off" class="input" name="description"></textarea>
                                        @error('description')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Tambah Prasarana</button>
                                <a href="{{ route('prasarana-index') }}" class="button-default">Batal Tambah</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputAddPrasarana = new RichTextEditor("#inputAddPrasarana");

        const tagAddImage = document.querySelector('.tag-add-image');
        const inputAddImage = document.querySelector('.input-add-image');

        inputAddImage.addEventListener('change', function() {
            tagAddImage.src = URL.createObjectURL(inputAddImage.files[0]);
        });
    </script>
@endsection
