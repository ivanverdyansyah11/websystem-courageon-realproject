@extends('templates.main')

@section('container')
    <div class="content">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success mb-4" role="alert">
                        {{ session('success') }}
                    </div>
                @elseif(session()->has('failed'))
                    <div class="alert alert-danger mb-4" role="alert">
                        {{ session('failed') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row row-gap">
            <div class="col-12 d-flex justify-content-between align-items-center content-title">
                <h5 class="subtitle">Section Kurikulum</h5>
            </div>
            <div class="col-12">
                <div class="row table-default">
                    <div class="col-12 table-row">
                        <div class="row table-data gap-4">
                            <div class="d-none d-md-inline-block col-2 data-header">Banner</div>
                            <div class="col data-header">Judul <span class="d-none d-md-inline-block">Section</span></div>
                            <div class="col data-header">Deskripsi</div>
                            <div class="col-3 col-xl-2 data-header"></div>
                        </div>
                    </div>
                    <div class="col-12 table-row table-border">
                        <div class="row table-data gap-4 align-items-center">
                            <div class="d-none d-md-inline-block col-2 data-value">
                                @if ($section_section->banner)
                                    <img src="{{ asset('assets/img/akademik-images/kurikulum-image/' . $section_section->banner) }}"
                                        class="img-fluid" alt="Banner Section Curriculum" width="80">
                                @else
                                    <img src="{{ asset('assets/img/other/img-notfound.svg') }}" class="img-fluid"
                                        alt="Image Not Found" width="80">
                                @endif
                            </div>
                            <div class="col data-value data-length">{{ $section_section->title_section }}</div>
                            <div class="col data-value data-length">
                                {!! $section_section->description !!}</div>
                            <div class="col-3 col-xl-2 data-value d-flex justify-content-end">
                                <div class="wrapper-action d-flex">
                                    <a href="{{ route('section-detail') }}"
                                        class="button-action button-detail d-flex justify-content-center align-items-center">
                                        <div class="detail-icon"></div>
                                    </a>
                                    <a href="{{ route('section-edit') }}"
                                        class="button-action button-edit d-none d-md-flex justify-content-center align-items-center">
                                        <div class="edit-icon"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
