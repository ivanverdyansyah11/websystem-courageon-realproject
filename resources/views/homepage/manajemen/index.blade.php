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
                    @foreach ($managements as $management)
                        <div class="col">
                            <div class="card-school-people text-center">
                                @if ($management->image)
                                    <img src="{{ asset('assets/img/profil-images/manajemen-image/' . $management->image) }}"
                                        alt="{{ $management->fullname }}" class="w-100">
                                @else
                                    <img src="{{ asset('assets-homepage/img/management1.png') }}"
                                        alt="{{ $management->fullname }}" class="w-100">
                                @endif
                                <p class="text-black fw-bold fs-18 mt-3">{{ $management->fullname }}</p>
                                <p class="desc">{{ $management->position }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
