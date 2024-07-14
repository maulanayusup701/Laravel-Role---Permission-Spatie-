<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'suadmin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $viewer = User::create([
            'name' => 'Viwer',
            'email' => 'viwer@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $suAdmin->assignRole('Super Admin');
        $viewer->assignRole('Viewer');
    }
}
