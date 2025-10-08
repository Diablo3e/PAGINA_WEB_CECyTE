<?php

namespace App\Filament\Resources\PlanesEstudios\Pages;

use App\Filament\Resources\PlanesEstudios\PlanesEstudioResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlanesEstudio extends EditRecord
{
    protected static string $resource = PlanesEstudioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
