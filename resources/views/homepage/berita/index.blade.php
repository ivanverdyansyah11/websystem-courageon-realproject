@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="blog-section container">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                    berita terbaru mengenai SMA Negeri 1 Selat
                </p>
                <div class="mt-4 input-wrapper long-searchbar d-flex justify-content-between gap-3">
                    <input type="text" class="input-text w-100 desc" name="" placeholder="masukkan judul berita">
                    <button class="btn btn-color btn-input">cari</button>
                </div>
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
        </section>
    </main>
@endsection
