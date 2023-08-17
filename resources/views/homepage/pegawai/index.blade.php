@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="employee-section container">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">Data Pegawai SMA Negeri 1 Selat
                </p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee1.png') }}" alt="Siti Wulandari" class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Siti Wulandari</p>
                            <p class="desc">Staf Administrasi Keuangan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee2.png') }}" alt="Andi Pratama" class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Andi Pratama</p>
                            <p class="desc">Staf Administrasi Akademik</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee3.png') }}" alt="Maya Fitriani" class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Maya Fitriani</p>
                            <p class="desc">Staf Perpustakaan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee4.png') }}" alt="Dina Wulandari" class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Dina Wulandari</p>
                            <p class="desc">Staf Laboratorium Sains</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
