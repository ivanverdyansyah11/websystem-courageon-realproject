@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="hero-section container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black text-capitalize">
                        {{ $headerHome->title_header }}
                    </p>
                    <p class="mt-4 desc">
                        {{ $headerHome->description }}
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="{{ route('profil') }}" class="btn btn-color">{{ $headerHome->button }}</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    @if ($headerHome->banner)
                        <img src="{{ asset('assets/img/beranda-images/header-image/' . $headerHome->banner) }}"
                            alt="hero-section image" class="w-100">
                    @else
                        <img src="{{ asset('assets-homepage/img/hero-img.png') }}" alt="hero-section image" class="w-100">
                    @endif
                </div>
            </div>
        </section>
        <section class="welcome-section container section-margin-top">
            <div class="top-section row align-items-center gy-4">
                <div class="col-lg-6 col-xl-5 col-12">
                    <p class="display-5 fw-bold">
                        {{ $openingHome->title_opening }}
                    </p>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-6 col-12">
                    <p class="desc">
                        {{ $openingHome->description }}
                    </p>
                </div>
            </div>
            <div class="content-section mt-5 row align-items-center">
                <div class="col-lg-5 d-lg-block d-none">
                    @if ($remarkHome->banner)
                        <img src="{{ asset('assets/img/beranda-images/sambutan-image/' . $remarkHome->banner) }}"
                            alt="hero-section image" class="w-100">
                    @else
                        <img src="{{ asset('assets-homepage/img/welcome-section.png') }}" alt="welcome section image"
                            class="w-100">
                    @endif
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="fw-bold display-5 text-black text-capitalize">
                        {{ $remarkHome->title_remark }}
                    </p>
                    <p class="mt-3 desc">
                        {{ $remarkHome->message }}
                    </p>
                </div>
            </div>
        </section>
        <section class="prestation-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="text-md-center text-start fw-bold display-5 title-section-text">
                    {{ $sectionAchievement->title_section }}
                </p>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-5 gy-4">
                @foreach ($achievements as $key => $achievement)
                    <div class="col prestasi">
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
                                <p class="text-center fs-5 fw-bold">{{ $achievement->hasil }}</p>
                                <p class="text-center fw-semibold text-capitalize">{{ $achievement->nama_kegiatan }}
                                    tingkat {{ $achievement->tingkat }}</p>
                            </div>
                            <div class="mt-2 d-flex gap-3 justify-content-center">
                                <img src="{{ asset('assets-homepage/img/profile.svg') }}" alt="" class="">
                                <p class="text-secondary fs-15">{{ $achievement->nama_peserta }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-4">
                @if ($achievementCount > 4)
                    <a href="{{ route('prestasi') }}" class="btn btn-color btn-more">lihat semua</a>
                @endif
            </div>
        </section>
        <section class="testi-section container section-margin-top">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <p class="display-5 fw-bold text-capitalize">
                        {{ $sectionAlumni->title_section }}
                    </p>
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <div class="swiper swiper-testi">
                        <div class="swiper-wrapper">
                            @foreach ($alumnis as $alumni)
                                <div class="swiper-slide">
                                    <div class="card-testi">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="img-testi-wrapper">
                                                <img src="{{ asset('assets/img/kesiswaan-images/alumni-image/' . $alumni->profile) }}"
                                                    alt="testimonial image">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <p class="fs-5 fw-semibold text-capitalize">
                                                    {{ $alumni->students->nama_lengkap }}
                                                </p>
                                                <p class="desc fs-15">
                                                    {{ $alumni->pekerjaan }}
                                                </p>
                                            </div>
                                        </div>
                                        <p class="desc mt-3">
                                            {{ $alumni->testimoni }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination d-flex justify-content-start position-relative mt-4 pt-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="history-section container section-margin-top">
            <div class="row align-items-center">
                <div class="col-lg-5 d-lg-block d-none">
                    @if ($historyHome->banner)
                        <img src="{{ asset('assets/img/beranda-images/sejarah-image/' . $historyHome->banner) }}"
                            alt="hero-section image" class="w-100">
                    @else
                        <img src="{{ asset('assets-homepage/img/history-img.png') }}" alt="history section image"
                            class="w-100">
                    @endif
                </div>
                <div class="col-lg-7 col-xl-6 col-12 offset-xl-1">
                    <p class="display-5 text-black fw-bold text-capitalize">
                        {{ $historyHome->title_history }}
                    </p>
                    <article class="mt-3">
                        <p class="desc">
                            {{ $historyHome->description }}
                        </p>
                    </article>
                    <a href="{{ route('profil') }}" class="btn mt-4 btn-color d-flex gap-3 align-items-center">
                        {{ $historyHome->button }}
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
        <section class="cta-section container section-margin-top">
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
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiperTesti = new Swiper('.swiper-testi', {
            speed: 500,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            navigation: {
                nextEl: ".btn-next",
                prevEl: ".btn-prev",
            },
            breakpoints: {
                1: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                500: {
                    slidesPerView: 1.2,
                    spaceBetween: 20
                }
            }
        })
    </script>
@endsection
