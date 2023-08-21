<?php

namespace Database\Seeders;

use App\Models\Auth;
use App\Models\Beasiswa;
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
use App\Models\Journuse;
use App\Models\Index;
use App\Models\Journal;
use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Logo;
use App\Models\Mars;
use App\Models\Motto;
use App\Models\OpeningHome;
use App\Models\Partnership;
use App\Models\Prasarana;
use App\Models\Program;
use App\Models\Project;
use App\Models\RemarkHome;
use App\Models\RoleEmployee;
use App\Models\SectionAchievement;
use App\Models\SectionAlumni;
use App\Models\SectionBeasiswa;
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
use App\Models\Semester;
use App\Models\Student;
use App\Models\TahunAjaran;
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
        Auth::create([
            'username' => 'Admin Sekolah',
            'role' => 'Manajemen Admin',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        Beasiswa::create([
            "title" => "Beasiswa Akademik Unggulan",
            "description" => "Siswa yang mendapatkan beasiswa ini akan menerima dukungan finansial untuk biaya pendidikan
            selama satu tahun ajaran, sebagai penghargaan atas dedikasi dan kerja keras mereka dalam
            prestasi akademik."
        ]);

        HeaderHome::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'SMA Negeri 1 Selat, Wujudkan Impianmu Yang Tinggi Di Sini!',
            'description' => 'Selamat datang di SMA Negeri 1 Selat, tempat perlindungan pendidikan yang luar biasa di mana keberanian bertemu dengan keunggulan. Komitmen kami untuk merawat keunggulan akademis dan pertumbuhan pribadi membuat kami menjadi institusi terdepan yang menggenggam potensi dalam setiap individu.',
            'button' => 'Lihat Profile',
        ]);

        OpeningHome::create([
            'title_opening' => 'Selamat Datang Di SMA Negeri 1 Selat!!',
            'description' => 'Di SMA Negeri 1 Selat, kami menciptakan lingkungan yang mendukung dan memelihara, yang mendorong individualitas dan kreativitas. Tim pendidik kami yang berdedikasi penuh komitmen untuk menyediakan pendidikan terbaik, dan perhatian pribadi.',
        ]);

        RemarkHome::create([
            'banner' => 'banner-sambutan.jpg',
            'title_remark' => 'Sambutan Dari Kepala Sekolah SMA Negeri 1 Selat',
            'message' => 'Puji Syukur kepada Tuhan Yang Maha Esa yang telah memberkati SMA Negeri 1 Selat sehingga boleh berkembang dan mendapat kepercayaan masyarakat. Berkomitmen meningkatkan mutu dan pelayanan, teguh dalam iman, berbudaya serta berwawasan lingkungan sehingga mampu menghasilkan lulusan yang siap terjun ke Dunia Usaha, Dunia Industri, dan Dunia Kerja serta memiliki jiwa enterpreneur, mandiri dan mampu berkompetisi di segala bidang.',
        ]);

        HistoryHome::create([
            'banner' => 'banner-sejarah.jpg',
            'title_history' => 'Sejarah Singkat Tentang SMA Negeri 1 Selat',
            'description' => 'SMA Negeri 1 Selat didirikan pada tahun 1995 oleh sekelompok pendidik visioner yang percaya bahwa pendidikan sejati tidak hanya tentang akademik, tetapi juga tentang memupuk keberanian dan semangat dalam setiap siswa. Berlokasi di sebuah desa kecil yang indah, sekolah ini berkomitmen untuk menciptakan lingkungan pembelajaran yang inklusif dan inspiratif.',
            'button' => 'Lihat Profile',
        ]);

        HeaderProfile::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'Profile Dan informasi mengenai SMA Negeri 1 Selat',
            'description' => 'SMA Negeri 1 Selat adalah sekolah negeri yang terletak di Kota Bahagia. Kami didirikan dengan tekad kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan dunia global.',
            'button' => 'Lihat Selengkapnya',
        ]);

        VisionMission::create([
            'banner' => 'banner-visi-misi.jpg',
            'title_vision' => 'Visi sekolah',
            'description_vision' => 'Menjadi lembaga pendidikan yang unggul dan inovatif dalam membentuk pemimpin masa depan yang berintegritas dan berbudaya global.',
            'title_mission' => 'Misi sekolah',
            'description_mission' => 'Misi Courageon School adalah menyediakan pendidikan yang berkualitas tinggi dengan mengadopsi kurikulum inovatif dan metode pembelajaran berpusat pada siswa. Kami berusaha membimbing siswa untuk mengembangkan keberanian dan kreativitas mereka melalui berbagai program ekstrakurikuler yang beragam. Melalui nilai-nilai keberanian, inovasi, dan tanggung jawab, kami berkomitmen untuk membentuk siswa yang memiliki karakter unggul, siap menghadapi tantangan masa depan, dan berkontribusi positif bagi masyarakat dan dunia.',
        ]);

        Motto::create([
            'speaker' => 'Courageon',
            'motto' => 'Bangsa yang malas belajar tidak akan bisa berkembang!',
        ]);

        Logo::create([
            'logo' => 'brand-logo.png',
            'logo_meaning' => 'Buku dalam logo menggambarkan komitmen sekolah untuk memberikan pendidikan yang berkualitas tinggi kepada siswa. Ini mengandung pesan bahwa sekolah adalah tempat belajar dan pengetahuan yang didorong untuk membekali siswa dengan bekal yang kuat untuk masa depan.',
            'font_meaning' => 'Penggunaan font sans serif capitalize menunjukkan kesan modern dan progresif dari sekolah tersebut. Logo ini ingin menyampaikan bahwa sekolah memiliki pendekatan yang inovatif dalam pendidikan dan selalu berada di garis depan perkembangan pendidikan.',
            'color_meaning' => 'Warna biru tua sering dikaitkan dengan keberlanjutan dan konsistensi. Logo ini ingin menyampaikan bahwa sekolah memiliki dedikasi yang kuat untuk memberikan pendidikan berkualitas dan berkomitmen untuk mencapai tujuan jangka panjang.',
        ]);

        Mars::create([
            'banner' => 'banner-mars.jpg',
            'title_section' => 'Mars SMA Negeri 1 Selat',
            'mars' => '<span style="white-space:pre-wrap">Disini Tempat Kami Berkreasi<br />Tuk’ Jadi Siswa Yang Kreatif<br />Bertaqwa Landasan Hidup Kami<br />Berprestasi Tujuan Kami SMANEBA<br />Tempat kami Belajar<br />Pencetak Insan Muda Bangsa<br />Berpribadi Luhur Dan Berakhlaq Mulia<br />Mutu Berdaya Saing Global<br />Ayo …… Ayo Semua<br />Torehkan Prestasi Tuk’ SMANEBA<br />Jadikan Dia Gudang Juara Skolah<br />Tercinta Kita Semua<br />Sayangi , Cintai, SMANEBA slalu dihati</span>',
            'creation' => 'Dr. Andi Pranoto, M.Pd.',
        ]);

        RoleEmployee::create([
            'role' => 'management',
        ]);

        RoleEmployee::create([
            'role' => 'teacher',
        ]);

        RoleEmployee::create([
            'role' => 'employee',
        ]);

        Course::create([
            'name' => 'Matematika',
            'hours_per_week' => '12',
        ]);

        Course::create([
            'name' => 'IPA',
            'hours_per_week' => '8',
        ]);

        Course::create([
            'name' => 'PPKN',
            'hours_per_week' => '10',
        ]);

        Course::create([
            'name' => 'Bahasa Indonesia',
            'hours_per_week' => '11',
        ]);

        Course::create([
            'name' => 'Bahasa Inggris',
            'hours_per_week' => '9',
        ]);

        SectionManagement::create([
            'title_section' => 'Data Manajemen SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);


        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Komang Wirasatya',
            'place_of_birth' => 'karangasem',
            'date_of_birth' => '1995-11-23',
            'highest_rank' => 'SMKN 2014',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);
        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Made Satyawan',
            'place_of_birth' => 'bangli',
            'date_of_birth' => '1985-10-23',
            'highest_rank' => 'SMKN 2000',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);
        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Kadek Satria',
            'place_of_birth' => 'Denpasar',
            'date_of_birth' => '1996-12-21',
            'highest_rank' => 'SMKN 2018',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);
        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Putu Adiawan',
            'place_of_birth' => 'Denpasar',
            'date_of_birth' => '1990-10-11',
            'highest_rank' => 'SMKN 2011',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);
        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'Ida Bagus Darmawangsa',
            'place_of_birth' => 'Denpasar',
            'date_of_birth' => '1989-12-31',
            'highest_rank' => 'SMKN 2001',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);
        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Gusti Agung Sucipta',
            'place_of_birth' => 'Denpasar',
            'date_of_birth' => '1999-11-14',
            'highest_rank' => 'SMKN 2017',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);
        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Gede Arya Sucipta',
            'place_of_birth' => 'Negara',
            'date_of_birth' => '1982-10-19',
            'highest_rank' => 'SMKN 2001',
            'position' => 'Kontrak Provinsi',
            'gender' => 'L',
            'last_number_skp' => '5/04.C/HK/2022',
            'last_date_skp' => '2022-01-03',
            'first_number_skp' => '1553/03-A/HK/2014',
            'first_date_skp' => '2014-08-01',
        ]);


        SectionTeacher::create([
            'title_section' => 'Data Guru SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);


        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'Drs. I Wayan Cenik, M.Pd.',
            'image' => 'sample-guru.jpg',
            'nip' => '19650428 199512 1 002',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'Ida Bagus Nyoman Gelgel, S.Pd.',
            'image' => 'sample-guru.jpg',
            'nip' => '19670110 199203 1 012',
            'position' => 'Guru Ahli Madya',
            'gender' => 'P',
            'course_id' => '2',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);
        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Wayan Suarsana, S.Pd.',
            'image' => 'sample-guru.jpg',
            'nip' => '19680517 199512 1 003',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);
        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Wayan Mudayasa, S.Pd',
            'image' => 'sample-guru.jpg',
            'nip' => '19700622 199512 1 001',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);
        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'Dra. Ni Wayan Mastriani.',
            'image' => 'sample-guru.jpg',
            'nip' => '19650428 199512 1 005',
            'position' => 'Guru Ahli Madya',
            'gender' => 'P',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);
        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Gusti Bagus Jelantik, S.Pd.',
            'image' => 'sample-guru.jpg',
            'nip' => '19680713 199002 1 003',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'course_id' => '1',
            'room_type' => 'Pembina / IVa',
        ]);
        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Nyoman Pasek Suadnyana, S.Pd',
            'image' => 'sample-guru.jpg',
            'nip' => '19641231 198403 1 029',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);


        SectionStaff::create([
            'title_section' => 'Data Pegawai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);


        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Nengah Sumerta, S.Sos.',
            'image' => 'sample-pegawai.jpg',
            'rank' => 'Penata / IIIc',
            'position' => 'Analis SDM / KTU',
            'gender' => 'L',
        ]);
        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Gusti Agung Putra, S.E.',
            'image' => 'sample-pegawai.jpg',
            'rank' => 'Penata Tk.1/ III/.d',
            'position' => 'Pengelola Data',
            'gender' => 'L',
        ]);
        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'Putu Ari Setiawati.,S.E.',
            'image' => 'sample-pegawai.jpg',
            'rank' => 'Penata/ III/.c',
            'position' => 'Pengelola BMD',
            'gender' => 'P',
        ]);
        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Wayan Putu Adi Jenar, S.Pd',
            'image' => 'sample-pegawai.jpg',
            'rank' => 'Penata Muda /III/a',
            'position' => 'Pengelola Keuangan',
            'gender' => 'L',
        ]);
        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Ketut Yasa',
            'image' => 'sample-pegawai.jpg',
            'rank' => 'Penata Muda/III/a',
            'position' => 'Pengadminitrasian Umum',
            'gender' => 'L',
        ]);
        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'Komang Asri, A.Md.',
            'image' => 'sample-pegawai.jpg',
            'rank' => 'Pengatur II.c',
            'position' => 'Analis SDM / KTU',
            'gender' => 'L',
        ]);
        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Komang Sumerta',
            'image' => 'sample-pegawai.jpg',
            'rank' => 'Pengatur III.c',
            'position' => 'Pengadminitrasian Kesiswaan',
            'gender' => 'L',
        ]);


        SectionContact::create([
            'title_section' => 'Hubungi Kami',
            'url_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.576504957393!2d115.48273847492702!3d-8.44318009159662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2053a75a7b143%3A0x5e66d8200f7bf2a2!2sSMA%20Negeri%201%20Selat!5e0!3m2!1sid!2sid!4v1692022962270!5m2!1sid!2sid',
        ]);

        Contact::create([
            'icon' => 'email-icon.svg',
            'name' => 'Email',
            'link' => 'smanegeri1selat@gmail.com',
        ]);

        Contact::create([
            'icon' => 'address-icon.svg',
            'name' => 'Address',
            'link' => 'Jl. Baledan, Duda, Kec. Selat, Kabupaten Karangasem, Bali 80862',
        ]);

        Contact::create([
            'icon' => 'phone-icon.svg',
            'name' => 'Phone Number',
            'link' => '0274 - 513454',
        ]);

        Contact::create([
            'icon' => 'fax-icon.svg',
            'name' => 'FAX',
            'link' => '0274 - 513454',
        ]);

        HeaderHumas::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'Kemitraan Sekolah-Industri untuk Masa Depan Sekolah',
            'description' => 'Kemitraan antara sekolah dan industri menjadi kunci untuk mempersiapkan generasi muda menghadapi tuntutan dunia kerja. Artikel ini membahas pentingnya kemitraan ini dalam menciptakan kurikulum yang relevan dan mengembangkan keterampilan berdaya saing. Berbagai model kemitraan sukses, manfaatnya, serta cara mengatasi tantangan.',
            'button' => 'Lihat Selengkapnya',
        ]);

        SectionKemitraan::create([
            'title_header' => 'Melangkah Bersama dengan Kemitraan Aktif Sekolah-Industri',
            'description' => 'Manfaat kemitraan sekolah-industri dalam mempersiapkan siswa untuk masa depan dunia kerja. Dengan menjalin hubungan erat antara sekolah.',
        ]);

        SectionJournal::create([
            'title_header' => 'Berbagai Berita Mengenai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Berita',
        ]);


        HeaderSaranaPrasarana::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'Lingkungan Belajar Unggul melalui Sarana & Prasarana Sekolah',
            'description' => 'Pentingnya sarana dan prasarana dalam menciptakan lingkungan belajar yang unggul di sekolah. Dalam tulisan ini, akan dipaparkan bagaimana infrastruktur fisik yang baik, pemanfaatan teknologi modern, keselamatan siswa, inklusivitas, dan manajemen fasilitas yang efektif berkontribusi dalam meningkatkan kualitas pendidikan.',
            'button' => 'Lihat Selengkapnya',
        ]);

        SectionPrasarana::create([
            'title_section' => 'Pentingnya Peningkatan Sarana Dan Prasarana Di Sekolah',
            'description' => 'Peningkatan sarana dan prasarana di sekolah untuk menciptakan lingkungan belajar yang optimal. Infrastruktur fisik, teknologi pendidikan, keamanan, dan aksesibilitas.',
            'button' => 'Lihat Semua',
        ]);

        Prasarana::create([
            'image' => 'sample-sarana-prasarana.jpg',
            'name' => 'Ruang Kelas',
            'description' => 'Sarana dan prasarana ruangan kelas merujuk pada fasilitas dan perlengkapan yang ada di dalam sebuah ruangan kelas yang dirancang untuk mendukung proses pembelajaran dan kenyamanan siswa dan guru. Berikut ini adalah deskripsi singkat mengenai beberapa sarana dan prasarana umum yang biasanya ada dalam ruangan kelas',
            'total' => 38,
        ]);

        SectionDenah::create([
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

        HeaderAcademic::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'Inovasi Peningkatan Prestasi Akademik di Sekolah!',
            'description' => 'Penelitian ini mencari cara-cara inovatif untuk meningkatkan prestasi akademik siswa di sekolah. Metode baru seperti teknologi edukasi terkini, pembelajaran berbasis proyek, dan kurikulum lintas disiplin akan dieksplorasi. Penelitian ini juga menyoroti peran guru, staf, orang tua, dan dukungan keluarga dalam mencapai hasil akademik yang lebih baik.',
            'button' => 'Lihat Selengkapnya',
        ]);

        Curriculum::create([
            'banner' => 'banner-kurikulum.jpg',
            'title_section' => 'Langkah Kami Menghadapi Pendidikan Abad Ke-21',
            'description' => 'Kurikulum di sekolah merupakan inti dari pendidikan formal, dan terus mengalami transformasi untuk menghadapi perubahan zaman dan tantangan abad ke-21. Deskripsi ini akan mengeksplorasi perubahan signifikan dalam kurikulum yang dilakukan oleh institusi pendidikan guna mempersiapkan generasi muda untuk menghadapi dunia yang cepat berubah dan kompleks. Fokus akan diberikan pada pengintegrasian teknologi dalam pembelajaran, pendekatan kreatif dalam mengajar, inklusi pendidikan bagi semua, serta upaya untuk mengembangkan keterampilan abad ke-21 seperti kritis berpikir, kerjasama, keterampilan digital, dan pemecahan masalah.',
        ]);

        SectionProgram::create([
            'title_section' => 'Program Akademik Sekolah',
        ]);

        Program::create([
            'banner' => 'banner-elerning.jpg',
            'title' => 'E-Learning SMA Negeri 1 Selat',
            'description' => 'Program E-Learning di SMA Negeri 1 Selat adalah platform pembelajaran digital yang inovatif dan interaktif, dirancang untuk mendukung proses belajar-mengajar yang efektif dan efisien. Melalui E-Learning, siswa memiliki akses ke beragam materi pembelajaran, modul, dan sumber daya pendukung yang dapat diakses kapan saja. Platform ini menawarkan berbagai fitur canggih, termasuk video pembelajaran, forum diskusi, ujian online, dan berbagai tugas interaktif. Dengan bimbingan dari para guru, siswa dapat berpartisipasi dalam diskusi dan berkolaborasi dengan sesama siswa dalam proses belajar.',
            'button' => 'Website E-Learning',
            'link' => 'https://guru.kemdikbud.go.id/',
        ]);

        Program::create([
            'banner' => 'banner-asessment.jpg',
            'title' => 'E-Asessment SMA Negeri 1 Selat',
            'description' => 'E-Assessment di Sekolah SMA Negeri 1 Selat merupakan sistem evaluasi dan penilaian berbasis teknologi yang inovatif untuk mengukur kemajuan belajar siswa secara akurat dan efisien. Dengan menggunakan teknologi canggih, E-Assessment memungkinkan siswa untuk mengikuti berbagai jenis ujian dan tugas evaluasi secara online melalui platform pembelajaran digital yang terintegrasi. Platform E-Assessment ini menyediakan berbagai format ujian, termasuk pilihan ganda, uraian, dan tugas interaktif yang dirancang untuk mengukur pemahaman siswa dalam berbagai tingkatan kognitif.',
            'button' => 'Website E-Asessment',
            'link' => 'https://guru.kemdikbud.go.id/',
        ]);

        SectionProyek::create([
            'title_section' => 'Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila) Di SMA Negeri 1 Selat',
            'description' => 'Proyek 5P di SMA Negeri 1 Selat tingkatkan pemahaman siswa tentang nilai-nilai Pancasila lewat pendidikan, diskusi, kegiatan sosial, dan kompetisi. Siswanya diharapkan menerapkan nilai-nilai ini dalam kehidupan sehari-hari dan masyarakat.',
            'button' => 'Lihat Semua',
        ]);


        Project::create([
            'image' => 'sample-proyek.jpg',
            'title' => 'Gaya Hidup Berkelanjutan, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Gaya Hidup Berkelanjutan',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema gaya hidup berkelanjutan di sekolah adalah inisiatif yang bertujuan untuk mengintegrasikan nilai-nilai Pancasila dengan kesadaran akan pentingnya gaya hidup yang ramah lingkungan dan berkelanjutan. Proyek ini bertujuan untuk membentuk generasi muda yang memiliki kepekaan sosial, etika, dan tanggung jawab terhadap masyarakat dan lingkungan sekitarnya, sejalan dengan prinsip-prinsip dasar Pancasila.',
        ]);

        Project::create([
            'image' => 'sample-proyek.jpg',
            'title' => 'Bhinneka Tunggal Ika, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Bhinneka Tunggal Ika',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema Bhinneka Tunggal Ika di sekolah merupakan upaya yang diarahkan untuk membentuk generasi muda yang memiliki pemahaman mendalam tentang nilai-nilai Pancasila dan mampu menjalankan semangat persatuan dalam keragaman budaya, agama, dan suku di Indonesia. Tema Bhinneka Tunggal Ika menjadi landasan penting dalam proyek ini, mengingat kekayaan keragaman yang ada di Indonesia menjadi modal sosial yang harus dihargai dan dijaga.',
        ]);

        Project::create([
            'image' => 'sample-proyek.jpg',
            'title' => 'Kearifan Lokal, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Kearifan Lokal',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema kearifan lokal di sekolah merupakan upaya yang bertujuan untuk mengintegrasikan nilai-nilai luhur Pancasila dengan nilai-nilai kearifan lokal dalam pendidikan. Tujuan dari proyek ini adalah menghasilkan generasi muda yang tidak hanya mengerti dan menghargai prinsip-prinsip dasar negara Indonesia, tetapi juga memiliki pemahaman yang mendalam terhadap budaya dan tradisi lokal yang kaya.',
        ]);

        Project::create([
            'image' => 'sample-proyek.jpg',
            'title' => 'Bangunlah Jiwa dan Raganya, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Bangunlah Jiwa dan Raganya',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema Bhinneka Tunggal Ika di sekolah merupakan upaya yang diarahkan untuk membentuk generasi muda yang memiliki pemahaman mendalam tentang nilai-nilai Pancasila dan mampu menjalankan semangat persatuan dalam keragaman budaya, agama, dan suku di Indonesia. Tema Bhinneka Tunggal Ika menjadi landasan penting dalam proyek ini, mengingat kekayaan keragaman yang ada di Indonesia menjadi modal sosial yang harus dihargai dan dijaga.',
        ]);


        SectionGallery::create([
            'title_section' => 'Galeri Dokumentasi Sekolah',
            'description' => 'Masuki dunia kecemerlangan seni di Galeri SMA Negeri 1 Selat. Lepaskan kreativitasmu dan saksikan ekspresi berani dari para siswa dan seniman berbakat kami.',
        ]);


        SectionGraduation::create([
            'title_section' => 'Grafik Data Kenaikan Kelas & Kelulusan',
            'button_1' => 'Semua Siswa',
            'button_2' => 'Siswa Laki-Laki',
            'button_3' => 'Siswa Perempuan',
            'caption_1' => 'Kelas X',
            'caption_2' => 'Kelas XI',
            'caption_3' => 'Kelas XII',
        ]);

        HeaderStudent::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'Kesiswaan Membentuk Karakter & Kreativitas di Sekolah',
            'description' => 'Kesiswaan di sekolah merupakan peran penting dalam membentuk karakter siswa. Melalui kegiatan ekstrakurikuler dan edukatif, siswa dapat mengasah keterampilan sosial, kepemimpinan, dan kerjasama tim. Program kesiswaan juga membantu mengembangkan ketahanan mental dan emosional.',
            'button' => 'Lihat Selengkapnya',
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

        SectionExtracurricular::create([
            'title_section' => 'Ekstrakulikuler Membuka Potensi Dan Meningkatkan Kolaborasi',
            'description' => 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.',
        ]);

        SectionService::create([
            'title_section' => 'Kami Mengarahkan Siswa Menuju Kesuksesan Karir',
            'description' => 'Kami memandu setiap siswa menuju pencapaian kesuksesan yang berkelanjutan dalam berbagai bidang karir yang mereka pilih. Visi kami adalah membantu siswa mengembangkan potensi terbaik mereka untuk meraih prestasi luar biasa dalam perjalanan karir mereka yang penuh prestasi.',
            'button' => 'Lihat Semua',
        ]);

        SectionAchievement::create([
            'title_section' => 'Mencetak Prestasi Gemilang, Kisah Sukses Siswa Inspiratif Di Sekolah Kami',
            'description' => 'Ekstrakulikuler di sekolah merupakan wadah yang penting bagi para siswa untuk mengembangkan potensi mereka di luar lingkup pembelajaran akademis.',
            'button' => 'Lihat Semua',
        ]);

        SectionBeasiswa::create([
            'title_section' => 'Ayo dapatkan Peluang Beasiswa di Sekolah!',
            'description' => 'Dengan adanya beasiswa di sekolah, para siswa berpeluang untuk mengakses pendidikan yang berkualitas tanpa memandang latar belakang ekonomi. Ini juga membuka pintu bagi mereka untuk mengembangkan potensi diri',
        ]);

        SectionAlumni::create([
            'title_section' => 'Jejak Karir Alumni, Inspirasi Sukses Dari Sekolah Kami!',
            'description' => 'Sejumlah alumni terbaik dari sekolah kami. Dari berbagai latar belakang dan jurusan studi, alumni kami telah mencapai kesuksesan dalam berbagai bidang pro'
        ]);

        TahunAjaran::create([
            'tahun' => '2022/2023',
        ]);

        TahunAjaran::create([
            'tahun' => '2023/2024',
        ]);

        TahunAjaran::create([
            'tahun' => '2024/2025',
        ]);

        TahunAjaran::create([
            'tahun' => '2026/2027',
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

        Index::create([
            'name' => 'C',
        ]);

        Index::create([
            'name' => 'D',
        ]);

        Index::create([
            'name' => 'E',
        ]);
        Student::create([
            'nis' => '123456789',
            'nisn' => '12345',
            'nama_lengkap' => 'Aditya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2023/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Ayani',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '1',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
        Student::create([
            'nis' => '123456789',
            'nisn' => '12345',
            'nama_lengkap' => 'andika satya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2023/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Ayani',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '1',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
        Student::create([
            'nis' => '123456789',
            'nisn' => '12345',
            'nama_lengkap' => 'komang adi',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2023/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Ayani',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '1',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
        Student::create([
            'nis' => '123456789',
            'nisn' => '12345',
            'nama_lengkap' => 'ngurah',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2023/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Ayani',
            'kelases_id' => '2',
            'tahun_ajarans_id' => '1',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
        Student::create([
            'nis' => '123456789',
            'nisn' => '12345',
            'nama_lengkap' => 'satria mahatama',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2023/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Ayani',
            'kelases_id' => '3',
            'tahun_ajarans_id' => '1',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
        Student::create([
            'nis' => '123456789',
            'nisn' => '12345',
            'nama_lengkap' => 'saputra ',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2023/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Ayani',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '1',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
        Student::create([
            'nis' => '123456789',
            'nisn' => '12345',
            'nama_lengkap' => 'Aditya',
            'tahun_masuk' => '2023/2024',
            'tempat_lahir' => 'Bali',
            'tanggal_lahir' => '2023/08/03',
            'jenis_kelamin' => 'L',
            'kelurahan' => 'Ubung Kaja',
            'kecamatan' => 'Denpasar Utara',
            'alamat' => 'Ayani',
            'kelases_id' => '1',
            'tahun_ajarans_id' => '1',
            'jurusans_id' => '1',
            'indices_id' => '1',
            'semesters_id' => '1',
        ]);
    }
}
