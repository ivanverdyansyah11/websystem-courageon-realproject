<?php

namespace Database\Seeders;

use App\Models\SectionStudent;
use Illuminate\Database\Seeder;

class SectionStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionStudent::create([
            'title_section' => 'Grafik Data Kesiswaan',
            'button_1' => 'Semua Siswa',
            'button_2' => 'Siswa Laki-Laki',
            'button_3' => 'Siswa Perempuan',
            'caption_1' => 'Kelas X',
            'caption_2' => 'Kelas XI',
            'caption_3' => 'Kelas XII',
        ]);
    }
}
