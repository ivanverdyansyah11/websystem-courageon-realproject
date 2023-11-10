<?php

namespace Database\Seeders;

use App\Models\Hymne;
use Illuminate\Database\Seeder;

class HymneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hymne::create([
            'banner' => 'banner-hymne.png',
            'title_section' => 'Hymne SMA Negeri 1 Selat',
            'hymne' => '<span style="white-space:pre-wrap">Disini Tempat Kami Berkreasi<br />Tuk’ Jadi Siswa Yang Kreatif<br />Bertaqwa Landasan Hidup Kami<br />Berprestasi Tujuan Kami SMANEBA<br />Tempat kami Belajar<br />Pencetak Insan Muda Bangsa<br />Berpribadi Luhur Dan Berakhlaq Mulia<br />Mutu Berdaya Saing Global<br />Ayo …… Ayo Semua<br />Torehkan Prestasi Tuk’ SMANEBA<br />Jadikan Dia Gudang Juara Skolah<br />Tercinta Kita Semua<br />Sayangi , Cintai, SMANEBA slalu dihati</span>',
            'creation' => 'Dr. Andi Pranoto, M.Pd.',
            'music_sound' => 'audio-hymne.mp3',
        ]);
    }
}
