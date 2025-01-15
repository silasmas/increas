<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Devonab\FilamentEasyFooter\EasyFooterPlugin;
use Illuminate\Cookie\Middleware\EncryptCookies;
use DiogoGPinto\AuthUIEnhancer\AuthUIEnhancerPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Biostate\FilamentMenuBuilder\FilamentMenuBuilderPlugin;
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
            ->brandName('Dashboard INCREAS')
            ->brandLogo(asset('assets/logo/logo1.png'))
            ->brandLogoHeight(fn() => auth()->check() ? '3rem' : '7rem')
            ->favicon(asset('assets/logo/logo2.png'))
            ->colors([
                'primary' => "#009EE2",
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
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
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->plugins([
                EasyFooterPlugin::make()->withFooterPosition('footer')->withLoadTime('Cette page a été chargée dans')
                ->withLogo(asset('assets/logo/logo1.png'), 'https://increas.org')
                ->withLinks([
                    ['title' => 'A propos', 'url' => 'https://increas.org/about'],
                    ['title' => 'Privacy Policy', 'url' => 'https://increas.org/privacy-policy']
                ])->withBorder(),
                // FilamentMenuBuilderPlugin::make()
                // AuthUIEnhancerPlugin::make(),
            ]);
    }
}
