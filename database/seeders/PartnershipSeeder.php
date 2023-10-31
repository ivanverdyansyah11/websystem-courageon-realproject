<?php

namespace Database\Seeders;

use App\Models\Partnership;
use Illuminate\Database\Seeder;

class PartnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partnership::create([
            'logo' => 'kemitraan-1.png',
            'name' => 'Kemitraan 1',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-2.png',
            'name' => 'Kemitraan 2',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-3.png',
            'name' => 'Kemitraan 3',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-4.png',
            'name' => 'Kemitraan 4',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-5.png',
            'name' => 'Kemitraan 5',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-8.png',
            'name' => 'Kemitraan 8',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-7.png',
            'name' => 'Kemitraan 7',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-9.png',
            'name' => 'Kemitraan 9',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-10.png',
            'name' => 'Kemitraan 10',
        ]);
    }
}
