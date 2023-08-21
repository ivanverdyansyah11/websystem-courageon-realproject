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
                                {{ $section_service->description }}</div>
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

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Pelayanan Karir Sekolah</h5>
                <a href="{{ route('pelayanan-karir-create') }}" class="d-none d-md-inline-block button-default">Tambah
                    Pelayanan Karir</a>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col data-header col-2">Image</span></div>
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
    </div>

    {{-- MODAL DETAIL SECTION HEADER --}}
    <div class="modal fade" id="detailSectionModal" tabindex="-1" aria-labelledby="detailSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Header</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off" data-value="button_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" rows="4" class="input" autocomplete="off" data-value="description_section"
                            disabled></textarea>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Header</h3>
                <form id="editSection" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" name="title_section">
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_section" name="button">
                        @error('button')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" rows="4" class="input" autocomplete="off" data-value="description_section"
                            name="description"></textarea>
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

    <script>
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
    </script>
@endsection
