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
                <h5 class="subtitle">Section Prestasi</h5>
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
                            <div class="col data-value data-length">{{ $section_achievement->title_section }}</div>
                            <div class="d-none col data-value data-length">{!! $section_achievement->description !!}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionAchievementModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionAchievementModal">
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
                <h5 class="subtitle">Prestasi Sekolah</h5>
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST" action="{{ route('prestasi-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari prestasi..</p>
                            </label>
                        </div>
                    </form>
                    <a href="{{ route('prestasi-create') }}" class="d-none d-md-inline-block button-default">Tambah
                        Prestasi</a>
                    <a href="{{ route('prestasi-generate') }}"
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
                            <div class="col data-header">Nama <span class="d-none d-md-inline-block">Kegiatan</span></div>
                            <div class="col data-header">Tanggal</div>
                            <div class="d-none d-md-inline-block col data-header">Hasil</div>
                            <div class="d-none d-md-inline-block col data-header">Tingkat</div>
                            <div class="d-none d-md-inline-block col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($allPrestasi->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Prestasi!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($allPrestasi as $prestasi)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">{{ $prestasi->nama_kegiatan }}</div>
                                    <div class="col data-value data-length">{{ $prestasi->tanggal }}</div>
                                    <div class="d-none col data-value data-length">{{ $prestasi->hasil }}
                                    </div>
                                    <div class="d-none col data-value data-length">{{ $prestasi->tingkat }}</div>
                                    <div class="d-none col data-value data-length">{!! $prestasi->deskripsi !!}
                                    </div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('prestasi-detail', $prestasi->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('prestasi-edit', $prestasi->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteAchievementModal"
                                                data-id="{{ $prestasi->id }}">
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
                {{ $allPrestasi->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION ACHIEVEMENT --}}
    <div class="modal fade" id="detailSectionAchievementModal" tabindex="-1"
        aria-labelledby="detailSectionAchievementModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Ekstrakurikuler</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
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
                        <textarea id="textareaDetailHeader">{{ $section_achievement->description }}</textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION ACHIEVEMENT --}}

    {{-- MODAL EDIT SECTION ACHIEVEMENT --}}
    <div class="modal fade" id="editSectionAchievementModal" tabindex="-1"
        aria-labelledby="editSectionAchievementModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Ekstrakurikuler</h3>
                <form id="editSectionAchievement" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
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
                        <textarea id="textareaEditHeader" required name="description">{{ $section_achievement->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION ACHIEVEMENT --}}

    {{-- MODAL DELETE ACHIEVEMENT --}}
    <div class="modal fade" id="deleteAchievementModal" tabindex="-1" aria-labelledby="deleteAchievementModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Prestasi Sekolah</h3>
                <form id="deleteAchievement" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Prestasi Sekolah: Apakah Anda yakin
                        ingin
                        menghapus prestasi sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan prestasi sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Prestasi</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE ACHIEVEMENT --}}

    <script>
        const textareaDetailHeader = new RichTextEditor("#textareaDetailHeader");
        const textareaEditHeader = new RichTextEditor("#textareaEditHeader");

        $(document).on('click', '[data-bs-target="#detailSectionAchievementModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/prestasi/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section"]').val(data.button);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionAchievementModal"]', function() {
            $('#editSectionAchievement').attr('action', '/admin/kesiswaan/prestasi/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/prestasi/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section"]').val(data.button);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteAchievementModal"]', function() {
            let id = $(this).data('id');
            $('#deleteAchievement').attr('action', '/admin/kesiswaan/prestasi/delete-prestasi/' + id);
        });
    </script>
@endsection
