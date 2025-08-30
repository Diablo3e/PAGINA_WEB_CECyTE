<?php

namespace App\Filament\Resources\Encabezados;

use App\Filament\Resources\Encabezados\Pages\CreateEncabezado;
use App\Filament\Resources\Encabezados\Pages\EditEncabezado;
use App\Filament\Resources\Encabezados\Pages\ListEncabezados;
use App\Filament\Resources\Encabezados\Schemas\EncabezadoForm;
use App\Filament\Resources\Encabezados\Tables\EncabezadosTable;
use App\Models\Encabezado;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EncabezadoResource extends Resource
{
    protected static ?string $model = Encabezado::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->relationship('plantel', 'nombre')
                    ->required(),
                TextInput::make('nombre')->required(),
                Select::make('tipo')
                    ->options([
                        'cecyte' => 'CECyTE',
                        'emsad' => 'EMSAD',
                    ])->required(),
                Textarea::make('descripcion')
                    ->rows(8)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('nombre'),
                TextColumn::make('tipo'),
                TextColumn::make('descripcion')->limit(30),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEncabezados::route('/'),
            'create' => CreateEncabezado::route('/create'),
            'edit' => EditEncabezado::route('/{record}/edit'),
        ];
    }
}
