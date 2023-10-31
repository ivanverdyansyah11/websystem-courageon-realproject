<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beasiswa::create([
            "title" => "Beasiswa Akademik Unggulan",
            "description" => "Siswa yang mendapatkan beasiswa ini akan menerima dukungan finansial untuk biaya pendidikan selama satu tahun ajaran, sebagai penghargaan atas dedikasi dan kerja keras mereka dalam prestasi akademik."
        ]);

        Beasiswa::create([
            "title" => "Beasiswa Non-Akademik",
            "description" => "Siswa yang menunjukkan prestasi di luar akademik seperti dalam olahraga, atau pelayanan masyarakat. Beasiswa ini bertujuan untuk mendorong dan mendukung perkembangan bakat dan kemampuan siswa di berbagai bidang non-akademik."
        ]);

        Beasiswa::create([
            "title" => "Beasiswa Bantuan Keuangan",
            "description" => "Beasiswa ini diberikan kepada siswa yang memiliki kebutuhan finansial dan kesulitan dalam membayar biaya pendidikan. Beasiswa ini bertujuan untuk membantu siswa yang kurang mampu agar tetap dapat melanjutkan pendidikan dengan layak."
        ]);
    }
}
