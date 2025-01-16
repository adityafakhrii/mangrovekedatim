<?php

namespace App\Filament\Widgets;

use App\Models\Artikel;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ArtikelTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $artikelCount = Artikel::count();

        return [
            Stat::make('Total Artikel', $artikelCount)
                ->description('Jumlah artikel yang ada')
                ->icon('heroicon-o-document-text')
                ->color('primary'),
        ];
    }
}
