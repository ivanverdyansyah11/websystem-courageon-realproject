<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'banner' => 'banner-elerning.png',
            'title' => 'E-Learning SMA Negeri 1 Selat',
            'description' => 'Program E-Learning di SMA Negeri 1 Selat adalah platform pembelajaran digital yang inovatif dan interaktif, dirancang untuk mendukung proses belajar-mengajar yang efektif dan efisien. Melalui E-Learning, siswa memiliki akses ke beragam materi pembelajaran, modul, dan sumber daya pendukung yang dapat diakses kapan saja. Platform ini menawarkan berbagai fitur canggih, termasuk video pembelajaran, forum diskusi, ujian online, dan berbagai tugas interaktif. Dengan bimbingan dari para guru, siswa dapat berpartisipasi dalam diskusi dan berkolaborasi dengan sesama siswa dalam proses belajar.',
            'button' => 'Website E-Learning',
            'link' => 'https://guru.kemdikbud.go.id/',
        ]);

        Program::create([
            'banner' => 'banner-asessment.jpg',
            'title' => 'E-Asessment SMA Negeri 1 Selat',
            'description' => 'E-Assessment di Sekolah SMA Negeri 1 Selat merupakan sistem evaluasi dan penilaian berbasis teknologi yang inovatif untuk mengukur kemajuan belajar siswa secara akurat dan efisien. Dengan menggunakan teknologi canggih, E-Assessment memungkinkan siswa untuk mengikuti berbagai jenis ujian dan tugas evaluasi secara online melalui platform pembelajaran digital yang terintegrasi. Platform E-Assessment ini menyediakan berbagai format ujian, termasuk pilihan ganda, uraian, dan tugas interaktif yang dirancang untuk mengukur pemahaman siswa dalam berbagai tingkatan kognitif.',
            'button' => 'Website E-Asessment',
            'link' => 'https://guru.kemdikbud.go.id/',
        ]);
    }
}
