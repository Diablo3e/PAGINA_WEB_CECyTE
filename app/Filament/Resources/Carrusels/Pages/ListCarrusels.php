<?php

namespace App\Filament\Resources\Carrusels\Pages;

use App\Filament\Resources\Carrusels\CarruselResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCarrusels extends ListRecords
{
    protected static string $resource = CarruselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
