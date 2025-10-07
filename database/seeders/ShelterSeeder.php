<?php

namespace Database\Seeders;

use App\Models\Shelter;
use App\Models\User;
use Illuminate\Database\Seeder;

class ShelterSeeder extends Seeder
{
    public function run(): void
    {
        $shelters = [
            [
                'name' => 'Refugio Patitas Felices',
                'email' => 'info@patitasfelices.com',
                'phone' => '+34 911 234 567',
                'address' => 'Carretera Norte km 5, 28001 Madrid',
                'description' => 'Refugio dedicado al rescate y adopción de perros y gatos abandonados. Contamos con más de 10 años de experiencia.',
                'user_id' => User::where('email', 'refugio@patitasfelices.com')->first()->id
            ],
            [
                'name' => 'Hogar Animal Rescue',
                'email' => 'adopciones@hogaranimal.com',
                'phone' => '+34 922 345 678',
                'address' => 'Camino Viejo 123, 08001 Barcelona',
                'description' => 'Organización sin ánimo de lucro que rescata animales en situación de abandono y maltrato.',
                'user_id' => User::where('email', 'info@hogaranimal.com')->first()->id
            ],
            [
                'name' => 'Amigos de los Animales',
                'email' => 'contacto@amigosanimales.org',
                'phone' => '+34 933 456 789',
                'address' => 'Avenida del Parque 45, 46001 Valencia',
                'description' => 'Asociación protectora de animales fundada en 2005. Más de 5000 adopciones realizadas.',
                'user_id' => User::where('role', 'admin')->inRandomOrder()->first()->id
            ]
        ];

        foreach ($shelters as $shelter) {
            Shelter::create($shelter);
        }
    }
}