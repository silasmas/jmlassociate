<?php

namespace App\Filament\Widgets;

use App\Models\Avocat;
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
        $m = Avocat::where('sexe', 'M')->count();
        $f = Avocat::where('sexe', 'F')->count();

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
