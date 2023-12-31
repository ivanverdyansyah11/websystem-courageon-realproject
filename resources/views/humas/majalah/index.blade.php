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
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST" action="{{ route('majalah-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari majalah..</p>
                            </label>
                        </div>
                    </form>
                    <a href="{{ route('majalah-create') }}" class="d-none d-md-inline-block button-default">Tambah
                        Majalah</a>
                    <a href="{{ route('majalah-generate') }}"
                        class="d-none d-md-flex button-solid-default align-items-center gap-2">
                        <div class="icon-export"></div>
                        Download
                    </a>
                </div>
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
                                    <div class="col data-value data-length">{!! $journal->description !!}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('majalah-detail', $journal->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('majalah-edit', $journal->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
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
            <div class="col-12 d-flex justify-content-end mt-4">
                {{ $journals->links() }}
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
                        <label>Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_header" disabled>
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
                            data-value="title_header" name="title_header" required>
                        @error('title_header')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_header" name="button" required>
                        @error('button')
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
    {{-- END MODAL EDIT SECTION HEADER --}}

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
