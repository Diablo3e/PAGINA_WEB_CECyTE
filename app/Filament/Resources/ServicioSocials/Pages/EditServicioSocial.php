<?php

namespace App\Filament\Resources\ServicioSocials\Pages;

use App\Filament\Resources\ServicioSocials\ServicioSocialResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditServicioSocial extends EditRecord
{
    protected static string $resource = ServicioSocialResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
