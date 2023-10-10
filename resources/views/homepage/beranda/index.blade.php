@extends('templates.main')

@section('container')
{{--    @dd($beritas)--}}
    <main class="">
        {{-- <section class="hero-section container position-relative">
            <div class="position-absolute end-50 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="row position-relative">
                <div class="col-xl-6 col-lg-7 col-12 position-relative d-flex align-items-center">
                    <div class="d-flex justify-content-center flex-column">
                        <p class="display-4 fw-bold text-black text-capitalize">
                            {!! $headerHome->title_header !!}
                        </p>
                        <p class="mt-4 desc">
                            {!! $headerHome->description !!}
                        </p>
                        <div class="mt-4 d-flex gap-3 align-items-center">
                            <a href="{{ route('profil') }}" class="btn btn-color">{{ $headerHome->button }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-flex d-none h-100 position-relative">
                    <div class="position-absolute end-0 hero-decor">
                        <img src="{{ asset('assets-homepage/img/hero-decoration-img.svg') }}" alt=""
                            class="img-decor-hero">
                    </div>
                </div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="position-relative">
                        <div class="position-absolute w-100 h-100">
                            <div class="side-img-section-decor right-img-section-decor w-100 h-100"></div>
                        </div>
                        <div class="position-relative">
                            @if ($headerHome->banner)
                                <img src="{{ asset('assets/img/beranda-images/header-image/' . $headerHome->banner) }}"
                                    alt="hero-section image" class="w-100 img-section right-img-section po">
                            @else
                                <img src="{{ asset('assets-homepage/img/hero-img.png') }}" alt="hero-section image"
                                    class="w-100">
                            @endif
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
                            @foreach ($headerHomes as $key => $headerHome)
                            <div class="swiper-slide">
                                <div class="">
                                    <div class="position-relative">
                                        <div class="position-absolute w-100" style="z-index: 99999">
                                            <div class="container">
                                                <div class="d-flex flex-column align-items-md-center text-md-center text-white centered-content">
                                                    <div class="content-hero-wrapper">
                                                        <p class="display-4 fw-bold text-white text-capitalize">
                                                            {!! $headerHome->title_header !!}
                                                        </p>
                                                        <p class="mt-4 desc text-white">
                                                            {!! $headerHome->description !!}
                                                        </p>
                                                        <div class="mt-4 d-flex gap-3 justify-content-md-center align-items-center">
                                                            <a href="{{ route('profil') }}" class="btn btn-color">{{ $headerHome->button }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="position-relative w-100">
                                            <img src="{{ asset('assets/img/beranda-images/header-image/' . $headerHome->banner) }}"
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

        <section class="prestation-section container section-margin-top position-relative">
            <div class="position-absolute start-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center">
                    <p class="text-md-center text-start fw-bold display-5 title-section-text">
                        {!! $sectionAchievement->title_section !!}
                    </p>
                </div>
                <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 mt-5 gy-4">
                    @foreach ($achievements as $key => $achievement)
                        <div class="col">
                            <div class="prestasi card-prestasi">
                                <a href="{{ route('detail-prestasi', $achievement->id) }}" class="">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/img/kesiswaan-images/prestasi-image/' . $achievement->dokumentasi) }}"
                                                alt="juara 1 olimpiade fisika" class="w-100 img-prestasi">
                                        </div>
                                        <div class="position-absolute top-0 start-0" style="z-index: 999999">
                                            <div
                                                class="number-wrapper d-flex justify-content-center align-items-center fs-4 fw-black text-white">
                                                {{ $key + 1 }}</div>
                                        </div>
                                        <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                                            @foreach ($kategori_prestasi as $kategori)
                                                @if ($kategori->id == $achievement->kategori_prestasis_id)
                                                    <div
                                                        class="prestasi-category-wrapper d-flex justify-content-center align-items-center fs-15 fw-medium text-white">
                                                        {{ $kategori->nama }}</div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-center fs-5 fw-bold">{!! $achievement->hasil !!}</p>
                                        <p class="text-center fw-semibold text-capitalize">
                                            {!! $achievement->nama_kegiatan !!}
                                            tingkat {!! $achievement->tingkat !!}</p>
                                    </div>
                                    <div class="mt-2 d-flex gap-3 justify-content-center">
                                        <img src="{{ asset('assets-homepage/img/profile.svg') }}" alt=""
                                            class="">
                                        <p class="text-secondary fs-15">{!! $achievement->nama_peserta !!}</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    @if ($achievementCount > 4)
                        <a href="{{ route('prestasi') }}" class="btn btn-color btn-more">lihat semua</a>
                    @endif
                </div>
            </div>
        </section>
        <section class="welcome-section container section-margin-top position-relative">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="top-section row align-items-center gy-4">
                    <div class="col-lg-6 col-xl-5 col-12">
                        <p class="display-5 fw-bold">
                            {!! $openingHome->title_opening !!}
                        </p>
                    </div>
                    <div class="col-xl-1 d-xl-block d-none"></div>
                    <div class="col-lg-6 col-12">
                        <p class="desc">
                            {!! $openingHome->description !!}
                        </p>
                    </div>
                </div>
            </div>

            <div class="content-section mt-5 row align-items-center">
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="position-relative">
                        <div class="position-absolute w-100 h-100">
                            <div class="side-img-section-decor left-img-section-decor w-100 h-100"></div>
                        </div>
                        <div class="position-relative">
                            @if ($remarkHome->banner)
                                <img src="{{ asset('assets/img/beranda-images/sambutan-image/' . $remarkHome->banner) }}"
                                    alt="hero-section image" class="w-100 img-section left-img-section">
                            @else
                                <img src="{{ asset('assets-homepage/img/welcome-section.png') }}"
                                    alt="welcome section image" class="w-100">
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="fw-bold display-5 text-black text-capitalize">
                        {!! $remarkHome->title_remark !!}
                    </p>
                    <div class="card-desc-section mt-3">
                        <p class="desc">
                            {!! $remarkHome->message !!}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-section section-margin-top container position-relative">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
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
                                        alt="{{ $journal->title }}" class="w-100 img-fluid rounded">
                                    <p class="mt-3 text-black fw-semibold text-center">
                                        {!! $journal->title !!}
                                    </p>
                                    <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                                        <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                                        <p class="desc fs-14 lh-base">{!! $journal->created_date !!}</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="btn-wrapper d-flex justify-content-center mt-4">
                    @if ($journalCount > 4)
                        <a href="{{ route('berita') }}" class="btn btn-color">
                            {!! $sectionJournal->button !!}
                        </a>
                    @endif
                </div>
            </div>
        </section>
        <section class="testi-section container section-margin-top position-relative">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="d-flex justify-content-center">
                        <p class="text-md-center text-start fw-bold display-5 title-section-text">
                            {!! $sectionAlumni->title_section !!}
                        </p>
                    </div>
                </div>
                <div class="col-12 mt-5">
                    <div class="swiper swiper-testi">
                        <div class="swiper-wrapper">
                            @foreach ($alumnis as $alumni)
                                <div class="swiper-slide">
                                    <div class="card-testi">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="img-testi-wrapper">
                                                <img src="{{ asset('assets/img/kesiswaan-images/alumni-image/' . $alumni->profile) }}"
                                                    alt="testimonial image" class="img-fluid rounded">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <p class="fs-5 fw-semibold text-capitalize">
                                                    {!! $alumni->student->nama_lengkap !!}
                                                </p>
                                                <p class="desc fs-15">
                                                    {!! $alumni->pekerjaan !!}
                                                </p>
                                            </div>
                                        </div>
                                        <p class="desc mt-3">
                                            {!! $alumni->testimoni !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination d-flex justify-content-center position-relative mt-4 pt-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="history-section container section-margin-top position-relative">
            <div class="position-relative">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xl-6 col-12 ">
                        <p class="display-5 text-black fw-bold text-capitalize">
                            {!! $historyHome->title_history !!}
                        </p>
                        <article class="mt-3">
                            <p class="desc">
                                {!! $historyHome->description !!}
                            </p>
                        </article>
                        <a href="{{ route('profil') }}" class="btn mt-4 btn-color d-flex gap-3 align-items-center">
                            {!! $historyHome->button !!}
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10"
                                fill="none">
                                <path
                                    d="M1 4.35C0.641015 4.35 0.35 4.64101 0.35 5C0.35 5.35899 0.641015 5.65 1 5.65V4.35ZM19.4596 5.45962C19.7135 5.20578 19.7135 4.79422 19.4596 4.54038L15.323 0.403806C15.0692 0.149965 14.6576 0.149965 14.4038 0.403806C14.15 0.657647 14.15 1.0692 14.4038 1.32304L18.0808 5L14.4038 8.67696C14.15 8.9308 14.15 9.34235 14.4038 9.59619C14.6576 9.85003 15.0692 9.85003 15.323 9.59619L19.4596 5.45962ZM1 5.65L19 5.65V4.35L1 4.35V5.65Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-5 d-lg-block d-none offset-xl-1">
                        <div class="position-relative">
                            <div class="position-absolute w-100 h-100">
                                <div class="side-img-section-decor right-img-section-decor w-100 h-100"></div>
                            </div>
                            <div class="position-relative">
                                @if ($historyHome->banner)
                                    <img src="{{ asset('assets/img/beranda-images/sejarah-image/' . $historyHome->banner) }}"
                                        alt="hero-section image" class="w-100 img-section right-img-section">
                                @else
                                    <img src="{{ asset('assets-homepage/img/history-img.png') }}"
                                        alt="history section image" class="w-100">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="video-section container section-margin-top position-relative">
            <div class="d-flex justify-content-center">
                <p class="text-md-center text-start fw-bold display-5 title-section-text">
                    Mempersembahkan tarian kebesaran  SMA Negeri 1 Selat
                </p>
            </div>
            <div class="mt-5 position-relative">
                <div class="swiper swiper-video">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <iframe class="yt-video" src="https://www.youtube.com/embed/D0UnqGm_miA?si=iZkOKj3FrwbuWIaY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                        <div class="swiper-slide">
                            <iframe class="yt-video" src="https://www.youtube.com/embed/D0UnqGm_miA?si=iZkOKj3FrwbuWIaY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="swiper-pagination position-relative mt-4"></div>
                </div>
                <div class="position-absolute  swiper-navigation-wrapper d-md-block d-none" style="z-index: 99999999">
                    <div class="swiper-navigation-wrapper d-flex flex-row justify-content-between">
                        <div class="btn-prev-video">
                            <div class="btn-video-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                    <g clip-path="url(#clip0_1625_1231)">
                                        <path d="M13.4621 18.0204C13.7799 17.9373 14.0652 17.8049 14.2772 17.5373C14.6325 17.0888 14.64 16.4376 14.2819 15.9884C14.2126 15.9014 14.136 15.8197 14.0573 15.741C11.866 13.5488 9.67405 11.3572 7.48165 9.16617C7.4322 9.11677 7.37605 9.07407 7.2608 8.97452C7.3489 8.92272 7.4207 8.89792 7.4691 8.84962C9.6794 6.64322 11.8867 4.43387 14.097 2.22742C14.4866 1.83842 14.6497 1.39316 14.4827 0.852365C14.2345 0.0485646 13.2087 -0.277636 12.5425 0.235714C12.4683 0.292864 12.3973 0.355165 12.331 0.421365C9.78995 2.96117 7.24931 5.50132 4.70951 8.04242C4.23486 8.51732 4.1376 9.10752 4.45315 9.64317C4.5294 9.77257 4.63595 9.88762 4.74305 9.99482C7.21545 12.4705 9.69125 14.9427 12.1618 17.4201C12.4356 17.6947 12.7181 17.9396 13.1098 18.0205C13.2272 18.0204 13.3447 18.0204 13.4621 18.0204Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1625_1231">
                                            <rect width="18" height="18" fill="white" transform="matrix(-1 0 0 1 18.4141 0)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-absolute ] end-0 swiper-navigation-wrapper d-md-block d-none" style="z-index: 99999999">
                    <div class="swiper-navigation-wrapper d-flex flex-row justify-content-between">
                        <div class="btn-next-video">
                            <div class="btn-video-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                                    <g clip-path="url(#clip0_1625_1227)">
                                        <path d="M5.53892 18.0204C5.22107 17.9373 4.93577 17.8049 4.72377 17.5373C4.36847 17.0888 4.36102 16.4376 4.71912 15.9884C4.78842 15.9014 4.86502 15.8197 4.94372 15.741C7.13502 13.5488 9.32692 11.3572 11.5193 9.16617C11.5688 9.11677 11.6249 9.07407 11.7402 8.97452C11.6521 8.92272 11.5803 8.89792 11.5319 8.84962C9.32157 6.64322 7.11427 4.43387 4.90402 2.22742C4.51437 1.83842 4.35127 1.39316 4.51827 0.852365C4.76652 0.0485646 5.79228 -0.277636 6.45848 0.235714C6.53268 0.292864 6.60372 0.355165 6.66997 0.421365C9.21102 2.96117 11.7517 5.50132 14.2915 8.04242C14.7661 8.51732 14.8634 9.10752 14.5478 9.64317C14.4716 9.77257 14.365 9.88762 14.2579 9.99482C11.7855 12.4705 9.30972 14.9427 6.83917 17.4201C6.56537 17.6947 6.28287 17.9396 5.89117 18.0205C5.77377 18.0204 5.65632 18.0204 5.53892 18.0204Z" fill="white"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1625_1227">
                                            <rect width="18" height="18" fill="white" transform="translate(0.586914)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="berita-section section-margin-top container position-relative">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center">
                    <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                        berita {!! $sectionJournal->title_header !!}
                    </p>
                </div>
                <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 gy-4">
                    @foreach ($beritas as $berita)
                        <div class="col">
                            <div class="card-blog">
                                <a target="_block"
                                    href="{{ asset('assets/img/humas-images/berita-image/' . $berita->document_pdf) }}"
                                    class="text-decoration-none">
                                    <img src="{{ asset('assets/img/humas-images/berita-image/' . $berita->banner) }}"
                                        alt="{{ $berita->title }}" class="w-100 img-fluid rounded">
                                    <p class="mt-3 text-black fw-semibold text-center">
                                        {!! $berita->title !!}
                                    </p>
                                    <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                                        <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                                        <p class="desc fs-14 lh-base">{!! $berita->created_date !!}</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                    @endforeach
                </div>
                <div class="btn-wrapper d-flex justify-content-center mt-4">
                    @if ($beritaCount > 4)
                        <a href="{{ route('berita') }}" class="btn btn-color">
                            Lihat Semua
                        </a>
                    @endif
                </div>
            </div>
        </section>
        <section class="cta-section container section-margin-top position-relative">
            <div class="position-absolute start-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center text-center">
                    <p class="text-black fw-bold display-5 text-capitalize title-section-text">
                        ada yang ingin ditanyakan? Silahkan Hubungi sekarang juga!
                    </p>
                </div>
                <div class="btn-wrapper d-flex justify-content-center mt-4">
                    <a href="{{ route('profil') }}" class="btn btn-color d-flex gap-2 align-items-center">
                        lihat profile
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10"
                            fill="none">
                            <path
                                d="M1 4.35C0.641015 4.35 0.35 4.64101 0.35 5C0.35 5.35899 0.641015 5.65 1 5.65V4.35ZM19.4596 5.45962C19.7135 5.20578 19.7135 4.79422 19.4596 4.54038L15.323 0.403806C15.0692 0.149965 14.6576 0.149965 14.4038 0.403806C14.15 0.657647 14.15 1.0692 14.4038 1.32304L18.0808 5L14.4038 8.67696C14.15 8.9308 14.15 9.34235 14.4038 9.59619C14.6576 9.85003 15.0692 9.85003 15.323 9.59619L19.4596 5.45962ZM1 5.65L19 5.65V4.35L1 4.35V5.65Z"
                                fill="white" />
                        </svg>
                    </a>
                </div>
            </div>

        </section>
    </main>


    <script>



    </script>
@endsection
