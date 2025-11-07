<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PublicationResource\Pages;
use App\Models\Publication;
use App\Models\Avocat;
use App\Models\Category;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Builder;

class PublicationResource extends Resource
{
    use HasTranslations;
    protected static ?string $model = Publication::class;

    protected static ?string $navigationIcon  = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Publications';
    protected static ?string $modelLabel      = 'Publication';
    protected static ?string $pluralModelLabel= 'Publications';
    protected static ?string $navigationGroup = 'Contenus';

    protected static function locales(): array
    {
        return ['fr','en'];
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Relations & médias')
                ->columns(3)
                ->schema([
                    Forms\Components\Select::make('user_id')
                        ->label('Auteur (user)')
                        ->relationship('user','name')
                        ->searchable()
                        ->preload()
                        ->required(),

                    Forms\Components\Select::make('avocat_id')
                        ->label('Avocat')
                        ->relationship('avocat', 'id') // on calcule le libellé
                        ->searchable()
                        ->preload()
                        ->getOptionLabelFromRecordUsing(fn (Avocat $a) => "{$a->prenom} {$a->nom}")
                        ->required(),

                    Forms\Components\Select::make('categorie_id')
                        ->label('Catégorie')
                        ->relationship('categorie', 'id')
                        ->searchable()
                        ->preload()
                        ->getOptionLabelFromRecordUsing(fn (Category $c) => $c->getTranslation('nom', app()->getLocale()))
                        ->required(),

                    Forms\Components\FileUpload::make('cover')
                        ->label('Image de couverture')
                        ->image()->directory('publications')->disk('public')->imageEditor(),

                    Forms\Components\FileUpload::make('pubpdf')
                        ->label('PDF')
                        ->acceptedFileTypes(['application/pdf'])
                        ->directory('publications/pdf')->disk('public'),
                ]),

            Tabs::make('Traductions')
                ->tabs(self::localeTabs()),
        ])->columns(1);
    }

    protected static function localeTabs(): array
    {
        $tabs = [];
        foreach (self::locales() as $loc) {
            $upper = strtoupper($loc);
            $tabs[] = Tabs\Tab::make($upper)->schema([
                Forms\Components\TextInput::make("titre.$loc")
                    ->label("Titre ($upper)")
                    ->maxLength(255)
                    ->required($loc === 'fr'),
                Forms\Components\TextInput::make("soustitre.$loc")
                    ->label("Sous-titre ($upper)")
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
                Tables\Columns\ImageColumn::make('cover')->label('Cover')->square()->height(48),
                Tables\Columns\TextColumn::make('titre')
                    ->label('Titre')
                    ->formatStateUsing(fn ($state, $record) => $record->getTranslation('titre', app()->getLocale()))
                    ->limit(50),
                Tables\Columns\TextColumn::make('categorie.nom')
                    ->label('Catégorie')
                    ->formatStateUsing(fn ($state, $record) => optional($record->categorie)->getTranslation('nom', app()->getLocale()))
                    ->badge(),
                Tables\Columns\TextColumn::make('avocat')
                    ->label('Avocat')
                    ->formatStateUsing(fn ($state, $record) => optional($record->avocat)?->prenom.' '.optional($record->avocat)?->nom)
                    ->limit(26),
                Tables\Columns\TextColumn::make('updated_at')->label('MAJ')->dateTime('d/m/Y H:i'),
            ])
            ->defaultSort('updated_at','desc')
            ->filters([
                Tables\Filters\SelectFilter::make('categorie_id')
                    ->label('Catégorie')
                    ->relationship('categorie', 'id')
                    ->getOptionLabelFromRecordUsing(fn (Category $c) => $c->getTranslation('nom', app()->getLocale())),
                Tables\Filters\SelectFilter::make('avocat_id')
                    ->label('Avocat')
                    ->relationship('avocat', 'id')
                    ->getOptionLabelFromRecordUsing(fn (Avocat $a) => "{$a->prenom} {$a->nom}"),
                Tables\Filters\SelectFilter::make('user_id')
                    ->label('Auteur')
                    ->relationship('user', 'name'),
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
            'index'  => Pages\ListPublications::route('/'),
            'create' => Pages\CreatePublication::route('/create'),
            'edit'   => Pages\EditPublication::route('/{record}/edit'),
        ];
    }
}
