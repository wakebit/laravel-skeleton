<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

final class EventServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        //
    ];

    /** {@inheritDoc} */
    public function boot(): void
    {
        //
    }

    /** {@inheritDoc} */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
