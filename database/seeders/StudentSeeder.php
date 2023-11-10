<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'nis' => '28819',
            'nisn' => '45645768',
            'nama_lengkap' => 'Aditya Prayatna',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Ahmad Yani, Denpasar, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28820',
            'nisn' => '0065471181',
            'nama_lengkap' => 'Aditya Aji Putra',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Ubud, Ubud, Gianyar, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28821',
            'nisn' => '797829542',
            'nama_lengkap' => 'I Kadek Agung Surya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/13',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Pantai Kuta, Kuta, Badung, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '2',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28822',
            'nisn' => '862701208',
            'nama_lengkap' => 'Putu Gede Arya Wijaya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/10',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Seminyak, Seminyak, Kuta, Badung, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28823',
            'nisn' => '768565785',
            'nama_lengkap' => 'Adiyasa Aiswarya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/08/03',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Tukad Citarum, No. 123, Denpasar, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28824',
            'nisn' => '342565757',
            'nama_lengkap' => 'Made Ayu Wijaya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/13',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Danau Poso, No. 456, Kuta, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '2',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28825',
            'nisn' => '45675758',
            'nama_lengkap' => 'Komang Sari',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/10',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Gunung Batur, No. 789, Ubud, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28826',
            'nisn' => '973844481',
            'nama_lengkap' => 'Ngurah Agung Putra Pradnya',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/01/29',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Danau Buyan, Sanur, Denpasar, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28827',
            'nisn' => '495433817',
            'nama_lengkap' => 'I Dewa Nyoman Tresna',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Desa Pecatu, Uluwatu, Badung, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28828',
            'nisn' => '495433817',
            'nama_lengkap' => 'I Dewa Nyoman Kusuma',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Desa Pecatu, Uluwatu, Badung, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28829',
            'nisn' => '456375676',
            'nama_lengkap' => 'Ni Komang Putri Wijaya',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/01/29',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Tukad Citarum No. 123, Denpasar, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28830',
            'nisn' => '457678689',
            'nama_lengkap' => 'Putu Ayu Saraswati',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Danau Poso No. 456, Kuta, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28831',
            'nisn' => '495433817',
            'nama_lengkap' => 'Ayu Dewi Lestari',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Gunung Batur No. 789, Ubud, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28832',
            'nisn' => '744424024',
            'nama_lengkap' => 'Ida Bagus Dewana',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/11/24',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Tegallalang, Tegallalang, Gianyar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28833',
            'nisn' => '565765786',
            'nama_lengkap' => 'Kadek Wira',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/05/12',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Bypass Ngurah Rai, Jimbaran, Badung, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28834',
            'nisn' => '234234546',
            'nama_lengkap' => 'Hary Suputra',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/09/18',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Pantai Sindhu, Sanur, Denpasar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28835',
            'nisn' => '546457567',
            'nama_lengkap' => 'Kadek Padma',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Hanoman, Ubud, Gianyar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28836',
            'nisn' => '87688687',
            'nama_lengkap' => 'Agni Widya',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Legian No. 543, Kuta, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28837',
            'nisn' => '345346543',
            'nama_lengkap' => 'Aiswarya Laksmi',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Ubud No. 210, Ubud, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '3',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28838',
            'nisn' => '089789456',
            'nama_lengkap' => 'I Kadek Agung Surya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Seminyak No. 987, Badung, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28839',
            'nisn' => '23435467',
            'nama_lengkap' => 'I Made Gede Wijaya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/13',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Teuku Umar No. 654, Denpasar, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '2',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28840',
            'nisn' => '67568776',
            'nama_lengkap' => 'I Gusti Ngurah Arya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/10',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Diponegoro No. 321, Denpasar, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28841',
            'nisn' => '34645768',
            'nama_lengkap' => 'Ni Komang Putri Wijaya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/08/03',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Seminyak No. 987, Badung, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28842',
            'nisn' => '576576867',
            'nama_lengkap' => 'Putu Ayu Saraswati',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/13',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Teuku Umar No. 654, Denpasar, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '2',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28843',
            'nisn' => '675678679',
            'nama_lengkap' => 'Ayu Dewi Lestari',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/10',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Diponegoro No. 321, Denpasar, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28844',
            'nisn' => '5467567868',
            'nama_lengkap' => 'Made Putra Wijaya',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/01/29',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Legian No. 543, Kuta, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28845',
            'nisn' => '78678797',
            'nama_lengkap' => 'Wayan Putra Wijaya',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Ubud No. 210, Ubud, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28846',
            'nisn' => '57657868',
            'nama_lengkap' => 'Nyoman Putra Wijaya',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28847',
            'nisn' => '56768679',
            'nama_lengkap' => 'Ni Kadek Putri Wijaya',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/01/29',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Legian No. 543, Kuta, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28848',
            'nisn' => '567657868',
            'nama_lengkap' => 'Putu Gede Saraswati',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Ubud No. 210, Ubud, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28849',
            'nisn' => '68678899',
            'nama_lengkap' => 'Komang Putri Sari',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28850',
            'nisn' => '457568679',
            'nama_lengkap' => 'Nyoman Putra Wijaya',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/11/24',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28851',
            'nisn' => '56756768',
            'nama_lengkap' => 'Gede Putra Wijaya',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/05/12',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Tukad Citarum No. 123, Denpasar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28852',
            'nisn' => '767856867',
            'nama_lengkap' => 'Agung Putra Wijaya',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/09/18',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Danau Poso No. 456, Kuta, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28853',
            'nisn' => '6575686789',
            'nama_lengkap' => 'Komang Putri Sari',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan By Pass Ngurah Rai No. 1098, Denpasar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28854',
            'nisn' => '67568679',
            'nama_lengkap' => 'Sari Ayu Wijaya',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Tukad Citarum No. 123, Denpasar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28855',
            'nisn' => '6578567867',
            'nama_lengkap' => 'Aiswarya Laksmi',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Danau Poso No. 456, Kuta, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '4',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28856',
            'nisn' => '54676879',
            'nama_lengkap' => 'I Gusti Ngurah Putra Wijaya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Kuta No. 123, Kuta, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28857',
            'nisn' => '56756867',
            'nama_lengkap' => 'I Made Gede Wijaya Kusuma',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/13',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Sanur No. 456, Sanur, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '2',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28858',
            'nisn' => '78678989',
            'nama_lengkap' => 'Gede Pasek Surya Darma',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/10',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Canggu No. 789, Canggu, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28859',
            'nisn' => '678567879',
            'nama_lengkap' => 'Ni Wayan Saraswati Dewi',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/08/03',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Legian No. 543, Kuta, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28860',
            'nisn' => '4564567568',
            'nama_lengkap' => 'Putu Dewi Lestari Sari',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/13',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Nusa Dua No. 789, Nusa Dua, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '2',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28861',
            'nisn' => '5676868',
            'nama_lengkap' => 'Ayu Maharani Widya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2008/05/10',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Jimbaran No. 1098, Jimbaran, Bali',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28862',
            'nisn' => '456756867',
            'nama_lengkap' => 'Agung Rai Kusuma',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/01/29',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Ubud No. 1098, Ubud, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28863',
            'nisn' => '56457687',
            'nama_lengkap' => 'Ngurah Putra Wijaya Dana',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Seminyak No. 987, Badung, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28864',
            'nisn' => '547687978',
            'nama_lengkap' => 'Surya Darma Putra',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Denpasar No. 654, Denpasar, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28865',
            'nisn' => '3453768679',
            'nama_lengkap' => 'Komang Sari Ayu',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/01/29',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Uluwatu No. 987, Uluwatu, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28866',
            'nisn' => '465668678',
            'nama_lengkap' => 'Sari Dewi Saraswati',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Gianyar No. 654, Gianyar, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28867',
            'nisn' => '34547678',
            'nama_lengkap' => 'Aiswarya Laksmi Wijaya',
            'tahun_masuk' => '2022/2023',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/10/08',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Jalan Raya Klungkung No. 321, Klungkung, Bali',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28868',
            'nisn' => '456457568',
            'nama_lengkap' => 'Ratih Puspa Dewi',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2007/11/24',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Karangasem No. 210, Karangasem, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28869',
            'nisn' => '34534646',
            'nama_lengkap' => 'Wijaya Kusuma Putra',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/05/12',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Singaraja No. 321, Singaraja, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28870',
            'nisn' => '54643657',
            'nama_lengkap' => 'Adi Sastra Wijaya',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/09/18',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Tabanan No. 210, Tabanan, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28871',
            'nisn' => '46456578',
            'nama_lengkap' => 'Widya Saraswati Putri',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Buleleng No. 1098, Buleleng, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28872',
            'nisn' => '34534567568',
            'nama_lengkap' => 'Ni Wayan Sar',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Jalan Raya Ubud, Gianyar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);

        Student::create([
            'nis' => '28873',
            'nisn' => '45645657',
            'nama_lengkap' => 'Ida Ayu Dewi',
            'tahun_masuk' => '2021/2022',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2006/02/26',
            'jenis_kelamin' => 'P',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Puri Dewa, Gianyar, Bali',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '5',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
    }
}