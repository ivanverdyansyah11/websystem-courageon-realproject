<?php

namespace Database\Seeders;

use App\Models\RemarkHome;
use Illuminate\Database\Seeder;

class RemarkHomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RemarkHome::create([
            'banner' => 'banner-sambutan.jpg',
            'title_remark' => 'Sambutan Dari Kepala Sekolah SMA Negeri 1 Selat',
            'message' => 'Puji Syukur kepada Tuhan Yang Maha Esa yang telah memberkati SMA Negeri 1 Selat sehingga boleh berkembang dan mendapat kepercayaan masyarakat. Berkomitmen meningkatkan mutu dan pelayanan, teguh dalam iman, berbudaya serta berwawasan lingkungan sehingga mampu menghasilkan lulusan yang siap terjun ke Dunia Usaha, Dunia Industri, dan Dunia Kerja serta memiliki jiwa enterpreneur, mandiri dan mampu berkompetisi di segala bidang.',
        ]);
    }
}
