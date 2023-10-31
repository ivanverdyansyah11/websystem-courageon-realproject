<?php

namespace Database\Seeders;

use App\Models\Prasarana;
use Illuminate\Database\Seeder;

class PrasaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prasarana::create([
            'image' => 'sarana-prasarana-1.jpg',
            'name' => 'Ruang Kelas',
            'description' => 'Sarana dan prasarana ruangan kelas merujuk pada fasilitas dan perlengkapan yang ada di dalam sebuah ruangan kelas yang dirancang untuk mendukung proses pembelajaran dan kenyamanan siswa dan guru. Berikut ini adalah deskripsi singkat mengenai beberapa sarana dan prasarana umum yang biasanya ada dalam ruangan kelas',
            'total' => 26,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-2.jpg',
            'name' => 'Ruang Guru',
            'description' => 'Ruang Guru yang modern dan dilengkapi dengan teknologi canggih menjadi tempat inspirasi bagi pendidik untuk mengembangkan metode pengajaran yang inovatif, memastikan pembelajaran berjalan efektif dan dinamis di Courageon School.',
            'total' => 3,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-3.jpg',
            'name' => 'Perpustakaan',
            'description' => 'Ruang Perpustakaan kami adalah tempat yang nyaman dan inspiratif bagi siswa untuk menjelajahi dunia pengetahuan melalui koleksi buku-buku bermutu tinggi serta fasilitas modern yang mendukung proses pembelajaran dan eksplorasi.',
            'total' => 2,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-4.jpg',
            'name' => 'Mushola',
            'description' => 'Tempat beribadah kami adalah ruang yang disediakan dengan penuh hormat, menciptakan lingkungan yang tenang dan khusyuk bagi siswa untuk melaksanakan praktik agama mereka dengan hikmat dan damai.',
            'total' => 1,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-5.jpg',
            'name' => 'Laboratorium Sains',
            'description' => 'Laboratorium Sains kami adalah tempat di mana siswa dapat menjalankan eksperimen ilmiah dengan peralatan canggih, memfasilitasi penemuan, eksplorasi, dan pemahaman mendalam tentang konsep-konsep ilmiah dalam lingkungan yang aman dan terarah.',
            'total' => 2,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-6.jpg',
            'name' => 'Kantin Sekolah',
            'description' => 'Kantin sekolah kami menyediakan pilihan makanan yang sehat dan lezat bagi siswa, menciptakan ruang yang nyaman untuk makan bersama dan berinteraksi, mendukung gaya hidup sehat dan sosial di antara komunitas sekolah kami.',
            'total' => 3,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-7.jpg',
            'name' => 'Lapangan Basket',
            'description' => 'Lapangan basket kami merupakan tempat yang dinamis dan energik, menginspirasi siswa untuk berolahraga, bekerja sama dalam tim, dan mengembangkan keterampilan atletik dalam suasana yang penuh semangat dan kompetitif.',
            'total' => 1,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-8.jpg',
            'name' => 'Kamar mandi Siswa',
            'description' => 'Kamar mandi siswa kami dirancang untuk memberikan kenyamanan dan kebersihan, menciptakan lingkungan yang mendukung kebutuhan praktis siswa dalam menjaga kebersihan dan kesehatan mereka selama jam sekolah.',
            'total' => 6,
        ]);
    }
}
