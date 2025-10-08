<?php

namespace App\Filament\Resources\PlanesEstudios\Pages;

use App\Filament\Resources\PlanesEstudios\PlanesEstudioResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPlanesEstudios extends ListRecords
{
    protected static string $resource = PlanesEstudioResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
