<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypeAbonnementResource\Pages;
use App\Filament\Resources\TypeAbonnementResource\RelationManagers;
use App\Models\TypeAbonnement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TypeAbonnementResource extends Resource
{
    protected static ?string $model = TypeAbonnement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTypeAbonnements::route('/'),
            'create' => Pages\CreateTypeAbonnement::route('/create'),
            'edit' => Pages\EditTypeAbonnement::route('/{record}/edit'),
        ];
    }
}
