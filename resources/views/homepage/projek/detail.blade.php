@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="detail-prestasi-wrapper container">
            <div class="row gy-5">
                <div class="col-lg-8 col-12">
                    <div class="prestasi-detail-section">
                        <div class="header-article">
                            <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $project->image) }}"
                            alt="{{ $project->title }}" class="img-detail">
                            <h2 class="fs-2 fw-bold text-black mt-4 text-capitalize">
                                {{ $project->title}}
                            </h2>
                        </div>

                        <article class="mt-4 article-content desc">
                            {{ $project->description }}
                        </article>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="ms-xl-3">
                        <p class="text-black fs-3 fw-bold text-capitalize">Pelaksanaan 5P Lainnya :</p>
                        <div class="mt-3 d-flex flex-column gap-4 other-p5-wrapper">
                            @foreach ($rekomendasi as $rekomen)
                            <a href="{{ route('detail-projek', $rekomen->id) }}" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $rekomen->image) }}"
                                        alt="{{ $rekomen->title }}"
                                            class="w-100 img-detail-rectangle">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-start fw-semibold text-capitalize fs-18">{{ $rekomen->topic }}</p>
                                    <p class="desc fs-14">{{ Str::limit($rekomen->description, 31) }}</p>
                                </div>
                            </a>
                            @endforeach

                            {{-- <a href="{{ route('detail-projek', '1') }}" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets-homepage/img/p53.png') }}" alt="Kearifan Lokal"
                                            class="w-100 img-detail-rectangle">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-start fw-semibold text-capitalize fs-18">Kearifan Lokal</p>
                                    <p class="desc fs-14">Proyek penguatan profil pelajar Panca...</p>
                                </div>
                            </a>
                            <a href="{{ route('detail-projek', '1') }}" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets-homepage/img/p54.png') }}" alt="Kearifan Lokal"
                                            class="w-100 img-detail-rectangle">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-start fw-semibold text-capitalize fs-18">Bhinneka Tunggal Ika</p>
                                    <p class="desc fs-14">Proyek penguatan profil pelajar Panca...</p>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
