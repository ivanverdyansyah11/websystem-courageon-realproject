@extends('templates.main')

@section('container')
    <div class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Section Guru</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul Header</div>
                            <div class="col data-header">Button</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center justify-content-between">
                            <div class="col data-value">{{ $section->title_section }}</div>
                            <div class="col data-value">{{ $section->button }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionTeacherModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionTeacherModal">
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
                <h5 class="subtitle">Guru Sekolah</h5>
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST" action="{{ route('guru-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari guru..</p>
                            </label>
                        </div>
                    </form>
                    <a href="{{ route('guru-create') }}" class="d-none d-md-inline-block button-default">Tambah
                        Guru</a>
                </div>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-lg-inline-block col-2 data-header">Profil</div>
                            <div class="col data-header">Nama <span class="d-none d-md-inline-block">Lengkap</span></div>
                            <div class="col data-header">NIP</div>
                            <div class="d-none d-lg-inline-block col data-header">Tempat, Tanggal Lahir</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($teachers->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Guru!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($teachers as $teacher)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center justify-content-between">
                                    <div class="d-none d-lg-inline-block col-2 data-value">
                                        @if ($teacher->image)
                                            <img src="{{ asset('assets/img/profil-images/guru-image/' . $teacher->image) }}"
                                                class="img-fluid" alt="Teacher Image" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value">{{ $teacher->fullname }}</div>
                                    <div class="col data-value">{{ $teacher->nip ? $teacher->nip : '-' }}</div>
                                    <div class="d-none d-lg-inline-block col data-value">
                                        @if ($teacher->place_of_birth)
                                            {{ $teacher->place_of_birth }}
                                            @if ($teacher->date_of_birth)
                                                ,
                                            @endif
                                        @endif
                                        @if ($teacher->date_of_birth)
                                            {{ $teacher->date_of_birth }}
                                        @endif
                                        @if (!$teacher->place_of_birth && !$teacher->date_of_birth)
                                            -
                                        @endif
                                    </div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('guru-detail', $teacher->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('guru-edit', $teacher->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteTeacherModal"
                                                data-id="{{ $teacher->id }}">
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
                {{ $teachers->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION TEACHER --}}
    <div class="modal fade" id="detailSectionTeacherModal" tabindex="-1" aria-labelledby="detailSectionTeacherModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Guru</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_teacher" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_teacher" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION TEACHER --}}

    {{-- MODAL EDIT SECTION TEACHER --}}
    <div class="modal fade" id="editSectionTeacherModal" tabindex="-1" aria-labelledby="editSectionTeacherModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Guru</h3>
                <form id="editSectionTeacher" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_teacher" name="title_section" required>
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_teacher" name="button" required>
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
    {{-- END MODAL EDIT SECTION TEACHER --}}

    {{-- MODAL DELETE GURU --}}
    <div class="modal fade" id="deleteTeacherModal" tabindex="-1" aria-labelledby="deleteTeacherModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Guru Sekolah</h3>
                <form id="deleteTeacher" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Guru Sekolah: Apakah Anda yakin ingin
                        menghapus guru sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan guru sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Guru</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE GURU --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionTeacherModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/guru/detail-section',
                success: function(data) {
                    $('[data-value="title_teacher"]').val(data.title_section);
                    $('[data-value="button_teacher"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionTeacherModal"]', function() {
            $('#editSectionTeacher').attr('action', '/admin/profil/guru/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/profil/guru/detail-section',
                success: function(data) {
                    $('[data-value="title_teacher"]').val(data.title_section);
                    $('[data-value="button_teacher"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteTeacherModal"]', function() {
            let id = $(this).data('id');
            $('#deleteTeacher').attr('action', '/admin/profil/guru/delete/' + id);
        });
    </script>
@endsection
