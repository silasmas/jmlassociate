<?php

namespace App\Filament\Widgets;

use App\Models\Publication;
use Filament\Widgets\TableWidget;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;

class LatestPublications extends TableWidget
{
    protected function getHeading(): string|Htmlable|null
    {
        return 'Dernières publications';
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Publication::query()
                    ->with(['categorie', 'avocat'])
                    ->latest()
            )
            ->columns([
                Tables\Columns\ImageColumn::make('cover')
                    ->label('Cover')->square()->height(40),

                Tables\Columns\TextColumn::make('titre')
                    ->label('Titre')
                    ->formatStateUsing(fn ($state, $record) => $record->getTranslation('titre', app()->getLocale()))
                    ->limit(50),

                Tables\Columns\TextColumn::make('categorie.nom')
                    ->label('Catégorie')
                    ->formatStateUsing(fn ($state, $record) => optional($record->categorie)?->getTranslation('nom', app()->getLocale()))
                    ->badge(),

                Tables\Columns\TextColumn::make('avocat')
                    ->label('Avocat')
                    ->formatStateUsing(fn ($state, $record) => optional($record->avocat)?->prenom.' '.optional($record->avocat)?->nom)
                    ->limit(28),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Créée le')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->paginated([5, 10, 20])          // options de pagination
            ->defaultPaginationPageOption(5);  // valeur par défaut
    }

    protected int|string|array $columnSpan = 'full';
}
