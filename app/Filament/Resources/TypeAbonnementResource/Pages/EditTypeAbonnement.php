<?php

namespace App\Filament\Resources\TypeAbonnementResource\Pages;

use App\Filament\Resources\TypeAbonnementResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypeAbonnement extends EditRecord
{
    protected static string $resource = TypeAbonnementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
