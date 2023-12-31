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
                <h5 class="subtitle">Detail Kurikulum Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form class="form d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label>Banner</label>
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($curriculum->banner)
                                                <img src="{{ asset('assets/img/akademik-images/kurikulum-image/' . $curriculum->banner) }}"
                                                    class="img-fluid" alt="Banner Kurikulum" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-notfound" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_section">Judul Section</label>
                                        <input type="text" id="judul_section" class="input" autocomplete="off"
                                            value="{{ $curriculum->title_section }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi_kurikulum">Deskripsi Kurikulum</label>
                                        <textarea id="inputDetailCurriculum" autocomplete="off" class="input">{{ $curriculum->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="button-wrapper d-flex gap-2">
                                        <a href="{{ route('kurikulum-index') }}" class="button-default-solid">Kembali ke
                                            Halaman</a>
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
        const inputDetailCurriculum = new RichTextEditor("#inputDetailCurriculum");
    </script>
@endsection
