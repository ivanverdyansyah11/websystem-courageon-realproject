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
                <h5 class="subtitle">Detail Mars Sekolah</h5>
            </div>
            <div class="col-12">
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label>Banner</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            @if ($mars->banner)
                                                <img src="{{ asset('assets/img/profil-images/mars-image/' . $mars->banner) }}"
                                                    class="img-fluid" alt="Banner Mars Sekolah" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_section">Judul Section</label>
                                        <input type="text" id="judul_section" class="input" autocomplete="off"
                                            value="{{ $mars->title_section }}" disabled>
                                    </div>
                                </div>
                                <div class="col-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pencipta">Pencipta</label>
                                        <input type="text" id="pencipta" class="input" autocomplete="off"
                                            value="{{ $mars->creation }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="mars">Mars</label>
                                        <textarea id="inputDetailMars" autocomplete="off" class="input">{{ $mars->mars }}</textarea>
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
        const editorTextDetailMars = new RichTextEditor("#inputDetailMars");
    </script>
@endsection
