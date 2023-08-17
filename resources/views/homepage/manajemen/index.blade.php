@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="management-section container">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">data Manajemen SMA Negeri 1 Selat
                </p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management1.png') }}" alt="Dr. Andi Pranoto, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Dr. Andi Pranoto, M.Pd.</p>
                            <p class="desc">Kepala Sekolah</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management2.png') }}" alt="Ibu Rina Widya, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Ibu Rina Widya, S.Pd.</p>
                            <p class="desc">Wakil Kepala Sekolah Kurikulum</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management3.png') }}" alt="Bapak Ahmad Yani, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Bapak Ahmad Yani, S.Pd.</p>
                            <p class="desc">Wakil Kepala Sekolah Kesiswaan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management4.png') }}" alt="Siti Nurul, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Siti Nurul, M.Pd.</p>
                            <p class="desc">Kepala Program Studi Matematika</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
