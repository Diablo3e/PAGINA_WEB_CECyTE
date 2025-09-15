<?php

namespace App\Filament\Resources\SistemaDuals;

use App\Filament\Resources\SistemaDuals\Pages\CreateSistemaDual;
use App\Filament\Resources\SistemaDuals\Pages\EditSistemaDual;
use App\Filament\Resources\SistemaDuals\Pages\ListSistemaDuals;
use App\Filament\Resources\SistemaDuals\Schemas\SistemaDualForm;
use App\Filament\Resources\SistemaDuals\Tables\SistemaDualsTable;
use App\Models\SistemaDual;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class SistemaDualResource extends Resource
{
    protected static ?string $model = SistemaDual::class;

    protected static ?string $label = 'Sistema Dual';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedStar;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                FileUpload::make('banner')
                    ->directory('ImgSistemaDual')
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
                ImageColumn::make('banner')
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
            'index' => ListSistemaDuals::route('/'),
            'create' => CreateSistemaDual::route('/create'),
            'edit' => EditSistemaDual::route('/{record}/edit'),
        ];
    }

    //Metodo para limitar el resultado de la query al enseñar entradas en la BD
    public static function getEloquentQuery(): Builder
    {
        $user = Auth::user();

        // Get the plantel IDs the user is associated with
        $plantelIds = $user->plantel->pluck('id')->toArray();

        // Return only Carruseles associated with those planteles
        return parent::getEloquentQuery()
            ->whereIn('plantel_id', $plantelIds);
    }

    public static function getPluralLabel(): string
    {
        return 'Sistema Dual';
    }
}
