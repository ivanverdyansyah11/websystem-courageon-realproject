@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="hero-section container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        {{ $headerHumas->title_header }}
                    </p>
                    <p class="mt-4 desc">
                        {{ $headerHumas->description }}
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#mitra" class="btn btn-color">{{ $headerHumas->button }}</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    @if ($headerHumas->banner)
                        <img src="{{ asset('assets/img/humas-images/header-image/' . $headerHumas->banner) }}"
                            alt="humas section image" class="w-100">
                    @else
                        <img src="{{ asset('assets-homepage/img/humas-hero.png') }}" alt="humas section image"
                            class="w-100">
                    @endif
                </div>
            </div>
        </section>
        <section class="mitra-section container section-margin-top" id="mitra">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold">
                        {{ $SectionKemitraan->title_header }}
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        {{ $SectionKemitraan->description }}
                    </p>
                </div>
            </div>
            <div class="mt-5 row row-cols-xl-5 row-cols-md-3 row-cols-lg-4 row-cols-sm-2 row-cols-1 gy-4">
                @foreach ($partnerships as $partner)
                    <div class="col d-flex justify-content-center">
                        <img src="{{ asset('assets/img/humas-images/kemitraan-image/' . $partner->logo) }}"
                            alt="{{ $partner->name }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </section>
        <section class="blog-section section-margin-top container">
            <div class="d-flex justify-content-center">
                <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                    {{ $sectionJournal->title_header }}
                </p>
            </div>
            <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                @foreach ($journals as $journal)
                    <div class="col card-blog">
                        <a target="_block"
                            href="{{ asset('assets/img/humas-images/majalah-image/' . $journal->document_pdf) }}"
                            class="card-blog text-decoration-none">
                            <img src="{{ asset('assets/img/humas-images/majalah-image/' . $journal->thumbnail) }}"
                                alt="Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota" class="w-100">
                            <p class="mt-3 text-black fw-semibold text-center">
                                {{ $journal->title }}
                            </p>
                            <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                                <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                                <p class="desc fs-14 lh-base">{{ $journal->created_date }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="btn-wrapper d-flex justify-content-center mt-4">
                @if ($journalCount > 4)
                    <a href="{{ route('berita') }}" class="btn btn-color">
                        {{ $sectionJournal->button }}
                    </a>
                @endif
            </div>
        </section>
    </main>
@endsection
