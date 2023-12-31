@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="blog-section container">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                    {!! $sectionJournal->title_header !!}
                </p>
                <form action="{{ route('majalah-cari') }}" method="POST"
                    class="mt-3 input-wrapper long-searchbar d-flex justify-content-between gap-3">
                    @csrf
                    <input type="search" class="input-text w-100 desc" name="search" placeholder="Cari majalah">
                    <button class="btn btn-color btn-input">cari</button>
                </form>
            </div>
            <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                @foreach ($journals as $journal)
                    <div class="col">
                        <div class="card-blog">
                            <a target="_block"
                                href="{{ asset('assets/img/humas-images/majalah-image/' . $journal->document_pdf) }}"
                                class="text-decoration-none">
                                <img src="{{ asset('assets/img/humas-images/majalah-image/' . $journal->thumbnail) }}"
                                    alt="Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota" class="w-100">
                                <p class="mt-3 text-black fw-semibold text-center">
                                    {!! Str::limit($journal->title, 54) !!}
                                </p>
                                <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                                    <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                                    <p class="desc fs-14 lh-base">{{ $journal->created_date }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection
