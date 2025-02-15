<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Muhidin', 'email' => 'muhidin@abudata.com', 'password' => bcrypt('muhidin')],
            ['name' => 'Muhidin S', 'email' => 'muhidins@abudata.com', 'password' => bcrypt('muhidin')],
            ['name' => 'Muhidin Saimin', 'email' => 'msaimin@abudata.com', 'password' => bcrypt('muhidin')],
        ];
        \App\Models\User::insert($data);

    }
}
