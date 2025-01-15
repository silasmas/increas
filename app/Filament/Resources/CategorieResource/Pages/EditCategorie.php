<?php

namespace App\Filament\Resources\CategorieResource\Pages;

use App\Filament\Resources\CategorieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategorie extends EditRecord
{
    protected static string $resource = CategorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index'); // Redirige vers la page d'index de la ressource

}
protected function beforeSave()
    {
        // Accès à l'image via $this->data
        if (isset($this->data['image'])) {
            $this->record->image = $this->data['image']; // Enregistre l'image dans la base de données
        }
    }
}
