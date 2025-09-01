<?php

namespace App\Filament\Resources\SistemaDuals\Pages;

use App\Filament\Resources\SistemaDuals\SistemaDualResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSistemaDuals extends ListRecords
{
    protected static string $resource = SistemaDualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
