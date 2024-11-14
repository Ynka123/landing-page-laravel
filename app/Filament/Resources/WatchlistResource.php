<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WatchlistResource\Pages;
use App\Filament\Resources\WatchlistResource\RelationManagers;
use App\Models\Watchlist;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WatchlistResource extends Resource
{
    protected static ?string $model = Watchlist::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul'),
                Forms\Components\TextInput::make('genre'),
                Forms\Components\Select::make('pengguna_id')
                ->relationship('pengguna', 'name')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->searchable(),
                Tables\Columns\TextColumn::make('genre'),
                Tables\Columns\TextColumn::make('pengguna.name')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListWatchlists::route('/'),
            'create' => Pages\CreateWatchlist::route('/create'),
            'edit' => Pages\EditWatchlist::route('/{record}/edit'),
        ];
    }
}
