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
                <h5 class="subtitle">Edit Program Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('program-update', $program->id) }}" method="post"
                            class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="banner">Banner</label>
                                        <input type="hidden" value="{{ $program->banner }}" name="oldImage">
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($program->banner)
                                                <img src="{{ asset('assets/img/akademik-images/program-image/' . $program->banner) }}"
                                                    class="img-fluid tag-edit-banner" alt="Banner Program" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-notfound tag-edit-banner" alt="Image Not Found"
                                                    width="80">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="banner" class="input-edit-banner"
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
                                        <label for="judul">Judul Program</label>
                                        <input type="text" id="judul" class="input" value="{{ $program->title }}"
                                            required name="title" autocomplete="off">
                                        @error('title')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="button">Button Label</label>
                                        <input type="text" id="button" class="input" value="{{ $program->button }}"
                                            required name="button" autocomplete="off">
                                        @error('button')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="link">Link</label>
                                        <input type="text" id="link" class="input" value="{{ $program->link }}"
                                            required name="link" autocomplete="off">
                                        @error('link')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputEditProgram" required name="description" class="input">{{ $program->description }}</textarea>
                                        @error('description')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="button-wrapper d-flex gap-2">
                                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                        <a href="{{ route('program-index') }}" class="button-default">Batal Edit</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputEditProgram = new RichTextEditor("#inputEditProgram");

        const tagEdit = document.querySelector('.tag-edit-banner');
        const inputEdit = document.querySelector('.input-edit-banner');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
