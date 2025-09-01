<?php

namespace App\Filament\Resources\Comunicados\Pages;

use App\Filament\Resources\Comunicados\ComunicadoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditComunicado extends EditRecord
{
    protected static string $resource = ComunicadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
