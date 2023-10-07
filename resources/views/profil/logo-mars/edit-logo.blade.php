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
                <h5 class="subtitle">Edit Logo Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('logo-update') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="logo">Logo</label>
                                        <div class="wrapper d-flex justify-content-between align-items-end">
                                            @if ($logo->logo)
                                                <img src="{{ asset('assets/img/brand/' . $logo->logo) }}"
                                                    class="img-fluid tag-edit-logo" alt="Logo Sekolah" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-logo" alt="Image Not Found" width="80">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="logo" class="input-edit-logo" name="logo">
                                            </div>
                                        </div>
                                        @error('logo')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="input-wrapper">
                                    <label for="logo_meaning">Makna Logo</label>
                                    <textarea id="inputDetailLogo" autocomplete="off" class="input" required name="logo_meaning">{{ $logo->logo_meaning }}</textarea>
                                </div>
                                @error('logo_meaning')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 mb-4">
                                <div class="input-wrapper">
                                    <label for="font_meaning">Makna Font</label>
                                    <textarea id="inputDetailFont" autocomplete="off" class="input" required name="font_meaning">{{ $logo->font_meaning }}</textarea>
                                </div>
                                @error('font_meaning')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="input-wrapper">
                                    <label for="color_meaning">Makna Warna</label>
                                    <textarea id="inputDetailColor" autocomplete="off" class="input" required name="color_meaning">{{ $logo->color_meaning }}</textarea>
                                </div>
                                @error('color_meaning')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
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
        const editorTextDetailLogo = new RichTextEditor("#inputDetailLogo");
        const editorTextDetailFont = new RichTextEditor("#inputDetailFont");
        const editorTextDetailColor = new RichTextEditor("#inputDetailColor");

        const tagEdit = document.querySelector('.tag-edit-logo');
        const inputEdit = document.querySelector('.input-edit-logo');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
