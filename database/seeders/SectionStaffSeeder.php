<?php

namespace Database\Seeders;

use App\Models\SectionStaff;
use Illuminate\Database\Seeder;

class SectionStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionStaff::create([
            'title_section' => 'Data Pegawai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);
    }
}
