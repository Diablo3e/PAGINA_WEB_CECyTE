<?php

namespace App\Filament\Resources\RedesSociales\Pages;

use App\Filament\Resources\RedesSociales\RedesSocialesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRedesSociales extends ListRecords
{
    protected static string $resource = RedesSocialesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
