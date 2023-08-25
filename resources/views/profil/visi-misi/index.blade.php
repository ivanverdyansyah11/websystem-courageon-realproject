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
                                    <img src="{{ asset('assets/img/profil-images/visi-misi-image/' . $vision_mission->banner) }}"
                                        class="img-notfound" alt="Banner Section Header" width="80">
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
                                    <a href="{{ route('visi-misi-detail') }}"
                                        class="button-action button-detail d-flex justify-content-center align-items-center">
                                        <div class="detail-icon"></div>
                                    </a>
                                    <a href="{{ route('visi-misi-edit') }}"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                        <div class="edit-icon"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Motto Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Pembicara</div>
                            <div class="col data-header">Motto</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $motto->speaker }}</div>
                            <div class="col data-value data-length">{{ $motto->motto }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailMottoModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editMottoModal">
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

    {{-- MODAL DETAIL MOTTO --}}
    <div class="modal fade" id="detailMottoModal" tabindex="-1" aria-labelledby="detailMottoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Motto Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Pembicara</label>
                        <input type="text" id="pembicara" class="input" autocomplete="off" data-value="speaker"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="motto">Motto</label>
                        <textarea id="motto" class="input" autocomplete="off" rows="4" data-value="motto" disabled></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL MOTTO --}}

    {{-- MODAL EDIT MOTTO --}}
    <div class="modal fade" id="editMottoModal" tabindex="-1" aria-labelledby="editMottoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Motto Sekolah</h3>
                <form id="editMotto" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="pembicara">Pembicara</label>
                        <input type="text" id="pembicara" class="input" autocomplete="off" data-value="speaker"
                            name="speaker">
                        @error('speaker')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="motto">Motto</label>
                        <textarea id="motto" class="input" autocomplete="off" rows="4" data-value="motto" name="motto"></textarea>
                        @error('motto')
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
    {{-- END MODAL EDIT MOTTO --}}

    <script>
        $(document).on('click', '[data-bs-target="#detailMottoModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/profil/visi-misi/edit-motto',
                success: function(data) {
                    $('[data-value="speaker"]').val(data.speaker);
                    $('[data-value="motto"]').val(data.motto);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editMottoModal"]', function() {
            $('#editMotto').attr('action', '/admin/profil/visi-misi/edit-motto');
            $.ajax({
                type: 'get',
                url: '/admin/profil/visi-misi/edit-motto',
                success: function(data) {
                    $('[data-value="speaker"]').val(data.speaker);
                    $('[data-value="motto"]').val(data.motto);
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
