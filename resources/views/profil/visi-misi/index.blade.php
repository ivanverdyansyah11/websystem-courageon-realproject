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
                <h5 class="subtitle">Visi Misi Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul Visi</div>
                            <div class="d-none d-md-inline-block col data-header">Deskripsi Visi</div>
                            <div class="col data-header">Judul Misi</div>
                            <div class="d-none d-md-inline-block col data-header">Deskripsi Misi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="d-none d-md-inline-block col-2 data-value">
                                @if ($vision_mission->banner)
                                    <img src="{{ asset('storage/' . $vision_mission->banner) }}" class="img-notfound"
                                        alt="Banner Section Header" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="col data-value data-length">{{ $vision_mission->title_vision }}</div>
                            <div class="d-none col data-value data-length">{{ $vision_mission->description_vision }}</div>
                            <div class="col data-value data-length">{{ $vision_mission->title_mission }}</div>
                            <div class="d-none col data-value data-length">{{ $vision_mission->description_mission }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailVisionMissionModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editVisionMissionModal">
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

    {{-- MODAL DETAIL VISION MISSION --}}
    <div class="modal fade" id="detailVisionMissionModal" tabindex="-1" aria-labelledby="detailVisionMissionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Visi Misi Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                        alt="Banner Visi Misi" width="80" data-value="banner_vision_mission">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul_visi">Judul Visi</label>
                                <input type="text" id="judul_visi" class="input" autocomplete="off"
                                    data-value="title_vision" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul_misi">Judul Misi</label>
                                <input type="text" id="judul_misi" class="input" autocomplete="off"
                                    data-value="title_mission" disabled>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="deskripsi_visi">Deskripsi Visi</label>
                                <textarea id="deskripsi_visi" class="input" autocomplete="off" rows="3" data-value="description_vision" disabled></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="deskripsi_misi">Deskripsi Misi</label>
                                <textarea id="deskripsi_misi" class="input" autocomplete="off" rows="3" data-value="description_mission"
                                    disabled></textarea>
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
    {{-- END MODAL DETAIL VISION MISSION --}}

    {{-- MODAL EDIT VISION MISSION --}}
    <div class="modal fade" id="editVisionMissionModal" tabindex="-1" aria-labelledby="editVisionMissionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Visi Misi Sekolah</h3>
                <form id="editVisionMission" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="input-wrapper">
                                <label for="banner">Banner</label>
                                <div class="wrapper d-flex align-items-end">
                                    <input type="hidden" name="oldImage" data-value="oldImage_vision_mission">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-vision-mission" alt="Banner Visi Misi" width="80"
                                        data-value="banner_vision_mission">
                                    <div class="wrapper-image w-100">
                                        <input type="file" id="banner" class="input-edit-vision-mission"
                                            name="banner">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul_visi">Judul Visi</label>
                                <input type="text" id="judul_visi" class="input" autocomplete="off"
                                    data-value="title_vision" name="title_vision">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="judul_misi">Judul Misi</label>
                                <input type="text" id="judul_misi" class="input" autocomplete="off"
                                    data-value="title_mission" name="title_mission">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 mb-md-0">
                            <div class="input-wrapper">
                                <label for="deskripsi_visi">Deskripsi Visi</label>
                                <textarea id="deskripsi_visi" class="input" autocomplete="off" rows="3" data-value="description_vision"
                                    name="description_vision"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-wrapper">
                                <label for="deskripsi_misi">Deskripsi Misi</label>
                                <textarea id="deskripsi_misi" class="input" autocomplete="off" rows="3" data-value="description_mission"
                                    name="description_mission"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT VISION MISSION --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailVisionMissionModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/visi-misi/edit-visi-misi',
                success: function(data) {
                    $('[data-value="banner_vision_mission"]').attr("src", "/storage/" + data.banner);
                    $('[data-value="title_vision"]').val(data.title_vision);
                    $('[data-value="description_vision"]').val(data.description_vision);
                    $('[data-value="title_mission"]').val(data.title_mission);
                    $('[data-value="description_mission"]').val(data.description_mission);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editVisionMissionModal"]', function() {
            $('#editVisionMission').attr('action', '/admin/profil/visi-misi/edit-visi-misi');
            $.ajax({
                type: 'get',
                url: '/admin/profil/visi-misi/edit-visi-misi',
                success: function(data) {
                    $('[data-value="banner_vision_mission"]').attr("src", "/storage/" + data.banner);
                    $('[data-value="oldImage_vision_mission"]').val(data.banner);
                    $('[data-value="title_vision"]').val(data.title_vision);
                    $('[data-value="description_vision"]').val(data.description_vision);
                    $('[data-value="title_mission"]').val(data.title_mission);
                    $('[data-value="description_mission"]').val(data.description_mission);
                }
            });
        });

        const tagEditVisionMission = document.querySelector('.tag-edit-vision-mission');
        const inputEditVisionMission = document.querySelector('.input-edit-vision-mission');

        inputEditVisionMission.addEventListener('change', function() {
            tagEditVisionMission.src = URL.createObjectURL(inputEditVisionMission.files[0]);
        });
    </script>
@endsection
