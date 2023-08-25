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
                <h5 class="subtitle">Edit Proyek 5P Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('proyek-update', $project->id) }}" method="post"
                            enctype="multipart/form-data" class="form d-flex flex-column justify-content-center">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Image</label>
                                        <input type="hidden" name="oldImage" value="{{ $project->image }}">
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($project->image)
                                                <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $project->image) }}"
                                                    class="img-fluid tag-edit-image" alt="Image Project" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-image" alt="Image Not Found" width="80">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="image" class="input-edit-image"
                                                    name="image">
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
                                        <input type="text" id="judul" class="input" name="title"
                                            value="{{ $project->title }}" autocomplete="off">
                                        @error('title')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="topik">Topik</label>
                                        <input type="text" id="topik" class="input" name="topic"
                                            value="{{ $project->topic }}" autocomplete="off">
                                        @error('topic')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputEditProject" autocomplete="off" class="input" name="description">{{ $project->description }}</textarea>
                                        @error('description')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('proyek-index') }}" class="button-default">Batal
                                    Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputEditProject = new RichTextEditor("#inputEditProject");

        const tagEdit = document.querySelector('.tag-edit-image');
        const inputEdit = document.querySelector('.input-edit-image');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
