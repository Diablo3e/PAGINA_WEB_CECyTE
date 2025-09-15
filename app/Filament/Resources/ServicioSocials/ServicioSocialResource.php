<?php

namespace App\Filament\Resources\ServicioSocials;

use App\Filament\Resources\ServicioSocials\Pages\CreateServicioSocial;
use App\Filament\Resources\ServicioSocials\Pages\EditServicioSocial;
use App\Filament\Resources\ServicioSocials\Pages\ListServicioSocials;
use App\Filament\Resources\ServicioSocials\Schemas\ServicioSocialForm;
use App\Filament\Resources\ServicioSocials\Tables\ServicioSocialsTable;
use App\Models\ServicioSocial;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ServicioSocialResource extends Resource
{
    protected static ?string $model = ServicioSocial::class;

    protected static ?string $label = 'Servicio social';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedGlobeAmericas;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                TextInput::make('institucion')->required(),
                Textarea::make('descripcion')
                    ->rows(8)
                    ->required(),
                TextInput::make('correo')
                    ->email()
                    ->required(),
                TextInput::make('telefono')
                    ->numeric()
                    ->required(),
                TextInput::make('direccion')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('institucion'),
                TextColumn::make('correo'),
                TextColumn::make('telefono'),
                TextColumn::make('direccion'),
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
            'index' => ListServicioSocials::route('/'),
            'create' => CreateServicioSocial::route('/create'),
            'edit' => EditServicioSocial::route('/{record}/edit'),
        ];
    }

    //Metodo para limitar el resultado de la query al enseñar entradas en la BD
    public static function getEloquentQuery(): Builder
    {
        $user = Auth::user();

        // Get the plantel IDs the user is associated with
        $plantelIds = $user->plantel->pluck('id')->toArray();

        // Return only Carruseles associated with those planteles
        return parent::getEloquentQuery()
            ->whereIn('plantel_id', $plantelIds);
    }

    public static function getPluralLabel(): string
    {
        return 'Servicio social';
    }
}
