<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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
    }
}
