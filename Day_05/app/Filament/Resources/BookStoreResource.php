<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookStoreResource\Pages;
use App\Filament\Resources\BookStoreResource\RelationManagers;
use App\Models\BookStore;
use Faker\Calculator\Isbn;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\FormsComponent;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Storage;

class BookStoreResource extends Resource
{
    protected static ?string $model = BookStore::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('isbn')
    ->label('ISBN')
    ->placeholder('Enter the ISBN number'),
            TextInput::make('name')
    ->label('NAME')
    ->placeholder('Enter the book name'),
            TextInput::make('author')
    ->label('AUTHOR')
    ->placeholder('Enter the author name'),
            TextArea::make('description')
    ->label('DESCRIPTION')
    ->placeholder('Enter the description')
    ->rows(3),

    FileUpload::make('cover_book')
    ->image()
    ->directory('book-covers')
    ->disk('public')
    ->imagePreviewHeight(250)
    ->maxSize(900)
    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make( name:'isbn' ),
                Tables\Columns\TextColumn::make( name:'name' ),
                ImageColumn::make('cover_book'),
                Tables\Columns\TextColumn::make( name:'author' ),
                Tables\Columns\TextColumn::make( name:'description' ),
            ])
            ->filters([
Filter::make('author')
    ->form([
        TextInput::make('author')
            ->label('AUTHOR')
    ])
    ->query(function ($query, array $data) {
        return $query
            ->when($data['author'], fn ($query, $author) => $query->where('author', 'like', "%{$author}%"));
    }),

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
