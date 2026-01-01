<?php

declare(strict_types=1);

namespace App\Infrastructure\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

final class EventServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     *
     * @var array<class-string, array<int, class-string>>
     * @psalm-suppress NonInvariantDocblockPropertyType
     */
    protected $listen = [
        //
    ];

    /** {@inheritDoc} */
    #[\Override]
    public function boot(): void
    {
        //
    }

    /** {@inheritDoc} */
    #[\Override]
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
