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
                <h5 class="subtitle">Detail Alumni Sekolah</h5>
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
                                            @if ($alumni->profile)
                                                <img src="{{ asset('assets/img/kesiswaan-images/alumni-image/' . $alumni->profile) }}"
                                                    class="img-fluid" alt="Profile Alumni" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="students_id">Siswa</label>
                                        <input type="text" id="students_id" class="input" autocomplete="off" disabled
                                            value="{{ $students_nama }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <input type="text" id="pekerjaan" class="input" autocomplete="off" disabled
                                            value="{{ $alumni->pekerjaan }}">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tahun_ajaran_lulus">Tahun Ajaran Lulus</label>
                                        <input type="text" id="tahun_ajaran_lulus" class="input" autocomplete="off"
                                            value="{{ $tahun_ajaran_lulus }}" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="testimoni">Testimoni</label>
                                        <textarea id="inputDetailTestimoni" autocomplete="off" class="input" name="testimoni">{{ $alumni->testimoni }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('alumni-index') }}" class="button-default-solid">Kembali ke Halaman</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputDetailTestimoni = new RichTextEditor("#inputDetailTestimoni");
    </script>
@endsection
