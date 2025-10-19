<?php

namespace App\Filament\Resources\Ubicaciones;

use App\Filament\Resources\Ubicaciones\Pages\CreateUbicaciones;
use App\Filament\Resources\Ubicaciones\Pages\EditUbicaciones;
use App\Filament\Resources\Ubicaciones\Pages\ListUbicaciones;
use App\Filament\Resources\Ubicaciones\Schemas\UbicacionesForm;
use App\Filament\Resources\Ubicaciones\Tables\UbicacionesTable;
use App\Models\Ubicaciones;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class UbicacionesResource extends Resource
{
    protected static ?string $model = Ubicaciones::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMapPin;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                TextInput::make('nombre')->required(),
                TextInput::make('link')
                    ->label('Link de google maps')
                    ->url()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('nombre'),
                IconColumn::make('link') // Adjust to your DB column name
                    ->label('Link')
                    ->icon('heroicon-s-document')
                    ->url(fn ($record) => $record->link)
                    ->openUrlInNewTab()
                    ->tooltip('abrir el pdf')
            ])
            ->filters([
                SelectFilter::make('plantel_id')
                ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                ->label('Filtrar por Plantel'),
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
            'index' => ListUbicaciones::route('/'),
            'create' => CreateUbicaciones::route('/create'),
            'edit' => EditUbicaciones::route('/{record}/edit'),
        ];
    }

    
    public static function getNavigationGroup(): ?string
    {
        return 'Mapas';
    }
}
