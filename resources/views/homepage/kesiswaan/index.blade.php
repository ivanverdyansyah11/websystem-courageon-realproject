@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="hero-section container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        Kesiswaan Membentuk Karakter & Kreativitas di Sekolah
                    </p>
                    <p class="mt-4 desc">
                        Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan
                        ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama
                        tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#grafik" class="btn btn-color">lihat selengkapnya</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/kesiswaan-hero.png') }}" alt="kesiswaan section image"
                        class="w-100">
                </div>
            </div>
        </section>
        <section class="grafik-section container section-margin-top" id="grafik">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Grafik Data kesiswaan
                    </p>
                </div>
            </div>
            <div class="mt-4 d-flex justify-content-center gap-3">
                <button class="btn btn-text category-name active" onclick="showItems('category1')">
                    semua siswa
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
                            <p class="fs-6 desc fw-medium">Tahun 2021</p>
                        </div>
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart2" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2022</p>
                        </div>
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart3" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2023</p>
                        </div>
                    </div>
                    <div class="category2 item row row-cols-lg-3 row-cols-md-3 row-cols-1 gy-4">
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart4" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2021</p>
                        </div>
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart5" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2022</p>
                        </div>
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart6" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2023</p>
                        </div>
                    </div>
                    <div class="category3 item row row-cols-lg-3 row-cols-md-3 row-cols-1 gy-4">
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart7" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2021</p>
                        </div>
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart8" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2022</p>
                        </div>
                        <div class="col d-flex align-items-center gap-3 flex-column">
                            <canvas id="chart9" class="w-75 h-75"></canvas>
                            <p class="fs-6 desc fw-medium">Tahun 2023</p>
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
        </section>
        <section class="extra-section container section-margin-top">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Ekstrakulikuler Membuka Potensi dan Meningkatkan Kolaborasi
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi
                        mereka di luar lingkup pembelajaran akademis.
                    </p>
                </div>
            </div>
            <div class="content-section row mt-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra1.svg') }}" alt="gambar sepak bola" class="">
                        <p class="card-extra-text text-black fs-18">Sepak Bola</p>
                    </div>
                </a>
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra2.svg') }}" alt="gambar basket" class="">
                        <p class="card-extra-text text-black fs-18">Basket</p>
                    </div>
                </a>
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra3.svg') }}" alt="gambar paduan suara"
                            class="">
                        <p class="card-extra-text text-black fs-18">Paduan Suara</p>
                    </div>
                </a>
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra4.svg') }}" alt="gambar Teater & Drama"
                            class="">
                        <p class="card-extra-text text-black fs-18">Teater & Drama</p>
                    </div>
                </a>
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra5.svg') }}" alt="gambar Pramuka" class="">
                        <p class="card-extra-text text-black fs-18">Pramuka</p>
                    </div>
                </a>
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra6.svg') }}" alt="gambar lukis" class="">
                        <p class="card-extra-text text-black fs-18">Melukis</p>
                    </div>
                </a>
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra7.svg') }}" alt="gambar debat" class="">
                        <p class="card-extra-text text-black fs-18">Debat</p>
                    </div>
                </a>
                <a href="detailExtra.html" class="col">
                    <div class="card-extra d-flex gap-3 align-items-center">
                        <img src="{{ asset('assets-homepage/img/extra8.svg') }}" alt="gambar klub sastra" class="">
                        <p class="card-extra-text text-black fs-18">Klub Sastra</p>
                    </div>
                </a>
            </div>
        </section>
        <section class="pelayanan-karir-section container section-margin-top">
            <div class="d-flex justify-content-center header-section">
                <div class="long-title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Kami Mengarahkan Siswa Menuju Kesuksesan Karir
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare sapien ut ipsum dapibus,
                        sed blandit ante condimentum. Maecenas rutrum nulla nulla, sit amet fringilla nulla elementum id.
                        Phasellus vitae convallis enim, eget pulvinar ex. Donec sit amet commodo velit. In a tortor
                    </p>
                </div>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <a href="detailPelayananKarir.html" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/karir1.png') }}" alt="Gaya Hidup Berkelanjutan"
                                class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Kurangnya Akses dan Informasi yang Komprehensif tentang ...
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
                                    <p class="desc">28 Juli 2023</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detailPelayananKarir.html" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/karir2.png') }}"
                                alt="Kesenjangan dalam Pengembangan Keterampilan ..." class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Kesenjangan dalam Pengembangan Keterampilan ...</p>
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
                                    <p class="desc">28 Juli 2023</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detailPelayananKarir.html" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/karir3.png') }}"
                                alt="Rendahnya Klarifikasi Rencana Karir dan Panduan yang ..." class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Kesenjangan dalam Pengembangan Keterampilan ...</p>
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
                                    <p class="desc">28 Juli 2023</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="detailPelayananKarir.html" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/karir4.png') }}"
                                alt="Kekurangan Pengalaman Praktis yang Menghambat Kemam ..." class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Kesenjangan dalam Pengembangan Keterampilan ...</p>
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
                                    <p class="desc">28 Juli 2023</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <a href="allPelayananKarir.html" class="btn btn-color">Lihat semua</a>
                </div>
            </div>
        </section>
        <section class="prestasi-section container section-margin-top">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Mencetak Prestasi Gemilang, Kisah Sukses Siswa Inspiratif di Sekolah Kami
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi
                        mereka di luar lingkup pembelajaran akademis.
                    </p>
                </div>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-5 gy-4">
                <div class="col prestasi">
                    <a href="detailPrestasi.html" class="">
                        <div class="image-wrapper position-relative">
                            <div class="position-relative">
                                <img src="{{ asset('assets-homepage/img/prestasi1.png') }}"
                                    alt="juara 1 olimpiade fisika" class="w-100 img-prestasi">
                            </div>
                            <div class="position-absolute top-0 start-0" style="z-index: 999999">
                                <div
                                    class="number-wrapper d-flex justify-content-center align-items-center fs-4 fw-black text-white">
                                    1</div>
                            </div>
                            <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                                <div
                                    class="prestasi-category-wrapper d-flex justify-content-center align-items-center fs-15 fw-medium text-white">
                                    Akademik</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <p class="text-center fs-5 fw-bold">Juara 1</p>
                            <p class="text-center fw-semibold text-capitalize">Olimpiade Fisika tingkat Regional</p>
                        </div>
                        <div class="mt-2 d-flex gap-3 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/profile.svg') }}" alt="" class="">
                            <p class="text-secondary fs-15">Rizky Putra</p>
                        </div>
                    </a>
                </div>
                <div class="col prestasi">
                    <div class="image-wrapper position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('assets-homepage/img/prestasi2.png') }}" alt="juara 3 olimpiade sains"
                                class="w-100 img-prestasi">
                        </div>
                        <div class="position-absolute top-0 start-0" style="z-index: 999999">
                            <div
                                class="number-wrapper d-flex justify-content-center align-items-center fs-4 fw-black text-white">
                                2</div>
                        </div>
                        <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                            <div
                                class="prestasi-category-wrapper d-flex justify-content-center align-items-center fs-15 fw-medium text-white">
                                Akademik</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-center fs-5 fw-bold">Juara 3</p>
                        <p class="text-center fw-semibold text-capitalize">Olimpiade Sains tingkat Provinsi</p>
                    </div>
                    <div class="mt-2 d-flex gap-3 justify-content-center">
                        <img src="{{ asset('assets-homepage/img/profile.svg') }}" alt="" class="">
                        <p class="text-secondary fs-15">Siti Rahma</p>
                    </div>
                </div>
                <div class="col prestasi">
                    <div class="image-wrapper position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('assets-homepage/img/prestasi3.png') }}" alt="juara 1 lomba renang"
                                class="w-100 img-prestasi">
                        </div>
                        <div class="position-absolute top-0 start-0" style="z-index: 999999">
                            <div
                                class="number-wrapper d-flex justify-content-center align-items-center fs-4 fw-black text-white">
                                3</div>
                        </div>
                        <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                            <div
                                class="prestasi-category-wrapper d-flex justify-content-center align-items-center fs-15 fw-medium text-white">
                                Non Akademik</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-center fs-5 fw-bold">Juara 3</p>
                        <p class="text-center fw-semibold text-capitalize">
                            Lomba Renang tingkat Sekolah
                        </p>
                    </div>
                    <div class="mt-2 d-flex gap-3 justify-content-center">
                        <img src="{{ asset('assets-homepage/img/profile.svg') }}" alt="" class="">
                        <p class="text-secondary fs-15">Siti Rahma</p>
                    </div>
                </div>
                <div class="col prestasi">
                    <div class="image-wrapper position-relative">
                        <div class="position-relative">
                            <img src="{{ asset('assets-homepage/img/prestasi4.png') }}" alt="juara 2 Olimpiade Biologi"
                                class="w-100 img-prestasi">
                        </div>
                        <div class="position-absolute top-0 start-0" style="z-index: 999999">
                            <div
                                class="number-wrapper d-flex justify-content-center align-items-center fs-4 fw-black text-white">
                                4</div>
                        </div>
                        <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                            <div
                                class="prestasi-category-wrapper d-flex justify-content-center align-items-center fs-15 fw-medium text-white">
                                Akademik</div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <p class="text-center fs-5 fw-bold">Juara 2</p>
                        <p class="text-center fw-semibold text-capitalize">
                            Olimpiade Biologi tingkat Provinsi
                        </p>
                    </div>
                    <div class="mt-2 d-flex gap-3 justify-content-center">
                        <img src="{{ asset('assets-homepage/img/profile.svg') }}" alt="" class="">
                        <p class="text-secondary fs-15">Desi Puspitasari</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
                <a href="allPrestasi.html" class="btn btn-color btn-more">lihat semua</a>
            </div>
        </section>
        <section class="beasiswa-section container section-margin-top">
            <div class="top-section row align-items-center gy-4">
                <div class="col-lg-6 col-xl-5 col-12">
                    <p class="display-5 fw-bold">
                        Ayo dapatkan Peluang Beasiswa di Sekolah!
                    </p>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-6 col-12">
                    <p class="desc">
                        Dengan adanya beasiswa di sekolah, para siswa berpeluang untuk mengakses pendidikan yang berkualitas
                        tanpa memandang latar belakang ekonomi. Ini juga membuka pintu bagi mereka untuk mengembangkan
                        potensi diri
                    </p>
                </div>
            </div>
            <div class="content-section mt-5 row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                <div class="col">
                    <div class="card-beasiswa">
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="number-beasiswa-wrapper d-flex justify-content-center align-items-center">
                                    <p class="fs-4 text-white fw-black">1</p>
                                </div>
                                <p class="fs-5 fw-semibold">Beasiswa Akademik Unggulan</p>
                            </div>
                            <p class="desc">
                                Siswa yang mendapatkan beasiswa ini akan menerima dukungan finansial untuk biaya pendidikan
                                selama satu tahun ajaran, sebagai penghargaan atas dedikasi dan kerja keras mereka dalam
                                prestasi akademik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-beasiswa">
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="number-beasiswa-wrapper d-flex justify-content-center align-items-center">
                                    <p class="fs-4 text-white fw-black">2</p>
                                </div>
                                <p class="fs-5 fw-semibold">Beasiswa Non-Akademik</p>
                            </div>
                            <p class="desc">
                                Siswa yang menunjukkan prestasi di luar akademik seperti dalam olahraga, atau pelayanan
                                masyarakat. Beasiswa ini bertujuan untuk mendorong dan mendukung perkembangan bakat dan
                                kemampuan siswa di berbagai bidang non-akademik.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-beasiswa">
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="number-beasiswa-wrapper d-flex justify-content-center align-items-center">
                                    <p class="fs-4 text-white fw-black">3</p>
                                </div>
                                <p class="fs-5 fw-semibold">Beasiswa Bantuan Keuangan</p>
                            </div>
                            <p class="desc">
                                Beasiswa ini diberikan kepada siswa yang memiliki kebutuhan finansial dan kesulitan dalam
                                membayar biaya pendidikan. Beasiswa ini bertujuan untuk membantu siswa yang kurang mampu
                                agar tetap dapat melanjutkan pendidikan dengan layak.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-4">
            </div>
        </section>
        <section class="testi-section container section-margin-top">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Jejak Karir Alumni, Inspirasi Sukses dari Sekolah Kami!
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        Sejumlah alumni terbaik dari sekolah kami. Dari berbagai latar belakang dan jurusan studi, alumni
                        kami telah mencapai kesuksesan dalam berbagai bidang profesi.
                    </p>
                </div>
            </div>
            <div class="swiper swiper-testi mt-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card-testi">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="img-testi-wrapper">
                                    <img src="{{ asset('assets-homepage/img/testi1.png') }}" alt="testimonial image">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="fs-5 fw-semibold text-capitalize">I Made Arya Saputra - Lulusan 2020</p>
                                    <p class="desc fs-15">Part Of Carnival Cruise Line (CCL) as a Commis</p>
                                </div>
                            </div>
                            <p class="desc mt-3">
                                “Halo teman-teman alumni sekolah! Saya sangat senang ingin berbagi kabar baik. Saat ini,
                                saya bekerja sebagai Komisaris di Carnival Cruise Line. Selama perjalanan karier ini, banyak
                                pelajaran berharga yang saya pelajari. Bersama-sama, mari kita berikan kontribusi positif
                                bagi masa depan sekolah kita.”
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card-testi">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="img-testi-wrapper">
                                    <img src="{{ asset('assets-homepage/img/testi1.png') }}" alt="testimonial image">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="fs-5 fw-semibold text-capitalize">I Made Arya Saputra - Lulusan 2020</p>
                                    <p class="desc fs-15">Part Of Carnival Cruise Line (CCL) as a Commis</p>
                                </div>
                            </div>
                            <p class="desc mt-3">
                                “Halo teman-teman alumni sekolah! Saya sangat senang ingin berbagi kabar baik. Saat ini,
                                saya bekerja sebagai Komisaris di Carnival Cruise Line. Selama perjalanan karier ini, banyak
                                pelajaran berharga yang saya pelajari. Bersama-sama, mari kita berikan kontribusi positif
                                bagi masa depan sekolah kita.”
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination position-relative mt-4 pt-3"></div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
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

        const chart1 = document.getElementById('chart1');
        const chart2 = document.getElementById('chart2');
        const chart3 = document.getElementById('chart3');

        new Chart(chart1, {
            type: 'bar',
            data: {
                labels: ['2021', '2022', '2023'],
                datasets: [{
                    data: [1000, 2380, 2853, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [2000, 1380, 2453, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [3000, 1980, 2953, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#2D9CDB', '#2D9CDB', '#2D9CDB'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },


                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 3000,
                        ticks: {
                            stepSize: 300
                        }
                    },
                    xAxes: [{

                    }]

                }
            }
        });

        new Chart(chart2, {
            type: 'bar',
            data: {
                labels: ['2021', '2022', '2023'],
                datasets: [{
                    data: [2000, 2180, 2553, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [2300, 1290, 2753, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [1900, 2680, 2253, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#2D9CDB', '#2D9CDB', '#2D9CDB'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },


                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 3000,
                        ticks: {
                            stepSize: 300
                        }
                    },
                    xAxes: [{

                    }]

                }
            }
        });

        new Chart(chart3, {
            type: 'bar',
            data: {
                labels: ['2021', '2022', '2023'],
                datasets: [{
                    data: [3000, 2880, 2153, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [2800, 1190, 2153, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [1800, 2180, 2653, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#2D9CDB', '#2D9CDB', '#2D9CDB'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },


                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 3000,
                        ticks: {
                            stepSize: 300
                        }
                    },
                    xAxes: [{

                    }]

                }
            }
        });
    </script>
@endsection
