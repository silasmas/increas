<?php

namespace App\Filament\Resources\FavorieResource\Pages;

use App\Filament\Resources\FavorieResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFavories extends ListRecords
{
    protected static string $resource = FavorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
