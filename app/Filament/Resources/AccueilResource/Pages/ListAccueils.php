<?php

namespace App\Filament\Resources\AccueilResource\Pages;

use App\Filament\Resources\AccueilResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAccueils extends ListRecords
{
    protected static string $resource = AccueilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
