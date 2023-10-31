<?php

namespace Database\Seeders;

use App\Models\HistoryHome;
use Illuminate\Database\Seeder;

class HistoryHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HistoryHome::create([
            'banner' => 'banner-sejarah.jpg',
            'title_history' => 'Sejarah Singkat Tentang SMA Negeri 1 Selat',
            'description' => 'SMA Negeri 1 Selat didirikan pada tahun 1995 oleh sekelompok pendidik visioner yang percaya bahwa pendidikan sejati tidak hanya tentang akademik, tetapi juga tentang memupuk keberanian dan semangat dalam setiap siswa. Berlokasi di sebuah desa kecil yang indah, sekolah ini berkomitmen untuk menciptakan lingkungan pembelajaran yang inklusif dan inspiratif.',
            'button' => 'Lihat Profile',
        ]);
    }
}
