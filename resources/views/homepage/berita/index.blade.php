@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="blog-section container">
            <div class="d-flex justify-content-center flex-column align-items-center">
                <p class="title-section-text text-center display-5 text-black fw-bold text-capitalize">
                    {!! $sectionBerita->title_header !!}
                </p>
                <form action="{{ route('berita-cari') }}" method="POST"
                      class="input-wrapper long-searchbar d-flex justify-content-between gap-3">
                    @csrf
                    <input type="search" class="input-text w-100 desc" name="search" placeholder="Masukkan judul berita">
                    <button class="btn btn-color btn-input">cari</button>
                </form>
            </div>
            <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                @foreach ($beritas as $key => $berita)
                    <div class="col">
                        <div class="card-blog">
                            <a href="#"
                               class="text-decoration-none">
                                <img src="{{ asset('assets/img/humas-images/berita-image/' . $berita->banner) }}"
                                     alt="{!! $berita->title !!}" class="w-100">
                                <p class="mt-3 text-black fw-semibold text-center">
                                    {!! $berita->title !!}
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
        </section>
    </main>
@endsection
