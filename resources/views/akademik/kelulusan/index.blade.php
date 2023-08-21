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
                <h5 class="subtitle">Section Kelulusan</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul Section</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_graduation->title_section }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionGraduationModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionGraduationModal">
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
                <h5 class="subtitle">Laporan Kenaikan Siswa Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addKenaikanSiswaModal">Tambah
                    Kenaikan Siswa</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Nama</div>
                            <div class="col data-header">Semester</div>
                            <div class="d-none d-md-inline-block col data-header">Jurusan</div>
                            <div class="d-none d-md-inline-block col data-header">Kelas</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($kenaikan_siswa->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Laporan Kenaikan Siswa!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($kenaikan_siswa as $siswa)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    @foreach ($students as $student)
                                        @if ($student->id === $siswa->students_id)
                                            <div class="col data-value data-length">{{ $student->nama_lengkap }}</div>
                                        @endif
                                    @endforeach
                                    @foreach ($semesters as $semester)
                                        @if ($semester->id === $siswa->semesters_id)
                                            <div class="col data-value data-length">{{ $semester->semester }}</div>
                                        @endif
                                    @endforeach
                                    @foreach ($jurusans as $jurusan)
                                        @if ($jurusan->id === $siswa->jurusans_id)
                                            <div class="col data-value data-length">{{ $jurusan->name }}</div>
                                        @endif
                                    @endforeach
                                    @foreach ($kelases as $kelas)
                                        @if ($kelas->id === $siswa->kelases_id)
                                            <div class="col data-value data-length">{{ $kelas->name }}</div>
                                        @endif
                                    @endforeach
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailKenaikanSiswaModal"
                                                data-id="{{ $siswa->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editKenaikanSiswaModal"
                                                data-id="{{ $siswa->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteKenaikanSiswaModal"
                                                data-id="{{ $siswa->id }}">
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
                {{ $kenaikan_siswa->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION GRADUATION --}}
    <div class="modal fade" id="detailSectionGraduationModal" tabindex="-1"
        aria-labelledby="detailSectionGraduationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Siswa</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label>Judul Section</label>
                                <input type="text" id="judul" class="input" autocomplete="off"
                                    data-value="title_section" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_1">Button Label 1</label>
                                <input type="text" id="button_1" class="input" autocomplete="off"
                                    data-value="button_section_1" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_2">Button Label 2</label>
                                <input type="text" id="button_2" class="input" autocomplete="off"
                                    data-value="button_section_2" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_3">Button Label 3</label>
                                <input type="text" id="button_3" class="input" autocomplete="off"
                                    data-value="button_section_3" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_1">Caption 1</label>
                                <input type="text" id="caption_1" class="input" autocomplete="off"
                                    data-value="caption_section_1" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_2">Caption 2</label>
                                <input type="text" id="caption_2" class="input" autocomplete="off"
                                    data-value="caption_section_2" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_3">Caption 3</label>
                                <input type="text" id="caption_3" class="input" autocomplete="off"
                                    data-value="caption_section_3" disabled>
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
    {{-- END MODAL DETAIL SECTION GRADUATION --}}

    {{-- MODAL EDIT SECTION GRADUATION --}}
    <div class="modal fade" id="editSectionGraduationModal" tabindex="-1"
        aria-labelledby="editSectionGraduationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Header</h3>
                <form id="editSectionGraduation" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Section</label>
                                <input type="text" id="judul" class="input" autocomplete="off"
                                    data-value="title_section" name="title_section">
                                @error('title_section')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_1">Button Label 1</label>
                                <input type="text" id="button_1" class="input" autocomplete="off"
                                    data-value="button_section_1" name="button_1">
                                @error('button_1')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_2">Button Label 2</label>
                                <input type="text" id="button_2" class="input" autocomplete="off"
                                    data-value="button_section_2" name="button_2">
                                @error('button_2')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_3">Button Label 3</label>
                                <input type="text" id="button_3" class="input" autocomplete="off"
                                    data-value="button_section_3" name="button_3">
                                @error('button_3')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_1">Caption 1</label>
                                <input type="text" id="caption_1" class="input" autocomplete="off"
                                    data-value="caption_section_1" name="caption_1">
                                @error('caption_1')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_2">Caption 2</label>
                                <input type="text" id="caption_2" class="input" autocomplete="off"
                                    data-value="caption_section_2" name="caption_2">
                                @error('caption_')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_3">Caption 3</label>
                                <input type="text" id="caption_3" class="input" autocomplete="off"
                                    data-value="caption_section_3" name="caption_3">
                                @error('caption_3')
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
    {{-- END MODAL EDIT SECTION GRADUATION --}}

    {{-- MODAL ADD KENAIKAN SISWA --}}
    <div class="modal fade" id="addKenaikanSiswaModal" tabindex="-1" aria-labelledby="addKenaikanSiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Kenaikan Siswa Sekolah</h3>
                <form action="{{ route('kenaikan-siswa-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Nama Siswa</label>
                                <select name="students_id" id="students_id" class="input">
                                    <option selected>Pilih siswa</option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                                @error('students_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="semesters_id">Semester</label>
                                <select name="semesters_id" id="semesters_id" class="input">
                                    <option selected>Pilih semester</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
                                    @endforeach
                                </select>
                                @error('semesters_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jurusans_id">Jurusan</label>
                                <select name="jurusans_id" id="jurusans_id" class="input">
                                    <option selected>Pilih jurusan</option>
                                    @foreach ($jurusans as $jurusan)
                                        <option value="{{ $jurusan->id }}">{{ $jurusan->name }}</option>
                                    @endforeach
                                </select>
                                @error('jurusans_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="kelases_id">Kelas</label>
                                <select name="kelases_id" id="kelases_id" class="input">
                                    <option selected>Pilih kelas</option>
                                    @foreach ($kelases as $kelas)
                                        <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                                    @endforeach
                                </select>
                                @error('kelases_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="indexes_id">Index</label>
                                <select name="indexes_id" id="indexes_id" class="input">
                                    <option selected>Pilih index</option>
                                    @foreach ($indexes as $index)
                                        <option value="{{ $index->id }}">{{ $index->name }}</option>
                                    @endforeach
                                </select>
                                @error('indexes_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Penerima</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD KENAIKAN SISWA --}}

    {{-- MODAL DETAIL KENAIKAN SISWA --}}
    <div class="modal fade" id="detailKenaikanSiswaModal" tabindex="-1" aria-labelledby="detailKenaikanSiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Kenaikan Siswa Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Nama Siswa</label>
                                <input type="text" class="input" data-value="student_nama" id="students_id"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="semesters_id">Semester</label>
                                <input type="text" class="input" data-value="semester_nama" id="semesters_id"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jurusans_id">Jurusan</label>
                                <input type="text" class="input" data-value="jurusan_nama" id="jurusans_id"
                                    disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="kelases_id">Kelas</label>
                                <input type="text" class="input" data-value="kelas_nama" id="kelases_id" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="indexes_id">Index</label>
                                <input type="text" class="input" data-value="index_nama" id="indexes_id" disabled>
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
    {{-- END MODAL DETAIL KENAIKAN SISWA --}}

    {{-- MODAL EDIT KENAIKAN SISWA --}}
    <div class="modal fade" id="editKenaikanSiswaModal" tabindex="-1" aria-labelledby="editKenaikanSiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Penerima Beasiswa Sekolah</h3>
                <form id="editKenaikanSiswa" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Nama Siswa</label>
                                <select name="students_id" id="students_id" class="input">
                                    <option selectedstudents_id" data-value="student_nama"></option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                                @error('students_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="semesters_id">Semester</label>
                                <select name="semesters_id" id="semesters_id" class="input">
                                    <option data-value="semester_nama"></option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}">{{ $semester->semester }}</option>
                                    @endforeach
                                </select>
                                @error('semesters_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jurusans_id">Jurusan</label>
                                <select name="jurusans_id" id="jurusans_id" class="input">
                                    <option data-value="jurusan_nama"></option>
                                    @foreach ($jurusans as $jurusan)
                                        <option value="{{ $jurusan->id }}">{{ $jurusan->name }}</option>
                                    @endforeach
                                </select>
                                @error('jurusans_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="kelases_id">Kelas</label>
                                <select name="kelases_id" id="kelases_id" class="input">
                                    <option data-value="kelas_nama"></option>
                                    @foreach ($kelases as $kelas)
                                        <option value="{{ $kelas->id }}">{{ $kelas->name }}</option>
                                    @endforeach
                                </select>
                                @error('kelases_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="indexes_id">Index</label>
                                <select name="indexes_id" id="indexes_id" class="input">
                                    <option data-value="index_nama"></option>
                                    @foreach ($indexes as $index)
                                        <option value="{{ $index->id }}">{{ $index->name }}</option>
                                    @endforeach
                                </select>
                                @error('indexes_id')
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
    {{-- END MODAL EDIT KENAIKAN SISWA --}}

    {{-- MODAL DELETE KENAIKAN SISWA --}}
    <div class="modal fade" id="deleteKenaikanSiswaModal" tabindex="-1" aria-labelledby="deleteKenaikanSiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Kenaikan Siswa Sekolah</h3>
                <form id="deleteKenaikanSiswa" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Kenaikan Siswa Sekolah: Apakah Anda yakin
                        ingin
                        menghapus kenaikan siswa sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan kenaikan siswa sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Kenaikan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE KENAIKAN SISWA --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionGraduationModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kelulusan/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section_1"]').val(data.button_1);
                    $('[data-value="button_section_2"]').val(data.button_2);
                    $('[data-value="button_section_3"]').val(data.button_3);
                    $('[data-value="caption_section_1"]').val(data.caption_1);
                    $('[data-value="caption_section_2"]').val(data.caption_2);
                    $('[data-value="caption_section_3"]').val(data.caption_3);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionGraduationModal"]', function() {
            $('#editSectionGraduation').attr('action', '/admin/akademik/kelulusan/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kelulusan/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section_1"]').val(data.button_1);
                    $('[data-value="button_section_2"]').val(data.button_2);
                    $('[data-value="button_section_3"]').val(data.button_3);
                    $('[data-value="caption_section_1"]').val(data.caption_1);
                    $('[data-value="caption_section_2"]').val(data.caption_2);
                    $('[data-value="caption_section_3"]').val(data.caption_3);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailKenaikanSiswaModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kelulusan/detail-kenaikan-siswa/' + id,
                success: function(data) {
                    console.log(data);
                    $('[data-value="student_nama"]').val(data.student_nama);
                    $('[data-value="jurusan_nama"]').val(data.jurusan_nama);
                    $('[data-value="kelas_nama"]').val(data.kelas_nama);
                    $('[data-value="index_nama"]').val(data.index_nama);
                    $('[data-value="semester_nama"]').val(data.semester_nama);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editKenaikanSiswaModal"]', function() {
            let id = $(this).data('id');
            $('#editKenaikanSiswa').attr('action', '/admin/akademik/kelulusan/edit-kenaikan-siswa/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kelulusan/detail-kenaikan-siswa/' + id,
                success: function(data) {
                    $('[data-value="student_nama"]').html(data.student_nama);
                    $('[data-value="student_nama"]').val(data.student_id);

                    $('[data-value="jurusan_nama"]').html(data.jurusan_nama);
                    $('[data-value="jurusan_nama"]').val(data.jurusans_id);

                    $('[data-value="kelas_nama"]').html(data.kelas_nama);
                    $('[data-value="kelas_nama"]').val(data.kelases_id);

                    $('[data-value="index_nama"]').html(data.index_nama);
                    $('[data-value="index_nama"]').val(data.indexes_id);

                    $('[data-value="semester_nama"]').html(data.semester_nama);
                    $('[data-value="semester_nama"]').val(data.semesters_id);

                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteKenaikanSiswaModal"]', function() {
            let id = $(this).data('id');
            $('#deleteKenaikanSiswa').attr('action', '/admin/akademik/kelulusan/delete-kenaikan-siswa/' + id);
        });
    </script>
@endsection
