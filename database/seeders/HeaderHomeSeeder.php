<?php

namespace Database\Seeders;

use App\Models\HeaderHome;
use Illuminate\Database\Seeder;

class HeaderHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderHome::create([
            'banner' => 'banner-header.png',
            'title_header' => 'SMA Negeri 1 Selat, Wujudkan Impianmu Yang Tinggi Di Sini!',
            'description' => 'Selamat datang di SMA Negeri 1 Selat, tempat perlindungan pendidikan yang luar biasa di mana keberanian bertemu dengan keunggulan. Komitmen kami untuk merawat keunggulan akademis dan pertumbuhan pribadi membuat kami menjadi institusi terdepan yang menggenggam potensi dalam setiap individu.',
            'button' => 'Lihat Profile',
        ]);

        HeaderHome::create([
            'banner' => 'banner-header-2.png',
            'title_header' => 'SMA Negeri 1 Selat, Wujudkan Impianmu Yang Tinggi Di Sini! 2',
            'description' => '123 Selamat datang di SMA Negeri 1 Selat, tempat perlindungan pendidikan yang luar biasa di mana keberanian bertemu dengan keunggulan. Komitmen kami untuk merawat keunggulan akademis dan pertumbuhan pribadi membuat kami menjadi institusi terdepan yang menggenggam potensi dalam setiap individu.',
            'button' => 'Lihat Profile 123',
        ]);
    }
}
