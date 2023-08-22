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
                    @foreach ($staffs as $staff)
                        <div class="col">
                            <div class="card-school-people text-center">
                                @if ($staff->image)
                                    <img src="{{ asset('assets/img/profil-images/pegawai-image/' . $staff->image) }}"
                                        alt="{{ $staff->fullname }}" class="w-100">
                                @else
                                    <img src="{{ asset('assets-homepage/img/staff1.png') }}" alt="{{ $staff->fullname }}"
                                        class="w-100">
                                @endif
                                <p class="text-black fw-bold fs-18 mt-3">{{ $staff->fullname }}</p>
                                <p class="desc">{{ $staff->position }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
