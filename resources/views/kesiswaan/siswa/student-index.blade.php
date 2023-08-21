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
                <h5 class="subtitle">Data Siswa {{ $kelas->name }}</h5>
                <a href="{{ route('data-siswa-create', $kelas->id) }}"
                    class="d-none d-md-inline-block button-default">Tambah Siswa</a>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="col data-header">Nama Lengkap</div>
                            <div class="d-none d-md-inline-block col data-header">Jenis Kelamin</div>
                            <div class="col data-header">TTL</div>
                            <div class="d-none d-md-inline-block col data-header">Alamat</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    @if ($students->count() == 0)
                        <div class="col-12 table-row table-border">
                            <div class="row table-data gap-4 align-items-center justify-content-between">
                                <div class="col-12 data-value">Tidak Ada Data Siswa!</div>
                            </div>
                        </div>
                    @else
                        @foreach ($students as $student)
                            <div class="col-12 table-row table-border">
                                <div class="row table-data gap-4 align-items-center">
                                    <div class="col data-value data-length">{{ $student->nama_lengkap }}</div>
                                    <div class="d-none col data-value data-length">
                                        {{ $student->jenis_kelamin === 'L' ? 'Laki-Laki' : 'Perempuan' }}</div>
                                    <div class="col data-value data-length">{{ $student->tempat_lahir }},
                                        {{ $student->tanggal_lahir }}</div>
                                    <div class="d-none col data-value data-length">{{ $student->alamat }}</div>
                                    <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                        <div class="wrapper-action d-flex">
                                            <a href="{{ route('data-siswa-detail', $student->id) }}"
                                                class="button-action button-detail d-flex justify-content-center align-items-center">
                                                <div class="detail-icon"></div>
                                            </a>
                                            <a href="{{ route('data-siswa-edit', $student->id) }}"
                                                class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                                <div class="edit-icon"></div>
                                            </a>
                                            <button type="button"
                                                class="button-action button-delete d-none d-md-flex justify-content-center align-items-center"
                                                data-bs-toggle="modal" data-bs-target="#deleteStudentModal"
                                                data-id="{{ $student->id }}">
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
                {{ $students->links() }}
            </div>
        </div>
    </div>

    {{-- MODAL DELETE STUDENT --}}
    <div class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="deleteStudentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <h3 class="title">Hapus Siswa</h3>
                <form id="deleteStudent" method="post" enctype="multipart/form-data"
                    class="form d-flex flex-column justify-content-center">
                    @csrf
                    <p class="caption-description mb-2">Konfirmasi Penghapusan Siswa Sekolah: Apakah Anda yakin
                        ingin
                        menghapus siswa sekolah ini?
                        Tindakan ini tidak dapat diurungkan, dan siswa sekolah akan dihapus secara permanen dari
                        sistem.
                    </p>
                    <div class="button-wrapper d-flex flex-column">
                        <button type="submit" class="button-default-solid">Hapus Siswa</button>
                        <button type="button" class="button-default" data-bs-dismiss="modal">Batal Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END MODAL DELETE STUDENT --}}

    <script>
        $(document).on('click', '[data-bs-target="#deleteStudentModal"]', function() {
            let id = $(this).data('id');
            $('#deleteStudent').attr('action', '/admin/kesiswaan/siswa/data-siswa/delete/' + id);
        });
    </script>
@endsection
