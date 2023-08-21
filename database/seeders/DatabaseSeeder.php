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



        SectionTeacher::create([
            'title_section' => 'Data Guru SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
        ]);


        SectionStaff::create([
            'title_section' => 'Data Pegawai SMA Negeri 1 Selat',
            'button' => 'Lihat Semua',
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

        SectionDenah::create([
            'title_section' => 'Kode Denah',
            'title_code' => 'Kode Ruangan',
            'title_room' => 'Nama Ruangan',
            'button' => 'Detail',
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
            'description' => 'Sejumlah alumni terbaik dari sekolah kami. Dari berbagai latar belakang dan jurusan studi, alumni kami telah mencapai kesuksesan dalam berbagai bidang profesi.',
        ]);


    }
}
