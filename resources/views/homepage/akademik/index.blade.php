@extends('templates.main')

@section('container')

    <main class="mt-3">
        <section class="hero-section container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        Inovasi Peningkatan Prestasi Akademik di Sekolah!
                    </p>
                    <p class="mt-4 desc">
                        Penelitian ini mencari cara-cara inovatif untuk meningkatkan prestasi akademik siswa di sekolah.
                        Metode baru seperti teknologi edukasi terkini, pembelajaran berbasis proyek, dan kurikulum lintas
                        disiplin akan dieksplorasi. Penelitian ini juga menyoroti peran guru, staf, orang tua, dan dukungan
                        keluarga dalam mencapai hasil akademik yang lebih baik.
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#kurikulum" class="btn btn-color">lihat selengkapnya</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/akademik-hero.png') }}" alt="akademik section image"
                        class="w-100">
                </div>
            </div>
        </section>
        <section class="kurikulum-section container section-margin-top" id="kurikulum">
            <div class="row align-items-center">
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/kurikulum-img.png') }}" alt="kurikulum section image"
                        class="w-100">
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <p class="text-black display-5 fw-bold text-capitalize">
                        Langkah kami Menghadapi Pendidikan Abad ke-21
                    </p>
                    <article class="mt-3">
                        <p class="desc">
                            Kurikulum di sekolah merupakan inti dari pendidikan formal, dan terus mengalami transformasi
                            untuk menghadapi perubahan zaman dan tantangan abad ke-21. Deskripsi ini akan mengeksplorasi
                            perubahan signifikan dalam kurikulum yang dilakukan oleh institusi pendidikan guna mempersiapkan
                            generasi muda untuk menghadapi dunia yang cepat berubah dan kompleks.
                        </p>
                        <p class="desc mt-1">
                            Fokus akan diberikan pada pengintegrasian teknologi dalam pembelajaran, pendekatan kreatif dalam
                            mengajar, inklusi pendidikan bagi semua, serta upaya untuk mengembangkan keterampilan abad ke-21
                            seperti kritis berpikir, kerjasama, keterampilan digital, dan pemecahan masalah.
                        </p>
                    </article>
                </div>
            </div>
        </section>
        <section class="program-akademik-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="title-section-text text-center fw-bold text-capitalize text-black display-5">
                    Program akademik sekolah
                </p>
            </div>
            <div class="d-flex flex-column gap-5 mt-5">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7 col-12">
                        <p class="fs-5 text-black fw-bold">E-Learning SMA Negeri 1 Selat</p>
                        <article class="mt-3">
                            <p class="desc">
                                Program E-Learning di SMA Negeri 1 Selat adalah platform pembelajaran digital yang inovatif
                                dan interaktif, dirancang untuk mendukung proses belajar-mengajar yang efektif dan efisien.
                                Melalui E-Learning, siswa memiliki akses ke beragam materi pembelajaran, modul, dan sumber
                                daya pendukung yang dapat diakses kapan saja.
                            </p>
                            <p class="desc mt-1">
                                Platform ini menawarkan berbagai fitur canggih, termasuk video pembelajaran, forum diskusi,
                                ujian online, dan berbagai tugas interaktif. Dengan bimbingan dari para guru, siswa dapat
                                berpartisipasi dalam diskusi dan berkolaborasi dengan sesama siswa dalam proses belajar.
                            </p>
                        </article>
                        <a target="_block" href="https://guru.kemdikbud.go.id/"
                            class="d-flex align-items-center gap-2 mt-4 btn btn-color">
                            website e-learning
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10"
                                fill="none">
                                <path
                                    d="M1 4.35C0.641015 4.35 0.35 4.64101 0.35 5C0.35 5.35899 0.641015 5.65 1 5.65V4.35ZM19.4596 5.45962C19.7135 5.20578 19.7135 4.79422 19.4596 4.54038L15.323 0.403806C15.0692 0.149965 14.6576 0.149965 14.4038 0.403806C14.15 0.657647 14.15 1.0692 14.4038 1.32304L18.0808 5L14.4038 8.67696C14.15 8.9308 14.15 9.34235 14.4038 9.59619C14.6576 9.85003 15.0692 9.85003 15.323 9.59619L19.4596 5.45962ZM1 5.65L19 5.65V4.35L1 4.35V5.65Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>
                    <div class="col-lg-5 d-lg-block d-none offset-xl-1">
                        <img src="{{ asset('assets-homepage/img/elearning-img.png') }}" alt="e-learning image"
                            class="w-100">
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-5 d-lg-block d-none">
                        <img src="{{ asset('assets-homepage/img/eassesment.png') }}" alt="e-asessment image" class="w-100">
                    </div>
                    <div class="col-xl-6 col-lg-7 offset-xl-1 col-12">
                        <p class="fs-5 text-black fw-bold">E-Asessment SMA Negeri 1 Selat</p>
                        <article class="mt-3">
                            <p class="desc">
                                E-Assessment di Sekolah SMA Negeri 1 Selat merupakan sistem evaluasi dan penilaian berbasis
                                teknologi yang inovatif untuk mengukur kemajuan belajar siswa secara akurat dan efisien.
                                Dengan menggunakan teknologi canggih, E-Assessment memungkinkan siswa untuk mengikuti
                                berbagai jenis ujian dan tugas evaluasi secara online melalui platform pembelajaran digital
                                yang terintegrasi. </p>
                            <p class="desc mt-1">
                                Platform E-Assessment ini menyediakan berbagai format ujian, termasuk pilihan ganda, uraian,
                                dan tugas interaktif yang dirancang untuk mengukur pemahaman siswa dalam berbagai tingkatan
                                kognitif. </p>
                        </article>
                        <a target="_block" href="https://guru.kemdikbud.go.id/"
                            class="d-flex align-items-center gap-2 mt-4 btn btn-color">
                            website e-asessment
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10"
                                fill="none">
                                <path
                                    d="M1 4.35C0.641015 4.35 0.35 4.64101 0.35 5C0.35 5.35899 0.641015 5.65 1 5.65V4.35ZM19.4596 5.45962C19.7135 5.20578 19.7135 4.79422 19.4596 4.54038L15.323 0.403806C15.0692 0.149965 14.6576 0.149965 14.4038 0.403806C14.15 0.657647 14.15 1.0692 14.4038 1.32304L18.0808 5L14.4038 8.67696C14.15 8.9308 14.15 9.34235 14.4038 9.59619C14.6576 9.85003 15.0692 9.85003 15.323 9.59619L19.4596 5.45962ZM1 5.65L19 5.65V4.35L1 4.35V5.65Z"
                                    fill="white" />
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>
        <section class="p5-section container section-margin-top">
            <div class="d-flex justify-content-center header-section">
                <div class="long-title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Pelaksanaan 5P (Projek Penguatan profile pelajar pancasila) di SMA Negeri 1 Selat
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        Proyek 5P di SMA Negeri 1 Selat tingkatkan pemahaman siswa tentang nilai-nilai Pancasila lewat
                        pendidikan, diskusi, kegiatan sosial, dan kompetisi. Siswanya diharapkan menerapkan nilai-nilai ini
                        dalam kehidupan sehari-hari dan masyarakat.
                    </p>
                </div>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                    <a href="" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p52.png') }}" alt="Kearifan Lokal" class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Kearifan Lokal</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p53.png') }}" alt="Bhinneka Tunggal Ika" class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Bhinneka Tunggal Ika</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p51.png') }}" alt="Bangunlah Jiwa dan Raganya"
                                class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Bhinneka Tunggal Ika</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </a>
                    <a href="" class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p54.png') }}" alt="Bangunlah Jiwa dan Raganya"
                                class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Bhinneka Tunggal Ika</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <a href="{{ route('projek') }}" class="btn btn-color">lihat semua</a>
                </div>
            </div>
        </section>
        <section class="gallery-section section-margin-top container">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Galeri Dokumentasi sekolah
                    </p>
                    <p class="desc fs-6 text-center mt-3">
                        Masuki dunia kecemerlangan seni di Galeri SMA Negeri 1 Selat. Lepaskan kreativitasmu dan saksikan
                        ekspresi berani dari para siswa dan seniman berbakat kami.
                    </p>
                </div>
            </div>
            <div class="mt-2">
                <div class="pin-container">
                        <a href="{{ asset('assets-homepage/img/gallery1.png') }}" data-toggle="lightbox" class="pin-img" data-gallery="example-gallery">
                            <img src="{{ asset('assets-homepage/img/gallery1.png') }}" class="w-100" alt="gallery 1">
                        </a>
                    <a href="{{ asset('assets-homepage/img/gallery2.png') }}" data-toggle="lightbox" data-gallery="example-gallery" class="pin-img">
                        <img src="{{ asset('assets-homepage/img/gallery2.png') }}" class="w-100" alt="gallery 2">
                    </a>
                    <a href="{{ asset('assets-homepage/img/gallery2.png') }}" data-toggle="lightbox" data-gallery="example-gallery" class="pin-img">
                        <img src="{{ asset('assets-homepage/img/gallery2.png') }}" class="w-100" alt="gallery 2">
                    </a>
                    <div class="pin-img">
                        <img src="{{ asset('assets-homepage/img/gallery4.png') }}" alt="gallery 4" class="w-100">
                    </div>
                    <div class="pin-img">
                        <img src="{{ asset('assets-homepage/img/gallery5.png') }}" alt="gallery 5" class="w-100">
                    </div>
                    <div class="pin-img">
                        <img src="{{ asset('assets-homepage/img/gallery6.png') }}" alt="gallery 6" class="w-100">
                    </div>
                    <div class="pin-img">
                        <img src="{{ asset('assets-homepage/img/gallery7.png') }}" alt="gallery 7" class="w-100">
                    </div>
                    <div class="pin-img">
                        <img src="{{ asset('assets-homepage/img/gallery8.png') }}" alt="gallery 8" class="w-100">
                    </div>
                </div>
            </div>
        </section>
        <section class="grafik-section container section-margin-top d-lg-block d-none">
            <div class="d-flex justify-content-center header-section">
                <div class="title-section-text">
                    <p class="text-center display-5 fw-bold text-capitalize">
                        Grafik Data Kenaikan Kelas & Kelulusan
                    </p>
                </div>
            </div>
            <div class="mt-4 d-flex justify-content-center gap-3">
                <button class="btn btn-text category-name active" onclick="showItems('category1')">
                    Semua Siswa
                </button>
                <button class="btn btn-text category-name" onclick="showItems('category2')">
                    Siswa Laki Laki
                </button>
                <button class="btn btn-text category-name" onclick="showItems('category3')">
                    Siswa Perempuan
                </button>
            </div>
            <div class="mt-4">
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
                        <p class="text-black fw-medium">Kelas X</p>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                            fill="none">
                            <ellipse cx="8.00009" cy="7.5" rx="7.48935" ry="7.5" fill="#90BE6D" />
                        </svg>
                        <p class="text-black fw-medium">Kelas XI</p>
                    </div>
                    <div class="d-flex gap-2 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
                            fill="none">
                            <ellipse cx="7.9786" cy="7.5" rx="7.48935" ry="7.5" fill="#2D9CDB" />
                        </svg>
                        <p class="text-black fw-medium">Kelas XII</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
        const chart2 = document.getElementById('chart2');
        const chart3 = document.getElementById('chart3');

        new Chart(chart1, {
            type: 'bar',
            data: {
                labels: ['2021', '2022', '2023'],
                datasets: [{
                    data: [1000, 2380, 2853, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [2000, 1380, 2453, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [3000, 1980, 2953, ],
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
                        max: 3000,
                        ticks: {
                            stepSize: 300
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
                labels: ['2021', '2022', '2023'],
                datasets: [{
                    data: [2000, 2180, 2553, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [2300, 1290, 2753, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [1900, 2680, 2253, ],
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
                        max: 3000,
                        ticks: {
                            stepSize: 300
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
                labels: ['2021', '2022', '2023'],
                datasets: [{
                    data: [3000, 2880, 2153, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#F94144', '#F94144', '#F94144'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [2800, 1190, 2153, ],
                    borderWidth: 0.1,
                    backgroundColor: ['#90BE6D', '#90BE6D', '#90BE6D'],
                    categoryPercentage: 0.8,
                    barPercentage: 0.6,
                    borderRadius: '8',
                    spaceBetween: '10'
                }, {
                    data: [1800, 2180, 2653, ],
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
                        max: 3000,
                        ticks: {
                            stepSize: 300
                        }
                    },
                    xAxes: [{

                    }]

                }
            }
        });
    </script>
@endsection
