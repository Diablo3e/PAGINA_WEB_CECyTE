<?php

namespace App\Filament\Resources\Ubicaciones\Pages;

use App\Filament\Resources\Ubicaciones\UbicacionesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListUbicaciones extends ListRecords
{
    protected static string $resource = UbicacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
