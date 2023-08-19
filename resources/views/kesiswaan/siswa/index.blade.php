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
                <h5 class="subtitle">Section Siswa</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul Section</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_student->title_section }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionStudentModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionStudentModal">
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

    {{-- MODAL DETAIL SECTION STUDENT --}}
    <div class="modal fade" id="detailSectionStudentModal" tabindex="-1" aria-labelledby="detailSectionStudentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Siswa</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Section</label>
                                <input type="text" id="judul" class="input" autocomplete="off"
                                    data-value="title_section" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_1">Button Label 1</label>
                                <input type="text" id="button_1" class="input" autocomplete="off"
                                    data-value="button_section_1" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_2">Button Label 2</label>
                                <input type="text" id="button_2" class="input" autocomplete="off"
                                    data-value="button_section_2" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_3">Button Label 3</label>
                                <input type="text" id="button_3" class="input" autocomplete="off"
                                    data-value="button_section_3" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_1">Caption 1</label>
                                <input type="text" id="caption_1" class="input" autocomplete="off"
                                    data-value="caption_section_1" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_2">Caption 2</label>
                                <input type="text" id="caption_2" class="input" autocomplete="off"
                                    data-value="caption_section_2" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_3">Caption 3</label>
                                <input type="text" id="caption_3" class="input" autocomplete="off"
                                    data-value="caption_section_3" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION STUDENT --}}

    {{-- MODAL EDIT SECTION STUDENT --}}
    <div class="modal fade" id="editSectionStudentModal" tabindex="-1" aria-labelledby="editSectionStudentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Header</h3>
                <form id="editSectionStudent" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="judul">Judul Section</label>
                                <input type="text" id="judul" class="input" autocomplete="off"
                                    data-value="title_section" name="title_section">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_1">Button Label 1</label>
                                <input type="text" id="button_1" class="input" autocomplete="off"
                                    data-value="button_section_1" name="button_1">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_2">Button Label 2</label>
                                <input type="text" id="button_2" class="input" autocomplete="off"
                                    data-value="button_section_2" name="button_2">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="button_3">Button Label 3</label>
                                <input type="text" id="button_3" class="input" autocomplete="off"
                                    data-value="button_section_3" name="button_3">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_1">Caption 1</label>
                                <input type="text" id="caption_1" class="input" autocomplete="off"
                                    data-value="caption_section_1" name="caption_1">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_2">Caption 2</label>
                                <input type="text" id="caption_2" class="input" autocomplete="off"
                                    data-value="caption_section_2" name="caption_2">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="caption_3">Caption 3</label>
                                <input type="text" id="caption_3" class="input" autocomplete="off"
                                    data-value="caption_section_3" name="caption_3">
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
    {{-- END MODAL EDIT SECTION STUDENT --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionStudentModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/siswa/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section_1"]').val(data.button_1);
                    $('[data-value="button_section_2"]').val(data.button_2);
                    $('[data-value="button_section_3"]').val(data.button_3);
                    $('[data-value="caption_section_1"]').val(data.caption_1);
                    $('[data-value="caption_section_2"]').val(data.caption_2);
                    $('[data-value="caption_section_3"]').val(data.caption_3);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionStudentModal"]', function() {
            $('#editSectionStudent').attr('action', '/admin/kesiswaan/siswa/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/siswa/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="button_section_1"]').val(data.button_1);
                    $('[data-value="button_section_2"]').val(data.button_2);
                    $('[data-value="button_section_3"]').val(data.button_3);
                    $('[data-value="caption_section_1"]').val(data.caption_1);
                    $('[data-value="caption_section_2"]').val(data.caption_2);
                    $('[data-value="caption_section_3"]').val(data.caption_3);
                }
            });
        });

        const tagEditHeader = document.querySelector('.tag-edit-header');
        const inputEditHeader = document.querySelector('.input-edit-header');

        inputEditHeader.addEventListener('change', function() {
            tagEditHeader.src = URL.createObjectURL(inputEditHeader.files[0]);
        });
    </script>
@endsection
