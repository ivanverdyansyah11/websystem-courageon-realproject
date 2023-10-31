<?php

namespace Database\Seeders;

use App\Models\SectionBerita;
use Illuminate\Database\Seeder;

class SectionBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionBerita::create([
            'title_header' => 'Berita Terbaru Mengenai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Berita',
        ]);
    }
}
