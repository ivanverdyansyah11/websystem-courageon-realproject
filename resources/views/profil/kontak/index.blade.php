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
        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Kontak Sekolah</h5>
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
                        <div class="row table-data gap-4 align-items-center justify-content-between">
                            <div class="d-none col data-value data-length">{{ $section->title_section }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionContactModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionContactModal">
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

    {{-- MODAL DETAIL SECTION CONTACT --}}
    <div class="modal fade" id="detailSectionContactModal" tabindex="-1" aria-labelledby="detailSectionContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Kontak Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="judul_section">Judul Section</label>
                        <input type="text" id="judul_section" class="input" autocomplete="off"
                            data-value="title_section" disabled>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION CONTACT --}}

    {{-- MODAL EDIT SECTION CONTACT --}}
    <div class="modal fade" id="editSectionContactModal" tabindex="-1" aria-labelledby="editSectionContactModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Kontak Sekolah</h3>
                <form id="editSectionContact" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul_section">Judul Section</label>
                        <input type="text" id="judul_section" class="input" autocomplete="off"
                            data-value="title_section" name="title_section">
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT SECTION CONTACT --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionContactModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/kontak/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionContactModal"]', function() {
            $('#editSectionContact').attr('action', '/admin/profil/kontak/detail-section');
            $.ajax({
                type: 'get',
                url: '/admin/profil/kontak/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                }
            });
        });

        const tagEditBanner = document.querySelector('.tag-edit-banner');
        const inputEditBanner = document.querySelector('.input-edit-banner');

        inputEditBanner.addEventListener('change', function() {
            tagEditBanner.src = URL.createObjectURL(inputEditBanner.files[0]);
        });
    </script>
@endsection
