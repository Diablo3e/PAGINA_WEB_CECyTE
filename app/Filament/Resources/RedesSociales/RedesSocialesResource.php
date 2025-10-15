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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class RedesSocialesResource extends Resource
{
    protected static ?string $model = RedesSociales::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeAlt;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                Select::make('nombre')
                    ->label('Red social')
                    ->options([
                        'x' => 'X',
                        'instagram' => 'Instagram',
                        'facebook' => 'Facebook',
                    ])->required(),
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

    //Metodo para limitar el resultado de la query al enseñar entradas en la BD
    public static function getEloquentQuery(): Builder
    {
        $user = Auth::user();

        // Get the plantel IDs the user is associated with
        $plantelIds = $user->plantel->pluck('id')->toArray();

        
        return parent::getEloquentQuery()
            ->whereIn('plantel_id', $plantelIds);
    }
}
