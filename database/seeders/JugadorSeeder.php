<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jugador;

class JugadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jugador::create(['nombre' => 'Sergio Ramos', 'posicion' => 'defensa', 'dorsal' => 4]);
        Jugador::create(['nombre' => 'Isco Alarcón', 'posicion' => 'mediocentro', 'dorsal' => 22]);
        Jugador::create(['nombre' => 'Joaquín Sanchez', 'posicion' => 'delantero', 'dorsal' => 17]);
        Jugador::create(['nombre' => 'Jesús Navas', 'posicion' => 'defensa', 'dorsal' => 2]);
        Jugador::create(['nombre' => 'Fabio Cannavaro', 'posicion' => 'portero', 'dorsal' => 1]);
    }
}
