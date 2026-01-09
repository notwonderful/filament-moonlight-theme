<?php

namespace notwonderful\FilamentMoonlightTheme;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;

class MoonlightTheme implements Plugin
{
    public function getId(): string
    {
        return 'filament-moonlight-theme';
    }

    public static function make(): static
    {
        return new static;
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register(
            assets: [
                Css::make('moonlight-theme', __DIR__ . '/../resources/css/theme.css'),
            ],
            package: 'notwonderful/filament-moonlight-theme'
        );
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
