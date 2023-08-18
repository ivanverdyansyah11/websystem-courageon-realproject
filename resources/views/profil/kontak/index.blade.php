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
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Kontak Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul Section</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center justify-content-between">
                            <div class="d-none col data-value data-length">{{ $section->title_section }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionContactModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionContactModal">
                                        <div class="edit-icon"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL LOGO --}}
    {{-- <div class="modal fade" id="detailSectionContactModal" tabindex="-1" aria-labelledby="detailSectionContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Kontak Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul_section">Judul Section</label>
                        <input type="text" id="judul_section" class="input" autocomplete="off"
                            data-value="title_section" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- END MODAL DETAIL LOGO --}}

    {{-- MODAL EDIT LOGO --}}
    {{-- <div class="modal fade" id="editLogoModal" tabindex="-1" aria-labelledby="editLogoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Logo Sekolah</h3>
                <form id="editLogo" method="post" class="form d-flex flex-column justify-content-center"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="logo">Logo</label>
                                <div class="wrapper d-flex flex-column">
                                    <input type="hidden" name="oldImage" data-value="oldImage_logo">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-logo" alt="Logo" width="140" data-value="logo">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="logo" class="input-edit-logo" name="logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="inputEditLogoMeaning">Makna Logo</label>
                                <textarea id="inputEditLogoMeaning" autocomplete="off" name="logo_meaning">
                                    {{ $logo->logo_meaning }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="inputEditFontMeaning">Makna Font</label>
                                <textarea id="inputEditFontMeaning" autocomplete="off" name="font_meaning">
                                    {{ $logo->font_meaning }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="inputEditColorMeaning">Makna Warna</label>
                                <textarea id="inputEditColorMeaning" autocomplete="off" name="color_meaning">
                                    {{ $logo->color_meaning }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- END MODAL EDIT LOGO --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailLogoModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/logo-mars/edit-logo',
                success: function(data) {
                    $('[data-value="logo"]').attr("src", "/assets/img/brand/" + data.logo);
                    $('[data-value="logo_meaning"]').val(data.logo_meaning);
                    $('[data-value="font_meaning"]').val(data.font_meaning);
                    $('[data-value="color_meaning"]').val(data.color_meaning);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editLogoModal"]', function() {
            $('#editLogo').attr('action', '/admin/profil/logo-mars/edit-logo');
            $.ajax({
                type: 'get',
                url: '/admin/profil/logo-mars/edit-logo',
                success: function(data) {
                    $('[data-value="logo"]').attr("src", "/assets/img/brand/" + data.logo);
                    $('[data-value="oldImage_logo"]').val(data.logo);
                }
            });
        });

        const tagEditBanner = document.querySelector('.tag-edit-banner');
        const inputEditBanner = document.querySelector('.input-edit-banner');

        inputEditBanner.addEventListener('change', function() {
            tagEditBanner.src = URL.createObjectURL(inputEditBanner.files[0]);
        });
    </script>
@endsection
