<?php

namespace App\Filament\Resources\Carrusels;

use App\Filament\Resources\Carrusels\Pages\CreateCarrusel;
use App\Filament\Resources\Carrusels\Pages\EditCarrusel;
use App\Filament\Resources\Carrusels\Pages\ListCarrusels;
use App\Filament\Resources\Carrusels\Schemas\CarruselForm;
use App\Filament\Resources\Carrusels\Tables\CarruselsTable;
use App\Models\Carrusel;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class CarruselResource extends Resource
{
    protected static ?string $model = Carrusel::class;

    protected static ?string $label = 'Imagenes carrusel';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhoto;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->relationship('plantel', 'nombre')->required(),
                FileUpload::make('imagenes')
                    ->directory('ImgCarrusel')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/webp'])
                    ->required(),
                TextInput::make('nombre')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('nombre'),
                ImageColumn::make('imagenes')->disk('public'),
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
            'index' => ListCarrusels::route('/'),
            'create' => CreateCarrusel::route('/create'),
            'edit' => EditCarrusel::route('/{record}/edit'),
        ];
    }

    public static function getPluralLabel(): string
    {
        return 'Imagenes carrusel';
    }
}
