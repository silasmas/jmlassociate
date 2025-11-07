<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvocatResource\Pages;
use App\Models\Avocat;
use App\Models\Fonction;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Spatie\Translatable\HasTranslations;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class AvocatResource extends Resource
{
    use HasTranslations;

    protected static ?string $model = Avocat::class;

    protected static ?string $navigationIcon  = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Avocats';
    protected static ?string $modelLabel      = 'Avocat';
    protected static ?string $pluralModelLabel= 'Avocats';
    protected static ?string $navigationGroup = 'Annuaire';

    public static function getTranslatableLocales(): array
    {
        return ['fr','en'];
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Identité')
                ->columns(3)
                ->schema([
                    Forms\Components\TextInput::make('prenom')->label('Prénom')->required()->maxLength(255),
                    Forms\Components\TextInput::make('nom')->label('Nom')->required()->maxLength(255),
                    Forms\Components\Select::make('sexe')
                        ->options(['M' => 'Masculin', 'F' => 'Féminin'])
                        ->required(),

                    Forms\Components\DatePicker::make('datenaissance')
                        ->label('Date de naissance')
                        ->native(false) // optionnel
                        ->closeOnDateSelection()
                        ->displayFormat('dd/MM/yyyy'),

                    Forms\Components\TextInput::make('telephone')->tel()->required()->maxLength(255),
                    Forms\Components\TextInput::make('email')->email()->maxLength(255),
                ]),

            Forms\Components\Section::make('Statut & Fonction')
                ->columns(2)
                ->schema([
                    Forms\Components\Select::make('fonction_id')
                        ->label('Fonction')
                        ->relationship('fonction', 'fonction') // Spatie renvoie la traduction de la locale active
                        ->searchable()
                        ->preload()
                        ->required(),

                    Forms\Components\Select::make('niveau')
                        ->label('Niveau')
                        ->options(['1' => 'Niveau 1', '2' => 'Niveau 2'])
                        ->required()
                        ->helperText('Adapte l’intitulé (ex.: Associé/Collaborateur) si besoin.'),
                ]),

            Forms\Components\Section::make('Médias')
                ->columns(2)
                ->schema([
                    Forms\Components\FileUpload::make('photo')
                        ->label('Photo')
                        ->image()
                        ->directory('avocats')
                        ->disk('public')
                        ->imageEditor(),

                    Forms\Components\FileUpload::make('pdfbio')
                        ->label('Biographie (PDF)')
                        ->acceptedFileTypes(['application/pdf'])
                        ->directory('avocats/pdf')
                        ->disk('public'),
                ]),

            Forms\Components\Section::make('Biographie')
                ->schema([
                    Forms\Components\RichEditor::make('biographie')
                        ->label('Biographie (multilingue)')
                        ->toolbarButtons(['bold','italic','underline','strike','h2','h3','blockquote','orderedList','bulletList','link'])
                        ->columnSpanFull()
                         ,
                ]),
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')->label('Photo')->square()->height(48),
                Tables\Columns\TextColumn::make('prenom')->label('Prénom')->searchable(),
                Tables\Columns\TextColumn::make('nom')->label('Nom')->searchable(),
                Tables\Columns\TextColumn::make('fonction.fonction')->label('Fonction')->badge()->searchable(),
                Tables\Columns\TextColumn::make('sexe')->badge()->formatStateUsing(fn($state) => $state === 'F' ? 'Féminin' : 'Masculin'),
                Tables\Columns\TextColumn::make('niveau')->badge(),
                Tables\Columns\TextColumn::make('telephone')->label('Téléphone')->limit(18),
                Tables\Columns\TextColumn::make('email')->label('Email')->limit(22),
                Tables\Columns\TextColumn::make('updated_at')->label('MAJ')->dateTime('d/m/Y H:i')->toggleable(),
            ])
            ->defaultSort('nom')
            ->filters([
                SelectFilter::make('fonction_id')
                    ->label('Fonction')
                    ->relationship('fonction','fonction'),
                SelectFilter::make('sexe')->options(['M' => 'Masculin', 'F' => 'Féminin']),
                SelectFilter::make('niveau')->options(['1' => 'Niveau 1', '2' => 'Niveau 2']),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    /** (optionnel) Recherche globale dans Filament */
    public static function getGloballySearchableAttributes(): array
    {
        return ['prenom', 'nom', 'telephone', 'email', 'fonction.fonction'];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListAvocats::route('/'),
            'create' => Pages\CreateAvocat::route('/create'),
            'edit'   => Pages\EditAvocat::route('/{record}/edit'),
        ];
    }
}
