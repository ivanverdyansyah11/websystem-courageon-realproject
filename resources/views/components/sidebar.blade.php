<div class="sidebar">
    <div class="sidebar-scroll d-flex flex-column justify-content-between">
        <div class="sidebar-menu-top d-flex flex-column align-items-center w-100">
            <a href="{{ route('dashboard-index') }}">
                <img src="{{ asset('assets/img/brand/brand-logo.png') }}" class="img-fluid brand-logo" alt="Brand Logo"
                    draggable="false">
            </a>
            <div class="link-wrapper d-flex flex-column w-100">
                <div class="menu-link d-flex flex-column {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard-index') }}" class="link-item d-flex align-items-center">
                        <div class="icon-sidebar-wrapper">
                            <div class="sidebar-icon dashboard-icon"></div>
                        </div>
                        <p>Dashboard</p>
                    </a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/beranda*') ? 'active' : '' }}">
                    <a href="{{ route('beranda-index') }}" class="link-item d-flex align-items-center">
                        <div class="icon-sidebar-wrapper">
                            <div class="sidebar-icon beranda-icon"></div>
                        </div>
                        <p>Beranda</p>
                    </a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/profil*') ? 'active' : '' }}">
                    <a href="{{ route('profil-index') }}"
                        class="link-item d-flex align-items-center justify-content-between">
                        <div class="wrapper d-flex align-items-center">
                            <div class="icon-sidebar-wrapper">
                                <div class="sidebar-icon profil-icon"></div>
                            </div>
                            <p>Profil</p>
                        </div>
                        <div class="wrapper-arrow">
                            <div class="arrow-sidebar-icon"></div>
                        </div>
                    </a>
                    <a href="{{ route('visi-misi-index') }}"
                        class="link-child {{ Request::is('admin/profil/visi-misi*') ? 'active' : '' }}">Visi & Misi</a>
                    <a href="{{ route('logo-mars-index') }}"
                        class="link-child {{ Request::is('admin/profil/logo-mars*') ? 'active' : '' }}">Logo & Mars</a>
                    <a href="{{ route('manajemen-index') }}"
                        class="link-child {{ Request::is('admin/profil/manajemen*') ? 'active' : '' }}">Manajemen</a>
                    <a href="{{ route('guru-index') }}"
                        class="link-child {{ Request::is('admin/profil/guru*') ? 'active' : '' }}">Guru</a>
                    <a href="{{ route('pegawai-index') }}"
                        class="link-child {{ Request::is('admin/profil/pegawai*') ? 'active' : '' }}">Pegawai</a>
                    <a href="{{ route('kontak-index') }}"
                        class="link-child {{ Request::is('admin/profil/kontak*') ? 'active' : '' }}">Kontak</a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/akademik*') ? 'active' : '' }}">
                    <a href="{{ route('akademik-index') }}"
                        class="link-item d-flex align-items-center justify-content-between">
                        <div class="wrapper d-flex align-items-center">
                            <div class="icon-sidebar-wrapper">
                                <div class="sidebar-icon akademik-icon"></div>
                            </div>
                            <p>Akademik</p>
                        </div>
                        <div class="wrapper-arrow">
                            <div class="arrow-sidebar-icon"></div>
                        </div>
                    </a>
                    {{-- <a href="{{ route('kurikulum-index') }}" class="link-child">Kurikulum</a>
                    <a href="{{ route('program-index') }}" class="link-child">Program</a>
                    <a href="{{ route('proyek-index') }}" class="link-child">Proyek P5</a>
                    <a href="{{ route('kelulusan-index') }}" class="link-child">Kelulusan Kelas</a> --}}
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/kesiswaan*') ? 'active' : '' }}">
                    <a href="{{ route('kesiswaan-index') }}"
                        class="link-item d-flex align-items-center justify-content-between">
                        <div class="wrapper d-flex align-items-center">
                            <div class="icon-sidebar-wrapper">
                                <div class="sidebar-icon kesiswaan-icon"></div>
                            </div>
                            <p>Kesiswaan</p>
                        </div>
                        <div class="wrapper-arrow">
                            <div class="arrow-sidebar-icon"></div>
                        </div>
                    </a>
                    {{-- <a href="{{ route('siswa-index') }}" class="link-child">Data Siswa</a>
                    <a href="{{ route('ekstrakulikuler-index') }}" class="link-child">Ekstrakulikuler</a>
                    <a href="{{ route('pelayanan-index') }}" class="link-child">Pelayanan</a>
                    <a href="{{ route('osis-mpk-index') }}" class="link-child">Osis & Mpk</a>
                    <a href="{{ route('prestasi-index') }}" class="link-child">Prestasi</a>
                    <a href="{{ route('beasiswa-index') }}" class="link-child">Beasiswa</a>
                    <a href="{{ route('alumni-index') }}" class="link-child">Alumni</a> --}}
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/sarana*') ? 'active' : '' }}">
                    <a href="{{ route('sarana-index') }}"
                        class="link-item d-flex align-items-center justify-content-between">
                        <div class="wrapper d-flex align-items-center">
                            <div class="icon-sidebar-wrapper">
                                <div class="sidebar-icon sarana-icon"></div>
                            </div>
                            <p>Sarana</p>
                        </div>
                        <div class="wrapper-arrow">
                            <div class="arrow-sidebar-icon"></div>
                        </div>
                    </a>
                    {{-- <a href="{{ route('prasarana-index') }}" class="link-child">Prasarana</a>
                    <a href="{{ route('denah-index') }}" class="link-child">Denah</a> --}}
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/humas*') ? 'active' : '' }}">
                    <a href="{{ route('humas-index') }}"
                        class="link-item d-flex align-items-center justify-content-between">
                        <div class="wrapper d-flex align-items-center">
                            <div class="icon-sidebar-wrapper">
                                <div class="sidebar-icon humas-icon"></div>
                            </div>
                            <p>Humas</p>
                        </div>
                        <div class="wrapper-arrow">
                            <div class="arrow-sidebar-icon"></div>
                        </div>
                    </a>
                    {{-- <a href="{{ route('kemitraan-index') }}" class="link-child">Kemitraan</a>
                    <a href="{{ route('majalah-index') }}" class="link-child">Majalah</a> --}}
                </div>
            </div>
        </div>
        <div class="sidebar-menu-bottom d-inline-block d-lg-none">
            <form class="menu-link d-flex flex-column w-100">
                <button type="submit" class="link-item d-flex align-items-center">
                    <div class="icon-sidebar-wrapper">
                        <div class="sidebar-icon logout-icon"></div>
                    </div>
                    <p>Logout</p>
                </button>
            </form>
        </div>
    </div>
</div>