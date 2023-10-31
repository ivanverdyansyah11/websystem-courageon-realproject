<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
