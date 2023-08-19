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
                <h5 class="subtitle">Section Kurikulum</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="d-none d-md-inline-block col-2 data-value">
                                @if ($section_section->banner)
                                    <img src="{{ asset('assets/img/akademik-images/kurikulum-image/' . $section_section->banner) }}"
                                        class="img-fluid" alt="Banner Section Curriculum" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="col data-value data-length">{{ $section_section->title_section }}</div>
                            <div class="col data-value data-length">
                                {{ $section_section->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailCurriculumModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editCurriculumModal">
                                        <div class="edit-icon"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION CURRICULUM --}}
    <div class="modal fade" id="detailCurriculumModal" tabindex="-1" aria-labelledby="detailCurriculumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Kurikulum</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="banner">Banner</label>
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                alt="Banner Section Curriculum" width="80" data-value="banner_section">
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="input" autocomplete="off" rows="4" data-value="description_section" disabled></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION CURRICULUM --}}

    {{-- MODAL EDIT SECTION CURRICULUM --}}
    <div class="modal fade" id="editCurriculumModal" tabindex="-1" aria-labelledby="editCurriculumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Kurikulum</h3>
                <form id="editCurriculum" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="banner">Banner</label>
                        <div class="wrapper d-flex align-items-end">
                            <input type="hidden" name="oldImage" data-value="oldImage_section">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid tag-edit-section"
                                alt="Banner Section Curriculum" width="80" data-value="banner_section">
                            <div class="wrapper-image w-100">
                                <input type="file" id="banner" class="input-edit-section" name="banner">
                            </div>
                        </div>
                        @error('banner')
                            <p class="caption-error mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" name="title_section" autocomplete="off"
                            data-value="title_section">
                        @error('title_section')
                            <p class="caption-error mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="4"
                            data-value="description_section"></textarea>
                        @error('description')
                            <p class="caption-error mt-1">{{ $message }}</p>
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
    {{-- END MODAL EDIT SECTION CURRICULUM --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailCurriculumModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kurikulum/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                    $('[data-value="banner_section"]').attr("src",
                        "/assets/img/akademik-images/kurikulum-image/" + data.banner);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editCurriculumModal"]', function() {
            $('#editCurriculum').attr('action', '/admin/akademik/kurikulum/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/akademik/kurikulum/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                    $('[data-value="oldImage_section"]').val(data.banner);
                    $('[data-value="banner_section"]').attr("src",
                        "/assets/img/akademik-images/kurikulum-image/" + data.banner);
                }
            });
        });

        const tagEditSection = document.querySelector('.tag-edit-section');
        const inputEditSection = document.querySelector('.input-edit-section');

        inputEditSection.addEventListener('change', function() {
            tagEditSection.src = URL.createObjectURL(inputEditSection.files[0]);
        });
    </script>
@endsection
