<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@adminsena.com',
            'password' => Hash::make('Admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Instructor',
            'email' => 'instructor@adminsena.com',
            'password' => Hash::make('Instructor123'),
            'role' => 'instructor',
        ]);

        User::create([
            'name' => 'Aprendiz',
            'email' => 'aprendiz@adminsena.com',
            'password' => Hash::make('Aprendiz123'),
            'role' => 'apprentice',
        ]);
    }
}
