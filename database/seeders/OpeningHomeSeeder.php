<?php

namespace Database\Seeders;

use App\Models\OpeningHome;
use Illuminate\Database\Seeder;

class OpeningHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OpeningHome::create([
            'title_opening' => 'Selamat Datang Di SMA Negeri 1 Selat!!',
            'description' => 'Di SMA Negeri 1 Selat, kami menciptakan lingkungan yang mendukung dan memelihara, yang mendorong individualitas dan kreativitas. Tim pendidik kami yang berdedikasi penuh komitmen untuk menyediakan pendidikan terbaik, dan perhatian pribadi.',
        ]);
    }
}
