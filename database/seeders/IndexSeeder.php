<?php

namespace Database\Seeders;

use App\Models\Index;
use Illuminate\Database\Seeder;

class IndexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Index::create([
            'name' => 'A',
        ]);

        Index::create([
            'name' => 'B',
        ]);
    }
}
