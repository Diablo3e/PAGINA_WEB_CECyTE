<?php

namespace App\Filament\Resources\Carrusels;

use App\Filament\Resources\Carrusels\Pages\CreateCarrusel;
use App\Filament\Resources\Carrusels\Pages\EditCarrusel;
use App\Filament\Resources\Carrusels\Pages\ListCarrusels;
use App\Filament\Resources\Carrusels\Schemas\CarruselForm;
use App\Filament\Resources\Carrusels\Tables\CarruselsTable;
use App\Models\Carrusel;
use App\Models\User;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

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
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                FileUpload::make('imagenes')
                    ->directory('ImgCarrusel')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['image/png', 'image/jpeg', 'image/webp'])
                    ->maxSize(20480)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                ImageColumn::make('imagenes')->disk('public')
                    ->url(fn ($record) => $record->imagenes ? asset('storage/' . $record->imagenes) : null)
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
            'index' => ListCarrusels::route('/'),
            'create' => CreateCarrusel::route('/create'),
            'edit' => EditCarrusel::route('/{record}/edit'),
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
        return 'Imagenes carrusel';
    }
}
