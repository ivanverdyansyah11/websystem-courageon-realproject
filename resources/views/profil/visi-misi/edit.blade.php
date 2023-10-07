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
                <h5 class="subtitle">Edit Visi Misi Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('visi-misi-update') }}" method="post"
                            class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="banner">Banner</label>
                                        <input type="hidden" value="{{ $vision_mission->banner }}" name="oldImage">
                                        <div class="wrapper d-flex justify-content-between align-items-end">
                                            @if ($vision_mission->banner)
                                                <img src="{{ asset('assets/img/profil-images/visi-misi-image/' . $vision_mission->banner) }}"
                                                    class="img-fluid tag-edit-banner" alt="Banner Visi Misi" width="80">
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
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_visi">Judul Visi</label>
                                        <input type="text" id="judul_visi" class="input" autocomplete="off"
                                            value="{{ $vision_mission->title_vision }}" name="title_vision" required>
                                        @error('title_vision')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_misi">Judul Misi</label>
                                        <input type="text" id="judul_misi" class="input" autocomplete="off"
                                            value="{{ $vision_mission->title_mission }}" name="title_mission" required>
                                        @error('title_mission')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi_visi">Deskripsi Visi</label>
                                        <textarea id="inputEditVision" name="description_vision" class="input" required>{{ $vision_mission->description_vision }}</textarea>
                                        @error('description_vision')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi_misi">Deskripsi Misi</label>
                                        <textarea id="inputEditMission" name="description_mission" class="input" required>{{ $vision_mission->description_mission }}</textarea>
                                        @error('description_mission')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="button-wrapper d-flex gap-2">
                                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                        <a href="{{ route('visi-misi-index') }}" class="button-default">Batal Edit</a>
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
        const inputEditVision = new RichTextEditor("#inputEditVision");
        const inputEditMission = new RichTextEditor("#inputEditMission");

        const tagEdit = document.querySelector('.tag-edit-banner');
        const inputEdit = document.querySelector('.input-edit-banner');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
