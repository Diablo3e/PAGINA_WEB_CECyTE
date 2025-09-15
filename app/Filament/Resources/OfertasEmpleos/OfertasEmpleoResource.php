<?php

namespace App\Filament\Resources\OfertasEmpleos;

use App\Filament\Resources\OfertasEmpleos\Pages\CreateOfertasEmpleo;
use App\Filament\Resources\OfertasEmpleos\Pages\EditOfertasEmpleo;
use App\Filament\Resources\OfertasEmpleos\Pages\ListOfertasEmpleos;
use App\Filament\Resources\OfertasEmpleos\Schemas\OfertasEmpleoForm;
use App\Filament\Resources\OfertasEmpleos\Tables\OfertasEmpleosTable;
use App\Models\OfertasEmpleo;
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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class OfertasEmpleoResource extends Resource
{
    protected static ?string $model = OfertasEmpleo::class;
    
    protected static ?string $label = 'Ofertas de Empleo';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBriefcase;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                TextInput::make('empleador'),
                FileUpload::make('imagen')
                    ->directory('ImgOfertasEmpleo')
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
                TextColumn::make('empleador'),
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
            'index' => ListOfertasEmpleos::route('/'),
            'create' => CreateOfertasEmpleo::route('/create'),
            'edit' => EditOfertasEmpleo::route('/{record}/edit'),
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
        return 'Ofertas de Empleo';
    }
}
