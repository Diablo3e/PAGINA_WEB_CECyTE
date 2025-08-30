<?php

namespace App\Filament\Resources\Comunidads\Pages;

use App\Filament\Resources\Comunidads\ComunidadResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditComunidad extends EditRecord
{
    protected static string $resource = ComunidadResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
