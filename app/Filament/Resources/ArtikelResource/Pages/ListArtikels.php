<?php

namespace App\Filament\Resources\ArtikelResource\Pages;

use App\Filament\Resources\ArtikelResource;
use App\Filament\Widgets\ArtikelTypeOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListArtikels extends ListRecords
{
    protected static string $resource = ArtikelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            // ArtikelTypeOverview::class,
        ];
    }
}
