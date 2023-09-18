@extends('templates.main')

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
                        <div class="col-xl-10">
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
                                        <select name="students_id" id="students_id" class="input" autocomplete="off">
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
                                            value="{{ $pelayanan->tanggal }}" name="tanggal">
                                        @error('tanggal')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul</label>
                                        <textarea name="judul" id="judul" rows="4" class="input" autocomplete="off">{{ $pelayanan->judul ? $pelayanan->judul : '' }}</textarea>
                                        @error('judul')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="masalah">Masalah</label>
                                        <textarea name="masalah" id="inputEditMasalah" autocomplete="off" class="input">{{ $pelayanan->masalah }}</textarea>
                                        @error('masalah')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="solusi">Solusi</label>
                                        <textarea name="solusi" id="inputEditSolusi" autocomplete="off" class="input">{{ $pelayanan->solusi }}</textarea>
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

    <script>
        const inputEditMasalah = new RichTextEditor("#inputEditMasalah");
        const inputEditSolusi = new RichTextEditor("#inputEditSolusi");

        const tagEditDokumentasi = document.querySelector('.tag-edit-dokumentasi');
        const inputEditDokumentasi = document.querySelector('.input-edit-dokumentasi');

        inputEditDokumentasi.addEventListener('change', function() {
            tagEditDokumentasi.src = URL.createObjectURL(inputEditDokumentasi.files[0]);
        });
    </script>
@endsection
