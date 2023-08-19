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

    {{-- MODAL ADD JOURNAL --}}
    <div class="modal fade" id="addJournalModal" tabindex="-1" aria-labelledby="addJournalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Majalah Sekolah</h3>
                <form action="{{ route('majalah-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-add-thumbnail" alt="Thumbnail Journal" width="80">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="thumbnail" class="input-add-thumbnail"
                                            name="thumbnail">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="document_pdf">Document PDF</label>
                                <input type="file" id="document_pdf" name="document_pdf">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="title">Judul</label>
                                <input type="text" id="title" class="input" autocomplete="off" name="title">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="penulis">Penulis</label>
                                <input type="text" id="penulis" class="input" autocomplete="off" name="author">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                <input type="date" id="tanggal_dibuat" class="input" autocomplete="off"
                                    name="created_date">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi Singkat</label>
                                <textarea name="description" id="deskripsi" rows="4" class="input" autocomplete="off"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Majalah</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD JOURNAL --}}

    {{-- MODAL DETAIL JOURNAL --}}
    <div class="modal fade" id="detailJournalModal" tabindex="-1" aria-labelledby="detailJournalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Journal Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row align-items-end">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Thumbnail Journal" width="80" data-value="thumbnail_journal">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="document_pdf">Document PDF</label>
                                <input type="text" id="document_pdf" class="input" autocomplete="off"
                                    data-value="document_journal" disabled>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="title">Judul</label>
                                <input type="text" id="title" class="input" autocomplete="off"
                                    data-value="title_journal" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="penulis">Penulis</label>
                                <input type="text" id="penulis" class="input" autocomplete="off"
                                    data-value="author_journal" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                <input type="date" id="tanggal_dibuat" class="input" autocomplete="off"
                                    data-value="created_journal" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi Singkat</label>
                                <textarea data-value="description_journal" id="deskripsi" rows="4" class="input" autocomplete="off"></textarea>
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
    {{-- END MODAL DETAIL JOURNAL --}}

    {{-- MODAL EDIT JOURNAL --}}
    <div class="modal fade" id="editJournalModal" tabindex="-1" aria-labelledby="editJournalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Journal Sekolah</h3>
                <form id="editJournal" method="post" class="form d-flex flex-column justify-content-center"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="thumbnail">Thumbnail</label>
                                <div class="wrapper d-flex align-items-end">
                                    <input type="hidden" name="oldImage" data-value="oldImage_journal">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-thumbnail" alt="Thumbnail Journal" width="80"
                                        data-value="thumbnail_journal">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="thumbnail" class="input-edit-thumbnail"
                                            name="thumbnail">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="document_pdf">Dokumen PDF</label>
                                <div class="wrapper d-flex align-items-end">
                                    <input type="hidden" name="oldDocument" data-value="oldDocument_journal">
                                    <input type="file" id="document_pdf" name="document_pdf">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="title">Judul</label>
                                <input type="text" id="title" class="input" autocomplete="off"
                                    data-value="title_journal" name="title">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="penulis">Penulis</label>
                                <input type="text" id="penulis" class="input" autocomplete="off"
                                    data-value="author_journal" name="author">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                <input type="date" id="tanggal_dibuat" class="input" autocomplete="off"
                                    data-value="created_journal" name="created_date">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi Singkat</label>
                                <textarea name="description" data-value="description_journal" id="deskripsi" rows="4" class="input"
                                    autocomplete="off"></textarea>
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
    {{-- END MODAL EDIT JOURNAL --}}

    {{-- MODAL DELETE JOURNAL --}}
    <div class="modal fade" id="deleteJournalModal" tabindex="-1" aria-labelledby="deleteJournalModalLabel"
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
    </div>
    {{-- END MODAL DELETE JOURNAL --}}

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

        $(document).on('click', '[data-bs-target="#detailJournalModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/humas/majalah/detail-majalah/' + id,
                success: function(data) {
                    $('[data-value="thumbnail_journal"]').attr("src",
                        "/assets/img/humas-images/majalah-image/" + data.thumbnail);
                    $('[data-value="title_journal"]').val(data.title);
                    $('[data-value="description_journal"]').val(data.description);
                    $('[data-value="author_journal"]').val(data.author);
                    $('[data-value="created_journal"]').val(data.created_date);
                    $('[data-value="document_journal"]').val(data.document_pdf);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editJournalModal"]', function() {
            let id = $(this).data('id');
            $('#editJournal').attr('action', '/admin/humas/majalah/edit-majalah/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/humas/majalah/detail-majalah/' + id,
                success: function(data) {
                    $('[data-value="thumbnail_journal"]').attr("src",
                        "/assets/img/humas-images/majalah-image/" + data.thumbnail);
                    $('[data-value="oldImage_journal"]').val(data.thumbnail);

                    $('[data-value="oldDocument_journal"]').val(data.document_pdf);

                    $('[data-value="title_journal"]').val(data.title);
                    $('[data-value="description_journal"]').val(data.description);
                    $('[data-value="author_journal"]').val(data.author);
                    $('[data-value="created_journal"]').val(data.created_date);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteJournalModal"]', function() {
            let id = $(this).data('id');
            $('#deletePartnership').attr('action', '/admin/humas/majalah/delete-majalah/' + id);
        });

        const tagAddThumbnail = document.querySelector('.tag-add-thumbnail');
        const inputAddThumbnail = document.querySelector('.input-add-thumbnail');
        const tagEditThumbnail = document.querySelector('.tag-edit-thumbnail');
        const inputEditThumbnail = document.querySelector('.input-edit-thumbnail');

        inputAddThumbnail.addEventListener('change', function() {
            tagAddThumbnail.src = URL.createObjectURL(inputAddThumbnail.files[0]);
        });

        inputEditThumbnail.addEventListener('change', function() {
            tagEditThumbnail.src = URL.createObjectURL(inputEditThumbnail.files[0]);
        });
    </script>
@endsection
