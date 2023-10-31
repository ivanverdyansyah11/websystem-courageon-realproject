<?php

namespace Database\Seeders;

use App\Models\Mars;
use Illuminate\Database\Seeder;

class MarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mars::create([
            'banner' => 'banner-mars.png',
            'title_section' => 'Mars SMA Negeri 1 Selat',
            'mars' => '<span style="white-space:pre-wrap">Disini Tempat Kami Berkreasi<br />Tuk’ Jadi Siswa Yang Kreatif<br />Bertaqwa Landasan Hidup Kami<br />Berprestasi Tujuan Kami SMANEBA<br />Tempat kami Belajar<br />Pencetak Insan Muda Bangsa<br />Berpribadi Luhur Dan Berakhlaq Mulia<br />Mutu Berdaya Saing Global<br />Ayo …… Ayo Semua<br />Torehkan Prestasi Tuk’ SMANEBA<br />Jadikan Dia Gudang Juara Skolah<br />Tercinta Kita Semua<br />Sayangi , Cintai, SMANEBA slalu dihati</span>',
            'creation' => 'Dr. Andi Pranoto, M.Pd.',
        ]);
    }
}
