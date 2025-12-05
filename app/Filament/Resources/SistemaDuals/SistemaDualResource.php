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
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
                TextInput::make('nombre')
                    ->required(),
                Radio::make('documento_tipo')
                    ->label('Tipo de documento')
                    ->options([
                        'file' => 'Archivo',
                        'url' => 'URL',
                    ])
                    ->default(fn () => 'file')
                    ->inline()
                    ->required()
                    ->reactive()
                    ->afterStateHydrated(function (callable $set, $state, $record) {
                    if (! $record?->documento) {
                        $set('documento_tipo', 'file'); // or null
                    } elseif (Str::startsWith($record->documento, ['http://', 'https://'])) {
                        $set('documento_tipo', 'url');
                    } else {
                        $set('documento_tipo', 'file');
                    }
                }),
                FileUpload::make('documento_file')
                    ->directory('DocumentoSistemaDual')
                    ->visibility('public')
                    ->disk('public')
                    ->acceptedFileTypes(['image/png', 'image/webp', 'image/jpeg', 'application/pdf'])
                    ->maxSize(20480)
                    ->label('Subir documento')
                    ->dehydrated(fn ($get) => $get('documento_tipo') === 'file')
                    ->required(fn ($get) => $get('documento_tipo') === 'file')
                    ->visible(fn ($get) => $get('documento_tipo') === 'file')
                    //Como puede ser que el registro sea url o documento solo se tiene que conectar con el resultado anterior si la condicion se cumple
                    ->afterStateHydrated(function (callable $set, $state, $record) {
                        if ($record && !Str::startsWith($record->documento, ['http://', 'https://'])) {
                            $set('documento_file', $record->documento);
                        }
                    }),            
                TextInput::make('documento_url')
                    ->label('Documento (URL)')
                    ->url()
                    ->dehydrated(fn ($get) => $get('documento_tipo') === 'url')
                    ->required(fn ($get) => $get('documento_tipo') === 'url')
                    ->visible(fn ($get) => $get('documento_tipo') === 'url')
                    ->afterStateHydrated(function (callable $set, $state, $record) {
                        if ($record && Str::startsWith($record->documento, ['http://', 'https://'])) {
                            $set('documento_url', $record->documento);
                        }
                    }),
             ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('plantel.nombre'),
                TextColumn::make('nombre'),
                IconColumn::make('documento') // Adjust to your DB column name
                    ->label('Documento/url')
                    ->icon('heroicon-s-document')
                    ->url(fn ($record) => 
                        $record->documento
                            ? (Str::startsWith($record->documento, ['http://', 'https://'])
                                ? $record->documento
                                : asset('storage/' . $record->documento))
                            : null
                    )
                    ->openUrlInNewTab()
                    ->tooltip('abrir el documento/url')
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

        
        return parent::getEloquentQuery()
            ->whereIn('plantel_id', $plantelIds);
    }

    public static function getPluralLabel(): string
    {
        return 'Sistema Dual';
    }

    public static function getNavigationGroup(): ?string
    {
        return 'Vinculación';
    }
}
