<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookStoreResource\Pages;
use App\Filament\Resources\BookStoreResource\RelationManagers;
use App\Models\BookStore;
use Faker\Calculator\Isbn;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BookStoreResource extends Resource
{
    protected static ?string $model = BookStore::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make( name:'isbn' ),
                Tables\Columns\TextColumn::make( name:'name' ),
                Tables\Columns\TextColumn::make( name:'author' ),
                Tables\Columns\TextColumn::make( name:'description' ),
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
            'index' => Pages\ListBookStores::route('/'),
            'create' => Pages\CreateBookStore::route('/create'),
            'edit' => Pages\EditBookStore::route('/{record}/edit'),
        ];
    }
}
