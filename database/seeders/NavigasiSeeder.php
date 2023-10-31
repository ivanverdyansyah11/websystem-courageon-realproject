<?php

namespace Database\Seeders;

use App\Models\Navigasi;
use Illuminate\Database\Seeder;

class NavigasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Navigasi::create([
            'link_1' => 'Beranda',
            'link_2' => 'Profil',
            'link_3' => 'Akademik',
            'link_4' => 'Kesiswaan',
            'link_5' => 'Sarana Prasarana',
            'link_6' => 'Humas',
        ]);
    }
}
