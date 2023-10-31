<?php

namespace Database\Seeders;

use App\Models\Prestasi;
use Illuminate\Database\Seeder;

class PrestasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestasi::create([
            'dokumentasi' => 'prestasi-1.jpg',
            'status' => 'Siswa',
            'tanggal' => '2023/06/02',
            'nama_kegiatan' => 'Olimpiade Fisika',
            'penyelenggara' => 'Gedung Serbaguna Kota, Jakarta',
            'nama_peserta' => 'Putu Aditya Prayatna',
            'hasil' => 'Juara 1',
            'tingkat' => 'Provinsi',
            'pembina' => 'Putra Rizky',
            'deskripsi' => 'Dengan dedikasi dan pemahaman yang mendalam terhadap konsep-konsep fisika, siswa kami berhasil meraih prestasi sebagai juara pertama dalam Olimpiade Fisika, menegaskan keunggulan mereka dalam bidang ilmu pengetahuan alam ini.',
            'kategori_prestasis_id' => '1',
        ]);

        Prestasi::create([
            'dokumentasi' => 'prestasi-2.jpg',
            'status' => 'Siswa',
            'tanggal' => '2023/05/23',
            'nama_kegiatan' => 'Olimpiade Sains',
            'penyelenggara' => 'Universitas Gadjah Mada, Yogyakarta',
            'nama_peserta' => 'Ayu Puradewi Putri',
            'hasil' => 'Juara 2',
            'tingkat' => 'Provinsi',
            'pembina' => 'Siti Rahma',
            'deskripsi' => 'Prestasi luar biasa siswa kami dalam Olimpiade Sains terbukti dengan peraihan juara kedua, memperlihatkan dedikasi mereka terhadap pembelajaran ilmiah dan semangat kompetitif yang kuat.',
            'kategori_prestasis_id' => '1',
        ]);

        Prestasi::create([
            'dokumentasi' => 'prestasi-3.jpg',
            'status' => 'Siswa',
            'tanggal' => '2023/05/12',
            'nama_kegiatan' => 'Lomba Renang',
            'penyelenggara' => 'Balai Kartini, Jakarta',
            'nama_peserta' => 'Putu Aditya Prayatna',
            'hasil' => 'Juara 1',
            'tingkat' => 'Kecamatan',
            'pembina' => 'Jessi Nanda Putra',
            'deskripsi' => 'Dalam lomba renang tingkat sekolah, siswa-siswa kami memamerkan keterampilan renang yang handal dan semangat sportivitas, menciptakan momen yang penuh kegembiraan dan kebersamaan di dalam air.',
            'kategori_prestasis_id' => '2',
        ]);

        Prestasi::create([
            'dokumentasi' => 'prestasi-4.jpg',
            'status' => 'Siswa',
            'tanggal' => '2023/04/27',
            'nama_kegiatan' => 'Olimpiade Biologi',
            'penyelenggara' => 'Hotel Sultan, Surabaya',
            'nama_peserta' => 'Alicia Destina Ayu',
            'hasil' => 'Juara 2',
            'tingkat' => 'Provinsi',
            'pembina' => 'Putra Rizky',
            'deskripsi' => 'Dalam Olimpiade Biologi, siswa-siswa kami menunjukkan pemahaman mendalam terhadap ilmu biologi dan kemampuan analisis yang unggul, meraih prestasi yang gemilang dalam ajang kompetisi ilmiah tersebut.',
            'kategori_prestasis_id' => '1',
        ]);
    }
}
