<?php

namespace App\Filament\Resources\Users;

use App\Filament\Resources\Users\Pages\CreateUser;
use App\Filament\Resources\Users\Pages\EditUser;
use App\Filament\Resources\Users\Pages\ListUsers;
use App\Filament\Resources\Users\Schemas\UserForm;
use App\Filament\Resources\Users\Tables\UsersTable;
use App\Models\Plantel;
use App\Models\User;
use BackedEnum;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Enums\GridDirection;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $label = 'Usuario';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')->required(),
                TextInput::make('email')->required(),
                TextInput::make('password')
                    ->required(fn(string $context) => $context === 'create')
                    ->dehydrated(fn($state) => filled($state)),
                Toggle::make('admin')
                    ->label('Es administrador'),
                CheckboxList::make('plantel')
                    ->label('Permisos de planteles')
                    ->gridDirection(GridDirection::Row)
                    ->columns(3)
                    ->relationship('plantel', 'nombre')
                    ->bulkToggleable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('nombre'),
                TextColumn::make('email'),
                CheckboxColumn::make('admin')->label('Es administrador'),
                TextColumn::make('plantel.nombre')->label('Puede modificar')->listWithLineBreaks()->badge(),
            ])
            ->filters([
                SelectFilter::make('plantel.nombre')
                ->relationship('plantel', 'nombre')
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }

    //Solo mostrar el panel para usuarios con permisos de admin
    public static function shouldRegisterNavigation(): bool
    {
        return Auth::user()?->admin ?? false;
    }

    //Bloquear el acceso por url a usuarios sin el boolean administrador
    public static function canAccess(): bool
    {
        return Auth::user()?->admin ?? false;
    }
}
