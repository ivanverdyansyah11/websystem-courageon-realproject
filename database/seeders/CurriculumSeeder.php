<?php

namespace Database\Seeders;

use App\Models\Curriculum;
use Illuminate\Database\Seeder;

class CurriculumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Curriculum::create([
            'banner' => 'banner-kurikulum.png',
            'title_section' => 'Langkah Kami Menghadapi Pendidikan Abad Ke-21',
            'description' => 'Kurikulum di sekolah merupakan inti dari pendidikan formal, dan terus mengalami transformasi untuk menghadapi perubahan zaman dan tantangan abad ke-21. Deskripsi ini akan mengeksplorasi perubahan signifikan dalam kurikulum yang dilakukan oleh institusi pendidikan guna mempersiapkan generasi muda untuk menghadapi dunia yang cepat berubah dan kompleks. Fokus akan diberikan pada pengintegrasian teknologi dalam pembelajaran, pendekatan kreatif dalam mengajar, inklusi pendidikan bagi semua, serta upaya untuk mengembangkan keterampilan abad ke-21 seperti kritis berpikir, kerjasama, keterampilan digital, dan pemecahan masalah.',
        ]);
    }
}
