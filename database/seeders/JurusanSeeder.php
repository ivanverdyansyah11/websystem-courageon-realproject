<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::create([
            'name' => 'Ilmu Pengetahuan Alam',
            'code' => 'IPA',
        ]);

        Jurusan::create([
            'name' => 'Ilmu Pengetahuan Sosial',
            'code' => 'IPS',
        ]);
    }
}
