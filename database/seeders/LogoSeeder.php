<?php

namespace Database\Seeders;

use App\Models\Logo;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logo::create([
            'logo' => 'brand-logo.png',
            'logo_meaning' => 'Buku dalam logo menggambarkan komitmen sekolah untuk memberikan pendidikan yang berkualitas tinggi kepada siswa. Ini mengandung pesan bahwa sekolah adalah tempat belajar dan pengetahuan yang didorong untuk membekali siswa dengan bekal yang kuat untuk masa depan.',
            'font_meaning' => 'Penggunaan font sans serif capitalize menunjukkan kesan modern dan progresif dari sekolah tersebut. Logo ini ingin menyampaikan bahwa sekolah memiliki pendekatan yang inovatif dalam pendidikan dan selalu berada di garis depan perkembangan pendidikan.',
            'color_meaning' => 'Warna biru tua sering dikaitkan dengan keberlanjutan dan konsistensi. Logo ini ingin menyampaikan bahwa sekolah memiliki dedikasi yang kuat untuk memberikan pendidikan berkualitas dan berkomitmen untuk mencapai tujuan jangka panjang.',
        ]);
    }
}
