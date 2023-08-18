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
                <h5 class="subtitle">Section Manajemen</h5>
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
                                        data-bs-toggle="modal" data-bs-target="#detailSectionManagementModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionManagementModal">
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
                <h5 class="subtitle">Manajemen Sekolah</h5>
                <a href="{{ route('manajemen-create') }}" class="d-none d-md-inline-block button-default">Tambah
                    Manajemen</a>
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
                    @if ($managements->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Manajemen!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($managements as $management)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center justify-content-between">
                                    <div class="d-none d-lg-inline-block col-2 data-value">
                                        @if ($management->image)
                                            <img src="{{ asset('assets/img/profil-images/manajemen-image/' . $management->image) }}"
                                                class="img-fluid" alt="Management Image" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value">{{ $management->fullname }}</div>
                                    <div class="col data-value">{{ $management->nip ? $management->nip : '-' }}</div>
                                    <div class="d-none d-lg-inline-block col data-value">{{ $management->place_of_birth }},
                                        {{ $management->date_of_birth }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('manajemen-detail', $management->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('manajemen-edit', $management->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteManagementModal"
                                                data-id="{{ $management->id }}">
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

    {{-- MODAL DETAIL SECTION MANAGEMENT --}}
    <div class="modal fade" id="detailSectionManagementModal" tabindex="-1"
        aria-labelledby="detailSectionManagementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Manajemen</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_management"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_management" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION MANAGEMENT --}}

    {{-- MODAL EDIT SECTION MANAGEMENT --}}
    <div class="modal fade" id="editSectionManagementModal" tabindex="-1"
        aria-labelledby="editSectionManagementModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Manajemen</h3>
                <form id="editSectionManagement" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_management" name="title_section">
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_management" name="button">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Close Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT SECTION MANAGEMENT --}}

    {{-- MODAL DELETE SECTION HEADER --}}
    <div class="modal fade" id="deleteManagementModal" tabindex="-1" aria-labelledby="deleteManagementModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Manajemen Sekolah</h3>
                <form id="deleteManagement" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Manajemen Sekolah: Apakah Anda yakin ingin
                        menghapus manajemen sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan manajemen sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Manajemen</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE SECTION HEADER --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionManagementModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/manajemen/detail-section',
                success: function(data) {
                    $('[data-value="title_management"]').val(data.title_section);
                    $('[data-value="button_management"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionManagementModal"]', function() {
            $('#editSectionManagement').attr('action', '/admin/profil/manajemen/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/profil/manajemen/detail-section',
                success: function(data) {
                    $('[data-value="title_management"]').val(data.title_section);
                    $('[data-value="button_management"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteManagementModal"]', function() {
            let id = $(this).data('id');
            $('#deleteManagement').attr('action', '/admin/profil/manajemen/delete/' + id);
        });
    </script>
@endsection
