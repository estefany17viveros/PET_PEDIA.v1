<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            // Clientes
            [
                'name' => 'María González',
                'email' => 'maria.gonzalez@email.com',
                'password' => Hash::make('password123'),
                'role_id' => 1,
                'image' => 'users/maria.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carlos Rodríguez',
                'email' => 'carlos.rodriguez@email.com',
                'password' => Hash::make('password123'),
                'role_id' => 1,
                'image' => 'users/carlos.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana Martínez',
                'email' => 'ana.martinez@email.com',
                'password' => Hash::make('password123'),
                'role_id' => 1,
                'image' => 'users/ana.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Veterinarias
            [
                'name' => 'Dr. Roberto Silva',
                'email' => 'roberto.silva@vetcare.com',
                'password' => Hash::make('password123'),
                'role_id' => 2,
                'image' => 'users/roberto.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dra. Laura Mendoza',
                'email' => 'laura.mendoza@animalclinic.com',
                'password' => Hash::make('password123'),
                'role_id' => 2,
                'image' => 'users/laura.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Entrenadores
            [
                'name' => 'Miguel Torres',
                'email' => 'miguel.torres@dogtrainer.com',
                'password' => Hash::make('password123'),
                'role_id' => 3,
                'image' => 'users/miguel.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Refugios
            [
                'name' => 'Refugio Patitas Felices',
                'email' => 'contacto@patitasfelices.org',
                'password' => Hash::make('password123'),
                'role_id' => 4,
                'image' => 'users/refugio1.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Administrador
            [
                'name' => 'Admin Sistema',
                'email' => 'admin@petsystem.com',
                'password' => Hash::make('admin123'),
                'role_id' => 5,
                'image' => 'users/admin.jpg',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}