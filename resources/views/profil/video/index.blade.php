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
                <h5 class="subtitle">Section Video</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="col data-header">Button</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_video->title }}</div>
                            <div class="col
                                data-value data-length">
                                {!! $section_video->button !!}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionVideoModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionVideoModal">
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
                <h5 class="subtitle">Video Sekolah</h5>
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addVideoModal">Tambah
                    Video</button>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Link</div>
                        </div>
                    </div>
                    @foreach ($videos as $video)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center">
                                <div class="col data-value data-length">
                                    {!! $video->link !!}</div>
                                <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                    <div class="wrapper-action d-flex">
                                        <button type="button"
                                            class="button-action button-detail d-flex justify-content-center align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#detailVideoModal"
                                            data-id="{{ $video->id }}">
                                            <div class="detail-icon"></div>
                                        </button>
                                        <button type="button"
                                            class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#editVideoModal"
                                            data-id="{{ $video->id }}">
                                            <div class="edit-icon"></div>
                                        </button>
                                        <button type="button"
                                            class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                            data-bs-toggle="modal" data-bs-target="#deleteVideoModal"
                                            data-id="{{ $video->id }}">
                                            <div class="delete-icon"></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="col-12 d-flex justify-content-end mt-4">
                        {{ $videos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION VIDEO --}}
    <div class="modal fade" id="detailSectionVideoModal" tabindex="-1" aria-labelledby="detailSectionVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Video</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Section</label>
                        <input type="text" id="title" class="input" autocomplete="off" data-value="title" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label>Button</label>
                        <input type="text" id="button" class="input" autocomplete="off" data-value="button" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup
                            Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION VIDEO --}}

    {{-- MODAL EDIT SECTION VIDEO --}}
    <div class="modal fade" id="editSectionVideoModal" tabindex="-1" aria-labelledby="editSectionVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Video</h3>
                <form id="editSectionVideo" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="title">Judul Section</label>
                        <input type="text" id="title" class="input" name="title" autocomplete="off"
                            data-value="title" required>
                        @error('title')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="button">button</label>
                        <input type="text" id="button" class="input" name="button" autocomplete="off"
                            data-value="button" required>
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
    {{-- END MODAL EDIT SECTION VIDEO --}}

    {{-- MODAL ADD VIDEO --}}
    <div class="modal fade" id="addVideoModal" tabindex="-1" aria-labelledby="addVideoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Tambah Video</h3>
                <form action="{{ route('video.store') }}" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="link">Link Video</label>
                                <input type="text" id="link" class="input" name="link" autocomplete="off"
                                    required>
                                @error('link')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Video</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD VIDEO --}}

    {{-- MODAL DETAIL VIDEO --}}
    <div class="modal fade" id="detailVideoModal" tabindex="-1" aria-labelledby="detailVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Video</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="link">Link Video</label>
                                <input type="text" id="link" class="input" autocomplete="off"
                                    data-value="link" disabled>
                            </div>
                        </div>
                        <div class="col-12 mb-4">
                            <iframe data-value="video" class="yt-video" src="" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen style="width: 100%; height: 260px;"></iframe>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup
                            Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL VIDEO --}}

    {{-- MODAL EDIT VIDEO --}}
    <div class="modal fade" id="editVideoModal" tabindex="-1" aria-labelledby="editVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Video</h3>
                <form id="editVideo" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="link">Link Video</label>
                                <input type="text" id="link" class="input" name="link" autocomplete="off"
                                    data-value="link" required>
                                @error('link')
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
    {{-- END MODAL EDIT VIDEO --}}

    {{-- MODAL DELETE VIDEO --}}
    <div class="modal fade" id="deleteVideoModal" tabindex="-1" aria-labelledby="deleteVideoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Video</h3>
                <form id="deleteVideo" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Video: Apakah Anda
                        yakin
                        ingin
                        menghapus video ini?
                        Tindakan ini tidak dapat diurungkan, dan video akan dihapus secara permanen
                        dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Video</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE VIDEO --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionVideoModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/video/detail-section',
                success: function(data) {
                    $('[data-value="title"]').val(data.title);
                    $('[data-value="button"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionVideoModal"]', function() {
            $('#editSectionVideo').attr('action', '/admin/profil/video/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/profil/video/detail-section',
                success: function(data) {
                    $('[data-value="title"]').val(data.title);
                    $('[data-value="button"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#detailVideoModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/profil/detail-video/' + id,
                success: function(data) {
                    $('[data-value="link"]').val(data.link);
                    $('[data-value="video"]').attr("src", data.link);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editVideoModal"]', function() {
            let id = $(this).data('id');
            $('#editVideo').attr('action', '/admin/profil/edit-video/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/profil/detail-video/' + id,
                success: function(data) {
                    $('[data-value="link"]').val(data.link);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteVideoModal"]', function() {
            let id = $(this).data('id');
            $('#deleteVideo').attr('action', '/admin/profil/delete-video/' + id);
        });
    </script>
@endsection
