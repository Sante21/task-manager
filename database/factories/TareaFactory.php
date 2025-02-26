<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarea>
 */
class TareaFactory extends Factory
{

    protected $model = Tarea::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->paragraph(),
            'priority' => $this->faker->randomElement(['baja', 'media', 'alta']),
            'tag' => $this->faker->randomElement(['web', 'redes', 'newsletter']),
            'limit_date' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
