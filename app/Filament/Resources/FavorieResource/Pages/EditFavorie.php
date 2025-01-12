<?php

namespace App\Filament\Resources\FavorieResource\Pages;

use App\Filament\Resources\FavorieResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFavorie extends EditRecord
{
    protected static string $resource = FavorieResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
