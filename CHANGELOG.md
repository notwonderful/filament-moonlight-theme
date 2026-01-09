# Changelog

All notable changes to `filament-moonlight-theme` will be documented in this file.

## 1.0.0 - 2025-01-06

- Initial release

## [1.0.1] - 2025-01-08

- Refactored to use Filament 4 Plugin API for better compatibility and maintainability

- Removed `FilamentMoonlightThemeServiceProvider` class (no longer needed)
- Changed CSS loading mechanism from render hooks to `FilamentAsset::register()`
- Added MoonlightTheme to make it registerable via panel provider

### Migration from 1.0.0

If you're upgrading from version 1.0.0, update your panel provider registration:

**Before:**
// ServiceProvider was auto-registered, no code needed in panel provider
