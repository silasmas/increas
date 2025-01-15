<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Produit;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Wizard\Step;
use App\Filament\Resources\ProduitResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProduitResource\RelationManagers;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Support\Markdown;

class ProduitResource extends Resource
{
    protected static ?string $model = Produit::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Section::make('Information de base')->schema([
                        TextInput::make('title')
                            ->label("Nom")
                            ->required()
                            ->placeholder("Le nom du produit")
                            ->live(true)
                            ->afterStateUpdated(fn(string $operation, $state, Set $set) =>
                            $operation === 'create' ? $set('slug', Str::slug($state)) : null),
                        TextInput::make('slug')
                            ->required()
                            ->disabled()
                            ->dehydrated()
                            ->unique(Produit::class, 'slug', ignoreRecord: true),
                        TextInput::make('price')
                            ->required()
                            ->numeric(),
                        Select::make('curency')
                            ->columnSpan(4)
                            ->options([
                                'CDF' => 'Homme',
                                'USD' => 'Femme',
                            ]),
                    ]),
                    Section::make('Description')->schema([
                        MarkdownEditor::make('moreDescription')
                            ->label("Description")
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory("produits"),
                        MarkdownEditor::make('additionalInfos')
                            ->label('Plus de description')
                            ->columnSpanFull()
                            ->fileAttachmentsDirectory("produits"),
                    ])->columns(12)
                ])->columnSpan(2),
                Group::make([
                    Section::make('Image')->schema([
                        FileUpload::make('image_urls')
                            ->label('Images :')
                            ->required()
                            ->imageEditorMode(2)
                            ->downloadable()
                            ->visibility('private')
                            ->image()
                            ->multiple()
                            ->maxSize(3024)
                            ->previewable(true)
                            ->maxFiles(5)
                            ->directory('produits'),
                        FileUpload::make('thumbnail_path')
                            ->label('Image de miniature :')
                            ->required()
                            ->directory('thumbnail'),
                    ]),
                    Section::make('Associé')->schema([
                        Select::make("category_id")
                        ->label("Catégorie")
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship("categorie","name"),
                    ]),
                    Section::make('Etat')->schema([
                        Toggle::make('isAvalable')
                        ->label('Est disponible')
                        ->default(false),
                        Toggle::make('isBestseler')
                        ->label('Produit populaire')
                        ->default(false),
                        Toggle::make('isNewArivale')
                        ->label('Nouveau produit')
                        ->default(false),
                        Toggle::make('isFeatured')
                        ->label('À la une')
                        ->default(false),
                        Toggle::make('isSpecialOffer')
                        ->label('Promotion')
                        ->default(false)
                    ])
                ])->columnSpan(1),
            ])->columns(3);
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
            'index' => Pages\ListProduits::route('/'),
            'create' => Pages\CreateProduit::route('/create'),
            'edit' => Pages\EditProduit::route('/{record}/edit'),
        ];
    }
}
