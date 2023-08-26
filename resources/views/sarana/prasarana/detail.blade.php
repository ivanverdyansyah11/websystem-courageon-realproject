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
                <h5 class="subtitle">Detail Proyek 5P Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form class="form d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Image</label>
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($prasarana->image)
                                                <img src="{{ asset('assets/img/sarana-prasarana-images/sarana-prasarana-image/' . $prasarana->image) }}"
                                                    class="img-fluid" alt="Prasarana Image" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="nama">Nama Sarana Prasarana</label>
                                        <input type="text" id="nama" class="input" autocomplete="off"
                                            value="{{ $prasarana->name }}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="total">Total Sarana Prasarana</label>
                                        <input type="text" id="total" class="input" autocomplete="off"
                                            value="{{ $prasarana->total }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="description">Deskripsi</label>
                                        <textarea id="inputEditPrasarana" autocomplete="off" class="input">{{ $prasarana->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('prasarana-index') }}" class="button-default-solid">Kembali ke Halaman</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputEditPrasarana = new RichTextEditor("#inputEditPrasarana");
    </script>
@endsection
