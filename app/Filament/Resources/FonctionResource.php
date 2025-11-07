<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FonctionResource\Pages;
use App\Filament\Resources\FonctionResource\RelationManagers\AvocatsRelationManager;
use App\Models\Fonction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Spatie\Translatable\HasTranslations;
use Filament\Tables;
use Filament\Tables\Table;

class FonctionResource extends Resource
{
      use HasTranslations;
    protected static ?string $model = Fonction::class;

    protected static ?string $navigationIcon  = 'heroicon-o-briefcase';
    protected static ?string $navigationLabel = 'Fonctions';
    protected static ?string $modelLabel      = 'Fonction';
    protected static ?string $pluralModelLabel= 'Fonctions';
    protected static ?string $navigationGroup = 'Annuaire';

    public static function getTranslatableLocales(): array
    {
        return ['fr','en'];
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('fonction')
                ->label('Intitulé de la fonction')
                ->maxLength(255)
                ->required()

                ->helperText('Ex: Associé, Collaborateur, Stagiaire…'),
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('fonction')->label('Fonction')->searchable()->limit(40),
                Tables\Columns\TextColumn::make('updated_at')->label('MAJ')->dateTime('d/m/Y H:i'),
            ])
            ->defaultSort('fonction')
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getRelations(): array
    {
        return [
            AvocatsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListFonctions::route('/'),
            'create' => Pages\CreateFonction::route('/create'),
            'edit'   => Pages\EditFonction::route('/{record}/edit'),
        ];
    }
}
