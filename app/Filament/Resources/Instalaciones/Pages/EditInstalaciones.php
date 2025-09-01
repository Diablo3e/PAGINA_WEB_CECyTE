<?php

namespace App\Filament\Resources\Instalaciones\Pages;

use App\Filament\Resources\Instalaciones\InstalacionesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInstalaciones extends EditRecord
{
    protected static string $resource = InstalacionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
