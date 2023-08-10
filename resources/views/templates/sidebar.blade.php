<div class="sidebar">
    <div class="sidebar-scroll d-flex flex-column justify-content-between">
        <div class="sidebar-menu-top d-flex flex-column align-items-center w-100">
            <a href="/admin/dashboard">
                <img src="{{ asset('assets/img/brand/brand-logo.svg') }}" class="img-fluid brand-logo" alt="Brand Logo"
                    draggable="false">
            </a>
            <div class="link-wrapper d-flex flex-column w-100">
                <div class="menu-link d-flex flex-column {{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="/admin/dashboard" class="link-item d-flex align-items-center">
                        <div class="icon-sidebar-wrapper">
                            <div class="sidebar-icon dashboard-icon"></div>
                        </div>
                        <p>Dashboard</p>
                    </a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/beranda/*') ? 'active' : '' }}">
                    <a href="/admin/beranda" class="link-item d-flex align-items-center">
                        <div class="icon-sidebar-wrapper">
                            <div class="sidebar-icon beranda-icon"></div>
                        </div>
                        <p>Beranda</p>
                    </a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/profil/*') ? 'active' : '' }}">
                    <a href="/admin/profil" class="link-item d-flex align-items-center justify-content-between">
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
                    <a href="/admin/profil/visi-misi" class="link-child">Visi & Misi</a>
                    <a href="/admin/profil/logo-mars" class="link-child">Logo & Mars</a>
                    <a href="/admin/profil/manajemen" class="link-child">Manajemen</a>
                    <a href="/admin/profil/guru" class="link-child">Guru</a>
                    <a href="/admin/profil/pegawai" class="link-child">Pegawai</a>
                    <a href="/admin/profil/lokasi" class="link-child">Lokasi</a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/akademik/*') ? 'active' : '' }}">
                    <a href="/admin/akademik" class="link-item d-flex align-items-center justify-content-between">
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
                    <a href="/admin/akademik/kurikulum" class="link-child">Kurikulum</a>
                    <a href="/admin/akademik/program" class="link-child">Program</a>
                    <a href="/admin/akademik/proyek" class="link-child">Proyek P5</a>
                    <a href="/admin/akademik/kelulusan" class="link-child">Kelulusan Kelas</a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/kesiswaan/*') ? 'active' : '' }}">
                    <a href="/admin/kesiswaan" class="link-item d-flex align-items-center justify-content-between">
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
                    <a href="/admin/kesiswaan/siswa" class="link-child">Data Siswa</a>
                    <a href="/admin/kesiswaan/ekstrakulikuler" class="link-child">Ekstrakulikuler</a>
                    <a href="/admin/kesiswaan/pelayanan" class="link-child">Pelayanan</a>
                    <a href="/admin/kesiswaan/osis-mpk" class="link-child">Osis & Mpk</a>
                    <a href="/admin/kesiswaan/prestasi" class="link-child">Prestasi</a>
                    <a href="/admin/kesiswaan/beasiswa" class="link-child">Beasiswa</a>
                    <a href="/admin/kesiswaan/alumni" class="link-child">Alumni</a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/sarana/*') ? 'active' : '' }}">
                    <a href="/admin/sarana" class="link-item d-flex align-items-center justify-content-between">
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
                    <a href="/admin/sarana/sarana" class="link-child">Sarana</a>
                    <a href="/admin/sarana/denah" class="link-child">Denah</a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/humas/*') ? 'active' : '' }}">
                    <a href="/admin/humas" class="link-item d-flex align-items-center justify-content-between">
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
                    <a href="/admin/humas/kemitraan" class="link-child">Kemitraan</a>
                    <a href="/admin/humas/majalah" class="link-child">Majalah</a>
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
