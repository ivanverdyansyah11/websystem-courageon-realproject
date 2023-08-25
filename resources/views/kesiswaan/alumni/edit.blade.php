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
                <h5 class="subtitle">Edit Alumni Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('alumni-update', $alumni->id) }}" method="post"
                            class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="profile">Profile</label>
                                        <input type="hidden" value="{{ $alumni->profile }}" name="oldImage">
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($alumni->profile)
                                                <img src="{{ asset('assets/img/kesiswaan-images/alumni-image/' . $alumni->profile) }}"
                                                    class="img-fluid tag-edit-profile" alt="Profile Alumni" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-profile" alt="Image Not Found" width="80">
                                            @endif
                                            <div class="wrapper-profile w-100">
                                                <input type="file" id="profile" class="input-edit-profile"
                                                    name="profile">
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
                                            @foreach ($students as $student)
                                                @if ($student->id == $alumni->students_id)
                                                    <option value="{{ $student->id }}" selected>
                                                        {{ $student->nama_lengkap }}</option>
                                                @endif
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
                                            autocomplete="off" value="{{ $alumni->pekerjaan }}">
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
                                            @foreach ($tahun_ajarans as $tahun_ajaran)
                                                @if ($tahun_ajaran->id == $alumni->tahun_ajarans_id)
                                                    <option value="{{ $tahun_ajaran->id }}" selected>
                                                        {{ $tahun_ajaran->tahun }}</option>
                                                @endif
                                                <option value="{{ $tahun_ajaran->tahun }}">{{ $tahun_ajaran->tahun }}
                                                </option>
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
                                        <textarea id="inputEditTestimoni" autocomplete="off" class="input" name="testimoni">{{ $alumni->testimoni }}</textarea>
                                        @error('testimoni')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('alumni-index') }}" class="button-default">Batal Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputEditTestimoni = new RichTextEditor("#inputEditTestimoni");

        const tagEdit = document.querySelector('.tag-edit-profile');
        const inputEdit = document.querySelector('.input-edit-profile');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
