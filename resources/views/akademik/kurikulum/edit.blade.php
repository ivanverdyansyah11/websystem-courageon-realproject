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
                <h5 class="subtitle">Edit Kurikulum Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('section-update') }}" method="post"
                            class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="banner">Banner</label>
                                        <input type="hidden" value="{{ $curriculum->banner }}" name="oldImage">
                                        <div class="wrapper d-flex justify-content-between align-items-end">
                                            @if ($curriculum->banner)
                                                <img src="{{ asset('assets/img/akademik-images/kurikulum-image/' . $curriculum->banner) }}"
                                                    class="img-fluid tag-edit-banner" alt="Banner Kurikulum" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-banner" alt="Image Not Found" width="80">
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
                                        <label for="judul_section">Judul Section</label>
                                        <input type="text" id="judul_section" class="input" autocomplete="off"
                                            value="{{ $curriculum->title_section }}" required name="title_section">
                                        @error('title_section')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi_kurikulum">Deskripsi Kurikulum</label>
                                        <textarea id="inputEditCurriculum" autocomplete="off" required name="description" class="input">{{ $curriculum->description }}</textarea>
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
                                        <a href="{{ route('kurikulum-index') }}" class="button-default">Batal Edit</a>
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
        const inputEditCurriculum = new RichTextEditor("#inputEditCurriculum");

        const tagEdit = document.querySelector('.tag-edit-banner');
        const inputEdit = document.querySelector('.input-edit-banner');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
