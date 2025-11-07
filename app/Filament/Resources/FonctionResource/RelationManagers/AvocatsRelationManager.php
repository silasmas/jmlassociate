<?php

namespace App\Filament\Resources\FonctionResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Resources\RelationManagers\RelationManager;

class AvocatsRelationManager extends RelationManager
{
    protected static string $relationship = 'avocats';
    protected static ?string $title = 'Avocats';

    public function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('prenom')->required()->maxLength(255),
            Forms\Components\TextInput::make('nom')->required()->maxLength(255),
            Forms\Components\Select::make('sexe')
                ->options(['M' => 'Masculin', 'F' => 'Féminin'])
                ->required(),
            Forms\Components\DatePicker::make('datenaissance')->label('Date de naissance'),
            Forms\Components\TextInput::make('telephone')->tel()->required()->maxLength(255),
            Forms\Components\TextInput::make('email')->email()->maxLength(255),
            Forms\Components\RichEditor::make('biographie')->columnSpanFull(),
            Forms\Components\FileUpload::make('photo')->image()->directory('avocats')->disk('public')->imageEditor(),
            Forms\Components\FileUpload::make('pdfbio')->label('Biographie (PDF)')
                ->acceptedFileTypes(['application/pdf'])
                ->directory('avocats/pdf')->disk('public'),
            Forms\Components\Select::make('niveau')
                ->options(['1' => 'Niveau 1', '2' => 'Niveau 2'])
                ->required(),
        ])->columns(2);
    }

    public function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')->label('Photo')->square()->height(48),
                Tables\Columns\TextColumn::make('prenom')->label('Prénom')->searchable(),
                Tables\Columns\TextColumn::make('nom')->label('Nom')->searchable(),
                Tables\Columns\TextColumn::make('sexe')->badge()->formatStateUsing(fn($s) => $s === 'F' ? 'Féminin' : 'Masculin'),
                Tables\Columns\TextColumn::make('niveau')->badge(),
                Tables\Columns\TextColumn::make('telephone')->label('Téléphone')->limit(18),
                Tables\Columns\TextColumn::make('email')->label('Email')->limit(22),
            ])
            ->headerActions([Tables\Actions\CreateAction::make()])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }
}
