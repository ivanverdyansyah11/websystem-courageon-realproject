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
        $this->call(HeaderStudentSeeder::class);
        $this->call(HistoryKenaikanSiswaSeeder::class);
        $this->call(IndexSeeder::class);
        $this->call(JurusanSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(KenaikanKelasSeeder::class);
        $this->call(SectionGraduationSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(TahunAjaranSeeder::class);
        $this->call(AlumniSeeder::class);
        $this->call(BeasiswaSeeder::class);
        $this->call(BeasiswaPenerimaSeeder::class);
        $this->call(ExtracurricularSeeder::class);
        $this->call(KategoriPrestasiSeeder::class);
        $this->call(PelayananKarirSeeder::class);
        $this->call(PembinaanSiswaSeeder::class);
        $this->call(PrestasiSeeder::class);
        $this->call(SectionAchievementSeeder::class);
        $this->call(SectionAlumniSeeder::class);
        $this->call(SectionBeasiswaSeeder::class);
        $this->call(SectionExtracurricularSeeder::class);
        $this->call(SectionServiceSeeder::class);
        $this->call(SectionStudentSeeder::class);
        $this->call(StudentSeeder::class);





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
