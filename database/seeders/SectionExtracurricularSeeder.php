<?php

namespace Database\Seeders;

use App\Models\SectionExtracurricular;
use Illuminate\Database\Seeder;

class SectionExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionExtracurricular::create([
            'title_section' => 'Ekstrakulikuler Membuka Potensi Dan Meningkatkan Kolaborasi',
            'description' => 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.',
        ]);
    }
}
