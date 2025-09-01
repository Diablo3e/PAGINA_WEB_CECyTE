<?php

namespace App\Filament\Resources\SeguimientoEgresados\Pages;

use App\Filament\Resources\SeguimientoEgresados\SeguimientoEgresadosResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSeguimientoEgresados extends ListRecords
{
    protected static string $resource = SeguimientoEgresadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
