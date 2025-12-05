<?php

namespace App\Filament\Resources\PracticasProfesionales;

use App\Filament\Resources\PracticasProfesionales\Pages\CreatePracticasProfesionales;
use App\Filament\Resources\PracticasProfesionales\Pages\EditPracticasProfesionales;
use App\Filament\Resources\PracticasProfesionales\Pages\ListPracticasProfesionales;
use App\Filament\Resources\PracticasProfesionales\Schemas\PracticasProfesionalesForm;
use App\Filament\Resources\PracticasProfesionales\Tables\PracticasProfesionalesTable;
use App\Models\PracticasProfesionales;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
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
                TextInput::make('nombre')
                    ->label('Titulo del documento')
                    ->required(),
                FileUpload::make('documento')
                    ->directory('docuPracticasProfesionales')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['application/pdf','application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('nombre'),
                IconColumn::make('documento') // Adjust to your DB column name
                    ->label('Documento')
                    ->icon('heroicon-s-document')
                    ->url(fn ($record) => $record->documento ? asset('storage/' . $record->documento) : null)
                    ->openUrlInNewTab()
                    ->tooltip('abrir el documento')
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

        
        return parent::getEloquentQuery()
            ->whereIn('plantel_id', $plantelIds);
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Vinculación';
    }
}
