<?php

namespace App\Filament\Resources\PracticasProfesionales\Pages;

use App\Filament\Resources\PracticasProfesionales\PracticasProfesionalesResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPracticasProfesionales extends EditRecord
{
    protected static string $resource = PracticasProfesionalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
