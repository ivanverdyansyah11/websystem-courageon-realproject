<?php

namespace Database\Seeders;

use App\Models\SectionAchievement;
use Illuminate\Database\Seeder;

class SectionAchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionAchievement::create([
            'title_section' => 'Mencetak Prestasi Gemilang, Kisah Sukses Siswa Inspiratif Di Sekolah Kami',
            'description' => 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.',
            'button' => 'Lihat Semua',
        ]);
    }
}
