<?php

namespace Database\Seeders;

use App\Models\SectionContact;
use Illuminate\Database\Seeder;

class SectionContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionContact::create([
            'title_section' => 'Hubungi Kami',
            'url_maps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.576504957393!2d115.48273847492702!3d-8.44318009159662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2053a75a7b143%3A0x5e66d8200f7bf2a2!2sSMA%20Negeri%201%20Selat!5e0!3m2!1sid!2sid!4v1692022962270!5m2!1sid!2sid',
        ]);
    }
}
