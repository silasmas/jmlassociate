<?php

namespace App\Filament\Widgets;

use App\Models\categorie;
use App\Models\Category;
use Filament\Widgets\ChartWidget;
use Illuminate\Contracts\Support\Htmlable;
class PublicationsByCategoryPie extends ChartWidget
{
    
public function getHeading(): string
{
    return 'Publications par catégorie';
}
    protected function getData(): array
    {
        $cats = categorie::withCount('publication')
            ->orderByDesc('publication_count')
            ->get();

        $labels = $cats->map(fn($c) => $c->getTranslation('nom', app()->getLocale()) ?? '—')->toArray();
        $values = $cats->pluck('publication_count')->map(fn($v) => (int) $v)->toArray();

        return [
            'labels' => $labels,
            'datasets' => [[ 'data' => $values ]],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected int|string|array $columnSpan = [
        'sm' => 12,
        'xl' => 6,
    ];
}
