<?php

namespace Database\Seeders;

use App\Models\Alumni;
use App\Models\Auth;
use App\Models\Beasiswa;
use App\Models\BeasiswaPenerima;
use App\Models\Berita;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Denah;
use App\Models\Employee;
use App\Models\Extracurricular;
use App\Models\Gallery;
use App\Models\HeaderAcademic;
use App\Models\HeaderHome;
use App\Models\HeaderHumas;
use App\Models\HeaderProfile;
use App\Models\HeaderSaranaPrasarana;
use App\Models\HeaderStudent;
use App\Models\HistoryHome;
use App\Models\HistoryKenaikanSiswa;
use App\Models\Hymne;
use App\Models\Index;
use App\Models\Journal;
use App\Models\Jurusan;
use App\Models\KategoriPrestasi;
use App\Models\Kelas;
use App\Models\KenaikanKelas;
use App\Models\Logo;
use App\Models\Mars;
use App\Models\Motto;
use App\Models\Navigasi;
use App\Models\OpeningHome;
use App\Models\Partnership;
use App\Models\PelayananKarir;
use App\Models\PembinaanSiswa;
use App\Models\Prasarana;
use App\Models\Prestasi;
use App\Models\Program;
use App\Models\Project;
use App\Models\RemarkHome;
use App\Models\RoleEmployee;
use App\Models\SectionAchievement;
use App\Models\SectionAlumni;
use App\Models\SectionBeasiswa;
use App\Models\SectionBerita;
use App\Models\SectionContact;
use App\Models\SectionDenah;
use App\Models\SectionExtracurricular;
use App\Models\SectionGallery;
use App\Models\SectionGraduation;
use App\Models\SectionJournal;
use App\Models\SectionKemitraan;
use App\Models\SectionManagement;
use App\Models\SectionPrasarana;
use App\Models\SectionProgram;
use App\Models\SectionProyek;
use App\Models\SectionService;
use App\Models\SectionStaff;
use App\Models\SectionStudent;
use App\Models\SectionTeacher;
use App\Models\SectionVideo;
use App\Models\Semester;
use App\Models\Student;
use App\Models\TahunAjaran;
use App\Models\Video;
use App\Models\VisionMission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthSeeder::class);
        $this->call(HeaderHomeSeeder::class);
        $this->call(HistoryHomeSeeder::class);
        $this->call(OpeningHomeSeeder::class);
        $this->call(RemarkHomeSeeder::class);
        $this->call(NavigasiSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(HeaderProfileSeeder::class);
        $this->call(HymneSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(MarsSeeder::class);
        $this->call(MottoSeeder::class);
        $this->call(VisionMissionSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(EmployeeSeeder::class);
        $this->call(RoleEmployeeSeeder::class);
        $this->call(SectionContactSeeder::class);
        $this->call(SectionManagementSeeder::class);
        $this->call(SectionStaffSeeder::class);
        $this->call(SectionTeacherSeeder::class);
        $this->call(CurriculumSeeder::class);
        $this->call(GallerySeeder::class);
        $this->call(ProgramSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(SectionGallerySeeder::class);
        $this->call(SectionProgramSeeder::class);
        $this->call(SectionProyekSeeder::class);
        $this->call(HeaderAcademicSeeder::class);





































        SectionGraduation::create([
            'title_section' => 'Grafik Data Kenaikan Kelas & Kelulusan',
            'button_1' => 'Semua Siswa',
            'button_2' => 'Siswa Laki-Laki',
            'button_3' => 'Siswa Perempuan',
            'caption_1' => 'Kelas X',
            'caption_2' => 'Kelas XI',
            'caption_3' => 'Kelas XII',
        ]);

        HistoryKenaikanSiswa::create([
            'students_id' => '7',
            'jurusans_id' => '2',
            'kelases_id' => '3',
            'indexes_id' => '2',
            'semesters_id' => '1',
        ]);

        HistoryKenaikanSiswa::create([
            'students_id' => '6',
            'jurusans_id' => '2',
            'kelases_id' => '3',
            'indexes_id' => '2',
            'semesters_id' => '1',
        ]);

        HistoryKenaikanSiswa::create([
            'students_id' => '6',
            'jurusans_id' => '2',
            'kelases_id' => '3',
            'indexes_id' => '2',
            'semesters_id' => '1',
        ]);

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

        HeaderStudent::create([
            'banner' => 'banner-header.png',
            'title_header' => 'Kesiswaan Membentuk Karakter & Kreativitas di Sekolah',
            'description' => 'Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.',
            'button' => 'Lihat Selengkapnya',
        ]);

        HeaderStudent::create([
            'banner' => 'banner-header-2.png',
            'title_header' => 'Kesiswaan Membentuk Karakter & Kreativitas di Sekolah 2',
            'description' => 'Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.',
            'button' => 'Lihat Selengkapnya 2',
        ]);

        TahunAjaran::create([
            'tahun' => '2019/2020',
        ]);

        TahunAjaran::create([
            'tahun' => '2020/2021',
        ]);

        TahunAjaran::create([
            'tahun' => '2021/2022',
        ]);

        TahunAjaran::create([
            'tahun' => '2022/2023',
        ]);

        TahunAjaran::create([
            'tahun' => '2023/2024',
        ]);

        Semester::create([
            'semester' => 'Ganjil',
        ]);

        Semester::create([
            'semester' => 'Genap',
        ]);

        Kelas::create([
            'name' => 'X',
        ]);

        Kelas::create([
            'name' => 'XI',
        ]);

        Kelas::create([
            'name' => 'XII',
        ]);

        Jurusan::create([
            'name' => 'Ilmu Pengetahuan Alam',
            'code' => 'IPA',
        ]);

        Jurusan::create([
            'name' => 'Ilmu Pengetahuan Sosial',
            'code' => 'IPS',
        ]);

        Index::create([
            'name' => 'A',
        ]);

        Index::create([
            'name' => 'B',
        ]);

        SectionStudent::create([
            'title_section' => 'Grafik Data Kesiswaan',
            'button_1' => 'Semua Siswa',
            'button_2' => 'Siswa Laki-Laki',
            'button_3' => 'Siswa Perempuan',
            'caption_1' => 'Kelas X',
            'caption_2' => 'Kelas XI',
            'caption_3' => 'Kelas XII',
        ]);

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

        SectionExtracurricular::create([
            'title_section' => 'Ekstrakulikuler Membuka Potensi Dan Meningkatkan Kolaborasi',
            'description' => 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.',
        ]);

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

        SectionService::create([
            'title_section' => 'Kami Mengarahkan Siswa Menuju Kesuksesan Karir',
            'description' => 'Kami memandu setiap siswa menuju pencapaian kesuksesan yang berkelanjutan dalam berbagai bidang karir yang mereka pilih. Visi kami adalah membantu siswa mengembangkan potensi terbaik mereka untuk meraih prestasi luar biasa dalam perjalanan karir mereka yang penuh prestasi.',
            'button' => 'Lihat Semua',
        ]);

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

        SectionAchievement::create([
            'title_section' => 'Mencetak Prestasi Gemilang, Kisah Sukses Siswa Inspiratif Di Sekolah Kami',
            'description' => 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.',
            'button' => 'Lihat Semua',
        ]);

        KategoriPrestasi::create([
            'nama' => 'Akademik'
        ]);

        KategoriPrestasi::create([
            'nama' => 'Non Akademik'
        ]);

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

        SectionBeasiswa::create([
            'title_section' => 'Ayo dapatkan Peluang Beasiswa di Sekolah!',
            'description' => 'Dengan adanya beasiswa di sekolah, para siswa berpeluang untuk mengakses pendidikan yang berkualitas tanpa memandang latar belakang ekonomi. Ini juga membuka pintu bagi mereka untuk mengembangkan potensi diri',
        ]);

        Beasiswa::create([
            "title" => "Beasiswa Akademik Unggulan",
            "description" => "Siswa yang mendapatkan beasiswa ini akan menerima dukungan finansial untuk biaya pendidikan selama satu tahun ajaran, sebagai penghargaan atas dedikasi dan kerja keras mereka dalam prestasi akademik."
        ]);

        Beasiswa::create([
            "title" => "Beasiswa Non-Akademik",
            "description" => "Siswa yang menunjukkan prestasi di luar akademik seperti dalam olahraga, atau pelayanan masyarakat. Beasiswa ini bertujuan untuk mendorong dan mendukung perkembangan bakat dan kemampuan siswa di berbagai bidang non-akademik."
        ]);

        Beasiswa::create([
            "title" => "Beasiswa Bantuan Keuangan",
            "description" => "Beasiswa ini diberikan kepada siswa yang memiliki kebutuhan finansial dan kesulitan dalam membayar biaya pendidikan. Beasiswa ini bertujuan untuk membantu siswa yang kurang mampu agar tetap dapat melanjutkan pendidikan dengan layak."
        ]);

        BeasiswaPenerima::create([
            'tahun' => '2022/2023',
            'digunakan_untuk' => 'Sebagai pengakuan atas prestasi akademik yang luar biasa',
            'jumlah_beasiswa' => '500000',
            'students_id' => '5',
            'beasiswas_id' => '1',
        ]);

        BeasiswaPenerima::create([
            'tahun' => '2022/2023',
            'digunakan_untuk' => 'mendorong mereka untuk terus berkinerja baik dalam pendidikan',
            'jumlah_beasiswa' => '1000000',
            'students_id' => '4',
            'beasiswas_id' => '2',
        ]);

        BeasiswaPenerima::create([
            'tahun' => '2022/2023',
            'digunakan_untuk' => 'meringankan beban finansial keluarga dan membantu memfasilitasi akses pendidikan yang berkualitas',
            'jumlah_beasiswa' => '750000',
            'students_id' => '3',
            'beasiswas_id' => '3',
        ]);

        SectionAlumni::create([
            'title_section' => 'Apa Kata Alumni di SMA Negeri 1 selat?',
            'description' => 'Sejumlah alumni terbaik dari sekolah kami. Dari berbagai latar belakang dan jurusan studi, alumni kami telah mencapai kesuksesan dalam berbagai bidang pro'
        ]);

        Alumni::create([
            'tahun_ajaran_lulus' => 4,
            'profile' => 'alumni-1.jpg',
            'pekerjaan' => 'Part Of Carnival Cruise Line (CCL) as a Commis',
            'testimoni' => 'Pendidikan di SMA Negeri 1 Selat telah membantu saya memahami pentingnya pendekatan ilmiah dalam memecahkan masalah. Kini, saya bekerja sebagai peneliti di sebuah lembaga riset internasional dan berkontribusi dalam mengembangkan solusi untuk isu-isu lingkungan.',
            'students_id' => '8',
        ]);

        Alumni::create([
            'tahun_ajaran_lulus' => 4,
            'profile' => 'alumni-2.jpg',
            'pekerjaan' => 'Insinyur di PT Teknologi Maju Indonesia',
            'testimoni' => 'SMAN 1 Selat adalah tempat di mana saya menemukan minat dan passion saya dalam seni dan desain. Terima kasih atas dukungan para guru dan teman-teman yang telah membantu mengembangkan bakat saya. Saat ini, saya telah mendirikan perusahaan desain grafis.',
            'students_id' => '7',
        ]);

        Alumni::create([
            'tahun_ajaran_lulus' => 4,
            'profile' => 'alumni-3.jpg',
            'pekerjaan' => 'Pendiri dan Desainer Grafis di Maya Design Studio',
            'testimoni' => 'Halo teman-teman alumni sekolah! Saya sangat senang ingin berbagi kabar baik. Saat ini, saya bekerja sebagai Komisaris di Carnival Cruise Line. Selama perjalanan karier ini, banyak pelajaran berharga yang saya pelajari. Bersama-sama, mari kita berikan kontribusi positif bagi masa depan sekolah kita.',
            'students_id' => '6',
        ]);

        HeaderSaranaPrasarana::create([
            'banner' => 'banner-header.png',
            'title_header' => 'Lingkungan Belajar Unggul melalui Sarana & Prasarana Sekolah',
            'description' => 'Pentingnya sarana dan prasarana dalam menciptakan lingkungan belajar yang unggul di sekolah. Dalam tulisan ini, akan dipaparkan bagaimana infrastruktur fisik yang baik, pemanfaatan teknologi modern, keselamatan siswa, inklusivitas, dan manajemen fasilitas yang efektif berkontribusi dalam meningkatkan kualitas pendidikan.',
            'button' => 'Lihat Selengkapnya',
        ]);

        HeaderSaranaPrasarana::create([
            'banner' => 'banner-header-2.png',
            'title_header' => 'Lingkungan Belajar Unggul melalui Sarana & Prasarana Sekolah 2',
            'description' => 'Pentingnya sarana dan prasarana dalam menciptakan lingkungan belajar yang unggul di sekolah. Dalam tulisan ini, akan dipaparkan bagaimana infrastruktur fisik yang baik, pemanfaatan teknologi modern, keselamatan siswa, inklusivitas, dan manajemen fasilitas yang efektif berkontribusi dalam meningkatkan kualitas pendidikan.',
            'button' => 'Lihat Selengkapnya 2',
        ]);

        SectionPrasarana::create([
            'title_section' => 'Pentingnya Peningkatan Sarana Dan Prasarana Di Sekolah',
            'description' => 'Peningkatan sarana dan prasarana di sekolah untuk menciptakan lingkungan belajar yang optimal. Infrastruktur fisik, teknologi pendidikan, keamanan, dan aksesibilitas.',
            'button' => 'Lihat Semua',
        ]);

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

        SectionDenah::create([
            'map' => 'denah-map.jpg',
            'title_section' => 'Kode Denah',
            'title_code' => 'Kode Ruangan',
            'title_room' => 'Nama Ruangan',
            'button' => 'Detail',
        ]);

        Denah::create([
            'code' => 'A',
            'name' => 'Ruang Kelas',
            'description' => 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.',
        ]);

        Denah::create([
            'code' => 'B',
            'name' => 'Ruang Guru',
            'description' => '
            Ruang guru adalah tempat di mana para guru berkumpul untuk merencanakan pelajaran, berkolaborasi dengan kolega, dan beristirahat. Biasanya terletak di dekat kantor kepala sekolah atau dekan, dan sering kali memiliki akses ke komputer, printer, dan sumber daya lainnya. Ruang guru juga dapat digunakan untuk pertemuan dengan orang tua atau wali murid, dan kadang-kadang digunakan untuk kegiatan ekstrakurikuler.',
        ]);

        Denah::create([
            'code' => 'C',
            'name' => 'Ruang Waka',
            'description' => 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.',
        ]);

        Denah::create([
            'code' => 'D',
            'name' => 'Ruang BK',
            'description' => 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.',
        ]);

        Denah::create([
            'code' => 'E',
            'name' => 'Ruang Kepala Sekolah',
            'description' => 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.',
        ]);

        Denah::create([
            'code' => 'F',
            'name' => 'Kantin',
            'description' => 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.',
        ]);

        Denah::create([
            'code' => 'G',
            'name' => 'Lapangan Basket',
            'description' => 'Ruang kelas di sekolah ini didesain dengan baik, dilengkapi dengan perabotan modern dan fungsional yang menciptakan lingkungan belajar yang nyaman dan interaktif bagi para siswa. Papan tulis interaktif, proyektor, serta susunan kursi dan meja yang ergonomis membantu mendukung proses pembelajaran yang efektif.',
        ]);

        HeaderHumas::create([
            'banner' => 'banner-header.png',
            'title_header' => 'Kemitraan Sekolah-Industri untuk Masa Depan Sekolah',
            'description' => 'Kemitraan antara sekolah dan industri menjadi kunci untuk mempersiapkan generasi muda menghadapi tuntutan dunia kerja. Artikel ini membahas pentingnya kemitraan ini dalam menciptakan kurikulum yang relevan dan mengembangkan keterampilan berdaya saing. Berbagai model kemitraan sukses, manfaatnya, serta cara mengatasi tantangan.',
            'button' => 'Lihat Selengkapnya',
        ]);

        HeaderHumas::create([
            'banner' => 'banner-header-2.png',
            'title_header' => 'Kemitraan Sekolah-Industri untuk Masa Depan Sekolah 2',
            'description' => 'Kemitraan antara sekolah dan industri menjadi kunci untuk mempersiapkan generasi muda menghadapi tuntutan dunia kerja. Artikel ini membahas pentingnya kemitraan ini dalam menciptakan kurikulum yang relevan dan mengembangkan keterampilan berdaya saing. Berbagai model kemitraan sukses, manfaatnya, serta cara mengatasi tantangan.',
            'button' => 'Lihat Selengkapnya 2',
        ]);

        SectionKemitraan::create([
            'title_header' => 'Melangkah Bersama dengan Kemitraan Aktif Sekolah-Industri',
            'description' => 'Manfaat kemitraan sekolah-industri dalam mempersiapkan siswa untuk masa depan dunia kerja. Dengan menjalin hubungan erat antara sekolah.',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-1.png',
            'name' => 'Kemitraan 1',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-2.png',
            'name' => 'Kemitraan 2',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-3.png',
            'name' => 'Kemitraan 3',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-4.png',
            'name' => 'Kemitraan 4',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-5.png',
            'name' => 'Kemitraan 5',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-8.png',
            'name' => 'Kemitraan 8',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-7.png',
            'name' => 'Kemitraan 7',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-9.png',
            'name' => 'Kemitraan 9',
        ]);

        Partnership::create([
            'logo' => 'kemitraan-10.png',
            'name' => 'Kemitraan 10',
        ]);

        SectionJournal::create([
            'title_header' => 'Majalah Terbaru Mengenai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Majalah',
        ]);

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

        SectionVideo::create([
            'title' => 'Mempersembahkan tarian kebesaran SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Video',
        ]);

        Video::create([
            'link' => 'https://www.youtube.com/embed/D0UnqGm_miA?si=iZkOKj3FrwbuWIaY',
        ]);

        SectionBerita::create([
            'title_header' => 'Berita Terbaru Mengenai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Berita',
        ]);

        Berita::create([
            'banner' => 'berita-1.jpg',
            'title' => 'Berita Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana',
            'created_date' => '2023/06/03',
            'description' => 'Siswa kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-2.jpg',
            'title' => 'Berita 2 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 2',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 2 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-3.jpg',
            'title' => 'Berita 3 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 3',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 3 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-4.jpg',
            'title' => 'Berita 4 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 4',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 4 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);

        Berita::create([
            'banner' => 'berita-5.jpg',
            'title' => 'Berita 5 Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex, nulla?',
            'author' => 'I Made Artana 5',
            'created_date' => '2023/06/03',
            'description' => 'Siswa 5 kami berhasil mencapai prestasi gemilang dalam kompetisi matematika tingkat kota, memperkuat dedikasi mereka terhadap penguasaan matematika dan penyelesaian masalah.',
        ]);
    }
}
