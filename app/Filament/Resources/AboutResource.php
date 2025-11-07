<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutResource\Pages;
use App\Models\About;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Spatie\Translatable\HasTranslations;
use Filament\Tables;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    use HasTranslations;

    protected static ?string $model = About::class;

    protected static ?string $navigationIcon  = 'heroicon-o-information-circle';
    protected static ?string $navigationLabel = 'À propos';
    protected static ?string $modelLabel      = 'À propos';
    protected static ?string $pluralModelLabel= 'Blocs À propos';
    protected static ?string $navigationGroup = 'Site';

    public static function getTranslatableLocales(): array
    {
        return ['fr','en']; // aligne avec ton PanelProvider
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Identité du cabinet')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('titrecabinet')
                        ->label('Titre de section (Cabinet)')
                        ->maxLength(255)
                        ->required()
                         ,
                    Forms\Components\TextInput::make('slogant')
                        ->label('Slogan')
                        ->maxLength(255)
                         ,
                    Forms\Components\Textarea::make('quisommenous')
                        ->label('Qui sommes-nous')
                        ->rows(3)

                        ->helperText('Texte de présentation court.'),
                    Forms\Components\RichEditor::make('contenu')
                        ->label('Contenu')
                        ->toolbarButtons(['bold','italic','underline','strike','h2','h3','blockquote','orderedList','bulletList','link'])
                        ->columnSpanFull()
                         ,
                ]),

            Forms\Components\Section::make('Bénéfices & Valeurs')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('titreNosValeurs')
                        ->label('Titre : Nos valeurs')
                        ->maxLength(255)
                         ,
                    Forms\Components\TextInput::make('titreBeneficesmall')
                        ->label('Titre bénéfice (petit)')
                        ->maxLength(255)
                         ,
                    Forms\Components\TextInput::make('titrebigbenefice')
                        ->label('Titre bénéfice (grand)')
                        ->maxLength(255)
                         ,
                    Forms\Components\Textarea::make('resume')
                        ->label('Résumé')
                        ->rows(3)
                         ,

                    // 5 puces (b1..b5) et leurs résumés (r1..r5)
                    Forms\Components\Fieldset::make('Bénéfices (puces)')
                        ->columns(2)
                        ->schema([
                            Forms\Components\TextInput::make('b1')->label('Bénéfice 1')->maxLength(255) ,
                            Forms\Components\Textarea::make('r1')->label('Résumé 1')->rows(2) ,
                            Forms\Components\TextInput::make('b2')->label('Bénéfice 2')->maxLength(255) ,
                            Forms\Components\Textarea::make('r2')->label('Résumé 2')->rows(2) ,
                            Forms\Components\TextInput::make('b3')->label('Bénéfice 3')->maxLength(255) ,
                            Forms\Components\Textarea::make('r3')->label('Résumé 3')->rows(2) ,
                            Forms\Components\TextInput::make('b4')->label('Bénéfice 4')->maxLength(255) ,
                            Forms\Components\Textarea::make('r4')->label('Résumé 4')->rows(2) ,
                            Forms\Components\TextInput::make('b5')->label('Bénéfice 5')->maxLength(255) ,
                            Forms\Components\Textarea::make('r5')->label('Résumé 5')->rows(2) ,
                        ]),
                ]),

            Forms\Components\Section::make('Médias & chiffres')
                ->columns(2)
                ->schema([
                    Forms\Components\FileUpload::make('photohome')
                        ->label('Photo (home)')
                        ->image()->imageEditor()
                        ->directory('about')->disk('public')
                        ->helperText('Ex. bannière de l’accueil.'),
                    Forms\Components\FileUpload::make('photoabout')
                        ->label('Photo (page about)')
                        ->image()->imageEditor()
                        ->directory('about')->disk('public'),
                    Forms\Components\FileUpload::make('photobenefice')
                        ->label('Photo (bénéfices)')
                        ->image()->imageEditor()
                        ->directory('about')->disk('public'),

                    Forms\Components\TextInput::make('nbrexperience')
                        ->label('Années d’expérience')
                        ->maxLength(255)
                        ->rule('regex:/^[0-9]+([ .,+-]?[0-9]+)?$/')
                        ->helperText('Ex.: 15, 20+… (affichage libre).'),

                    Forms\Components\TextInput::make('temps')
                        ->label('Temps / disponibilité (ex.: 24/7)')
                        ->maxLength(255)

                        ->helperText('Texte court (traduisible).'),
                ]),
        ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photohome')->label('Image')->height(56)->square(),
                Tables\Columns\TextColumn::make('titrecabinet')
                    ->label('Titre')
                    ->limit(40),
                Tables\Columns\TextColumn::make('nbrexperience')
                    ->label('Exp.')
                    ->badge(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('MAJ')
                    ->dateTime('d/m/Y H:i'),
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
            'index'  => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit'   => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
