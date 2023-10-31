<?php

namespace Database\Seeders;

use App\Models\RoleEmployee;
use Illuminate\Database\Seeder;

class RoleEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleEmployee::create([
            'role' => 'management',
        ]);

        RoleEmployee::create([
            'role' => 'teacher',
        ]);

        RoleEmployee::create([
            'role' => 'employee',
        ]);
    }
}
