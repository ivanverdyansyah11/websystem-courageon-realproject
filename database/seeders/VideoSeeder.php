<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'link' => 'https://www.youtube.com/embed/D0UnqGm_miA?si=iZkOKj3FrwbuWIaY',
        ]);
    }
}
