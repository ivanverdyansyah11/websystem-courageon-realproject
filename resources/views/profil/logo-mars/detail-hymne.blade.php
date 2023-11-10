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
                <h5 class="subtitle">Detail Hymne Sekolah</h5>
            </div>
            <div class="col-12">
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="input-wrapper">
                                        <label>Banner</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            @if ($hymne->banner)
                                                <img src="{{ asset('assets/img/profil-images/hymne-image/' . $hymne->banner) }}"
                                                    class="img-fluid" alt="Banner Hymne Sekolah" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="input-wrapper">
                                        <label>Music Sound</label>
                                        @if ($hymne->music_sound)
                                            <audio controls>
                                                <source
                                                    src="{{ asset('assets/img/profil-images/hymne-image/' . $hymne->music_sound) }}"
                                                    type="audio/mpeg">
                                            </audio>
                                        @else
                                            <p class="mb-3">Sound tidak ditemukan!</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_section">Judul Section</label>
                                        <input type="text" id="judul_section" class="input" autocomplete="off"
                                            value="{{ $hymne->title_section }}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pencipta">Pencipta</label>
                                        <input type="text" id="pencipta" class="input" autocomplete="off"
                                            value="{{ $hymne->creation }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="hymne">Hymne</label>
                                        <textarea id="inputDetailHymne" autocomplete="off" class="input">{{ $hymne->hymne }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('logo-mars-index') }}" class="button-default-solid">Kembali ke Halaman</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const editorTextDetailMars = new RichTextEditor("#inputDetailHymne");
    </script>
@endsection
