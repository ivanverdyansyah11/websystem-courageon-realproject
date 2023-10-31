<?php

namespace Database\Seeders;

use App\Models\PembinaanSiswa;
use Illuminate\Database\Seeder;

class PembinaanSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PembinaanSiswa::create([
            'dokumentasi' => 'pembinaan-siswa-1.jpg',
            'tanggal' => '2023/03/22',
            'masalah' => 'Belum melengkapi nilai beberapa mata pelajaran, menurut keterangan dari bibinya siswa tersebut tergolong siswa kurang mampu',
            'solusi' => 'Siswa bersangkutan tidak memiliki fasilitas HP untuk mengikuti pembelajaran secara daring, karena orangtuanya belum bisa membelikan (penghasilan tidak menentu). Siswa akan melengkapi nilai ke sekolah.',
            'students_id' => '1',
        ]);

        PembinaanSiswa::create([
            'dokumentasi' => 'pembinaan-siswa-2.jpg',
            'tanggal' => '2023/02/27',
            'masalah' => 'Siswa belum bisa menyelesaikan administrasi dan belum mendapatkan raport/hasil belajar semester genap 2020/2021',
            'solusi' => 'Siswa bersangkutan masih mengikuti pembelajaran di sekolah, orangtuanya tidak ada di rumah karena masih bekerja. Petugas BK diterima oleh bibi dari siswa bersangkutan.',
            'students_id' => '4',
        ]);

        PembinaanSiswa::create([
            'dokumentasi' => 'pembinaan-siswa-3.jpg',
            'tanggal' => '2023/02/02',
            'masalah' => 'Siswa bersangkutan hanya 2 (dua) kali mengikuti kegiatan Pembelajaran Tatap Muka tanpa keterangan yang jelas',
            'solusi' => 'Saat kunjungan, siswa bersangkutan berada di rumah. Menurut keterangan ibu siswa bersangkutan siswa bersangkutan dapat sakit 2 hari, telat bangun, hari itu tidak ke sekolah karena salah mengartikan pengumuman tentang kegiatan persembahyangan purnama yang dilaksanakan secara bergilir',
            'students_id' => '7',
        ]);

        PembinaanSiswa::create([
            'dokumentasi' => 'pembinaan-siswa-4.jpg',
            'tanggal' => '2023/01/22',
            'masalah' => 'Siswa bersangkutan tidak pernah mengikuti kegiatan pembelajaran selama PTM',
            'solusi' => 'Siswa bersangkutan sulit bersosialisasi dengan teman sebayanya, perilaku masih seperti anak kecil (berkebutuhan khusus). Guru BK menindaklanjuti dengan mengundang orangtua siswa untuk hadir ke sekolah pada tanggal 20 Januari 2022',
            'students_id' => '6',
        ]);
    }
}
