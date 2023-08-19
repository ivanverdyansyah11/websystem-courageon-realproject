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
                <h5 class="subtitle">Section Prasarana</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul Section</div>
                            <div class="d-none d-md-inline-block col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center justify-content-between">
                            <div class="col data-value data-length">{{ $section->title_section }}</div>
                            <div class="d-none d-md-inline-block col data-value data-length">{{ $section->description }}
                            </div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionPrasaranaModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionPrasaranaModal">
                                        <div class="edit-icon"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Kontak Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addPrasaranaModal">Tambah
                    Kontak</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-lg-inline-block col-2 data-header">Icon</div>
                            <div class="col data-header">Nama</div>
                            <div class="col data-header">Link</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($contacts->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Guru!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($contacts as $contact)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center justify-content-between">
                                    <div class="d-none d-lg-inline-block col-2 data-value">
                                        @if ($contact->icon)
                                            <img src="{{ asset('assets/img/profil-images/kontak-image/' . $contact->icon) }}"
                                                class="img-fluid" alt="Contact Icon" width="40">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value">{{ $contact->name }}</div>
                                    <div class="col data-value data-length">{{ $contact->link }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailPrasaranaModal"
                                                data-id="{{ $contact->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editPrasaranaModal"
                                                data-id="{{ $contact->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deletePrasaranaModal"
                                                data-id="{{ $contact->id }}">
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
        </div> --}}
    </div>

    {{-- MODAL DETAIL SECTION PRASARANA --}}
    <div class="modal fade" id="detailSectionPrasaranaModal" tabindex="-1"
        aria-labelledby="detailSectionPrasaranaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Prasarana</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_header"
                            disabled>
                        <div class="input-wrapper">
                            <label for="button">Button Label</label>
                            <input type="text" id="button" class="input" autocomplete="off"
                                data-value="button_header" disabled>
                        </div>
                        <div class="input-wrapper">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="input" autocomplete="off" rows="4" data-value="description_header" disabled></textarea>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION PRASARANA --}}

    {{-- MODAL EDIT SECTION PRASARANA --}}
    <div class="modal fade" id="editSectionHeaderModal" tabindex="-1" aria-labelledby="editSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Header</h3>
                <form id="editSectionHeader" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <input type="hidden" name="oldImage" data-value="oldImage_header">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-header" alt="Banner Section Header" width="80"
                                        data-value="banner_header">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="banner" class="input-edit-header" name="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Header</label>
                                <input type="text" id="judul" class="input" name="title_header"
                                    autocomplete="off" data-value="title_header">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button">Button Label</label>
                                <input type="text" id="button" class="input" name="button" autocomplete="off"
                                    data-value="button_header">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="4"
                                    data-value="description_header"></textarea>
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
    {{-- END MODAL EDIT SECTION PRASARANA --}}

    {{-- MODAL ADD CONTACT --}}
    <div class="modal fade" id="addContactModal" tabindex="-1" aria-labelledby="addContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Kontak Sekolah</h3>
                <form action="{{ route('kontak-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="input-wrapper">
                        <label for="icon">Icon</label>
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid tag-add-icon"
                                alt="icon Section Sejarah" width="80">
                            <div class="wrapper-image w-100">
                                <input type="file" id="icon" class="input-add-icon" name="icon">
                            </div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="nama">Judul Kontak</label>
                        <input type="text" id="nama" class="input" autocomplete="off" name="name">
                    </div>
                    <div class="input-wrapper">
                        <label for="link">Link</label>
                        <input type="text" id="link" class="input" autocomplete="off" name="link">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Kontak</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD CONTACT --}}

    {{-- MODAL DETAIL CONTACT --}}
    <div class="modal fade" id="detailContactModal" tabindex="-1" aria-labelledby="detailContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Kontak Sekolah</h3>
                <form id="detailContact" method="post" class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="icon">Icon</label>
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                alt="icon Section Sejarah" width="80" data-value="icon_contact">
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="nama">Judul Kontak</label>
                        <input type="text" id="nama" class="input" autocomplete="off"
                            data-value="name_contact" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="link">Link</label>
                        <input type="text" id="link" class="input" autocomplete="off"
                            data-value="link_contact" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL CONTACT --}}

    {{-- MODAL EDIT CONTACT --}}
    <div class="modal fade" id="editContactModal" tabindex="-1" aria-labelledby="editContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Kontak Sekolah</h3>
                <form id="editContact" method="post" class="form d-flex flex-column justify-content-center"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="input-wrapper">
                        <label for="icon">Icon</label>
                        <div class="wrapper d-flex align-items-end">
                            <input type="hidden" name="oldImage" data-value="oldImage_contact">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid tag-edit-icon"
                                alt="Icon Kontak" width="80" data-value="icon_contact">
                            <div class="wrapper-image w-100">
                                <input type="file" id="icon" class="input-edit-icon" name="icon">
                            </div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="nama">Judul Kontak</label>
                        <input type="text" id="nama" class="input" autocomplete="off"
                            data-value="name_contact" name="name">
                    </div>
                    <div class="input-wrapper">
                        <label for="link">Link</label>
                        <input type="text" id="link" class="input" autocomplete="off"
                            data-value="link_contact" name="link">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT CONTACT --}}

    {{-- MODAL DELETE CONTACT --}}
    <div class="modal fade" id="deleteContactModal" tabindex="-1" aria-labelledby="deleteContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Kontak Sekolah</h3>
                <form id="deleteContact" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Kontak Sekolah: Apakah Anda yakin ingin
                        menghapus kontak sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan kontak sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Kontak</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE CONTACT --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionPrasaranaModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/prasarana/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionPrasaranaModal"]', function() {
            $('#editSectionContact').attr('action', '/admin/sarana-prasarana/prasarana/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/prasarana/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailContactModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/profil/kontak/detail-contact/' + id,
                success: function(data) {
                    $('[data-value="icon_contact"]').attr("src",
                        "/assets/img/profil-images/kontak-image/" + data.icon);
                    $('[data-value="name_contact"]').val(data.name);
                    $('[data-value="link_contact"]').val(data.link);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editContactModal"]', function() {
            let id = $(this).data('id');
            $('#editContact').attr('action', '/admin/profil/kontak/edit-contact/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/profil/kontak/detail-contact/' + id,
                success: function(data) {
                    $('[data-value="icon_contact"]').attr("src",
                        "/assets/img/profil-images/kontak-image/" + data.icon);
                    $('[data-value="oldImage_contact"]').val(data.icon);
                    $('[data-value="name_contact"]').val(data.name);
                    $('[data-value="link_contact"]').val(data.link);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteContactModal"]', function() {
            let id = $(this).data('id');
            $('#deleteContact').attr('action', '/admin/profil/kontak/delete-contact/' + id);
        });

        const tagAddIcon = document.querySelector('.tag-add-icon');
        const inputAddIcon = document.querySelector('.input-add-icon');

        const tagEditIcon = document.querySelector('.tag-edit-icon');
        const inputEditIcon = document.querySelector('.input-edit-icon');

        inputAddIcon.addEventListener('change', function() {
            tagAddIcon.src = URL.createObjectURL(inputAddIcon.files[0]);
        });

        inputEditIcon.addEventListener('change', function() {
            tagEditIcon.src = URL.createObjectURL(inputEditIcon.files[0]);
        });
    </script>
@endsection
