<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Berita::create([
            'banner' => 'berita-1.jpg',
            'title' => 'Berita Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana',
            'created_date' => '2023/06/03',
            'description' => 'Siswa kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-2.jpg',
            'title' => 'Berita 2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 2',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 2 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-3.jpg',
            'title' => 'Berita 3 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 3',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 3 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-4.jpg',
            'title' => 'Berita 4 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 4',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 4 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-5.jpg',
            'title' => 'Berita 5 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 5',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 5 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);
    }
}
