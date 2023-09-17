@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="hero-section container position-relative">
            <div class="position-absolute end-50 bottom-0 d-lg-block d-none">
                <img src="{{asset('assets-homepage/img/section-decor.svg')}}" alt="" class="section-decor">
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        {{ $headerAcademic->title_header }}
                    </p>
                    <p class="mt-4 desc">
                        {{ $headerAcademic->description }}
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#kurikulum" class="btn btn-color">{{ $headerAcademic->button }}</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="position-relative">
                        <div class="position-absolute w-100 h-100">
                            <div class="side-img-section-decor right-img-section-decor w-100 h-100"></div>
                        </div>
                        <div class="position-relative">
                            @if ($headerAcademic->banner)
                                <img src="{{ asset('assets/img/akademik-images/header-image/' . $headerAcademic->banner) }}"
                                alt="akademik section image" class="w-100 img-section right-img-section">
                            @else
                                <img src="{{ asset('assets-homepage/img/akademik-hero.png') }}" alt="akademik section image"
                                    class="w-100">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kurikulum-section container section-margin-top position-relative" id="kurikulum">
            <div class="row align-items-center">
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="position-relative">
                        <div class="position-absolute w-100 h-100">
                            <div class="side-img-section-decor left-img-section-decor w-100 h-100"></div>
                        </div>
                        <div class="position-relative">
                            @if ($curriculum->banner)
                                <img src="{{ asset('assets/img/akademik-images/kurikulum-image/' . $curriculum->banner) }}"
                                alt="kurikulum section image" class="w-100 img-section left-img-section">
                            @else
                                <img src="{{ asset('assets-homepage/img/kurikulum-img.png') }}" alt="kurikulum section image"
                                    class="w-100">
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <p class="text-black display-5 fw-bold text-capitalize">
                        {{ $curriculum->title_section }}
                    </p>
                    <article class="mt-3">
                        <div class="card-desc-section">
                            <p class="desc">
                                {!! $curriculum->description !!}
                            </p>
                        </div>
                        {{-- <p class="desc mt-1">
                            Fokus akan diberikan pada pengintegrasian teknologi dalam pembelajaran, pendekatan kreatif dalam
                            mengajar, inklusi pendidikan bagi semua, serta upaya untuk mengembangkan keterampilan abad ke-21
                            seperti kritis berpikir, kerjasama, keterampilan digital, dan pemecahan masalah.
                        </p> --}}
                    </article>
                </div>
            </div>
        </section>
        <section class="program-akademik-section container section-margin-top position-relative">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
                <img src="{{asset('assets-homepage/img/section-decor.svg')}}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center">
                    <p class="title-section-text text-center fw-bold text-capitalize text-black display-5">
                        {{ $sectionProgram->title_section }}
                    </p>
                </div>
                <div class="d-flex flex-column gap-5 mt-5">
                    @foreach ($programs as $program)
                        <div class="row align-items-center row-program">
                            <div class="col-xl-6 col-lg-7 col-12">
                                <p class="fs-5 text-black fw-bold">{{ $program->title }}</p>
                                <article class="mt-3">
                                    <div class="card-desc-section">
                                        <p class="desc">
                                            {{ $program->description }}
                                        </p>
                                    </div>
                                </article>
                                <a target="_block" href="{{ $program->link }}"
                                    class="d-flex align-items-center gap-2 mt-4 btn btn-color">
                                    {{ $program->button }}
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10"
                                        fill="none">
                                        <path
                                            d="M1 4.35C0.641015 4.35 0.35 4.64101 0.35 5C0.35 5.35899 0.641015 5.65 1 5.65V4.35ZM19.4596 5.45962C19.7135 5.20578 19.7135 4.79422 19.4596 4.54038L15.323 0.403806C15.0692 0.149965 14.6576 0.149965 14.4038 0.403806C14.15 0.657647 14.15 1.0692 14.4038 1.32304L18.0808 5L14.4038 8.67696C14.15 8.9308 14.15 9.34235 14.4038 9.59619C14.6576 9.85003 15.0692 9.85003 15.323 9.59619L19.4596 5.45962ZM1 5.65L19 5.65V4.35L1 4.35V5.65Z"
                                            fill="white" />
                                    </svg>
                                </a>
                            </div>
                            <div class="col-xl-1 d-xl-block d-none"></div>
                            <div class="col-lg-5 d-lg-block d-none img-wrapper">
                                <div class="position-relative">
                                    <div class="position-absolute w-100 h-100">
                                        <div class="side-img-section-decor img-section-decor w-100 h-100"></div>
                                    </div>
                                    <div class="position-relative">
                                        <img src="{{ asset('assets/img/akademik-images/program-image/' . $program->banner) }}"
                                        alt="Image {{ $program->title }}" class="w-100 img-section">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </section>
        <section class="p5-section container section-margin-top position-relative">
            <div class="position-absolute start-0 bottom-0 d-lg-block d-none">
                <img src="{{asset('assets-homepage/img/section-decor.svg')}}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center header-section">
                    <div class="long-title-section-text">
                        <p class="text-center display-5 fw-bold text-capitalize">
                            {{ $sectionProyek->title_section }}
                        </p>
                        <p class="desc fs-6 text-center mt-3">
                            {{ $sectionProyek->description }}
                        </p>
                    </div>
                </div>
                <div class="mt-5">
                    <div class="row row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-1 gy-4">
                        @foreach ($projects as $project)
                            <a href="{{ route('detail-projek', $project->id) }}" class="col">
                                <div class="card-p5">
                                    <img src="{{ asset('assets/img/akademik-images/proyek-image/' . $project->image) }}"
                                        alt="{{ $project->title }}" class="w-100">
                                    <div class="mt-3 text-center">
                                        <p class="text-black fw-bold">{{ $project->topic }}</p>
                                        <p class="desc fs-13 text-capitalize">{{ Str::limit($project->description, 31) }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="mt-4 d-flex justify-content-center">
                        @if ($projectCount > 4)
                            <a href="{{ route('projek') }}" class="btn btn-color">{{ $sectionProyek->button }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <section class="gallery-section section-margin-top container">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        {{ $sectionGallery->title_section }}
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        {{ $sectionGallery->description }}
                    </p>
                </div>
            </div>
            <div class="mt-2">
                <div class="pin-container">
                    @foreach ($galleries as $gallery)
                        <a href="{{ asset('assets/img/akademik-images/galeri-image/' . $gallery->image) }}"
                            data-toggle="lightbox" class="pin-img rounded" data-gallery="example-gallery">
                            <img src="{{ asset('assets/img/akademik-images/galeri-image/' . $gallery->image) }}"
                                class="w-100 rounded" alt="gallery {{ $loop->index + 1 }}">
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="grafik-akademik-section container section-margin-top position-relative">
            <div class="position-absolute end-0 bottom-0 d-lg-block d-none">
                <img src="{{asset('assets-homepage/img/section-decor.svg')}}" alt="" class="section-decor">
            </div>
            <div class="position-relative">
                <div class="d-flex justify-content-center header-section">
                    <div class="title-section-text">
                        <p class="text-center display-5 fw-bold text-capitalize">
                            {{ $sectionGraduation->title_section }}
                        </p>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-center gap-3">
                    <button
                            class="btn btn-text category-name active"
                            onclick="showItems('category1')"
                    >
                      semua siswa
                    </button>
                    <button
                            class="btn btn-text category-name"
                            onclick="showItems('category2')"
                    >
                      SISWA LAKI-LAKI
                    </button>
                    <button
                            class="btn btn-text category-name"
                            onclick="showItems('category3')"
                    >
                      SISWA PEREMPUAN
                    </button>
                  </div>
                <div class="mt-5">
                    <div class="category-content">
                        <div class="category1 item">
                            <canvas id="chart1" class="w-100"></canvas>
                        </div>
                        <div class="category2 item">
                            <canvas id="chart2" class="w-100"></canvas>
                        </div>
                        <div class="category3 item">
                            <canvas id="chart3" class="w-100"></canvas>
                        </div>
                    </div>
                    <div class="d-flex gap-4 justify-content-center mt-3">
                        <div class="d-flex gap-2 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                fill="none">
                                <ellipse cx="8.02157" cy="7.5" rx="7.48935" ry="7.5" fill="#F94144" />
                            </svg>
                            <p class="text-black fw-medium">{{ $sectionGraduation->caption_1 }}</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                fill="none">
                                <ellipse cx="8.00009" cy="7.5" rx="7.48935" ry="7.5" fill="#90BE6D" />
                            </svg>
                            <p class="text-black fw-medium">{{ $sectionGraduation->caption_2 }}</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                                fill="none">
                                <ellipse cx="7.9786" cy="7.5" rx="7.48935" ry="7.5" fill="#2D9CDB" />
                            </svg>
                            <p class="text-black fw-medium">{{ $sectionGraduation->caption_3 }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <p id="label1" class="d-none">{{ $kenaikanKelas[0]->tahun_ajaran }}</p>
    <p id="label2" class="d-none">{{ $kenaikanKelas[1]->tahun_ajaran }}</p>
    <p id="label3" class="d-none">{{ $kenaikanKelas[2]->tahun_ajaran }}</p>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var showCategory = 'category1';
            var showAllCategory = document.querySelector(`.category-name[data-category="${showCategory}"]`);
            showAllCategory.classList.add('active');
            showCategory.style.display = 'flex';
            showItems(showCategory); // Panggil fungsi showItems() dengan kategori 'category1' sebagai default
        });

        function showItems(category) {
            // Menghapus kelas "active" dari semua kategori
            var categories = document.getElementsByClassName('category-name');
            for (var i = 0; i < categories.length; i++) {
                categories[i].classList.remove('active');
            }

            // Menambahkan kelas "active" ke kategori yang dipilih
            var selectedCategory = event.target;
            if (!selectedCategory.classList.contains('active')) {
                selectedCategory.classList.add('active');
            }

            // Menampilkan item-item yang memiliki kategori yang sama dengan kategori yang dipilih
            var items = document.getElementsByClassName('item');
            for (var j = 0; j < items.length; j++) {
                items[j].style.display = 'none';
                if (items[j].classList.contains(category)) {
                    items[j].style.display = 'flex';
                }
            }
        }

        const chart1 = document.getElementById('chart1');

        const label1 = document.getElementById('label1').textContent;
        const label2 = document.getElementById('label2').textContent;
        const label3 = document.getElementById('label3').textContent;

        const data1 = {{ $kenaikanKelas[0]->jumlah_siswa_x }};
        const data2 = {{ $kenaikanKelas[0]->jumlah_siswa_xi }};
        const data3 = {{ $kenaikanKelas[0]->jumlah_siswa_xii }};

        const data4 = {{ $kenaikanKelas[1]->jumlah_siswa_x }};
        const data5 = {{ $kenaikanKelas[1]->jumlah_siswa_xi }};
        const data6 = {{ $kenaikanKelas[1]->jumlah_siswa_xii }};

        const data7 = {{ $kenaikanKelas[2]->jumlah_siswa_x }};
        const data8 = {{ $kenaikanKelas[2]->jumlah_siswa_xi }};
        const data9 = {{ $kenaikanKelas[2]->jumlah_siswa_xii }};
        new Chart(chart1, {
            type: 'bar',
            data: {
                labels: [label1, label2, label3],
                datasets: [{
                    data: [data1, data4, data7, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [data2, data5, data8, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [data3, data6, data9, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#2D9CDB', '#2D9CDB', '#2D9CDB'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },


                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 1000,
                        ticks: {
                            stepSize: 100
                        }
                    },
                    xAxes: [{

                    }]

                }
            }
        });
        new Chart(chart2, {
            type: 'bar',
            data: {
                labels: [label1, label2, label3],
                datasets: [{
                    data: [data1, data4, data7, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [data2, data5, data8, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [data3, data6, data9, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#2D9CDB', '#2D9CDB', '#2D9CDB'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },


                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 1000,
                        ticks: {
                            stepSize: 100
                        }
                    },
                    xAxes: [{

                    }]

                }
            }
        });
        new Chart(chart3, {
            type: 'bar',
            data: {
                labels: [label1, label2, label3],
                datasets: [{
                    data: [data1, data4, data7, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [data2, data5, data8, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [data3, data6, data9, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#2D9CDB', '#2D9CDB', '#2D9CDB'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, ],

            },
            options: {
                // responsive: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                },


                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 1000,
                        ticks: {
                            stepSize: 100
                        }
                    },
                    xAxes: [{

                    }]

                }
            }
        });
    </script>
@endsection
