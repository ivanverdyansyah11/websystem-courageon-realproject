<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
