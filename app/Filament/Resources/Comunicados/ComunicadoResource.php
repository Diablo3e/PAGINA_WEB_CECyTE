<?php

namespace App\Filament\Resources\Comunicados;

use App\Filament\Resources\Comunicados\Pages\CreateComunicado;
use App\Filament\Resources\Comunicados\Pages\EditComunicado;
use App\Filament\Resources\Comunicados\Pages\ListComunicados;
use App\Filament\Resources\Comunicados\Schemas\ComunicadoForm;
use App\Filament\Resources\Comunicados\Tables\ComunicadosTable;
use App\Models\Comunicado;
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

class ComunicadoResource extends Resource
{
    protected static ?string $model = Comunicado::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChatBubbleOvalLeftEllipsis;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('plantel_id')
                    ->relationship('plantel','nombre')
                    ->required(),
                TextInput::make('titulo')->required(),
                FileUpload::make('pdf')
                    ->directory('pdfComunicados')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['application/pdf'])
                    ->maxSize(20480)
                    ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('titulo'),
                IconColumn::make('pdf') // Adjust to your DB column name
                    ->label('Documento')
                    ->icon('heroicon-s-document')
                    ->url(fn ($record) => $record->pdf ? asset('storage/' . $record->pdf) : null)
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
            'index' => ListComunicados::route('/'),
            'create' => CreateComunicado::route('/create'),
            'edit' => EditComunicado::route('/{record}/edit'),
        ];
    }
}
