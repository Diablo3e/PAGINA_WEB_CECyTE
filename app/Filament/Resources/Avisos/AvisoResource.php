<?php

namespace App\Filament\Resources\Avisos;

use App\Filament\Resources\Avisos\Pages\CreateAviso;
use App\Filament\Resources\Avisos\Pages\EditAviso;
use App\Filament\Resources\Avisos\Pages\ListAvisos;
use App\Filament\Resources\Avisos\Schemas\AvisoForm;
use App\Filament\Resources\Avisos\Tables\AvisosTable;
use App\Models\Aviso;
use BackedEnum;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class AvisoResource extends Resource
{
    protected static ?string $model = Aviso::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInbox;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                DatePicker::make('fecha')->required(),
                Textarea::make('cuerpo')
                    ->rows(8)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('fecha')->date('d/m/Y'),
                TextColumn::make('cuerpo')->limit(30),
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
            'index' => ListAvisos::route('/'),
            'create' => CreateAviso::route('/create'),
            'edit' => EditAviso::route('/{record}/edit'),
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

    public static function getNavigationGroup(): ?string
    {
        return 'Control escolar';
    }
}
