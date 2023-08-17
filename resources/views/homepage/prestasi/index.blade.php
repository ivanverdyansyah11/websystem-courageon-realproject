@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="prestation-section container">
            <div class="d-flex justify-content-center">
                <p class="text-md-center text-start fw-bold display-5 title-section-text">
                    Mencetak Prestasi Gemilang, Kisah Sukses Siswa Inspiratif di Sekolah Kami
                </p>
            </div>
            <div class="mt-4 search-filter-wrapper d-flex flex-column align-items-center">
                <div class="input-wrapper long-searchbar d-flex justify-content-between gap-3">
                    <input type="text" class="input-text w-100 desc" name="" placeholder="masukkan prestasi">
                    <button class="btn btn-color btn-input">cari</button>
                </div>
                <div class="mt-3 d-flex justify-content-center gap-3">
                    <button class="btn btn-text category-name active">
                        semua prestasi
                    </button>
                    <button class="btn btn-text category-name">
                        akademik
                    </button>
                    <button class="btn btn-text category-name">
                        non akademik
                    </button>
                </div>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 mt-5 gy-4">
                <div class="col akademik item">
                    <a href="detailPrestasi.html" class="">
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
                <div class="col akademik item">
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
                <div class="col  non_akademik item">
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
                <div class="col akademik item">
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
        </section>
    </main>
@endsection
