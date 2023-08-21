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
use App\Models\Navigasi;
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

        Navigasi::create([
            'link_1' => 'Beranda',
            'link_2' => 'Profil',
            'link_3' => 'Akademik',
            'link_4' => 'Kesiswaan',
            'link_5' => 'Sarana Prasarana',
            'link_6' => 'Humas',
        ]);

        HeaderProfile::create([
            'banner' => 'banner-header.jpg',
            'title_header' => 'Profile Dan informasi mengenai SMA Negeri 1 Selat',
            'description' => 'SMA Negeri 1 Selat adalah sekolah negeri yang terletak di Kota Bahagia. Kami didirikan dengan tekad kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan dunia global.',
            'button' => 'Lihat Selengkapnya',
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

        VisionMission::create([
            'banner' => 'banner-visi-misi.jpg',
            'title_vision' => 'Visi sekolah',
            'description_vision' => 'Menjadi lembaga pendidikan yang unggul dan inovatif dalam membentuk pemimpin masa depan yang berintegritas dan berbudaya global.',
            'title_mission' => 'Misi sekolah',
            'description_mission' => 'Misi Courageon School adalah menyediakan pendidikan yang berkualitas tinggi dengan mengadopsi kurikulum inovatif dan metode pembelajaran berpusat pada siswa. Kami berusaha membimbing siswa untuk mengembangkan keberanian dan kreativitas mereka melalui berbagai program ekstrakurikuler yang beragam. Melalui nilai-nilai keberanian, inovasi, dan tanggung jawab, kami berkomitmen untuk membentuk siswa yang memiliki karakter unggul, siap menghadapi tantangan masa depan, dan berkontribusi positif bagi masyarakat dan dunia.',
        ]);

        Motto::create([
            'speaker' => 'Kepala Sekolah SMA Negeri 1 Selat',
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

        SectionManagement::create([
            'title_section' => 'Data Manajemen SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);

        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Komang Wirasatya',
            'image' => 'manajemen-1.jpg',
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
            'image' => 'manajemen-2.jpg',
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
            'image' => 'manajemen-3.jpg',
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
            'image' => 'manajemen-4.jpg',
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
            'image' => 'manajemen-5.jpg',
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
            'image' => 'manajemen-6.jpg',
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
            'image' => 'manajemen-7.jpg',
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
            'image' => 'guru-1.jpg',
            'nip' => '19650428 199512 1 002',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
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
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'Dra. Ni Wayan Mastriani.',
            'image' => 'guru-5.jpg',
            'nip' => '19650428 199512 1 005',
            'position' => 'Guru Ahli Madya',
            'gender' => 'P',
            'course_id' => '1',
            'room_type' => 'Pembina Tk. I / IVb',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Gusti Bagus Jelantik, S.Pd.',
            'image' => 'guru-6.jpg',
            'nip' => '19680713 199002 1 003',
            'position' => 'Guru Ahli Madya',
            'gender' => 'L',
            'course_id' => '1',
            'room_type' => 'Pembina / IVa',
        ]);

        Employee::create([
            'role_employees_id' => '2',
            'fullname' => 'I Nyoman Pasek Suadnyana, S.Pd',
            'image' => 'guru-7.jpg',
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
            'image' => 'pegawai-1.jpg',
            'rank' => 'Penata / IIIc',
            'position' => 'Analis SDM / KTU',
            'gender' => 'L',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Gusti Agung Putra, S.E.',
            'image' => 'pegawai-2.jpg',
            'rank' => 'Penata Tk.1/ III/.d',
            'position' => 'Pengelola Data',
            'gender' => 'L',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'Putu Ari Setiawati.,S.E.',
            'image' => 'pegawai-3.jpg',
            'rank' => 'Penata/ III/.c',
            'position' => 'Pengelola BMD',
            'gender' => 'P',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Wayan Putu Adi Jenar, S.Pd',
            'image' => 'pegawai-4.jpg',
            'rank' => 'Penata Muda /III/a',
            'position' => 'Pengelola Keuangan',
            'gender' => 'L',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Ketut Yasa',
            'image' => 'pegawai-5.jpg',
            'rank' => 'Penata Muda/III/a',
            'position' => 'Pengadminitrasian Umum',
            'gender' => 'L',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'Komang Asri, A.Md.',
            'image' => 'pegawai-6.jpg',
            'rank' => 'Pengatur II.c',
            'position' => 'Analis SDM / KTU',
            'gender' => 'L',
        ]);

        Employee::create([
            'role_employees_id' => '3',
            'fullname' => 'I Komang Sumerta',
            'image' => 'pegawai-7.jpg',
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
            'name' => 'Ruang Perpustakaan',
            'description' => 'Ruang Perpustakaan kami adalah tempat yang nyaman dan inspiratif bagi siswa untuk menjelajahi dunia pengetahuan melalui koleksi buku-buku bermutu tinggi serta fasilitas modern yang mendukung proses pembelajaran dan eksplorasi.',
            'total' => 2,
        ]);

        Prasarana::create([
            'image' => 'sarana-prasarana-4.jpg',
            'name' => 'Tempat Beribadah',
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
            'banner' => 'banner-header.jpg',
            'title_header' => 'Kemitraan Sekolah-Industri untuk Masa Depan Sekolah',
            'description' => 'Kemitraan antara sekolah dan industri menjadi kunci untuk mempersiapkan generasi muda menghadapi tuntutan dunia kerja. Artikel ini membahas pentingnya kemitraan ini dalam menciptakan kurikulum yang relevan dan mengembangkan keterampilan berdaya saing. Berbagai model kemitraan sukses, manfaatnya, serta cara mengatasi tantangan.',
            'button' => 'Lihat Selengkapnya',
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
            'title_header' => 'Berbagai Berita Mengenai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua Berita',
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
            'image' => 'proyek-1.jpg',
            'title' => 'Gaya Hidup Berkelanjutan, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Gaya Hidup Berkelanjutan',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema gaya hidup berkelanjutan di sekolah adalah inisiatif yang bertujuan untuk mengintegrasikan nilai-nilai Pancasila dengan kesadaran akan pentingnya gaya hidup yang ramah lingkungan dan berkelanjutan. Proyek ini bertujuan untuk membentuk generasi muda yang memiliki kepekaan sosial, etika, dan tanggung jawab terhadap masyarakat dan lingkungan sekitarnya, sejalan dengan prinsip-prinsip dasar Pancasila.',
        ]);

        Project::create([
            'image' => 'proyek-2.jpg',
            'title' => 'Bhinneka Tunggal Ika, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Bhinneka Tunggal Ika',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema Bhinneka Tunggal Ika di sekolah merupakan upaya yang diarahkan untuk membentuk generasi muda yang memiliki pemahaman mendalam tentang nilai-nilai Pancasila dan mampu menjalankan semangat persatuan dalam keragaman budaya, agama, dan suku di Indonesia. Tema Bhinneka Tunggal Ika menjadi landasan penting dalam proyek ini, mengingat kekayaan keragaman yang ada di Indonesia menjadi modal sosial yang harus dihargai dan dijaga.',
        ]);

        Project::create([
            'image' => 'proyek-3.jpg',
            'title' => 'Kearifan Lokal, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Kearifan Lokal',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema kearifan lokal di sekolah merupakan upaya yang bertujuan untuk mengintegrasikan nilai-nilai luhur Pancasila dengan nilai-nilai kearifan lokal dalam pendidikan. Tujuan dari proyek ini adalah menghasilkan generasi muda yang tidak hanya mengerti dan menghargai prinsip-prinsip dasar negara Indonesia, tetapi juga memiliki pemahaman yang mendalam terhadap budaya dan tradisi lokal yang kaya.',
        ]);

        Project::create([
            'image' => 'proyek-4.jpg',
            'title' => 'Bangunlah Jiwa dan Raganya, Program Projek Pelaksanaan 5P (Projek Penguatan Profile Pelajar Pancasila)',
            'topic' => 'Bangunlah Jiwa dan Raganya',
            'description' => 'Proyek penguatan profil pelajar Pancasila dengan tema Bhinneka Tunggal Ika di sekolah merupakan upaya yang diarahkan untuk membentuk generasi muda yang memiliki pemahaman mendalam tentang nilai-nilai Pancasila dan mampu menjalankan semangat persatuan dalam keragaman budaya, agama, dan suku di Indonesia. Tema Bhinneka Tunggal Ika menjadi landasan penting dalam proyek ini, mengingat kekayaan keragaman yang ada di Indonesia menjadi modal sosial yang harus dihargai dan dijaga.',
        ]);

        SectionGallery::create([
            'title_section' => 'Galeri Dokumentasi Sekolah',
            'description' => 'Masuki dunia kecemerlangan seni di Galeri SMA Negeri 1 Selat. Lepaskan kreativitasmu dan saksikan ekspresi berani dari para siswa dan seniman berbakat kami.',
        ]);

        Gallery::create([
            'image' => 'galeri-1.jpg',
            'title' => 'Image 1',
        ]);

        Gallery::create([
            'image' => 'galeri-2.jpg',
            'title' => 'Image 2',
        ]);

        Gallery::create([
            'image' => 'galeri-3.jpg',
            'title' => 'Image 3',
        ]);

        Gallery::create([
            'image' => 'galeri-4.jpg',
            'title' => 'Image 4',
        ]);

        Gallery::create([
            'image' => 'galeri-5.jpg',
            'title' => 'Image 5',
        ]);

        Gallery::create([
            'image' => 'galeri-6.jpg',
            'title' => 'Image 6',
        ]);

        Gallery::create([
            'image' => 'galeri-7.jpg',
            'title' => 'Image 7',
        ]);

        Gallery::create([
            'image' => 'galeri-8.jpg',
            'title' => 'Image 8',
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
            'nis' => '6130',
            'nisn' => '0065471181',
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
            'nis' => '4768',
            'nisn' => '797829542',
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
            'nis' => '8055',
            'nisn' => '862701208',
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
            'nis' => '2272',
            'nisn' => '973844481',
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
            'nis' => '8502',
            'nisn' => '495433817',
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
            'nis' => '8600',
            'nisn' => '744424024',
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
            'nis' => '3985',
            'nisn' => '749909383',
            'nama_lengkap' => 'Putra Kresna',
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
