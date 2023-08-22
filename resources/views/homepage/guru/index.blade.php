@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="teacher-section container">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">data Guru SMA Negeri 1 Selat</p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                    @foreach ($teachers as $teacher)
                        <div class="col">
                            <div class="card-school-people text-center">
                                @if ($teacher->image)
                                    <img src="{{ asset('assets/img/profil-images/guru-image/' . $teacher->image) }}"
                                        alt="{{ $teacher->fullname }}" class="w-100">
                                @else
                                    <img src="{{ asset('assets-homepage/img/teacher1.png') }}"
                                        alt="{{ $teacher->fullname }}" class="w-100">
                                @endif
                                <p class="text-black fw-bold fs-18 mt-3">{{ $teacher->fullname }}</p>
                                <p class="desc">{{ $teacher->position }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
