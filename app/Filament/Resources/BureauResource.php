<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BureauResource\Pages;
use App\Models\Bureau;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Spatie\Translatable\HasTranslations;
use Filament\Tables;
use Filament\Tables\Table;

class BureauResource extends Resource
{
    use HasTranslations;

    protected static ?string $model = Bureau::class;

    protected static ?string $navigationIcon  = 'heroicon-o-building-office';
    protected static ?string $navigationLabel = 'Bureaux';
    protected static ?string $modelLabel      = 'Bureau';
    protected static ?string $pluralModelLabel= 'Bureaux';
    protected static ?string $navigationGroup = 'Site';

    public static function getTranslatableLocales(): array
    {
        return ['fr','en'];
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informations principales')
                ->columns(2)
                ->schema([
                    Forms\Components\TextInput::make('titre')
                        ->label('Titre du bureau')
                        ->maxLength(255)
                        ->required()
                         ,

                    Forms\Components\Textarea::make('adresse')
                        ->label('Adresse')
                        ->rows(3)
                         ,

                    Forms\Components\TextInput::make('email')
                        ->label('Email')
                        ->email()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('telephone')
                        ->label('Téléphone')
                        ->tel()
                        ->maxLength(255),
                ]),

            Forms\Components\Section::make('Détails & média')
                ->columns(2)
                ->schema([
                    Forms\Components\FileUpload::make('photo')
                        ->label('Photo')
                        ->image()
                        ->directory('bureaus')
                        ->disk('public')
                        ->imageEditor(),

                    Forms\Components\Textarea::make('physique')
                        ->label('Adresse physique / indications')
                        ->rows(3)
                         ,

                    Forms\Components\RichEditor::make('detail')
                        ->label('Détail')
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
                Tables\Columns\ImageColumn::make('photo')->label('Photo')->square()->height(56),
                Tables\Columns\TextColumn::make('titre')->label('Titre')->limit(40),
                Tables\Columns\TextColumn::make('email')->label('Email')->limit(30),
                Tables\Columns\TextColumn::make('telephone')->label('Téléphone')->limit(20),
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
            'index'  => Pages\ListBureaus::route('/'),
            'create' => Pages\CreateBureau::route('/create'),
            'edit'   => Pages\EditBureau::route('/{record}/edit'),
        ];
    }
}
