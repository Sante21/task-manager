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
        DB::table('responsables')->insert(['name' => 'Iker', 'cargo' => 'Web', 'user_id' => '2']);
        DB::table('responsables')->insert(['name' => 'Ayna', 'cargo' => 'Marketing', 'user_id' => '4']);
        DB::table('responsables')->insert(['name' => 'Eloi', 'cargo' => 'Marketing', 'user_id' => '5']);
        DB::table('responsables')->insert(['name' => 'Elena', 'cargo' => 'Marketing', 'user_id' => '6']);
    }
}
