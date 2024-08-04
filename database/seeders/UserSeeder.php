<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['email' => 'admin@gmail.com', 'password' => bcrypt('admin'), 'name' => 'Admin'],
            ['email' => 'ptmegahjayamandiri@gmail.com', 'password' => bcrypt('Ptmegahjayamandiri'), 'name' => 'PT Megah Jaya Mandiri'],
            ['email' => 'ptmegahjaya@yahoo.com', 'password' => bcrypt('Ptmegahjayayahoo'), 'name' => 'PT Megah Jaya Mandiri'],
        ];
        
        foreach ($data as $value) {
            User::insert([
                'email' => $value['email'],
                'password' => $value['password'],
                'name' => $value['name'],
            ]);
        }
    }
}
