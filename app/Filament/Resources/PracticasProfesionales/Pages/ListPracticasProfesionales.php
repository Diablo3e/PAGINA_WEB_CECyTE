<?php

namespace App\Filament\Resources\PracticasProfesionales\Pages;

use App\Filament\Resources\PracticasProfesionales\PracticasProfesionalesResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPracticasProfesionales extends ListRecords
{
    protected static string $resource = PracticasProfesionalesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
