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
                <h5 class="subtitle">Detail Proyek 5P Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form class="form d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="image">Image</label>
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($project->image)
                                                <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $project->image) }}"
                                                    class="img-fluid" alt="Image Project" width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid" alt="Image Not Found" width="80">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="judul">Judul Proyek</label>
                                        <input type="text" id="judul" class="input" value="{{ $project->title }}"
                                            autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="topik">Topik</label>
                                        <input type="text" id="topik" class="input" value="{{ $project->topic }}"
                                            autocomplete="off" disabled>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea id="inputAddProject" autocomplete="off" disabled class="input">{{ $project->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <a href="{{ route('proyek-index') }}" class="button-default-solid">Kembali ke Halaman</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputAddProject = new RichTextEditor("#inputAddProject");
    </script>
@endsection
