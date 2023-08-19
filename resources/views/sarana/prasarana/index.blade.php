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
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addPrasaranaModal">Tambah
                    Prasarana</button>
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
                                    <div class="d-none col data-value data-length">{{ $prasarana->description }}</div>
                                    <div class="col data-value">{{ $prasarana->total }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailPrasaranaModal"
                                                data-id="{{ $prasarana->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editPrasaranaModal"
                                                data-id="{{ $prasarana->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
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
        </div>
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
                        <textarea id="deskripsi" class="input" autocomplete="off" rows="4" data-value="description_section"
                            disabled></textarea>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Prasarana</h3>
                <form id="editSectionPrasarana" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" name="title_section" autocomplete="off"
                            data-value="title_section">
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" name="button" autocomplete="off"
                            data-value="button_section">
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="4"
                            data-value="description_section"></textarea>
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

    {{-- MODAL ADD PRASARANA --}}
    <div class="modal fade" id="addPrasaranaModal" tabindex="-1" aria-labelledby="addPrasaranaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Prasarana Sekolah</h3>
                <form action="{{ route('prasarana-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="image">Image</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-add-image" alt="Image Prasarana" width="80">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="image" class="input-add-image" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nama">Nama Sarana Prasarana</label>
                                <input type="text" id="nama" class="input" autocomplete="off" name="name">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="total">Total Sarana Prasarana</label>
                                <input type="text" id="total" class="input" autocomplete="off" name="total">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="description" id="deskripsi" rows="4" class="input" autocomplete="off"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Prasarana</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD PRASARANA --}}

    {{-- MODAL DETAIL PRASARANA --}}
    <div class="modal fade" id="detailPrasaranaModal" tabindex="-1" aria-labelledby="detailPrasaranaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Prasarana Sekolah</h3>
                <form id="detailContact" method="post" class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="image">Image</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Prasarana" width="80" data-value="image_prasarana">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nama">Nama Sarana Prasarana</label>
                                <input type="text" id="nama" class="input" autocomplete="off"
                                    data-value="name_prasarana" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="total">Total Sarana Prasarana</label>
                                <input type="text" id="total" class="input" autocomplete="off"
                                    data-value="total_prasarana" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea data-value="description_prasarana" disabled id="deskripsi" rows="4" class="input"
                                    autocomplete="off"></textarea>
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
    {{-- END MODAL DETAIL PRASARANA --}}

    {{-- MODAL EDIT PRASARANA --}}
    <div class="modal fade" id="editPrasaranaModal" tabindex="-1" aria-labelledby="editPrasaranaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Prasarana Sekolah</h3>
                <form id="editPrasarana" method="post" class="form d-flex flex-column justify-content-center"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="image">Image</label>
                                <input type="hidden" name="oldImage" data-value="oldImage_prasarana">
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-image" alt="Image Prasarana" width="80"
                                        data-value="image_prasarana">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="image" class="input-edit-image" name="image">
                                    </div>
                                </div>
                                @error('image')
                                    <p class="caption-error mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nama">Nama Sarana Prasarana</label>
                                <input type="text" id="nama" class="input" autocomplete="off"
                                    data-value="name_prasarana" name="name">
                                @error('name')
                                    <p class="caption-error mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="total">Total Sarana Prasarana</label>
                                <input type="text" id="total" class="input" autocomplete="off"
                                    data-value="total_prasarana" name="total">
                                @error('total')
                                    <p class="caption-error mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea data-value="description_prasarana" name="description" id="deskripsi" rows="4" class="input"
                                    autocomplete="off"></textarea>
                                @error('description')
                                    <p class="caption-error mt-1">{{ $message }}</p>
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
    {{-- END MODAL EDIT PRASARANA --}}

    {{-- MODAL DELETE PRASARANA --}}
    <div class="modal fade" id="deletePrasaranaModal" tabindex="-1" aria-labelledby="deletePrasaranaModalLabel"
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
    {{-- END MODAL DELETE PRASARANA --}}

    <script>
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

        $(document).on('click', '[data-bs-target="#detailPrasaranaModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/prasarana/detail-prasarana/' + id,
                success: function(data) {
                    $('[data-value="image_prasarana"]').attr("src",
                        "/assets/img/sarana-prasarana-images/sarana-prasarana-image/" + data.image);
                    $('[data-value="name_prasarana"]').val(data.name);
                    $('[data-value="description_prasarana"]').val(data.description);
                    $('[data-value="total_prasarana"]').val(data.total);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editPrasaranaModal"]', function() {
            let id = $(this).data('id');
            $('#editPrasarana').attr('action', '/admin/sarana-prasarana/prasarana/edit-prasarana/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/prasarana/detail-prasarana/' + id,
                success: function(data) {
                    $('[data-value="image_prasarana"]').attr("src",
                        "/assets/img/sarana-prasarana-images/sarana-prasarana-image/" + data.image);
                    $('[data-value="oldImage_prasarana"]').val(data.image);
                    $('[data-value="name_prasarana"]').val(data.name);
                    $('[data-value="description_prasarana"]').val(data.description);
                    $('[data-value="total_prasarana"]').val(data.total);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deletePrasaranaModal"]', function() {
            let id = $(this).data('id');
            $('#deleteContact').attr('action', '/admin/profil/kontak/delete-contact/' + id);
        });

        const tagAddImage = document.querySelector('.tag-add-image');
        const inputAddImage = document.querySelector('.input-add-image');

        const tagEditImage = document.querySelector('.tag-edit-image');
        const inputEditImage = document.querySelector('.input-edit-image');

        inputAddImage.addEventListener('change', function() {
            tagAddImage.src = URL.createObjectURL(inputAddImage.files[0]);
        });

        inputEditImage.addEventListener('change', function() {
            tagEditImage.src = URL.createObjectURL(inputEditImage.files[0]);
        });
    </script>
@endsection
