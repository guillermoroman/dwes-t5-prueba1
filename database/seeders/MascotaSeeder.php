<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mascota;

class MascotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mascota::create([
            'nombre' => 'Ikea',
            'especie' => 'Gato',
            'descripcion' => 'Blanco y negro',
            'fecha_nacimiento' => '2021-01-01',
            'user_id' => 1,
        ]);
        Mascota::create([
            'nombre' => 'Mingo',
            'especie' => 'Gato',
            'descripcion' => 'Gris',
            'fecha_nacimiento' => '2021-01-01',
            'user_id' => 1,
        ]);
        Mascota::create([
            'nombre' => 'Silver',
            'especie' => 'Conejo',
            'descripcion' => 'Marrón',
            'fecha_nacimiento' => '2021-01-01',
            'user_id' => 2,
        ]);
    }
}
