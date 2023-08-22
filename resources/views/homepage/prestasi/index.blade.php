@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="prestation-section container">
            <div class="d-flex justify-content-center">
                <p class="text-md-center text-start fw-bold display-5 title-section-text">
                    {{ $sectionAchievement->title_section }}
                </p>
            </div>
            <div class="mt-4 search-filter-wrapper d-flex flex-column align-items-center">
                <form action="{{ route('prestasi-cari') }}" method="GET"
                    class="input-wrapper long-searchbar d-flex justify-content-between gap-3">
                    @csrf
                    <input type="text" class="input-text w-100 desc" name="query" placeholder="masukkan prestasi">
                    <button class="btn btn-color btn-input">cari</button>
                </form>
                <div class="mt-4 d-flex justify-content-center gap-3">
                    <a href="{{ route('prestasi') }}"
                        class="btn btn-text category-name {{ Request::is('prestasi') ? 'active' : '' }}">
                        semua prestasi
                    </a>
                    @foreach ($kategori_prestasi as $kategori)
                        <a href="{{ route('kategori-prestasi', $kategori->id) }}"
                            class="btn btn-text category-name {{ Request::is('kategori-prestasi/' . $kategori->id) ? 'active' : '' }}">
                            {{ $kategori->nama }}
                        </a>
                    @endforeach
                </div>
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
        </section>
    </main>
@endsection
