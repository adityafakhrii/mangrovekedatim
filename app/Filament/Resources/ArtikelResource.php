<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Http\Controllers\ArtikelController;
use App\Filament\Widgets\ArtikelTypeOverview;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $label = 'Artikel';
    protected static ?string $pluralLabel = 'Artikel';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->label('Judul')
                    ->required(),
                Forms\Components\TextInput::make('penulis')
                    ->label('Penulis')
                    ->required(),
                Forms\Components\Textarea::make('konten')
                    ->label('Konten')
                    ->required(),
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('uploads/images')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('No')
                    ->sortable()
                    ->searchable()
                    ->getStateUsing(function ($rowLoop, $record) {
                        return $rowLoop->iteration;
                    }),
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->limit(20)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('penulis')
                    ->label('Penulis')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar')
                    ->sortable(),
                Tables\Columns\TextColumn::make('konten')
                    ->label('Konten')
                    ->limit(50)
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Define your table filters here
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ArtikelTypeOverview::class,
        ];
    }
}
