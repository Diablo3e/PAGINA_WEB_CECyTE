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
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class EncabezadoResource extends Resource
{
    protected static ?string $model = Encabezado::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClipboardDocumentList;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                TextInput::make('nombre')->required(),
                Select::make('tipo')
                    ->options([
                        'cecyte' => 'CECyTE',
                        'emsad' => 'EMSAD',
                    ])->required(),
                Textarea::make('descripcion')
                    ->rows(8),
                Fieldset::make('Contadores')
                    ->visible(Auth::user()?->admin)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('estudiantes')
                            ->numeric()
                            ->label('Numero de estudiantes'),
                        TextInput::make('docentes')
                            ->numeric()
                            ->label('Numero de docentes'),
                        TextInput::make('administrativos')
                            ->numeric()
                            ->label('Numero de administrativos'),
                    ])

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('nombre'),
                TextColumn::make('tipo'),
                TextColumn::make('estudiantes')->visible(Auth::user()?->admin),
                TextColumn::make('docentes')->visible(Auth::user()?->admin),
                TextColumn::make('administrativos')->visible(Auth::user()?->admin),
                TextColumn::make('descripcion')->limit(30),
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
            'index' => ListEncabezados::route('/'),
            'create' => CreateEncabezado::route('/create'),
            'edit' => EditEncabezado::route('/{record}/edit'),
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
