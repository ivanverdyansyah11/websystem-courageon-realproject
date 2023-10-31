<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Komang Wirasatya',
            'image' => 'manajemen-1.jpg',
            'place_of_birth' => 'karangasem',
            'date_of_birth' => '1995-11-23',
            'highest_rank' => 'SMKN 2014',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'status' => 'pns',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);

        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Made Satyawan',
            'image' => 'manajemen-2.jpg',
            'place_of_birth' => 'bangli',
            'date_of_birth' => '1985-10-23',
            'highest_rank' => 'SMKN 2000',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'status' => 'pns',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);

        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Kadek Satria',
            'image' => 'manajemen-3.jpg',
            'place_of_birth' => 'Denpasar',
            'date_of_birth' => '1996-12-21',
            'highest_rank' => 'SMKN 2018',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'status' => 'pns',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);

        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Putu Adiawan',
            'image' => 'manajemen-4.jpg',
            'place_of_birth' => 'Denpasar',
            'date_of_birth' => '1990-10-11',
            'highest_rank' => 'SMKN 2011',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'status' => 'pns',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'Drs. I Wayan Cenik, M.Pd.',
            'image' => 'guru-1.jpg',
            'nip' => '19650428 199512 1 002',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'status' => 'pns',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'Ida Bagus Nyoman Gelgel, S.Pd.',
            'image' => 'guru-2.jpg',
            'nip' => '19670110 199203 1 012',
            'position' => 'Guru Ahli Madya',
            'gender' => 'P',
            'status' => 'pns',
            'course_id' => '2',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Wayan Suarsana, S.Pd.',
            'image' => 'guru-3.jpg',
            'nip' => '19680517 199512 1 003',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'status' => 'pns',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Wayan Mudayasa, S.Pd',
            'image' => 'guru-4.jpg',
            'nip' => '19700622 199512 1 001',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'status' => 'pns',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Nengah Sumerta, S.Sos.',
            'image' => 'pegawai-1.jpg',
            'rank' => 'Penata / IIIc',
            'position' => 'Analis SDM / KTU',
            'gender' => 'L',
            'status' => 'pns',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Gusti Agung Putra, S.E.',
            'image' => 'pegawai-2.jpg',
            'rank' => 'Penata Tk.1/ III/.d',
            'position' => 'Pengelola Data',
            'gender' => 'L',
            'status' => 'pns',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'Putu Ari Setiawati.,S.E.',
            'image' => 'pegawai-3.jpg',
            'rank' => 'Penata/ III/.c',
            'position' => 'Pengelola BMD',
            'gender' => 'P',
            'status' => 'pns',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Wayan Putu Adi Jenar, S.Pd',
            'image' => 'pegawai-4.jpg',
            'rank' => 'Penata Muda /III/a',
            'position' => 'Pengelola Keuangan',
            'gender' => 'L',
            'status' => 'pns',
        ]);
    }
}
