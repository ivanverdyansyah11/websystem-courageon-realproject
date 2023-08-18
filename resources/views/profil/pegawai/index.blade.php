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
                <h5 class="subtitle">Pegawai Sekolah</h5>
                <a href="{{ route('pegawai-create') }}" class="d-none d-md-inline-block button-default">Tambah
                    Pegawai</a>
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
                                    <div class="d-none d-lg-inline-block col data-value">{{ $staff->place_of_birth }},
                                        {{ $staff->date_of_birth }}</div>
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
        </div>
    </div>

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
        $(document).on('click', '[data-bs-target="#deleteManagementModal"]', function() {
            let id = $(this).data('id');
            $('#deleteManagement').attr('action', '/admin/profil/manajemen/delete/' + id);
        });
    </script>
@endsection
