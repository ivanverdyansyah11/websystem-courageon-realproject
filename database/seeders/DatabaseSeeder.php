<?php

namespace Database\Seeders;

use App\Models\HeaderHome;
use App\Models\OpeningHome;
use App\Models\RemarkHome;
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

        RemarkHome::create([
            'banner' => 'beranda-images/sambutan-image/banner-sambutan.jpg',
            'title_remark' => 'Sambutan dari kepala sekolah courageon',
            'message' => 'Puji Syukur kepada Tuhan Yesus Kristus yang telah memberkati Sekolah Courageon sehingga boleh berkembang dan mendapat kepercayaan masyarakat. Berkomitmen meningkatkan mutu dan pelayanan, teguh dalam iman, berbudaya serta berwawasan lingkungan sehingga mampu menghasilkan lulusan yang siap terjun ke Dunia Usaha, Dunia Industri, dan Dunia Kerja serta memiliki jiwa enterpreneur, mandiri dan mampu berkompetisi di segala bidang.',
        ]);
    }
}
