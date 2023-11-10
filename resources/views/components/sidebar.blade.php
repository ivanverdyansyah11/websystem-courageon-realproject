<div class="sidebar ">
    <div class="sidebar-scroll d-flex flex-column justify-content-between sticky-top">
        <div class="sidebar-menu-top d-flex flex-column align-items-center w-100">
            <a href="{{ route('dashboard-index') }}">
                <img src="{{ asset('assets/img/brand/brand-logo.png') }}" class="img-fluid brand-logo" alt="Brand Logo"
                    draggable="false" data-value="logo_icon">
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

                <div
                    class="menu-link d-flex flex-column {{ Request::is('admin/beranda*') || Request::is('admin/akademik/galeri*') ? 'active' : '' }}">
                    <a href="{{ route('beranda-index') }}" class="link-item d-flex align-items-center">
                        <div class="icon-sidebar-wrapper">
                            <div class="sidebar-icon beranda-icon"></div>
                        </div>
                        <p>Beranda</p>
                    </a>
                    <a href="{{ route('galeri-index') }}"
                        class="link-child {{ Request::is('admin/akademik/galeri*') ? 'active' : '' }}">Galeri</a>
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
                    <a href="{{ route('video-index') }}"
                        class="link-child {{ Request::is('admin/profil/video*') ? 'active' : '' }}">Video</a>
                </div>

                <div
                    class="menu-link d-flex flex-column {{ Request::is('admin/akademik') || Request::is('admin/akademik/kurikulum*') || Request::is('admin/akademik/program*') || Request::is('admin/akademik/proyek*') || Request::is('admin/akademik/kelulusan*') ? 'active' : '' }}">
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
                    <a href="{{ route('kurikulum-index') }}"
                        class="link-child {{ Request::is('admin/akademik/kurikulum*') ? 'active' : '' }}">Kurikulum</a>
                    <a href="{{ route('program-index') }}"
                        class="link-child {{ Request::is('admin/akademik/program*') ? 'active' : '' }}">Program</a>
                    <a href="{{ route('proyek-index') }}"
                        class="link-child {{ Request::is('admin/akademik/proyek*') ? 'active' : '' }}">Proyek P5</a>
                    <a href="{{ route('kelulusan-index') }}"
                        class="link-child {{ Request::is('admin/akademik/kelulusan*') ? 'active' : '' }}">Kelulusan</a>
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
                    <a href="{{ route('administrasi-index') }}"
                        class="link-child {{ Request::is('admin/kesiswaan/administrasi*') ? 'active' : '' }}">Administrasi</a>
                    <a href="{{ route('siswa-index') }}"
                        class="link-child {{ Request::is('admin/kesiswaan/siswa*') ? 'active' : '' }}">Data Siswa</a>
                    <a href="{{ route('ekstrakurikuler-index') }}"
                        class="link-child {{ Request::is('admin/kesiswaan/ekstrakurikuler*') ? 'active' : '' }}">Ekstrakulikuler</a>
                    <a href="{{ route('pelayanan-karir-index') }}"
                        class="link-child {{ Request::is('admin/kesiswaan/pelayanan-karir*') ? 'active' : '' }}">Pelayanan</a>
                    <a href="{{ route('prestasi-index') }}"
                        class="link-child {{ Request::is('admin/kesiswaan/prestasi*') ? 'active' : '' }}">Prestasi</a>
                    <a href="{{ route('beasiswa-index') }}"
                        class="link-child {{ Request::is('admin/kesiswaan/beasiswa*') ? 'active' : '' }}">Beasiswa</a>
                    <a href="{{ route('alumni-index') }}"
                        class="link-child {{ Request::is('admin/kesiswaan/alumni*') ? 'active' : '' }}">Alumni</a>
                    {{-- <a href="{{ route('osis-mpk-index') }}" class="link-child">Osis & Mpk</a> --}}
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
                    <a href="{{ route('prasarana-index') }}"
                        class="link-child {{ Request::is('admin/sarana-prasarana/prasarana*') ? 'active' : '' }}">Prasarana</a>
                    <a href="{{ route('denah-index') }}"
                        class="link-child {{ Request::is('admin/sarana-prasarana/denah*') ? 'active' : '' }}">Denah</a>
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
                    <a href="{{ route('kemitraan-index') }}"
                        class="link-child {{ Request::is('admin/humas/kemitraan*') ? 'active' : '' }}">Kemitraan</a>
                    <a href="{{ route('majalah-index') }}"
                        class="link-child {{ Request::is('admin/humas/majalah*') ? 'active' : '' }}">Majalah</a>
                    <a href="{{ route('berita-index') }}"
                        class="link-child {{ Request::is('admin/humas/berita*') ? 'active' : '' }}">Berita</a>
                </div>

                <div class="menu-link d-flex flex-column {{ Request::is('admin/pengaturan*') ? 'active' : '' }}">
                    <a href="{{ route('pengaturan-index') }}" class="link-item d-flex align-items-center">
                        <div class="icon-sidebar-wrapper">
                            <div class="sidebar-icon setting-icon"></div>
                        </div>
                        <p>Pengaturan</p>
                    </a>
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

<script>
    $.ajax({
        type: 'get',
        url: '/send-logo',
        success: function(data) {
            $('[data-value="logo_icon"]').attr("src",
                "/assets/img/brand/" + data.logo);
        }
    });
</script>
