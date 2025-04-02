<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;
use App\Models\Responsable;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ResponsableTarea>
 */
class ResponsableTareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tarea_id' => Tarea::factory(),
            'responsable_id' => Responsable::factory(),
        ];
    }
}
