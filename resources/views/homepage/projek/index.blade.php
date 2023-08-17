@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="p5-section container">
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
                    <div class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p51.png') }}" alt="Gaya Hidup Berkelanjutan"
                                class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Gaya Hidup Berkelanjutan</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p52.png') }}" alt="Kearifan Lokal" class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Kearifan Lokal</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p53.png') }}" alt="Bhinneka Tunggal Ika" class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Bhinneka Tunggal Ika</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-p5">
                            <img src="{{ asset('assets-homepage/img/p54.png') }}" alt="Bangunlah Jiwa dan Raganya"
                                class="w-100">
                            <div class="mt-3 text-center">
                                <p class="text-black fw-bold">Bhinneka Tunggal Ika</p>
                                <p class="desc fs-13 text-capitalize">Proyek penguatan profil pelajar...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
