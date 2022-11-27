<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/wakebit/laravel-skeleton/actions"><img src="https://github.com/wakebit/laravel-skeleton/actions/workflows/static-analysis.yml/badge.svg" alt="Static Analysis"></a>
<a href="https://github.com/wakebit/laravel-skeleton/actions"><img src="https://github.com/wakebit/laravel-skeleton/actions/workflows/coding-standards.yml/badge.svg" alt="Coding Standards"></a>
<a href="https://github.com/wakebit/laravel-skeleton/actions"><img src="https://github.com/wakebit/laravel-skeleton/actions/workflows/tests.yml/badge.svg" alt="Tests"></a>
</p>

<p align="center">
<a href="https://github.com/wakebit/laravel-skeleton/actions"><img src="https://shepherd.dev/github/wakebit/laravel-skeleton/coverage.svg" alt="Type Coverage"></a>
<a href="https://github.com/wakebit/laravel-skeleton/actions"><img src="https://shepherd.dev/github/wakebit/laravel-skeleton/level.svg" alt="Psalm Level"></a>
</p>

## Laravel skeleton project
This skeleton includes:
- All classes marked as `final`.
- All PHP files marked with `declare(strict_types=1);`.
- Reduced dependency count (I don't need Sanctum, Pint, etc. I'll install them when they will required).
- Added static analysis tool - Psalm with max strict level as possible (1). My code should be clean and strong as possible.
- Added code style checker and beautifier.
- Added Github Actions for checking code style, running static analysis and tests.
- Project code located in `src` folder and base files have different from default namespaces.
- Useless comments were removed.
- Useless doc-blocks were removed and replaced with type hints when it's possible.
- Removed Facade and helper usages. I think Service Locator is an anti-pattern and prefer to use Dependency Injection.
- Removed built-in model factories. I prefer to use my own factory implementation outside of models. Models have too many responsibilities and removing at least factories from them looks a little bit better.
- Removed broadcast service provider and routes. It can be added when it will be required.
- Removed console routes. I prefer to use Command classes.
- Removed api & web route files. As it shows in practice, I don't use them every time when I'm creating new Laravel project and prefer to locate them in another places within their Service Providers like a `DashboardServiceProvider.php`, `dashboard_routes.php`.
- Removed not using database migration files.
- Removed test examples.
- Extended HTTP middlewares without any changes were replaced with vendors.
- Event service provider was cleaned: removed registration emailing.
- User model was cleaned: removed useless doc-blocks, traits, notifications.
- Created environment variables for application timezone, locale.
