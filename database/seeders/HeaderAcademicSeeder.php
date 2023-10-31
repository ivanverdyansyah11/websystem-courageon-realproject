<?php

namespace Database\Seeders;

use App\Models\HeaderAcademic;
use Illuminate\Database\Seeder;

class HeaderAcademicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderAcademic::create([
            'banner' => 'banner-header.png',
            'title_header' => 'Inovasi Peningkatan Prestasi Akademik di Sekolah!',
            'description' => 'Penelitian ini mencari cara-cara inovatif untuk meningkatkan prestasi akademik siswa di sekolah. Metode baru seperti teknologi edukasi terkini, pembelajaran berbasis proyek, dan kurikulum lintas disiplin akan dieksplorasi. Penelitian ini juga menyoroti peran guru, staf, orang tua, dan dukungan keluarga dalam mencapai hasil akademik yang lebih baik.',
            'button' => 'Lihat Selengkapnya',
        ]);

        HeaderAcademic::create([
            'banner' => 'banner-header-2.png',
            'title_header' => 'Inovasi Peningkatan Prestasi Akademik di Sekolah! 2',
            'description' => 'Penelitian ini mencari cara-cara inovatif untuk meningkatkan prestasi akademik siswa di sekolah. Metode baru seperti teknologi edukasi terkini, pembelajaran berbasis proyek, dan kurikulum lintas disiplin akan dieksplorasi. Penelitian ini juga menyoroti peran guru, staf, orang tua, dan dukungan keluarga dalam mencapai hasil akademik yang lebih baik.',
            'button' => 'Lihat Selengkapnya 2',
        ]);
    }
}
