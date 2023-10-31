<?php

namespace Database\Seeders;

use App\Models\KategoriPrestasi;
use Illuminate\Database\Seeder;

class KategoriPrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriPrestasi::create([
            'nama' => 'Akademik'
        ]);

        KategoriPrestasi::create([
            'nama' => 'Non Akademik'
        ]);
    }
}
