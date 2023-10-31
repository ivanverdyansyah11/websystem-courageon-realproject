<?php

namespace Database\Seeders;

use App\Models\HeaderStudent;
use Illuminate\Database\Seeder;

class HeaderStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderStudent::create([
            'banner' => 'banner-header.png',
            'title_header' => 'Kesiswaan Membentuk Karakter & Kreativitas di Sekolah',
            'description' => 'Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.',
            'button' => 'Lihat Selengkapnya',
        ]);

        HeaderStudent::create([
            'banner' => 'banner-header-2.png',
            'title_header' => 'Kesiswaan Membentuk Karakter & Kreativitas di Sekolah 2',
            'description' => 'Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.',
            'button' => 'Lihat Selengkapnya 2',
        ]);
    }
}
