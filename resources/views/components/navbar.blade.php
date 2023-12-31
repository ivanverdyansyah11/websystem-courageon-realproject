<div class="position-absolute w-100  {{ Request::is('ekstrakurikuler*') || Request::is('pelayanan-karir*') || Request::is('berita*') || Request::is('majalah*') || Request::is('prestasi*') || Request::is('sarana-prasarana/detail') || Request::is('kategori-prestasi*') || Request::is('manajemen') || Request::is('guru') || Request::is('pegawai') || Request::is('projek*') ? 'd-none' : 'd-inline-block' }}"
    style="z-index: 999999" style="z-index: 999999">
    <nav class="navbar navbar-expand-lg py-4 navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/beranda"><img src="{{ asset('assets/img/brand/' . $logo->logo) }}"
                    class="logo-size-navbar" alt="" draggable="false" style="width: 52px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}"
                            href="{{ route('beranda') }}">{{ $navigations['link_1'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}"
                            href="{{ route('profil') }}">{{ $navigations['link_2'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('akademik') || Request::is('berita*') || Request::is('prestasi*') || Request::is('kategori-prestasi*') || Request::is('manajemen') || Request::is('guru') || Request::is('pegawai') || Request::is('projek*') ? 'active' : '' }}"
                            href="{{ route('akademik') }}">{{ $navigations['link_3'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kesiswaan') || Request::is('ekstrakurikuler*') || Request::is('pelayanan-karir*') ? 'active' : '' }}"
                            href="{{ route('kesiswaan') }}">{{ $navigations['link_4'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('sarana-prasarana*') ? 'active' : '' }}"
                            href="{{ route('sarana-prasarana') }}">{{ $navigations['link_5'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('humas') ? 'active' : '' }}"
                            href="{{ route('humas') }}">{{ $navigations['link_6'] }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="w-100  {{ Request::is('beranda') || Request::is('profil') || Request::is('akademik') || Request::is('kesiswaan') || Request::is('sarana-prasarana') || Request::is('humas') ? 'd-none' : 'd-inline-block' }}"
    style="z-index: 999999">
    <nav class="navbar navbar-expand-lg py-4 navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/beranda"><img src="{{ asset('assets/img/brand/' . $logo->logo) }}"
                    class="logo-size-navbar" alt="" draggable="false" style="width: 52px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('beranda') ? 'active' : '' }}"
                            href="{{ route('beranda') }}">{{ $navigations['link_1'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}"
                            href="{{ route('profil') }}">{{ $navigations['link_2'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('akademik') || Request::is('prestasi*') || Request::is('kategori-prestasi*') || Request::is('berita*') || Request::is('manajemen')  || Request::is('majalah*') || Request::is('guru') || Request::is('pegawai') || Request::is('projek*') ? 'active' : '' }}"
                            href="{{ route('akademik') }}">{{ $navigations['link_3'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('kesiswaan') || Request::is('ekstrakurikuler*') || Request::is('pelayanan-karir*') ? 'active' : '' }}"
                            href="{{ route('kesiswaan') }}">{{ $navigations['link_4'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('sarana-prasarana*') ? 'active' : '' }}"
                            href="{{ route('sarana-prasarana') }}">{{ $navigations['link_5'] }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('humas') ? 'active' : '' }}"
                            href="{{ route('humas') }}">{{ $navigations['link_6'] }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
