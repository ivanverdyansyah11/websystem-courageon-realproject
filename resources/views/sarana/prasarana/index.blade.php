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

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Sarana Prasarana Sekolah</h5>
                <div class="wrapper d-flex gap-2 align-items-center">
                    <a href="{{ route('prasarana-create') }}" class="d-none d-md-inline-block button-default">Tambah
                        Prasarana</a>
                    <a href="{{ route('prasarana-generate') }}"
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
                            <div class="d-none d-lg-inline-block col-2 data-header">Gambar</div>
                            <div class="col data-header">Nama</div>
                            <div class="d-none d-md-inline-block col data-header">Deskripsi</div>
                            <div class="col data-header">Total</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($prasaranas->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Prasarana!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($prasaranas as $prasarana)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center justify-content-between">
                                    <div class="d-none d-lg-inline-block col-2 data-value">
                                        @if ($prasarana->image)
                                            <img src="{{ asset('assets/img/sarana-prasarana-images/sarana-prasarana-image/' . $prasarana->image) }}"
                                                class="img-fluid" alt="Prasarana Image" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value">{{ $prasarana->name }}</div>
                                    <div class="d-none col data-value data-length">{!! $prasarana->description !!}</div>
                                    <div class="col data-value">{{ $prasarana->total }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('prasarana-detail', $prasarana->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('prasarana-edit', $prasarana->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deletePrasaranaModal"
                                                data-id="{{ $prasarana->id }}">
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
                {{ $prasaranas->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION PRASARANA --}}
    <div class="modal fade" id="detailSectionPrasaranaModal" tabindex="-1"
        aria-labelledby="detailSectionPrasaranaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Prasarana</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_section" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaDetailHeader">{{ $section->description }}</textarea>
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
    <div class="modal fade" id="editSectionPrasaranaModal" tabindex="-1"
        aria-labelledby="editSectionPrasaranaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Prasarana</h3>
                <form id="editSectionPrasarana" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" required name="title_section"
                            autocomplete="off" data-value="title_section">
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" required name="button" autocomplete="off"
                            data-value="button_section">
                        @error('button')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaEditHeader" required name="description">{{ $section->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION PRASARANA --}}

    {{-- MODAL DELETE PRASARANA --}}
    <div class="modal fade" id="deletePrasaranaModal" tabindex="-1" aria-labelledby="deletePrasaranaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Prasarana Sekolah</h3>
                <form id="deletePrasarana" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Prasarana Sekolah: Apakah Anda yakin ingin
                        menghapus prasarana sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan prasarana sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Prasarana</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE PRASARANA --}}

    <script>
        const textareaDetailHeader = new RichTextEditor("#textareaDetailHeader");
        const textareaEditHeader = new RichTextEditor("#textareaEditHeader");

        $(document).on('click', '[data-bs-target="#detailSectionPrasaranaModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/prasarana/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section"]').val(data.button);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionPrasaranaModal"]', function() {
            $('#editSectionPrasarana').attr('action', '/admin/sarana-prasarana/prasarana/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/prasarana/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section"]').val(data.button);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deletePrasaranaModal"]', function() {
            let id = $(this).data('id');
            $('#deletePrasarana').attr('action', '/admin/sarana-prasarana/prasarana/delete-prasarana/' + id);
        });
    </script>
@endsection
