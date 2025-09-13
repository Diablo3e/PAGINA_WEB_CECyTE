<?php

namespace App\Filament\Resources\PracticasProfesionales;

use App\Filament\Resources\PracticasProfesionales\Pages\CreatePracticasProfesionales;
use App\Filament\Resources\PracticasProfesionales\Pages\EditPracticasProfesionales;
use App\Filament\Resources\PracticasProfesionales\Pages\ListPracticasProfesionales;
use App\Filament\Resources\PracticasProfesionales\Schemas\PracticasProfesionalesForm;
use App\Filament\Resources\PracticasProfesionales\Tables\PracticasProfesionalesTable;
use App\Models\PracticasProfesionales;
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

class PracticasProfesionalesResource extends Resource
{
    protected static ?string $model = PracticasProfesionales::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPresentationChartLine;

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
            'index' => ListPracticasProfesionales::route('/'),
            'create' => CreatePracticasProfesionales::route('/create'),
            'edit' => EditPracticasProfesionales::route('/{record}/edit'),
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
}
