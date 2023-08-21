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
                <h5 class="subtitle">Detail Logo Sekolah</h5>
            </div>
            <div class="col-12">
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-10">
                            <div class="row align-items-end">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label>Logo</label>
                                        <div class="wrapper d-flex gap-3 align-items-end">
                                            @if ($logo->logo)
                                                <img src="{{ asset('assets/img/brand/' . $logo->logo) }}" class="img-fluid"
                                                    alt="Logo Sekolah" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="logo_meaning">Makna Logo</label>
                                        <textarea id="inputDetailLogo" autocomplete="off" class="input">{{ $logo->logo_meaning }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="font_meaning">Makna Font</label>
                                        <textarea id="inputDetailFont" autocomplete="off" class="input">{{ $logo->font_meaning }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="color_meaning">Makna Warna</label>
                                        <textarea id="inputDetailColor" autocomplete="off" class="input">{{ $logo->color_meaning }}</textarea>
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
        const editorTextDetailLogo = new RichTextEditor("#inputDetailLogo");
        const editorTextDetailFont = new RichTextEditor("#inputDetailFont");
        const editorTextDetailColor = new RichTextEditor("#inputDetailColor");
    </script>
@endsection
