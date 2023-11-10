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
                <h5 class="subtitle">Edit Mars Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('mars-update') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="input-wrapper">
                                        <label for="banner">Banner</label>
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($mars->banner)
                                                <img src="{{ asset('assets/img/profil-images/mars-image/' . $mars->banner) }}"
                                                    class="img-fluid tag-edit-banner" alt="Banner Mars Sekolah"
                                                    width="80">
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
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="input-wrapper">
                                        <label for="music_sound">Music Sound</label>
                                        <div class="wrapper d-flex">
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="music_sound" name="music_sound">
                                            </div>
                                        </div>
                                        @error('music_sound')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_section">Judul Section</label>
                                        <input type="text" id="judul_section" class="input" autocomplete="off"
                                            value="{{ $mars->title_section }}" required name="title_section">
                                        @error('title_section')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pencipta">Pencipta</label>
                                        <input type="text" id="pencipta" class="input" autocomplete="off"
                                            value="{{ $mars->creation }}" required name="creation">
                                        @error('creation')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="mars">Mars</label>
                                        <textarea id="inputEditMars" autocomplete="off" required name="mars">
                                            {{ $mars->mars }}
                                        </textarea>
                                        @error('mars')
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
                                <a href="{{ route('logo-mars-index') }}" class="button-default">Batal Edit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const editorTextEditMars = new RichTextEditor("#inputEditMars");

        const tagEdit = document.querySelector('.tag-edit-banner');
        const inputEdit = document.querySelector('.input-edit-banner');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
