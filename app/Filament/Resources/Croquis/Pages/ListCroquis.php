<?php

namespace App\Filament\Resources\Croquis\Pages;

use App\Filament\Resources\Croquis\CroquisResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCroquis extends ListRecords
{
    protected static string $resource = CroquisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
