<?php

namespace Database\Seeders;

use App\Models\SectionService;
use Illuminate\Database\Seeder;

class SectionServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionService::create([
            'title_section' => 'Kami Mengarahkan Siswa Menuju Kesuksesan Karir',
            'description' => 'Kami memandu setiap siswa menuju pencapaian kesuksesan yang berkelanjutan dalam berbagai bidang karir yang mereka pilih. Visi kami adalah membantu siswa mengembangkan potensi terbaik mereka untuk meraih prestasi luar biasa dalam perjalanan karir mereka yang penuh prestasi.',
            'button' => 'Lihat Semua',
        ]);
    }
}
