<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Responsable;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Responsable::factory()->count(4)->create();
        DB::table('responsables')->insert(['name' => 'Iker', 'cargo' => 'Web', 'image' => 'images/responsables/Iker.jpeg']);
        DB::table('responsables')->insert(['name' => 'Ayna', 'cargo' => 'Marketing', 'image' => 'images/responsables/Ayna.jpeg']);
        DB::table('responsables')->insert(['name' => 'Eloi', 'cargo' => 'Marketing', 'image' => 'images/responsables/Eloi.jpeg']);
        DB::table('responsables')->insert(['name' => 'Elena', 'cargo' => 'Marketing', 'image' => 'images/responsables/Elena.jpeg']);
    }
}
