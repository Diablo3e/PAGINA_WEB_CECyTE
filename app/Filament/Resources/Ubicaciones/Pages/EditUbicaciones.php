<?php

namespace App\Filament\Resources\Ubicaciones\Pages;

use App\Filament\Resources\Ubicaciones\UbicacionesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUbicaciones extends EditRecord
{
    protected static string $resource = UbicacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
