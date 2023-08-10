@extends('templates.main')

@section('container')
    <div class="container-fluid dashboard p-0 d-flex">
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
        <div class="content-dashboard">
            <div class="topbar d-flex justify-content-between align-items-center">
                <h3 class="title">Halaman Dashboard</h3>
                <div class="wrapper-position position-relative d-none d-lg-inline-block">
                    <div class="topbar-profile d-flex align-items-center position-relative">
                        <div class="wrapper-profile d-flex align-items-center">
                            <img src="{{ asset('assets/img/other/profile-admin.svg') }}" class="img-fluid profile-image"
                                alt="Profile Admin">
                            <div class="profile-user">
                                <h6 class="user-name">Ayu Pradewi</h6>
                                <p class="user-role">Admin Management</p>
                            </div>
                        </div>
                        <div class="arrow-border d-flex align-items-center justify-content-center">
                            <div class="arrow-topbar-icon"></div>
                        </div>
                    </div>
                    <div class="popup-logout position-absolute">
                        <form action="">
                            <button class="button-logout d-flex align-items-center">
                                <div class="wrapper-logout">
                                    <div class="logout-solid"></div>
                                </div>
                                <p>Logout</p>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="topbar-hamburger d-lg-none">
                    <div class="hamburger-icon"></div>
                </div>
            </div>
            <div class="content bg-danger">
                123
            </div>
        </div>
    </div>

    <script>
        const topbarProfile = document.querySelector('.topbar-profile');
        const popupLogout = document.querySelector('.popup-logout');
        const sidebar = document.querySelector('.sidebar');
        const hamburgerButton = document.querySelector('.topbar-hamburger');

        topbarProfile.addEventListener('click', function() {
            topbarProfile.classList.toggle('active');
            popupLogout.classList.toggle('active');
        });

        hamburgerButton.addEventListener('click', function() {
            sidebar.classList.toggle('active');
            popupLogout.classList.toggle('active');
        });
    </script>
@endsection
