<?php

namespace Database\Seeders;

use App\Models\SectionManagement;
use Illuminate\Database\Seeder;

class SectionManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionManagement::create([
            'title_section' => 'Data Manajemen SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);
    }
}
