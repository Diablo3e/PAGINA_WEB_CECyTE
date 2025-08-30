<?php

namespace App\Filament\Resources\Avisos\Pages;

use App\Filament\Resources\Avisos\AvisoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAviso extends EditRecord
{
    protected static string $resource = AvisoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
