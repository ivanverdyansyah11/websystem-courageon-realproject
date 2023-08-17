@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="hero-section container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black text-capitalize">
                        SMA Negeri 1 Selat, Wujudkan impianmu yang tinggi di sini!
                    </p>
                    <p class="mt-4 desc">
                        Selamat datang di SMA Negeri 1 Selat, tempat perlindungan pendidikan yang luar biasa di mana
                        keberanian bertemu dengan keunggulan. Komitmen kami untuk merawat keunggulan akademis dan
                        pertumbuhan pribadi membuat kami menjadi institusi terdepan yang menggenggam potensi dalam
                        setiap individu.
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="{{ route('profil-index') }}" class="btn btn-color">lihat profile</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/hero-img.png') }}" alt="hero-section image" class="w-100">
                </div>
            </div>
        </section>
        <section class="welcome-section container section-margin-top">
            <div class="top-section row align-items-center gy-4">
                <div class="col-lg-6 col-xl-5 col-12">
                    <p class="display-5 fw-bold">
                        Selamat Datang Di SMA Negeri 1 Selat!
                    </p>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-6 col-12">
                    <p class="desc">
                        Di SMA Negeri 1 Selat, kami menciptakan lingkungan yang mendukung dan memelihara, yang mendorong
                        individualitas dan kreativitas. Tim pendidik kami yang berdedikasi penuh komitmen untuk
                        menyediakan pendidikan terbaik, dan perhatian pribadi.
                    </p>
                </div>
            </div>
            <div class="content-section mt-5 row align-items-center">
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/welcome-section.png') }}" alt="welcome section image"
                        class="w-100">
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="fw-bold display-5 text-black text-capitalize">
                        Sambutan dari kepala sekolah SMA Negeri 1 Selat
                    </p>
                    <p class="mt-3 desc">
                        “Puji Syukur kepada Tuhan Yang Maha Esa yang telah memberkati SMA Negeri 1 Selat sehingga boleh
                        berkembang dan mendapat kepercayaan masyarakat. Berkomitmen meningkatkan mutu dan pelayanan,
                        teguh dalam iman, berbudaya serta berwawasan lingkungan sehingga mampu menghasilkan lulusan yang
                        siap terjun ke Dunia Usaha, Dunia Industri, dan Dunia Kerja serta memiliki jiwa enterpreneur,
                        mandiri dan mampu berkompetisi di segala bidang.”
                    </p>
                </div>
            </div>
        </section>
        <section class="prestation-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="text-md-center text-start fw-bold display-5 title-section-text">
                    Mencetak Prestasi Gemilang, Kisah Sukses Siswa Inspiratif di Sekolah Kami
                </p>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-5 gy-4">
                <div class="col prestasi">
                    <a href="{{ route('detail-prestasi', '1') }}" class="">
                        <div class="image-wrapper position-relative">
                            <div class="position-relative">
                                <img src="{{ asset('assets-homepage/img/prestasi1.png') }}" alt="juara 1 olimpiade fisika"
                                    class="w-100 img-prestasi">
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
                <a href="{{ route('prestasi') }}" class="btn btn-color btn-more">lihat semua</a>
            </div>
        </section>
        <section class="testi-section container section-margin-top">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <p class="display-5 fw-bold text-capitalize">
                        Apa kata alumni di SMA Negeri 1 Selat?
                    </p>
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <div class="swiper swiper-testi">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card-testi">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="img-testi-wrapper">
                                            <img src="{{ asset('assets-homepage/img/testi1.png') }}"
                                                alt="testimonial image">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="fs-5 fw-semibold text-capitalize">I Made Arya Saputra - Lulusan
                                                2020</p>
                                            <p class="desc fs-15">Part Of Carnival Cruise Line (CCL) as a Commis</p>
                                        </div>
                                    </div>
                                    <p class="desc mt-3">
                                        “Halo teman-teman alumni sekolah! Saya sangat senang ingin berbagi kabar baik.
                                        Saat ini, saya bekerja sebagai Komisaris di Carnival Cruise Line. Selama
                                        perjalanan karier ini, banyak pelajaran berharga yang saya pelajari.
                                        Bersama-sama, mari kita berikan kontribusi positif bagi masa depan sekolah
                                        kita.”
                                    </p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card-testi">
                                    <div class="d-flex gap-3 align-items-center">
                                        <div class="img-testi-wrapper">
                                            <img src="{{ asset('assets-homepage/img/testi1.png') }}"
                                                alt="testimonial image">
                                        </div>
                                        <div class="d-flex flex-column">
                                            <p class="fs-5 fw-semibold text-capitalize">I Made Arya Saputra - Lulusan
                                                2020</p>
                                            <p class="desc fs-15">Part Of Carnival Cruise Line (CCL) as a Commis</p>
                                        </div>
                                    </div>
                                    <p class="desc mt-3">
                                        “Halo teman-teman alumni SMA Negeri 1 Selat! Saya sangat senang ingin berbagi
                                        kabar baik. Saat ini, saya bekerja sebagai Komisaris di Carnival Cruise Line.
                                        Selama perjalanan karier ini, banyak pelajaran berharga yang saya pelajari.
                                        Bersama-sama, mari kita berikan kontribusi positif bagi masa depan sekolah
                                        kita.”
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination d-flex justify-content-start position-relative mt-4 pt-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="history-section container section-margin-top">
            <div class="row align-items-center">
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/history-img.png') }}" alt="history section image"
                        class="w-100">
                </div>
                <div class="col-lg-7 col-xl-6 col-12 offset-xl-1">
                    <p class="display-5 text-black fw-bold text-capitalize">
                        Sejarah singkat tentang SMA Negeri 1 Selat
                    </p>
                    <article class="mt-3">
                        <p class="desc">
                            SMA Negeri 1 Selat didirikan pada tahun 1995 oleh sekelompok pendidik visioner yang percaya
                            bahwa pendidikan sejati tidak hanya tentang akademik, tetapi juga tentang memupuk keberanian
                            dan semangat dalam setiap siswa. Berlokasi di sebuah desa kecil yang indah, sekolah ini
                            berkomitmen untuk menciptakan lingkungan pembelajaran yang inklusif dan inspiratif.
                        </p>
                    </article>
                    <a href="{{ route('profil') }}" class="btn mt-4 btn-color d-flex gap-3 align-items-center">
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
        <section class="blog-section section-margin-top container">
            <div class="d-flex justify-content-center">
                <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                    berita terbaru mengenai SMA Negeri 1 Selat
                </p>
            </div>
            <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                <div class="col card-blog">
                    <a href="#" class="card-blog text-decoration-none">
                        <img src="{{ asset('assets-homepage/img/blog1.png') }}"
                            alt="Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                            <p class="desc fs-14 lh-base">28 Juli 2023</p>
                        </div>
                    </a>
                </div>
                <div class="col card-blog">
                    <a href="#" class="card-blog text-decoration-none">
                        <img src="{{ asset('assets-homepage/img/blog2.png') }}"
                            alt="Pengaruh Teknologi dalam Dunia Pendidikan, Tantangan di Sekolah" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Pengaruh Teknologi dalam Dunia Pendidikan, Tantangan di Sekolah
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                            <p class="desc fs-14 lh-base">3 Juli 2023</p>
                        </div>
                    </a>
                </div>
                <div class="col card-blog">
                    <a href="#" class="card-blog text-decoration-none">
                        <img src="{{ asset('assets-homepage/img/blog3.png') }}"
                            alt="Tips untuk Membangun Kemitraan dengan Sekolah" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Tips untuk Membangun Kemitraan dengan Sekolah
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                            <p class="desc fs-14 lh-base">1 Juli 2023</p>
                        </div>
                    </a>
                </div>
                <div class="col card-blog">
                    <a href="#" class="card-blog text-decoration-none">
                        <img src="{{ asset('assets-homepage/img/blog4.png') }}"
                            alt="Menelusuri Jejak Sejarah Sekolah: Kilas Balik 50 Tahun Perjalanan Pendidikan"
                            class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Menelusuri Jejak Sejarah Sekolah: Kilas Balik 50 Tahun Perjalanan Pendidikan
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center align-items-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="">
                            <p class="desc fs-14 lh-base">1 Juni 2023</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="btn-wrapper d-flex justify-content-center mt-4">
                <a href="allBerita.html" class="btn btn-color">
                    lihat semua
                </a>
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
@endsection
