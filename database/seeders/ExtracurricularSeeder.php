<?php

namespace Database\Seeders;

use App\Models\Extracurricular;
use Illuminate\Database\Seeder;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Extracurricular::create([
            'icon' => 'ekstrakurikuler-1.png',
            'banner' => 'ekstrakurikuler-banner-1.jpg',
            'data_siswa' => 'data-siswa-1.pdf',
            'name' => 'Sepak Bola',
            'title' => 'Berkembang Bersama Bola : Membangun Keterampilan Sepak Bola Unggul & Jiwa Kolaboratif Melalui Ekstrakurikuler Sepak Bola',
            'description' => 'Ekstrakulikuler Sepak Bola adalah salah satu kegiatan di luar kurikulum yang ditawarkan oleh sekolah atau lembaga pendidikan untuk memberikan kesempatan kepada siswa untuk berpartisipasi dalam olahraga sepak bola. Kegiatan ini bertujuan untuk mengembangkan keterampilan sepak bola, mempromosikan kesehatan dan kebugaran, serta membentuk karakter positif pada siswa.',
            'schedule_day' => 'Senin',
            'start_time' => '13:00',
            'end_time' => '16:00',
            'coach' => 'Komang Budi Setiawan',
            'number_phone_coach' => '08236756854',
            'link_register' => 'https://docs.google.com/forms/u/0/',
        ]);

        Extracurricular::create([
            'icon' => 'ekstrakurikuler-2.png',
            'banner' => 'ekstrakurikuler-banner-2.jpg',
            'data_siswa' => 'data-siswa-2.pdf',
            'name' => 'Basket',
            'title' => 'Tumbuhkan Bakat, Kembangkan Keterampilan Bola Basket, dan Fostering Kolaborasi Melalui Ekstrakurikuler Bola Basket yang Dinamis',
            'description' => 'Bola basket adalah salah satu ekstrakulikuler yang menarik dan populer di kalangan siswa sekolah. Ekstrakulikuler bola basket memberikan kesempatan kepada siswa untuk belajar dan berpartisipasi dalam olahraga tim yang penuh aksi dan dinamis ini. Kegiatan ini biasanya diadakan di sekolah-sekolah sebagai sarana pengembangan bakat, keterampilan, dan semangat kompetitif.',
            'schedule_day' => 'Sabtu',
            'start_time' => '17:00',
            'end_time' => '19:00',
            'coach' => 'Dewi Sekarini',
            'number_phone_coach' => '08126456756',
            'link_register' => 'https://docs.google.com/forms/u/0/',
        ]);

        Extracurricular::create([
            'icon' => 'ekstrakurikuler-3.png',
            'banner' => 'ekstrakurikuler-banner-3.jpg',
            'data_siswa' => 'data-siswa-3.pdf',
            'name' => 'Paduan Suara',
            'title' => 'Ekstrakulikuler Paduan Suara sebagai Wadah Kreativitas Musikal, Kolaborasi Tim, dan Pertumbuhan Pribadi',
            'description' => 'Paduan Suara adalah salah satu ekstrakulikuler yang menawarkan pengalaman musikal yang memuaskan bagi para siswa di sekolah. Kegiatan ini melibatkan kumpulan siswa yang memiliki minat dan bakat dalam bernyanyi, dan mereka bekerja bersama untuk menciptakan harmoni vokal yang indah. Ekstrakulikuler Paduan Suara mengajarkan nilai-nilai kerjasama, disiplin, kesabaran, dan apresiasi seni musik kepada pesertanya.',
            'schedule_day' => 'Jumat',
            'start_time' => '10:00',
            'end_time' => '112:00',
            'coach' => 'Manorez Anthonio',
            'number_phone_coach' => '08123786754',
            'link_register' => 'https://docs.google.com/forms/u/0/',
        ]);

        Extracurricular::create([
            'icon' => 'ekstrakurikuler-4.png',
            'banner' => 'ekstrakurikuler-banner-4.jpg',
            'data_siswa' => 'data-siswa-4.pdf',
            'name' => 'Teater & Drama',
            'title' => 'Melalui Panggung Emosi: Menjelajahi Kreativitas, Ekspresi Diri, dan Kolaborasi dalam Ekstrakurikuler Teater & Drama',
            'description' => 'Ekstrakurikuler Teater & Drama "Panggung Emosi" adalah wadah kreatif bagi siswa-siswi untuk mengeksplorasi seni peran, ekspresi diri, dan pengembangan kepribadian melalui dunia panggung. Dalam ekstrakurikuler ini, siswa akan diajak untuk merasakan pengalaman bermain peran, memahami karakter, dan membangun suasana berbagai cerita. Melalui beragam kegiatan seperti latihan improvisasi, pembacaan skenario, dan latihan fisik, siswa akan mengembangkan kemampuan berbicara di depan umum, keterampilan sosial, serta rasa percaya diri yang mendalam.',
            'schedule_day' => 'Rabu',
            'start_time' => '16:00',
            'end_time' => '18:00',
            'coach' => 'Daniel Marcella',
            'number_phone_coach' => '08345676456',
            'link_register' => 'https://docs.google.com/forms/u/0/',
        ]);
    }
}
