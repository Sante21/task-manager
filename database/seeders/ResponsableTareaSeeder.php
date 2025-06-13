<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ResponsableTarea;

class ResponsableTareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ResponsableTarea::factory()->count(10)->create();
        ResponsableTarea::create(['responsable_id' => 1, 'tarea_id' => 1]);
        ResponsableTarea::create(['responsable_id' => 2, 'tarea_id' => 2]);
        ResponsableTarea::create(['responsable_id' => 3, 'tarea_id' => 3]);
        ResponsableTarea::create(['responsable_id' => 4, 'tarea_id' => 4]);
        ResponsableTarea::create(['responsable_id' => 1, 'tarea_id' => 5]);
        ResponsableTarea::create(['responsable_id' => 2, 'tarea_id' => 6]);
        ResponsableTarea::create(['responsable_id' => 3, 'tarea_id' => 7]);
        ResponsableTarea::create(['responsable_id' => 4, 'tarea_id' => 8]);
    }
}
