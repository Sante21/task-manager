<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClienteTarea;

class ClienteTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ClienteTarea::factory()->count(10)->create();
        ClienteTarea::create(['tarea_id' => 1, 'cliente_id' => 1]);
        ClienteTarea::create(['cliente_id' => 2, 'tarea_id' => 2]);
        ClienteTarea::create(['cliente_id' => 3, 'tarea_id' => 3]);
        ClienteTarea::create(['cliente_id' => 4, 'tarea_id' => 4]);
        ClienteTarea::create(['cliente_id' => 5, 'tarea_id' => 5]);
        ClienteTarea::create(['cliente_id' => 6, 'tarea_id' => 6]);

    }
}
