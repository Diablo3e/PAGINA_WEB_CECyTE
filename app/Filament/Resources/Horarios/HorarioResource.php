<?php

namespace App\Filament\Resources\Horarios;

use App\Filament\Resources\Horarios\Pages\CreateHorario;
use App\Filament\Resources\Horarios\Pages\EditHorario;
use App\Filament\Resources\Horarios\Pages\ListHorarios;
use App\Filament\Resources\Horarios\Schemas\HorarioForm;
use App\Filament\Resources\Horarios\Tables\HorariosTable;
use App\Models\Horario;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class HorarioResource extends Resource
{
    protected static ?string $model = Horario::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                TextInput::make('carrera')->required(),
                TextInput::make('grupo')->required(),
                FileUpload::make('documento')
                    ->directory('DocumentoHorarios')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(20480)
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('carrera'),
                TextColumn::make('grupo'),
                IconColumn::make('documento') // Adjust to your DB column name
                    ->label('Documento')
                    ->icon('heroicon-s-document')
                    ->url(fn ($record) => $record->documento ? asset('storage/' . $record->documento) : null)
                    ->openUrlInNewTab()
                    ->tooltip('abrir el pdf')
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
            'index' => ListHorarios::route('/'),
            'create' => CreateHorario::route('/create'),
            'edit' => EditHorario::route('/{record}/edit'),
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
