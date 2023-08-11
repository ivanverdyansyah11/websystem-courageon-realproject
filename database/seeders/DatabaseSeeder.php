<?php

namespace Database\Seeders;

use App\Models\HeaderHome;
use App\Models\OpeningHome;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        HeaderHome::create([
            'banner' => 'beranda-images/header-image/banner-header.jpg',
            'title_header' => 'Sekolah Courageon, Wujudkan impianmu yang tinggi di sini!',
            'description' => 'Selamat datang di CourageOn School, tempat perlindungan pendidikan yang luar biasa di mana keberanian bertemu dengan keunggulan. Komitmen kami untuk merawat keunggulan akademis dan pertumbuhan pribadi membuat kami menjadi institusi terdepan yang menggenggam potensi dalam setiap individu.',
        ]);

        OpeningHome::create([
            'title_opening' => 'Selamat Datang Di sekolah Courageon!',
            'description' => 'Di CourageOn, kami menciptakan lingkungan yang mendukung dan memelihara, yang mendorong individualitas dan kreativitas. Tim pendidik kami yang berdedikasi penuh komitmen untuk menyediakan pendidikan terbaik, dan perhatian pribadi.',
        ]);
    }
}
