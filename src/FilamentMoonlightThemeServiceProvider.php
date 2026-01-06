<?php

declare(strict_types=1);

namespace notwonderful\FilamentMoonlightTheme;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

/**
 * Service Provider for Filament Moonlight Theme
 *
 * Provides the Moonlight dark theme for Filament panels
 * Based on JetBrains Moonlight Theme colors designed by Francisco Marín
 */
class FilamentMoonlightThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        FilamentView::registerRenderHook(
            name: PanelsRenderHook::HEAD_END,
            hook: static function (): string {
                $cssPath = __DIR__ . '/../resources/css/theme.css';
                $cssContent = file_get_contents($cssPath);

                return Blade::render(<<<HTML
                    <style>
                        {$cssContent}
                    </style>
                HTML);
            }
        );
    }
}
