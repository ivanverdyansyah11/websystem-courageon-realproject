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
                            <div class="col-2 data-header">Banner</div>
                            <div class="col data-header">Judul Header</div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col-2 data-value">
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
                                        class="button-action button-edit d-flex justify-content-center align-items-center">
                                        <div class="edit-icon"></div>
                                    </button>
                                    {{-- <button type="button"
                                        class="button-action button-delete d-flex justify-content-center align-items-center">
                                        <div class="delete-icon"></div>
                                    </button> --}}
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
                            <div class="col data-header">Judul Pembuka</div>
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
                                        class="button-action button-edit d-flex justify-content-center align-items-center">
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
                            <div class="col-2 data-header">Banner</div>
                            <div class="col data-header">Judul Sambutan</div>
                            <div class="col data-header">Pesan</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col-2 data-value">
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
                                        class="button-action button-edit d-flex justify-content-center align-items-center">
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
                            <div class="col-2 data-header">Banner</div>
                            <div class="col data-header">Judul Sejarah</div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col-2 data-value">
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
                                        class="button-action button-edit d-flex justify-content-center align-items-center">
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
@endsection
