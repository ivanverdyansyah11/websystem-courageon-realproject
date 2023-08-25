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
                <h5 class="subtitle">Detail Visi & Misi Sekolah</h5>
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
                                            @if ($vision_mission->banner)
                                                <img src="{{ asset('assets/img/profil-images/visi-misi-image/' . $vision_mission->banner) }}"
                                                    class="img-fluid tag-edit-banner" alt="Banner Visi Misi" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-banner" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_visi">Judul Visi</label>
                                        <input type="text" id="judul_visi" class="input" autocomplete="off"
                                            value="{{ $vision_mission->title_vision }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul_misi">Judul Misi</label>
                                        <input type="text" id="judul_misi" class="input" autocomplete="off"
                                            value="{{ $vision_mission->title_mission }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="deskripsi_visi">Deskripsi Visi</label>
                                        <textarea id="inputDetailVision" autocomplete="off" class="input">{{ $vision_mission->description_vision }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi_misi">Deskripsi Misi</label>
                                        <textarea id="inputDetailMission" autocomplete="off" class="input">{{ $vision_mission->description_mission }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="button-wrapper d-flex gap-2">
                                        <a href="{{ route('visi-misi-index') }}" class="button-default-solid">Kembali ke
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
        const inputDetailVision = new RichTextEditor("#inputDetailVision");
        const inputDetailMission = new RichTextEditor("#inputDetailMission");
    </script>
@endsection
