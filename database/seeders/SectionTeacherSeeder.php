<?php

namespace Database\Seeders;

use App\Models\SectionTeacher;
use Illuminate\Database\Seeder;

class SectionTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionTeacher::create([
            'title_section' => 'Data Guru SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);
    }
}
