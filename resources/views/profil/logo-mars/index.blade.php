@extends('templates.main')

@section('container')
    <div class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif(session()->has('failed'))
                    <div class="alert alert-danger mb-4" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Logo Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col-2 data-header">Logo</div>
                            <div class="d-none d-md-inline-block col data-header">Makna Logo</div>
                            <div class="d-none d-md-inline-block col data-header">Makna Font</div>
                            <div class="d-none d-md-inline-block col data-header">Makna Warna</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center justify-content-between">
                            <div class="col-2 data-value">
                                @if ($logo->logo)
                                    <img src="{{ asset('assets/img/brand/' . $logo->logo) }}" class="img-fluid"
                                        alt="Logo Brand" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="d-none col data-value data-length">{!! $logo->logo_meaning !!}</div>
                            <div class="d-none col data-value data-length">{!! $logo->font_meaning !!}</div>
                            <div class="d-none col data-value data-length">{!! $logo->color_meaning !!}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <a href="{{ route('logo-detail') }}"
                                        class="button-action button-detail d-flex justify-content-center align-items-center">
                                        <div class="detail-icon"></div>
                                    </a>
                                    <a href="{{ route('logo-edit') }}"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                        <div class="edit-icon"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Mars Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul Section</div>
                            <div class="d-none d-md-inline-block col data-header">Mars</div>
                            <div class="col data-header">Ciptaan</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center justify-content-between">
                            <div class="col-2 data-value">
                                @if ($mars->banner)
                                    <img src="{{ asset('assets/img/profil-images/mars-image/' . $mars->banner) }}"
                                        class="img-fluid" alt="Banner Mars" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="d-none col data-value data-length">{{ $mars->title_section }}</div>
                            <div class="d-none col data-value data-length">{!! $mars->mars !!}</div>
                            <div class="d-none col data-value data-length">{{ $mars->creation }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <a href="{{ route('mars-detail') }}"
                                        class="button-action button-detail d-flex justify-content-center align-items-center">
                                        <div class="detail-icon"></div>
                                    </a>
                                    <a href="{{ route('mars-edit') }}"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                        <div class="edit-icon"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL EDIT LOGO --}}
    <div class="modal fade modal-xl" id="editLogoModal" tabindex="-1" aria-labelledby="editLogoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Logo Sekolah</h3>
                <form id="editLogo" method="post" class="form d-flex flex-column justify-content-center"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="logo">Logo</label>
                                <div class="wrapper d-flex justify-content-between align-items-end">
                                    <div class="w-100">
                                        <input type="hidden" name="oldImage" data-value="oldImage_logo">
                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                            class="img-fluid tag-edit-logo" alt="Logo" width="140"
                                            data-value="logo">
                                    </div>
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="logo" class="input-edit-logo" name="logo">
                                    </div>
                                </div>
                                @error('logo')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="inputEditLogoMeaning">Makna Logo</label>
                                <textarea id="inputEditLogoMeaning" autocomplete="off" name="logo_meaning">
                                    {{ $logo->logo_meaning }}
                                </textarea>
                                @error('logo_meaning')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="inputEditFontMeaning">Makna Font</label>
                                <textarea id="inputEditFontMeaning" autocomplete="off" name="font_meaning">
                                    {{ $logo->font_meaning }}
                                </textarea>
                                @error('font_meaning')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="inputEditColorMeaning">Makna Warna</label>
                                <textarea id="inputEditColorMeaning" autocomplete="off" name="color_meaning">
                                    {{ $logo->color_meaning }}
                                </textarea>
                                @error('color_meaning')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT LOGO --}}

    <script>
        const tagEditLogo = document.querySelector('.tag-edit-logo');
        const inputEditLogo = document.querySelector('.input-edit-logo');

        inputEditLogo.addEventListener('change', function() {
            tagEditLogo.src = URL.createObjectURL(inputEditLogo.files[0]);
        });
    </script>
@endsection
