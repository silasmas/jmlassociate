<?php

namespace App\Filament\Widgets;

use App\Models\fonction;
use Filament\Widgets\ChartWidget;
use Illuminate\Contracts\Support\Htmlable;
class AvocatsPerFonctionChart extends ChartWidget
{
public function getHeading(): string
{
    return'Répartition des avocats par fonction (Top 8)' ;
}
    protected function getData(): array
    {
        $data = fonction::withCount('avocat')
            ->orderByDesc('avocat_count')
            ->take(8)
            ->get();

        $labels = $data->map(function ($f) {
            return $f->getTranslation('fonction', app()->getLocale()) ?? '—';
        })->toArray();

        $values = $data->pluck('avocat_count')->map(fn($v) => (int) $v)->toArray();

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Avocats',
                    'data'  => $values,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected int|string|array $columnSpan = [
        'sm' => 12,
        'xl' => 6,
    ];
}
