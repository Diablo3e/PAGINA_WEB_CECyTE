<?php

namespace App\Filament\Resources\Carrusels\Pages;

use App\Filament\Resources\Carrusels\CarruselResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCarrusel extends EditRecord
{
    protected static string $resource = CarruselResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
