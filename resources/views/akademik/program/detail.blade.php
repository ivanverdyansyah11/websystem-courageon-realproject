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
                <h5 class="subtitle">Detail Program Sekolah</h5>
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
                                            <img src="{{ asset('assets/img/akademik-images/program-image/' . $program->banner) }}"
                                                class="img-fluid" alt="Banner Program" width="80">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul Program</label>
                                        <input type="text" id="judul" class="input" value="{{ $program->title }}"
                                            disabled autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="button">Button Label</label>
                                        <input type="text" id="button" class="input" value="{{ $program->button }}"
                                            disabled autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="link">Link</label>
                                        <input type="text" id="link" class="input" value="{{ $program->link }}"
                                            disabled autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputDetailProgram" autocomplete="off" class="input">{{ $program->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-10">
                                    <div class="button-wrapper d-flex gap-2">
                                        <a href="{{ route('program-index') }}" class="button-default-solid">Kembali ke
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
        const inputDetailProgram = new RichTextEditor("#inputDetailProgram");
    </script>
@endsection
