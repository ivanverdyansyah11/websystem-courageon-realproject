<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Journal::create([
            'thumbnail' => 'journal-1.jpg',
            'title' => 'Siswa Meraih Prestasi dalam Kompetisi Matematika Tingkat Kota',
            'description' => 'Siswa kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
            'document_pdf' => 'journal-pdf-1.pdf',
            'author' => 'I Made Sudiana',
            'created_date' => '2023/06/28',
        ]);

        Journal::create([
            'thumbnail' => 'journal-2.jpg',
            'title' => 'Pengaruh Teknologi dalam Dunia Pendidikan, Tantangan di Sekolah',
            'description' => 'Pengaruh teknologi dalam dunia pendidikan semakin mengubah cara belajar dan mengajar, membuka peluang baru untuk interaktif dan kolaboratif, namun juga menghadirkan tantangan adaptasi bagi sekolah dalam mengintegrasikan teknologi secara efektif ke dalam kurikulum.',
            'document_pdf' => 'journal-pdf-2.pdf',
            'author' => 'Ni Kadek Putri',
            'created_date' => '2023/06/23',
        ]);

        Journal::create([
            'thumbnail' => 'journal-3.jpg',
            'title' => 'Tips untuk Membangun Kemitraan dengan Sekolah',
            'description' => 'Terlibatlah secara aktif dalam kegiatan sekolah dan komunikasi yang terbuka dengan staf serta orang tua siswa adalah kunci dalam membangun kemitraan yang kuat untuk mendukung perkembangan pendidikan.',
            'document_pdf' => 'journal-pdf-3.pdf',
            'author' => 'Ni Kadek Putri',
            'created_date' => '2023/06/19',
        ]);

        Journal::create([
            'thumbnail' => 'journal-4.jpg',
            'title' => 'Menelusuri Jejak Sejarah Sekolah: Kilas Balik 50 Tahun Perjalanan Pendidikan',
            'description' => 'Dengan bangga kami merayakan 50 tahun perjalanan pendidikan yang penuh prestasi, sambil merenung pada jejak sejarah sekolah yang telah membentuk visi dan misi kami saat ini.',
            'document_pdf' => 'journal-pdf-4.pdf',
            'author' => 'I Made Sudiana',
            'created_date' => '2023/06/15',
        ]);

        Journal::create([
            'thumbnail' => 'journal-5.jpg',
            'title' => 'Belajar dari Pengalaman, Siswa Berbagi Cerita tentang Ujian Nasional',
            'description' => 'Melalui berbagi cerita tentang pengalaman ujian nasional, siswa-siswa kami menunjukkan ketekunan dan semangat dalam menghadapi tantangan akademik yang menginspirasi sesama rekan mereka.',
            'document_pdf' => 'journal-pdf-5.pdf',
            'author' => 'Wayan Surya',
            'created_date' => '2023/06/12',
        ]);

        Journal::create([
            'thumbnail' => 'journal-6.jpg',
            'title' => 'Pengalaman Program Pertukaran Pelajar di Courageon School',
            'description' => 'Program pertukaran pelajar di Courageon School memberikan kesempatan tak ternilai bagi siswa-siswa kami untuk memperluas wawasan budaya, memperdalam pengetahuan, dan mengembangkan hubungan internasional yang langgeng.',
            'document_pdf' => 'journal-pdf-6.pdf',
            'author' => 'Wayan Surya',
            'created_date' => '2023/06/09',
        ]);

        Journal::create([
            'thumbnail' => 'journal-7.jpg',
            'title' => 'Menjaga Kesehatan Mental di Tengah Tuntutan Sekolah',
            'description' => 'Di tengah tuntutan sekolah yang sering kali menuntut, penting bagi siswa untuk menjaga kesehatan mental mereka melalui istirahat yang cukup dan dukungan emosional yang memadai.',
            'document_pdf' => 'journal-pdf-7.pdf',
            'author' => 'Wayan Surya',
            'created_date' => '2023/06/03',
        ]);

        Journal::create([
            'thumbnail' => 'journal-8.jpg',
            'title' => 'Mengenal Ekstrakurikuler Unggulan di Sekolah, Meraih Potensi Terbaik Siswa!',
            'description' => 'Dengan ragam ekstrakurikuler unggulan yang kami tawarkan, siswa kami memiliki kesempatan untuk mengembangkan bakat dan minat mereka, serta meraih potensi terbaik dalam berbagai bidang, menjadikan pengalaman sekolah mereka lebih kaya dan berarti.',
            'document_pdf' => 'journal-pdf-8.pdf',
            'author' => 'Wayan Surya',
            'created_date' => '2023/06/03',
        ]);
    }
}
