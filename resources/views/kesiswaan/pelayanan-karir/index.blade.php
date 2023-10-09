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
                <h5 class="subtitle">Section Pelayanan Karir</h5>
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
                            <div class="col data-value data-length">{{ $section_service->title_section }}</div>
                            <div class="d-none col data-value data-length">
                                {!! $section_service->description !!}</div>
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
                <h5 class="subtitle">Pelayanan Karir Sekolah</h5>
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST" action="{{ route('pelayanan-karir-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari pelayanan karir..</p>
                            </label>
                        </div>
                    </form>
                    <a href="{{ route('pelayanan-karir-create') }}" class="d-none d-md-inline-block button-default">Tambah
                        Pelayanan Karir</a>
                    <a href="{{ route('pelayanan-karir-generate') }}"
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
                            <div class="d-none d-md-inline-block col data-header col-2">Dokumentasi</span></div>
                            <div class="col data-header">Siswa</div>
                            <div class="col data-header">Tanggal</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($pelayanan_karir->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Pelayanan Karir!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($pelayanan_karir as $pelayanan)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="d-none d-md-inline-block col-2 data-value">
                                        @if ($pelayanan->dokumentasi)
                                            <img src="{{ asset('assets/img/kesiswaan-images/pelayanan-karir-image/' . $pelayanan->dokumentasi) }}"
                                                class="img-fluid" alt="Image Pelayanan Karir" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    @foreach ($students as $student)
                                        @if ($student->id === $pelayanan->students_id)
                                            <div class="col data-value data-length">{{ $student->nama_lengkap }}</div>
                                        @endif
                                    @endforeach
                                    <div class="col data-value data-length">{{ $pelayanan->tanggal }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('pelayanan-karir-detail', $pelayanan->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('pelayanan-karir-edit', $pelayanan->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deletePelayananKarirModal"
                                                data-id="{{ $pelayanan->id }}">
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
                {{ $pelayanan_karir->links() }}
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Pembinaan Siswa Sekolah</h5>
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST"
                        action="{{ route('pembinaan-siswa-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari pembinaan siswa..</p>
                            </label>
                        </div>
                    </form>
                    <a href="{{ route('pembinaan-siswa-create') }}"
                        class="d-none d-md-inline-block button-default">Tambah
                        Pembinaan Siswa</a>
                    <a href="{{ route('pembinaan-siswa-generate') }}"
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
                            <div class="d-none d-md-inline-block col data-header col-2">Dokumentasi</span></div>
                            <div class="col data-header">Siswa</div>
                            <div class="col data-header">Tanggal</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($pembinaan_siswa->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Pembinaan Siswa!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($pembinaan_siswa as $pembinaan)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="d-none d-md-inline-block col-2 data-value">
                                        @if ($pembinaan->dokumentasi)
                                            <img src="{{ asset('assets/img/kesiswaan-images/pembinaan-siswa-image/' . $pembinaan->dokumentasi) }}"
                                                class="img-fluid" alt="Image Pelayanan Karir" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    @foreach ($students as $student)
                                        @if ($student->id === $pembinaan->students_id)
                                            <div class="col data-value data-length">{{ $student->nama_lengkap }}</div>
                                        @endif
                                    @endforeach
                                    <div class="col data-value data-length">{{ $pembinaan->tanggal }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('pembinaan-siswa-detail', $pembinaan->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('pembinaan-siswa-edit', $pembinaan->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deletePembinaanSiswaModal"
                                                data-id="{{ $pembinaan->id }}">
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
                {{ $pembinaan_siswa->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION HEADER --}}
    <div class="modal fade" id="detailSectionModal" tabindex="-1" aria-labelledby="detailSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Header</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_section" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaDetailHeader">{{ $section_service->description }}</textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION HEADER --}}

    {{-- MODAL EDIT SECTION HEADER --}}
    <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Header</h3>
                <form id="editSection" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" required name="title_section">
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_section" required name="button">
                        @error('button')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaEditHeader" required name="description">{{ $section_service->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION HEADER --}}

    {{-- MODAL DELETE PELAYANAN KARIR --}}
    <div class="modal fade" id="deletePelayananKarirModal" tabindex="-1"
        aria-labelledby="deletePelayananKarirModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Pelayanan Karir Sekolah</h3>
                <form id="deletePelayananKarir" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Pelayanan Karir Sekolah: Apakah Anda yakin
                        ingin
                        menghapus pelayanan karir sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan pelayanan karir sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Pelayanan Karir</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE PELAYANAN KARIR --}}

    {{-- MODAL DELETE PEMBINAAN SISWA --}}
    <div class="modal fade" id="deletePembinaanSiswaModal" tabindex="-1"
        aria-labelledby="deletePembinaanSiswaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Pembinaan Siswa Sekolah</h3>
                <form id="deletePembinaanSiswa" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Pembinaan Siswa Sekolah: Apakah Anda yakin
                        ingin
                        menghapus pembinaan siswa sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan pembinaan siswa sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Pembinaan Siswa</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE PEMBINAAN SISWA --}}

    <script>
        const textareaDetailHeader = new RichTextEditor("#textareaDetailHeader");
        const textareaEditHeader = new RichTextEditor("#textareaEditHeader");

        $(document).on('click', '[data-bs-target="#detailSectionModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/pelayanan-karir/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                    $('[data-value="button_section"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionModal"]', function() {
            $('#editSection').attr('action', '/admin/kesiswaan/pelayanan-karir/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/pelayanan-karir/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                    $('[data-value="button_section"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deletePelayananKarirModal"]', function() {
            let id = $(this).data('id');
            $('#deletePelayananKarir').attr('action', '/admin/kesiswaan/pelayanan-karir/delete-pelayanan-karir/' +
                id);
        });

        $(document).on('click', '[data-bs-target="#deletePembinaanSiswaModal"]', function() {
            let id = $(this).data('id');
            $('#deletePembinaanSiswa').attr('action', '/admin/kesiswaan/pelayanan-karir/delete-pembinaan-siswa/' +
                id);
        });
    </script>
@endsection
