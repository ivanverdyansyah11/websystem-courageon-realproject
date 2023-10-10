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
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addSectionHeaderModal">Tambah
                    Hero Beranda</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Header</span></div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @foreach ($section_headers as $section_header)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center">
                                <div class="d-none d-md-inline-block col-2 data-value">
                                    @if ($section_header->banner)
                                        <img src="{{ asset('assets/img/kesiswaan-images/header-image/' . $section_header->banner) }}"
                                            class="img-notfound" alt="Banner Section Header" width="80">
                                    @else
                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                            alt="Image Not Found" width="80">
                                    @endif
                                </div>
                                <div class="col data-value data-length">{{ $section_header->title_header }}</div>
                                <div class="col data-value data-length">
                                    {!! $section_header->description !!}</div>
                                <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                    <div class="wrapper-action d-flex">
                                        <button type="button"
                                            class="button-action button-detail d-flex justify-content-center align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#detailSectionHeaderModal"
                                            data-id="{{ $section_header->id }}">
                                            <div class="detail-icon"></div>
                                        </button>
                                        <button type="button"
                                            class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#editSectionHeaderModal"
                                            data-id="{{ $section_header->id }}">
                                            <div class="edit-icon"></div>
                                        </button>
                                        <button type="button"
                                            class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#deleteSectionHeaderModal"
                                            data-id="{{ $section_header->id }}">
                                            <div class="delete-icon"></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 d-flex justify-content-end mt-4">
                        {{ $section_headers->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL ADD SECTION HEADER --}}
    <div class="modal fade" id="addSectionHeaderModal" tabindex="-1" aria-labelledby="addSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Add Section Header</h3>
                <form action="{{ route('kesiswaan.store') }}" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-add-header" alt="Banner Section Header" width="80"
                                        data-value="banner_header">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="banner" class="input-add-header" name="banner"
                                            required>
                                    </div>
                                </div>
                                @error('banner')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Header</label>
                                <input type="text" id="judul" class="input" name="title_header" autocomplete="off"
                                    required>
                                @error('title_header')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button">Button Label</label>
                                <input type="text" id="button" class="input" autocomplete="off" name="button"
                                    required>
                                @error('button')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="textareaAddHeader" name="description" required></textarea>
                                @error('description')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Section Hero</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD SECTION HEADER --}}

    {{-- MODAL DETAIL SECTION HEADER --}}
    <div class="modal fade" id="detailSectionHeaderModal" tabindex="-1" aria-labelledby="detailSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Header</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label>Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                        alt="Banner Section Header" width="80" data-value="banner_header">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Header</label>
                                <input type="text" id="judul" class="input" autocomplete="off"
                                    data-value="title_header" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button">Button Label</label>
                                <input type="text" id="button" class="input" autocomplete="off"
                                    data-value="button_header" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="textareaDetailHeader">{{ $section_header->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup
                            Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION HEADER --}}

    {{-- MODAL EDIT SECTION HEADER --}}
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
                                @error('banner')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Header</label>
                                <input type="text" id="judul" class="input" name="title_header"
                                    autocomplete="off" data-value="title_header" required>
                                @error('title_header')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button">Button Label</label>
                                <input type="text" id="button" class="input" autocomplete="off"
                                    data-value="button_header" name="button" required>
                                @error('button')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="textareaEditHeader" name="description" required>{{ $section_header->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION HEADER --}}

    {{-- MODAL DELETE SECTION HEADER --}}
    <div class="modal fade" id="deleteSectionHeaderModal" tabindex="-1" aria-labelledby="deleteSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Section Hero Header</h3>
                <form id="deleteSectionHeader" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Section Hero Header: Apakah Anda
                        yakin
                        ingin
                        menghapus section hero header ini?
                        Tindakan ini tidak dapat diurungkan, dan section hero header akan dihapus secara permanen
                        dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Section Hero</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE SECTION HEADER --}}

    <script>
        const textareaAddHeader = new RichTextEditor("#textareaAddHeader");
        const textareaDetailHeader = new RichTextEditor("#textareaDetailHeader");
        const textareaEditHeader = new RichTextEditor("#textareaEditHeader");

        $(document).on('click', '[data-bs-target="#detailSectionHeaderModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/detail-header/' + id,
                success: function(data) {
                    $('[data-value="title_header"]').val(data.title_header);
                    $('[data-value="button_header"]').val(data.button);
                    $('[data-value="banner_header"]').attr("src",
                        "/assets/img/kesiswaan-images/header-image/" + data.banner);
                    textareaDetailHeader.setHTMLCode(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionHeaderModal"]', function() {
            let id = $(this).data('id');
            $('#editSectionHeader').attr('action', '/admin/kesiswaan/edit-header/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/detail-header/' + id,
                success: function(data) {
                    $('[data-value="title_header"]').val(data.title_header);
                    $('[data-value="button_header"]').val(data.button);
                    $('[data-value="oldImage_header"]').val(data.banner);
                    $('[data-value="banner_header"]').attr("src",
                        "/assets/img/kesiswaan-images/header-image/" + data.banner);
                    textareaEditHeader.setHTMLCode(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteSectionHeaderModal"]', function() {
            let id = $(this).data('id');
            $('#deleteSectionHeader').attr('action', '/admin/kesiswaan/delete-header/' + id);
        });

        const tagAddHeader = document.querySelector('.tag-add-header');
        const inputAddHeader = document.querySelector('.input-add-header');
        const tagEditHeader = document.querySelector('.tag-edit-header');
        const inputEditHeader = document.querySelector('.input-edit-header');

        inputAddHeader.addEventListener('change', function() {
            tagAddHeader.src = URL.createObjectURL(inputAddHeader.files[0]);
        });

        inputEditHeader.addEventListener('change', function() {
            tagEditHeader.src = URL.createObjectURL(inputEditHeader.files[0]);
        });
    </script>
@endsection
