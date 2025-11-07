<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\publication;
use Filament\Widgets\ChartWidget;
use Illuminate\Contracts\Support\Htmlable;

class PublicationsPerMonthChart extends ChartWidget
{
public function getHeading(): string
{
    return 'Publications — 12 derniers mois';
}
    protected function getData(): array
    {
        $start = now()->copy()->subMonths(11)->startOfMonth();

        $raw = publication::query()
            ->where('created_at', '>=', $start)
            ->selectRaw('DATE_FORMAT(created_at, "%Y-%m") as ym, COUNT(*) as total')
            ->groupBy('ym')
            ->orderBy('ym')
            ->pluck('total', 'ym');

        $labels = [];
        $values = [];

        for ($i = 0; $i < 12; $i++) {
            $m = $start->copy()->addMonths($i);
            $key = $m->format('Y-m');
            $labels[] = $m->translatedFormat('M Y'); // ex: "sept. 2025"
            $values[] = (int) ($raw[$key] ?? 0);
        }

        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Publications',
                    'data' => $values,
                    'tension' => 0.3,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected int|string|array $columnSpan = 'full';
}
