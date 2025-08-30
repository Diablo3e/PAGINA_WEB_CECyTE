<?php

namespace App\Filament\Resources\RedesSociales;

use App\Filament\Resources\RedesSociales\Pages\CreateRedesSociales;
use App\Filament\Resources\RedesSociales\Pages\EditRedesSociales;
use App\Filament\Resources\RedesSociales\Pages\ListRedesSociales;
use App\Filament\Resources\RedesSociales\Schemas\RedesSocialesForm;
use App\Filament\Resources\RedesSociales\Tables\RedesSocialesTable;
use App\Models\RedesSociales;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class RedesSocialesResource extends Resource
{
    protected static ?string $model = RedesSociales::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeAlt;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->relationship('plantel', 'nombre')
                    ->required(),
                TextInput::make('nombre')->required(),
                TextInput::make('link')->url()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('nombre'),
                TextColumn::make('link'),
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
            'index' => ListRedesSociales::route('/'),
            'create' => CreateRedesSociales::route('/create'),
            'edit' => EditRedesSociales::route('/{record}/edit'),
        ];
    }
}
