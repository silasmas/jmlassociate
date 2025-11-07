<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Models\Categorie;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Spatie\Translatable\HasTranslations;
use Filament\Tables;
use Filament\Tables\Table;

class CategoryResource extends Resource
{
    use HasTranslations;

    protected static ?string $model = Categorie::class;

    protected static ?string $navigationIcon  = 'heroicon-o-tag';
    protected static ?string $navigationLabel = 'Catégories';
    protected static ?string $modelLabel      = 'Catégorie';
    protected static ?string $pluralModelLabel= 'Catégories';
    protected static ?string $navigationGroup = 'Site';

    public static function getTranslatableLocales(): array
    {
        return ['fr','en'];
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informations')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('nom')
                        ->label('Nom')
                        ->maxLength(255)
                        ->required()
                         ,
                    Forms\Components\Textarea::make('description')
                        ->label('Description')
                        ->rows(4)
                         ,
                ]),
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nom')->label('Nom')->limit(40)->searchable(),
                Tables\Columns\TextColumn::make('updated_at')->label('MAJ')->dateTime('d/m/Y H:i'),
            ])
            ->defaultSort('updated_at','desc')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit'   => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
