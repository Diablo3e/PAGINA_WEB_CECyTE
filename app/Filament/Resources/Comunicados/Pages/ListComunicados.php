<?php

namespace App\Filament\Resources\Comunicados\Pages;

use App\Filament\Resources\Comunicados\ComunicadoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComunicados extends ListRecords
{
    protected static string $resource = ComunicadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
