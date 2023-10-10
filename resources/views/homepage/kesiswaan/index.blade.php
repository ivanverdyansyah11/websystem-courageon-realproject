@extends('templates.main')

@section('container')
    {{-- @dd($dataSiswaTahunIni[3]) --}}

    <main class="">
        {{-- <section class="hero-section container position-relative">
            <div class="position-absolute end-50 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        {!! $headerStudent->title_header !!}
                    </p>
                    <p class="mt-4 desc">
                        {!! $headerStudent->description !!}
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#grafik" class="btn btn-color">{!! $headerStudent->button !!}</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="position-relative">
                        <div class="position-absolute w-100 h-100">
                            <div class="side-img-section-decor right-img-section-decor w-100 h-100"></div>
                        </div>
                        <div class="position-relative">
                            @if ($headerStudent->banner)
                                <img src="{{ asset('assets/img/kesiswaan-images/header-image/' . $headerStudent->banner) }}"
                                    alt="kesiswaan section image" class="w-100 img-section right-img-section">
                            @else
                                <img src="{{ asset('assets-homepage/img/kesiswaan-hero.png') }}"
                                    alt="kesiswaan section image" class="w-100">
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
                            @foreach($headerStudents as $key => $headerStudent)

                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="position-relative">
                                            <div class="position-absolute w-100" style="z-index: 99999">
                                                <div class="container">
                                                    <div class="d-flex flex-column align-items-md-center text-md-center text-white centered-content">
                                                        <div class="content-hero-wrapper">
                                                            <p class="display-4 fw-bold text-white text-capitalize">
                                                                {!! $headerStudent->title_header !!}
                                                            </p>
                                                            <p class="mt-4 desc text-white">
                                                                {!! $headerStudent->description !!}
                                                            </p>
                                                            <div class="mt-4 d-flex gap-3 justify-content-md-center align-items-center">
                                                                <a href="#grafik" class="btn btn-color">{{ $headerStudent->button }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-relative w-100">
                                                <img src="{{ asset('assets/img/kesiswaan-images/header-image/' . $headerStudent->banner) }}"
                                                alt="student section image" class="w-100 hero-img">
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
        <section class="grafik-kesiswaan-section container section-margin-top position-relative" id="grafik">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center header-section">
                    <div class="title-section-text">
                        <p class="text-center display-5 fw-bold text-capitalize">
                            {!! $sectionStudent->title_section !!}
                        </p>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-center gap-3">
                    <button class="btn btn-text category-name active" onclick="showItems('category1')">
                        SEMUA SISWA
                    </button>
                    <button class="btn btn-text category-name" onclick="showItems('category2')">
                        SISWA LAKI-LAKI
                    </button>
                    <button class="btn btn-text category-name" onclick="showItems('category3')">
                        SISWA PEREMPUAN
                    </button>
                </div>
                <div class="mt-4">
                    <div class="category-content">
                        <div class="category1 item row row-cols-lg-3 row-cols-md-3 row-cols-1 gy-4">
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart1" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[0]->tahun }} </p>
                            </div>
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart2" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[1]->tahun }}</p>
                            </div>
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart3" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[2]->tahun }}</p>
                            </div>
                        </div>
                        <div class="category2 item row row-cols-lg-3 row-cols-md-3 row-cols-1 gy-4">
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart4" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[0]->tahun }}</p>
                            </div>
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart5" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[1]->tahun }}</p>
                            </div>
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart6" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[2]->tahun }}</p>
                            </div>
                        </div>
                        <div class="category3 item row row-cols-lg-3 row-cols-md-3 row-cols-1 gy-4">
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart7" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[0]->tahun }}</p>
                            </div>
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart8" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[1]->tahun }}</p>
                            </div>
                            <div class="col d-flex align-items-center gap-3 flex-column">
                                <canvas id="chart9" class="w-75 h-75"></canvas>
                                <p class="fs-6 desc fw-medium">Tahun {{ $tahunAjaran[2]->tahun }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex gap-4 justify-content-center mt-2">
                        <div class="d-flex gap-2 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                fill="none">
                                <ellipse cx="8.02157" cy="7.5" rx="7.48935" ry="7.5" fill="#F94144" />
                            </svg>
                            <p class="text-black fw-medium">Kelas X</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                fill="none">
                                <ellipse cx="8.00009" cy="7.5" rx="7.48935" ry="7.5" fill="#90BE6D" />
                            </svg>
                            <p class="text-black fw-medium">Kelas XI</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                fill="none">
                                <ellipse cx="7.9786" cy="7.5" rx="7.48935" ry="7.5" fill="#2D9CDB" />
                            </svg>
                            <p class="text-black fw-medium">Kelas XII</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="extra-section container section-margin-top">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        {!! $sectionExtracurricular->title_section !!}
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        {!! $sectionExtracurricular->description !!}
                    </p>
                </div>
            </div>
            <div class="content-section row mt-5 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 gy-4">
                @foreach ($extracurriculars as $extra)
                    <a href="{{ route('detail-ekstrakurikuler', $extra->id) }}" class="col">
                        <div class="card-extra d-flex gap-3 align-items-center">
                            <img src="{{ asset('assets/img/kesiswaan-images/ekstrakurikuler-image/' . $extra->icon) }}"
                                alt="gambar {{ $extra->name }}" class="square-img">
                            <p class="card-extra-text text-black fs-18">{{ $extra->name }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </section>
        <section class="pelayanan-karir-section container section-margin-top position-relative">
            <div class="position-absolute start-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center header-section">
                    <div class="long-title-section-text">
                        <p class="text-center display-5 fw-bold text-capitalize">
                            {!! $sectionService->title_section !!}
                        </p>
                        <p class="desc fs-6 text-center mt-3">
                            {!! $sectionService->description !!}
                        </p>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 gy-4">
                        @foreach ($pelayananKarir as $karir)
                            <a href="{{ route('detail-pelayanan', $karir->id) }}" class="col">
                                <div class="card-p5">
                                    <img src="{{ asset('assets/img/kesiswaan-images/pelayanan-karir-image/' . $karir->dokumentasi) }}"
                                        alt="{{ $karir->judul }}" class="w-100 square-img">
                                    <div class="mt-3 text-center">
                                        <p class="text-black fw-bold">
                                            {{ Str::limit($karir->judul, 26) }}
                                        </p>
                                        <div class="mt-1 d-flex justify-content-center gap-3 align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M0.492432 5.05566C5.511 5.05566 10.5005 5.05566 15.5108 5.05566C15.5108 5.13453 15.5108 5.2051 15.5108 5.27567C15.5108 7.99873 15.5108 10.7218 15.5108 13.449C15.5108 14.2501 14.9753 14.8686 14.1825 14.9932C14.0662 15.0098 13.9458 15.0222 13.8255 15.0222C9.8322 15.0222 5.83893 15.0222 1.84566 15.0222C1.04037 15.0222 0.529791 14.5283 0.492432 13.7188C0.488281 13.6565 0.488281 13.5943 0.488281 13.532C0.488281 10.7674 0.488281 8.00288 0.488281 5.23416C0.492432 5.17604 0.492432 5.12208 0.492432 5.05566ZM12.5179 7.76212C12.5179 7.57532 12.5179 7.38853 12.5179 7.20589C12.5179 7.19759 12.5179 7.18513 12.5179 7.17683C12.5096 6.93607 12.3685 6.79079 12.1277 6.79079C11.75 6.78664 11.3722 6.78664 10.9945 6.79079C10.7537 6.79079 10.6043 6.92777 10.6001 7.17268C10.5918 7.55457 10.5918 7.93646 10.6001 8.31836C10.6043 8.55081 10.7371 8.6961 10.9654 8.70025C11.3681 8.7127 11.7707 8.7127 12.1734 8.6961C12.4058 8.68779 12.5096 8.55911 12.5137 8.3225C12.522 8.13156 12.5179 7.94476 12.5179 7.76212ZM7.81066 12.9094C8.0016 12.9094 8.19255 12.9135 8.3835 12.9094C8.64086 12.9052 8.76954 12.7931 8.77369 12.5316C8.78199 12.1497 8.78199 11.7678 8.77369 11.386C8.76954 11.141 8.62841 10.9999 8.3835 10.9958C8.0016 10.9875 7.61971 10.9875 7.23782 10.9958C6.99291 10.9999 6.86008 11.1452 6.86008 11.3943C6.85593 11.7678 6.85593 12.1373 6.86008 12.5109C6.86008 12.7682 7.00536 12.9094 7.26688 12.9135C7.44952 12.9094 7.62801 12.9094 7.81066 12.9094ZM12.5179 11.9588C12.5179 11.7678 12.5221 11.5769 12.5179 11.386C12.5137 11.1493 12.3809 10.9999 12.1485 10.9958C11.7541 10.9875 11.3639 10.9875 10.9696 10.9958C10.7537 10.9999 10.6126 11.1327 10.6084 11.3444C10.596 11.7512 10.596 12.1622 10.6084 12.569C10.6167 12.7765 10.7662 12.9052 10.9779 12.9094C11.3722 12.9135 11.7624 12.9135 12.1568 12.9094C12.3851 12.9052 12.5096 12.7765 12.5179 12.5524C12.5221 12.3531 12.5179 12.1539 12.5179 11.9588ZM6.86008 7.73306C6.86008 7.91986 6.86008 8.10666 6.86008 8.2893C6.86423 8.54251 6.99291 8.69194 7.24612 8.6961C7.63216 8.7044 8.02236 8.7044 8.4084 8.6961C8.64501 8.68779 8.76539 8.57572 8.76954 8.33911C8.78199 7.94061 8.78199 7.54212 8.76954 7.14777C8.76539 6.91947 8.61595 6.78663 8.38765 6.78663C8.00575 6.78248 7.62386 6.78248 7.24197 6.78663C7.00121 6.79078 6.86423 6.93192 6.85593 7.17683C6.85593 7.35947 6.86008 7.54627 6.86008 7.73306ZM3.16568 11.9505C3.16568 12.1373 3.16153 12.3241 3.16568 12.5109C3.16983 12.7641 3.31097 12.9094 3.56003 12.9094C3.92116 12.9135 4.2823 12.9135 4.64759 12.9094C4.90495 12.9052 5.07514 12.7558 5.08345 12.5026C5.0959 12.1207 5.09175 11.7388 5.08345 11.3569C5.07514 11.1369 4.93401 10.9999 4.71401 10.9958C4.31966 10.9875 3.92947 10.9875 3.53512 10.9958C3.30266 10.9999 3.17398 11.1535 3.16983 11.3901C3.16153 11.5769 3.16568 11.7637 3.16568 11.9505ZM4.12456 6.78248C3.94192 6.78248 3.76343 6.78248 3.58078 6.78248C3.57248 6.78248 3.56003 6.78248 3.55172 6.78248C3.31097 6.79078 3.16983 6.93192 3.16568 7.17268C3.16153 7.55042 3.16153 7.92816 3.16568 8.30591C3.16568 8.53421 3.29436 8.68779 3.52267 8.69195C3.90871 8.7044 4.29891 8.7044 4.68495 8.69195C4.91741 8.68364 5.07514 8.53006 5.0793 8.29345C5.09175 7.90741 5.0876 7.51721 5.07514 7.13117C5.06684 6.91116 4.91741 6.78663 4.6974 6.78248C4.50646 6.78248 4.31551 6.78248 4.12456 6.78248Z"
                                                    fill="#A5A5A5" />
                                                <path
                                                    d="M15.4644 4.05934C10.4707 4.05934 5.48538 4.05934 0.516625 4.05934C0.516625 3.40348 0.487568 2.75592 0.524927 2.11252C0.553984 1.57289 0.993991 0.946085 1.82419 0.979293C2.19778 0.991746 2.57137 0.983445 2.94081 0.983445C2.99063 0.983445 3.04044 0.983445 3.111 0.983445C3.111 1.10798 3.111 1.2159 3.111 1.31968C3.111 1.64761 3.111 1.97138 3.111 2.29931C3.111 2.63969 3.29365 2.8514 3.58422 2.8514C3.86649 2.8514 4.04913 2.64385 4.04913 2.30762C4.04913 1.92987 4.04913 1.55213 4.04913 1.17439C4.04913 1.11628 4.04913 1.06231 4.04913 0.995898C6.54389 0.995898 9.02619 0.995898 11.5251 0.995898C11.5292 1.04986 11.5334 1.10797 11.5334 1.16194C11.5334 1.56459 11.5292 1.97138 11.5375 2.37403C11.5417 2.60649 11.6745 2.78083 11.8779 2.83894C12.0647 2.89291 12.2847 2.82649 12.3802 2.65215C12.4383 2.55667 12.4632 2.42799 12.4674 2.31592C12.4798 1.93402 12.4715 1.54798 12.4715 1.16609C12.4715 1.11212 12.4715 1.05401 12.4715 0.983445C12.9364 0.983445 13.3806 0.970991 13.8206 0.987595C14.0406 0.995897 14.2689 1.03326 14.4682 1.11213C14.9746 1.31137 15.3399 1.66006 15.4478 2.22459C15.4519 2.2495 15.4561 2.27441 15.4561 2.30346C15.4644 2.88045 15.4644 3.46575 15.4644 4.05934Z"
                                                    fill="#A5A5A5" />
                                            </svg>
                                            <p class="desc">{{ $karir->tanggal }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        <a href="{{ route('pelayanan') }}" class="btn btn-color">{{ $sectionService->button }}</a>
                        @if ($pelayananKarirCount > 4)
                        @endif

                    </div>
                </div>
            </div>
        </section>
        <section class="prestation-section container section-margin-top position-relative">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
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
                            <div class="card-prestasi prestasi">
                                <a href="{{ route('detail-prestasi', $achievement->id) }}" class="">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/img/kesiswaan-images/prestasi-image/' . $achievement->dokumentasi) }}"
                                                alt="juara 1 olimpiade fisika" class="w-100 img-prestasi landscape-card-img">
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
                                        <p class="text-center fw-semibold text-capitalize">
                                            {{ $achievement->nama_kegiatan }}
                                            tingkat {{ $achievement->tingkat }}</p>
                                    </div>
                                    <div class="mt-2 d-flex gap-3 justify-content-center">
                                        <img src="{{ asset('assets-homepage/img/profile.svg') }}" alt=""
                                            class="">
                                        <p class="text-secondary fs-15">{{ $achievement->nama_peserta }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('prestasi') }}" class="btn btn-color btn-more">lihat semua</a>
                    @if ($achievementCount > 4)
                    @endif
                </div>
            </div>
        </section>
        <section class="beasiswa-section container section-margin-top">
            <div class="top-section row align-items-center gy-4">
                <div class="col-lg-6 col-xl-5 col-12">
                    <p class="display-5 fw-bold">
                        {!! $sectionBeasiswa->title_section !!}
                    </p>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-6 col-12">
                    <p class="desc">
                        {!! $sectionBeasiswa->description !!}
                    </p>
                </div>
            </div>
            <div class="content-section mt-5 row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                @foreach ($beasiswas as $key => $beasiswa)
                    <div class="col">
                        <div class="card-beasiswa">
                            <div class="d-flex flex-column gap-3">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="number-beasiswa-wrapper d-flex justify-content-center align-items-center">
                                        <p class="fs-4 text-white fw-black">{{ $key + 1 }}</p>
                                    </div>
                                    <p class="fs-5 fw-semibold">{{ $beasiswa->title }}</p>
                                </div>
                                <p class="desc">
                                    {{ $beasiswa->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section class="testi-section container section-margin-top position-relative">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-absolute start-0 top-0  d-xl-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt=""
                    class="section-decor second-section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center header-section">
                    <div class="title-section-text">
                        <p class="text-center display-5 fw-bold text-capitalize">
                            {!! $sectionAlumni->title_section !!}
                        </p>
                        <p class="desc fs-6 text-center mt-3">
                            {!! $sectionAlumni->description !!}
                        </p>
                    </div>
                </div>
                <div class="swiper swiper-testi mt-5">
                    <div class="swiper-wrapper">
                        @foreach ($alumnis as $alumni)
                            <div class="swiper-slide">
                                <div class="card-testi">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="img-testi-wrapper">
                                            <img src="{{ asset('assets/img/kesiswaan-images/alumni-image/' . $alumni->profile) }}"
                                                alt="testimonial image" class="img-fluid rounded square-img testi-img">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="fs-5 fw-semibold text-capitalize">
                                                {{ $alumni->student->nama_lengkap }}
                                            </p>
                                            <p class="desc fs-15">
                                                {{ $alumni->pekerjaan }}
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
                    <div class="swiper-pagination position-relative mt-4 pt-3"></div>
                </div>
            </div>
        </section>
    </main>
    <p id="label1" class="d-none">{{ $tahunAjaran[0]->tahun }}</p>
    <p id="label2" class="d-none">{{ $tahunAjaran[1]->tahun }}</p>
    <p id="label3" class="d-none">{{ $tahunAjaran[2]->tahun }}</p>


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="https://unpkg.com/chart.js-plugin-labels-dv/dist/chartjs-plugin-labels.min.js">
    </script>

    <script>
         const swiperHero = new Swiper('.swiper-hero', {
            speed: 1200,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            autoplay: {
                delay: 5000,
            },
            navigation: {
                nextEl: ".btn-next",
                prevEl: ".btn-prev",
            },
            breakpoints: {
                1: {
                    slidesPerView: 1,
                    spaceBetween: 4
                },
            }
        })

        document.addEventListener('DOMContentLoaded', function() {
            var showCategory = 'category1';
            var showAllCategory = document.querySelector(`.category-name[data-category="${showCategory}"]`);
            showAllCategory.classList.add('active');
            showCategory.style.display = 'flex';
            showItems(showCategory); // Panggil fungsi showItems() dengan kategori 'category1' sebagai default
        });

        function showItems(category) {
            // Menghapus kelas "active" dari semua kategori
            var categories = document.getElementsByClassName('category-name');
            for (var i = 0; i < categories.length; i++) {
                categories[i].classList.remove('active');
            }

            // Menambahkan kelas "active" ke kategori yang dipilih
            var selectedCategory = event.target;
            if (!selectedCategory.classList.contains('active')) {
                selectedCategory.classList.add('active');
            }

            // Menampilkan item-item yang memiliki kategori yang sama dengan kategori yang dipilih
            var items = document.getElementsByClassName('item');
            for (var j = 0; j < items.length; j++) {
                items[j].style.display = 'none';
                if (items[j].classList.contains(category)) {
                    items[j].style.display = 'flex';
                }
            }
        }

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
                },
                900: {
                    slidesPerView: 2,
                    spaceBetween: 20
                },
                1100: {
                    slidesPerView: 3,
                    spaceBetween: 20
                }
            }
        })

        const chart1 = document.getElementById('chart1');
        const chart2 = document.getElementById('chart2');
        const chart3 = document.getElementById('chart3');
        const chart4 = document.getElementById('chart4');
        const chart5 = document.getElementById('chart5');
        const chart6 = document.getElementById('chart6');
        const chart7 = document.getElementById('chart7');
        const chart8 = document.getElementById('chart8');
        const chart9 = document.getElementById('chart9');

        const label1 = document.getElementById('label1').textContent;
        const label2 = document.getElementById('label2').textContent;
        const label3 = document.getElementById('label3').textContent;

        const data1 = {{ $dataSiswaTahunIni[1] }}
        const data2 = {{ $dataSiswaTahunIni[2] }}
        const data3 = {{ $dataSiswaTahunIni[3] }}

        const data4 = {{ $dataSiswaTahunKedua[1] }}
        const data5 = {{ $dataSiswaTahunKedua[2] }}
        const data6 = {{ $dataSiswaTahunKedua[3] }}

        const data7 = {{ $dataSiswaTahunKetiga[1] }}
        const data8 = {{ $dataSiswaTahunKetiga[2] }}
        const data9 = {{ $dataSiswaTahunKetiga[3] }}


        new Chart(chart1, {
            type: 'pie',
            labels: [label1, label2, label3],
            data: {
                datasets: [{
                    data: [data1, data2, data3],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        display: false
                    }
                },
            }
        });

        new Chart(chart2, {
            labels: [label1, label2, label3],
            type: 'pie',
            data: {
                datasets: [{

                    data: [data4, data5, data6],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },

                scale: {
                    ticks: {
                        display: false
                    }
                },
            }
        });

        new Chart(chart3, {
            labels: [label1, label2, label3],
            type: 'pie',
            data: {
                datasets: [{
                    data: [data7, data8, data9],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        // display: false
                    }
                },
            }
        });

        const data10 = {{ $dataSiswaTahunIniLaki[1] }}
        const data11 = {{ $dataSiswaTahunIniLaki[2] }}
        const data12 = {{ $dataSiswaTahunIniLaki[3] }}

        const data13 = {{ $dataSiswaTahunKeduaLaki[1] }}
        const data14 = {{ $dataSiswaTahunKeduaLaki[2] }}
        const data15 = {{ $dataSiswaTahunKeduaLaki[3] }}

        const data16 = {{ $dataSiswaTahunKetigaLaki[1] }}
        const data17 = {{ $dataSiswaTahunKetigaLaki[2] }}
        const data18 = {{ $dataSiswaTahunKetigaLaki[3] }}

        new Chart(chart4, {
            type: 'pie',
            data: {
                datasets: [{

                    data: [data10, data11, data12],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        display: false
                    }
                },
            }
        });

        new Chart(chart5, {
            type: 'pie',
            data: {
                datasets: [{

                    data: [data13, data14, data15],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],
            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        display: false
                    }
                },
            }
        });

        new Chart(chart6, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [data16, data17, data18],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        // display: false
                    }
                },
            }
        });

        const data19 = {{ $dataSiswaTahunIniPerempuan[1] }}
        const data20 = {{ $dataSiswaTahunIniPerempuan[2] }}
        const data21 = {{ $dataSiswaTahunIniPerempuan[3] }}

        const data22 = {{ $dataSiswaTahunKeduaPerempuan[1] }}
        const data23 = {{ $dataSiswaTahunKeduaPerempuan[2] }}
        const data24 = {{ $dataSiswaTahunKeduaPerempuan[3] }}

        const data25 = {{ $dataSiswaTahunKetigaPerempuan[1] }}
        const data26 = {{ $dataSiswaTahunKetigaPerempuan[2] }}
        const data27 = {{ $dataSiswaTahunKetigaPerempuan[3] }}

        new Chart(chart7, {
            type: 'pie',
            data: {
                datasets: [{

                    data: [data19, data20, data21],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],
            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        display: false
                    }
                },
            }
        });

        new Chart(chart8, {
            type: 'pie',
            data: {
                datasets: [{

                    data: [data22, data23, data24],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],
            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        display: false
                    }
                },
            }
        });

        new Chart(chart9, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [data25, data26, data27],
                    backgroundColor: ['#F94144', '#90BE6D', '#2D9CDB'],
                }, ],
            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    labels: {
                        render: 'percentage',
                        fontColor: 'white',
                        precision: 2,
                        fontSize: [24]
                    }
                },


                scale: {
                    ticks: {
                        // display: false
                    }
                },
            }
        });
    </script>
@endsection
