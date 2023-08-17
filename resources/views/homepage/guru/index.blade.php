@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="teacher-section container">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">data Guru SMA Negeri 1 Selat</p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher1.png') }}" alt="Dewi Permata, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Dewi Permata, M.Pd.</p>
                            <p class="desc">Guru Matematika</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher2.png') }}" alt="Rudi Setiawan, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Rudi Setiawan, S.Pd.</p>
                            <p class="desc">Guru Bahasa Inggris</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher3.png') }}" alt="Siti Rahayu, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Siti Rahayu, M.Pd.</p>
                            <p class="desc">Guru Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher4.png') }}" alt="Deni Sutomo, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Deni Sutomo, S.Pd.</p>
                            <p class="desc">Guru IPA(Ilmu Pengetahuan Alam</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
