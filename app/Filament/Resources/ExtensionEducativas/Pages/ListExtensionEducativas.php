<?php

namespace App\Filament\Resources\ExtensionEducativas\Pages;

use App\Filament\Resources\ExtensionEducativas\ExtensionEducativaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListExtensionEducativas extends ListRecords
{
    protected static string $resource = ExtensionEducativaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
