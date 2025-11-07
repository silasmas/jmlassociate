<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Models\Slides;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Spatie\Translatable\HasTranslations;
use Filament\Tables;
use Filament\Tables\Table;

class SlideResource extends Resource
{
    use HasTranslations;

    protected static ?string $model = Slides::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationLabel = 'Slides';
    protected static ?string $modelLabel = 'Slide';
    protected static ?string $pluralModelLabel = 'Slides';
    protected static ?string $navigationGroup = 'Site';

    /** Optionnel : locales visibles dans cette resource */
    public static function getTranslatableLocales(): array
    {
        return ['fr', 'en']; // aligne avec celles de ton Panel
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contenu (multilingue)')
                    ->description('Titres, résumé et texte du bouton, traduisibles.')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('titresmall')
                            ->label('Petit titre')
                            ->maxLength(150)

                            ->helperText('Sous-titre/surtitre court.'),

                        Forms\Components\TextInput::make('titrebig')
                            ->label('Grand titre')
                            ->maxLength(255)

                            ->required(),

                        Forms\Components\Textarea::make('resume')
                            ->label('Résumé')
                            ->rows(3)

                            ->helperText('Texte descriptif du slide.'),

                        Forms\Components\TextInput::make('textbtn')
                            ->label('Texte du bouton')
                            ->maxLength(60)
                             ,
                    ]),

                Forms\Components\Section::make('Média & Lien')
                    ->columns(2)
                    ->schema([
                        Forms\Components\FileUpload::make('photo')
                            ->label('Image du slide')
                            ->image()
                            ->directory('slides')
                            ->disk('public') // assure-toi que "public" est configuré
                            ->imageEditor()
                            ->required()
                            ->helperText('Format large recommandé (ex: 1600×900).'),

                        Forms\Components\TextInput::make('lienvers')
                            ->label('Lien du bouton')
                            ->url()
                            ->maxLength(255)
                            ->helperText('URL vers laquelle redirige le bouton.'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')
                    ->label('Image')
                    ->circular(false)
                    ->square()
                    ->height(56),

                Tables\Columns\TextColumn::make('titrebig')
                    ->label('Titre')
                    ->limit(40)
                    ->formatStateUsing(fn ($state, $record) => $record->getTranslation('titrebig', app()->getLocale()))
                    ->searchable(), // NB: pour une vraie recherche multi-langue, créer un Scope custom si besoin

                Tables\Columns\TextColumn::make('lienvers')
                    ->label('Lien')
                    ->limit(30),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('MAJ')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->defaultSort('updated_at', 'desc')
            ->filters([])
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
            'index'  => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit'   => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
