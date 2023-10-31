<?php

namespace Database\Seeders;

use App\Models\Motto;
use Illuminate\Database\Seeder;

class MottoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Motto::create([
            'speaker' => 'Kepala Sekolah SMA Negeri 1 Selat',
            'motto' => 'Bangsa yang malas belajar tidak akan bisa berkembang!',
        ]);
    }
}
