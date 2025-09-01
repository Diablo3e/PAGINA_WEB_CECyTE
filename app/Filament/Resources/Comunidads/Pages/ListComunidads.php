<?php

namespace App\Filament\Resources\Comunidads\Pages;

use App\Filament\Resources\Comunidads\ComunidadResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListComunidads extends ListRecords
{
    protected static string $resource = ComunidadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
