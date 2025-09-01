<?php

namespace App\Filament\Resources\Instalaciones;

use App\Filament\Resources\Instalaciones\Pages\CreateInstalaciones;
use App\Filament\Resources\Instalaciones\Pages\EditInstalaciones;
use App\Filament\Resources\Instalaciones\Pages\ListInstalaciones;
use App\Filament\Resources\Instalaciones\Schemas\InstalacionesForm;
use App\Filament\Resources\Instalaciones\Tables\InstalacionesTable;
use App\Models\Instalaciones;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InstalacionesResource extends Resource
{
    protected static ?string $model = Instalaciones::class;

    protected static ?string $label = 'Imagenes instalaciones';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHomeModern;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->relationship('plantel', 'nombre')
                    ->required(),
                FileUpload::make('imagen')
                    ->directory('ImgInstalaciones')
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
            'index' => ListInstalaciones::route('/'),
            'create' => CreateInstalaciones::route('/create'),
            'edit' => EditInstalaciones::route('/{record}/edit'),
        ];
    }

    protected function rules(): array
    {
        return [
            'data.imagen' => 'max:25600',
        ];
    }
}
