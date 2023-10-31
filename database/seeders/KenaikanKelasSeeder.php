<?php

namespace Database\Seeders;

use App\Models\KenaikanKelas;
use Illuminate\Database\Seeder;

class KenaikanKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KenaikanKelas::create([
            'jumlah_siswa_x' => '300',
            'jumlah_siswa_xi' => '400',
            'jumlah_siswa_xii' => '450',
            'gender' => 'L',
            'total_siswa' => '1150',
            'nilai_tertinggi' => '96',
            'nilai_terendah' => '80',
            'rata_nilai' => '86',
            'tahun_ajarans_id' => 4,
        ]);

        KenaikanKelas::create([
            'jumlah_siswa_x' => '400',
            'jumlah_siswa_xi' => '300',
            'jumlah_siswa_xii' => '450',
            'gender' => 'P',
            'total_siswa' => '1150',
            'nilai_tertinggi' => '96',
            'nilai_terendah' => '80',
            'rata_nilai' => '86',
            'tahun_ajarans_id' => 4,
        ]);

        KenaikanKelas::create([
            'jumlah_siswa_x' => '150',
            'jumlah_siswa_xi' => '250',
            'jumlah_siswa_xii' => '300',
            'gender' => 'L',
            'total_siswa' => '800',
            'nilai_tertinggi' => '92',
            'nilai_terendah' => '78',
            'rata_nilai' => '89',
            'tahun_ajarans_id' => 3,
        ]);

        KenaikanKelas::create([
            'jumlah_siswa_x' => '250',
            'jumlah_siswa_xi' => '150',
            'jumlah_siswa_xii' => '300',
            'gender' => 'P',
            'total_siswa' => '800',
            'nilai_tertinggi' => '92',
            'nilai_terendah' => '78',
            'rata_nilai' => '89',
            'tahun_ajarans_id' => 3,
        ]);

        KenaikanKelas::create([
            'jumlah_siswa_x' => '200',
            'jumlah_siswa_xi' => '300',
            'jumlah_siswa_xii' => '400',
            'gender' => 'L',
            'total_siswa' => '900',
            'nilai_tertinggi' => '90',
            'nilai_terendah' => '70',
            'rata_nilai' => '82',
            'tahun_ajarans_id' => 2,
        ]);

        KenaikanKelas::create([
            'jumlah_siswa_x' => '300',
            'jumlah_siswa_xi' => '200',
            'jumlah_siswa_xii' => '400',
            'gender' => 'P',
            'total_siswa' => '900',
            'nilai_tertinggi' => '90',
            'nilai_terendah' => '70',
            'rata_nilai' => '82',
            'tahun_ajarans_id' => 2,
        ]);

        KenaikanKelas::create([
            'jumlah_siswa_x' => '100',
            'jumlah_siswa_xi' => '200',
            'jumlah_siswa_xii' => '300',
            'gender' => 'L',
            'total_siswa' => '600',
            'nilai_tertinggi' => '90',
            'nilai_terendah' => '60',
            'rata_nilai' => '75',
            'tahun_ajarans_id' => 1,
        ]);

        KenaikanKelas::create([
            'jumlah_siswa_x' => '200',
            'jumlah_siswa_xi' => '100',
            'jumlah_siswa_xii' => '300',
            'gender' => 'P',
            'total_siswa' => '600',
            'nilai_tertinggi' => '90',
            'nilai_terendah' => '60',
            'rata_nilai' => '75',
            'tahun_ajarans_id' => 1,
        ]);
    }
}
