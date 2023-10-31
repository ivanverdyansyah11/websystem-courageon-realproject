<?php

namespace Database\Seeders;

use App\Models\HistoryKenaikanSiswa;
use Illuminate\Database\Seeder;

class HistoryKenaikanSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HistoryKenaikanSiswa::create([
            'students_id' => '7',
            'jurusans_id' => '2',
            'kelases_id' => '3',
            'indexes_id' => '2',
            'semesters_id' => '1',
        ]);

        HistoryKenaikanSiswa::create([
            'students_id' => '6',
            'jurusans_id' => '2',
            'kelases_id' => '3',
            'indexes_id' => '2',
            'semesters_id' => '1',
        ]);

        HistoryKenaikanSiswa::create([
            'students_id' => '6',
            'jurusans_id' => '2',
            'kelases_id' => '3',
            'indexes_id' => '2',
            'semesters_id' => '1',
        ]);
    }
}
