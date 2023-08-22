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
                            <div class="d-none col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="col data-value data-length">{{ $section_alumni->title_section }}</div>
                            <div class="d-none col data-value data-length">
                                {{ $section_alumni->description }}</div>
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
                <button type="button" class="d-none d-md-inline-block button-default" data-bs-toggle="modal"
                    data-bs-target="#addAlumniModal">Tambah
                    Alumni</button>
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
                                        {{ $testimonial->testimoni }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <button type="button"
                                                class="button-action button-detail d-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#detailAlumniModal"
                                                data-id="{{ $testimonial->id }}">
                                                <div class="detail-icon"></div>
                                            </button>
                                            <button type="button"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#editAlumniModal"
                                                data-id="{{ $testimonial->id }}">
                                                <div class="edit-icon"></div>
                                            </button>
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
        <div class="modal-dialog">
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
                        <textarea data-value="description_section" class="input" autocomplete="off" id="deskripsi" rows="4" disabled></textarea>
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
    <div class="modal fade" id="editSectionModal" tabindex="-1" aria-labelledby="editSectionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
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
                        <textarea data-value="description_section" name="description" class="input" autocomplete="off" id="deskripsi"
                            rows="4"></textarea>
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

    {{-- MODAL DELETE BEASISWA --}}
    <div class="modal fade" id="deleteBeasiswaModal" tabindex="-1" aria-labelledby="deleteBeasiswaModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Beasiswa Sekolah</h3>
                <form id="deleteBeasiswa" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Beasiswa Sekolah: Apakah Anda yakin ingin
                        menghapus beasiswa sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan beasiswa sekolah akan dihapus secara permanen dari sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Beasiswa</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE BEASISWA --}}

    {{-- MODAL ADD ALUMNI --}}
    <div class="modal fade" id="addAlumniModal" tabindex="-1" aria-labelledby="addAlumniModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Tambah Alumni Sekolah</h3>
                <form action="{{ route('alumni-store') }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="profile">Profile</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-add-profile" alt="Profile Alumni" width="80">
                                    <div class="wrapper-profile w-100">
                                        <input type="file" id="profile" class="input-add-profile" name="profile">
                                    </div>
                                </div>
                                @error('profile')
                                    <p class="caption-error mt-4">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Siswa</label>
                                <select name="students_id" id="students_id" class="input" autocomplete="off">
                                    <option value="-">Pilih siswa</option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                                @error('students_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" id="pekerjaan" class="input"
                                    autocomplete="off">
                                @error('pekerjaan')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun_ajaran_lulus">Tahun Ajaran Lulus</label>
                                <select name="tahun_ajaran_lulus" id="tahun_ajaran_lulus" class="input"
                                    autocomplete="off">
                                    <option value="-">Pilih tahun ajaran lulus</option>
                                    @foreach ($tahun_ajarans as $tahun_ajaran)
                                        <option value="{{ $tahun_ajaran->tahun }}">{{ $tahun_ajaran->tahun }}</option>
                                    @endforeach
                                </select>
                                @error('tahun_ajaran_lulus')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="testimoni">Testimoni</label>
                                <textarea name="testimoni" id="testimoni" rows="4" class="input" autocomplete="off"></textarea>
                                @error('testimoni')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Tambah Alumni</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL ADD ALUMNI --}}

    {{-- MODAL DETAIL ALUMNI --}}
    <div class="modal fade" id="detailAlumniModal" tabindex="-1" aria-labelledby="detailAlumniModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Detail Alumni Sekolah</h3>
                <form class="form d-flex flex-column justify-content-center">
                    <div class="row align-items-end">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="profile">Profile</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Profile Alumni" width="80" data-value="profile">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Siswa</label>
                                <input type="text" id="students_id" class="input" autocomplete="off" disabled
                                    data-value="students_id">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" id="pekerjaan" class="input" autocomplete="off" disabled
                                    data-value="pekerjaan">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun_ajaran_lulus">Tahun Ajaran Lulus</label>
                                <input type="text" id="tahun_ajaran_lulus" class="input" autocomplete="off" disabled
                                    data-value="tahun_ajaran_lulus">
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="testimoni">Testimoni</label>
                                <textarea data-value="testimoni" disabled id="testimoni" rows="4" class="input" autocomplete="off"></textarea>
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
    {{-- END MODAL DETAIL ALUMNI --}}

    {{-- MODAL EDIT ALUMNI --}}
    <div class="modal fade" id="editAlumniModal" tabindex="-1" aria-labelledby="editAlumniModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <h3 class="title">Edit Alumni Sekolah</h3>
                <form id="editAlumni" method="post" class="form d-flex flex-column justify-content-center"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-end">
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="profile">Profile</label>
                                <div class="wrapper d-flex align-items-end">
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                        class="img-fluid tag-edit-profile" alt="Profile Alumni" width="80"
                                        data-value="profile">
                                    <div class="wrapper-profile w-100">
                                        <input type="file" id="profile" class="input-edit-profile" name="profile">
                                    </div>
                                </div>
                                @error('profile')
                                    <p class="caption-error mt-4">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="students_id">Siswa</label>
                                <select name="students_id" id="students_id" class="input">
                                    <option data-value="students_id"></option>
                                    @foreach ($students as $student)
                                        <option value="{{ $student->id }}">{{ $student->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                                @error('students_id')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" data-value="pekerjaan" id="pekerjaan"
                                    class="input" autocomplete="off">
                                @error('pekerjaan')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="input-wrapper">
                                <label for="tahun_ajaran_lulus">Tahun Ajaran Lulus</label>
                                <select name="tahun_ajaran_lulus" id="tahun_ajaran_lulus" class="input">
                                    <option data-value="tahun_ajaran_lulus"></option>
                                    @foreach ($tahun_ajarans as $tahun_ajaran)
                                        <option value="{{ $tahun_ajaran->tahun }}">{{ $tahun_ajaran->tahun }}</option>
                                    @endforeach
                                </select>
                                @error('tahun_ajaran_lulus')
                                    <p class="caption-error mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-wrapper">
                                <label for="testimoni">Testimoni</label>
                                <textarea name="testimoni" data-value="testimoni" id="testimoni" rows="4" class="input" autocomplete="off"></textarea>
                                @error('testimoni')
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
    {{-- END MODAL EDIT ALUMNI --}}

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

        $(document).on('click', '[data-bs-target="#detailAlumniModal"]', function() {
            let id = $(this).data('id');
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/alumni/detail-alumni/' + id,
                success: function(data) {
                    $('[data-value="students_id"]').val(data.students_nama);
                    $('[data-value="pekerjaan"]').val(data.pekerjaan);
                    $('[data-value="tahun_ajaran_lulus"]').val(data.tahun_ajaran_lulus);
                    $('[data-value="testimoni"]').val(data.testimoni);
                    $('[data-value="profile"]').attr("src",
                        "/assets/img/kesiswaan-images/alumni-image/" + data.profile);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#editAlumniModal"]', function() {
            let id = $(this).data('id');
            $('#editAlumni').attr('action', '/admin/kesiswaan/alumni/edit-alumni/' + id);
            $.ajax({
                type: 'get',
                url: '/admin/kesiswaan/alumni/detail-alumni/' + id,
                success: function(data) {
                    $('[data-value="students_id"]').val(data.students_id);
                    $('[data-value="students_id"]').html(data.students_nama);
                    $('[data-value="tahun_ajaran_lulus"]').val(data.tahun_ajaran_lulus);
                    $('[data-value="tahun_ajaran_lulus"]').html(data.tahun_ajaran_lulus);
                    $('[data-value="pekerjaan"]').val(data.pekerjaan);
                    $('[data-value="testimoni"]').val(data.testimoni);
                    $('[data-value="profile"]').attr("src",
                        "/assets/img/kesiswaan-images/alumni-image/" + data.profile);
                }
            });
        });

        $(document).on('click', '[data-bs-target="#deleteAlumniModal"]', function() {
            let id = $(this).data('id');
            $('#deleteAlumni').attr('action', '/admin/kesiswaan/alumni/delete-alumni/' + id);
        });

        const tagAddProfile = document.querySelector('.tag-add-profile');
        const inputAddProfile = document.querySelector('.input-add-profile');
        const tagEditProfile = document.querySelector('.tag-edit-profile');
        const inputEditProfile = document.querySelector('.input-edit-profile');

        inputAddProfile.addEventListener('change', function() {
            tagAddProfile.src = URL.createObjectURL(inputAddProfile.files[0]);
        });

        inputEditProfile.addEventListener('change', function() {
            tagEditProfile.src = URL.createObjectURL(inputEditProfile.files[0]);
        });
    </script>
@endsection
