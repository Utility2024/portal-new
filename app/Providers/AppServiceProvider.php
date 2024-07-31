<?php

namespace App\Providers;

use App\Models\User;
use Spatie\Health\Facades\Health;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use BezhanSalleh\PanelSwitch\PanelSwitch;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Health::checks([
            OptimizedAppCheck::new(),
            DebugModeCheck::new(),
            EnvironmentCheck::new(),
        ]);

        PanelSwitch::configureUsing(function (PanelSwitch $panelSwitch) {
            $user = auth()->user();

            $icons = [];
            $labels = [];

            if ($user) {
                if ($user->isAdmin() || $user->isEditor() || $user->isUser()) {
                    $icons['esd'] = 'heroicon-o-bolt';
                    $labels['esd'] = 'ESD';
                }

                if ($user->isAdmin() || $user->isEditor() || $user->isUser()) {
                    $icons['utility'] = 'heroicon-o-adjustments-vertical';
                    $labels['utility'] = 'Utility';
                }

                if ($user->isAdmin() || $user->isEditor() || $user->isUser()) {
                    $icons['stock'] = 'heroicon-o-inbox-stack';
                    $labels['stock'] = 'Stock Material';
                }

                if ($user->isAdmin() || $user->isEditor() || $user->isUser()) {
                    $icons['admin'] = 'heroicon-o-cog-6-tooth';
                    $labels['admin'] = 'Setting';
                }

                if ($user->isAdmin() || $user->isEditor() || $user->isUser()) {
                    $icons['humanResource'] = 'heroicon-o-user-group';
                    $labels['humanResource'] = 'Human Resource';
                }
            }

            $panelSwitch
                // ->modalWidth('sm')
                ->modalHeading('Switch Portal')
                ->slideOver()
                ->icons($icons)
                ->iconSize(33)
                ->labels($labels)
                ->visible(fn (): bool => !empty($icons)); // Show the panel only if there are icons to display
        });

        Gate::define('viewPulse', function (User $user) {
            return $user->isAdmin();
        });
    }
}
