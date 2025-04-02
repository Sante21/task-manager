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
        // User::factory()->count(9)->create();
        User::create([
            'name' => 'Iker Sanchez',
            'email' => 'ikersan2005@gmail.com',
            'rol' => 'admin',
            'password' => bcrypt('12345678'),  // Contraseña encriptada
        ]);
        User::create([
            'name' => 'Iker Sanchez',
            'email' => 'desarrollo.web@jovitecdigital.es',
            'password' => bcrypt('12345678'),  // Contraseña encriptada
        ]);
        User::create([
            'name' => 'Grupo Jovitec',
            'email' => 'grupojovitec@gmail.com',
            'password' => bcrypt('J0vi_2@25'),  // Contraseña encriptada
        ]);
        User::create([
            'name' => 'Aynabel Llort',
            'email' => 'aynabel.llort@jovitec.es',
            'password' => bcrypt('aynA_4322'),  // Contraseña encriptada
        ]);
        User::create([
            'name' => 'Eloi Dominguez',
            'email' => 'eloidominguez@gmail.com',
            'password' => bcrypt('El0i-951'),  // Contraseña encriptada
        ]);
        User::create([
            'name' => 'Elena Ferndandez',
            'email' => 'elena.fernandez@jovitec.es',
            'password' => bcrypt('eLen4-357'),  // Contraseña encriptada
        ]);
    }
}
