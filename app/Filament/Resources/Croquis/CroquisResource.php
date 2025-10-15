<?php

namespace App\Filament\Resources\Croquis;

use App\Filament\Resources\Croquis\Pages\CreateCroquis;
use App\Filament\Resources\Croquis\Pages\EditCroquis;
use App\Filament\Resources\Croquis\Pages\ListCroquis;
use App\Filament\Resources\Croquis\Schemas\CroquisForm;
use App\Filament\Resources\Croquis\Tables\CroquisTable;
use App\Models\Croquis;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class CroquisResource extends Resource
{
    protected static ?string $model = Croquis::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMap;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->options(Auth::user()?->plantel->pluck('nombre', 'id')->sort())
                    ->required()
                    ->label('Plantel'),
                TextInput::make('nombre')->required(),
                FileUpload::make('documento')
                    ->label('Documento')
                    ->directory('DocumentosCroquis')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png', 'image/webp'])
                    ->maxSize(20480)
                    ->required()
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
                    ->tooltip('abrir el pdf')
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
            'index' => ListCroquis::route('/'),
            'create' => CreateCroquis::route('/create'),
            'edit' => EditCroquis::route('/{record}/edit'),
        ];
    }
}
