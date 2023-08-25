@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="hero-section container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        {{ $headerProfile->title_header }}
                    </p>
                    <p class="mt-4 desc">
                        {{ $headerProfile->description }}
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#visiMisi" class="btn btn-color">{{ $headerProfile->button }}</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    @if ($headerProfile->banner)
                        <img src="{{ asset('assets/img/profil-images/header-image/' . $headerProfile->banner) }}"
                            alt="profile section image" class="w-100">
                    @else
                        <img src="{{ asset('assets-homepage/img/profile-hero.png') }}" alt="profile section image"
                            class="w-100">
                    @endif
                </div>
            </div>
        </section>
        <section class="vision-section container section-margin-top" id="visiMisi">
            <div class="row">
                <div class="col-lg-5 d-lg-block d-none">
                    @if ($visiMision->banner)
                        <img src="{{ asset('assets/img/profil-images/visi-misi-image/' . $visiMision->banner) }}"
                            alt="visi misi image" class="w-100">
                    @else
                        <img src="{{ asset('assets-homepage/img/visi-img.png') }}" alt="visi misi image" class="w-100">
                    @endif
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <div class="d-flex flex-column gap-4">
                        <div class="accordion" id="myAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button ps-0 gap-4 align-items-center text-white"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <p class="fw-semibold">{{ $visiMision->title_vision }}</p>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#myAccordion">
                                    <div class="card-body">
                                        <p class="fs-15 desc">
                                            {{ $visiMision->description_vision }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="myAccordion2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading2">
                                    <button type="button" class="accordion-button ps-0 gap-4 align-items-center text-white"
                                        data-bs-toggle="collapse" data-bs-target="#collapse2">
                                        <p class="fw-semibold">{{ $visiMision->title_mission }}</p>
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#myAccordion2">
                                    <div class="card-body">
                                        <p class="fs-15 desc-color">{{ $visiMision->description_mission }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="quote-section container section-margin-top">
            <div class="d-flex flex-column align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="29" viewBox="0 0 36 29" fill="none">
                    <path
                        d="M35.7148 25.08C34.3355 22.2027 33.1739 19.3255 32.7383 16.2564C32.3995 13.8587 32.2543 11.437 32.1575 9.0393C32.0607 6.37785 32.1333 3.71639 32.1333 1.05494C32.1333 0.719261 32.1333 0.407559 32.1333 0.0239258C27.5596 0.0239258 23.0343 0.0239258 18.4364 0.0239258C18.4364 0.359605 18.4364 0.671308 18.4364 1.00699C18.4364 3.28481 18.5332 5.56263 18.4122 7.81647C18.146 12.9955 19.6948 17.695 22.2841 22.0588C23.6393 24.3606 25.4059 26.4227 27.003 28.6046C27.3418 29.0601 27.6806 29.1081 28.213 28.8204C30.6813 27.5496 33.1739 26.3507 35.7148 25.08Z"
                        fill="#0160C9" />
                    <path
                        d="M14.5163 0C9.91835 0 5.44144 0 0.964533 0C0.916134 0.0959082 0.843534 0.143859 0.843534 0.191814C0.916134 4.57962 0.311148 9.01538 1.23073 13.3312C2.4649 19.1816 5.36884 24.2648 9.45856 28.6526C9.65215 28.8444 10.1119 29.0122 10.3297 28.9163C12.8949 27.6935 15.46 26.3987 18.001 25.1519C17.2992 23.3057 16.549 21.5074 15.944 19.6852C14.9034 16.5921 14.5647 13.3792 14.5163 10.1423C14.4679 7.12118 14.4921 4.10008 14.4921 1.07897C14.5162 0.743289 14.5163 0.431587 14.5163 0Z"
                        fill="#0160C9" />
                </svg>
                <div class="title-section-text">
                    <p class="display-3 fw-bold text-black text-center text-capitalize">
                        {{ $motto->motto }}
                    </p>
                </div>
                <div class="mt-2 text-center">
                    <p class="desc fs-5">By <span class="main-color fw-semibold">{{ $motto->speaker }}</span>
                    </p>
                </div>
            </div>
        </section>
        <section class="logo-meaning-section container section-margin-top">
            <div class="img-footer-wrapper d-flex justify-content-center">
                <img src="{{ asset('assets-homepage/img/logo.png') }}" alt="logo" class="big-logo-meaning">
            </div>
            <div class="mt-5 row row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                <div class="col">
                    <div class="logo-meaning-card">
                        <p class="fs-5 fw-bold text-black text-capitalize">Makna Logo</p>
                        <p class="mt-2 desc fs-6">
                            {{ $logo->logo_meaning }}
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="logo-meaning-card">
                        <p class="fs-5 fw-bold text-black text-capitalize">Makna Font</p>
                        <p class="mt-2 desc fs-6">
                            {{ $logo->font_meaning }}
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="logo-meaning-card">
                        <p class="fs-5 fw-bold text-black text-capitalize">Makna Warna</p>
                        <p class="mt-2 desc fs-6">
                            {{ $logo->color_meaning }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mars-section container section-margin-top">
            <div class="row">
                <div class="col-lg-5 d-lg-block d-none">
                    @if ($mars->banner)
                        <img src="{{ asset('assets/img/profil-images/mars-image/' . $mars->banner) }}"
                            alt="mars section image" class="w-100 h-100">
                    @else
                        <img src="{{ asset('assets-homepage/img/mars-img.png') }}" alt="mars section image"
                            class="w-100 h-100">
                    @endif
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <p class="text-black display-5 fw-bold text-capitalize">
                        {{ $mars->title_section }}
                    </p>
                    <div class="song-wrapper mt-3">
                        <p class="desc song-lyric ">
                            {!! $mars->mars !!}
                        </p>
                    </div>
                    <p class="mt-3 desc fs-6">
                        Ciptaan: <span class="fw-semibold text-black"> {{ $mars->creation }}</span>
                    </p>
                </div>
            </div>
        </section>
        <section class="management-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">
                    {{ $sectionManagement->title_section }}</p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
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
                <div class="d-flex justify-content-center mt-4">
                    @if ($managementCount > 4)
                        <a href="{{ route('manajemen') }}" class="btn btn-color">{{ $sectionManagement->button }}</a>
                    @endif
                </div>
            </div>
        </section>
        <section class="teacher-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">
                    {{ $sectionTeacher->title_section }}
                </p>
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
                <div class="mt-4 d-flex justify-content-center">
                    @if ($teacherCount > 4)
                        <a href="{{ route('guru') }}" class="btn btn-color">{{ $sectionTeacher->button }}</a>
                    @endif
                </div>
            </div>
        </section>
        <section class="employee-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">
                    {{ $sectionStaff->title_section }}</p>
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
                                    <img src="{{ asset('assets-homepage/img/employee1.png') }}"
                                        alt="{{ $staff->fullname }}" class="w-100">
                                @endif
                                <p class="text-black fw-bold fs-18 mt-3">{{ $staff->fullname }}</p>
                                <p class="desc">{{ $staff->position }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    @if ($staffCount > 4)
                        <a href="{{ route('pegawai') }}" class="btn btn-color">{{ $sectionStaff->button }}</a>
                    @endif
                </div>
            </div>
        </section>
        <section class="location-section container section-margin-top">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <iframe src="{{ $sectionContact->url_maps }}" class="w-100" height="450px" style="border:0;"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <p class="text-black fw-bold text-capitalize display-5">
                        {{ $sectionContact->title_section }}
                    </p>
                    <div class="mt-4 d-flex flex-column gap-4">
                        @foreach ($contacts as $contact)
                            <div class="d-flex gap-3">
                                <div class="icon-location-wrapper d-flex justify-content-center align-items-center">
                                    @if ($contact->icon)
                                        <img src="{{ asset('assets/img/profil-images/kontak-image/' . $contact->icon) }}"
                                            alt="{{ $contact->fullname }}" class="w-30">
                                    @else
                                        <img src="{{ asset('assets-homepage/img/employee1.png') }}"
                                            alt="{{ $contact->fullname }}" class="w-100">
                                    @endif
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="desc fs-6">{{ $contact->name }}</p>
                                    <p class="fw-semibold fs-5">{{ $contact->link }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
