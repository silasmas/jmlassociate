<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccueilResource\Pages;
use App\Models\Accueil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;

class AccueilResource extends Resource
{
    use HasTranslations;

    protected static ?string $model = Accueil::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationLabel = 'Accueil (Site)';
    protected static ?string $pluralModelLabel = 'Accueils';
    protected static ?string $modelLabel = 'Accueil';
    protected static ?string $navigationGroup = 'Site';

    /** Optionnel : limiter/ordonner les locales pour cette resource */
    public static function getTranslatableLocales(): array
    {
        return ['fr','en']; // doit correspondre aux locales du Panel
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Identité & Réseaux sociaux')
                    ->columns(3)
                    ->schema([
                        Forms\Components\TextInput::make('email')
                            ->email()->maxLength(255),
                        Forms\Components\TextInput::make('facebook')->url()->label('Facebook URL'),
                        Forms\Components\TextInput::make('tweeter')->url()->label('Twitter/X URL'),
                        Forms\Components\TextInput::make('linkedin')->url()->label('LinkedIn URL'),
                        Forms\Components\TextInput::make('google')->url()->label('Google/YouTube URL'),
                    ]),

                Forms\Components\Section::make('Menus / Liens rapides')
                    ->columns(4)
                    ->schema([
                        Forms\Components\TextInput::make('p1')->label('Menu P1')->maxLength(255),
                        Forms\Components\TextInput::make('p2')->label('Menu P2')->maxLength(255),
                        Forms\Components\TextInput::make('p3')->label('Menu P3')->maxLength(255),
                        Forms\Components\TextInput::make('p4')->label('Menu P4')->maxLength(255),

                        Forms\Components\TextInput::make('l1')->label('Lien L1')->maxLength(255),
                        Forms\Components\TextInput::make('l2')->label('Lien L2')->maxLength(255),
                        Forms\Components\TextInput::make('l3')->label('Lien L3')->maxLength(255),
                        Forms\Components\TextInput::make('l4')->label('Lien L4')->maxLength(255),
                    ]),

                Forms\Components\Section::make('Textes traduisibles')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Textarea::make('textsuivre')
                            ->label('Texte “Suivez-nous”')
                            ->rows(3)
                            ->helperText('Court texte d’accroche pour les réseaux sociaux.'),
                        Forms\Components\Textarea::make('adresse')
                            ->rows(3)
                            ->helperText('Adresse du cabinet (traduisible si besoin).'),
                        Forms\Components\Textarea::make('txtfooter')
                            ->label('Texte du pied de page')
                            ->rows(3),
                    ]),

                Forms\Components\Section::make('Équipe (bloc)')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('t1Team')
                            ->label('Titre 1 Équipe')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('t2Team')
                            ->label('Titre 2 Équipe')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('titreTeam')
                            ->label('Titre de section Équipe')
                            ->maxLength(255),
                        Forms\Components\Textarea::make('descriptionTeam')
                            ->label('Description Équipe')
                            ->rows(3),
                    ]),

                Forms\Components\Section::make('Publications (bloc)')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('t1Pub')
                            ->label('Titre 1 Publications')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('t2Pub')
                            ->label('Titre 2 Publications')
                            ->maxLength(255),
                    ]),

                Forms\Components\Section::make('Téléphones (liste)')
                    ->schema([
                        Forms\Components\Repeater::make('telphone')
                            ->label('Numéros')
                            ->schema([
                                Forms\Components\TextInput::make('value')
                                    ->label('Téléphone')
                                    ->tel()
                                    ->maxLength(30)
                                    ->helperText('Ex: +243 81 000 00 00'),
                                Forms\Components\TextInput::make('label')
                                    ->label('Libellé (optionnel)')
                                    ->maxLength(50)
                                    ->helperText('Ex: WhatsApp, Urgences, Secrétariat...'),
                            ])
                            ->collapsed()
                            ->grid(2)
                            ->itemLabel(fn (array $state) => $state['label'] ?? ($state['value'] ?? 'Téléphone'))
                            ->minItems(0)
                            ->addActionLabel('Ajouter un numéro'),
                    ]),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titreTeam')
                    ->label('Titre Équipe')
                    ->limit(40)
                    ->tooltip(fn ($record) => $record->getTranslation('titreTeam', app()->getLocale())),
                Tables\Columns\TextColumn::make('email')->icon('heroicon-m-envelope')->toggleable(),
                Tables\Columns\TextColumn::make('facebook')->label('FB')->limit(20)->toggleable(),
                Tables\Columns\TextColumn::make('telphone')
                    ->label('Téléphones')
                    ->formatStateUsing(fn ($state) => is_array($state) ? collect($state)->pluck('value')->filter()->join(' • ') : '')
                    ->wrap()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime('d/m/Y H:i')->label('MAJ'),
            ])
            ->defaultSort('updated_at', 'desc')
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListAccueils::route('/'),
            'create' => Pages\CreateAccueil::route('/create'),
            'edit'   => Pages\EditAccueil::route('/{record}/edit'),
        ];
    }
}
