<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExpertiseResource\Pages;
use App\Models\Expertise;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Tables;
use Filament\Tables\Table;
use Spatie\Translatable\HasTranslations;
use Filament\Resources\Resource;

class ExpertiseResource extends Resource
{
    use HasTranslations;
    protected static ?string $model = Expertise::class;

    protected static ?string $navigationIcon  = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Expertises';
    protected static ?string $modelLabel      = 'Expertise';
    protected static ?string $pluralModelLabel= 'Expertises';
    protected static ?string $navigationGroup = 'Contenus';

    /** Liste des locales à éditer sans plugin */
    protected static function locales(): array
    {
        return ['fr','en'];
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Métadonnées')
                ->columns(2)
                ->schema([
                    Forms\Components\Select::make('sorte')
                        ->label('Type')
                        ->options(['1' => 'Secteur d\'activité', '2' => 'Domaine de competence'])
                        ->required()
                        ->columnSpan(12),
                    Forms\Components\FileUpload::make('photo')
                        ->label('Image')
                        ->image()->directory('expertise')->disk('public')->imageEditor(),
                    Forms\Components\FileUpload::make('pdf')
                        ->label('PDF')
                        ->acceptedFileTypes(['application/pdf'])
                        ->directory('expertises/pdf')->disk('public'),
                ]),

            Tabs::make('Traductions')
                ->tabs(self::localeTabs()),
        ])->columns(1);
    }

    /** Construit les onglets de langues (sans ->translatable()) */
    protected static function localeTabs(): array
    {
        $tabs = [];
        foreach (self::locales() as $loc) {
            $upper = strtoupper($loc);
            $tabs[] = Tabs\Tab::make($upper)->schema([
                Forms\Components\TextInput::make("titre1.$loc")
                    ->label("Titre 1 ($upper)")
                    ->maxLength(255)
                    ->required($loc === 'fr'),
                Forms\Components\TextInput::make("titre2.$loc")
                    ->label("Titre 2 ($upper)")
                    ->maxLength(255),
                Forms\Components\RichEditor::make("contenu.$loc")
                    ->label("Contenu ($upper)")
                    ->toolbarButtons(['bold','italic','underline','strike','h2','h3','blockquote','orderedList','bulletList','link'])
                    ->columnSpanFull()
                    ->required($loc === 'fr'),
            ])->columns(2);
        }
        return $tabs;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('photo')->label('Image')->square()->height(48),
                Tables\Columns\TextColumn::make('titre1')
                    ->label('Titre')
                    ->formatStateUsing(fn ($state, $record) => $record->getTranslation('titre1', app()->getLocale()))
                    ->limit(50)
                    ->searchable(false),
                Tables\Columns\TextColumn::make('sorte')->label('Type')->badge(),
                Tables\Columns\TextColumn::make('updated_at')->label('MAJ')->dateTime('d/m/Y H:i'),
            ])
            ->defaultSort('updated_at','desc')
            ->filters([
                Tables\Filters\SelectFilter::make('sorte')
                    ->label('Type')
                    ->options(['1' => 'Type 1', '2' => 'Type 2']),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListExpertises::route('/'),
            'create' => Pages\CreateExpertise::route('/create'),
            'edit'   => Pages\EditExpertise::route('/{record}/edit'),
        ];
    }
}
