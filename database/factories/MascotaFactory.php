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
            'nombre' => $this->fake()->firstName(),
            'especie' => $this->fake()->randomElement(['Perro', 'Gato', 'Tortuga']),
            'descripcion' => "Descripción de muestra",
            'fecha_nacimiento'=> $this->fake()->dateTimeBetween('-10 years', 'now')

        ];
    }
}
