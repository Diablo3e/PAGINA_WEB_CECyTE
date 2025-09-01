<?php

namespace App\Filament\Resources\Instalaciones\Pages;

use App\Filament\Resources\Instalaciones\InstalacionesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInstalaciones extends ListRecords
{
    protected static string $resource = InstalacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
