<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Migrations\MigrationCreator;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /**
     * {@inheritDoc}
     *
     * @throws \InvalidArgumentException
     */
    #[\Override]
    public function register(): void
    {
        $this->app->extend(
            'migration.creator',
            static function (MigrationCreator $creator, Application $app): MigrationCreator {
                return new MigrationCreator(
                    $app->get(\Illuminate\Filesystem\Filesystem::class),
                    $app->resourcePath('stubs'),
                );
            },
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
