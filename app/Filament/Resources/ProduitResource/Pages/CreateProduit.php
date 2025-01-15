<?php

namespace App\Filament\Resources\ProduitResource\Pages;

use App\Filament\Resources\ProduitResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduit extends CreateRecord
{
    protected static string $resource = ProduitResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirige vers la page d'index de la ressource
    }
}
