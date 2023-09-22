@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="p5-section container">
            <div class="d-flex justify-content-center header-section">
                <div class="long-title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        {!! $sectionProyek->title_section !!}
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        {!! $sectionProyek->description !!}
                    </p>
                </div>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                    @foreach ($projects as $project)
                        <a href="{{ route('detail-projek', $project->id) }}" class="col">
                            <div class="card-p5">
                                <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $project->image) }}"
                                    alt="{{ $project->title }}" class="w-100">
                                <div class="mt-3 text-center">
                                    <p class="text-black fw-bold">{{ $project->topic }}</p>
                                    <p class="desc fs-13 text-capitalize">{!! Str::limit($project->description, 31) !!}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection
