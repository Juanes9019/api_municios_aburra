<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciudades')->insert([
            ['nombre' => 'Medellín'],
            ['nombre' => 'Envigado'],
            ['nombre' => 'Itagüí'],
            ['nombre' => 'Sabaneta'],
            ['nombre' => 'Bello'],
            ['nombre' => 'La Estrella'],
            ['nombre' => 'Caldas'],
            ['nombre' => 'Girardota'],
            ['nombre' => 'Copacabana'],
            ['nombre' => 'Barbosa'],
            ['nombre' => 'San Jerónimo'],
            ['nombre' => 'Santa Fé de Antioquia'],
            ['nombre' => 'Angostura'],
            ['nombre' => 'San Pedro de los Milagros'],
            ['nombre' => 'San Vicente'],
            ['nombre' => 'Guarne'],
            ['nombre' => 'Rionegro'],
            ['nombre' => 'Marinilla'],
            ['nombre' => 'La Ceja'],
            ['nombre' => 'La Unión'],
            ['nombre' => 'El Retiro'],
            ['nombre' => 'El Carmen de Viboral'],
        ]);
    }
}
