<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{


    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'especie' => $this->faker->randomElement(['Perro', 'Gato', 'Tortuga']),
            'descripcion' => "Descripción de muestra",
            'fecha_nacimiento'=> fake()->dateTimeBetween('-10 years', 'now'),
            'user_id' => fake()->numberBetween(3, 7),

        ];
    }
}
