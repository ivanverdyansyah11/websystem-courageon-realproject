<?php

namespace Database\Seeders;

use App\Models\SectionGallery;
use Illuminate\Database\Seeder;

class SectionGallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionGallery::create([
            'title_section' => 'Galeri Dokumentasi Sekolah',
            'description' => 'Masuki dunia kecemerlangan seni di Galeri SMA Negeri 1 Selat. Lepaskan kreativitasmu dan saksikan ekspresi berani dari para siswa dan seniman berbakat kami.',
        ]);
    }
}
