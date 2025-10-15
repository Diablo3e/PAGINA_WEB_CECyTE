<?php

namespace App\Filament\Resources\Croquis\Pages;

use App\Filament\Resources\Croquis\CroquisResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCroquis extends EditRecord
{
    protected static string $resource = CroquisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
