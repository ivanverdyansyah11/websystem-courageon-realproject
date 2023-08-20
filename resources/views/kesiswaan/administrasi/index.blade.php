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
                <h5 class="subtitle">Tahun Ajaran Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addTahunAjaranModal">Tambah
                    Tahun Ajaran</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Tahun Ajaran</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($tahun_ajarans->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Tahun Ajaran!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($tahun_ajarans as $tahun_ajaran)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">{{ $tahun_ajaran->tahun }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailTahunAjaranModal"
                                                data-id="{{ $tahun_ajaran->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editTahunAjaranModal"
                                                data-id="{{ $tahun_ajaran->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteTahunAjaranModal"
                                                data-id="{{ $tahun_ajaran->id }}">
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
                {{ $tahun_ajarans->links() }}
            </div>
        </div>

        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Semester Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Semester</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($semesters->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Semester!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($semesters as $semester)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">{{ $semester->semester }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailSemesterModal"
                                                data-id="{{ $semester->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editSemesterModal"
                                                data-id="{{ $semester->id }}">
                                                <div class="edit-icon"></div>
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
                {{ $semesters->links() }}
            </div>
        </div>

        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Kelas Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addKelasModal">Tambah
                    Kelas</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Nama Kelas</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($kelases->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Kelas!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($kelases as $kelas)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">{{ $kelas->name }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailKelasModal"
                                                data-id="{{ $kelas->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editKelasModal"
                                                data-id="{{ $kelas->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteKelasModal"
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
                {{ $kelases->links() }}
            </div>
        </div>

        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Jurusan Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addJurusanModal">Tambah
                    Jurusan</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Nama Jurusan</div>
                            <div class="col data-header">Kode Jurusan</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($jurusans->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Jurusan!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($jurusans as $jurusan)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">{{ $jurusan->name }}</div>
                                    <div class="col data-value data-length">{{ $jurusan->code }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailJurusanModal"
                                                data-id="{{ $jurusan->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editJurusanModal"
                                                data-id="{{ $jurusan->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteJurusanModal"
                                                data-id="{{ $jurusan->id }}">
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
                {{ $jurusans->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL ADD TAHUN AJARAN --}}
    <div class="modal fade" id="addTahunAjaranModal" tabindex="-1" aria-labelledby="addTahunAjaranModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Tahun Ajaran</h3>
                <form action="{{ route('tahun-ajaran-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun">Tahun</label>
                                <input type="text" id="tahun" class="input" autocomplete="off" name="tahun">
                                @error('tahun')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Tahun Ajaran</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD TAHUN AJARAN --}}

    {{-- MODAL DETAIL TAHUN AJARAN --}}
    <div class="modal fade" id="detailTahunAjaranModal" tabindex="-1" aria-labelledby="detailTahunAjaranModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Tahun Ajaran</h3>
                <form class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun">Tahun</label>
                                <input type="text" id="tahun" class="input" autocomplete="off"
                                    data-value="tahun_ajaran" disabled>
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
    {{-- END MODAL DETAIL TAHUN AJARAN --}}

    {{-- MODAL EDIT TAHUN AJARAN --}}
    <div class="modal fade" id="editTahunAjaranModal" tabindex="-1" aria-labelledby="editTahunAjaranModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Tahun Ajaran</h3>
                <form id="editTahunAjaran" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun">Tahun</label>
                                <input type="text" id="tahun" class="input" autocomplete="off"
                                    data-value="tahun_ajaran" name="tahun">
                                @error('tahun')
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
    {{-- END MODAL EDIT TAHUN AJARAN --}}

    {{-- MODAL DELETE TAHUN AJARAN --}}
    <div class="modal fade" id="deleteTahunAjaranModal" tabindex="-1" aria-labelledby="deleteTahunAjaranModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Tahun Ajaran</h3>
                <form id="deleteTahunAjaran" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Tahun Ajaran Sekolah: Apakah Anda yakin
                        ingin
                        menghapus tahun ajaran sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan tahun ajaran sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Tahun Ajaran</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE TAHUN AJARAN --}}

    {{-- MODAL DETAIL SEMESTER --}}
    <div class="modal fade" id="detailSemesterModal" tabindex="-1" aria-labelledby="detailSemesterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Semester</h3>
                <form class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="semester">Semester</label>
                                <input type="text" id="semester" class="input" autocomplete="off"
                                    data-value="semester" disabled>
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
    {{-- END MODAL DETAIL SEMESTER --}}

    {{-- MODAL EDIT SEMESTER --}}
    <div class="modal fade" id="editSemesterModal" tabindex="-1" aria-labelledby="editSemesterModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Semester</h3>
                <form id="editSemester" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="semester">Semester</label>
                                <input type="text" id="semester" class="input" autocomplete="off"
                                    data-value="semester" name="semester">
                                @error('semester')
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
    {{-- END MODAL EDIT SEMESTER --}}

    {{-- MODAL ADD KELAS --}}
    <div class="modal fade" id="addKelasModal" tabindex="-1" aria-labelledby="addKelasModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Kelas</h3>
                <form action="{{ route('kelas-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="nama">Nama Kelas</label>
                                <input type="text" id="nama" class="input" autocomplete="off" name="name">
                                @error('name')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Kelas</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD KELAS --}}

    {{-- MODAL DETAIL KELAS --}}
    <div class="modal fade" id="detailKelasModal" tabindex="-1" aria-labelledby="detailKelasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Kelas</h3>
                <form class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="input" autocomplete="off"
                                    data-value="name_kelas" disabled>
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
    {{-- END MODAL DETAIL KELAS --}}

    {{-- MODAL EDIT KELAS --}}
    <div class="modal fade" id="editKelasModal" tabindex="-1" aria-labelledby="editKelasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Kelas</h3>
                <form id="editKelas" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="input" autocomplete="off"
                                    data-value="name_kelas" name="name">
                                @error('name')
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
    {{-- END MODAL EDIT KELAS --}}

    {{-- MODAL DELETE KELAS --}}
    <div class="modal fade" id="deleteKelasModal" tabindex="-1" aria-labelledby="deleteKelasModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Kelas</h3>
                <form id="deleteKelas" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Kelas Sekolah: Apakah Anda yakin
                        ingin
                        menghapus kelas sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan kelas sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Kelas</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE KELAS --}}

    {{-- MODAL ADD JURUSAN --}}
    <div class="modal fade" id="addJurusanModal" tabindex="-1" aria-labelledby="addJurusanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Jurusan</h3>
                <form action="{{ route('jurusan-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="nama">Nama Jurusan</label>
                        <input type="text" id="nama" class="input" autocomplete="off" name="name">
                        @error('name')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="kode">Kode Jurusan</label>
                        <input type="text" id="kode" class="input" autocomplete="off" name="code">
                        @error('code')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Kelas</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD JURUSAN --}}

    {{-- MODAL DETAIL JURUSAN --}}
    <div class="modal fade" id="detailJurusanModal" tabindex="-1" aria-labelledby="detailJurusanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Jurusan</h3>
                <form class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="nama">Nama Jurusan</label>
                        <input type="text" id="nama" class="input" autocomplete="off"
                            data-value="name_jurusan" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="kode">Kode Jurusan</label>
                        <input type="text" id="kode" class="input" autocomplete="off"
                            data-value="code_jurusan" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL JURUSAN --}}

    {{-- MODAL EDIT JURUSAN --}}
    <div class="modal fade" id="editJurusanModal" tabindex="-1" aria-labelledby="editJurusanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Jurusan</h3>
                <form id="editJurusan" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="nama">Nama Jurusan</label>
                        <input type="text" id="nama" class="input" autocomplete="off"
                            data-value="name_jurusan" name="name">
                        @error('name')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="kode">Kode Jurusan</label>
                        <input type="text" id="kode" class="input" autocomplete="off"
                            data-value="code_jurusan" name="code">
                        @error('code')
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
    {{-- END MODAL EDIT JURUSAN --}}

    {{-- MODAL DELETE JURUSAN --}}
    <div class="modal fade" id="deleteJurusanModal" tabindex="-1" aria-labelledby="deleteJurusanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Jurusan</h3>
                <form id="deleteJurusan" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Jurusan Sekolah: Apakah Anda yakin
                        ingin
                        menghapus jurusan sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan jurusan sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Jurusan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE JURUSAN --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailTahunAjaranModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-tahun-ajaran/' + id,
                success: function(data) {
                    $('[data-value="tahun_ajaran"]').val(data.tahun);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editTahunAjaranModal"]', function() {
            let id = $(this).data('id');
            $('#editTahunAjaran').attr('action', '/admin/kesiswaan/administrasi/edit-tahun-ajaran/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-tahun-ajaran/' + id,
                success: function(data) {
                    $('[data-value="tahun_ajaran"]').val(data.tahun);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteTahunAjaranModal"]', function() {
            let id = $(this).data('id');
            $('#deleteTahunAjaran').attr('action', '/admin/kesiswaan/administrasi/delete-tahun-ajaran/' + id);
        });

        $(document).on('click', '[data-bs-target="#detailSemesterModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-semester/' + id,
                success: function(data) {
                    $('[data-value="semester"]').val(data.semester);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSemesterModal"]', function() {
            let id = $(this).data('id');
            $('#editSemester').attr('action', '/admin/kesiswaan/administrasi/edit-semester/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-semester/' + id,
                success: function(data) {
                    $('[data-value="semester"]').val(data.semester);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailKelasModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-kelas/' + id,
                success: function(data) {
                    $('[data-value="name_kelas"]').val(data.name);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editKelasModal"]', function() {
            let id = $(this).data('id');
            $('#editKelas').attr('action', '/admin/kesiswaan/administrasi/edit-kelas/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-kelas/' + id,
                success: function(data) {
                    $('[data-value="name_kelas"]').val(data.name);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteKelasModal"]', function() {
            let id = $(this).data('id');
            $('#deleteKelas').attr('action', '/admin/kesiswaan/administrasi/delete-kelas/' + id);
        });

        $(document).on('click', '[data-bs-target="#detailJurusanModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-jurusan/' + id,
                success: function(data) {
                    $('[data-value="name_jurusan"]').val(data.name);
                    $('[data-value="code_jurusan"]').val(data.code);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editJurusanModal"]', function() {
            let id = $(this).data('id');
            $('#editJurusan').attr('action', '/admin/kesiswaan/administrasi/edit-jurusan/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/administrasi/detail-jurusan/' + id,
                success: function(data) {
                    $('[data-value="name_jurusan"]').val(data.name);
                    $('[data-value="code_jurusan"]').val(data.code);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteJurusanModal"]', function() {
            let id = $(this).data('id');
            $('#deleteJurusan').attr('action', '/admin/kesiswaan/administrasi/delete-jurusan/' + id);
        });
    </script>
@endsection
