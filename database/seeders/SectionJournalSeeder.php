<?php

namespace Database\Seeders;

use App\Models\SectionJournal;
use Illuminate\Database\Seeder;

class SectionJournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionJournal::create([
            'title_header' => 'Majalah Terbaru Mengenai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Majalah',
        ]);
    }
}
