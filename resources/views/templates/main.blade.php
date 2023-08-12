<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>International School Courageon | {{ $title }} Page</title>

    {{-- STYLE CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/rte_theme_default.css') }}">
    {{-- END STYLE CSS --}}


    {{-- SCRIPT JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('assets/js/rte.js') }}"></script>
    <script src="{{ asset('assets/js/all_plugins.js') }}"></script>
    {{-- END SCRIPT JS --}}

</head>

<body>

    @if (Request::is('admin/login'))
        @yield('container')
    @else
        <div class="container-fluid dashboard p-0 d-flex">
            @include('templates.sidebar')

            <div class="content-dashboard">
                @include('templates.topbar')

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
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    {{-- END SCRIPT JS --}}
</body>

</html>
