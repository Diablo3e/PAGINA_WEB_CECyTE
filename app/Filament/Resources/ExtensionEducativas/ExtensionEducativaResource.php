<?php

namespace App\Filament\Resources\ExtensionEducativas;

use App\Filament\Resources\ExtensionEducativas\Pages\CreateExtensionEducativa;
use App\Filament\Resources\ExtensionEducativas\Pages\EditExtensionEducativa;
use App\Filament\Resources\ExtensionEducativas\Pages\ListExtensionEducativas;
use App\Filament\Resources\ExtensionEducativas\Schemas\ExtensionEducativaForm;
use App\Filament\Resources\ExtensionEducativas\Tables\ExtensionEducativasTable;
use App\Models\ExtensionEducativa;
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

class ExtensionEducativaResource extends Resource
{
    protected static ?string $model = ExtensionEducativa::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                FileUpload::make('imagen')
                    ->directory('ImgExtensionEducativa')
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
            'index' => ListExtensionEducativas::route('/'),
            'create' => CreateExtensionEducativa::route('/create'),
            'edit' => EditExtensionEducativa::route('/{record}/edit'),
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
}
