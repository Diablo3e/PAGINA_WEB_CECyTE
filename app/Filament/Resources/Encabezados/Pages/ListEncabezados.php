<?php

namespace App\Filament\Resources\Encabezados\Pages;

use App\Filament\Resources\Encabezados\EncabezadoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEncabezados extends ListRecords
{
    protected static string $resource = EncabezadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
