<?php

namespace App\Filament\Resources\ExtensionEducativas\Pages;

use App\Filament\Resources\ExtensionEducativas\ExtensionEducativaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditExtensionEducativa extends EditRecord
{
    protected static string $resource = ExtensionEducativaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
