<?php

namespace Database\Seeders;

use App\Models\HeaderProfile;
use Illuminate\Database\Seeder;

class HeaderProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderProfile::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'Profile Dan informasi mengenai SMA Negeri 1 Selat',
            'description' => 'SMA Negeri 1 Selat adalah sekolah negeri yang terletak di Kota Bahagia. Kami didirikan dengan tekad kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan dunia global.',
            'button' => 'Lihat Selengkapnya',
        ]);

        HeaderProfile::create([
            'banner' => 'banner-header-2.jpg',
            'title_header' => 'Profile Dan informasi mengenai SMA Negeri 1 Selat 2',
            'description' => 'SMA Negeri 1 Selat adalah sekolah negeri yang terletak di Kota Bahagia. Kami didirikan dengan tekad kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan dunia global.',
            'button' => 'Lihat Selengkapnya 2',
        ]);
    }
}
