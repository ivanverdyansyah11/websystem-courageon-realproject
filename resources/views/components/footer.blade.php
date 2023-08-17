<footer class="section-margin-top">
    <div class="top-footer container">
        <div class="img-footer-wrapper d-flex justify-content-center">
            <img src="{{ asset('assets-homepage/img/logo.png') }}" alt="logo" class="img-fluid mb-3"
                style="width: 120px;">
        </div>
        <div class="mt-4 d-flex flex-row justify-content-between">
            <hr class="main-color hr-footer opacity-100 d-xl-flex d-none">
            <div class="row w-100 row-cols-lg-6 row-cols-md-3 row-cols-2 gy-4">
                <div class="col justify-content-center d-flex">
                    <a class="nav-link {{ Request::is('beranda*') ? 'active' : '' }}"
                        href="{{ route('beranda') }}">Beranda</a>
                </div>
                <div class="col justify-content-center d-flex">
                    <a class="nav-link {{ Request::is('profil*') ? 'active' : '' }}"
                        href="{{ route('profil') }}">Profile</a>
                </div>
                <div class="col justify-content-center d-flex">
                    <a class="nav-link {{ Request::is('akademik') || Request::is('prestasi*') || Request::is('berita') || Request::is('manajemen') || Request::is('guru') || Request::is('pegawai') || Request::is('projek*') ? 'active' : '' }}"
                        href="{{ route('akademik') }}">Akademik</a>
                </div>
                <div class="col justify-content-center d-flex">
                    <a class="nav-link {{ Request::is('kesiswaan') || Request::is('ekstrakurikuler*') || Request::is('pelayanan-karir*') ? 'active' : '' }}"
                        href="{{ route('kesiswaan') }}">Kesiswaan</a>
                </div>
                <div class="col justify-content-center d-flex">
                    <a class="nav-link {{ Request::is('sarana-prasarana*') ? 'active' : '' }}"
                        href="{{ route('sarana-prasarana') }}">Sarana Prasarana</a>
                </div>
                <div class="col justify-content-center d-flex">
                    <a class="nav-link {{ Request::is('humas*') ? 'active' : '' }}"
                        href="{{ route('humas') }}">Humas</a>
                </div>
            </div>
            <hr class="main-color hr-footer opacity-100 d-xl-flex d-none">
        </div>
    </div>
    <div class="mt-4 copyright-wrapper d-flex py-3 justify-content-center">
        <p class="text-white fs-12">Copyright © 2023. SMA Negeri 1 Selat</p>
    </div>
</footer>
