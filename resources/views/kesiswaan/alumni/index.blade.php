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
                <h5 class="subtitle">Section Alumni</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="d-none d-lg-inline-block col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_alumni->title_section }}</div>
                            <div class="d-none col data-value data-length">
                                {!! $section_alumni->description !!}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <button type="button"
                                        class="button-action button-detail d-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#detailSectionModal">
                                        <div class="detail-icon"></div>
                                    </button>
                                    <button type="button"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                        data-bs-toggle="modal" data-bs-target="#editSectionModal">
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
                <h5 class="subtitle">Alumni Sekolah</h5>
                <a href="{{ route('alumni-create') }}" class="d-none d-md-inline-block button-default">Tambah
                    Alumni</a>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Siswa</div>
                            <div class="d-none d-md-inline-block col data-header">Tahun Ajaran Lulus</div>
                            <div class="d-none d-md-inline-block col data-header">Pesan</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($testimonials->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Alumni!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($testimonials as $testimonial)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    @foreach ($students as $student)
                                        @if ($student->id === $testimonial->students_id)
                                            <div class="col data-value data-length">{{ $student->nama_lengkap }}</div>
                                        @endif
                                    @endforeach
                                    @foreach ($tahun_ajarans as $tahun_ajaran)
                                        @if ($tahun_ajaran->tahun === $testimonial->tahun_ajaran_lulus)
                                            <div class="col data-value data-length">{{ $tahun_ajaran->tahun }}</div>
                                        @endif
                                    @endforeach
                                    <div class="d-none col data-value data-length">
                                        {!! $testimonial->testimoni !!}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('alumni-detail', $testimonial->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('alumni-edit', $testimonial->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteAlumniModal"
                                                data-id="{{ $testimonial->id }}">
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
                {{ $testimonials->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DETAIL SECTION --}}
    <div class="modal fade" id="detailSectionModal" tabindex="-1" aria-labelledby="detailSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Section Alumni</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="input-wrapper">
                        <label>Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off" data-value="title_section"
                            disabled>
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaDetailHeader">{{ $section_alumni->description }}</textarea>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="button" class="button-default-solid" data-bs-dismiss="modal">Tutup Modal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DETAIL SECTION --}}

    {{-- MODAL EDIT SECTION --}}
    <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Section Alumni</h3>
                <form id="editSection" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <div class="input-wrapper">
                        <label for="judul">Judul Section</label>
                        <input type="text" id="judul" class="input" autocomplete="off"
                            data-value="title_section" name="title_section">
                        @error('title_section')
                            <p class="caption-error mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-wrapper">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea id="textareaEditHeader" name="description">{{ $section_alumni->description }}</textarea>
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
    {{-- END MODAL EDIT SECTION --}}

    {{-- MODAL DELETE ALUMNI --}}
    <div class="modal fade" id="deleteAlumniModal" tabindex="-1" aria-labelledby="deleteAlumniModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Alumni Sekolah</h3>
                <form id="deleteAlumni" method="post" class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Alumni Sekolah: Apakah Anda yakin ingin
                        menghapus alumni sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan alumni sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Alumni</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE ALUMNI --}}

    <script>
        const textareaDetailHeader = new RichTextEditor("#textareaDetailHeader");
        const textareaEditHeader = new RichTextEditor("#textareaEditHeader");

        $(document).on('click', '[data-bs-target="#detailSectionModal"]', function() {
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/alumni/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editSectionModal"]', function() {
            $('#editSection').attr('action', '/admin/kesiswaan/alumni/edit-section');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/alumni/detail-section',
                success: function(data) {
                    $('[data-value="title_section"]').val(data.title_section);
                    $('[data-value="description_section"]').val(data.description);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteAlumniModal"]', function() {
            let id = $(this).data('id');
            $('#deleteAlumni').attr('action', '/admin/kesiswaan/alumni/delete-alumni/' + id);
        });
    </script>
@endsection
