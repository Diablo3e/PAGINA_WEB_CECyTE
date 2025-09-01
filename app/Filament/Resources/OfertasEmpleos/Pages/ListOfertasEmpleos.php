<?php

namespace App\Filament\Resources\OfertasEmpleos\Pages;

use App\Filament\Resources\OfertasEmpleos\OfertasEmpleoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOfertasEmpleos extends ListRecords
{
    protected static string $resource = OfertasEmpleoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
