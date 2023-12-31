@extends('templates.main')

@section('container')
    <main class="">
        {{-- <section class="hero-section container position-relative">
            <div class="position-absolute end-50 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        {!! $headerSaranaPrasarana->title_header !!}
                    </p>
                    <p class="mt-4 desc">
                        {!! $headerSaranaPrasarana->description !!}
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#sapras" class="btn btn-color">{!! $headerSaranaPrasarana->button !!}</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="position-relative">
                        <div class="position-absolute w-100 h-100">
                            <div class="side-img-section-decor right-img-section-decor w-100 h-100"></div>
                        </div>
                        <div class="position-relative">
                            @if ($headerSaranaPrasarana->banner)
                                <img src="{{ asset('assets/img/sarana-prasarana-images/header-image/' . $headerSaranaPrasarana->banner) }}"
                                    alt="sarana prasarana section image" class="w-100 img-section right-img-section">
                            @else
                                <img src="{{ asset('assets-homepage/img/sapras-hero.png') }}"
                                    alt="sarana prasarana section image" class="w-100">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <section class="hero-section position-relative">
            <div class="position-relative ">

                <div class="">
                    <div class="swiper swiper-hero">
                        <div class="swiper-wrapper">
                            @foreach($headerSaranaPrasaranas as $key => $headerSaranaPrasarana)

                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="position-relative">
                                            <div class="position-absolute w-100" style="z-index: 99999">
                                                <div class="container">
                                                    <div class="d-flex flex-column align-items-md-center text-md-center text-white centered-content">
                                                        <div class="content-hero-wrapper">
                                                            <p class="display-4 fw-bold text-white text-capitalize">
                                                                {!! $headerSaranaPrasarana->title_header !!}
                                                            </p>
                                                            <p class="mt-4 desc text-white">
                                                                {!! $headerSaranaPrasarana->description !!}
                                                            </p>
                                                            <div class="mt-4 d-flex gap-3 justify-content-md-center align-items-center">
                                                                <a href="#sapras" class="btn btn-color">{{ $headerSaranaPrasarana->button }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="position-relative w-100">
                                                <img src="{{ asset('assets/img/sarana-prasarana-images/header-image/' . $headerSaranaPrasarana->banner) }}"
                                                alt="sarana prasarana section image" class="w-100 hero-img">
                                            </div>

                                        </div>
                                    </div>


                                </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </section>
        <section class="sapras-section container section-margin-top position-relative" id="sapras">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center header-section">
                    <div class="title-section-text">
                        <p class="text-center display-5 fw-bold text-capitalize">
                            {!! $sectionPrasarana->title_section !!}
                        </p>
                        <p class="desc fs-6 text-center mt-3">
                            {!! $sectionPrasarana->description !!}
                        </p>
                    </div>
                </div>
                <div class="content-section mt-5 row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 gy-4">
                    @foreach ($prasaranas as $prasarana)
                        <div class="col">
                            <div class="card-sapras">
                                <button class="p-0 btn-sapras text-decoration-none w-100" data-bs-toggle="modal"
                                    data-bs-target="#modalSapras{{ $prasarana->id }}">
                                    @if ($prasarana->image)
                                        <img src="{{ asset('assets/img/sarana-prasarana-images/sarana-prasarana-image/' . $prasarana->image) }}"
                                            alt="ruang kelas" class="w-100">
                                    @else
                                        <img src="{{ asset('assets-homepage/img/sapras1.png') }}" alt="ruang kelas"
                                            class="w-100">
                                    @endif
                                    <p class="mt-2 text-black fs-4 w-100 fw-semibold text-center text-capitalize">
                                        {{ $prasarana->name }}
                                    </p>
                                    <div class="mt-1 d-flex gap-3 justify-content-center align-items-center">
                                        <div class="d-flex gap-2 justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16"
                                                viewBox="0 0 17 16" fill="none">
                                                <path
                                                    d="M13.3816 10.9685C13.3903 10.9294 13.3946 10.912 13.3946 10.899C13.3946 9.60829 13.3946 8.32195 13.399 7.03126C13.399 6.93131 13.3468 6.90089 13.273 6.87481C12.9383 6.75313 12.6037 6.6271 12.2691 6.50108C12.1605 6.46197 12.0518 6.41851 11.9432 6.37939C11.9345 6.40547 11.9301 6.40982 11.9301 6.41416C11.9301 7.71789 11.9258 9.02596 11.9258 10.3297C11.9258 10.3688 11.9605 10.4253 11.991 10.4383C12.4473 10.6209 12.9079 10.7903 13.3816 10.9685Z"
                                                    fill="white" />
                                                <path
                                                    d="M16.8241 12.268C16.0462 11.9725 15.264 11.677 14.4818 11.3902C14.3688 11.3467 14.3731 11.2772 14.3775 11.1903C14.3775 9.70403 14.3775 8.21778 14.3775 6.73588C14.3775 6.33173 14.2992 6.21874 13.9125 6.07533C13.1693 5.7972 12.4219 5.51907 11.6787 5.24095C11.2529 5.0845 10.9443 5.29744 10.9443 5.75374C10.9443 7.11397 10.9443 8.47418 10.9443 9.8344C10.9443 9.89525 10.9443 9.96043 10.9443 10.0473C10.7922 9.99085 10.6662 9.94739 10.5402 9.89959C10.0578 9.71707 9.57974 9.53455 9.09736 9.35637C9.02349 9.3303 8.98438 9.29988 8.98438 9.21296C8.98872 7.15308 8.98872 5.09319 8.98872 3.0333C8.98872 3.01157 8.99306 2.99419 9.00176 2.95508C9.27554 3.05938 9.54498 3.15933 9.81007 3.25928C12.1046 4.12843 14.3948 4.99324 16.6894 5.86239C16.7329 5.87977 16.7807 5.88846 16.8285 5.9015C16.8241 8.01788 16.8241 10.143 16.8241 12.268Z"
                                                    fill="#232323" fill-opacity="0.36" />
                                                <path
                                                    d="M16.8226 4.91505C15.9882 4.60215 15.1495 4.28926 14.3151 3.97636C12.5898 3.3245 10.8646 2.66829 9.13931 2.02078C9.01763 1.97732 8.97852 1.92082 8.97852 1.79045C8.98721 1.19943 8.98286 0.608405 8.98286 0C9.16538 0.0695321 9.33052 0.130374 9.49566 0.191214C11.7859 1.04733 14.0717 1.90779 16.362 2.7639C16.5705 2.84212 16.7357 2.94642 16.8226 3.15936C16.8226 3.74604 16.8226 4.33272 16.8226 4.91505Z"
                                                    fill="#232323" fill-opacity="0.36" />
                                                <path
                                                    d="M16.2837 13.1285C15.2625 13.5109 14.276 13.8803 13.2895 14.2541C11.7946 14.8147 10.2996 15.3753 8.80903 15.9359C8.61347 16.0097 8.43095 16.0271 8.2267 15.9489C5.767 15.0233 3.30296 14.102 0.843263 13.1763C0.808497 13.1633 0.773731 13.1459 0.712891 13.1242C0.782423 13.0937 0.830225 13.072 0.878029 13.0546C3.37249 12.1116 5.86695 11.1642 8.36576 10.2255C8.44399 10.1951 8.54828 10.1951 8.62651 10.2212C11.1384 11.1642 13.6502 12.1159 16.1577 13.0677C16.1881 13.0807 16.2185 13.0981 16.2837 13.1285Z"
                                                    fill="#232323" fill-opacity="0.36" />
                                                <path
                                                    d="M0.179688 5.90135C2.77845 4.91921 5.3859 3.93273 8.00639 2.94189C8.00639 3.01143 8.00639 3.05488 8.00639 3.09834C8.00639 5.11912 8.00639 7.14424 8.01074 9.16501C8.01074 9.27366 7.98032 9.32581 7.87602 9.36492C5.35114 10.3166 2.82625 11.2727 0.301369 12.2288C0.266603 12.2418 0.231837 12.2548 0.184034 12.2679C0.179688 10.1385 0.179688 8.02642 0.179688 5.90135ZM6.78089 6.70532C6.78089 6.31854 6.78089 5.93612 6.78089 5.54935C6.78089 5.10173 6.46799 4.89314 6.0508 5.04958C4.78619 5.52327 3.51723 6.0013 2.25261 6.47499C1.99621 6.5706 1.89192 6.71835 1.89192 6.99214C1.89192 7.78306 1.88757 8.57399 1.89192 9.36492C1.89192 9.76038 2.20915 9.98636 2.5742 9.8473C3.8562 9.36926 5.13819 8.88689 6.42019 8.40451C6.68528 8.30455 6.78089 8.16114 6.78523 7.87432C6.78089 7.48755 6.78089 7.09643 6.78089 6.70532Z"
                                                    fill="#232323" fill-opacity="0.36" />
                                                <path
                                                    d="M8.00576 0C8.00576 0.63448 8.00142 1.24723 8.01011 1.85998C8.01011 1.97732 7.93188 1.98601 7.86235 2.01643C7.03666 2.32932 6.21097 2.64222 5.38962 2.95077C3.70347 3.58959 2.02166 4.22407 0.335506 4.8629C0.287702 4.88028 0.235554 4.89766 0.174714 4.91939C0.174714 4.3501 0.166021 3.79819 0.179058 3.24628C0.183404 3.01595 0.331161 2.87689 0.544103 2.79867C1.54363 2.42493 2.5388 2.0512 3.53833 1.67746C4.97677 1.13859 6.41522 0.599715 7.85366 0.0608416C7.89277 0.0434586 7.93623 0.0260745 8.00576 0Z"
                                                    fill="#232323" fill-opacity="0.36" />
                                                <path
                                                    d="M13.3816 10.9685C12.9079 10.7903 12.4473 10.6165 11.991 10.4383C11.9605 10.4253 11.9258 10.3645 11.9258 10.3297C11.9258 9.02596 11.9258 7.71789 11.9301 6.41416C11.9301 6.40982 11.9345 6.40547 11.9432 6.37939C12.0518 6.41851 12.1605 6.45762 12.2691 6.50108C12.6037 6.6271 12.9383 6.75313 13.273 6.87481C13.3468 6.90089 13.399 6.93131 13.399 7.03126C13.3946 8.32195 13.3946 9.60829 13.3946 10.899C13.3946 10.912 13.3903 10.9294 13.3816 10.9685Z"
                                                    fill="#232323" fill-opacity="0.36" />
                                                <path
                                                    d="M2.86523 8.67835C2.86523 8.23508 2.86523 7.80051 2.86958 7.36159C2.86958 7.32682 2.91304 7.27467 2.9478 7.26163C3.88214 6.90963 4.82082 6.55762 5.75951 6.20996C5.76385 6.20996 5.7682 6.20996 5.79862 6.21431C5.79862 6.35772 5.79862 6.50547 5.79862 6.65323C5.79862 6.93136 5.80296 7.20514 5.79427 7.48327C5.79427 7.53107 5.74647 7.60495 5.70301 7.62233C4.77737 7.97434 3.85172 8.322 2.92607 8.66531C2.91304 8.674 2.89565 8.674 2.86523 8.67835Z"
                                                    fill="#232323" fill-opacity="0.36" />
                                            </svg>
                                            <p class="desc fs-14 lh-base">{{ $prasarana->total }} Ruangan</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center mt-4">
                    @if ($prasaranaCount > 4)
                        <a href="{{ route('detail-sarana-prasarana') }}"
                            class="btn btn-color">{{ $sectionPrasarana->button }}</a>
                    @endif
                </div>
            </div>

        </section>
        <section class="denah-section container section-margin-top position-relative">
            <div class="position-absolute start-0 bottom-0 d-lg-block d-none">
                <img src="{{ asset('assets-homepage/img/section-decor.svg') }}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="row gy-4">
                    <div class="col-xl-6 col-lg-7">
                        <img src="{{ asset('assets/img/sarana-prasarana-images/denah-image/' . $sectionDenah->map) }}"
                            alt="gambar denah sekolah" class="w-100">
                    </div>
                    <div class="col-lg-5 offset-xl-1">
                        <p class="text-black text-capitalize fs-5 fw-bold">{!! $sectionDenah->title_section !!} :</p>
                        <div class="mt-3 table-wrapper">
                            <table class="table table-denah">
                                <thead class="desc">
                                    <tr>
                                        <th class="d-flex justify-content-between">
                                            <div class="d-flex justify-content-center w-100">{!! $sectionDenah->title_code !!}
                                            </div>
                                            <div class="d-flex justify-content-center w-100">{!! $sectionDenah->title_room !!}
                                            </div>
                                            <div class="d-flex justify-content-center w-100"></div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="text-black">
                                    @foreach ($denahs as $denah)
                                        <tr>
                                            <td class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex justify-content-center w-100">{!! $denah->code !!}
                                                </div>
                                                <div class="d-flex justify-content-center w-100">{!! $denah->name !!}
                                                </div>
                                                <div class="d-flex justify-content-center w-100">
                                                    <button class="btn btn-color btn-sm" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseExample{{ $denah->code }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapseExample{{ $denah->code }}">
                                                        {!! $sectionDenah->button !!}
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="collapse" id="collapseExample{{ $denah->code }}">
                                                <div class="">
                                                    {!! $denah->description !!}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @foreach ($prasaranas as $prasarana)
        <div class="modal fade" id="modalSapras{{ $prasarana->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <img src="{{ asset('assets/img/sarana-prasarana-images/sarana-prasarana-image/' . $prasarana->image) }}"
                            alt="{{ $prasarana->name }}" class="w-100 img-modal">
                        <p class="mt-3 fs-4 fw-semibold text-black">{!! $prasarana->name !!}</p>
                        <p class="mt-1 desc">
                            {!! $prasarana->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
