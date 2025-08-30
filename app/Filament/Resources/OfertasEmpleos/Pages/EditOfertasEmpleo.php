<?php

namespace App\Filament\Resources\OfertasEmpleos\Pages;

use App\Filament\Resources\OfertasEmpleos\OfertasEmpleoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOfertasEmpleo extends EditRecord
{
    protected static string $resource = OfertasEmpleoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
