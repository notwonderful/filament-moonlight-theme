<div align="center">

# 🌙 Filament Moonlight Theme

![PHP Version](https://img.shields.io/badge/PHP-8.1%2B-blue?style=for-the-badge&logo=php)
![Filament Version](https://img.shields.io/badge/Filament-4.0%2B-FF2D20?style=for-the-badge&logo=filament)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

**A serene dark theme for Filament PHP, inspired by the beautiful Moonlight theme for JetBrains IDEs.**

*Reduce eye strain with soothing colors designed for comfortable filament panel usage.*

</div>

## Installation

### 1. Install the package via Composer:

```bash
composer require notwonderful/filament-moonlight-theme
```

### 2. Register the Plugin

In your Filament panel provider:

```php 
use notwonderful\FilamentMoonlightTheme\MoonlightTheme;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...your existing config
        ->plugin(MoonlightTheme::make());
}
```

### 3. Publish and Build Assets

After registering the plugin, publish and build the assets:

```bash
php artisan filament:assets
```

That's it! The theme will only apply in dark mode

## Screenshots

<div align="center">
    <img src="screenshots/users-table.png" alt="Users List">
</div>


## 📝 Changelog

Please see [CHANGELOG.md](CHANGELOG.md) for more information on what has changed recently.

## 🙏 Credits

This theme is based on the beautiful [Moonlight theme for JetBrains IDEs](https://plugins.jetbrains.com/plugin/18943-moonlight-dark-theme) created by **Francisco Marín** ([@franmc01](https://github.com/franmc01)).

## 📄 License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## ⭐ Support

If you like this theme, please consider giving it a star ⭐ on GitHub!

---

<div align="center">

**Made with ❤️ by [notwonderful](https://github.com/notwonderful)** Inspired by Francisco Marín's Moonlight Theme for JetBrains

</div>
