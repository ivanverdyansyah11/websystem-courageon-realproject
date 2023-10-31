<?php

namespace Database\Seeders;

use App\Models\Alumni;
use Illuminate\Database\Seeder;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumni::create([
            'tahun_ajaran_lulus' => 4,
            'profile' => 'alumni-1.jpg',
            'pekerjaan' => 'Part Of Carnival Cruise Line (CCL) as a Commis',
            'testimoni' => 'Pendidikan di SMA Negeri 1 Selat telah membantu saya memahami pentingnya pendekatan ilmiah dalam memecahkan masalah. Kini, saya bekerja sebagai peneliti di sebuah lembaga riset internasional dan berkontribusi dalam mengembangkan solusi untuk isu-isu lingkungan.',
            'students_id' => '8',
        ]);

        Alumni::create([
            'tahun_ajaran_lulus' => 4,
            'profile' => 'alumni-2.jpg',
            'pekerjaan' => 'Insinyur di PT Teknologi Maju Indonesia',
            'testimoni' => 'SMAN 1 Selat adalah tempat di mana saya menemukan minat dan passion saya dalam seni dan desain. Terima kasih atas dukungan para guru dan teman-teman yang telah membantu mengembangkan bakat saya. Saat ini, saya telah mendirikan perusahaan desain grafis.',
            'students_id' => '7',
        ]);

        Alumni::create([
            'tahun_ajaran_lulus' => 4,
            'profile' => 'alumni-3.jpg',
            'pekerjaan' => 'Pendiri dan Desainer Grafis di Maya Design Studio',
            'testimoni' => 'Halo teman-teman alumni sekolah! Saya sangat senang ingin berbagi kabar baik. Saat ini, saya bekerja sebagai Komisaris di Carnival Cruise Line. Selama perjalanan karier ini, banyak pelajaran berharga yang saya pelajari. Bersama-sama, mari kita berikan kontribusi positif bagi masa depan sekolah kita.',
            'students_id' => '6',
        ]);
    }
}
