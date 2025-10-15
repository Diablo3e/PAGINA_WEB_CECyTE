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

    protected function mutateFormDataBeforeSave(array $data): array
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
