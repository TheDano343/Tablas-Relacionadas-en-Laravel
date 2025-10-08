<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->name(),
            'ApellidoPaterno' => $this->faker->name(),
            'ApellidoMaterno' => $this->faker->name(),
            'CorreoElectronico' => $this->faker->safeEmail(),
            'CedulaProfesional' => $this->faker->randomNumber(5),
            'CURP' => $this->faker->randomNumber(5),
            'materia_id' => $this->faker->numberBetween(1,100)
        ];
    }
}
