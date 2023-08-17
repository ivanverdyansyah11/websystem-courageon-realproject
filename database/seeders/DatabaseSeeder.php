<?php

namespace Database\Seeders;

use App\Models\Auth;
use App\Models\Employee;
use App\Models\HeaderHome;
use App\Models\HeaderProfile;
use App\Models\HistoryHome;
use App\Models\Logo;
use App\Models\Mars;
use App\Models\Motto;
use App\Models\OpeningHome;
use App\Models\RemarkHome;
use App\Models\RoleEmployee;
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
            'banner' => 'profil-images/header-image/banner-header.jpg',
            'title_header' => 'Profile Dan informasi mengenai sekolah courgaeon',
            'description' => 'Courageon School adalah sekolah swasta yang terletak di Kota Bahagia. Kami didirikan dengan tekad kuat untuk menciptakan lingkungan pendidikan yang inspiratif dan inklusif bagi setiap siswa. Visi kami adalah membentuk generasi pemberani, cerdas, dan berdaya saing yang siap menghadapi tantangan dunia global.',
        ]);

        VisionMission::create([
            'banner' => 'profil-images/visi-misi-image/banner-visi-misi.jpg',
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
            'logo' => 'logo-brand/logo-brand.png',
            'logo_meaning' => 'Buku dalam logo menggambarkan komitmen sekolah untuk memberikan pendidikan yang berkualitas tinggi kepada siswa. Ini mengandung pesan bahwa sekolah adalah tempat belajar dan pengetahuan yang didorong untuk membekali siswa dengan bekal yang kuat untuk masa depan.',
            'font_meaning' => 'Penggunaan font sans serif capitalize menunjukkan kesan modern dan progresif dari sekolah tersebut. Logo ini ingin menyampaikan bahwa sekolah memiliki pendekatan yang inovatif dalam pendidikan dan selalu berada di garis depan perkembangan pendidikan.',
            'color_meaning' => 'Warna biru tua sering dikaitkan dengan keberlanjutan dan konsistensi. Logo ini ingin menyampaikan bahwa sekolah memiliki dedikasi yang kuat untuk memberikan pendidikan berkualitas dan berkomitmen untuk mencapai tujuan jangka panjang.',
        ]);

        Mars::create([
            'banner' => 'profil-images/mars-image/banner-mars.jpg',
            'title_section' => 'Mars Sekolah courageon',
            'mars' => '',
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

        Employee::create([
            'role_employees_id' => '1',
            'fullname' => 'I Komang Wirasatya',
            'image' => 'profil-images/manajemen-image/sample-manajemen.jpg',
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
    }
}
