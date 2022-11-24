<?php

declare(strict_types=1);

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

final class Kernel extends ConsoleKernel
{
    /** {@inheritDoc} */
    protected function schedule(Schedule $schedule): void
    {
        //
    }

    /** {@inheritDoc} */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');
    }
}
