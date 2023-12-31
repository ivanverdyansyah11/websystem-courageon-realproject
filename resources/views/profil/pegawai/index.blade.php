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
                <h5 class="subtitle">Section Pegawai</h5>
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
                                        data-bs-toggle="modal" data-bs-target="#detailSectionStaffModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionStaffModal">
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
                <h5 class="subtitle">Pegawai Sekolah</h5>
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST" action="{{ route('pegawai-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari pegawai..</p>
                            </label>
                        </div>
                    </form>
                    <a href="{{ route('pegawai-create') }}" class="d-none d-md-inline-block button-default">Tambah
                        Pegawai</a>
                    <a href="{{ route('pegawai-generate') }}"
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
                            <div class="d-none d-lg-inline-block col-2 data-header">Profil</div>
                            <div class="col data-header">Nama <span class="d-none d-md-inline-block">Lengkap</span></div>
                            <div class="col data-header">NIP</div>
                            <div class="d-none d-lg-inline-block col data-header">Tempat, Tanggal Lahir</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($staffs->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Pegawai!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($staffs as $staff)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center justify-content-between">
                                    <div class="d-none d-lg-inline-block col-2 data-value">
                                        @if ($staff->image)
                                            <img src="{{ asset('assets/img/profil-images/pegawai-image/' . $staff->image) }}"
                                                class="img-fluid" alt="Staff Image" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value">{{ $staff->fullname }}</div>
                                    <div class="col data-value">{{ $staff->nip ? $staff->nip : '-' }}</div>
                                    <div class="d-none d-lg-inline-block col data-value">
                                        @if ($staff->place_of_birth)
                                            {{ $staff->place_of_birth }}
                                            @if ($staff->date_of_birth)
                                                ,
                                            @endif
                                        @endif
                                        @if ($staff->date_of_birth)
                                            {{ $staff->date_of_birth }}
                                        @endif
                                        @if (!$staff->place_of_birth && !$staff->date_of_birth)
                                            -
                                        @endif
                                    </div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('pegawai-detail', $staff->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('pegawai-edit', $staff->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deletestaffModal"
                                                data-id="{{ $staff->id }}">
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
                {{ $staffs->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION HEADER --}}
    <div class="modal fade" id="detailSectionStaffModal" tabindex="-1" aria-labelledby="detailSectionStaffModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Staff</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_staff"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_staff" disabled>
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
    <div class="modal fade" id="editSectionStaffModal" tabindex="-1" aria-labelledby="editSectionStaffModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Staff</h3>
                <form id="editSectionStaff" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_staff"
                            name="title_section" required>
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_staff" name="button" required>
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
    {{-- END MODAL EDIT SECTION HEADER --}}

    {{-- MODAL DELETE SECTION PEGAWAI --}}
    <div class="modal fade" id="deletestaffModal" tabindex="-1" aria-labelledby="deletestaffModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Pegawai Sekolah</h3>
                <form id="deletestaff" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Pegawai Sekolah: Apakah Anda yakin ingin
                        menghapus pegawai sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan pegawai sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Pegawai</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE SECTION PEGAWAI --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionStaffModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/pegawai/detail-section',
                success: function(data) {
                    $('[data-value="title_staff"]').val(data.title_section);
                    $('[data-value="button_staff"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionStaffModal"]', function() {
            $('#editSectionStaff').attr('action', '/admin/profil/pegawai/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/profil/pegawai/detail-section',
                success: function(data) {
                    $('[data-value="title_staff"]').val(data.title_section);
                    $('[data-value="button_staff"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deletestaffModal"]', function() {
            let id = $(this).data('id');
            $('#deletestaff').attr('action', '/admin/profil/pegawai/delete/' + id);
        });
    </script>
@endsection
