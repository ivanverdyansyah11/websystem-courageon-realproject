<?php

namespace Database\Seeders;

use App\Models\SectionProyek;
use Illuminate\Database\Seeder;

class SectionProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionProyek::create([
            'title_section' => 'Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila) Di SMA Negeri 1 Selat',
            'description' => 'Proyek 5P di SMA Negeri 1 Selat tingkatkan pemahaman siswa tentang nilai-nilai Pancasila lewat pendidikan, diskusi, kegiatan sosial, dan kompetisi. Siswanya diharapkan menerapkan nilai-nilai ini dalam kehidupan sehari-hari dan masyarakat.',
            'button' => 'Lihat Semua',
        ]);
    }
}
