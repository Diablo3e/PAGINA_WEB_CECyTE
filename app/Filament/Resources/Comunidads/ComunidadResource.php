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
use Filament\Tables\Table;

class ComunidadResource extends Resource
{
    protected static ?string $model = Comunidad::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFilm;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->relationship('plantel','nombre')
                    ->required(),
                FileUpload::make('imagen')
                    ->directory('ImgComunidad')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['image/png', 'image/webp', 'image/jpeg'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                ImageColumn::make('imagen')
                    ->disk('public'),
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

    public static function getPluralLabel(): string
    {
        return 'Comunidad';
    }
}
