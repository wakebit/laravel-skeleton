<?php

declare(strict_types=1);

namespace App\Infrastructure;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as BaseKernel;

final class ConsoleKernel extends BaseKernel
{
    /** {@inheritDoc} */
    #[\Override]
    protected function schedule(Schedule $schedule): void
    {
        //
    }

    /** {@inheritDoc} */
    #[\Override]
    protected function commands(): void
    {
        $this->load(__DIR__ . '/../../Application/Console/Commands');
    }
}
