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
                <h5 class="subtitle">Section Program</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_program->title_section }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionProgramModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionProgramModal">
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
                <h5 class="subtitle">Program Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addProgramModal">Tambah
                    Program</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Program</span></div>
                            <div class="d-none col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($programs->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Program!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($programs as $program)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="d-none d-md-inline-block col-2 data-value">
                                        @if ($program->banner)
                                            <img src="{{ asset('assets/img/akademik-images/program-image/' . $program->banner) }}"
                                                class="img-fluid" alt="Banner Section Header" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value data-length">{{ $program->title }}</div>
                                    <div class="d-none col data-value data-length">
                                        {{ $program->description }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailProgramModal"
                                                data-id="{{ $program->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editProgramModal"
                                                data-id="{{ $program->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteProgramModal"
                                                data-id="{{ $program->id }}">
                                                <div class="delete-icon"></div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION PROGRAM --}}
    <div class="modal fade" id="detailSectionProgramModal" tabindex="-1" aria-labelledby="detailSectionProgramModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Program</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION PROGRAM --}}

    {{-- MODAL EDIT SECTION PROGRAM --}}
    <div class="modal fade" id="editSectionProgramModal" tabindex="-1" aria-labelledby="editSectionProgramModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Program</h3>
                <form id="editSectionProgram" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" name="title_section" autocomplete="off"
                            data-value="title_section">
                        @error('title_section')
                            <p class="caption-error mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT SECTION PROGRAM --}}

    {{-- MODAL ADD PROGRAM --}}
    <div class="modal fade" id="addProgramModal" tabindex="-1" aria-labelledby="addProgramModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Program Sekolah</h3>
                <form action="{{ route('program-store') }}" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-add-banner" alt="Banner Program" width="80">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="banner" class="input-add-banner" name="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Program</label>
                                <input type="text" id="judul" class="input" name="title" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button">Button Label</label>
                                <input type="text" id="button" class="input" name="button" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="link">Link</label>
                                <input type="text" id="link" class="input" name="link" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Program</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD PROGRAM --}}

    {{-- MODAL DETAIL PROGRAM --}}
    <div class="modal fade" id="detailProgramModal" tabindex="-1" aria-labelledby="detailProgramModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Program Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Banner Program" width="80" data-value="banner_program">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Program</label>
                                <input type="text" id="judul" class="input" data-value="title_program" disabled
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button">Button Label</label>
                                <input type="text" id="button" class="input" data-value="button_program" disabled
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="link">Link</label>
                                <input type="text" id="link" class="input" data-value="link_program" disabled
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="input" data-value="description_program" disabled autocomplete="off"
                                    rows="4"></textarea>
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
    {{-- END MODAL DETAIL PROGRAM --}}

    {{-- MODAL EDIT PROGRAM --}}
    <div class="modal fade" id="editProgramModal" tabindex="-1" aria-labelledby="editProgramModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Program Sekolah</h3>
                <form id="editProgram" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <input type="hidden" data-value="oldImage_program" name="oldImage">
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-banner" alt="Banner Program" width="80"
                                        data-value="banner_program">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="banner" class="input-edit-banner" name="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Program</label>
                                <input type="text" id="judul" class="input" data-value="title_program"
                                    name="title" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button">Button Label</label>
                                <input type="text" id="button" class="input" data-value="button_program"
                                    name="button" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="link">Link</label>
                                <input type="text" id="link" class="input" data-value="link_program"
                                    name="link" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="input" data-value="description_program" name="description" autocomplete="off"
                                    rows="4"></textarea>
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
    {{-- END MODAL EDIT PROGRAM --}}

    {{-- MODAL DELETE PROGRAM --}}
    <div class="modal fade" id="deleteProgramModal" tabindex="-1" aria-labelledby="deleteProgramModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Program Sekolah</h3>
                <form id="deleteProgram" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Program Sekolah: Apakah Anda yakin ingin
                        menghapus program sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan program sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Program</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE PROGRAM --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionProgramModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/akademik/program/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionProgramModal"]', function() {
            $('#editSectionProgram').attr('action', '/admin/akademik/program/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/program/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailProgramModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/program/detail-program/' + id,
                success: function(data) {
                    $('[data-value="banner_program"]').attr("src",
                        "/assets/img/akademik-images/program-image/" + data.banner);
                    $('[data-value="title_program"]').val(data.title);
                    $('[data-value="button_program"]').val(data.button);
                    $('[data-value="link_program"]').val(data.link);
                    $('[data-value="description_program"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editProgramModal"]', function() {
            let id = $(this).data('id');
            $('#editProgram').attr('action', '/admin/akademik/program/edit-program/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/akademik/program/detail-program/' + id,
                success: function(data) {
                    $('[data-value="banner_program"]').attr("src",
                        "/assets/img/akademik-images/program-image/" + data.banner);
                    $('[data-value="oldImage_program"]').val(data.banner);
                    $('[data-value="title_program"]').val(data.title);
                    $('[data-value="button_program"]').val(data.button);
                    $('[data-value="link_program"]').val(data.link);
                    $('[data-value="description_program"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteProgramModal"]', function() {
            let id = $(this).data('id');
            $('#deleteProgram').attr('action', '/admin/akademik/program/delete-program/' + id);
        });

        const tagAddBanner = document.querySelector('.tag-add-banner');
        const inputAddBanner = document.querySelector('.input-add-banner');
        const tagEditBanner = document.querySelector('.tag-edit-banner');
        const inputEditBanner = document.querySelector('.input-edit-banner');

        inputAddBanner.addEventListener('change', function() {
            tagAddBanner.src = URL.createObjectURL(inputAddBanner.files[0]);
        });

        inputEditBanner.addEventListener('change', function() {
            tagEditBanner.src = URL.createObjectURL(inputEditBanner.files[0]);
        });
    </script>
@endsection
