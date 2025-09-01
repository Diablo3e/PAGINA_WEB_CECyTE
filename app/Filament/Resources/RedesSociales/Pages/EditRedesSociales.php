<?php

namespace App\Filament\Resources\RedesSociales\Pages;

use App\Filament\Resources\RedesSociales\RedesSocialesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRedesSociales extends EditRecord
{
    protected static string $resource = RedesSocialesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
