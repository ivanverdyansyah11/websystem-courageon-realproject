<nav class="navbar navbar-expand-lg py-4">
    <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('assets-homepage/img/logo.png') }}"
                class="logo-size-navbar" alt="" draggable="false" style="width: 52px;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}"
                        href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}"
                        href="{{ route('profil') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('akademik') || Request::is('prestasi*') || Request::is('berita') || Request::is('manajemen') || Request::is('guru') || Request::is('pegawai') || Request::is('projek*') ? 'active' : '' }}"
                        href="{{ route('akademik') }}">Akademik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kesiswaan') || Request::is('ekstrakurikuler*') || Request::is('pelayanan-karir*') ? 'active' : '' }}"
                        href="{{ route('kesiswaan') }}">Kesiswaan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('sarana-prasarana*') ? 'active' : '' }}"
                        href="{{ route('sarana-prasarana') }}">Sarana Prasarana</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('humas') ? 'active' : '' }}"
                        href="{{ route('humas') }}">Humas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
