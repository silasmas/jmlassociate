<?php

namespace App\Filament\Resources\AccueilResource\Pages;

use App\Filament\Resources\AccueilResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAccueil extends EditRecord
{
    protected static string $resource = AccueilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
