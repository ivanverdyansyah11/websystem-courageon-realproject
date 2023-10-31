<?php

namespace Database\Seeders;

use App\Models\SectionGraduation;
use Illuminate\Database\Seeder;

class SectionGraduationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionGraduation::create([
            'title_section' => 'Grafik Data Kenaikan Kelas & Kelulusan',
            'button_1' => 'Semua Siswa',
            'button_2' => 'Siswa Laki-Laki',
            'button_3' => 'Siswa Perempuan',
            'caption_1' => 'Kelas X',
            'caption_2' => 'Kelas XI',
            'caption_3' => 'Kelas XII',
        ]);
    }
}
