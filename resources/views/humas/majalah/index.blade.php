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
                <h5 class="subtitle">Section Header</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Header</span></div>
                            <div class="col data-header">Button</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_header->title_header }}</div>
                            <div class="col data-value data-length">
                                {{ $section_header->button }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionHeaderModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionHeaderModal">
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
                <h5 class="subtitle">Majalah Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addJournalModal">Tambah
                    Majalah</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col data-header col-2">Thumbnail</span></div>
                            <div class="col data-header">Judul</div>
                            <div class="col data-header">Tanggal Dibuat</div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($journals->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Majalah!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($journals as $journal)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="d-none d-md-inline-block col-2 data-value">
                                        @if ($journal->thumbnail)
                                            <img src="{{ asset('assets/img/humas-images/majalah-image/' . $journal->thumbnail) }}"
                                                class="img-fluid" alt="Thumbnail Journal" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value data-length">{{ $journal->title }}</div>
                                    <div class="col data-value data-length">{{ $journal->created_date }}</div>
                                    <div class="col data-value data-length">{{ $journal->description }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailJournalModal"
                                                data-id="{{ $journal->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editJournalModal"
                                                data-id="{{ $journal->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteJournalModal"
                                                data-id="{{ $journal->id }}">
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

    {{-- MODAL DETAIL SECTION HEADER --}}
    <div class="modal fade" id="detailSectionHeaderModal" tabindex="-1" aria-labelledby="detailSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Header</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_header"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_header" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION HEADER --}}

    {{-- MODAL EDIT SECTION HEADER --}}
    <div class="modal fade" id="editSectionHeaderModal" tabindex="-1" aria-labelledby="editSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Header</h3>
                <form id="editSectionHeader" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_header" name="title_header">
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_header" name="button">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT SECTION HEADER --}}

    {{-- MODAL ADD PARTNERSHIP --}}
    {{-- <div class="modal fade" id="addPartnershipModal" tabindex="-1" aria-labelledby="addPartnershipModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Kemitraan Sekolah</h3>
                <form action="{{ route('kemitraan-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="input-wrapper">
                        <label for="logo">Logo</label>
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid tag-add-logo"
                                alt="Logo Partnership" width="80">
                            <div class="wrapper-image w-100">
                                <input type="file" id="logo" class="input-add-logo" name="logo">
                            </div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Nama</label>
                        <input type="text" id="name" class="input" autocomplete="off" name="name">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Kemitraan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- END MODAL ADD PARTNERSHIP --}}

    {{-- MODAL DETAIL PARTNERSHIP --}}
    {{-- <div class="modal fade" id="detailPartnershipModal" tabindex="-1" aria-labelledby="detailPartnershipModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Kemitraan Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="logo">Logo</label>
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                alt="Logo Partnership" width="80" data-value="logo_partnership">
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Nama</label>
                        <input type="text" id="name" class="input" autocomplete="off"
                            data-value="name_partnership" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- END MODAL DETAIL PARTNERSHIP --}}

    {{-- MODAL EDIT PARTNERSHIP --}}
    {{-- <div class="modal fade" id="editPartnershipModal" tabindex="-1" aria-labelledby="editPartnershipModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Kemitraan Sekolah</h3>
                <form id="editPartnership" method="post" class="form d-flex flex-column justify-content-center"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="input-wrapper">
                        <label for="logo">logo</label>
                        <div class="wrapper d-flex align-items-end">
                            <input type="hidden" name="oldImage" data-value="oldImage_partnership">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid tag-edit-logo"
                                alt="Logo Kemitraan" width="80" data-value="logo_partnership">
                            <div class="wrapper-image w-100">
                                <input type="file" id="logo" class="input-edit-logo" name="logo">
                            </div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="name">Nama</label>
                        <input type="text" id="name" class="input" autocomplete="off"
                            data-value="name_partnership" name="name">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- END MODAL EDIT PARTNERSHIP --}}

    {{-- MODAL DELETE PARTNERSHIP --}}
    {{-- <div class="modal fade" id="deletePartnershipModal" tabindex="-1" aria-labelledby="deletePartnershipModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Kemitraan Sekolah</h3>
                <form id="deletePartnership" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Kemitraan Sekolah: Apakah Anda yakin ingin
                        menghapus kemitraan sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan kemitraan sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Kemitraan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- END MODAL DELETE PARTNERSHIP --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionHeaderModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/humas/majalah/detail-header',
                success: function(data) {
                    $('[data-value="title_header"]').val(data.title_header);
                    $('[data-value="button_header"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionHeaderModal"]', function() {
            $('#editSectionHeader').attr('action', '/admin/humas/majalah/edit-header');
            $.ajax({
                type: 'get',
                url: '/admin/humas/majalah/detail-header',
                success: function(data) {
                    $('[data-value="title_header"]').val(data.title_header);
                    $('[data-value="button_header"]').val(data.button);
                }
            });
        });

        // $(document).on('click', '[data-bs-target="#detailPartnershipModal"]', function() {
        //     let id = $(this).data('id');
        //     $.ajax({
        //         type: 'get',
        //         url: '/admin/humas/kemitraan/detail-kemitraan/' + id,
        //         success: function(data) {
        //             $('[data-value="logo_partnership"]').attr("src",
        //                 "/assets/img/humas-images/kemitraan-image/" + data.logo);
        //             $('[data-value="name_partnership"]').val(data.name);
        //         }
        //     });
        // });

        // $(document).on('click', '[data-bs-target="#editPartnershipModal"]', function() {
        //     let id = $(this).data('id');
        //     $('#editPartnership').attr('action', '/admin/humas/kemitraan/edit-kemitraan/' + id);
        //     $.ajax({
        //         type: 'get',
        //         url: '/admin/humas/kemitraan/detail-kemitraan/' + id,
        //         success: function(data) {
        //             $('[data-value="logo_partnership"]').attr("src",
        //                 "/assets/img/humas-images/kemitraan-image/" + data.logo);
        //             $('[data-value="oldImage_partnership"]').val(data.logo);
        //             $('[data-value="name_partnership"]').val(data.name);
        //         }
        //     });
        // });

        // $(document).on('click', '[data-bs-target="#deletePartnershipModal"]', function() {
        //     let id = $(this).data('id');
        //     $('#deletePartnership').attr('action', '/admin/humas/kemitraan/delete-kemitraan/' + id);
        // });

        const tagAddLogo = document.querySelector('.tag-add-logo');
        const inputAddLogo = document.querySelector('.input-add-logo');
        const tagEditLogo = document.querySelector('.tag-edit-logo');
        const inputEditLogo = document.querySelector('.input-edit-logo');

        inputAddLogo.addEventListener('change', function() {
            tagAddLogo.src = URL.createObjectURL(inputAddLogo.files[0]);
        });

        inputEditLogo.addEventListener('change', function() {
            tagEditLogo.src = URL.createObjectURL(inputEditLogo.files[0]);
        });
    </script>
@endsection
