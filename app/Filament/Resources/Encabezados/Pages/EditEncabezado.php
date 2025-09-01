<?php

namespace App\Filament\Resources\Encabezados\Pages;

use App\Filament\Resources\Encabezados\EncabezadoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEncabezado extends EditRecord
{
    protected static string $resource = EncabezadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
