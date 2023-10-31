<?php

namespace Database\Seeders;

use App\Models\PelayananKarir;
use Illuminate\Database\Seeder;

class PelayananKarirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PelayananKarir::create([
            'dokumentasi' => 'pelayanan-karir-1.jpg',
            'tanggal' => '2023/03/25',
            'judul' => 'Kurangnya Akses dan Informasi yang Komprehensif tentang Berbagai Pilihan Karir, Menghambat Kemampuan Siswa untuk Mengambil Keputusan Karir yang Terinformasi',
            'masalah' => 'Banyak siswa menghadapi kesulitan dalam merencanakan masa depan karir mereka karena kurangnya akses yang memadai terhadap informasi yang komprehensif tentang berbagai pilihan karir yang tersedia. Ketidakjelasan mengenai jalur pendidikan yang diperlukan, persyaratan pekerjaan, dan perkembangan industri dapat menyebabkan ketidakpastian dalam mengambil keputusan karir yang tepat.',
            'solusi' => 'Implementasi Pusat Sumber Informasi Karir yang Terintegrasi Deskripsi Solusi: Untuk mengatasi tantangan ini, sekolah perlu mendirikan dan mengelola Pusat Sumber Informasi Karir yang komprehensif. Pusat ini akan menyediakan akses kepada siswa terhadap database informasi tentang berbagai industri, profesi, jalur pendidikan, peluang pekerjaan, serta tren pasar kerja terbaru. Selain itu, melalui kerja sama dengan para profesional industri, penyelenggaraan seminar karir, dan sesi tanya jawab, siswa akan mendapatkan wawasan yang lebih baik tentang dunia kerja dan langkah-langkah yang perlu mereka ambil untuk mencapai tujuan karir mereka.',
            'students_id' => '4',
        ]);

        PelayananKarir::create([
            'dokumentasi' => 'pelayanan-karir-2.jpg',
            'tanggal' => '2023/02/12',
            'judul' => 'Kesenjangan dalam Pengembangan Keterampilan Lunak dan Teknis yang Membatasi Persiapan Siswa untuk Sukses dalam Lingkungan Kerja yang Beragam',
            'masalah' => 'Siswa sering kali lulus dengan pengetahuan teknis yang kuat, tetapi kekurangan keterampilan lunak yang penting seperti komunikasi efektif, kerja tim, kepemimpinan, dan kreativitas. Kesenjangan ini dapat menghambat kemampuan siswa untuk beradaptasi dan berhasil dalam lingkungan kerja yang semakin dinamis dan beragam.',
            'solusi' => 'Mengatasi kesenjangan keterampilan lunak dan teknis memerlukan pendekatan pendidikan holistik. Sekolah dapat merancang kurikulum yang memadukan pembelajaran teknis dengan proyek kolaboratif, simulasi situasi nyata, dan tantangan interdisipliner yang mendorong pengembangan keterampilan lunak. Selain itu, program ekstrakurikuler yang fokus pada debat, teater, kegiatan sosial, dan pengembangan kepemimpinan juga dapat membantu siswa mengasah keterampilan sosial mereka.',
            'students_id' => '6',
        ]);

        PelayananKarir::create([
            'dokumentasi' => 'pelayanan-karir-3.jpg',
            'tanggal' => '2023/01/08',
            'judul' => 'Rendahnya Klarifikasi Rencana Karir dan Panduan yang Menyebabkan Kecemasan dan Tidak Pastinya Masa Depan Profesional Siswa',
            'masalah' => 'Banyak siswa merasa cemas dan tidak yakin tentang langkah-langkah yang harus mereka ambil untuk mencapai tujuan karir mereka. Ketidakjelasan mengenai pilihan pendidikan lanjutan, peluang pekerjaan, serta perkembangan pribadi yang diperlukan dapat menyebabkan kebingungan dan kekhawatiran yang berkelanjutan.',
            'solusi' => 'Sekolah dapat memperkenalkan program pembimbingan karir yang personal dan terstruktur. Setiap siswa akan memiliki guru pembimbing karir yang akan membantu mereka melakukan penilaian minat, mengidentifikasi kekuatan dan kelemahan, serta merencanakan langkah-langkah konkret dalam mencapai tujuan karir mereka. Dengan dukungan ini, siswa akan mendapatkan panduan yang lebih jelas dan berfokus dalam merencanakan masa depan profesional mereka.',
            'students_id' => '2',
        ]);

        PelayananKarir::create([
            'dokumentasi' => 'pelayanan-karir-4.jpg',
            'tanggal' => '2023/01/02',
            'judul' => 'Kekurangan Pengalaman Praktis yang Menghambat Kemampuan Siswa untuk Menghubungkan Teori dengan Dunia Nyata',
            'masalah' => 'Siswa sering kesulitan memahami bagaimana teori yang dipelajari di sekolah dapat diterapkan dalam situasi nyata. Kurangnya peluang magang, kunjungan industri, atau keterlibatan praktis dapat menghambat perkembangan pemahaman praktis siswa tentang bagaimana ilmu yang mereka pelajari dapat diaplikasikan dalam dunia pekerjaan.',
            'solusi' => 'Sekolah dapat bekerja sama dengan perusahaan lokal dan industri terkait untuk menyelenggarakan program magang yang relevan dengan kurikulum. Selain itu, penggunaan simulasi dan proyek nyata yang mensimulasikan situasi di dunia pekerjaan juga dapat membantu siswa mengalami pengalaman praktis. Melalui kunjungan industri, seminar tamu, dan partisipasi dalam proyek kolaboratif dengan profesional industri, siswa dapat menghubungkan teori dengan praktik dan membangun pemahaman yang lebih mendalam tentang realitas dunia kerja.',
            'students_id' => '5',
        ]);
    }
}
