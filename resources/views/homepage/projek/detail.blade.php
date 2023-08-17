@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="detail-prestasi-wrapper container">
            <div class="row gy-5">
                <div class="col-lg-8 col-12">
                    <div class="prestasi-detail-section">
                        <div class="header-article">
                            <img src="{{ asset('assets-homepage/img/p51.png') }}"
                                alt="Gaya Hidup Berkelanjutan, program Projek Pelaksanaan 5P (Projek Penguatan profile pelajar pancasila) "
                                class="img-detail">
                            <h2 class="fs-2 fw-bold text-black mt-4 text-capitalize">Gaya Hidup Berkelanjutan, program Projek
                                Pelaksanaan 5P (Projek Penguatan profile pelajar pancasila) </h2>
                        </div>

                        <article class="mt-4 article-content desc">
                            <p>
                                Proyek penguatan profil pelajar Pancasila dengan tema gaya hidup berkelanjutan di sekolah
                                adalah inisiatif yang bertujuan untuk mengintegrasikan nilai-nilai Pancasila dengan
                                kesadaran akan pentingnya gaya hidup yang ramah lingkungan dan berkelanjutan. Proyek ini
                                bertujuan untuk membentuk generasi muda yang memiliki kepekaan sosial, etika, dan tanggung
                                jawab terhadap masyarakat dan lingkungan sekitarnya, sejalan dengan prinsip-prinsip dasar
                                Pancasila.
                            </p>
                            <p class="mt-2">
                                Dalam proyek ini, sekolah akan merancang serangkaian kegiatan yang menggabungkan nilai-nilai
                                Pancasila dengan prinsip-prinsip gaya hidup berkelanjutan:
                            </p>
                            <ol class="mt-2 ps-0 list-detail-p5">
                                <li>
                                    Pendidikan tentang Nilai-nilai Pancasila : Proyek akan dimulai dengan penguatan
                                    pemahaman siswa tentang nilai-nilai Pancasila sebagai landasan ideologi negara. Melalui
                                    diskusi, ceramah, dan kajian, siswa akan diajak untuk menginternalisasi konsep-konsep
                                    seperti persatuan, keadilan sosial, demokrasi, dan hak asasi manusia.
                                </li>
                                <li>
                                    Pengenalan Gaya Hidup Berkelanjutan : Siswa akan diajarkan tentang arti penting gaya
                                    hidup berkelanjutan dan dampaknya terhadap lingkungan dan masyarakat. Mereka akan
                                    belajar tentang praktik-praktik seperti penghematan energi, pengurangan limbah,
                                    pertanian organik, dan upaya melestarikan alam.
                                </li>
                                <li>
                                    Kegiatan Praktis : Siswa akan terlibat dalam kegiatan praktis yang menggabungkan
                                    nilai-nilai Pancasila dan gaya hidup berkelanjutan. Contohnya, mereka dapat mengadakan
                                    kampanye penghijauan lingkungan sekolah, mengorganisir program daur ulang, atau
                                    berpartisipasi dalam proyek konservasi alam.
                                </li>
                                <li>
                                    Kolaborasi dengan Komunitas Lokal : Proyek ini akan menciptakan peluang bagi siswa untuk
                                    berkolaborasi dengan komunitas lokal, organisasi lingkungan, atau lembaga sosial yang
                                    memiliki kesamaan nilai dan tujuan. Kolaborasi semacam ini akan membantu siswa mengalami
                                    dampak positif yang lebih nyata dari tindakan mereka.
                                </li>
                                <li>
                                    Pengembangan Kreativitas : Siswa akan diundang untuk mengembangkan ide-ide kreatif dalam
                                    mempromosikan gaya hidup berkelanjutan yang sejalan dengan nilai-nilai Pancasila. Ini
                                    bisa termasuk pembuatan poster, video edukatif, atau proyek seni yang menggambarkan
                                    hubungan harmonis antara manusia dan alam.
                                </li>
                            </ol>
                            <p class="mt-2">
                                Hasil yang diharapkan dari proyek ini adalah siswa yang tidak hanya memiliki pemahaman
                                mendalam tentang nilai-nilai Pancasila, tetapi juga mampu menerapkan prinsip-prinsipnya
                                dalam tindakan sehari-hari. Mereka akan menjadi agen perubahan yang aktif dalam mendorong
                                gaya hidup berkelanjutan di lingkungan sekolah dan masyarakat sekitar. Melalui penguatan
                                profil pelajar Pancasila dengan tema gaya hidup berkelanjutan, sekolah akan mampu mencetak
                                generasi muda yang peduli, beretika, dan bertanggung jawab terhadap masa depan yang lebih
                                baik.
                            </p>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="ms-xl-3">
                        <p class="text-black fs-3 fw-bold text-capitalize">Pelaksanaan 5P Lainnya :</p>
                        <div class="mt-3 d-flex flex-column gap-4 other-p5-wrapper">
                            <a href="detailP5.html" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets-homepage/img/p52.png') }}" alt="Gaya Hidup Berkelanjutan"
                                            class="w-100 img-detail-rectangle">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-start fw-semibold text-capitalize fs-18">Gaya Hidup Berkelanjutan</p>
                                    <p class="desc fs-14">Proyek penguatan profil pelajar Panca...</p>
                                </div>
                            </a>
                            <a href="detailP5.html" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets-homepage/img/p53.png') }}" alt="Kearifan Lokal"
                                            class="w-100 img-detail-rectangle">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-start fw-semibold text-capitalize fs-18">Kearifan Lokal</p>
                                    <p class="desc fs-14">Proyek penguatan profil pelajar Panca...</p>
                                </div>
                            </a>
                            <a href="detailP5.html" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="{{ asset('assets-homepage/img/p54.png') }}" alt="Kearifan Lokal"
                                            class="w-100 img-detail-rectangle">
                                    </div>
                                </div>
                                <div>
                                    <p class="text-start fw-semibold text-capitalize fs-18">Bhinneka Tunggal Ika</p>
                                    <p class="desc fs-14">Proyek penguatan profil pelajar Panca...</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
