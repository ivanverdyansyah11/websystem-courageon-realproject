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

        <div class="row row-gap">
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

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Kenaikan Kelas Sekolah</h5>
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST" action="{{ route('kenaikanKelas-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari kenaikan kelas..</p>
                            </label>
                        </div>
                    </form>
                    <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                        data-bs-target="#addKenaikanKelasModal">Tambah
                        Kenaikan Kelas</button>
                </div>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Gender</div>
                            <div class="col data-header">Nilai Tertinggi</div>
                            <div class="col data-header">Nilai Terendah</div>
                            <div class="col d-none d-md-inline-block data-header">Rata Rata Nilai</div>
                            <div class="d-none d-md-inline-block col data-header">Total Siswa</div>
                            <div class="d-none d-md-inline-block col data-header">Tahun Ajaran</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($kenaikan_kelas->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Laporan Kenaikan Kelas!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($kenaikan_kelas as $kelas)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">
                                        @if ($kelas->gender == 'L')
                                            <div class="col data-value data-length">Laki-Laki</div>
                                        @elseif($kelas->gender == 'P')
                                            <div class="col data-value data-length">Perempuan</div>
                                        @endif
                                    </div>
                                    <div class="col data-value data-length">{{ $kelas->nilai_tertinggi }}</div>
                                    <div class="col data-value data-length">{{ $kelas->nilai_terendah }}</div>
                                    <div class="col data-value data-length">{{ $kelas->rata_nilai }}</div>
                                    <div class="col data-value data-length">{{ $kelas->total_siswa }}</div>
                                    <div class="col data-value data-length">{{ $kelas->tahun_ajaran }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailKenaikanKelasModal"
                                                data-id="{{ $kelas->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editKenaikanKelasModal"
                                                data-id="{{ $kelas->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteKenaikanKelasModal"
                                                data-id="{{ $kelas->id }}">
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
                {{ $kenaikan_kelas->links() }}
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
                                    data-value="title_section" name="title_section" value="{{ old('title_section') }}">
                                @error('title_section')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_1">Button Label 1</label>
                                <input type="text" id="button_1" class="input" autocomplete="off"
                                    data-value="button_section_1" name="button_1" value="{{ old('button_1') }}">
                                @error('button_1')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_2">Button Label 2</label>
                                <input type="text" id="button_2" class="input" autocomplete="off"
                                    data-value="button_section_2" name="button_2" value="{{ old('button_2') }}">
                                @error('button_2')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_3">Button Label 3</label>
                                <input type="text" id="button_3" class="input" autocomplete="off"
                                    data-value="button_section_3" name="button_3" value="{{ old('button_3') }}">
                                @error('button_3')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_1">Caption 1</label>
                                <input type="text" id="caption_1" class="input" autocomplete="off"
                                    data-value="caption_section_1" name="caption_1" value="{{ old('caption_1') }}">
                                @error('caption_1')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_2">Caption 2</label>
                                <input type="text" id="caption_2" class="input" autocomplete="off"
                                    data-value="caption_section_2" name="caption_2" value="{{ old('caption_2') }}">
                                @error('caption_')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_3">Caption 3</label>
                                <input type="text" id="caption_3" class="input" autocomplete="off"
                                    data-value="caption_section_3" name="caption_3" value="{{ old('caption_3') }}">
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
                                <select name="students_id" id="students_id" class="input" required>
                                    <option value="">Pilih siswa</option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}"
                                            {{ old('students_id') == $student->id ? 'selected' : '' }}>
                                            {{ $student->nama_lengkap }}</option>
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
                                <select name="semesters_id" id="semesters_id" class="input" required>
                                    <option value="">Pilih semester</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{ $semester->id }}"
                                            {{ old('semesters_id') == $semester->id ? 'selected' : '' }}>
                                            {{ $semester->semester }}</option>
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
                                <select name="jurusans_id" id="jurusans_id" class="input" required>
                                    <option value="">Pilih jurusan</option>
                                    @foreach ($jurusans as $jurusan)
                                        <option value="{{ $jurusan->id }}"
                                            {{ old('jurusans_id') == $jurusan->id ? 'selected' : '' }}>
                                            {{ $jurusan->name }}</option>
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
                                <select name="kelases_id" id="kelases_id" class="input" required>
                                    <option value="">Pilih kelas</option>
                                    @foreach ($kelases as $kelas)
                                        <option value="{{ $kelas->id }}"
                                            {{ old('kelases_id') == $kelas->id ? 'selected' : '' }}>{{ $kelas->name }}
                                        </option>
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
                                <select name="indexes_id" id="indexes_id" class="input" required>
                                    <option value="">Pilih index</option>
                                    @foreach ($indexes as $index)
                                        <option value="{{ $index->id }}"
                                            {{ old('indexes_id') == $index->id ? 'selected' : '' }}>{{ $index->name }}
                                        </option>
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
                                <select name="students_id" id="students_id" class="input" required>
                                    <option data-value="student_nama"></option>
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
                                <select name="semesters_id" id="semesters_id" class="input" required>
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
                                <select name="jurusans_id" id="jurusans_id" class="input" required>
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
                                <select name="kelases_id" id="kelases_id" class="input" required>
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
                                <select name="indexes_id" id="indexes_id" class="input" required>
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

    {{-- MODAL ADD KENAIKAN KELAS --}}
    <div class="modal fade" id="addKenaikanKelasModal" tabindex="-1" aria-labelledby="addKenaikanKelasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Kenaikan Kelas Sekolah</h3>
                <form action="{{ route('kenaikan-kelas-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender" class="input" required>
                                    <option value="">Pilih jenis kelamin</option>
                                    <option value="L" {{ old('gender') == 'L' ? 'selected' : '' }}>Laki Laki
                                    </option>
                                    <option value="P" {{ old('gender') == 'P' ? 'selected' : '' }}>Perempuan
                                    </option>
                                </select>
                                @error('gender')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_x">Jumlah Siswa X</label>
                                <input type="number" required name="jumlah_siswa_x" value="{{ old('jumlah_siswa_x') }}"
                                    id="jumlah_siswa_x" class="input" autocomplete="off">
                                @error('jumlah_siswa_x')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_xi">Jumlah Siswa XI</label>
                                <input type="number" required name="jumlah_siswa_xi"
                                    value="{{ old('jumlah_siswa_xi') }}" id="jumlah_siswa_xi" class="input"
                                    autocomplete="off">
                                @error('jumlah_siswa_xi')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_xii">Jumlah Siswa XII</label>
                                <input type="number" required name="jumlah_siswa_xii"
                                    value="{{ old('jumlah_siswa_xii') }}" id="jumlah_siswa_xii" class="input"
                                    autocomplete="off">
                                @error('jumlah_siswa_xii')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nilai_tertinggi">Nilai Tertinggi</label>
                                <input type="number" required name="nilai_tertinggi"
                                    value="{{ old('nilai_tertinggi') }}" id="nilai_tertinggi" class="input"
                                    autocomplete="off">
                                @error('nilai_tertinggi')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nilai_terendah">Nilai Terendah</label>
                                <input type="number" required name="nilai_terendah" value="{{ old('nilai_terendah') }}"
                                    id="nilai_terendah" class="input" autocomplete="off">
                                @error('nilai_terendah')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="rata_nilai">Rata Rata Nilai</label>
                                <input type="number" required name="rata_nilai" value="{{ old('rata_nilai') }}"
                                    id="rata_nilai" class="input" autocomplete="off">
                                @error('rata_nilai')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-md-4">
                            <div class="input-wrapper">
                                <label for="total_siswa">Total Siswa</label>
                                <input type="number" required name="total_siswa" value="{{ old('total_siswa') }}"
                                    id="total_siswa" class="input" autocomplete="off">
                                @error('total_siswa')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <select required name="tahun_ajaran" id="tahun_ajaran" class="input">
                                    <option value="">Pilih tahun ajaran</option>
                                    @foreach ($tahun_ajarans as $tahun_ajaran)
                                        <option value="{{ $tahun_ajaran->tahun }}"
                                            {{ old('tahun_ajaran') == $tahun_ajaran->tahun ? 'selected' : '' }}>
                                            {{ $tahun_ajaran->tahun }}</option>
                                    @endforeach
                                </select>
                                @error('tahun_ajaran')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Kenaikan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD KENAIKAN KELAS --}}

    {{-- MODAL DETAIL KENAIKAN KELAS --}}
    <div class="modal fade" id="detailKenaikanKelasModal" tabindex="-1" aria-labelledby="detailKenaikanKelasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Kenaikan Kelas Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="gender">Jenis Kelamin</label>
                                <input type="text" disabled data-value="gender" id="gender" class="input"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_x">Jumlah Siswa X</label>
                                <input type="text" disabled data-value="jumlah_siswa_x" id="jumlah_siswa_x"
                                    class="input" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_xi">Jumlah Siswa XI</label>
                                <input type="text" disabled data-value="jumlah_siswa_xi" id="jumlah_siswa_xi"
                                    class="input" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_xii">Jumlah Siswa XII</label>
                                <input type="text" disabled data-value="jumlah_siswa_xii" id="jumlah_siswa_xii"
                                    class="input" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nilai_tertinggi">Nilai Tertinggi</label>
                                <input type="text" data-value="nilai_tertinggi" id="nilai_tertinggi" class="input"
                                    autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nilai_terendah">Nilai Terendah</label>
                                <input type="text" data-value="nilai_terendah" id="nilai_terendah" class="input"
                                    autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="rata_nilai">Rata Rata Nilai</label>
                                <input type="text" data-value="rata_nilai" id="rata_nilai" class="input"
                                    autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-md-4">
                            <div class="input-wrapper">
                                <label for="total_siswa">Total Siswa</label>
                                <input type="text" data-value="total_siswa" id="total_siswa" class="input"
                                    autocomplete="off" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <input type="text" data-value="tahun_ajaran" id="tahun_ajaran" class="input"
                                    autocomplete="off" disabled>
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
    </div>
    </div>
    {{-- END MODAL DETAIL KENAIKAN KELAS --}}

    {{-- MODAL EDIT KENAIKAN KELAS --}}
    <div class="modal fade" id="editKenaikanKelasModal" tabindex="-1" aria-labelledby="editKenaikanKelasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Kenaikan Kelas Sekolah</h3>
                <form id="editKenaikanKelas" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="gender">Jenis Kelamin</label>
                                <select name="gender" id="gender_select" class="input" name="gender"
                                    data-value="gender_select" required>
                                </select>
                                @error('gender')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_x">Jumlah Siswa X</label>
                                <input type="number" name="jumlah_siswa_x" data-value="jumlah_siswa_x"
                                    id="jumlah_siswa_x" class="input" autocomplete="off" required>
                                @error('jumlah_siswa_x')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_xi">Jumlah Siswa XI</label>
                                <input type="number" name="jumlah_siswa_xi" data-value="jumlah_siswa_xi"
                                    id="jumlah_siswa_xi" class="input" autocomplete="off" required>
                                @error('jumlah_siswa_xi')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_siswa_xii">Jumlah Siswa XII</label>
                                <input type="number" name="jumlah_siswa_xii" data-value="jumlah_siswa_xii"
                                    id="jumlah_siswa_xii" class="input" autocomplete="off" required>
                                @error('jumlah_siswa_xii')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nilai_tertinggi">Nilai Tertinggi</label>
                                <input type="number" data-value="nilai_tertinggi" name="nilai_tertinggi"
                                    id="nilai_tertinggi" class="input" autocomplete="off" required>
                                @error('nilai_tertinggi')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nilai_terendah">Nilai Terendah</label>
                                <input type="number" data-value="nilai_terendah" name="nilai_terendah"
                                    id="nilai_terendah" class="input" autocomplete="off" required>
                                @error('nilai_terendah')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="rata_nilai">Rata Rata Nilai</label>
                                <input type="number" data-value="rata_nilai" name="rata_nilai" id="rata_nilai"
                                    class="input" autocomplete="off" required>
                                @error('rata_nilai')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="total_siswa">Total Siswa</label>
                                <input type="number" data-value="total_siswa" name="total_siswa" id="total_siswa"
                                    class="input" autocomplete="off" required>
                                @error('total_siswa')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <select name="tahun_ajaran" id="tahun_ajaran" class="input" required>
                                    <option data-value="tahun_ajaran"></option>
                                    @foreach ($tahun_ajarans as $tahun_ajaran)
                                        <option value="{{ $tahun_ajaran->tahun }}">{{ $tahun_ajaran->tahun }}</option>
                                    @endforeach
                                </select>
                                @error('tahun_ajaran')
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
    {{-- END MODAL EDIT KENAIKAN KELAS --}}

    {{-- MODAL DELETE KENAIKAN KELAS --}}
    <div class="modal fade" id="deleteKenaikanKelasModal" tabindex="-1" aria-labelledby="deleteKenaikanKelasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Kenaikan Kelas Sekolah</h3>
                <form id="deleteKenaikanKelas" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Kenaikan Kelas Sekolah: Apakah Anda yakin
                        ingin
                        menghapus kenaikan kelas sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan kenaikan kelas sekolah akan dihapus secara permanen dari
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
    {{-- END MODAL DELETE KENAIKAN KELAS --}}

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
                    $('[data-value="student_nama"]').val(data.students_id);
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


        $(document).on('click', '[data-bs-target="#detailKenaikanKelasModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kelulusan/detail-kenaikan-kelas/' + id,
                success: function(data) {
                    if (data.gender == 'L') {
                        $('[data-value="gender"]').val('Laki-Laki');
                    } else {
                        $('[data-value="gender"]').val('Perempuan');
                    }
                    $('[data-value="jumlah_siswa_x"]').val(data.jumlah_siswa_x);
                    $('[data-value="jumlah_siswa_xi"]').val(data.jumlah_siswa_xi);
                    $('[data-value="jumlah_siswa_xii"]').val(data.jumlah_siswa_xii);
                    $('[data-value="nilai_tertinggi"]').val(data.nilai_tertinggi);
                    $('[data-value="nilai_terendah"]').val(data.nilai_terendah);
                    $('[data-value="rata_nilai"]').val(data.rata_nilai);
                    $('[data-value="total_siswa"]').val(data.total_siswa);
                    $('[data-value="tahun_ajaran"]').val(data.tahun_ajaran);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editKenaikanKelasModal"]', function() {
            let id = $(this).data('id');
            $('#gender_select').children().remove();
            $('#editKenaikanKelas').attr('action', '/admin/akademik/kelulusan/edit-kenaikan-kelas/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kelulusan/detail-kenaikan-kelas/' + id,
                success: function(data) {
                    if (data.gender == 'L') {
                        $('#gender_select').append(`<option selected value="` + data.gender + `">
                                            Laki-Laki
                                      </option>`);
                        $('#gender_select').append(`<option value="P">
                                            Perempuan
                                      </option>`);
                    } else {
                        $('#gender_select').append(`<option selected value="` + data.gender + `">
                                            Perempuan
                                      </option>`);
                        $('#gender_select').append(`<option value="L">
                                            Laki-Laki
                                      </option>`);
                    }
                    $('[data-value="jumlah_siswa_x"]').val(data.jumlah_siswa_x);
                    $('[data-value="jumlah_siswa_xi"]').val(data.jumlah_siswa_xi);
                    $('[data-value="jumlah_siswa_xii"]').val(data.jumlah_siswa_xii);
                    $('[data-value="nilai_tertinggi"]').val(data.nilai_tertinggi);
                    $('[data-value="nilai_terendah"]').val(data.nilai_terendah);
                    $('[data-value="rata_nilai"]').val(data.rata_nilai);
                    $('[data-value="total_siswa"]').val(data.total_siswa);
                    $('[data-value="tahun_ajaran"]').val(data.tahun_ajaran);
                    $('[data-value="tahun_ajaran"]').html(data.tahun_ajaran);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteKenaikanKelasModal"]', function() {
            let id = $(this).data('id');
            $('#deleteKenaikanKelas').attr('action', '/admin/akademik/kelulusan/delete-kenaikan-kelas/' + id);
        });
    </script>
@endsection
