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
    {{-- END STYLE CSS --}}

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
