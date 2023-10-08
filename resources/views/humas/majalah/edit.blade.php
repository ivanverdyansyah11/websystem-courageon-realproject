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
                <h5 class="subtitle">Edit Majalah Sekolah</h5>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-xl-10">
                        <form action="{{ route('majalah-update', $journal->id) }}" method="post"
                            class="form d-flex flex-column justify-content-center" enctype="multipart/form-data">
                            @csrf
                            <div class="row align-items-end">
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="thumbnail">Thumbnail</label>
                                        <input type="hidden" name="oldImage" value="{{ $journal->thumbnail }}">
                                        <div class="wrapper d-flex align-items-end">
                                            @if ($journal->thumbnail)
                                                <img src="{{ asset('assets/img/humas-images/majalah-image/' . $journal->thumbnail) }}"
                                                    class="img-fluid tag-edit-thumbnail" alt="Thumbnail Majalah"
                                                    width="80">
                                            @else
                                                <img src="{{ asset('assets/img/other/img-notfound.svg') }}"
                                                    class="img-fluid tag-edit-thumbnail" alt="Image Not Found"
                                                    width="80">
                                            @endif
                                            <div class="wrapper-image w-100">
                                                <input type="file" id="thumbnail" class="input-edit-thumbnail"
                                                    name="thumbnail">
                                            </div>
                                        </div>
                                        @error('thumbnail')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper d-flex flex-column">
                                        <input type="hidden" name="oldDocument" value="{{ $journal->document_pdf }}">
                                        @if ($journal->thumbnail)
                                            <label for="document_pdf">Document PDF (File Choosen:
                                                {{ $journal->document_pdf }})</label>
                                            <input type="file" id="document_pdf" name="document_pdf">
                                        @else
                                            <label for="document_pdf">Document PDF</label>
                                            <input type="file" id="document_pdf" value="Belum Dipilih"
                                                name="document_pdf">
                                        @endif
                                        @error('document_pdf')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="input-wrapper">
                                        <label for="title">Judul</label>
                                        <input type="text" id="title" class="input" autocomplete="off" required
                                            name="title" value="{{ $journal->title }}">
                                        @error('title')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="penulis">Penulis</label>
                                        <input type="text" id="penulis" class="input" autocomplete="off" required
                                            name="author" value="{{ $journal->author }}">
                                        @error('author')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="input-wrapper">
                                        <label for="tanggal_dibuat">Tanggal Dibuat</label>
                                        <input type="date" id="tanggal_dibuat" class="input" autocomplete="off" required
                                            name="created_date" value="{{ $journal->created_date }}">
                                        @error('created_date')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-wrapper">
                                        <label for="deskripsi">Deskripsi Singkat</label>
                                        <textarea id="inputEditMajalah" autocomplete="off" class="input" required name="description">{{ $journal->description }}</textarea>
                                        @error('description')
                                            <p class="caption-error mt-2">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="button-wrapper d-flex gap-2">
                                <button type="submit" class="button-default-solid">Simpan Perubahan</button>
                                <a href="{{ route('majalah-index') }}" class="button-default">Batal Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const inputEditMajalah = new RichTextEditor("#inputEditMajalah");

        const tagEdit = document.querySelector('.tag-edit-thumbnail');
        const inputEdit = document.querySelector('.input-edit-thumbnail');

        inputEdit.addEventListener('change', function() {
            tagEdit.src = URL.createObjectURL(inputEdit.files[0]);
        });
    </script>
@endsection
