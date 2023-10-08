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
                <h5 class="subtitle">Tambah Alumni Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
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
                                                <input type="file" id="profile" class="input-add-profile"
                                                    name="profile" required>
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
                                        <select name="students_id" id="students_id" class="input" autocomplete="off"
                                            required>
                                            <option value="">Pilih siswa</option>
                                            @foreach ($students as $student)
                                                <option value="{{ $student->id }}"
                                                    {{ old('students_id') == $student->id ? 'selected' : '' }}>
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
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" id="pekerjaan" class="input"
                                            autocomplete="off" required value="{{ old('pekerjaan') }}">
                                        @error('pekerjaan')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_ajaran_lulus">Tahun Ajaran Lulus</label>
                                        <select name="tahun_ajaran_lulus" id="tahun_ajaran_lulus" class="input"
                                            autocomplete="off" required>
                                            <option value="">Pilih tahun ajaran lulus</option>
                                            @foreach ($tahun_ajarans as $tahun_ajaran)
                                                <option value="{{ $tahun_ajaran->tahun }}"
                                                    {{ old('tahun_ajaran_lulus') == $tahun_ajaran->tahun ? 'selected' : '' }}>
                                                    {{ $tahun_ajaran->tahun }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tahun_ajaran_lulus')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="testimoni">Testimoni</label>
                                        <textarea id="inputAddTestimoni" autocomplete="off" class="input" name="testimoni" required></textarea>
                                        @error('testimoni')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Tambah Alumni</button>
                                <a href="{{ route('alumni-index') }}" class="button-default">Batal Tambah</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputAddTestimoni = new RichTextEditor("#inputAddTestimoni");

        const tagAdd = document.querySelector('.tag-add-profile');
        const inputAdd = document.querySelector('.input-add-profile');

        inputAdd.addEventListener('change', function() {
            tagAdd.src = URL.createObjectURL(inputAdd.files[0]);
        });
    </script>
@endsection
