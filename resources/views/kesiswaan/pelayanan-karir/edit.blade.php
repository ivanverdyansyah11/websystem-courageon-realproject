@extends('templates.main')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
@endsection
@section('container')
    <div class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('failed'))
                    <div class="alert alert-danger mb-4" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Edit Pelayanan Karir Sekolah</h5>
            </div>
            <div class="col-12">
                <form action="{{ route('pelayanan-karir-update', $pelayanan->id) }}" method="post"
                    class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-10 align-items-center">
                            <div class="row align-items-end">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="dokumentasi">Dokumentasi</label>
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($pelayanan->dokumentasi)
                                                <img src="{{ asset('assets/img/kesiswaan-images/pelayanan-karir-image/' . $pelayanan->dokumentasi) }}"
                                                    class="img-fluid tag-edit-dokumentasi" alt="Dokumentasi Pelayanan Karir"
                                                    width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-dokumentasi" alt="Image Not Found"
                                                    width="80">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="dokumentasi" class="input-edit-dokumentasi"
                                                    name="dokumentasi">
                                            </div>
                                        </div>
                                        @error('dokumentasi')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="students_id">Siswa</label>
                                        <select name="students_id" id="students_id" class="input select2" autocomplete="off"
                                            required>
                                            @foreach ($students as $student)
                                                <option value="{{ $student->id }}"
                                                    {{ $student->id === $pelayanan->students_id ? 'selected' : '' }}>
                                                    {{ $student->nama_lengkap }}</option>
                                            @endforeach
                                        </select>
                                        @error('students_id')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" id="tanggal" class="input" autocomplete="off"
                                            value="{{ $pelayanan->tanggal }}" required name="tanggal">
                                        @error('tanggal')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul</label>
                                        <textarea required name="judul" id="judul" rows="4" class="input" autocomplete="off">{{ $pelayanan->judul ? $pelayanan->judul : '' }}</textarea>
                                        @error('judul')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="masalah">Masalah</label>
                                        <textarea required name="masalah" id="inputEditMasalah" autocomplete="off" class="input">{{ $pelayanan->masalah }}</textarea>
                                        @error('masalah')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="solusi">Solusi</label>
                                        <textarea required name="solusi" id="inputEditSolusi" autocomplete="off" class="input">{{ $pelayanan->solusi }}</textarea>
                                        @error('solusi')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('pelayanan-karir-index') }}" class="button-default">Batal Edit</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script> --}}
<script>
    $(document).ready(function() {
        $(".select2").select2()
    })

    const inputAddMasalah = new RichTextEditor("#inputAddMasalah");
    const inputAddSolusi = new RichTextEditor("#inputAddSolusi");

    const tagEdit = document.querySelector('.tag-edit-image');
    const inputEdit = document.querySelector('.input-edit-image');

    inputEdit.addEventListener('change', function() {
        tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
    });
</script>
@endpush
