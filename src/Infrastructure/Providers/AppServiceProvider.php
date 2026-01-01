<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    /** {@inheritDoc} */
    #[\Override]
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
