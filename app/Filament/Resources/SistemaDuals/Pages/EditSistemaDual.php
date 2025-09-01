<?php

namespace App\Filament\Resources\SistemaDuals\Pages;

use App\Filament\Resources\SistemaDuals\SistemaDualResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSistemaDual extends EditRecord
{
    protected static string $resource = SistemaDualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
