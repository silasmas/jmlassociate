<?php

namespace App\Filament\Widgets;

use App\Models\avocat;
use Filament\Widgets\ChartWidget;
use Illuminate\Contracts\Support\Htmlable;
class AvocatsParSexeDonut extends ChartWidget
{
public function getHeading(): string
{
    return 'Avocats par sexe';
}
    protected function getData(): array
    {
        $m = avocat::where('sexe', 'M')->count();
        $f = avocat::where('sexe', 'F')->count();

        return [
            'labels' => ['Masculin', 'Féminin'],
            'datasets' => [[ 'data' => [$m, $f] ]],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }

    protected int|string|array $columnSpan = [
        'sm' => 12,
        'xl' => 4,
    ];
}
