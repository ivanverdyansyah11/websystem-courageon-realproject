<?php

namespace Database\Seeders;

use App\Models\SectionDenah;
use Illuminate\Database\Seeder;

class SectionDenahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionDenah::create([
            'map' => 'denah-map.jpg',
            'title_section' => 'Kode Denah',
            'title_code' => 'Kode Ruangan',
            'title_room' => 'Nama Ruangan',
            'button' => 'Detail',
        ]);
    }
}
