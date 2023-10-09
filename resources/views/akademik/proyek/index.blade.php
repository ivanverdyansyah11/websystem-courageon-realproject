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
                <h5 class="subtitle">Section Proyek 5P</h5>
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
                            <div class="col data-value data-length">{{ $section_proyek->title_section }}</div>
                            <div class="d-none col data-value data-length">{!! $section_proyek->description !!}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionProyekModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionProyekModal">
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
                <h5 class="subtitle">Proyek 5P Sekolah</h5>
                <div class="wrapper d-flex gap-2">
                    <form class="form-search d-inline-block" method="POST" action="{{ route('proyek-search') }}">
                        @csrf
                        <div class="wrapper-search">
                            <input type="text" class="input-search" placeholder=" " name="search">
                            <label class="d-flex align-items-center">
                                <img src="{{ asset('assets/img/icon/search.svg') }}" alt="Searcing Icon"
                                    class="img-fluid search-icon">
                                <p class="ms-2">Cari proyek..</p>
                            </label>
                        </div>
                    </form>
                    <a href="{{ route('proyek-tambah') }}" class="d-none d-md-inline-block button-default">Tambah
                        Proyek</a>
                    <a href="{{ route('proyek-generate') }}"
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
                            <div class="d-none d-md-inline-block col-2 data-header">Gambar</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Proyek</span></div>
                            <div class="col data-header">Topik</div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($projects->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Proyek!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($projects as $project)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="d-none d-md-inline-block col-2 data-value">
                                        @if ($project->image)
                                            <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $project->image) }}"
                                                class="img-fluid" alt="Image Project" width="80">
                                        @else
                                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                                alt="Image Not Found" width="80">
                                        @endif
                                    </div>
                                    <div class="col data-value data-length">{{ $project->title }}</div>
                                    <div class="col data-value data-length">{{ $project->topic }}</div>
                                    <div class="d-none col data-value data-length">
                                        {!! $project->description !!}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('proyek-detail', $project->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('proyek-edit', $project->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteProjectModal"
                                                data-id="{{ $project->id }}">
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
                {{ $projects->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION PROYEK --}}
    <div class="modal fade" id="detailSectionProyekModal" tabindex="-1" aria-labelledby="detailSectionProyekModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Program</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="button">Button label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_section" disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaDetailSection">{{ $section_proyek->description }}</textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION PROYEK --}}

    {{-- MODAL EDIT SECTION PROYEK --}}
    <div class="modal fade" id="editSectionProyekModal" tabindex="-1" aria-labelledby="editSectionProyekModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Proyek</h3>
                <form id="editSectionProyek" method="post" class="form d-flex flex-column justify-content-center">
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
                        <label for="button">Button label</label>
                        <input type="text" id="button" class="input" autocomplete="off"
                            data-value="button_section" required name="button">
                        @error('button')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaEditSection" required name="description">{{ $section_proyek->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION PROYEK --}}

    {{-- MODAL DELETE PROYEK --}}
    <div class="modal fade" id="deleteProjectModal" tabindex="-1" aria-labelledby="deleteProjectModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Proyek Sekolah</h3>
                <form id="deleteProject" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Proyek Sekolah: Apakah Anda yakin ingin
                        menghapus proyek sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan proyek sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Proyek</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE PROYEK --}}

    <script>
        const textareaDetailSection = new RichTextEditor("#textareaDetailSection");
        const textareaEditSection = new RichTextEditor("#textareaEditSection");

        $(document).on('click', '[data-bs-target="#detailSectionProyekModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/akademik/proyek/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                    $('[data-value="button_section"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionProyekModal"]', function() {
            $('#editSectionProyek').attr('action', '/admin/akademik/proyek/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/proyek/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                    $('[data-value="button_section"]').val(data.button);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteProjectModal"]', function() {
            let id = $(this).data('id');
            $('#deleteProject').attr('action', '/admin/akademik/proyek/delete-proyek/' + id);
        });
    </script>
@endsection
