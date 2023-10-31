<?php

namespace Database\Seeders;

use App\Models\SectionProgram;
use Illuminate\Database\Seeder;

class SectionProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionProgram::create([
            'title_section' => 'Program Akademik Sekolah',
        ]);
    }
}
