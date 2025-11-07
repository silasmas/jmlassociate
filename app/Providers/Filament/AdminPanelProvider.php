<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Pages\Dashboard;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Illuminate\Support\Facades\Auth;
use Filament\Http\Middleware\Authenticate;
use App\Filament\Widgets\SiteStatsOverview;
use App\Filament\Widgets\LatestPublications;
use App\Filament\Widgets\AvocatsParSexeDonut;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use App\Filament\Widgets\AvocatsPerFonctionChart;
use Filament\Http\Middleware\AuthenticateSession;
use App\Filament\Widgets\PublicationsByCategoryPie;
use App\Filament\Widgets\PublicationsPerMonthChart;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
          ->colors([
                'primary' => "#12437A",
                // 'primary' => Color::Amber,
            ])
            ->authGuard('web')
            ->unsavedChangesAlerts()
            ->brandName('Dashboard JMLAssociates')
            ->brandLogo(asset('assets/images/jml1.png'))
            ->brandLogoHeight(fn() => Auth::check() ? '3rem' : '5rem')
            ->favicon(asset('assets/images/jml1.png'))
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                   SiteStatsOverview::class,
            PublicationsPerMonthChart::class,
            AvocatsPerFonctionChart::class,
            PublicationsByCategoryPie::class,
            AvocatsParSexeDonut::class,   // optionnel
            LatestPublications::class,
                // Widgets\AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->plugins([
                FilamentShieldPlugin::make(),
                // SpatieLaravelTranslatablePlugin::make()->defaultLocales(['fr', 'en']), // adapte selon ton besoin
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
