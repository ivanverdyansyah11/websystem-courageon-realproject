<?php

namespace Database\Seeders;

use App\Models\SectionAlumni;
use Illuminate\Database\Seeder;

class SectionAlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionAlumni::create([
            'title_section' => 'Apa Kata Alumni di SMA Negeri 1 selat?',
            'description' => 'Sejumlah alumni terbaik dari sekolah kami. Dari berbagai latar belakang dan jurusan studi, alumni kami telah mencapai kesuksesan dalam berbagai bidang pro'
        ]);
    }
}
