<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri 1 Selat</title>
    <link rel="icon" href="{{ asset('assets-homepage/img/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets-homepage/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets-homepage/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>

    @include('templates.navbar')

    @yield('container')

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
                        <a class="nav-link {{ Request::is('homepage') ? 'active' : '' }}"
                            href="{{ route('homepage') }}">Beranda</a>
                    </div>
                    <div class="col justify-content-center d-flex">
                        <a class="nav-link {{ Request::is('profil') ? 'active' : '' }}"
                            href="{{ route('profil') }}">Profile</a>
                    </div>
                    <div class="col justify-content-center d-flex">
                        <a class="nav-link {{ Request::is('akademik') ? 'active' : '' }}"
                            href="{{ route('akademik') }}">Akademik</a>
                    </div>
                    <div class="col justify-content-center d-flex">
                        <a class="nav-link {{ Request::is('kesiswaan') ? 'active' : '' }}"
                            href="{{ route('kesiswaan') }}">Kesiswaan</a>
                    </div>
                    <div class="col justify-content-center d-flex">
                        <a class="nav-link {{ Request::is('sarana-prasarana') ? 'active' : '' }}"
                            href="{{ route('sarana-prasarana') }}">Sarana Prasarana</a>
                    </div>
                    <div class="col justify-content-center d-flex">
                        <a class="nav-link {{ Request::is('humas') ? 'active' : '' }}"
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

    <script src="https://kit.fontawesome.com/9e88c62f38.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets-homepage/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets-homepage/js/bootstrap.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script>
        const swiperTesti = new Swiper('.swiper-testi', {
            speed: 500,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                // clickable: true
            },
            navigation: {
                nextEl: ".btn-next",
                prevEl: ".btn-prev",
            },
            breakpoints: {
                1: {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
            }
        })
    </script>
</body>

</html>
