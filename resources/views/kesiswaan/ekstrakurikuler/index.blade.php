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
                <h5 class="subtitle">Section Ekstrakurikuler</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="d-none d-md-inline-block col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_extracurricular->title_section }}</div>
                            <div class="d-none col data-value data-length">{{ $section_extracurricular->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionExtracurricularModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionExtracurricularModal">
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
                <h5 class="subtitle">Ekstrakurikuler Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addExtracurricularModal">Tambah Ekstrakurikuler</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Icon</div>
                            <div class="col data-header">Nama</div>
                            <div class="d-none d-md-inline-block col data-header">Jadwal Ekstra</div>
                            <div class="d-none d-md-inline-block col data-header">Jam Pelaksana</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($extracurriculars->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Gambar!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($extracurriculars as $extracurricular)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="d-none d-md-inline-block col-2 data-value">
                                        @if ($extracurricular->icon)
                                            <img src="{{ asset('assets/img/kesiswaan-images/ekstrakurikuler-image/' . $extracurricular->icon) }}"
                                                class="img-fluid" alt="Icon Extracurricular" width="40">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value data-length">{{ $extracurricular->name }}</div>
                                    <div class="col data-value data-length">{{ $extracurricular->schedule_day }}</div>
                                    <div class="col data-value data-length">{{ $extracurricular->start_time }} -
                                        {{ $extracurricular->end_time }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailExtracurricularModal"
                                                data-id="{{ $extracurricular->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editExtracurricularModal"
                                                data-id="{{ $extracurricular->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteExtracurricularModal"
                                                data-id="{{ $extracurricular->id }}">
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

    {{-- MODAL DETAIL SECTION GALLERY --}}
    <div class="modal fade" id="detailSectionExtracurricularModal" tabindex="-1"
        aria-labelledby="detailSectionExtracurricularModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Ekstrakurikuler</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_section" disabled id="deskripsi" rows="4" class="input"
                            autocomplete="off"></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION GALLERY --}}

    {{-- MODAL EDIT SECTION GALLERY --}}
    <div class="modal fade" id="editSectionExtracurricularModal" tabindex="-1"
        aria-labelledby="editSectionExtracurricularModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Ekstrakurikuler</h3>
                <form id="editSectionExtracurricular" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" name="title_section">
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_section" name="description" id="deskripsi" rows="4" class="input"
                            autocomplete="off"></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT SECTION GALLERY --}}

    {{-- MODAL ADD PROJECT --}}
    <div class="modal fade" id="addExtracurricularModal" tabindex="-1" aria-labelledby="addExtracurricularModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Ekstrakurikuler Sekolah</h3>
                <form action="{{ route('ekstrakurikuler-store') }}" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="icon">Icon</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-add-icon" alt="Icon Extracurricular" width="80">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="icon" class="input-add-icon" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="input" name="name" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Ekstrakurikuler</label>
                                <input type="text" id="judul" class="input" name="name" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label>Jadwal Ekstrakurikuler</label>
                                <div class="row">
                                    <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                        <input type="checkbox" name="schedule_day[]" id="senin">
                                        <label class="mb-0" for="senin">Senin</label>
                                    </div>
                                    <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                        <input type="checkbox" name="schedule_day[]" id="selasa">
                                        <label class="mb-0" for="selasa">Selasa</label>
                                    </div>
                                    <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                        <input type="checkbox" name="schedule_day[]" id="rabu">
                                        <label class="mb-0" for="rabu">Rabu</label>
                                    </div>
                                    <div class="col-3 d-flex align-items-center gap-2 mb-2">
                                        <input type="checkbox" name="schedule_day[]" id="kamis">
                                        <label class="mb-0" for="kamis">Kamis</label>
                                    </div>
                                    <div class="col-3 d-flex align-items-center gap-2">
                                        <input type="checkbox" name="schedule_day[]" id="jumat">
                                        <label class="mb-0" for="jumat">Jumat</label>
                                    </div>
                                    <div class="col-3 d-flex align-items-center gap-2">
                                        <input type="checkbox" name="schedule_day[]" id="sabtu">
                                        <label class="mb-0" for="sabtu">Sabtu</label>
                                    </div>
                                    <div class="col-3 d-flex align-items-center gap-2">
                                        <input type="checkbox" name="schedule_day[]" id="minggu">
                                        <label class="mb-0" for="minggu">Minggu</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jam_mulai">Jam Mulai</label>
                                <input type="time" id="jam_mulai" class="input" name="start_time"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jam_selesai">Jam Selesai</label>
                                <input type="time" id="jam_selesai" class="input" name="end_time"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea name="description" id="deskripsi" class="input" name="description" autocomplete="off" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Ekstrakurikuler</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD PROJECT --}}

    {{-- MODAL DETAIL GALLERY --}}
    <div class="modal fade" id="detailGalleryModal" tabindex="-1" aria-labelledby="detailGalleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Proyek Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Gambar</label>
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                alt="Image Gallery" width="80" data-value="image_gallery">
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="judul">Judul Gambar</label>
                        <input type="text" id="judul" class="input" disabled data-value="title_gallery"
                            autocomplete="off">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL GALLERY --}}

    {{-- MODAL EDIT GALLERY --}}
    <div class="modal fade" id="editGalleryModal" tabindex="-1" aria-labelledby="editGalleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Gambar Sekolah</h3>
                <form id="editGallery" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="gambar">Gambar</label>
                        <input type="hidden" data-value="oldImage_gallery" name="oldImage">
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid tag-edit-image"
                                alt="Image Gallery" width="80" data-value="image_gallery">
                            <div class="wrapper-image w-100">
                                <input type="file" id="gambar" class="input-edit-image" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="judul">Judul Gambar</label>
                        <input type="text" id="judul" class="input" data-value="title_gallery" name="title"
                            autocomplete="off">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT GALLERY --}}

    {{-- MODAL DELETE GALLERY --}}
    <div class="modal fade" id="deleteGalleryModal" tabindex="-1" aria-labelledby="deleteGalleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Gambar Sekolah</h3>
                <form id="deleteGallery" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Gambar Sekolah: Apakah Anda yakin ingin
                        menghapus gambar sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan gambar sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Gambar</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE GALLERY --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionExtracurricularModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/ekstrakurikuler/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionExtracurricularModal"]', function() {
            $('#editSectionExtracurricular').attr('action', '/admin/kesiswaan/ekstrakurikuler/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/ekstrakurikuler/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailGalleryModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/galeri/detail-galeri/' + id,
                success: function(data) {
                    $('[data-value="image_gallery"]').attr("src",
                        "/assets/img/akademik-images/galeri-image/" + data.image);
                    $('[data-value="title_gallery"]').val(data.title);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editGalleryModal"]', function() {
            let id = $(this).data('id');
            $('#editGallery').attr('action', '/admin/akademik/galeri/edit-galeri/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/akademik/galeri/detail-galeri/' + id,
                success: function(data) {
                    $('[data-value="image_gallery"]').attr("src",
                        "/assets/img/akademik-images/galeri-image/" + data.image);
                    $('[data-value="oldImage_gallery"]').val(data.image);
                    $('[data-value="title_gallery"]').val(data.title);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteGalleryModal"]', function() {
            let id = $(this).data('id');
            $('#deleteGallery').attr('action', '/admin/akademik/galeri/delete-galeri/' + id);
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
