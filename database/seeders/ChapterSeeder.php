<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
            'title' => 'Instalación de Laravel',
            'content' => Storage::get('docs/installation.md'),
        ]);

        Chapter::factory()->create([
            'title' => 'Configuración de Laravel',
            'content' => Storage::get('docs/configuration.md'),
        ]);

        Chapter::factory()->create([
            'title' => 'Estructura de directorios de un proyecto en Laravel',
            'content' => Storage::get('docs/structure.md'),
        ]);

        Chapter::factory()->create([
            'title' => 'Laravel Valet',
            'content' => Storage::get('docs/valet.md'),
        ]);

        Chapter::factory()->create([
            'title' => 'Ciclo de vida de una solicitud http',
            'content' => Storage::get('docs/lifecycle.md'),
        ]);

        Chapter::factory()->create([
            'title' => 'El contenedor de servicios',
            'content' => Storage::get('docs/container.md'),
        ]);

        Chapter::factory(10)->create();
    }
}
