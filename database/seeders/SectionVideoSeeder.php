<?php

namespace Database\Seeders;

use App\Models\SectionVideo;
use Illuminate\Database\Seeder;

class SectionVideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionVideo::create([
            'title' => 'Mempersembahkan tarian kebesaran SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Video',
        ]);
    }
}
