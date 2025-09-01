<?php

namespace App\Filament\Resources\SeguimientoEgresados\Pages;

use App\Filament\Resources\SeguimientoEgresados\SeguimientoEgresadosResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSeguimientoEgresados extends EditRecord
{
    protected static string $resource = SeguimientoEgresadosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
