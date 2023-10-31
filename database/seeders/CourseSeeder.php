<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'name' => 'Matematika',
            'hours_per_week' => '12',
        ]);

        Course::create([
            'name' => 'IPA',
            'hours_per_week' => '8',
        ]);

        Course::create([
            'name' => 'PPKN',
            'hours_per_week' => '10',
        ]);

        Course::create([
            'name' => 'Bahasa Indonesia',
            'hours_per_week' => '11',
        ]);

        Course::create([
            'name' => 'Bahasa Inggris',
            'hours_per_week' => '9',
        ]);
    }
}
