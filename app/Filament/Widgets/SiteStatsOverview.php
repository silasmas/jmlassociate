<?php

namespace App\Filament\Widgets;

use App\Models\Avocat;
use App\Models\Publication;
use App\Models\Expertise;
use App\Models\Category;
use App\Models\Bureau;
use App\Models\categorie;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Carbon;
use Illuminate\Contracts\Support\Htmlable;
class SiteStatsOverview extends BaseWidget
{
      public function getHeading(): string
    {
        return 'Statistiques générales';
    }

    protected function getStats(): array
    {
        $now       = now();
        $start     = $now->copy()->subDays(30);
        $prevStart = $now->copy()->subDays(60);
        $prevEnd   = $start;

        // Totaux
        $totalAvocats      = Avocat::count();
        $totalPublications = Publication::count();
        $totalExpertises   = Expertise::count();
        $totalCategories   = categorie::count();
        $totalBureaux      = Bureau::count();
        $totalUsers        = User::count();

        // Nouveaux sur 30 jours
        $newAvocats      = Avocat::where('created_at', '>=', $start)->count();
        $newPublications = Publication::where('created_at', '>=', $start)->count();
        $newExpertises   = Expertise::where('created_at', '>=', $start)->count();
        $newCategories   = Categorie::where('created_at', '>=', $start)->count();
        $newBureaux      = Bureau::where('created_at', '>=', $start)->count();
        $newUsers        = User::where('created_at', '>=', $start)->count();

        // Période précédente (pour %)
        $prevAvocats      = Avocat::whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevPublications = Publication::whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevExpertises   = Expertise::whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevCategories   = Categorie::whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevBureaux      = Bureau::whereBetween('created_at', [$prevStart, $prevEnd])->count();
        $prevUsers        = User::whereBetween('created_at', [$prevStart, $prevEnd])->count();

        $trend = function (int $current, int $previous): array {
            $diff = $current - $previous;
            $pct  = $previous > 0 ? round(($diff / $previous) * 100) : null;
            $icon = $diff >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down';
            $color = $diff >= 0 ? 'success' : 'danger';
            $text  = $pct !== null ? (($diff >= 0 ? '+' : '').$pct.'% vs 30 j. préc.') : '—';
            return [$icon, $color, $text];
        };

        [$i1,$c1,$t1] = $trend($newAvocats, $prevAvocats);
        [$i2,$c2,$t2] = $trend($newPublications, $prevPublications);
        [$i3,$c3,$t3] = $trend($newExpertises, $prevExpertises);
        [$i4,$c4,$t4] = $trend($newCategories, $prevCategories);
        [$i5,$c5,$t5] = $trend($newBureaux, $prevBureaux);
        [$i6,$c6,$t6] = $trend($newUsers, $prevUsers);

        return [
            Stat::make('Avocats', number_format($totalAvocats))
                ->description("$newAvocats nouveaux / 30 j")
                ->descriptionIcon($i1)
                ->color($c1),

            Stat::make('Publications', number_format($totalPublications))
                ->description("$newPublications nouvelles / 30 j • $t2")
                ->descriptionIcon($i2)
                ->color($c2),

            Stat::make('Expertises', number_format($totalExpertises))
                ->description("$newExpertises nouvelles / 30 j • $t3")
                ->descriptionIcon($i3)
                ->color($c3),

            Stat::make('Catégories', number_format($totalCategories))
                ->description("$newCategories nouvelles / 30 j • $t4")
                ->descriptionIcon($i4)
                ->color($c4),

            Stat::make('Bureaux', number_format($totalBureaux))
                ->description("$newBureaux nouveaux / 30 j • $t5")
                ->descriptionIcon($i5)
                ->color($c5),

            Stat::make('Utilisateurs', number_format($totalUsers))
                ->description("$newUsers nouveaux / 30 j • $t6")
                ->descriptionIcon($i6)
                ->color($c6),
        ];
    }

    protected int|string|array $columnSpan = 'full';
}
