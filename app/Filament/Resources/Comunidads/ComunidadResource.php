<?php

namespace App\Filament\Resources\Comunidads;

use App\Filament\Resources\Comunidads\Pages\CreateComunidad;
use App\Filament\Resources\Comunidads\Pages\EditComunidad;
use App\Filament\Resources\Comunidads\Pages\ListComunidads;
use App\Filament\Resources\Comunidads\Schemas\ComunidadForm;
use App\Filament\Resources\Comunidads\Tables\ComunidadsTable;
use App\Models\Comunidad;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ComunidadResource extends Resource
{
    protected static ?string $model = Comunidad::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFilm;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                FileUpload::make('imagen')
                    ->directory('ImgComunidad')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['image/png', 'image/webp', 'image/jpeg'])
                    ->maxSize(20480)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                ImageColumn::make('imagen')->disk('public')
                    ->url(fn ($record) => $record->imagen ? asset('storage/' . $record->imagen) : null)
                    ->openUrlInNewTab()
                    ->tooltip('ver imagen')
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
            'index' => ListComunidads::route('/'),
            'create' => CreateComunidad::route('/create'),
            'edit' => EditComunidad::route('/{record}/edit'),
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

    public static function getPluralLabel(): string
    {
        return 'Comunidad';
    }
}
