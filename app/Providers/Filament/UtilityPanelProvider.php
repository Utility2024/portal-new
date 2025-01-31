<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use App\Filament\Auth\Login;
use Filament\Support\Colors\Color;
use Hasnayeen\Themes\ThemesPlugin;
use Filament\Http\Middleware\Authenticate;
use App\Filament\Widgets\LatestMeasurement;
use Hasnayeen\Themes\Http\Middleware\SetTheme;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Leandrocfe\FilamentApexCharts\FilamentApexChartsPlugin;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use App\Filament\Resources\UserResource\Widgets\UserStatsOverview;
use App\Filament\Resources\DailyPatrolResource\Widgets\LatestPatrol;
use App\Filament\Resources\DailyPatrolResource\Widgets\DailyPatrolChart;
use App\Filament\Resources\DailyPatrolResource\Widgets\DailyPatrolChart_2;
use App\Filament\Resources\DailyPatrolResource\Widgets\DailyPatrolChart_3;
use App\Filament\Resources\DailyPatrolResource\Widgets\DailyPatrolChart_4;

class UtilityPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->brandName('UTILITY PORTAL')
            ->id('utility')
            ->path('utility')
            ->login(Login::class)
            ->profile()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Utility/Resources'), for: 'App\\Filament\\Utility\\Resources')
            ->discoverPages(in: app_path('Filament/Utility/Pages'), for: 'App\\Filament\\Utility\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Utility/Widgets'), for: 'App\\Filament\\Utility\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
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
                SetTheme::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugins([
                ThemesPlugin::make(),
                FilamentApexChartsPlugin::make(),
            ]);
    }
}
