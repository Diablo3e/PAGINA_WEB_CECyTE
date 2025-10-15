<?php

namespace App\Filament\Resources\PlanesEstudios;

use App\Filament\Resources\PlanesEstudios\Pages\CreatePlanesEstudio;
use App\Filament\Resources\PlanesEstudios\Pages\EditPlanesEstudio;
use App\Filament\Resources\PlanesEstudios\Pages\ListPlanesEstudios;
use App\Filament\Resources\PlanesEstudios\Schemas\PlanesEstudioForm;
use App\Filament\Resources\PlanesEstudios\Tables\PlanesEstudiosTable;
use App\Models\PlanesEstudio;
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

class PlanesEstudioResource extends Resource
{
    protected static ?string $model = PlanesEstudio::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingLibrary;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                TextInput::make('carrera')
                    ->required(),
                FileUpload::make('documento')
                    ->directory('PdfPlanesEstudio')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(20480)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('carrera'),
                IconColumn::make('documento') // Adjust to your DB column name
                    ->label('Documento')
                    ->icon('heroicon-s-document')
                    ->url(fn ($record) => $record->documento ? asset('storage/' . $record->documento) : null)
                    ->openUrlInNewTab()
                    ->tooltip('abrir el documento')
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
            'index' => ListPlanesEstudios::route('/'),
            'create' => CreatePlanesEstudio::route('/create'),
            'edit' => EditPlanesEstudio::route('/{record}/edit'),
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
