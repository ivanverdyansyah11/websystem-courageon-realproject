<?php

namespace Database\Seeders;

use App\Models\VisionMission;
use Illuminate\Database\Seeder;

class VisionMissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VisionMission::create([
            'banner' => 'banner-visi-misi.jpg',
            'title_vision' => 'Visi sekolah',
            'description_vision' => 'Menjadi lembaga pendidikan yang unggul dan inovatif dalam membentuk pemimpin masa depan yang berintegritas dan berbudaya global.',
            'title_mission' => 'Misi sekolah',
            'description_mission' => 'Misi Courageon School adalah menyediakan pendidikan yang berkualitas tinggi dengan mengadopsi kurikulum inovatif dan metode pembelajaran berpusat pada siswa. Kami berusaha membimbing siswa untuk mengembangkan keberanian dan kreativitas mereka melalui berbagai program ekstrakurikuler yang beragam. Melalui nilai-nilai keberanian, inovasi, dan tanggung jawab, kami berkomitmen untuk membentuk siswa yang memiliki karakter unggul, siap menghadapi tantangan masa depan, dan berkontribusi positif bagi masyarakat dan dunia.',
        ]);
    }
}
