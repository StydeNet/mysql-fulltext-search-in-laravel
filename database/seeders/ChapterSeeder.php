<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chapter::factory()->create([
            'title' => 'Primeros pasos con bases de datos',
            'content' => 'El manejo de bases de datos se hace utilizando Eloquent, el constructor de consultas, o SQL puro',
        ]);

        Chapter::factory()->create([
            'title' => 'Pruebas',
            'content' => 'Laravel es construido pensando en las pruebas.',
        ]);

        Chapter::factory()->create([
            'title' => 'Eloquent',
            'content' => 'Es una interaz active record incluida con Laravel donde un modelo es definido para acceder a una tabla.',
        ]);

        Chapter::factory()->create([
            'title' => 'Relationships',
            'content' => 'Eloquent permite que podamos accesar la información de los vínculos entre las tablas.',
        ]);

        Chapter::factory()->create([
            'title' => 'Http tests',
            'content' => 'Laravel proporciona toda una API que permite hacer solicitudes a tu aplicación e inspeccionar la salida.',
        ]);

        Chapter::factory()->create([
            'title' => 'El constructor de consultas',
            'content' => 'Interface para crear y ejecutar consultas por medio de métodos poderosos que sustituyen los comandos SQL',
        ]);
    }
}
