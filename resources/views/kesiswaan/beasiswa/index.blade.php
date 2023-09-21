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
                <h5 class="subtitle">Section Beasiswa</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="d-none col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_beasiswa->title_section }}</div>
                            <div class="d-none col data-value data-length">
                                {{ $section_beasiswa->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionModal">
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
                <h5 class="subtitle">Beasiswa Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addBeasiswaModal">Tambah
                    Beasiswa</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Nama</div>
                            <div class="d-none col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($beasiswas->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Beasiswa!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($beasiswas as $beasiswa)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">{{ $beasiswa->title }}</div>
                                    <div class="d-none col data-value data-length">
                                        {{ $beasiswa->description }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailBeasiswaModal"
                                                data-id="{{ $beasiswa->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editBeasiswaModal"
                                                data-id="{{ $beasiswa->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteBeasiswaModal"
                                                data-id="{{ $beasiswa->id }}">
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
                {{ $beasiswas->links() }}
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Penerima Beasiswa Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addPenerimaBeasiswaModal">Tambah
                    Penerima Beasiswa</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Nama</div>
                            <div class="col data-header">Jumlah Beasiswa</div>
                            <div class="d-none d-md-inline-block col data-header">Jenis Beasiswa</div>
                            <div class="d-none d-md-inline-block col data-header">Digunakan Untuk</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($penerima_beasiswa->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Penerima Beasiswa!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($penerima_beasiswa as $beasiswa)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    @foreach ($students as $student)
                                        @if ($student->id === $beasiswa->students_id)
                                            <div class="col data-value data-length">{{ $student->nama_lengkap }}</div>
                                        @endif
                                    @endforeach
                                    <div class="col data-value data-length">Rp. {{ $beasiswa->jumlah_beasiswa }}</div>
                                    @foreach ($allBeasiswa as $singleBeasiswa)
                                        @if ($singleBeasiswa->id === $beasiswa->beasiswas_id)
                                            <div class="col data-value data-length">{{ $singleBeasiswa->title }}</div>
                                        @endif
                                    @endforeach
                                    <div class="d-none col data-value data-length">{{ $beasiswa->digunakan_untuk }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailPenerimaBeasiswaModal"
                                                data-id="{{ $beasiswa->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editPenerimaBeasiswaModal"
                                                data-id="{{ $beasiswa->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deletePenerimaBeasiswaModal"
                                                data-id="{{ $beasiswa->id }}">
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
                {{ $penerima_beasiswa->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION --}}
    <div class="modal fade" id="detailSectionModal" tabindex="-1" aria-labelledby="detailSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Beasiswa</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaDetailHeader">{{ $section_beasiswa->description }}</textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION --}}

    {{-- MODAL EDIT SECTION --}}
    <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Beasiswa</h3>
                <form id="editSection" method="post" class="form d-flex flex-column justify-content-center">
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
                        <textarea id="textareaEditHeader" name="description">{{ $section_beasiswa->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION --}}

    {{-- MODAL ADD BEASISWA --}}
    <div class="modal fade" id="addBeasiswaModal" tabindex="-1" aria-labelledby="addBeasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Beasiswa Sekolah</h3>
                <form action="{{ route('beasiswa-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="name">Nama Beasiswa</label>
                        <input type="text" id="name" class="input" autocomplete="off" name="title">
                        @error('title')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_section" name="description" class="input" autocomplete="off" id="deskripsi"
                            rows="4"></textarea>
                        @error('description')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Beasiswa</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD BEASISWA --}}

    {{-- MODAL DETAIL BEASISWA --}}
    <div class="modal fade" id="detailBeasiswaModal" tabindex="-1" aria-labelledby="detailBeasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Beasiswa Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="name">Nama Beasiswa</label>
                        <input type="text" id="name" class="input" autocomplete="off"
                            data-value="title_beasiswa" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_beasiswa" disabled class="input" autocomplete="off" id="deskripsi"
                            rows="4"></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL BEASISWA --}}

    {{-- MODAL EDIT BEASISWA --}}
    <div class="modal fade" id="editBeasiswaModal" tabindex="-1" aria-labelledby="editBeasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Beasiswa Sekolah</h3>
                <form id="editBeasiswa" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="name">Nama Beasiswa</label>
                        <input type="text" id="name" class="input" autocomplete="off"
                            data-value="title_beasiswa" name="title">
                        @error('title')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_beasiswa" data-value="description_beasiswa" name="description" class="input"
                            autocomplete="off" id="deskripsi" rows="4"></textarea>
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
    {{-- END MODAL EDIT BEASISWA --}}

    {{-- MODAL DELETE BEASISWA --}}
    <div class="modal fade" id="deleteBeasiswaModal" tabindex="-1" aria-labelledby="deleteBeasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Beasiswa Sekolah</h3>
                <form id="deleteBeasiswa" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Beasiswa Sekolah: Apakah Anda yakin ingin
                        menghapus beasiswa sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan beasiswa sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Beasiswa</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE BEASISWA --}}

    {{-- MODAL ADD PENERIMA BEASISWA --}}
    <div class="modal fade" id="addPenerimaBeasiswaModal" tabindex="-1" aria-labelledby="addPenerimaBeasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Penerima Beasiswa Sekolah</h3>
                <form action="{{ route('penerima-beasiswa-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Nama Penerima</label>
                                <select name="students_id" id="students_id" class="input">
                                    <option selected>Pilih penerima beasiswa</option>
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
                                <label for="tahun">Tahun</label>
                                <select name="tahun" id="tahun" class="input">
                                    <option selected>Pilih tahun</option>
                                    @foreach ($tahun_ajarans as $tahun_ajaran)
                                        <option value="{{ $tahun_ajaran->tahun }}">{{ $tahun_ajaran->tahun }}</option>
                                    @endforeach
                                </select>
                                @error('tahun')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_beasiswa">Jumlah Beasiswa</label>
                                <input type="text" id="jumlah_beasiswa" class="input" autocomplete="off"
                                    name="jumlah_beasiswa">
                                @error('jumlah_beasiswa')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="beasiswas_id">Jenis Beasiswa</label>
                                <select name="beasiswas_id" id="beasiswas_id" class="input">
                                    <option selected>Pilih jenis beasiswa</option>
                                    @foreach ($allBeasiswa as $beasiswa)
                                        <option value="{{ $beasiswa->id }}">{{ $beasiswa->title }}</option>
                                    @endforeach
                                </select>
                                @error('beasiswas_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="digunakan_untuk">Digunakan Untuk</label>
                                <textarea name="digunakan_untuk" class="input" autocomplete="off" id="digunakan_untuk" rows="4"></textarea>
                                @error('digunakan_untuk')
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
    {{-- END MODAL ADD PENERIMA BEASISWA --}}

    {{-- MODAL DETAIL PENERIMA BEASISWA --}}
    <div class="modal fade" id="detailPenerimaBeasiswaModal" tabindex="-1"
        aria-labelledby="detailPenerimaBeasiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Beasiswa Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Nama Penerima</label>
                                <input type="text" id="students_id" class="input" autocomplete="off"
                                    data-value="student_nama" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="nis">NIS Penerima</label>
                                <input type="text" id="nis" class="input" autocomplete="off"
                                    data-value="student_nis" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun">Tahun</label>
                                <input type="text" id="nis" class="input" autocomplete="off"
                                    data-value="tahun_beasiswa" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_beasiswa">Jumlah Beasiswa</label>
                                <input type="text" id="jumlah_beasiswa" class="input" autocomplete="off"
                                    data-value="jumlah_beasiswa" disabled>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="beasiswas_id">Jenis Beasiswa</label>
                                <input type="text" id="beasiswas_id" class="input" autocomplete="off"
                                    data-value="nama_beasiswa" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="digunakan_untuk">Digunakan Untuk</label>
                                <textarea type="text" id="digunakan_untuk" class="input" autocomplete="off" data-value="digunakan_untuk"
                                    disabled rows="4"></textarea>
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
    {{-- END MODAL DETAIL PENERIMA BEASISWA --}}

    {{-- MODAL EDIT PENERIMA BEASISWA --}}
    <div class="modal fade" id="editPenerimaBeasiswaModal" tabindex="-1"
        aria-labelledby="editPenerimaBeasiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Penerima Beasiswa Sekolah</h3>
                <form id="editPenerimaBeasiswa" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Nama Penerima</label>
                                <select name="students_id" id="students_id" class="input">
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
                                <label for="tahun">Tahun</label>
                                <select name="tahun" id="tahun" class="input">
                                    <option data-value="tahun"></option>
                                    @foreach ($tahun_ajarans as $tahun_ajaran)
                                        <option value="{{ $tahun_ajaran->tahun }}">{{ $tahun_ajaran->tahun }}</option>
                                    @endforeach
                                </select>
                                @error('tahun')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="jumlah_beasiswa">Jumlah Beasiswa</label>
                                <input type="text" id="jumlah_beasiswa" class="input" autocomplete="off"
                                    name="jumlah_beasiswa" data-value="jumlah_beasiswa">
                                @error('jumlah_beasiswa')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="beasiswas_id">Jenis Beasiswa</label>
                                <select name="beasiswas_id" id="beasiswas_id" class="input">
                                    <option data-value="beasiswas_id"></option>
                                    @foreach ($allBeasiswa as $beasiswa)
                                        <option value="{{ $beasiswa->id }}">{{ $beasiswa->title }}</option>
                                    @endforeach
                                </select>
                                @error('beasiswas_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="digunakan_untuk">Digunakan Untuk</label>
                                <textarea name="digunakan_untuk" data-value="digunakan_untuk" class="input" autocomplete="off"
                                    id="digunakan_untuk" rows="4"></textarea>
                                @error('digunakan_untuk')
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
    {{-- END MODAL EDIT PENERIMA BEASISWA --}}

    {{-- MODAL DELETE PENERIMA BEASISWA --}}
    <div class="modal fade" id="deletePenerimaBeasiswaModal" tabindex="-1"
        aria-labelledby="deletePenerimaBeasiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Penerima Beasiswa Sekolah</h3>
                <form id="deletePenerimaBeasiswa" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Penerima Beasiswa Sekolah: Apakah Anda yakin
                        ingin
                        menghapus penerima beasiswa sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan penerima beasiswa sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Penerima</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE PENERIMA BEASISWA --}}

    <script>
        const textareaDetailHeader = new RichTextEditor("#textareaDetailHeader");
        const textareaEditHeader = new RichTextEditor("#textareaEditHeader");

        $(document).on('click', '[data-bs-target="#detailSectionModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionModal"]', function() {
            $('#editSection').attr('action', '/admin/kesiswaan/beasiswa/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailBeasiswaModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-beasiswa/' + id,
                success: function(data) {
                    $('[data-value="title_beasiswa"]').val(data.title);
                    $('[data-value="description_beasiswa"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editBeasiswaModal"]', function() {
            let id = $(this).data('id');
            $('#editBeasiswa').attr('action', '/admin/kesiswaan/beasiswa/edit-beasiswa/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-beasiswa/' + id,
                success: function(data) {
                    $('[data-value="title_beasiswa"]').val(data.title);
                    $('[data-value="description_beasiswa"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteBeasiswaModal"]', function() {
            let id = $(this).data('id');
            $('#deleteBeasiswa').attr('action', '/admin/kesiswaan/beasiswa/delete-beasiswa/' + id);
        });

        $(document).on('click', '[data-bs-target="#detailPenerimaBeasiswaModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-penerima-beasiswa/' + id,
                success: function(data) {
                    $('[data-value="student_nama"]').val(data.student_nama);
                    $('[data-value="student_nis"]').val(data.student_nis);
                    $('[data-value="tahun_beasiswa"]').val(data.tahun_beasiswa);
                    $('[data-value="jumlah_beasiswa"]').val(data.jumlah_beasiswa);
                    $('[data-value="nama_beasiswa"]').val(data.nama_beasiswa);
                    $('[data-value="digunakan_untuk"]').val(data.digunakan_untuk);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editPenerimaBeasiswaModal"]', function() {
            let id = $(this).data('id');
            $('#editPenerimaBeasiswa').attr('action', '/admin/kesiswaan/beasiswa/edit-penerima-beasiswa/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/beasiswa/detail-penerima-beasiswa/' + id,
                success: function(data) {
                    console.log(data);
                    $('[data-value="student_nama"]').val(data.students_id);
                    $('[data-value="student_nama"]').html(data.student_nama);
                    $('[data-value="tahun"]').val(data.tahun);
                    $('[data-value="tahun"]').html(data.tahun);
                    $('[data-value="beasiswas_id"]').val(data.beasiswas_id);
                    $('[data-value="beasiswas_id"]').html(data.nama_beasiswa);
                    $('[data-value="jumlah_beasiswa"]').val(data.jumlah_beasiswa);
                    $('[data-value="digunakan_untuk"]').val(data.digunakan_untuk);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deletePenerimaBeasiswaModal"]', function() {
            let id = $(this).data('id');
            $('#deletePenerimaBeasiswa').attr('action', '/admin/kesiswaan/beasiswa/delete-penerima-beasiswa/' + id);
        });
    </script>
@endsection
