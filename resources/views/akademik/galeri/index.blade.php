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
                <h5 class="subtitle">Section Galeri</h5>
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
                            <div class="col data-value data-length">{{ $section_gallery->title_section }}</div>
                            <div class="d-none col data-value data-length">{{ $section_gallery->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionGalleryModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionGalleryModal">
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
                <h5 class="subtitle">Proyek 5P Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addProjectModal">Tambah
                    Proyek</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Image</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Proyek</span></div>
                            <div class="col data-header">Topik</div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($projects->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Proyek!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($projects as $project)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="d-none d-md-inline-block col-2 data-value">
                                        @if ($project->image)
                                            <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $project->image) }}"
                                                class="img-fluid" alt="Image Project" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value data-length">{{ $project->title }}</div>
                                    <div class="col data-value data-length">{{ $project->topic }}</div>
                                    <div class="d-none col data-value data-length">
                                        {{ $project->description }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailProjectModal"
                                                data-id="{{ $project->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editProjectModal"
                                                data-id="{{ $project->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteProjectModal"
                                                data-id="{{ $project->id }}">
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

    {{-- MODAL DETAIL SECTION GALLERY --}}
    <div class="modal fade" id="detailSectionGalleryModal" tabindex="-1" aria-labelledby="detailSectionGalleryModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Galeri</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_section" disabled id="deskripsi" rows="4" class="input" autocomplete="off"></textarea>
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
    <div class="modal fade" id="editSectionProyekModal" tabindex="-1" aria-labelledby="editSectionProyekModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Proyek</h3>
                <form id="editSectionProyek" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            name="title_section">
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button label</label>
                        <input type="text" id="button" class="input" autocomplete="off" data-value="button_section"
                            name="button">
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
    <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Proyek Sekolah</h3>
                <form action="{{ route('proyek-store') }}" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="image">Image</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-add-image" alt="Image Project" width="80">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="image" class="input-add-image" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Proyek</label>
                                <input type="text" id="judul" class="input" name="title" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="topik">Topik</label>
                                <input type="text" id="topik" class="input" name="topic" autocomplete="off">
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
                        <button type="submit" class="button-default-solid">Tambah Proyek</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD PROJECT --}}

    {{-- MODAL DETAIL PROJECT --}}
    <div class="modal fade" id="detailProjectModal" tabindex="-1" aria-labelledby="detailProjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Proyek Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label>Image</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Project" width="80" data-value="image_project">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Proyek</label>
                                <input type="text" id="judul" class="input" disabled data-value="title_project"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="topik">Topik</label>
                                <input type="text" id="topik" class="input" disabled data-value="topic_project"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="input" disabled data-value="description_project" autocomplete="off"
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
    {{-- END MODAL DETAIL PROJECT --}}

    {{-- MODAL EDIT PROJECT --}}
    <div class="modal fade" id="editProjectModal" tabindex="-1" aria-labelledby="editProjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Proyek Sekolah</h3>
                <form id="editProject" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="image">Image</label>
                                <input type="hidden" name="oldImage" data-value="oldImage_project">
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-image" alt="Image Project" width="80"
                                        data-value="image_project">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="image" class="input-edit-image" name="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Proyek</label>
                                <input type="text" id="judul" class="input" name="title"
                                    data-value="title_project" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="topik">Topik</label>
                                <input type="text" id="topik" class="input" name="topic"
                                    data-value="topic_project" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="input" name="description" data-value="description_project" autocomplete="off"
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
    {{-- END MODAL EDIT PROJECT --}}

    {{-- MODAL DELETE PROJECT --}}
    <div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Proyek Sekolah</h3>
                <form id="deleteProject" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Proyek Sekolah: Apakah Anda yakin ingin
                        menghapus proyek sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan proyek sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Proyek</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE PROJECT --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionGalleryModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/akademik/galeri/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionProyekModal"]', function() {
            $('#editSectionProyek').attr('action', '/admin/akademik/proyek/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/proyek/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailProjectModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/proyek/detail-proyek/' + id,
                success: function(data) {
                    $('[data-value="image_project"]').attr("src",
                        "/assets/img/akademik-images/proyek-image/" + data.image);
                    $('[data-value="title_project"]').val(data.title);
                    $('[data-value="topic_project"]').val(data.topic);
                    $('[data-value="description_project"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editProjectModal"]', function() {
            let id = $(this).data('id');
            $('#editProject').attr('action', '/admin/akademik/proyek/edit-proyek/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/akademik/proyek/detail-proyek/' + id,
                success: function(data) {
                    $('[data-value="image_project"]').attr("src",
                        "/assets/img/akademik-images/proyek-image/" + data.image);
                    $('[data-value="oldImage_project"]').val(data.image);
                    $('[data-value="title_project"]').val(data.title);
                    $('[data-value="topic_project"]').val(data.topic);
                    $('[data-value="description_project"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteProjectModal"]', function() {
            let id = $(this).data('id');
            $('#deleteProject').attr('action', '/admin/akademik/proyek/delete-proyek/' + id);
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
