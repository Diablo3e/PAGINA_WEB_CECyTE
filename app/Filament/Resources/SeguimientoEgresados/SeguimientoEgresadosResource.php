<?php

namespace App\Filament\Resources\SeguimientoEgresados;

use App\Filament\Resources\SeguimientoEgresados\Pages\CreateSeguimientoEgresados;
use App\Filament\Resources\SeguimientoEgresados\Pages\EditSeguimientoEgresados;
use App\Filament\Resources\SeguimientoEgresados\Pages\ListSeguimientoEgresados;
use App\Filament\Resources\SeguimientoEgresados\Schemas\SeguimientoEgresadosForm;
use App\Filament\Resources\SeguimientoEgresados\Tables\SeguimientoEgresadosTable;
use App\Models\SeguimientoEgresados;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SeguimientoEgresadosResource extends Resource
{
    protected static ?string $model = SeguimientoEgresados::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->relationship('plantel', 'nombre')
                    ->required(),
                TextInput::make('nombre')->required(),
                TextInput::make('carrera')->required(),
                Textarea::make('testimonio')
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
                TextColumn::make('carrera'),
                TextColumn::make('testimonio')->limit(40),
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
            'index' => ListSeguimientoEgresados::route('/'),
            'create' => CreateSeguimientoEgresados::route('/create'),
            'edit' => EditSeguimientoEgresados::route('/{record}/edit'),
        ];
    }
}
