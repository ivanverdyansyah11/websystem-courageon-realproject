<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat | Halaman {{ $title }}</title>
    <link rel="icon" href="{{ asset('assets-homepage/img/logo.png') }}">

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}

    @if (Request::is('beranda') ||
            Request::is('prestasi*') ||
            Request::is('berita*') ||
            Request::is('manajemen*') ||
            Request::is('guru*') ||
            Request::is('pegawai*') ||
            Request::is('projek*') ||
            Request::is('pelayanan-karir*') ||
            Request::is('ekstrakurikuler*') ||
            Request::is('profil*') ||
            Request::is('akademik*') ||
            Request::is('kesiswaan*') ||
            Request::is('sarana-prasarana*') ||
            Request::is('humas*'))
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('assets/css/style-homepage.css') }}">
        <link rel="stylesheet" href="{{ asset('assets-homepage/lightbox/css/lightbox.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    @else
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}">
    @endif
    {{-- END STYLE CSS --}}

    {{-- SCRIPT JS --}}
    @if (
        !Request::is('beranda') ||
            !Request::is('prestasi*') ||
            !Request::is('berita*') ||
            !Request::is('manajemen*') ||
            !Request::is('guru*') ||
            !Request::is('pegawai*') ||
            !Request::is('projek*') ||
            !Request::is('pelayanan-karir*') ||
            !Request::is('ekstrakurikuler*') ||
            !Request::is('profil*') ||
            !Request::is('akademik*') ||
            !Request::is('kesiswaan*') ||
            !Request::is('sarana-prasarana*') ||
            !Request::is('humas*'))
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="{{ asset('assets/js/rte.js') }}"></script>
        <script src="{{ asset('assets/js/all_plugins.js') }}"></script>
    @endif
    {{-- END SCRIPT JS --}}

</head>

<body>

    @if (Request::is('admin/login') || Request::is('admin/forgot-password'))
        @yield('container')
    @elseif(Request::is('beranda') ||
            Request::is('prestasi*') ||
            Request::is('berita*') ||
            Request::is('manajemen*') ||
            Request::is('guru*') ||
            Request::is('pegawai*') ||
            Request::is('projek*') ||
            Request::is('pelayanan-karir*') ||
            Request::is('ekstrakurikuler*') ||
            Request::is('profil*') ||
            Request::is('akademik*') ||
            Request::is('kesiswaan*') ||
            Request::is('sarana-prasarana*') ||
            Request::is('humas*'))
        @include('components.navbar')
        @yield('container')
        @include('components.footer')
    @else
        <div class="container-fluid dashboard p-0 d-flex">
            @include('components.sidebar')

            <div class="content-dashboard">
                @include('components.topbar')

                @yield('container')
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
    @endif

    {{-- SCRIPT JS --}}
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets-homepage/lightbox/js/lightbox-plus-jquery.min.js') }}">
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- END SCRIPT JS --}}
</body>

</html>
