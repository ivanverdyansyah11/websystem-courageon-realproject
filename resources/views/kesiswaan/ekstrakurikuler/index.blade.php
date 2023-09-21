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
                            <div class="d-none col data-value data-length">{!! $section_extracurricular->description !!}</div>
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
                <a href="{{ route('ekstrakurikuler-create') }}" class="d-none d-md-inline-block button-default">Tambah
                    Ekstrakurikuler</a>
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
                                            <a href="{{ route('ekstrakurikuler-detail', $extracurricular->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-id="{{ $extracurricular->id }}">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('ekstrakurikuler-edit', $extracurricular->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-id="{{ $extracurricular->id }}">
                                                <div class="edit-icon"></div>
                                            </a>
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
            <div class="col-12 d-flex justify-content-end mt-4">
                {{ $extracurriculars->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION EXTRACURRICULAR --}}
    <div class="modal fade" id="detailSectionExtracurricularModal" tabindex="-1"
        aria-labelledby="detailSectionExtracurricularModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
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
                        <textarea id="textareaDetailSection">{{ $section_extracurricular->description }}</textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION EXTRACURRICULAR --}}

    {{-- MODAL EDIT SECTION EXTRACURRICULAR --}}
    <div class="modal fade" id="editSectionExtracurricularModal" tabindex="-1"
        aria-labelledby="editSectionExtracurricularModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Ekstrakurikuler</h3>
                <form id="editSectionExtracurricular" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" name="title_section">
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaEditSection" name="description">{{ $section_extracurricular->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION EXTRACURRICULAR --}}

    {{-- MODAL DELETE EXTRACURRICULAR --}}
    <div class="modal fade" id="deleteExtracurricularModal" tabindex="-1"
        aria-labelledby="deleteExtracurricularModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Ekstrakurikuler Sekolah</h3>
                <form id="deleteExtracurricular" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Ekstrakurikuler Sekolah: Apakah Anda yakin
                        ingin
                        menghapus ekstrakurikuler sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan ekstrakurikuler sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Ekstrakurikuler</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE EXTRACURRICULAR --}}

    <script>
        const textareaDetailSection = new RichTextEditor("#textareaDetailSection");
        const textareaEditSection = new RichTextEditor("#textareaEditSection");

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

        $(document).on('click', '[data-bs-target="#deleteExtracurricularModal"]', function() {
            let id = $(this).data('id');
            $('#deleteExtracurricular').attr('action', '/admin/kesiswaan/ekstrakurikuler/delete-ekstrakurikuler/' +
                id);
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
