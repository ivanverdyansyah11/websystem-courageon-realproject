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
            Request::is('ekstrakurikuler') ||
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
            !Request::is('ekstrakurikuler') ||
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

    @if (Request::is('admin/login'))
        @yield('container')
    @elseif(Request::is('beranda') ||
            Request::is('prestasi*') || 
            Request::is('berita*') ||
            Request::is('manajemen*') ||
            Request::is('guru*') ||
            Request::is('pegawai*') ||
            Request::is('projek*') ||
            Request::is('pelayanan-karir*') ||
            Request::is('ekstrakurikuler') ||
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

    @if (Request::is('beranda') ||
            Request::is('prestasi*') ||
            Request::is('berita*') ||
            Request::is('manajemen*') ||
            Request::is('guru*') ||
            Request::is('pegawai*') ||
            Request::is('projek*') ||
            Request::is('pelayanan-karir*') ||
            Request::is('ekstrakurikuler') ||
            Request::is('profil*') ||
            Request::is('akademik*') ||
            Request::is('kesiswaan*') ||
            Request::is('sarana-prasarana*') ||
            Request::is('humas*'))
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script>
             document.addEventListener('DOMContentLoaded', function() {
    var showCategory = 'category1';
    var showAllCategory = document.querySelector(`.category-name[data-category="${showCategory}"]`);
    showAllCategory.classList.add('active');
    showCategory.style.display='flex';
    showItems(showCategory); // Panggil fungsi showItems() dengan kategori 'category1' sebagai default
  });

  function showItems(category) {
    // Menghapus kelas "active" dari semua kategori
    var categories = document.getElementsByClassName('category-name');
    for (var i = 0; i < categories.length; i++) {
      categories[i].classList.remove('active');
    }

    // Menambahkan kelas "active" ke kategori yang dipilih
    var selectedCategory = event.target;
    if (!selectedCategory.classList.contains('active')) {
      selectedCategory.classList.add('active');
    }

    // Menampilkan item-item yang memiliki kategori yang sama dengan kategori yang dipilih
    var items = document.getElementsByClassName('item');
    for (var j = 0; j < items.length; j++) {
      items[j].style.display = 'none';
      if (items[j].classList.contains(category)) {
        items[j].style.display = 'flex';
      }
    }
  }
  const chart1 = document.getElementById('chart1');
  const chart2 = document.getElementById('chart2');
  const chart3 = document.getElementById('chart3');

  new Chart(chart1, {
    type: 'bar',
    data: {
      labels: ['2021', '2022', '2023'],
      datasets: [{
        data: [1000, 2380, 2853,],
        borderWidth: 0.1,
        backgroundColor:['#F94144','#F94144','#F94144'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },{
        data: [2000, 1380, 2453,],
        borderWidth: 0.1,
        backgroundColor:['#90BE6D','#90BE6D','#90BE6D'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },{
        data: [3000, 1980, 2953,],
        borderWidth: 0.1,
        backgroundColor:['#2D9CDB','#2D9CDB','#2D9CDB'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },
      ],

    },
    options: {
      // responsive: true,
      plugins: {
        legend: {
          display: false,
        },
      },


      scales: {
        y: {
          beginAtZero: true,
          min:0,
          max:3000,
          ticks:{
            stepSize:300
          }
        },
        xAxes: [{

        }]

      }
    }
  });

  new Chart(chart2, {
    type: 'bar',
    data: {
      labels: ['2021', '2022', '2023'],
      datasets: [{
        data: [2000, 2180, 2553,],
        borderWidth: 0.1,
        backgroundColor:['#F94144','#F94144','#F94144'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },{
        data: [2300, 1290, 2753,],
        borderWidth: 0.1,
        backgroundColor:['#90BE6D','#90BE6D','#90BE6D'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },{
        data: [1900, 2680, 2253,],
        borderWidth: 0.1,
        backgroundColor:['#2D9CDB','#2D9CDB','#2D9CDB'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },
      ],

    },
    options: {
      // responsive: true,
      plugins: {
        legend: {
          display: false,
        },
      },


      scales: {
        y: {
          beginAtZero: true,
          min:0,
          max:3000,
          ticks:{
            stepSize:300
          }
        },
        xAxes: [{

        }]

      }
    }
  });

  new Chart(chart3, {
    type: 'bar',
    data: {
      labels: ['2021', '2022', '2023'],
      datasets: [{
        data: [3000, 2880, 2153,],
        borderWidth: 0.1,
        backgroundColor:['#F94144','#F94144','#F94144'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },{
        data: [2800, 1190, 2153,],
        borderWidth: 0.1,
        backgroundColor:['#90BE6D','#90BE6D','#90BE6D'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },{
        data: [1800, 2180, 2653,],
        borderWidth: 0.1,
        backgroundColor:['#2D9CDB','#2D9CDB','#2D9CDB'],
        categoryPercentage: 0.8,
        barPercentage: 0.6,
        borderRadius:'8',
        spaceBetween:'10'
      },
      ],

    },
    options: {
      // responsive: true,
      plugins: {
        legend: {
          display: false,
        },
      },


      scales: {
        y: {
          beginAtZero: true,
          min:0,
          max:3000,
          ticks:{
            stepSize:300
          }
        },
        xAxes: [{

        }]

      }
    }
  });
            const swiperTesti = new Swiper('.swiper-testi', {
                speed: 500,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
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
    @else
        <script src="{{ asset('assets/js/script.js') }}"></script>
    @endif
    {{-- END SCRIPT JS --}}
</body>

</html>
