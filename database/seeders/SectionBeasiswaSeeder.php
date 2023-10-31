<?php

namespace Database\Seeders;

use App\Models\SectionBeasiswa;
use Illuminate\Database\Seeder;

class SectionBeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionBeasiswa::create([
            'title_section' => 'Ayo dapatkan Peluang Beasiswa di Sekolah!',
            'description' => 'Dengan adanya beasiswa di sekolah, para siswa berpeluang untuk mengakses pendidikan yang berkualitas tanpa memandang latar belakang ekonomi. Ini juga membuka pintu bagi mereka untuk mengembangkan potensi diri',
        ]);
    }
}
