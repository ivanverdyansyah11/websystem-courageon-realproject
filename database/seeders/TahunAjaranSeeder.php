<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TahunAjaran::create([
            'tahun' => '2019/2020',
        ]);

        TahunAjaran::create([
            'tahun' => '2020/2021',
        ]);

        TahunAjaran::create([
            'tahun' => '2021/2022',
        ]);

        TahunAjaran::create([
            'tahun' => '2022/2023',
        ]);

        TahunAjaran::create([
            'tahun' => '2023/2024',
        ]);
    }
}
