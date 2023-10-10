@extends('templates.main')

@section('container')
    <main class="">
        {{-- <section class="hero-section container position-relative">
            <div class="position-absolute end-50 bottom-0 d-lg-block d-none">
                <img src="{{asset('assets-homepage/img/section-decor.svg')}}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <p class="display-4 fw-bold text-black">
                            {!! $headerHumas->title_header !!}
                        </p>
                        <p class="mt-4 desc">
                            {!! $headerHumas->description !!}
                        </p>
                        <div class="mt-4 d-flex gap-3 align-items-center">
                            <a href="#mitra" class="btn btn-color">{{ $headerHumas->button }}</a>
                        </div>
                    </div>
                    <div class="col-xl-1 d-xl-block d-none"></div>
                    <div class="col-lg-5 d-lg-block d-none">
                        <div class="position-relative">
                            <div class="position-absolute w-100 h-100">
                                <div class="side-img-section-decor right-img-section-decor w-100 h-100"></div>
                            </div>
                            <div class="position-relative">
                                @if ($headerHumas->banner)
                                    <img src="{{ asset('assets/img/humas-images/header-image/' . $headerHumas->banner) }}"
                                    alt="humas section image" class="w-100 right-img-section img-section">
                                @else
                                    <img src="{{ asset('assets-homepage/img/humas-hero.png') }}" alt="humas section image"
                                        class="w-100">
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section> --}}
        <section class="hero-section position-relative">
            <div class="position-relative ">

                <div class="">
                    <div class="swiper swiper-hero">
                        <div class="swiper-wrapper">
                            @foreach ($headerHumases as $key => $headerHumas)
                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="position-relative">
                                            <div class="position-absolute w-100" style="z-index: 99999">
                                                <div class="container">
                                                    <div
                                                        class="d-flex flex-column align-items-md-center text-md-center text-white centered-content">
                                                        <div class="content-hero-wrapper">
                                                            <p class="display-4 fw-bold text-white text-capitalize">
                                                                {!! $headerHumas->title_header !!}
                                                            </p>
                                                            <p class="mt-4 desc text-white">
                                                                {!! $headerHumas->description !!}
                                                            </p>
                                                            <div
                                                                class="mt-4 d-flex gap-3 justify-content-md-center align-items-center">
                                                                <a href="#majalah"
                                                                    class="btn btn-color">{{ $headerHumas->button }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-relative w-100">
                                                <img src="{{ asset('assets/img/humas-images/header-image/' . $headerHumas->banner) }}"
                                                    alt="hero-section image" class="w-100 hero-img">
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </section>
        <section class="blog-humas-section section-margin-top container position-relative" id="majalah">
            <div class="position-absolute start-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center">
                    <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                        {!! $sectionJournal->title_header !!}
                    </p>
                </div>
                <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 gy-4">
                    @foreach ($journals as $journal)
                        <div class="col">
                            <div class="card-blog">
                                <a target="_block"
                                    href="{{ asset('assets/img/humas-images/majalah-image/' . $journal->document_pdf) }}"
                                    class="text-decoration-none">
                                    <img src="{{ asset('assets/img/humas-images/majalah-image/' . $journal->thumbnail) }}"
                                        alt="Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota"
                                        class="w-100 rounded">
                                    <p class="mt-3 text-black fw-semibold text-center">
                                        {{ $journal->title }}
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
                <div class="btn-wrapper d-flex justify-content-center mt-4">
                    @if ($journalCount > 4)
                        <a href="{{ route('majalah') }}" class="btn btn-color">
                            {{ $sectionJournal->button }}
                        </a>
                    @endif
                </div>
            </div>
        </section>
        <section class="mitra-section container section-margin-top" id="mitra">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold">
                        {!! $SectionKemitraan->title_header !!}
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        {!! $SectionKemitraan->description !!}
                    </p>
                </div>
            </div>
            <div
                class="mt-5 row row-cols-xl-5 row-cols-md-3 row-cols-lg-4 row-cols-sm-2 row-cols-1 gy-4 d-flex justify-content-center">
                @foreach ($partnerships as $partner)
                    <div class="col d-flex justify-content-center">
                        <img src="{{ asset('assets/img/humas-images/kemitraan-image/' . $partner->logo) }}"
                            alt="{{ $partner->name }}" class="img-fluid">
                    </div>
                @endforeach
            </div>
        </section>

        <section class="blog-humas-section section-margin-top container position-relative">
            <div class="position-absolute start-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center">
                    <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                        {!! $sectionBerita->title_header !!}
                    </p>
                </div>
                <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 gy-4">
                    @foreach ($beritas as $berita)
                        <div class="col">
                            <div class="card-blog">
                                <a href="{{ route('detail-berita-homepage', $berita->id) }}" class="text-decoration-none">
                                    <img src="{{ asset('assets/img/humas-images/berita-image/' . $berita->banner) }}"
                                        alt="Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota"
                                        class="w-100 rounded">
                                    <p class="mt-3 text-black fw-semibold text-center">
                                        {{ $berita->title }}
                                    </p>
                                    <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                                        <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                                        <p class="desc fs-14 lh-base">{{ $berita->created_date }}</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="btn-wrapper d-flex justify-content-center mt-4">
                    @if ($beritaCount > 4)
                        <a href="{{ route('berita') }}" class="btn btn-color">
                            {{ $sectionBerita->button }}
                        </a>
                    @endif
                </div>
            </div>
        </section>
    </main>
@endsection
