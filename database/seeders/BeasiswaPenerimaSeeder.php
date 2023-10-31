<?php

namespace Database\Seeders;

use App\Models\BeasiswaPenerima;
use Illuminate\Database\Seeder;

class BeasiswaPenerimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BeasiswaPenerima::create([
            'tahun' => '2022/2023',
            'digunakan_untuk' => 'Sebagai pengakuan atas prestasi akademik yang luar biasa',
            'jumlah_beasiswa' => '500000',
            'students_id' => '5',
            'beasiswas_id' => '1',
        ]);

        BeasiswaPenerima::create([
            'tahun' => '2022/2023',
            'digunakan_untuk' => 'mendorong mereka untuk terus berkinerja baik dalam pendidikan',
            'jumlah_beasiswa' => '1000000',
            'students_id' => '4',
            'beasiswas_id' => '2',
        ]);

        BeasiswaPenerima::create([
            'tahun' => '2022/2023',
            'digunakan_untuk' => 'meringankan beban finansial keluarga dan membantu memfasilitasi akses pendidikan yang berkualitas',
            'jumlah_beasiswa' => '750000',
            'students_id' => '3',
            'beasiswas_id' => '3',
        ]);
    }
}
