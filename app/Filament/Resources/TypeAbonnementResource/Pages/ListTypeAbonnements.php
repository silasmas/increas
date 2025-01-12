<?php

namespace App\Filament\Resources\TypeAbonnementResource\Pages;

use App\Filament\Resources\TypeAbonnementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypeAbonnements extends ListRecords
{
    protected static string $resource = TypeAbonnementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
