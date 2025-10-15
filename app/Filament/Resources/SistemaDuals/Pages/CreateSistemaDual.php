<?php

namespace App\Filament\Resources\SistemaDuals\Pages;

use App\Filament\Resources\SistemaDuals\SistemaDualResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSistemaDual extends CreateRecord
{
    protected static string $resource = SistemaDualResource::class;

    // Como el campo 'documento' puede ser un URL o un archivo se tienen que desechar y organizar los datos que no se usan
    // Modificar datos antes de crear
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        //dd($data);
        if ($data['documento_tipo'] === 'file') {
            $data['documento'] = $data['documento_file'] ?? null;
        } elseif ($data['documento_tipo'] === 'url') {
            $data['documento'] = $data['documento_url'] ?? null;
        }

        unset($data['documento_tipo'], $data['documento_file'], $data['documento_url']);

        return $data;
    }
    
}
