@extends('templates.main')

@section('container')
    <div class="content">
        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Section Header</h5>
                {{-- <button type="button" class="button-default">Tambah Manajemen</button> --}}
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
                                    <img src="{{ asset('storage/' . $section_header->banner) }}" class="img-notfound"
                                        alt="Banner Section Header" width="80" height="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                        alt="Image Not Found" width="80" height="80">
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
                            <div class="col data-value data-length">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Est
                                ducimus
                                consequuntur minima assumenda voluptates fugit beatae dolore? Aut, atque. Architecto ullam
                                labore debitis quidem in incidunt voluptas magni, animi veritatis provident inventore veniam
                                repellendus ex sapiente pariatur distinctio est, excepturi reprehenderit nesciunt cum.
                                Asperiores quod adipisci impedit cumque eveniet optio incidunt, sunt non. Voluptates
                                consectetur est quidem laboriosam enim sed sint excepturi assumenda. Ad accusantium alias
                                quis dolore inventore nemo doloribus sit ratione! Reiciendis neque at soluta sapiente
                                voluptas numquam adipisci possimus! Laborum fugit totam earum sapiente natus saepe sequi sed
                                excepturi perferendis esse, ullam ut aliquid tenetur nulla numquam!
                            </div>
                            <div class="col
                                data-value data-length">Lorem ipsum dolor sit
                                amet consectetur adipisicing
                                elit. Est
                                ducimus
                                consequuntur minima assumenda voluptates fugit beatae dolore? Aut, atque. Architecto ullam
                                labore debitis quidem in incidunt voluptas magni, animi veritatis provident inventore veniam
                                repellendus ex sapiente pariatur distinctio est, excepturi reprehenderit nesciunt cum.
                                Asperiores quod adipisci impedit cumque eveniet optio incidunt, sunt non. Voluptates
                                consectetur est quidem laboriosam enim sed sint excepturi assumenda. Ad accusantium alias
                                quis dolore inventore nemo doloribus sit ratione! Reiciendis neque at soluta sapiente
                                voluptas numquam adipisci possimus! Laborum fugit totam earum sapiente natus saepe sequi sed
                                excepturi perferendis esse, ullam ut aliquid tenetur nulla numquam!</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
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
                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                    alt="Image Not Found" width="80" height="80">
                            </div>
                            <div class="col data-value data-length">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Est
                                ducimus
                                consequuntur minima assumenda voluptates fugit beatae dolore? Aut, atque. Architecto ullam
                                labore debitis quidem in incidunt voluptas magni, animi veritatis provident inventore veniam
                                repellendus ex sapiente pariatur distinctio est, excepturi reprehenderit nesciunt cum.
                                Asperiores quod adipisci impedit cumque eveniet optio incidunt, sunt non. Voluptates
                                consectetur est quidem laboriosam enim sed sint excepturi assumenda. Ad accusantium alias
                                quis dolore inventore nemo doloribus sit ratione! Reiciendis neque at soluta sapiente
                                voluptas numquam adipisci possimus! Laborum fugit totam earum sapiente natus saepe sequi sed
                                excepturi perferendis esse, ullam ut aliquid tenetur nulla numquam!
                            </div>
                            <div class="col
                                data-value data-length">Lorem ipsum dolor sit
                                amet consectetur adipisicing
                                elit. Est
                                ducimus
                                consequuntur minima assumenda voluptates fugit beatae dolore? Aut, atque. Architecto ullam
                                labore debitis quidem in incidunt voluptas magni, animi veritatis provident inventore veniam
                                repellendus ex sapiente pariatur distinctio est, excepturi reprehenderit nesciunt cum.
                                Asperiores quod adipisci impedit cumque eveniet optio incidunt, sunt non. Voluptates
                                consectetur est quidem laboriosam enim sed sint excepturi assumenda. Ad accusantium alias
                                quis dolore inventore nemo doloribus sit ratione! Reiciendis neque at soluta sapiente
                                voluptas numquam adipisci possimus! Laborum fugit totam earum sapiente natus saepe sequi sed
                                excepturi perferendis esse, ullam ut aliquid tenetur nulla numquam!</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
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
                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                    alt="Image Not Found" width="80" height="80">
                            </div>
                            <div class="col data-value data-length">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Est
                                ducimus
                                consequuntur minima assumenda voluptates fugit beatae dolore? Aut, atque. Architecto ullam
                                labore debitis quidem in incidunt voluptas magni, animi veritatis provident inventore veniam
                                repellendus ex sapiente pariatur distinctio est, excepturi reprehenderit nesciunt cum.
                                Asperiores quod adipisci impedit cumque eveniet optio incidunt, sunt non. Voluptates
                                consectetur est quidem laboriosam enim sed sint excepturi assumenda. Ad accusantium alias
                                quis dolore inventore nemo doloribus sit ratione! Reiciendis neque at soluta sapiente
                                voluptas numquam adipisci possimus! Laborum fugit totam earum sapiente natus saepe sequi sed
                                excepturi perferendis esse, ullam ut aliquid tenetur nulla numquam!
                            </div>
                            <div class="col
                                data-value data-length">Lorem ipsum dolor sit
                                amet consectetur adipisicing
                                elit. Est
                                ducimus
                                consequuntur minima assumenda voluptates fugit beatae dolore? Aut, atque. Architecto ullam
                                labore debitis quidem in incidunt voluptas magni, animi veritatis provident inventore veniam
                                repellendus ex sapiente pariatur distinctio est, excepturi reprehenderit nesciunt cum.
                                Asperiores quod adipisci impedit cumque eveniet optio incidunt, sunt non. Voluptates
                                consectetur est quidem laboriosam enim sed sint excepturi assumenda. Ad accusantium alias
                                quis dolore inventore nemo doloribus sit ratione! Reiciendis neque at soluta sapiente
                                voluptas numquam adipisci possimus! Laborum fugit totam earum sapiente natus saepe sequi sed
                                excepturi perferendis esse, ullam ut aliquid tenetur nulla numquam!</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
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


    {{-- MODAL DETAIL SECTION HEADER --}}
    <div class="modal fade" id="detailSectionHeaderModal" tabindex="-1" aria-labelledby="detailSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Detail Section Header</h3>
                <form action="" class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="banner">Banner</label>
                        <div class="wrapper d-flex align-items-end">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-notfound"
                                alt="Banner Section Header" width="80" height="80" data-value="banner">
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_header">
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="input" autocomplete="off" rows="3" data-value="description"></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Close Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION HEADER --}}

    {{-- MODAL EDIT SECTION HEADER --}}
    <div class="modal fade" id="editSectionHeaderModal" tabindex="-1" aria-labelledby="editSectionHeaderModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Edit Section Header</h3>
                <form id="editSectionHeader" method="POST" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label for="banner">Banner</label>
                        <div class="wrapper d-flex align-items-end">
                            <input type="hidden" name="oldImage" data-value="oldImage">
                            <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid tag-edit-header"
                                alt="Banner Section Header" width="80" height="80" data-value="banner">
                            <div class="wrapper-image w-100">
                                <input type="file" id="banner" class="input-edit-header" name="banner">
                            </div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="judul">Judul Header</label>
                        <input type="text" id="judul" class="input" name="title_header" autocomplete="off"
                            data-value="title_header">
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="deskripsi" class="input" name="description" autocomplete="off" rows="3"
                            data-value="description"></textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Close Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL EDIT SECTION HEADER --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        $(document).on('click', '[data-bs-target="#detailSectionHeaderModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/beranda/edit-header',
                success: function(data) {
                    $('[data-value="title_header"]').val(data.title_header);
                    $('[data-value="description"]').val(data.description);
                    $('[data-value="banner"]').attr("src", "/storage/" + data.banner);
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
                    $('[data-value="description"]').val(data.description);
                    $('[data-value="oldImage"]').val(data.banner);
                    $('[data-value="banner"]').attr("src", "/storage/" + data.banner);
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
