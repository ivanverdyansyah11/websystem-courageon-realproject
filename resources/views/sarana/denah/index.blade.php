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
                <h5 class="subtitle">Section Denah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul Section</div>
                            <div class="d-none d-md-inline-block col data-header">Judul Kode</div>
                            <div class="d-none d-md-inline-block col data-header">Judul Ruangan</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center justify-content-between">
                            <div class="col data-value data-length">{{ $section->title_section }}</div>
                            <div class="d-none d-md-inline-block col data-value data-length">{{ $section->title_code }}
                            </div>
                            <div class="d-none d-md-inline-block col data-value data-length">{{ $section->title_room }}
                            </div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionDenahModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionDenahModal">
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
                <h5 class="subtitle">Denah Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addRoomModal">Tambah
                    Ruangan Denah</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Kode <span class="d-none d-md-inline-block">Denah</span></div>
                            <div class="col data-header">Nama <span class="d-none d-md-inline-block">Ruangan</span></div>
                            <div class="d-none d-md-inline-block col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($rooms->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Ruangan Denah!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($rooms as $room)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center justify-content-between">
                                    <div class="col data-value">{{ $room->code }}</div>
                                    <div class="col data-value">{{ $room->name }}</div>
                                    <div class="col d-none d-md-inline-block data-value data-length">
                                        {{ $room->description }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailRoomModal"
                                                data-id="{{ $room->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editRoomModal"
                                                data-id="{{ $room->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteRoomModal"
                                                data-id="{{ $room->id }}">
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
                {{ $rooms->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION MAP --}}
    <div class="modal fade" id="detailSectionDenahModal" tabindex="-1" aria-labelledby="detailSectionDenahModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Denah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul_section">Judul Section</label>
                        <input type="text" id="judul_section" class="input" autocomplete="off"
                            data-value="title_section" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="judul_kode">Judul Kode</label>
                        <input type="text" id="judul_kode" class="input" autocomplete="off" data-value="title_code"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="judul_ruangan">Judul Ruangan</label>
                        <input type="text" id="judul_ruangan" class="input" autocomplete="off"
                            data-value="title_room" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_section" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION MAP --}}

    {{-- MODAL EDIT SECTION MAP --}}
    <div class="modal fade" id="editSectionDenahModal" tabindex="-1" aria-labelledby="editSectionDenahModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Prasarana</h3>
                <form id="editSectionDenah" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" name="title_section" autocomplete="off"
                            data-value="title_section">
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="judul_kode">Judul Kode</label>
                        <input type="text" id="judul_kode" class="input" autocomplete="off" data-value="title_code"
                            name="title_code">
                        @error('title_code')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="judul_ruangan">Judul Ruangan</label>
                        <input type="text" id="judul_ruangan" class="input" autocomplete="off"
                            data-value="title_room" name="title_room">
                        @error('title_room')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button Label</label>
                        <input type="text" id="button" class="input" name="button" autocomplete="off"
                            data-value="button_section">
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
    {{-- END MODAL EDIT SECTION MAP --}}

    {{-- MODAL ADD ROOM MAP --}}
    <div class="modal fade" id="addRoomModal" tabindex="-1" aria-labelledby="addRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Ruangan Sekolah</h3>
                <form action="{{ route('ruangan-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="input-wrapper">
                        <label for="kode">Kode Ruangan</label>
                        <input type="text" id="kode" class="input" autocomplete="off" name="code">
                        @error('code')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="nama">Nama Ruangan</label>
                        <input type="text" id="nama" class="input" autocomplete="off" name="name">
                        @error('name')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="description" id="deskripsi" rows="4" class="input" autocomplete="off"></textarea>
                        @error('description')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Ruangan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD ROOM MAP --}}

    {{-- MODAL DETAIL ROOM MAP --}}
    <div class="modal fade" id="detailRoomModal" tabindex="-1" aria-labelledby="detailRoomModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Ruangan Sekolah</h3>
                <form id="detailRoom" method="post" class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="kode">Kode Ruangan</label>
                        <input type="text" id="kode" class="input" autocomplete="off" data-value="code_room"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="nama">Nama Ruangan</label>
                        <input type="text" id="nama" class="input" autocomplete="off" data-value="name_room"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_room" disabled id="deskripsi" rows="4" class="input" autocomplete="off"></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL ROOM MAP --}}

    {{-- MODAL EDIT ROOM MAP --}}
    <div class="modal fade" id="editRoomModal" tabindex="-1" aria-labelledby="editRoomModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Kontak Sekolah</h3>
                <form id="editRoom" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="kode">Kode Ruangan</label>
                        <input type="text" id="kode" class="input" autocomplete="off" data-value="code_room"
                            name="code">
                        @error('code')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="nama">Nama Ruangan</label>
                        <input type="text" id="nama" class="input" autocomplete="off" data-value="name_room"
                            name="name">
                        @error('name')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea data-value="description_room" name="description" id="deskripsi" rows="4" class="input"
                            autocomplete="off"></textarea>
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
    {{-- END MODAL EDIT ROOM MAP --}}

    {{-- MODAL DELETE ROOM MAP --}}
    <div class="modal fade" id="deleteRoomModal" tabindex="-1" aria-labelledby="deleteRoomModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Ruangan Sekolah</h3>
                <form id="deleteRoom" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Ruangan Sekolah: Apakah Anda yakin ingin
                        menghapus ruangan sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan ruangan sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Ruangan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE ROOM MAP --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionDenahModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/denah/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="title_code"]').val(data.title_code);
                    $('[data-value="title_room"]').val(data.title_room);
                    $('[data-value="button_section"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionDenahModal"]', function() {
            $('#editSectionDenah').attr('action', '/admin/sarana-prasarana/denah/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/denah/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="title_code"]').val(data.title_code);
                    $('[data-value="title_room"]').val(data.title_room);
                    $('[data-value="button_section"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailRoomModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/denah/detail-ruangan/' + id,
                success: function(data) {
                    $('[data-value="code_room"]').val(data.code);
                    $('[data-value="name_room"]').val(data.name);
                    $('[data-value="description_room"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editRoomModal"]', function() {
            let id = $(this).data('id');
            $('#editRoom').attr('action', '/admin/sarana-prasarana/denah/edit-ruangan/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/sarana-prasarana/denah/detail-ruangan/' + id,
                success: function(data) {
                    $('[data-value="code_room"]').val(data.code);
                    $('[data-value="name_room"]').val(data.name);
                    $('[data-value="description_room"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteRoomModal"]', function() {
            let id = $(this).data('id');
            $('#deleteRoom').attr('action', '/admin/sarana-prasarana/denah/delete-ruangan/' + id);
        });

        const tagAddIcon = document.querySelector('.tag-add-icon');
        const inputAddIcon = document.querySelector('.input-add-icon');

        const tagEditIcon = document.querySelector('.tag-edit-icon');
        const inputEditIcon = document.querySelector('.input-edit-icon');

        inputAddIcon.addEventListener('change', function() {
            tagAddIcon.src = URL.createObjectURL(inputAddIcon.files[0]);
        });

        inputEditIcon.addEventListener('change', function() {
            tagEditIcon.src = URL.createObjectURL(inputEditIcon.files[0]);
        });
    </script>
@endsection
