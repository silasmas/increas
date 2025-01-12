<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class GenerateAllFilamentResources extends Command
{
    protected $signature = 'filament:generate-resources';
    protected $description = 'Generate Filament resources for all models in the app/Models directory';


    public function handle()
    {
        // Chemin vers les modèles
        $modelPath = app_path('Models');
        $models = collect(File::files($modelPath))->map(function ($file) {
            return pathinfo($file->getFilename(), PATHINFO_FILENAME);
        });

        // Générer une ressource pour chaque modèle
        foreach ($models as $model) {
            $this->info("Generating resource for model: $model");

            $this->callSilent('make:filament-resource', [
                'name' => $model,
            ]);
        }

        $this->info('All Filament resources have been generated successfully!');
    }
}
