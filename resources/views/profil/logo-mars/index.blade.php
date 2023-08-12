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
                                    <img src="{{ asset('storage/' . $logo->logo) }}" class="img-fluid" alt="Logo Brand"
                                        width="140">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="d-none col data-value data-length">{{ $logo->logo_meaning }}</div>
                            <div class="d-none col data-value data-length">{{ $logo->font_meaning }}</div>
                            <div class="d-none col data-value data-length">{{ $logo->color_meaning }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailLogoModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editLogoModal">
                                        <div class="edit-icon"></div>
                                    </button>
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
                                    <img src="{{ asset('storage/' . $mars->banner) }}" class="img-fluid" alt="Banner Mars"
                                        width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="d-none col data-value data-length">{{ $mars->title_section }}</div>
                            <div class="d-none col data-value data-length">{{ $mars->mars }}</div>
                            <div class="d-none col data-value data-length">{{ $mars->creation }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailMarsModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editMarsModal">
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
    <div class="modal fade" id="detailLogoModal" tabindex="-1" aria-labelledby="detailLogoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Logo Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="logo">Logo</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Logo Brand" width="140" data-value="logo">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="makna_logo">Makna Logo</label>
                                <textarea id="makna_logo" class="input" autocomplete="off" rows="3" data-value="logo_meaning" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="makna_font">Makna Font</label>
                                <textarea id="makna_font" class="input" autocomplete="off" rows="3" data-value="font_meaning" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="makna_warna">Makna Warna</label>
                                <textarea id="makna_warna" class="input" autocomplete="off" rows="3" data-value="color_meaning" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL LOGO --}}

    {{-- MODAL EDIT LOGO --}}
    <div class="modal fade" id="editLogoModal" tabindex="-1" aria-labelledby="editLogoModalLabel" aria-hidden="true">
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
                                <label for="makna_logo">Makna Logo</label>
                                <textarea id="makna_logo" class="input" autocomplete="off" rows="3" data-value="logo_meaning"
                                    name="logo_meaning"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="makna_font">Makna Font</label>
                                <textarea id="makna_font" class="input" autocomplete="off" rows="3" data-value="font_meaning"
                                    name="font_meaning"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="makna_warna">Makna Warna</label>
                                <textarea id="makna_warna" class="input" autocomplete="off" rows="3" data-value="color_meaning"
                                    name="color_meaning"></textarea>
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
    </div>
    {{-- END MODAL EDIT LOGO --}}

    {{-- MODAL DETAIL MARS --}}
    <div class="modal fade" id="detailMarsModal" tabindex="-1" aria-labelledby="detailMarsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Mars Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Banner Mars Sekolah" width="80" data-value="banner">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul_section">Judul Section</label>
                                <input type="text" id="judul_section" class="input" autocomplete="off"
                                    data-value="title_section" disabled>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="input-wrapper">
                                <label for="pencipta">Pencipta</label>
                                <input type="text" id="pencipta" class="input" autocomplete="off"
                                    data-value="creation" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="mars">Mars</label>
                                {{-- <textarea id="inp_editor1" class="w-100">
                                    &lt;p&gt;Initial Document Content&lt;/p&gt; 
                                   </textarea> --}}
                                <textarea id="mars" rows="3" class="input" autocomplete="off" data-value="mars" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL MARS --}}

    {{-- MODAL EDIT MARS --}}
    <div class="modal fade" id="editMarsModal" tabindex="-1" aria-labelledby="editMarsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Mars Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <input type="hidden" name="oldImage" data-value="oldImage_mars">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-mars" alt="Banner Visi Misi" width="80"
                                        data-value="banner">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="banner" class="input-edit-mars" name="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul_section">Judul Section</label>
                                <input type="text" id="judul_section" class="input" autocomplete="off"
                                    data-value="title_section" disabled>
                            </div>
                        </div>
                        <div class="col-6 mb-4">
                            <div class="input-wrapper">
                                <label for="pencipta">Pencipta</label>
                                <input type="text" id="pencipta" class="input" autocomplete="off"
                                    data-value="creation" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="mars">Mars</label>
                                {{-- <textarea id="inp_editor1" class="w-100">
                                    &lt;p&gt;Initial Document Content&lt;/p&gt; 
                                   </textarea> --}}
                                <textarea id="mars" rows="3" class="input" autocomplete="off" data-value="mars" disabled></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT MARS --}}

    <script>
        const editor1 = new RichTextEditor("#inp_editor1");

        $(document).on('click', '[data-bs-target="#detailLogoModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/logo-mars/edit-logo',
                success: function(data) {
                    $('[data-value="logo"]').attr("src", "/storage/" + data.logo);
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
                    $('[data-value="logo"]').attr("src", "/storage/" + data.logo);
                    $('[data-value="oldImage_logo"]').val(data.logo);
                    $('[data-value="logo_meaning"]').val(data.logo_meaning);
                    $('[data-value="font_meaning"]').val(data.font_meaning);
                    $('[data-value="color_meaning"]').val(data.color_meaning);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailMarsModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/logo-mars/edit-mars',
                success: function(data) {
                    $('[data-value="banner"]').attr("src", "/storage/" + data.banner);
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="mars"]').val(data.mars);
                    $('[data-value="creation"]').val(data.creation);
                }
            });
        });

        // $(document).on('click', '[data-bs-target="#editLogoModal"]', function() {
        //     $('#editLogo').attr('action', '/admin/profil/logo-mars/edit-logo');
        //     $.ajax({
        //         type: 'get',
        //         url: '/admin/profil/logo-mars/edit-logo',
        //         success: function(data) {
        //             $('[data-value="logo"]').attr("src", "/storage/" + data.logo);
        //             $('[data-value="oldImage_logo"]').val(data.logo);
        //             $('[data-value="logo_meaning"]').val(data.logo_meaning);
        //             $('[data-value="font_meaning"]').val(data.font_meaning);
        //             $('[data-value="color_meaning"]').val(data.color_meaning);
        //         }
        //     });
        // });

        const tagEditLogo = document.querySelector('.tag-edit-logo');
        const inputEditLogo = document.querySelector('.input-edit-logo');

        inputEditLogo.addEventListener('change', function() {
            tagEditLogo.src = URL.createObjectURL(inputEditLogo.files[0]);
        });
    </script>
@endsection
