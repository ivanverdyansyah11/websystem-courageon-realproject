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
                <h5 class="subtitle">Section Header</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Header</span></div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="d-none d-md-inline-block col-2 data-value">
                                @if ($section_header->banner)
                                    <img src="{{ asset('assets/img/beranda-images/header-image/' . $section_header->banner) }}"
                                        class="img-notfound" alt="Banner Section Header" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="col data-value data-length">{{ $section_header->title_header }}</div>
                            <div class="col
                            data-value data-length">
                                {{ $section_header->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionHeaderModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionHeaderModal">
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
                <h5 class="subtitle">Section Pembuka</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Pembuka</span></div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_opening->title_opening }}</div>
                            <div class="col
                                data-value data-length">
                                {{ $section_opening->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionOpeningModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionOpeningModal">
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
                <h5 class="subtitle">Section Sambutan</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Sambutan</span></div>
                            <div class="col data-header">Pesan</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="d-none d-md-inline-block col-2 data-value">
                                @if ($section_remark->banner)
                                    <img src="{{ asset('assets/img/beranda-images/sambutan-image/' . $section_remark->banner) }}"
                                        class="img-notfound" alt="Banner Section Remark" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="col data-value data-length">{{ $section_remark->title_remark }}</div>
                            <div class="col
                                data-value data-length">
                                "{{ $section_remark->message }}"</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionRemarkModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionRemarkModal">
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
                <h5 class="subtitle">Section Sejarah</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Sejarah</span></div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="d-none d-md-inline-block col-2 data-value">
                                @if ($section_history->banner)
                                    <img src="{{ asset('assets/img/beranda-images/sejarah-image/' . $section_history->banner) }}"
                                        class="img-notfound" alt="Banner Section Sejarah" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="col data-value data-length">{{ $section_history->title_history }}</div>
                            <div class="col
                                data-value data-length">
                                {{ $section_history->description }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionHistoryModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionHistoryModal">
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
                <h5 class="subtitle">Navigasi Homepage</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Link 1</div>
                            <div class="col data-header">Link 2</div>
                            <div class="d-none d-md-inline-block col data-header">Link 3</div>
                            <div class="d-none d-md-inline-block col data-header">Link 4</div>
                            <div class="d-none d-md-inline-block col data-header">Link 5</div>
                            <div class="d-none d-md-inline-block col data-header">Link 6</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $navigasi->link_1 }}</div>
                            <div class="col data-value data-length">{{ $navigasi->link_2 }}</div>
                            <div class="d-none d-md-inline-block col data-value data-length">{{ $navigasi->link_3 }}</div>
                            <div class="d-none d-md-inline-block col data-value data-length">{{ $navigasi->link_4 }}</div>
                            <div class="d-none d-md-inline-block col data-value data-length">{{ $navigasi->link_5 }}</div>
                            <div class="d-none d-md-inline-block col data-value data-length">{{ $navigasi->link_6 }}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailNavigasiModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editNavigasiModal">
                                        <div class="edit-icon"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{-- MODAL DETAIL SECTION HEADER --}}
        <div class="modal fade" id="detailSectionHeaderModal" tabindex="-1"
            aria-labelledby="detailSectionHeaderModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <h3 class="title">Detail Section Header</h3>
                    <form class="form d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="input-wrapper">
                                    <label>Banner</label>
                                    <div class="wrapper d-flex align-items-end">
                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                            alt="Banner Section Header" width="80" data-value="banner_header">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="judul">Judul Header</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="title_header" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="button">Button Label</label>
                                    <input type="text" id="button" class="input" autocomplete="off"
                                        data-value="button_header" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-wrapper">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" class="input" autocomplete="off" rows="4" data-value="description_header" disabled></textarea>
                                </div>
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
        {{-- END MODAL DETAIL SECTION HEADER --}}

        {{-- MODAL EDIT SECTION HEADER --}}
        <div class="modal fade" id="editSectionHeaderModal" tabindex="-1" aria-labelledby="editSectionHeaderModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <h3 class="title">Edit Section Header</h3>
                    <form id="editSectionHeader" method="post" enctype="multipart/form-data"
                        class="form d-flex flex-column justify-content-center">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="input-wrapper">
                                    <label for="banner">Banner</label>
                                    <div class="wrapper d-flex align-items-end">
                                        <input type="hidden" name="oldImage" data-value="oldImage_header">
                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                            class="img-fluid tag-edit-header" alt="Banner Section Header" width="80"
                                            data-value="banner_header">
                                        <div class="wrapper-image w-100">
                                            <input type="file" id="banner" class="input-edit-header"
                                                name="banner">
                                        </div>
                                    </div>
                                    @error('banner')
                                        <p class="caption-error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="judul">Judul Header</label>
                                    <input type="text" id="judul" class="input" name="title_header"
                                        autocomplete="off" data-value="title_header">
                                    @error('title_header')
                                        <p class="caption-error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="button">Button Label</label>
                                    <input type="text" id="button" class="input" autocomplete="off"
                                        data-value="button_header" name="button">
                                    @error('button')
                                        <p class="caption-error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <div class="input-wrapper">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="4"
                                        data-value="description_header"></textarea>
                                    @error('description')
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
        {{-- END MODAL EDIT SECTION HEADER --}}

        {{-- MODAL DETAIL SECTION OPENING --}}
        <div class="modal fade" id="detailSectionOpeningModal" tabindex="-1"
            aria-labelledby="detailSectionOpeningModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h3 class="title">Detail Section Pembuka</h3>
                    <form class="form d-flex flex-column justify-content-center">
                        <div class="input-wrapper">
                            <label>Judul Pembuka</label>
                            <input type="text" id="judul" class="input" autocomplete="off"
                                data-value="title_opening" disabled>
                        </div>
                        <div class="input-wrapper">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="input" autocomplete="off" rows="4" data-value="description_opening"
                                disabled></textarea>
                        </div>
                        <div class="button-wrapper d-flex flex-column">
                            <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup
                                Modal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- END MODAL DETAIL SECTION OPENING --}}

        {{-- MODAL EDIT SECTION OPENING --}}
        <div class="modal fade" id="editSectionOpeningModal" tabindex="-1"
            aria-labelledby="editSectionOpeningModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h3 class="title">Edit Section Pembuka</h3>
                    <form id="editSectionOpening" method="post" class="form d-flex flex-column justify-content-center">
                        @csrf
                        <div class="input-wrapper">
                            <label for="judul">Judul Pembuka</label>
                            <input type="text" id="judul" class="input" name="title_opening" autocomplete="off"
                                data-value="title_opening">
                            @error('title_opening')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="4"
                                data-value="description_opening"></textarea>
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
        {{-- END MODAL EDIT SECTION OPENING --}}

        {{-- MODAL DETAIL SECTION REMARK --}}
        <div class="modal fade" id="detailSectionRemarkModal" tabindex="-1"
            aria-labelledby="detailSectionRemarkModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h3 class="title">Detail Section Sambutan</h3>
                    <form class="form d-flex flex-column justify-content-center">
                        <div class="input-wrapper">
                            <label>Banner</label>
                            <div class="wrapper d-flex align-items-end">
                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                    alt="Banner Section Sambutan" width="80" data-value="banner_remark">
                            </div>
                        </div>
                        <div class="input-wrapper">
                            <label for="judul">Judul Sambutan</label>
                            <input type="text" id="judul" class="input" autocomplete="off"
                                data-value="title_remark" disabled>
                        </div>
                        <div class="input-wrapper">
                            <label for="pesan">Pesan</label>
                            <textarea id="pesan" class="input" autocomplete="off" rows="4" data-value="message_remark" disabled></textarea>
                        </div>
                        <div class="button-wrapper d-flex flex-column">
                            <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup
                                Modal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- END MODAL DETAIL SECTION REMARK --}}

        {{-- MODAL EDIT SECTION REMARK --}}
        <div class="modal fade" id="editSectionRemarkModal" tabindex="-1" aria-labelledby="editSectionRemarkModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h3 class="title">Edit Section Sambutan</h3>
                    <form id="editSectionRemark" method="post" enctype="multipart/form-data"
                        class="form d-flex flex-column justify-content-center">
                        @csrf
                        <div class="input-wrapper">
                            <label for="banner">Banner</label>
                            <div class="wrapper d-flex align-items-end">
                                <input type="hidden" name="oldImage" data-value="oldImage_remark">
                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                    class="img-fluid tag-edit-remark" alt="Banner Section Sambutan" width="80"
                                    data-value="banner_remark">
                                <div class="wrapper-image w-100">
                                    <input type="file" id="banner" class="input-edit-remark" name="banner">
                                </div>
                            </div>
                            @error('banner')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="judul">Judul Sambutan</label>
                            <input type="text" id="judul" class="input" name="title_remark" autocomplete="off"
                                data-value="title_remark">
                            @error('title_remark')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="pesan">Pesan</label>
                            <textarea id="pesan" class="input" name="message" autocomplete="off" rows="4"
                                data-value="message_remark"></textarea>
                            @error('message')
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
        {{-- END MODAL EDIT SECTION REMARK --}}

        {{-- MODAL DETAIL SECTION HISTORY --}}
        <div class="modal fade" id="detailSectionHistoryModal" tabindex="-1"
            aria-labelledby="detailSectionHistoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <h3 class="title">Detail Section Sejarah</h3>
                    <form class="form d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="input-wrapper">
                                    <label>Banner</label>
                                    <div class="wrapper d-flex align-items-end">
                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                            alt="Banner Section Sejarah" width="80" data-value="banner_history">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="judul">Judul Sejarah</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="title_history" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="button">Button Label</label>
                                    <input type="text" id="button" class="input" autocomplete="off"
                                        data-value="button_history" disabled>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-wrapper">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" class="input" autocomplete="off" rows="4" data-value="description_history"
                                        disabled></textarea>
                                </div>
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
        {{-- END MODAL DETAIL SECTION HISTORY --}}

        {{-- MODAL EDIT SECTION HISTORY --}}
        <div class="modal fade" id="editSectionHistoryModal" tabindex="-1"
            aria-labelledby="editSectionHistoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <h3 class="title">Edit Section Sejarah</h3>
                    <form id="editSectionHistory" method="post" enctype="multipart/form-data"
                        class="form d-flex flex-column justify-content-center">
                        @csrf
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="input-wrapper">
                                    <label for="banner">Banner</label>
                                    <div class="wrapper d-flex align-items-end">
                                        <input type="hidden" name="oldImage" data-value="oldImage_history">
                                        <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                            class="img-fluid tag-edit-history" alt="Banner Section Sejarah"
                                            width="80" data-value="banner_history">
                                        <div class="wrapper-image w-100">
                                            <input type="file" id="banner" class="input-edit-history"
                                                name="banner">
                                        </div>
                                    </div>
                                    @error('banner')
                                        <p class="caption-error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="judul">Judul Sejarah</label>
                                    <input type="text" id="judul" class="input" name="title_history"
                                        autocomplete="off" data-value="title_history">
                                    @error('title_history')
                                        <p class="caption-error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label for="button">Button Label</label>
                                    <input type="text" id="button" class="input" name="button"
                                        autocomplete="off" data-value="button_history">
                                    @error('button')
                                        <p class="caption-error mt-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-wrapper">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="4"
                                        data-value="description_history"></textarea>
                                    @error('description')
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
        {{-- END MODAL EDIT SECTION HISTORY --}}

        {{-- MODAL DETAIL NAVIGASI --}}
        <div class="modal fade" id="detailNavigasiModal" tabindex="-1" aria-labelledby="detailNavigasiModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <h3 class="title">Detail Navigasi</h3>
                    <form class="form d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label>Link 1</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="link_1" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label>Link 2</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="link_2" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label>Link 3</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="link_3" disabled>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="input-wrapper">
                                    <label>Link 4</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="link_4" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-wrapper">
                                    <label>Link 5</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="link_5" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-wrapper">
                                    <label>Link 6</label>
                                    <input type="text" id="judul" class="input" autocomplete="off"
                                        data-value="link_6" disabled>
                                </div>
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
        {{-- END MODAL DETAIL NAVIGASI --}}

        {{-- MODAL EDIT NAVIGASI --}}
        <div class="modal fade" id="editNavigasiModal" tabindex="-1" aria-labelledby="editNavigasiModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <h3 class="title">Edit Navigasi</h3>
                    <form id="editNavigasi" method="post" class="form d-flex flex-column justify-content-center">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-4"></div>
                        </div>
                        <div class="input-wrapper">
                            <label for="link_1">Link 1</label>
                            <input type="text" id="link_1" class="input" name="link_1" autocomplete="off"
                                data-value="link_1">
                            @error('link_1')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="link_2">Link 2</label>
                            <input type="text" id="link_2" class="input" name="link_2" autocomplete="off"
                                data-value="link_2">
                            @error('link_2')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="link_3">Link 3</label>
                            <input type="text" id="link_3" class="input" name="link_3" autocomplete="off"
                                data-value="link_3">
                            @error('link_3')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="link_4">Link 4</label>
                            <input type="text" id="link_4" class="input" name="link_4" autocomplete="off"
                                data-value="link_4">
                            @error('link_4')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="link_5">Link 5</label>
                            <input type="text" id="link_5" class="input" name="link_5" autocomplete="off"
                                data-value="link_5">
                            @error('link_5')
                                <p class="caption-error mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-wrapper">
                            <label for="link_6">Link 6</label>
                            <input type="text" id="link_6" class="input" name="link_6" autocomplete="off"
                                data-value="link_6">
                            @error('link_6')
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
        {{-- END MODAL EDIT NAVIGASI --}}

        <script>
            $(document).on('click', '[data-bs-target="#detailSectionHeaderModal"]', function() {
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-header',
                    success: function(data) {
                        $('[data-value="title_header"]').val(data.title_header);
                        $('[data-value="description_header"]').val(data.description);
                        $('[data-value="button_header"]').val(data.button);
                        $('[data-value="banner_header"]').attr("src",
                            "/assets/img/beranda-images/header-image/" + data.banner);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#editSectionHeaderModal"]', function() {
                $('#editSectionHeader').attr('action', '/admin/beranda/edit-header');
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-header',
                    success: function(data) {
                        $('[data-value="title_header"]').val(data.title_header);
                        $('[data-value="description_header"]').val(data.description);
                        $('[data-value="button_header"]').val(data.button);
                        $('[data-value="oldImage_header"]').val(data.banner);
                        $('[data-value="banner_header"]').attr("src",
                            "/assets/img/beranda-images/header-image/" + data.banner);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#detailSectionOpeningModal"]', function() {
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-opening',
                    success: function(data) {
                        $('[data-value="title_opening"]').val(data.title_opening);
                        $('[data-value="description_opening"]').val(data.description);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#editSectionOpeningModal"]', function() {
                $('#editSectionOpening').attr('action', '/admin/beranda/edit-opening');
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-opening',
                    success: function(data) {
                        $('[data-value="title_opening"]').val(data.title_opening);
                        $('[data-value="description_opening"]').val(data.description);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#detailSectionRemarkModal"]', function() {
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-remark',
                    success: function(data) {
                        $('[data-value="title_remark"]').val(data.title_remark);
                        $('[data-value="message_remark"]').val(data.message);
                        $('[data-value="banner_remark"]').attr("src",
                            "/assets/img/beranda-images/sambutan-image/" + data.banner);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#editSectionRemarkModal"]', function() {
                $('#editSectionRemark').attr('action', '/admin/beranda/edit-remark');
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-remark',
                    success: function(data) {
                        $('[data-value="title_remark"]').val(data.title_remark);
                        $('[data-value="message_remark"]').val(data.message);
                        $('[data-value="oldImage_remark"]').val(data.banner);
                        $('[data-value="banner_remark"]').attr("src",
                            "/assets/img/beranda-images/sambutan-image/" + data.banner);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#detailSectionHistoryModal"]', function() {
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-history',
                    success: function(data) {
                        $('[data-value="title_history"]').val(data.title_history);
                        $('[data-value="description_history"]').val(data.description);
                        $('[data-value="button_history"]').val(data.button);
                        $('[data-value="banner_history"]').attr("src",
                            "/assets/img/beranda-images/sejarah-image/" + data.banner);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#editSectionHistoryModal"]', function() {
                $('#editSectionHistory').attr('action', '/admin/beranda/edit-history');
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-history',
                    success: function(data) {
                        $('[data-value="title_history"]').val(data.title_history);
                        $('[data-value="description_history"]').val(data.description);
                        $('[data-value="button_history"]').val(data.button);
                        $('[data-value="oldImage_history"]').val(data.banner);
                        $('[data-value="banner_history"]').attr("src",
                            "/assets/img/beranda-images/sejarah-image/" + data.banner);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#detailNavigasiModal"]', function() {
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-navigasi',
                    success: function(data) {
                        $('[data-value="link_1"]').val(data.link_1);
                        $('[data-value="link_2"]').val(data.link_2);
                        $('[data-value="link_3"]').val(data.link_3);
                        $('[data-value="link_4"]').val(data.link_4);
                        $('[data-value="link_5"]').val(data.link_5);
                        $('[data-value="link_6"]').val(data.link_6);
                    }
                });
            });

            $(document).on('click', '[data-bs-target="#editNavigasiModal"]', function() {
                $('#editNavigasi').attr('action', '/admin/beranda/edit-navigasi');
                $.ajax({
                    type: 'get',
                    url: '/admin/beranda/edit-navigasi',
                    success: function(data) {
                        $('[data-value="title_header"]').val(data.title_header);
                        $('[data-value="description_header"]').val(data.description);
                        $('[data-value="button_header"]').val(data.button);
                        $('[data-value="oldImage_header"]').val(data.banner);
                        $('[data-value="banner_header"]').attr("src",
                            "/assets/img/beranda-images/header-image/" + data.banner);
                    }
                });
            });

            const tagEditHeader = document.querySelector('.tag-edit-header');
            const inputEditHeader = document.querySelector('.input-edit-header');
            const tagEditRemark = document.querySelector('.tag-edit-remark');
            const inputEditRemark = document.querySelector('.input-edit-remark');
            const tagEditHistory = document.querySelector('.tag-edit-history');
            const inputEditHistory = document.querySelector('.input-edit-history');

            inputEditHeader.addEventListener('change', function() {
                tagEditHeader.src = URL.createObjectURL(inputEditHeader.files[0]);
            });

            inputEditRemark.addEventListener('change', function() {
                tagEditRemark.src = URL.createObjectURL(inputEditRemark.files[0]);
            });

            inputEditHistory.addEventListener('change', function() {
                tagEditHistory.src = URL.createObjectURL(inputEditHistory.files[0]);
            });
        </script>
    @endsection
