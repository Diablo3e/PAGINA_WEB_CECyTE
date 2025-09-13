<?php

namespace App\Filament\Resources\Personals;

use App\Filament\Resources\Personals\Pages\CreatePersonal;
use App\Filament\Resources\Personals\Pages\EditPersonal;
use App\Filament\Resources\Personals\Pages\ListPersonals;
use App\Filament\Resources\Personals\Schemas\PersonalForm;
use App\Filament\Resources\Personals\Tables\PersonalsTable;
use App\Models\Personal;
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

class PersonalResource extends Resource
{
    protected static ?string $model = Personal::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserCircle;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                FileUpload::make('foto')
                    ->directory('ImgPersonal')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['image/png', 'image/webp', 'image/jpeg'])
                    ->required(),
                TextInput::make('puesto')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                ImageColumn::make('foto')
                    ->disk('public'),
                TextColumn::make('puesto'),
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
            'index' => ListPersonals::route('/'),
            'create' => CreatePersonal::route('/create'),
            'edit' => EditPersonal::route('/{record}/edit'),
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
        return 'Personal';
    }
}
