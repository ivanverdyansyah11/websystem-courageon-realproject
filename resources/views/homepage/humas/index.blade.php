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
                    <img src="{{ asset('assets/img/humas-images/header-image/' . $headerHumas->banner) }}" alt="humas section image" class="w-100">
                  @else
                      <img src="{{ asset('assets-homepage/img/humas-hero.png') }}" alt="humas section image" class="w-100">
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
                        <img src="{{ asset('assets/img/humas-images/kemitraan-image/' . $partner->logo) }}" alt="{{ $partner->name }}" class="img-fluid">
                    </div>                    
                @endforeach
                {{-- <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor2.svg') }}" alt="sponsor 2 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor3.svg') }}" alt="sponsor 3 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor4.svg') }}" alt="sponsor 4 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor5.svg') }}" alt="sponsor 5 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor6.svg') }}" alt="sponsor 6 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor7.svg') }}" alt="sponsor 7 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor8.svg') }}" alt="sponsor 8 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor9.svg') }}" alt="sponsor 9 name" class="img-fluid">
                </div>
                <div class="col d-flex justify-content-center">
                    <img src="{{ asset('assets-homepage/img/sponsor10.svg') }}" alt="sponsor 10 name" class="img-fluid">
                </div> --}}
            </div>
        </section>
        <section class="berita-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <div class="title-section-text">
                    <p class="display-5 fw-bold text-center text-capitalize">{{ $sectionJournal->title_header }}</p>
                </div>
            </div>
            <div class="mt-5 row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita1.png') }}"
                            alt="Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">28 Juli 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita2.png') }}"
                            alt="Pengaruh Teknologi dalam Dunia Pendidikan, Tantangan di Sekolah" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Pengaruh Teknologi dalam Dunia Pendidikan, Tantangan di Sekolah
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">26 Juli 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita3.png') }}"
                            alt="Tips untuk Membangun Kemitraan dengan Sekolah" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Tips untuk Membangun Kemitraan dengan Sekolah
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">25 Juli 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita4.png') }}"
                            alt="Menelusuri Jejak Sejarah Sekolah: Kilas Balik 50 Tahun Perjalanan Pendidikan"
                            class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Menelusuri Jejak Sejarah Sekolah: Kilas Balik 50 Tahun Perjalanan Pendidikan
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">22 Juli 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita5.png') }}"
                            alt="Belajar dari Pengalaman, Siswa Berbagi Cerita tentang Ujian Nasional" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Belajar dari Pengalaman, Siswa Berbagi Cerita tentang Ujian Nasional
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">21 Juli 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita6.png') }}"
                            alt="Pengalaman Program Pertukaran Pelajar di SMA Negeri 1 Selat" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Pengalaman Program Pertukaran Pelajar di SMA Negeri 1 Selat
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">20 Juli 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita7.png') }}"
                            alt="Menjaga Kesehatan Mental di Tengah Tuntutan Sekolah" class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Menjaga Kesehatan Mental di Tengah Tuntutan Sekolah
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">18 Juli 2023</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-berita-wrapper">
                        <img src="{{ asset('assets-homepage/img/berita8.png') }}"
                            alt="Mengenal Ekstrakurikuler Unggulan di Sekolah, Meraih Potensi Terbaik Siswa!"
                            class="w-100">
                        <p class="mt-3 text-black fw-semibold text-center">
                            Mengenal Ekstrakurikuler Unggulan di Sekolah, Meraih Potensi Terbaik Siswa!
                        </p>
                        <div class="mt-2 d-flex gap-2 justify-content-center">
                            <img src="{{ asset('assets-homepage/img/calendar.svg') }}" alt="" class="">
                            <p class="desc text-capitalize">13 Juli 2023</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 d-flex justify-content-center">
                <a href="{{ route('berita') }}" class="btn btn-color">{{ $sectionJournal->button }}</a>
            </div>
        </section>
    </main>
@endsection
