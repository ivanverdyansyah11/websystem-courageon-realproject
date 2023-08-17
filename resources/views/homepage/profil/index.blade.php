@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="hero-section container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-7 col-12">
                    <p class="display-4 fw-bold text-black">
                        Profile Dan informasi mengenai SMA Negeri 1 Selat
                    </p>
                    <p class="mt-4 desc">
                        SMA Negeri 1 Selat adalah sekolah negeri yang terletak di Kota Bahagia. Kami didirikan dengan tekad
                        kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi
                        kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan
                        dunia global.
                    </p>
                    <div class="mt-4 d-flex gap-3 align-items-center">
                        <a href="#visiMisi" class="btn btn-color">lihat selengkapnya</a>
                    </div>
                </div>
                <div class="col-xl-1 d-xl-block d-none"></div>
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/profile-hero.png') }}" alt="profile section image"
                        class="w-100">
                </div>
            </div>
        </section>
        <section class="vision-section container section-margin-top" id="visiMisi">
            <div class="row">
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/visi-img.png') }}" alt="visi misi image" class="w-100">
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <div class="d-flex flex-column gap-4">
                        <div class="accordion" id="myAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button type="button" class="accordion-button ps-0 gap-4 align-items-center text-white"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                        <p class="fw-semibold">Visi Sekolah</p>
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#myAccordion">
                                    <div class="card-body">
                                        <p class="fs-15 desc">
                                            Menjadi lembaga pendidikan yang unggul dan inovatif dalam membentuk pemimpin
                                            masa depan yang berintegritas dan berbudaya global.
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
                                        <p class="fw-semibold">Misi Sekolah</p>
                                    </button>
                                </h2>
                                <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#myAccordion2">
                                    <div class="card-body">
                                        <p class="fs-15 desc-color">Misi SMA Negeri 1 Selat adalah menyediakan pendidikan
                                            yang berkualitas tinggi dengan mengadopsi kurikulum inovatif dan metode
                                            pembelajaran berpusat pada siswa. Kami berusaha membimbing siswa untuk
                                            mengembangkan keberanian dan kreativitas mereka melalui berbagai program
                                            ekstrakurikuler yang beragam. Melalui nilai-nilai keberanian, inovasi, dan
                                            tanggung jawab, kami berkomitmen untuk membentuk siswa yang memiliki karakter
                                            unggul, siap menghadapi tantangan masa depan, dan berkontribusi positif bagi
                                            masyarakat dan dunia.
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
                        Bangsa yang malas belajar tidak akan bisa berkembang!
                    </p>
                </div>
                <div class="mt-2 text-center">
                    <p class="desc fs-5">By Kepala Sekolah <span class="main-color fw-semibold">SMA Negeri 1 Selat</span>
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
                            Buku dalam logo menggambarkan komitmen sekolah untuk memberikan pendidikan yang berkualitas
                            tinggi kepada siswa. Ini mengandung pesan bahwa sekolah adalah tempat belajar dan pengetahuan
                            yang didorong untuk membekali siswa dengan bekal yang kuat untuk masa depan.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="logo-meaning-card">
                        <p class="fs-5 fw-bold text-black text-capitalize">Makna Font</p>
                        <p class="mt-2 desc fs-6">
                            Penggunaan font sans serif capitalize menunjukkan kesan modern dan progresif dari sekolah
                            tersebut. Logo ini ingin menyampaikan bahwa sekolah memiliki pendekatan yang inovatif dalam
                            pendidikan dan selalu berada di garis depan perkembangan pendidikan.
                        </p>
                    </div>
                </div>
                <div class="col">
                    <div class="logo-meaning-card">
                        <p class="fs-5 fw-bold text-black text-capitalize">Makna Warna</p>
                        <p class="mt-2 desc fs-6">
                            Warna biru tua sering dikaitkan dengan keberlanjutan dan konsistensi. Logo ini ingin
                            menyampaikan bahwa sekolah memiliki dedikasi yang kuat untuk memberikan pendidikan berkualitas
                            dan berkomitmen untuk mencapai tujuan jangka panjang.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="mars-section container section-margin-top">
            <div class="row">
                <div class="col-lg-5 d-lg-block d-none">
                    <img src="{{ asset('assets-homepage/img/mars-img.png') }}" alt="mars section image" class="w-100 h-100">
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <p class="text-black display-5 fw-bold text-capitalize">
                        Mars SMA Negeri 1 Selat
                    </p>
                    <div class="song-wrapper mt-3">
                        <p class="desc song-lyric ">
                            Disini Tempat Kami Berkreasi
                            Tuk’ Jadi Siswa Yang Kreatif
                            Bertaqwa Landasan Hidup Kami
                            Berprestasi Tujuan Kami SMANEBA
                            Tempat kami Belajar
                            Pencetak Insan Muda Bangsa
                            Berpribadi Luhur Dan Berakhlaq Mulia
                            Mutu Berdaya Saing Global
                            Ayo …… Ayo Semua
                            Torehkan Prestasi Tuk’ SMANEBA
                            Jadikan Dia Gudang Juara Skolah
                            Tercinta Kita Semua
                            Sayangi , Cintai, SMANEBA slalu dihati
                        </p>
                    </div>
                    <p class="mt-3 desc fs-6">
                        Ciptaan: <span class="fw-semibold text-black"> Dr. Andi Pranoto, M.Pd. (Founder Of SMA Negeri 1
                            Selat)</span>
                    </p>
                </div>
            </div>
        </section>
        <section class="management-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">data Manajemen SMA Negeri 1
                    Selat</p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management1.png') }}" alt="Dr. Andi Pranoto, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Dr. Andi Pranoto, M.Pd.</p>
                            <p class="desc">Kepala Sekolah</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management2.png') }}" alt="Ibu Rina Widya, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Ibu Rina Widya, S.Pd.</p>
                            <p class="desc">Wakil Kepala Sekolah Kurikulum</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management3.png') }}" alt="Bapak Ahmad Yani, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Bapak Ahmad Yani, S.Pd.</p>
                            <p class="desc">Wakil Kepala Sekolah Kesiswaan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/management4.png') }}" alt="Siti Nurul, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Siti Nurul, M.Pd.</p>
                            <p class="desc">Kepala Program Studi Matematika</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <a href="allManagement.html" class="btn btn-color">lihat semua</a>
                </div>
            </div>
        </section>
        <section class="teacher-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">data Guru SMA Negeri 1 Selat
                </p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher1.png') }}" alt="Dewi Permata, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Dewi Permata, M.Pd.</p>
                            <p class="desc">Guru Matematika</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher2.png') }}" alt="Rudi Setiawan, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Rudi Setiawan, S.Pd.</p>
                            <p class="desc">Guru Bahasa Inggris</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher3.png') }}" alt="Siti Rahayu, M.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Siti Rahayu, M.Pd.</p>
                            <p class="desc">Guru Bahasa Indonesia</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/teacher4.png') }}" alt="Deni Sutomo, S.Pd."
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Deni Sutomo, S.Pd.</p>
                            <p class="desc">Guru IPA(Ilmu Pengetahuan Alam</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <a href="allGuru.html" class="btn btn-color">lihat semua</a>
                </div>
            </div>
        </section>
        <section class="employee-section container section-margin-top">
            <div class="d-flex justify-content-center">
                <p class="display-5 fw-bold text-capitalize text-center title-section-text">data Pegawai SMA Negeri 1 Selat
                </p>
            </div>
            <div class="mt-5">
                <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 gy-4">
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee1.png') }}" alt="Siti Wulandari"
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Siti Wulandari</p>
                            <p class="desc">Staf Administrasi Keuangan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee2.png') }}" alt="Andi Pratama"
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Andi Pratama</p>
                            <p class="desc">Staf Administrasi Akademik</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee3.png') }}" alt="Maya Fitriani"
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Maya Fitriani</p>
                            <p class="desc">Staf Perpustakaan</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-school-people text-center">
                            <img src="{{ asset('assets-homepage/img/employee4.png') }}" alt="Dina Wulandari"
                                class="w-100">
                            <p class="text-black fw-bold fs-18 mt-3">Dina Wulandari</p>
                            <p class="desc">Staf Laboratorium Sains</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-center">
                    <a href="allPegawai.html" class="btn btn-color">lihat semua</a>
                </div>
            </div>
        </section>
        <section class="location-section container section-margin-top">
            <div class="row align-items-center">
                <div class="col-lg-5 col-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.576504957393!2d115.48273847492702!3d-8.44318009159662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2053a75a7b143%3A0x5e66d8200f7bf2a2!2sSMA%20Negeri%201%20Selat!5e0!3m2!1sid!2sid!4v1692022962270!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-xl-6 col-lg-7 col-12 offset-xl-1">
                    <p class="text-black fw-bold text-capitalize display-5">
                        Hubungi kami
                    </p>
                    <div class="mt-4 d-flex flex-column gap-4">
                        <div class="d-flex gap-3">
                            <div class="icon-location-wrapper d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-location" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <path
                                        d="M10.5078 0C10.9196 0.0525781 11.3355 0.0838281 11.7427 0.161211C14.6007 0.704453 16.8191 2.21566 18.4287 4.62691C18.8485 5.25574 19.1712 5.9384 19.4293 6.65C19.5848 7.07898 19.4077 7.50512 19.0079 7.67145C18.6021 7.84023 18.1545 7.6609 17.9837 7.22656C17.6849 6.46672 17.3296 5.73988 16.8452 5.07969C15.6507 3.45176 14.0871 2.34 12.1297 1.84996C9.29215 1.13953 6.72 1.72797 4.48598 3.62508C2.89699 4.97445 1.9527 6.71133 1.6543 8.77527C1.36891 10.7494 1.72637 12.6116 2.77379 14.3194C4.05207 16.4035 5.88547 17.7396 8.27961 18.2514C10.375 18.6993 12.3634 18.3559 14.2275 17.2988C14.3689 17.2186 14.5037 17.1266 14.6467 17.0496C15.0356 16.84 15.4885 16.957 15.704 17.3177C15.9244 17.6865 15.8314 18.1453 15.4524 18.3765C15.0259 18.6367 14.5899 18.8873 14.1375 19.0978C13.0423 19.6074 11.8853 19.8922 10.679 19.9728C10.6346 19.9758 10.5909 19.9907 10.547 20C10.1693 20 9.79176 20 9.41414 20C9.36379 19.9891 9.31387 19.9716 9.26301 19.9684C8.23539 19.9036 7.23625 19.6928 6.29098 19.2902C2.93012 17.8587 0.875039 15.3512 0.159102 11.762C0.0843751 11.3873 0.0520312 11.0042 0 10.625C0 10.2214 0 9.8177 0 9.41406C0.0113281 9.35137 0.0255469 9.28902 0.0335547 9.2259C0.0785938 8.87129 0.104453 8.51328 0.168906 8.1623C0.954922 3.88207 4.48633 0.582344 8.81855 0.0725389C9.0043 0.0506639 9.18953 0.0242969 9.375 0C9.75262 0 10.1302 0 10.5078 0Z"
                                        fill="#0160C9" />
                                    <path
                                        d="M19.9996 11.1723C19.9239 11.4665 19.8773 11.772 19.7676 12.053C19.2711 13.3255 18.341 14.1131 16.9945 14.3209C15.5993 14.5363 14.4546 14.0375 13.5861 12.9192C13.5464 12.8682 13.5065 12.8175 13.455 12.7516C12.466 13.9067 11.2238 14.4858 9.70585 14.3979C8.60378 14.334 7.65472 13.8923 6.87586 13.1111C5.28343 11.5138 5.15828 9.04693 6.5589 7.24111C7.83707 5.59322 10.6856 4.8124 12.883 6.63803C12.8873 6.57174 12.8891 6.51666 12.8947 6.4619C12.9362 6.05276 13.285 5.73799 13.6857 5.74729C14.0918 5.7567 14.423 6.07819 14.4497 6.49053C14.4543 6.56186 14.4525 6.63365 14.4526 6.70522C14.4529 8.08494 14.4454 9.46475 14.4557 10.8444C14.464 11.9448 15.3853 12.828 16.4842 12.8118C17.5158 12.7965 18.3919 11.9373 18.4371 10.9024C18.4427 10.7744 18.4564 10.6389 18.5041 10.5222C18.6287 10.2165 18.8724 10.0517 19.2005 10.0441C19.5287 10.0365 19.7721 10.1933 19.9217 10.4881C19.9507 10.5453 19.9738 10.6056 19.9996 10.6644C19.9996 10.8337 19.9996 11.003 19.9996 11.1723ZM9.99605 12.8513C11.5592 12.8538 12.8426 11.578 12.8505 10.0138C12.8584 8.44326 11.5744 7.15154 10.0032 7.14947C8.43988 7.14744 7.15691 8.42279 7.14863 9.98717C7.14031 11.5573 8.42437 12.8489 9.99605 12.8513Z"
                                        fill="#0160C9" />
                                </svg>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="desc fs-6">Email</p>
                                <p class="fw-semibold fs-5">courageonschool@gmail.com</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="icon-location-wrapper d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon-location" width="20"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_117_1439)">
                                        <path
                                            d="M9.6082 20.0291C9.3158 19.9396 9.1384 19.7251 8.97761 19.4787C8.13653 18.1901 7.10212 17.0585 6.07055 15.9252C5.23639 15.0089 4.40541 14.0896 3.69256 13.0726C2.87433 11.9052 2.28501 10.6389 2.06972 9.21827C1.8831 7.98685 1.98065 6.77356 2.35496 5.5865C2.82825 4.08567 3.68477 2.83503 4.89158 1.83273C6.03957 0.879347 7.3584 0.287338 8.8407 0.0814552C10.8739 -0.200947 12.7647 0.205818 14.4646 1.35498C16.2159 2.53895 17.3506 4.17621 17.8203 6.24645C18.1848 7.85327 18.0564 9.43042 17.4549 10.9675C16.9343 12.2979 16.1121 13.4364 15.186 14.504C14.2803 15.5481 13.3371 16.5601 12.4412 17.6125C11.9353 18.2067 11.4833 18.848 11.0238 19.4803C10.8516 19.7173 10.6835 19.9395 10.3911 20.029C10.1301 20.0291 9.86913 20.0291 9.6082 20.0291ZM9.99276 18.1867C10.2652 17.8288 10.4997 17.4835 10.7713 17.1705C11.8139 15.9692 12.8738 14.783 13.9167 13.5819C14.7307 12.6445 15.4832 11.6634 15.9578 10.4994C16.5568 9.02998 16.6265 7.53263 16.1371 6.0268C15.6271 4.45729 14.642 3.24974 13.2124 2.42288C11.7938 1.60244 10.2668 1.3641 8.66751 1.70136C7.04516 2.04346 5.73193 2.89881 4.76845 4.24905C3.60344 5.88175 3.27575 7.69038 3.75413 9.63616C4.02472 10.7368 4.58099 11.7016 5.2755 12.5839C5.76702 13.2083 6.28398 13.8141 6.81286 14.4074C7.90139 15.6287 9.03246 16.8131 9.99276 18.1867Z"
                                            fill="#0160C9" />
                                        <path
                                            d="M5.1067 7.93137C5.08253 5.72161 6.78743 3.63809 9.06037 3.21044C11.5191 2.74784 13.8976 4.15965 14.6623 6.54809C14.9599 7.47764 14.9697 8.41907 14.7 9.36029C14.5707 9.81127 14.1675 10.0613 13.7456 9.95147C13.3181 9.84019 13.0761 9.43603 13.1872 8.97799C13.3341 8.37264 13.3859 7.76941 13.2108 7.16269C12.8658 5.96696 12.0983 5.16103 10.9069 4.82142C9.66464 4.4673 8.54239 4.76662 7.63748 5.68696C6.72111 6.61897 6.44038 7.75858 6.83518 9.00608C7.22895 10.2504 8.11072 11.0036 9.38915 11.2803C9.91042 11.3931 10.4252 11.3227 10.9393 11.2121C11.3884 11.1154 11.7825 11.3617 11.8824 11.7841C11.9832 12.2097 11.7454 12.5977 11.3041 12.7277C9.29709 13.3192 6.97278 12.4173 5.87126 10.6314C5.37974 9.83441 5.12425 8.97441 5.1067 7.93137Z"
                                            fill="#0160C9" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_117_1439">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="desc fs-6">Alamat</p>
                                <p class="fw-semibold fs-5">Jl. HOS Cokroaminoto No.10, Pakuncen, 5705</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="icon-location-wrapper d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="icon-location"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_117_1449)">
                                        <path
                                            d="M14.0292 20.0294C13.6819 19.9794 13.3334 19.9363 12.9875 19.8782C11.9863 19.7104 11.0295 19.3933 10.0999 18.9927C9.68066 18.8121 9.50326 18.3737 9.66654 17.9732C9.82934 17.5739 10.2654 17.3795 10.6878 17.5496C11.499 17.8764 12.3204 18.1663 13.1832 18.3232C14.452 18.554 15.7 18.5314 16.9023 17.9978C17.3356 17.8055 17.7242 17.544 18.0615 17.212C18.5536 16.7274 18.596 15.8833 18.1264 15.3587C17.602 14.7729 17.0008 14.2675 16.3008 13.9014C15.3734 13.4164 14.7311 13.5323 13.9545 14.2942C13.5215 14.719 13.0936 15.1491 12.6632 15.5765C12.2726 15.9644 11.9918 16.0119 11.5061 15.7663C10.3048 15.1592 9.22845 14.3691 8.22919 13.476C6.8413 12.2356 5.61835 10.8506 4.65541 9.24895C4.49782 8.98679 4.35233 8.71674 4.21291 8.44439C4.0059 8.04012 4.05865 7.72248 4.37669 7.39556C4.89051 6.86738 5.41311 6.34753 5.91875 5.81169C6.46213 5.23591 6.51884 4.57522 6.18914 3.87654C5.81899 3.09213 5.27125 2.43507 4.63002 1.86409C4.08389 1.37782 3.21752 1.47086 2.72649 2.01498C1.82478 3.01414 1.53125 4.21914 1.5484 5.52179C1.5663 6.8786 1.91791 8.16302 2.46938 9.39341C3.56684 11.842 5.22688 13.8475 7.31708 15.5114C7.46845 15.6319 7.62316 15.7632 7.73066 15.9206C7.93213 16.2156 7.86478 16.617 7.60639 16.8692C7.33723 17.1319 6.93576 17.1771 6.62105 16.9469C6.28992 16.7048 5.97022 16.4449 5.6611 16.175C3.66938 14.4356 2.07899 12.3917 1.01561 9.96022C0.277277 8.27194 -0.148017 6.51655 0.0183061 4.65669C0.1411 3.28336 0.599875 2.04522 1.53277 1.0039C2.6809 -0.27767 4.58169 -0.370317 5.82233 0.822232C6.49659 1.47037 7.09291 2.18963 7.51914 3.03096C7.97742 3.93552 8.12208 4.87003 7.7287 5.84091C7.52188 6.3513 7.19125 6.77664 6.80987 7.16586C6.52228 7.45939 6.23365 7.75204 5.94056 8.04003C5.86017 8.119 5.83536 8.17664 5.90144 8.28664C7.11492 10.3055 8.69556 11.9849 10.5968 13.3655C10.9759 13.6407 11.3814 13.8795 11.7752 14.1344C11.7962 14.148 11.8217 14.1546 11.8459 14.1647C12.2964 13.7329 12.7297 13.2895 13.1932 12.8803C13.7881 12.3551 14.4875 12.0511 15.2917 12.05C16.0005 12.0491 16.6486 12.2799 17.253 12.6364C17.9653 13.0565 18.5917 13.5876 19.173 14.1716C19.6185 14.6192 19.8807 15.1648 19.9808 15.7885C19.9879 15.8328 20.0051 15.8755 20.0176 15.9189C20.0176 16.1277 20.0176 16.3365 20.0176 16.5453C20.0059 16.5886 19.9894 16.6313 19.9831 16.6753C19.9026 17.231 19.6938 17.7355 19.3182 18.1508C18.5525 18.9973 17.5881 19.5228 16.4882 19.7913C16.0288 19.9036 15.5539 19.952 15.086 20.0294C14.7337 20.0294 14.3814 20.0294 14.0292 20.0294Z"
                                            fill="#0160C9" />
                                        <path
                                            d="M10.7092 0.809858C14.758 0.886917 18.2412 3.80633 19.0235 7.80353C19.1293 8.34393 19.157 8.90216 19.1875 9.45393C19.2149 9.94902 18.8789 10.3081 18.4294 10.319C17.9772 10.3299 17.6392 9.98976 17.6287 9.49319C17.6048 8.36299 17.3725 7.28461 16.8562 6.27334C16.2742 5.13319 15.4436 4.2151 14.3743 3.51618C13.4367 2.90344 12.4028 2.54956 11.2922 2.42216C11.0272 2.39177 10.759 2.38716 10.492 2.37618C10.0151 2.35657 9.67632 2.02099 9.68676 1.57358C9.69695 1.13853 10.0459 0.816181 10.5136 0.810004C10.5788 0.809122 10.644 0.809858 10.7092 0.809858Z"
                                            fill="#0160C9" />
                                        <path
                                            d="M12.3407 4.37012C12.5706 4.45624 12.946 4.55556 13.2822 4.73031C14.4561 5.34041 15.2395 6.28424 15.5963 7.56678C15.7185 8.00605 15.491 8.43825 15.0899 8.55286C14.6548 8.67718 14.2378 8.46546 14.1054 8.01821C13.864 7.2033 13.3971 6.57173 12.647 6.16732C12.4315 6.05115 12.1907 5.98115 11.9596 5.89502C11.5048 5.72556 11.2974 5.26585 11.4849 4.83546C11.6071 4.55477 11.8884 4.37066 12.3407 4.37012Z"
                                            fill="#0160C9" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_117_1449">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="desc fs-6">No Telepon</p>
                                <p class="fw-semibold fs-5">0274 - 513454</p>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <div class="icon-location-wrapper d-flex justify-content-center align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" class="icon-location"
                                    height="20" viewBox="0 0 20 20" fill="none">
                                    <g clip-path="url(#clip0_117_1459)">
                                        <path
                                            d="M15.0534 20.0292C11.6873 20.0292 8.32117 20.0292 4.95504 20.0292C4.48715 19.8696 4.2944 19.5367 4.32671 19.0519C4.3395 18.8599 4.32881 18.6663 4.32881 18.4582C3.85205 18.4582 3.40215 18.473 2.95347 18.4555C1.3745 18.3941 0.024303 17.0701 -0.00275587 15.4898C-0.0364814 13.5199 -0.0260403 11.549 -0.00383446 9.57887C0.00552829 8.74799 0.361117 8.03951 0.964793 7.46593C1.57425 6.88691 2.30651 6.60661 3.14514 6.60191C3.53435 6.59975 3.92362 6.60152 4.32886 6.60152C4.32886 6.50299 4.32886 6.42617 4.32886 6.34931C4.32886 4.53549 4.32867 2.72166 4.32896 0.90779C4.32906 0.285045 4.62876 -0.0144648 5.25195 -0.0145138C8.41582 -0.0147099 11.5796 -0.0146605 14.7435 -0.0145625C15.3829 -0.0145134 15.6796 0.279752 15.6797 0.914212C15.6799 2.72804 15.6798 4.54186 15.6798 6.35573C15.6798 6.43201 15.6798 6.50823 15.6798 6.60406C16.1294 6.60406 16.5594 6.58514 16.9871 6.60764C18.2244 6.67269 19.1399 7.26367 19.6979 8.36701C19.8562 8.67995 19.9182 9.04161 20.0244 9.38093C20.0244 10.1117 20.0244 10.8424 20.0244 11.5732C20.0165 11.5835 20.0043 11.5926 20.0013 11.6041C19.8836 12.0542 19.4506 12.2513 19.1068 12.1866C18.6969 12.1096 18.4599 11.7906 18.459 11.3147C18.458 10.8123 18.4762 10.3091 18.4514 9.80799C18.4388 9.55348 18.3949 9.28137 18.287 9.05436C17.9913 8.43181 17.4585 8.16691 16.7805 8.16701C12.4233 8.16769 8.06602 8.16735 3.70881 8.1674C3.51313 8.1674 3.31729 8.16294 3.1218 8.16882C2.22822 8.19578 1.56087 8.84426 1.55455 9.73789C1.54136 11.6036 1.54293 13.4696 1.55455 15.3354C1.55916 16.0784 2.03254 16.705 2.74504 16.8353C3.25617 16.9288 3.79053 16.8952 4.31396 16.9183C4.31396 15.8002 4.31396 14.7281 4.31396 13.6451C4.1495 13.6451 3.99906 13.6551 3.85043 13.643C3.53038 13.6169 3.29675 13.4541 3.17587 13.1553C3.0547 12.8557 3.11254 12.5763 3.32548 12.3366C3.50215 12.1378 3.73636 12.0803 3.99675 12.0806C6.12318 12.0834 8.2496 12.0822 10.3761 12.0822C12.222 12.0822 14.068 12.0822 15.9139 12.0822C16.5324 12.0822 16.8948 12.3743 16.8917 12.87C16.8886 13.3588 16.5292 13.6477 15.9237 13.6481C15.8476 13.6481 15.7716 13.6481 15.6932 13.6481C15.6932 14.7422 15.6932 15.8141 15.6932 16.8919C16.1296 16.8919 16.553 16.9011 16.9758 16.8888C17.2884 16.8797 17.5745 16.7718 17.8259 16.5809C18.2444 16.2632 18.4307 15.8327 18.4618 15.3161C18.4972 14.7274 19.0718 14.3829 19.5831 14.6288C19.8191 14.7423 19.9341 14.947 20.0244 15.1748C20.0244 15.3445 20.0244 15.5141 20.0244 15.6837C20.0118 15.7193 19.9937 15.7538 19.9872 15.7904C19.7749 16.9937 19.104 17.8355 17.9614 18.2589C17.598 18.3936 17.1887 18.4223 16.7967 18.4564C16.4307 18.4883 16.0598 18.4632 15.6797 18.4632C15.6797 18.6773 15.6692 18.8661 15.6818 19.0534C15.7143 19.5379 15.5202 19.8697 15.0534 20.0292ZM5.90862 1.55975C5.90862 3.24784 5.90862 4.91975 5.90862 6.58573C8.65102 6.58573 11.3792 6.58573 14.1034 6.58573C14.1034 4.90269 14.1034 3.23539 14.1034 1.55975C11.3691 1.55975 8.64553 1.55975 5.90862 1.55975ZM14.1056 13.6622C11.3608 13.6622 8.63259 13.6622 5.91048 13.6622C5.91048 15.2699 5.91048 16.8636 5.91048 18.4527C8.65004 18.4527 11.3736 18.4527 14.1056 18.4527C14.1056 16.8531 14.1056 15.2641 14.1056 13.6622Z"
                                            fill="#0160C9" />
                                        <path
                                            d="M16.4553 10.906C16.025 10.9022 15.6743 10.543 15.6808 10.1127C15.6872 9.68246 16.0487 9.33374 16.4788 9.34295C16.9013 9.35197 17.2447 9.70383 17.2436 10.1265C17.2424 10.557 16.8856 10.9099 16.4553 10.906Z"
                                            fill="#0160C9" />
                                        <path
                                            d="M10.0032 16.8963C9.41627 16.8963 8.82926 16.9018 8.24239 16.8944C7.85362 16.8895 7.55421 16.6342 7.47573 16.2638C7.40333 15.9221 7.58548 15.5526 7.91519 15.4113C8.03137 15.3616 8.16661 15.3353 8.29333 15.3346C9.4346 15.3289 10.5759 15.3291 11.7172 15.3323C12.1993 15.3336 12.5447 15.6631 12.547 16.1103C12.5493 16.5576 12.2037 16.8923 11.7249 16.896C11.1511 16.9004 10.5771 16.897 10.0032 16.897C10.0032 16.8968 10.0032 16.8965 10.0032 16.8963Z"
                                            fill="#0160C9" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_117_1459">
                                            <rect width="20" height="20" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="d-flex flex-column">
                                <p class="desc fs-6">No Fax</p>
                                <p class="fw-semibold fs-5">0274 - 513454</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
