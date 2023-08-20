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
                <h5 class="subtitle">Section Beasiswa</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="d-none col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_beasiswa->title_section }}</div>
                            <div class="d-none col data-value data-length">
                                {{ $section_beasiswa->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionModal">
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

    {{-- MODAL DETAIL SECTION --}}
    <div class="modal fade" id="detailSectionModal" tabindex="-1" aria-labelledby="detailSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Beasiswa</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_section" class="input" autocomplete="off" id="deskripsi" rows="4" disabled></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION --}}

    {{-- MODAL EDIT SECTION --}}
    <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Beasiswa</h3>
                <form id="editSection" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Beasiswa</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            name="title_section">
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_section" name="description" class="input" autocomplete="off" id="deskripsi"
                            rows="4"></textarea>
                        @error('description')
                            <p class="caption-error mt-2">{{ $message }}</p>
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
    {{-- END MODAL EDIT SECTION --}}

    {{-- MODAL ADD JOURNAL --}}
    <div class="modal fade" id="addJournalModal" tabindex="-1" aria-labelledby="addJournalModalLabel" aria-hidden="true">
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
                                @error('thumbnail')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="document_pdf">Document PDF</label>
                                <input type="file" id="document_pdf" name="document_pdf">
                                @error('document_pdf')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="title">Judul</label>
                                <input type="text" id="title" class="input" autocomplete="off" name="title">
                                @error('title')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="penulis">Penulis</label>
                                <input type="text" id="penulis" class="input" autocomplete="off" name="author">
                                @error('author')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                <input type="date" id="tanggal_dibuat" class="input" autocomplete="off"
                                    name="created_date">
                                @error('created_date')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi Singkat</label>
                                <textarea name="description" id="deskripsi" rows="4" class="input" autocomplete="off"></textarea>
                                @error('description')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
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
                                <label>Thumbnail</label>
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
                                @error('thumbnail')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="document_pdf">Dokumen PDF</label>
                                <div class="wrapper d-flex align-items-end">
                                    <input type="hidden" name="oldDocument" data-value="oldDocument_journal">
                                    <input type="file" id="document_pdf" name="document_pdf">
                                    @error('document_pdf')
                                        <p class="caption-error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="title">Judul</label>
                                <input type="text" id="title" class="input" autocomplete="off"
                                    data-value="title_journal" name="title">
                                @error('title')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="penulis">Penulis</label>
                                <input type="text" id="penulis" class="input" autocomplete="off"
                                    data-value="author_journal" name="author">
                                @error('author')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                <input type="date" id="tanggal_dibuat" class="input" autocomplete="off"
                                    data-value="created_journal" name="created_date">
                                @error('created_date')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi Singkat</label>
                                <textarea name="description" data-value="description_journal" id="deskripsi" rows="4" class="input"
                                    autocomplete="off"></textarea>
                                @error('description')
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
    {{-- END MODAL EDIT JOURNAL --}}

    {{-- MODAL DELETE JOURNAL --}}
    <div class="modal fade" id="deleteJournalModal" tabindex="-1" aria-labelledby="deleteJournalModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Majalah Sekolah</h3>
                <form id="deleteJournal" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Majalah Sekolah: Apakah Anda yakin ingin
                        menghapus majalah sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan majalah sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Majalah</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE JOURNAL --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionModal"]', function() {
            $('#editSection').attr('action', '/admin/kesiswaan/beasiswa/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
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
            $('#deleteJournal').attr('action', '/admin/humas/majalah/delete-majalah/' + id);
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
